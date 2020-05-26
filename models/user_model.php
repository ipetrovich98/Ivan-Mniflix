<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model 
{
    private $_userID;
    private $_userName;
    private $_firstName;
    private $_lastName;
    private $_email;
    private $_password;
    private $_contactNo;
    private $_address;
    private $_dob;
    private $_timeStamp;
    private $_status;
    private $_profilePhoto;

    public function __construct() {
        parent::__construct();
        
    }

    public function setUserID($userID) {
        $this->_userID = $userID;
    }
 
    public function setUserName($userName) {
        $this->_userName = $userName;
    }

    public function setPassword($password) {
        $this->_password = $password;
    }
 
    public function setFirstname($firstName) {
        $this->_firstName = $firstName;
    }
 
    public function setLastName($lastName) {
        $this->_lastName = $lastName;
    }
 
    public function setEmail($email) {
        $this->_email = $email;
    }

     public function setAddress($address) {
        $this->_address = $address;
    }
 
    public function setTimeStamp($timeStamp) {
        $this->_timeStamp = $timeStamp;
    }
 
    public function setStatus($status) {
        $this->_status = $status;
    }

    public function setProfilePhoto($profilePhoto) {
        $this->_profilePhoto = $profilePhoto;
    }

    // check email in database
    public function emailCheck() {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email', $this->_email);
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return false;
        } else {
            return true;
        }
    }

    //create new user
    public function signup() {
        $hash = $this->hash($this->_password);
        $data = array(
            'user_name' => $this->_userName,
            'first_name' => $this->_firstName,
            'last_name' => $this->_lastName,
            'email' => $this->_email,
            'password' => $hash,
            'address' => $this->_address,
            'created_date' => $this->_timeStamp,
            'modified_date' => $this->_timeStamp,
            'status' => $this->_status,
        );
        $this->db->insert('users', $data);
        if (!empty($this->db->insert_id()) && $this->db->insert_id() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
     // generate Unique Username
    public function generateUniqueUserName($tableName, $string, $field, $key = NULL, $value = NULL) {
        $slug = $this->cleanUserName($string);
        $i = 0;
        $params = array();
        $params[$field] = $slug;
        if ($key)
            $params["$key !="] = $value;
        while ($this->db->where($params)->get($tableName)->num_rows()) {
            if (!preg_match('/[0-9]+$/', $slug))
                $slug .= '' . ++$i;
            else
                $slug = preg_replace('/[0-9]+$/', ++$i, $slug);
            $params [$field] = $slug;
        }
        return $slug;
    }
    // password hash
    public function hash($password) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        return $hash;
    }
    // clean Username
    public function cleanUserName($string) {
        //Lower case everything
        $string = strtolower(trim($string));
        //Make alphanumeric (removes all other characters)
        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
        //Clean up multiple dashes or whitespaces
        $string = preg_replace("/[\s-]+/", " ", $string);
        //Convert whitespaces and underscore to dash
        $string = preg_replace("/[\s_]/", "", $string);
        $string = rtrim($string, '');
        return $string;
    }

    // this method is called by doLogin method in Auth.php file!!!
    public function validate($email, $password){
                
        // Prep the query
        $this->db->select('*');
        $this->db->where('email', $email);
        $this->db->limit(1);
        
        // Run the query
        $query = $this->db->get('users');
        // Let's check if there are any results
        if($query->num_rows() == 1)
        {
            // If there is a user, then create session data
            $data = $query->row_array();
            if(password_verify($password, $data['password']))
            {
                $dat = array(
                    'userid' => $data['id'],
                    'password' => $data['password'],
                    'fname' => $data['first_name'],
                    'lname' => $data['last_name'],
                    'username' => $data['user_name'],
                    'email' => $data['email'],
                    'user_priority' => $data['user_priority'],
                    'validated' => true
                    );
                $this->session->set_userdata($dat);
                return $dat;
            } else {
                return false;
            }
        } else {
             // If the previous process did not validate then return false.
            return false;
        }
    }

    public function insert_data($data) {
    	$this->name = $data['name'];
    	$this->email = $data['email'];
    	$this->password = $data['password'];
    	$this->pimage = $data['pimage'];
    	$this->token = $this->randomUniqueToken(30);
    	if($this->db->insert('users', $this)) {
    		return "success";
    	} else {
    		return "error";
    	}
    }

    public function randomUniqueToken($length) {
    	$random = "";
    	srand((double) microtime() * 1000000);
    	$data = "ABcDE123IJKLMN67QRSTUVWXYZ";
    	$data .= "aBCdefghijklmn123opq45rs67tuv89wxyz";
    	$data .= "OFGH45OP89";
    	for($i = 0; $i < $length; $i++)
    	{
    		$random .= substr($data, (rand() % (strlen($data))), 1);
    	}
    	$random = uniqid() . $random;
    	return $random;
    }

    public function update_users($userID ,$userName, $firstName, $lastName, $email) {
        $data = [
            'user_name' => $userName,
            'email'=> $email,
            'last_name' => $lastName,
            'first_name'=> $firstName
        ];
        $this->db->where('id', $userID);
        $this->db->update('users', $data);
        // echo 'order has successfully been updated';
    }

    public function update_password($newPass, $oldPass)
    {
        $query=$this->db->query("select * from users");
        // var_dump($query->result());
        $result = $query->result();
        foreach ($result as $rep_item) 
        {
             // var_dump($rep_item);  
             // echo " next ---> ";  
             // echo $rep_item->password;
             // echo $rep_item->id;
             // echo $newPass;
             if(password_verify($oldPass, $rep_item->password))
             {
                $id = $rep_item->id;
                $hash = $this->hash($newPass);
                $data = [
                 'password' => $hash
                ];
                $this->db->where('id', $id);
                $this->db->update('users', $data);
             }
        }
    }

    public function get_all_videos() 
    {
        $query=$this->db->query("select * from video");
        $result = $query->result();
        // var_dump($result);
        return $result;
    }
    public function get_video_with_id($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $this->db->limit(1);
        
        // Run the query
        $query = $this->db->get('video');
        if($query->num_rows() == 1)
        {
            $data = $query->row_array();
            //  $dat = array(
            //     'userid' => $data['id'],
            //     'videoName' => $data['video_name'],
            //     'video' => $data['video_category'],
            //     'lname' => $data['video_rate']
            // );
            return $data;
        }
    }
    public function insert_userPriority($id, $priority)
    {
         $data = [
            'user_priority' => $priority
        ];
        $this->db->where('id', $id);
        $this->db->update('users', $data);
        // $query=$this->db->query("select * from users");
        // var_dump($query->result());
    }
}
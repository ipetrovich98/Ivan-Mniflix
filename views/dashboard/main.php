<!-- home -->
	<section class="home">
		<!-- home bg -->
		<div class="owl-carousel home__bg">
			<div class="item home__cover" data-bg="<?php echo asset_url(); ?>img/home/home__bg.jpg"></div>
			<div class="item home__cover" data-bg="<?php echo asset_url(); ?>img/home/home__bg.jpg"></div>
			<div class="item home__cover" data-bg="<?php echo asset_url(); ?>img/home/home__bg.jpg"></div>
			<div class="item home__cover" data-bg="<?php echo asset_url(); ?>img/home/home__bg.jpg"></div>
		</div>
		<!-- end home bg -->

		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="home__title"><b>NEW ITEMS</b> OF THIS SEASON</h1>

					<button class="home__nav home__nav--prev" type="button">
						<i class="icon ion-ios-arrow-round-back"></i>
					</button>   
					<button class="home__nav home__nav--next" type="button">
						<i class="icon ion-ios-arrow-round-forward"></i>
					</button>
				</div>

				<div class="col-12">
					<div class="owl-carousel home__carousel">
							<div class="item">
								<!-- card -->
								<div class="card card--big">
									<div class="card__cover">
										<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
                                        <!-- https://youtu.be/RMEFMfGQkmA  -->
										<a href="<?php echo base_url(); ?>secure/video_1" class="card__play">
											<i class="icon ion-ios-play"></i>
										</a>
									</div>
									<div class="card__content">
										<h3 class="card__title"><a href="#"><?php echo $video_info['0']['videoName']; ?></a></h3>
										<span class="card__category">
											<a href="#"><?php echo $video_info['0']['videoCategory']; ?></a>
										<!-- 	<a href="#">Triler</a> -->
										</span>
										<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['0']['videoRate'] ?></span>
										<div style = " display: block; position: relative;width: 37%!important;height: 14px;background-color: rgb(208, 32, 73);border-radius: 10px;">
											<span style = "color: rgb(239, 241, 245);font-size: 72%;position: relative;bottom: 50%;left: 11px;">CINEMATIC</span>
											<!-- <span style = "color: rgb(249, 217, 217);
											      background-color: rgb(239, 139, 68);
											      padding: 2px;
												  border-radius: 10%;">Premium</span>
											<span style = "color: rgb(96, 134, 86);
														   background-color: rgb(113, 204, 97);
														   border-radius: 10%;
														   padding: 2px;">Free</span> -->
										</div>
									</div>
								</div>
								<!-- end card -->
							</div>

							<div class="item">
								<!-- card -->
								<div class="card card--big">
									<div class="card__cover">
										<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
										<a href="<?php echo base_url(); ?>secure/video_2" class="card__play">
											<i class="icon ion-ios-play"></i>
										</a>
									</div>
									<div class="card__content">
										<h3 class="card__title"><a href="#"><?php echo $video_info['1']['videoName']; ?></a></h3>
										<span class="card__category">
											<a href="#"><?php echo $video_info['1']['videoCategory']; ?></a>
										</span>
										<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['1']['videoRate']; ?></span>
										<div style = " display: block; position: relative;width: 37%!important;height: 14px;background-color: rgb(239, 139, 68);border-radius: 10px;">
											<span style = "color: rgb(239, 241, 245);font-size: 72%;position: relative;bottom: 50%;left: 11px;">PREMIUM</span>
											<!-- <span style = "color: rgb(96, 134, 86);
														   background-color: rgb(113, 204, 97);
														   border-radius: 10%;
														   padding: 2px;">Free</span> -->
										</div>
									</div>
								</div>
								<!-- end card -->
							</div>

							<div class="item">
								<!-- card -->
								<div class="card card--big">
									<div class="card__cover">
										<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
										<a href="<?php echo base_url(); ?>secure/video_3" class="card__play">
											<i class="icon ion-ios-play"></i>
										</a>
									</div>
									<div class="card__content">
										<h3 class="card__title"><a href="#"><?php echo $video_info['2']['videoName']; ?></a></h3>
										<span class="card__category">
											<a href="#"><?php echo $video_info['2']['videoCategory']; ?></a>
										</span>
										<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['2']['videoRate']; ?></span>
										<div style = " display: block;position: relative;width: 27%!important;height: 14px;background-color: rgb(84, 138, 26);border-radius: 10px;">
											<span style = "color: rgb(239, 241, 245);font-size: 72%;position: relative;bottom: 50%;left: 19px;">FREE</span>
										</div>
									</div>
								</div>
								<!-- end card -->
							</div>

							<div class="item">
								<!-- card -->
								<div class="card card--big">
									<div class="card__cover">
										<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
										<a href="<?php echo base_url(); ?>secure/video_4" class="card__play">
											<i class="icon ion-ios-play"></i>
										</a>
									</div>
									<div class="card__content">
										<h3 class="card__title"><a href="#"><?php echo $video_info['3']['videoName']; ?></a></h3>
										<span class="card__category">
											<a href="#"><?php echo $video_info['3']['videoCategory']; ?></a>
										</span>
										<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['3']['videoRate']; ?></span>
										<div style = " display: block; position: relative;width: 37%!important;height: 14px;background-color: rgb(208, 32, 73);border-radius: 10px;">
											<span style = "color: rgb(239, 241, 245);font-size: 72%;position: relative;bottom: 50%;left: 11px;">CINEMATIC</span>
											<!-- <span style = "color: rgb(249, 217, 217);
											      background-color: rgb(239, 139, 68);
											      padding: 2px;
												  border-radius: 10%;">Premium</span>
											<span style = "color: rgb(96, 134, 86);
														   background-color: rgb(113, 204, 97);
														   border-radius: 10%;
														   padding: 2px;">Free</span> -->
										</div>
									</div>
								</div>
								<!-- end card -->
							</div>

							<div class="item">
								<!-- card -->
								<div class="card card--big">
									<div class="card__cover">
										<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
                                        <!-- https://youtu.be/RMEFMfGQkmA  -->
										<a href="<?php echo base_url(); ?>secure/video_5" class="card__play">
											<i class="icon ion-ios-play"></i>
										</a>
									</div>
									<div class="card__content">
										<h3 class="card__title"><a href="#"><?php echo $video_info['4']['videoName']; ?></a></h3>
										<span class="card__category">
											<a href="#"><?php echo $video_info['4']['videoCategory']; ?></a>
										<!-- 	<a href="#">Triler</a> -->
										</span>
										<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['4']['videoRate'] ?></span>
										<div style = " display: block; position: relative;width: 37%!important;height: 14px;background-color: rgb(208, 32, 73);border-radius: 10px;">
											<span style = "color: rgb(239, 241, 245);font-size: 72%;position: relative;bottom: 50%;left: 11px;">CINEMATIC</span>
											<!-- <span style = "color: rgb(249, 217, 217);
											      background-color: rgb(239, 139, 68);
											      padding: 2px;
												  border-radius: 10%;">Premium</span>
											<span style = "color: rgb(96, 134, 86);
														   background-color: rgb(113, 204, 97);
														   border-radius: 10%;
														   padding: 2px;">Free</span> -->
										</div>
									</div>
								</div>
								<!-- end card -->
							</div>

							<div class="item">
								<!-- card -->
								<div class="card card--big">
									<div class="card__cover">
										<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
                                        <!-- https://youtu.be/RMEFMfGQkmA  -->
										<a href="<?php echo base_url(); ?>secure/video_6" class="card__play">
											<i class="icon ion-ios-play"></i>
										</a>
									</div>
									<div class="card__content">
										<h3 class="card__title"><a href="#"><?php echo $video_info['5']['videoName']; ?></a></h3>
										<span class="card__category">
											<a href="#"><?php echo $video_info['5']['videoCategory']; ?></a>
										<!-- 	<a href="#">Triler</a> -->
										</span>
										<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['5']['videoRate'] ?></span>
										<div style = " display: block; position: relative;width: 37%!important;height: 14px;background-color: rgb(239, 139, 68);border-radius: 10px;">
											<!-- <span style = "color: rgb(198, 205, 230);
											      background-color: rgb(208, 32, 73);
											      border-radius: 10%;
											      padding: 2px;">Cinematic</span> -->
											<span style = "color: rgb(239, 241, 245);font-size: 72%;position: relative;bottom: 50%;left: 11px;">PREMIUM</span>
											<!-- <span style = "color: rgb(96, 134, 86);
														   background-color: rgb(113, 204, 97);
														   border-radius: 10%;
														   padding: 2px;">Free</span> -->
										</div>
									</div>
								</div>
								<!-- end card -->
							</div>

							<div class="item">
								<!-- card -->
								<div class="card card--big">
									<div class="card__cover">
										<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
                                        <!-- https://youtu.be/RMEFMfGQkmA  -->
										<a href="<?php echo base_url(); ?>secure/video_7" class="card__play">
											<i class="icon ion-ios-play"></i>
										</a>
									</div>
									<div class="card__content">
										<h3 class="card__title"><a href="#"><?php echo $video_info['6']['videoName']; ?></a></h3>
										<span class="card__category">
											<a href="#"><?php echo $video_info['6']['videoCategory']; ?></a>
										<!-- 	<a href="#">Triler</a> -->
										</span>
										<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['6']['videoRate'] ?></span>
										<div style = " display: block; position: relative;width: 37%!important;height: 14px;background-color: rgb(113, 204, 97);border-radius: 10px;">
											<!-- <span style = "color: rgb(198, 205, 230);
											      background-color: rgb(208, 32, 73);
											      border-radius: 10%;
											      padding: 2px;">Cinematic</span>
											<span style = "color: rgb(249, 217, 217);
											      background-color: rgb(239, 139, 68);
											      padding: 2px;
												  border-radius: 10%;">Premium</span> -->
											<span style = "color: rgb(239, 241, 245);font-size: 72%;position: relative;bottom: 50%;left: 11px;">FREE</span>
										</div>
									</div>
								</div>
								<!-- end card -->
							</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- end home -->

<!-- content -->
	<section class="content">
		<div class="content__head">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- content title -->
						<h2 class="content__title">New items</h2>
						<!-- end content title -->

						<!-- content tabs nav -->
						<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">NEW RELEASES</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">MOVIES</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">TV SERIES</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">CARTOONS</a>
							</li>
						</ul>
						<!-- end content tabs nav -->

						<!-- content mobile tabs nav -->
						<div class="content__mobile-tabs" id="content__mobile-tabs">
							<div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<input type="button" value="New items">
								<span></span>
							</div>

							<div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">NEW RELEASES</a></li>

									<li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">MOVIES</a></li>

									<li class="nav-item"><a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">TV SERIES</a></li>

									<li class="nav-item"><a class="nav-link" id="4-tab" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">CARTOONS</a></li>
								</ul>
							</div>
						</div>
						<!-- end content mobile tabs nav -->
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<!-- content tabs -->
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
					<div class="row">
						<!-- card -->
						<div class="col-6 col-sm-12 col-lg-6">
							<div class="card card--list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">
											<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
											<a href="<?php echo base_url(); ?>secure/video_1" class="card__play">
												<i class="icon ion-ios-play"></i>
											</a>
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div class="card__content">
											<h3 class="card__title"><a href="#"><?php echo $video_info['0']['videoName']; ?></a></h3>
											<span class="card__category">
												<a href="#"><?php echo $video_info['0']['videoCategory']; ?></a>
											</span>

											<div class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['0']['videoRate'] ?></span>

												<ul class="card__list">
													<li>HD</li>
													<li>16+</li>
												</ul>
												<div style = "display: inline; margin-left:2%;">
													<span style="color: rgb(198, 205, 230);
										                         background-color: rgb(208, 32, 73);
										                         border-radius: 12px;
										                         padding: 5px;
										                         font-size: 85%;">
								                     	Cinematic
								                 	</span>
												</div>
											</div>

											<div class="card__description">
												<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-12 col-lg-6">
							<div class="card card--list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">
											<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
											<a href="<?php echo base_url(); ?>secure/video_2" class="card__play">
												<i class="icon ion-ios-play"></i>
											</a>
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div class="card__content">
											<h3 class="card__title"><a href="#"><?php echo $video_info['1']['videoName']; ?></a></h3>
											<span class="card__category">
												<a href="#"><?php echo $video_info['1']['videoCategory']; ?></a>
											</span>

											<div class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['1']['videoRate']; ?></span>

												<ul class="card__list">
													<li>HD</li>
													<li>16+</li>
												</ul>
												<div style = "display: inline; margin-left: 2%;">
													<span style="color: rgb(198, 205, 230);
															     background-color: rgb(239, 139, 68);
															     border-radius: 12px;
															     padding: 5px;
															     font-size: 85%;">
													 	Premium
													</span>	
												</div>
											</div>

											<div class="card__description">
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-12 col-lg-6">
							<div class="card card--list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">
											<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
											<a href="<?php echo base_url(); ?>secure/video_3" class="card__play">
												<i class="icon ion-ios-play"></i>
											</a>
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div class="card__content">
											<h3 class="card__title"><a href="#"><?php echo $video_info['2']['videoName']; ?></a></h3>
											<span class="card__category">
												<a href="#"><?php echo $video_info['2']['videoCategory']; ?></a>
											</span>

											<div class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['2']['videoRate']; ?></span>

												<ul class="card__list">
													<li>HD</li>
													<li>16+</li>
												</ul>
												<div style = "display: inline; margin-left: 2%; ">
													<span style = "color: rgb(87, 97, 132);
																   background-color: rgb(113, 204, 97);
																   border-radius: 12px;
																   padding: 5px;
																   font-size: 85%;">
														Free
													</span>
												</div>
											</div>

											<div class="card__description">
												<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-12 col-lg-6">
							<div class="card card--list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">
											<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
											<a href="<?php echo base_url(); ?>secure/video_4" class="card__play">
												<i class="icon ion-ios-play"></i>
											</a>
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div class="card__content">
											<h3 class="card__title"><a href="#"><?php echo $video_info['3']['videoName']; ?></a></h3>
											<span class="card__category">
												<a href="#"><?php echo $video_info['3']['videoCategory']; ?></a>
											</span>

											<div class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['3']['videoRate']; ?></span>

												<ul class="card__list">
													<li>HD</li>
													<li>16+</li>
												</ul>
												<div style = "display: inline; margin-left:2%;">
													<span style = "color: rgb(198, 205, 230);
																   background-color: rgb(208, 32, 73);
																   border-radius: 12px;
																   padding: 5px;
																   font-size: 85%;">
														Cinematic
													</span>			
												</div>
											</div>

											<div class="card__description">
												<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-12 col-lg-6">
							<div class="card card--list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">
											<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
											<a href="<?php echo base_url(); ?>secure/video_1" class="card__play">
												<i class="icon ion-ios-play"></i>
											</a>
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div class="card__content">
											<h3 class="card__title"><a href="#"><?php echo $video_info['0']['videoName']; ?></a>
											</h3>
											<span class="card__category">
												<a href="#"><?php echo $video_info['0']['videoCategory']; ?></a>
												<!-- <a href="#">Triler</a> -->
											</span>

											<div class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['0']['videoRate'] ?></span>

												<ul class="card__list">
													<li>HD</li>
													<li>16+</li>
												</ul>
												<div style = "display: inline; margin-left:2%;">
													<span style = "color: rgb(198, 205, 230);
																   background-color: rgb(208, 32, 73);
																   border-radius: 12px;
																   padding: 5px;
																   font-size: 85%;">
														Cinematic
													</span>
												</div>
											</div>

											<div class="card__description">
												<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-12 col-lg-6">
							<div class="card card--list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">
											<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
											<a href="<?php echo base_url(); ?>secure/video_2" class="card__play">
												<i class="icon ion-ios-play"></i>
											</a>
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div class="card__content">
											<h3 class="card__title"><a href="#"><?php echo $video_info['1']['videoName']; ?></a>
											</h3>
											<span class="card__category">
												<a href="#"><?php echo $video_info['1']['videoCategory']; ?></a>
											</span>

											<div class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['1']['videoRate']; ?></span>

												<ul class="card__list">
													<li>HD</li>
													<li>16+</li>
												</ul>
												<div style = "display: inline; margin-left: 2%;">
													<span style = "color: rgb(198, 205, 230);
												    			   background-color: rgb(239, 139, 68);
													               border-radius: 12px;
																   padding: 5px;
																   font-size: 85%;">
													   Premium
													</span>					
												</div>
											</div>

											<div class="card__description">
												<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end card -->
					</div>
				</div>

				<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
					<div class="row">
						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_1" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['0']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['0']['videoCategory']; ?></a>
										<!-- <a href="#">Triler</a> -->
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['0']['videoRate'] ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_2" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['1']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['1']['videoCategory']; ?></a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['1']['videoRate']; ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_3" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['2']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['2']['videoCategory']; ?></a>
										<!-- <a href="#">Drama</a>
										<a href="#">Music</a> -->
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['2']['videoRate']; ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_4" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['3']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['3']['videoCategory']; ?></a>
										<!-- <a href="#">Drama</a> -->
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['3']['videoRate']; ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_1" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['0']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['0']['videoCategory']; ?></a>
										<!-- <a href="#">Triler</a> -->
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['0']['videoRate'] ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_2" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['1']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['1']['videoCategory']; ?></a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['1']['videoRate']; ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_3" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['2']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['2']['videoCategory']; ?></a>
										<!-- <a href="#">Drama</a>
										<a href="#">Music</a> -->
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['2']['videoRate']; ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_4" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['3']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['3']['videoCategory']; ?></a>
										<!-- <a href="#">Drama</a> -->
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['3']['videoRate']; ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_1" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['0']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['0']['videoCategory']; ?></a>
										<!-- <a href="#">Triler</a> -->
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['0']['videoRate'] ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_2" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['1']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['1']['videoCategory']; ?></a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['1']['videoRate']; ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_3" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['2']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['2']['videoCategory']; ?></a>
										<!-- <a href="#">Drama</a>
										<a href="#">Music</a> -->
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['2']['videoRate']; ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_4" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['3']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['3']['videoCategory']; ?></a>
										<!-- <a href="#">Drama</a> -->
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['3']['videoRate']; ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->
					</div>
				</div>

				<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab">
					<div class="row">
						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_1" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['0']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['0']['videoCategory']; ?></a>
										<!-- <a href="#">Triler</a> -->
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['0']['videoRate'] ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_2" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['1']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['1']['videoCategory']; ?></a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['1']['videoRate']; ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_3" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['2']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['2']['videoCategory']; ?></a>
										<!-- <a href="#">Drama</a>
										<a href="#">Music</a> -->
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['2']['videoRate']; ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_4" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['3']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['3']['videoCategory']; ?></a>
										<!-- <a href="#">Drama</a> -->
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['3']['videoRate']; ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_1" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['0']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['0']['videoCategory']; ?></a>
										<!-- <a href="#">Triler</a> -->
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['0']['videoRate'] ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_2" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['1']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['1']['videoCategory']; ?></a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['1']['videoRate']; ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_3" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['2']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['2']['videoCategory']; ?></a>
										<!-- <a href="#">Drama</a>
										<a href="#">Music</a> -->
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['2']['videoRate']; ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_4" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['3']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['3']['videoCategory']; ?></a>
										<!-- <a href="#">Drama</a> -->
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['3']['videoRate']; ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_1" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['0']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['0']['videoCategory']; ?></a>
										<!-- <a href="#">Triler</a> -->
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['0']['videoRate'] ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_2" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['1']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['1']['videoCategory']; ?></a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['1']['videoRate']; ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_3" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['2']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['2']['videoCategory']; ?></a>
										<!-- <a href="#">Drama</a>
										<a href="#">Music</a> -->
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['2']['videoRate']; ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_4" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['3']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['3']['videoCategory']; ?></a>
										<!-- <a href="#">Drama</a> -->
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['3']['videoRate']; ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->
					</div>
				</div>

				<div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="4-tab">
					<div class="row">
						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_1" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['0']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['0']['videoCategory']; ?></a>
										<!-- <a href="#">Triler</a> -->
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['0']['videoRate'] ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_2" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['1']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['1']['videoCategory']; ?></a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['1']['videoRate']; ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_3" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['2']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['2']['videoCategory']; ?></a>
										<!-- <a href="#">Drama</a>
										<a href="#">Music</a> -->
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['2']['videoRate']; ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_4" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['3']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['3']['videoCategory']; ?></a>
										<!-- <a href="#">Drama</a> -->
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['3']['videoRate']; ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_1" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['0']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['0']['videoCategory']; ?></a>
										<!-- <a href="#">Triler</a> -->
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['0']['videoRate'] ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_2" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['1']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['1']['videoCategory']; ?></a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['1']['videoRate']; ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_3" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['2']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['2']['videoCategory']; ?></a>
										<!-- <a href="#">Drama</a>
										<a href="#">Music</a> -->
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['2']['videoRate']; ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_4" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['3']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['3']['videoCategory']; ?></a>
										<!-- <a href="#">Drama</a> -->
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['3']['videoRate']; ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_1" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['0']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['0']['videoCategory']; ?></a>
										<!-- <a href="#">Triler</a> -->
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['0']['videoRate'] ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_2" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['1']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['1']['videoCategory']; ?></a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['1']['videoRate']; ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_3" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['2']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['2']['videoCategory']; ?></a>
										<!-- <a href="#">Drama</a>
										<a href="#">Music</a> -->
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['2']['videoRate']; ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
									<a href="<?php echo base_url(); ?>secure/video_4" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?php echo $video_info['3']['videoName']; ?></a></h3>
									<span class="card__category">
										<a href="#"><?php echo $video_info['3']['videoCategory']; ?></a>
										<!-- <a href="#">Drama</a> -->
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['3']['videoRate']; ?></span>
								</div>
							</div>
						</div>
						<!-- end card -->
					</div>
				</div>
			</div>
			<!-- end content tabs -->
		</div>
	</section>
<!-- end content -->

<!-- expected premiere -->
	<section class="section section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<h2 class="section__title">Expected premiere</h2>
				</div>
				<!-- end section title -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
							<a href="<?php echo base_url(); ?>secure/video_1" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#"><?php echo $video_info['0']['videoName']; ?></a></h3>
							<span class="card__category">
								<a href="#"><?php echo $video_info['0']['videoCategory']; ?></a>
								<!-- <a href="#">Triler</a> -->
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['0']['videoRate'] ?></span>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
							<a href="<?php echo base_url(); ?>secure/video_2" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#"><?php echo $video_info['1']['videoName']; ?></a></h3>
							<span class="card__category">
								<a href="#"><?php echo $video_info['1']['videoCategory']; ?></a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['1']['videoRate']; ?></span>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
							<a href="<?php echo base_url(); ?>secure/video_3" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#"><?php echo $video_info['2']['videoName']; ?></a></h3>
							<span class="card__category">
								<a href="#"><?php echo $video_info['2']['videoCategory']; ?></a>
							<!-- 	<a href="#">Drama</a>
								<a href="#">Music</a> -->
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['2']['videoRate']; ?></span>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
							<a href="<?php echo base_url(); ?>secure/video_4" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#"><?php echo $video_info['3']['videoName']; ?></a></h3>
							<span class="card__category">
								<a href="#"><?php echo $video_info['3']['videoCategory']; ?></a>
								<!-- <a href="#">Drama</a> -->
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['3']['videoRate']; ?></span>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
							<a href="<?php echo base_url(); ?>secure/video_1" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#"><?php echo $video_info['0']['videoName']; ?></a></h3>
							<span class="card__category">
								<a href="#"><?php echo $video_info['0']['videoCategory']; ?></a>
								<!-- <a href="#">Triler</a> -->
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['0']['videoRate'] ?></span>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="<?php echo asset_url(); ?>img/covers/cover.jpg" alt="">
							<a href="<?php echo base_url(); ?>secure/video_2" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#"><?php echo $video_info['1']['videoName']; ?></a></h3>
							<span class="card__category">
								<a href="#"><?php echo $video_info['1']['videoCategory']; ?></a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $video_info['1']['videoRate']; ?></span>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- section btn -->
				<div class="col-12">
					<a href="#" class="section__btn">Show more</a>
				</div>
				<!-- end section btn -->
			</div>
		</div>
	</section>
<!-- end expected premiere -->

<!-- partners -->
	<section class="section">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<h2 class="section__title section__title--no-margin">Our Partners</h2>
				</div>
				<!-- end section title -->

				<!-- section text -->
				<div class="col-12">
					<p class="section__text section__text--last-with-margin">It is a long <b>established</b> fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using.</p>
				</div>
				<!-- end section text -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="<?php echo asset_url(); ?>img/partners/partner.jpg" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="<?php echo asset_url(); ?>img/partners/partner.jpg" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="<?php echo asset_url(); ?>img/partners/partner.jpg" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="<?php echo asset_url(); ?>img/partners/partner.jpg" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="<?php echo asset_url(); ?>img/partners/partner.jpg" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="<?php echo asset_url(); ?>img/partners/partner.jpg" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->
			</div>
		</div>
	</section>
<!-- end partners -->


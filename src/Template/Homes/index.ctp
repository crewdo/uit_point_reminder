
<!-- MODAL WAIT -->
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="modal-wait" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Đóng</span>

                    </button>
                     <p class="modal-title jed-modal-title-wait text-center" id="modal-status">Đang xác thực...</p>

                </div>
                <div class="modal-body" id="modal-body">
                	<div class="progress">
  <div class="progress-bar  progress-bar-striped active jed-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"  style="width: 100%"></div>
</div>
                </div>
                <div class="modal-footer" style="text-align:center; font-size:15px">Chỉ một vài giây thôi...</div>
            </div>
        </div>
    </div>
</div>
<!-- MODAL SUCCESS -->

<div class="modal fade" id="modal-success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Đóng</span>

                    </button>
                     <p class="modal-title jed-modal-title-success text-center" id="modal-status">Đăng nhập thành công</p>

                </div>
                <div class="modal-body" id="modal-body">

                	<div class="jed-modal-body">Hệ thống đã xác thực được tài khoản của bạn, cảm ơn bạn đã tin tưởng sử dụng hệ thống, một email sẽ được gửi qua email bạn đăng ký sau một vài phút nữa.</div>
                </div>
           <!--      <div class="modal-footer">
                    
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- MODAL FAIL -->

<div class="modal fade" id="modal-fail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Đóng</span>

                    </button>
                     <p class="modal-title jed-modal-title-fail text-center" id="modal-status">Đăng nhập thất bại</p>

                </div>
                <div class="modal-body" id="modal-body">
                	<div class="jed-modal-body"> Xin lỗi, hệ thống không xác thực được tài khoản Daa của bạn, vui lòng kiểm tra lại thông tin.</div>
           <!--      <div class="modal-footer">
                    
                </div> -->
            </div>
        </div>
    </div>
</div>
</div>


<section class="hero" id="intro">
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-right navicon">
                  <a id="nav-toggle" class="nav_slide_button" href="#"><span></span></a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center inner">
					<div class="animatedParent">
						<h1 class="animated fadeInDown">POINT REMINDER</h1>
						<p class="animated fadeInUp text-below-h1">Hệ thống thông báo điểm thi mới cho sinh viên UIT</p>
					</div>
			   </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                  <a href="#login" class="learn-more-btn btn-scroll">Nhận Thông Báo</a>
                </div>
              </div>
            </div>
    </section>
	
	
    <!-- Navigation -->
    <div id="navigation">
        <nav class="navbar navbar-custom" role="navigation">
                              <div class="container">
                                    <div class="row">
                                          <div class="col-md-2">
                                                   <div class="site-logo">
                                                            <a href="index.html" class="brand">UITers</a>
                                                    </div>
                                          </div>
                                          

                                          <div class="col-md-10">
                         
                                                      <!-- Brand and toggle get grouped for better mobile display -->
                                          <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                                <i class="fa fa-bars"></i>
                                                </button>
                                          </div>
                                                      <!-- Collect the nav links, forms, and other content for toggling -->
                                                      <div class="collapse navbar-collapse" id="menu">
                                                            <ul class="nav navbar-nav navbar-right">
                                                                  <li class="active"><a href="#intro">Home</a></li>
                                                                  <li><a href="#login">Đăng nhập</a></li>
																   <li><a href="#about">Về hệ thống</a></li>
                                                                  <li><a href="#contact">Báo lỗi</a></li>				                                                     
                                                            </ul>
                                                      </div>
                                                      <!-- /.Navbar-collapse -->
                             
                                          </div>
                                    </div>
                              </div>
                              <!-- /.container -->
                        </nav>
    </div> 
    <!-- /Navigation -->  
 <section id="login" class="home-section nopadd-bot color-dark bg-gray text-center">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="animatedParent">
					<div class="section-heading text-center">
					<h2 class="h-bold animated bounceInDown">Đăng nhập để nhận thông báo</h2>
					<div class="divider-header"></div>
					</div>
					</div>
				</div>
			</div>

		</div>
		
		<div class="container">

			<div class="row marginbot-80">
				<div class="col-md-8 col-md-offset-2">
						<form id="contact-form">
						<div class="row marginbot-20">
							<div class="col-md-6 xs-marginbot-20">
								<input type="text" name="mssv" class="form-control input-lg" id="mssv" placeholder="Nhập MSSV" required="required" />
							</div>
							<div class="col-md-6">
								<input type="password" name="password" class="form-control input-lg" id="password" placeholder="Nhập mật khẩu" required="required" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group col-md-6">
								<input class="magic-radio" type="radio" name="radio" id="uit-email" value="1">
									<label for="uit-email"> Nhận qua email trường</label>
								</div>
								<div class="form-group col-md-6">
								<input class="magic-radio" type="radio" name="radio" id="email_other" value="2" checked>
									<label for="email_other"> Nhận qua email khác</label>
									</div>
							<!-- 	<div class="form-group col-md-6">
								<input class="magic-radio" type="radio" name="radio" id="sms" disabled="disabled">
									<label for="sms"> Nhận bằng SMS</label>
									</div> -->
								<div class="form-group extra">
								<input type="email" class="form-control input-lg " id="email_textbox" placeholder="Nhập email của bạn" />	
								</div>				
								<a class="btn btn-skin btn-lg btn-block" id="btnSubmit">
									Xác nhận</a>
							</div>
						</div>
						</form>
				</div>
			</div>	


		</div>
	</section>
	<!-- /Section: contact -->
	<!-- Section: about -->
    <section id="about" class="home-section color-dark bg-white">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="animatedParent">
					<div class="section-heading text-center animated bounceInDown">
					<h2 class="h-bold">Về hệ thống</h2>
					<div class="divider-header"></div>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="container">

		
        <div class="row">
		
		
            <div class="col-lg-8 col-lg-offset-2 animatedParent">		
				<div class="">
					<p>
					Cách hoạt động rất đơn giản, ai cũng có thể làm một cái, nhưng không ai thèm làm nên mình làm :)))
					</p>
					<p>
					Từ thông tin đăng nhập của các bạn, hệ thống sẽ truy xuất tới kết quả học tập, lưu lại thông tin. Thực hiện quá trình này 5 phút một lần, nếu có điểm mới cập nhật, hệ thống sẽ tìm ra điểm khác biệt, highlight nó lên và gửi một mail tới email các bạn đã đăng kí. Chỉ vậy thôi ^^
					</p>
				</div>
				<div class="text-center">
					<a href="#service" class="btn btn-skin btn-scroll">Xem screenshot</a>
				</div>
			
            </div>
		

        </div>		
		</div>

	</section>
	<!-- /Section: about -->
	
	
	<!-- Section: services -->
    <section id="service" class="home-section color-dark bg-gray">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div>
					<div class="section-heading text-center">
					<h2 class="h-bold">Screenshot</h2>
					<div class="divider-header"></div>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="text-center">
		<div class="container">

        <div class="row animatedParent">
            <div class="col-xs-12 col-sm-6 col-md-6">
				<div class="animated rotateInDownLeft">
                <div class="service-box jmarginbot50">
				<!-- 	<div class="service-icon">
						<span class="fa fa-laptop fa-2x"></span> 
					</div> -->
					<div class="service-desc">						
						<!-- <h5>Web Design</h5> -->
						<!-- <div class="divider-header"></div> -->
						<img src="/point/home/img/register.jpg" width="100%">
						
					</div>
                </div>
				</div>
            </div>
			<div class="col-xs-12 col-sm-6 col-md-6 ">
				<div class="animated rotateInDownLeft slow">
                <div class="service-box jmarginbot50">
				<!-- 	<div class="service-icon">
						<span class="fa fa-camera fa-2x"></span> 
					</div> -->
					<div class="service-desc">
						<img src="/point/home/img/newpoint.jpg" width="100%">
					</div>
                </div>
				</div>
            </div>
        </div>
  <!--        <div class="row animatedParent">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="animated rotateInDownLeft slower">
                <div class="service-box">
					<div class="service-icon">
						<span class="fa fa-code fa-2x"></span> 
					</div>
					<div class="service-desc">
						<img src="/point/home/img/reupdate-password.jpg" width="100%">
					</div>
                </div>
				</div>
            </div>
        </div> -->

        </div>		
		</div>
		</div>
	</section>
	<!-- /Section: services -->
	

	<!-- Section: works -->
   <!--  <section id="works" class="home-section color-dark text-center bg-white">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div>
					<div class="animatedParent">
					<div class="section-heading text-center">
					<h2 class="h-bold animated bounceInDown">What we have done</h2>
					<div class="divider-header"></div>
					</div>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="container">

            <div class="row animatedParent">
                <div class="col-sm-12 col-md-12 col-lg-12" >

                    <div class="row gallery-item">
                        <div class="col-md-3 animated fadeInUp">
							<a href="img/works/1.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
								<img src="img/works/1.jpg" class="img-responsive" alt="img">
							</a>
						</div>
						<div class="col-md-3 animated fadeInUp slow">
							<a href="img/works/2.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
								<img src="img/works/2.jpg" class="img-responsive" alt="img">
							</a>
						</div>
						<div class="col-md-3 animated fadeInUp slower">
							<a href="img/works/3.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
								<img src="img/works/3.jpg" class="img-responsive" alt="img">
							</a>
						</div>
						<div class="col-md-3 animated fadeInUp">
							<a href="img/works/4.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
								<img src="img/works/4.jpg" class="img-responsive" alt="img">
							</a>
						</div>
					</div>
	
                </div>
            </div>	
		</div>

	</section> -->
	<!-- /Section: works -->

	<!-- Section: contact -->
   
 <section id="contact" class="home-section nopadd-bot color-dark bg-gray text-center">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="animatedParent">
					<div class="section-heading text-center">
					<h2 class="h-bold animated bounceInDown">Báo lỗi & góp ý</h2>
					<div class="divider-header"></div>
					</div>
					</div>
				</div>
			</div>

		</div>
		
		<div class="container">

			<div class="row marginbot-80">
				<div class="col-md-8 col-md-offset-2">
						<form id="contact-form">
						<div class="row marginbot-20">
							<div class="col-md-12 xs-marginbot-20">
								<input type="email" class="form-control input-lg" placeholder="Nhập email của bạn" required="required" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
										<input type="text" class="form-control input-lg" id="subject" placeholder="Tiêu đề" required="required" />
								</div>
								<div class="form-group">
									<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
										placeholder="Tin nhắn..."></textarea>
								</div>						
								<button type="submit" class="btn btn-skin btn-lg btn-block" id="btnContactUs">
									Gửi vấn đề</button>
							</div>
						</div>
						</form>
				</div>
			</div>	


		</div>
	</section>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<ul class="footer-menu fontsize14">
						<li><a href="#intro">Home</a></li>
						<li><a href="#login">Đăng nhập</a></li>
					</ul>
				</div>
				<div class="col-md-6 text-right">
					<p>View on <a href="https://github.com/jed96/uit_point_reminder" target="_blank">GitHub</a></p>
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Bocor
                    -->
				</div>
			</div>	
		</div>
	</footer>
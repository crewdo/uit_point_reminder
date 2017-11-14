


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

                    <div class="jed-modal-body">Mật khẩu của bạn đã được cập nhật.</div>
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
                    <div class="jed-modal-body"> Xin lỗi, mật khẩu bạn nhập chưa chính xác, vui lòng kiểm tra lại!</div>
           <!--      <div class="modal-footer">
                    
                </div> -->
            </div>
        </div>
    </div>
</div>
</div>



    <!-- /Navigation -->  
 <section id="login" class="home-section nopadd-bot color-dark bg-gray text-center">
        <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="animatedParent">
                    <div class="section-heading text-center">
                    <h2 class="h-bold animated bounceInDown">Cập nhật lại password</h2>
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
                                <input type="text" name="mssv" class="form-control input-lg" id="mssv" placeholder="<?php echo $student ?>" disabled="disabled" />
                            </div>
                            <div class="col-md-6">
                                <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Nhập mật khẩu" required="required" />
                            </div>
                        </div>
                        <div class="row">            
                                <a class="btn btn-skin btn-lg btn-block" id="btnReupdatePassword">
                                    Xác nhận</a>
                            </div>
                        </div>
                        </form>
                </div>
            </div>  


        </div>
    </section>
    <!-- /Section: contact -->

    <footer  style="margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="footer-menu fontsize14">
                        <li> <?= $this->Html->link('Home', array('controller'=>'Homes', 'action'=>'index')) ?></li>
                    </ul>
                </div>
                <div class="col-md-6 text-right">
                    <p>View on <a href="https://github.com/jed96/uit_point_reminder" target="_blank">GitHub</a></p>
                </div>
            </div>  
        </div>
    </footer>

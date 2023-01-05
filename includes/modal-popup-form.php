<!--form Modal Popup-->
<div class="modal fade" id="popup_form">
    <div class="modal-dialog modal-dialog-centered">
        <div class="entry-box" data-form-type="signup_form">
            <form action="./data/leadMail.php" class="offr-frm leadForm" method="post" enctype="multipart/form-data">
                <div class="row h-100 justify-content-center">
                    <div class="col-lg-5 col-md-5 col-sm-5 popup_top pr-0">
                        <div class="text">
                            <h2>Let’s start</h2>
                            <h1>Your<br> Project</h1>
                        </div>
                        <div class="text_dis">
                            <div class="text_dis_in">
                                <h2>STARTED ON A</h2>
                                <h1>70% OFF</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-10 entry-right">
                        <div class="col-sm-12 p-0">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <div class="text_topfr">
                                <!-- <h2>Get Impressive Designs</h2> -->
                                <h4>DROP US YOUR DETAILS!</h4>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text set_inp_gr"><i class="fas fa-user"></i></span>

                                </div>
                                <input type="text" class="form-control" name="customer_name"
                                    placeholder="Enter Your Name" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text set_inp_gr"><i class="fas fa-envelope"></i></span>

                                </div>
                                <input type="text" class="form-control" name="customer_email"
                                    placeholder="Enter Your Email" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text set_inp_gr"><i class="fas fa-phone"></i></span>
                                </div>
                                <input type="text" class="form-control" name="phone_number" maxlength="15"
                                    placeholder="Phone Number" required>
                            </div>
                            <div class="input-group">
                                <div class="input-group-captcha">
                                    <img src="./captcha.php" alt="CAPTCHA" class="captcha-image">
                                    <i class="fas fa-redo refresh-captcha"></i>
                                    <!--<span class="input-group-text set_inp_gr"><i class="fas fa-phone"></i></span>-->
                                </div>
                                <input type="text" class="form-control inputCaptcha" name="captcha_challenge" pattern="[A-Z]{6}"
                                 placeholder="Enter the above captcha here" required>
                            </div>
                            <input type="hidden" id="package_id_lead" name="package_id" />
                            <input type="hidden" id="package_name_lead" name="package_name" />
                            <input type="hidden" id="package_price_lead" name="package_price" />

                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mb-0 mt-4">
                                <div id="formResult" class="slideformResult"></div>
                                <button type="submit" class="entery-submit" name="submit" id="signupBtn"
                                    value="submitted">
                                    Get In Touch
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
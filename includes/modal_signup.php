<!--form Modal Popup-->


<div class="modal fade" id="signup_from">
<div id="error">
</div>
    <div class="modal-dialog modal-dialog-centered">
        <div class="signForm" data-form-type="signup_form">
			<div id="msg"></div>
            <button type="button" class="closeSign" data-dismiss="modal">
                <img src="assets/images/closeico.webp" alt="">
            </button>

            <div class="col-12">
                <div class="tab" role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#signIn" aria-controls="profile" role="tab" data-toggle="tab"
                                aria-expanded="true">Sign in</a>
                        </li>
                        <li role="presentation" class=""><a href="#signUp" aria-controls="messages" role="tab"
                                data-toggle="tab" aria-expanded="false">Sign Up</a></li>
                    </ul>
                    <!-- Tab panes -->

                    <div class="tab-content tabs">
                        <div role="tabpanel" class="tab-pane fadesssss active in" id="signIn">
                           <form action="#" method="POST" enctype="multipart/form-data" id="loginForm">
								<div class="signupBox">
										<h3 class="title">Login Account</h3>
										<span class="description">or use you email for registration:</span>
										<div class="signHorizontal">
										<form action="#" method="post" enctype="multipart/form-data">
												<div class="form-group">
													<input type="email" class="form-control" placeholder="Email" name="user_email" id="user_email" >
												</div>
												<div class="form-group">
													<input type="password" class="form-control" placeholder="Password" name="user_password" id="User_password">
												</div>
												<div class="form-group">
													<input type="checkbox" class="checkbox">
													<span class="check-label">I agree to the <a href="">Terms</a> and <a
															href="">Privacy Policy.</a></span>
												</div>
												<button class="btn signup"  id="Signup" type="submit" name="savelogin">Sign in</button>
										</form>
										</div>
									</div>
						   </form>
                        </div>
                        <div role="tabpanel" class="tab-pane in" id="signUp">
                            <div class="signupBox">
                                <h3 class="title">Create Account</h3>
									<div class="signHorizontal">
									
										<form action="#" method="POST" enctype="multipart/form-data" id="registerForm">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Full Name"
													name="user_name" id="user_name">
											</div>
											<div class="form-group">
												<input type="Email" class="form-control" placeholder="Email"
													name="user_email" id="user_email">
											</div>
											<div class="form-group">
												<input type="password" class="form-control" placeholder="Password"
													name="user_password" id="user_password">
											</div>
											<div class="form-group">
												<input type="password" class="form-control" placeholder="Confirm Password"
													name="cpassword" id="cpassword">
											</div>
											<div class="form-group">
												<input type="checkbox" class="checkbox">
												<span class="check-label">I agree to the <a href="">Terms</a> and <a
														href="">Privacy Policy.</a></span>
											</div>
											<!-- <button class="btn signin">Sign in</button> -->
											<button class="btn signup" id="signup" type="submit" name="savedata">Sign</button>
										</form>
									</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
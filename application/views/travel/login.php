<!-- sign-block
			================================================== -->
            <section class="sign">
			<div class="sign__area mx-auto">
			
				<div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-sign" role="tabpanel" aria-labelledby="nav-sign-tab">

						<!-- sign-form-module -->
						<form class="sign-form" method="post" action="<?php echo base_url('travel'); ?>">
                            <h1>Login Page</h1>
							<label class="sign-form__label" for="username">
								
								
							Email address:
							</label><br>
							<?php echo form_error('email',  '<small class="text-danger">', '</small>'); ?>
							<input class="sign-form__input-text" type="text" name="email" id="email" placeholder="Email or Username" value="<?php echo set_value('email');  ?>" />
							<label class="sign-form__label" for="email">
							
							
							Password:
							</label><br>
							<?php echo form_error('password1',  '<small class="text-danger">', '</small>'); ?>
							<input class="sign-form__input-text" type="password" name="password1" id="password1" placeholder="Password" />
							<a class="sign-form__forget-link" href="#">Forget password?</a>

							<button  class="sign-form__submit" id="submit-loggin" type="submit">
								<i class="fa fa-sign-in" aria-hidden="true"></i>
								Login
							</button>
                            <div class="text-center">
                                <a href="<?php echo base_url(); ?>registnlog/registration">No Have Account? Regist Here</a>
                            </div>
						</form>

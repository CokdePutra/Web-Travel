<section class="sign">
		<?php $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! Your Account Has Been Created. Please Login</div>');?>
			<div class="sign__area mx-auto">
				<div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-sign" role="tabpanel" aria-labelledby="nav-sign-tab">

						<!-- sign-form-module -->
						<form class="sign-form" method="post" action="<?php echo base_url('registnlog/registration') ?>">
                            <h1>Form Regisration</h1>
						    <label class="sign-form__label" for="email">
								
							
							Username:
							</label><br>
							<?php echo form_error('name',  '<small class="text-danger">', '</small>'); ?>
							<input class="sign-form__input-text" type="text" name="name" id="name" placeholder="Enter your name" value="<?php echo set_value('name');  ?>" >
							<label class="sign-form__label" for="username">
								
                            
                            Email address:
						    </label><br>
                            <?php echo form_error('email',  '<small class="text-danger">', '</small>'); ?>
							<input class="sign-form__input-text" type="text" name="email" id="email" placeholder="Enter your email" value="<?php echo set_value('email');  ?>" >
					        <label class="sign-form__label" for="email">
                                
                            
                            Password:
					    	</label><br>
                            <?php echo form_error('password1',  '<small class="text-danger">', '</small>'); ?>
                        	<input class="sign-form__input-text" type="password" name="password1" id="password1" placeholder="Password" >
				            <label class="sign-form__label" for="password">
							
                            
                            Confirm Password:
							</label>
							<input class="sign-form__input-text" type="password" name="password2" id="password2" placeholder="Confirm Password" >
							
							<button class="sign-form__submit" type="submit" id="submit_signup">
								<i class="fa fa-sign-in" aria-hidden="true"></i>
								Sign Up
							</button>
                            <div class="text-center">
                                <a href="<?php echo base_url('registnlog'); ?>">Have Account? Login Here</a>
                            </div>
						</form>

						<!-- End sign-form-module -->
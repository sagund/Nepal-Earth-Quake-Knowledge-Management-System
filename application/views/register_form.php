<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="#">
<title>Login/Registration</title>
</head>
<link class="cssdeck" rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap_form.css">
<link class="cssdeck" rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css">


<div class="" id="loginModal">
	<div class="modal-header">
		<h3>Have an Account?</h3>
	</div>
	<!--<div class="modal-body">-->
		<div class="well">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#login" data-toggle="tab">Login</a></li>
				<li><a href="#create" data-toggle="tab">Create Account</a></li>
			</ul>
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane active in" id="login">
					<form class="form-horizontal" action='' method="POST">
						<fieldset>
							<div id="legend">
								<legend class="">Login</legend>
							</div>    
							<div class="control-group">
								<!-- Username -->
								<label class="control-label"  for="email">Email</label>
								<div class="controls">
									<input type="email" id="email" name="email" placeholder="" class="input-xlarge" required>
								</div>
							</div>
							
							<div class="control-group">
								<!-- Password-->
								<label class="control-label" for="password">Password</label>
								<div class="controls">
									<input type="password" id="password" name="password" placeholder="" class="input-xlarge" required>
								</div>
							</div>
							
							<div class="control-group">
								<!-- Button -->
								<div class="controls">
									<button class="btn btn-success">Login</button>
								</div>
                                <div class="controls">
	                                <a href="#">Forgot Password?</a>
                                </div>    
							</div>
						</fieldset>
					</form>                
				</div>
				<div class="tab-pane fade" id="create">
					<form class="form-horizontal" id="tab">
                    	<div class="control-group">
                    		<label class="control-label">First Name</label>
                       		<div class="controls">
								<input type="text" name="first_name" value="" class="input-xlarge" required>
                        	</div>
                        </div>
                        <div class="control-group">
                    		<label class="control-label">Middle Name</label>
                            <div class="controls">
								<input type="text" name="middle_name" value="" class="input-xlarge">
                            </div>
                        </div>        
						<div class="control-group">
                    		<label class="control-label">Last Name</label>
                            <div class="controls">
								<input type="text" name="last_name" value="" class="input-xlarge" required>
                            </div>
                        </div>    
                        <div class="control-group">
                    		<label class="control-label">Username</label>
                            <div class="controls">
								<input type="text" name="username" value="" class="input-xlarge" required>
                            </div>
                        </div>    
						<div class="control-group">
                    		<label class="control-label">Email</label>
                            <div class="controls">
								<input type="email" name="email" value="" class="input-xlarge" required>
                            </div>
                       </div>     
                        <div class="control-group">
                    		<label class="control-label">Password</label>
                            <div class="controls">
								<input type="password" name="password" value="" class="input-xlarge">
                            </div>
                        </div>    
                        <div class="control-group">
                    		<label class="control-label">Confirm Password</label>
                            <div class="controls">
								<input type="password" name="confirm_password" value="" class="input-xlarge" required>
                            </div>
                        </div>    
                        
                        <div class="control-group">
                    		<label class="control-label">Telephone/Mobile No.</label>
                            <div class="controls">
								<input type="tel" name="phone" value="" class="input-xlarge">
                            </div>
                        </div>        
                        
						<div class="control-group">
                    		<label class="control-label">City/Village</label>
                            <div class="controls">
								<input type="text" name="city" value="" class="input-xlarge" required>
                            </div>    
                        </div>
                        <div class="control-group">
                    		<label class="control-label">Country</label>
                            <div class="controls">
								<input type="text" name="country" value="" class="input-xlarge" required>
                            </div>
                        </div>    	
						<div class="control-group">
                        	<div class="controls">
                                <button type="submit" name="submit" class="btn btn-primary">Register</button>
                            
                                <button type="reset" class="btn btn-primary">Reset Form</button>
                            </div>
						</div>
					</form>
				</div>
			</div>
		</div>
	<!--</div>-->
</div>

<script class="cssdeck" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script class="cssdeck" src="<?php echo base_url();?>assets/js/bootstrap_form.js"></script>

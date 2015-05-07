<!--User Login Body-->    
	<div class="container">
		<div id="legend">
    		<legend>Login</legend>
		</div>
		<div class="row col-md-6">
        	<form class="form-horizontal" action="" method="POST">
                <fieldset>
                    <div class="well">
                        <div class="control-group">
                            <label class="control-label" for="email">E-mail</label>
                            <div class="controls">
                                <input type="email" id="email" name="email" placeholder="Enter Your Email" class="form-control  input-lg" required autofocus>

                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="password">Password</label>
                            <div class="controls">
                                <input type="password" id="password" name="password" placeholder="Enter Your Password" class="form-control input-lg" required>

                            </div>
                        </div>
          
                        <!-- Buttons -->
                        <br />
                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" class="btn btn-success">Login</button>
                                <br /><br /><a href="#">Forgot Password?</a>
                            </div>
                        </div>
                    </div>
                    <p>Don't have an account? Please <a href="<?php echo base_url(); ?>register">Register</a>.</p>
                </fieldset>
            </form>
    	</div>
	</div>
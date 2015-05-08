<!--Register Body-->
    <div class="container">
    	<div id="legend">
        	<legend class="">Registration</legend>
        </div>
            	<form class="form-horizontal" action="" method="POST">
                	<fieldset>
                        <div class="well col-md-12">
                            <div class="col-md-6">
                                <h4><strong>Account Information</strong></h4>
                                <legend></legend>
                                <div class="control-group">
                                    <label class="control-label" for="email">E-mail</label>
                                    <div class="controls">
                                        <input type="email" id="email" name="email" placeholder="Enter Your E-mail" class="form-control" required>
                                    </div>
                                </div>
        
                                <div class="control-group">
                                    <label class="control-label" for="password">Password</label>
                                    <div class="controls">
                                        <input type="password" id="password" name="password" placeholder="Enter Your Password" pattern=".{6,}"   required title="Password should be minimum six characters" class="form-control" required>
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label" for="confirm_password">Confirm Password</label>
                                    <div class="controls">
                                        <input type="password" id="confirm_password" name="confirm_password" placeholder="Re-enter Your Password to Confirm" pattern=".{6,}"   required title="Password should be minimum six characters" class="form-control" required>
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label" for="user_type">Role</label>
                                    <div class="controls">
                                        <select id="user_type" name="user_type" placeholder="" class="form-control" required>
                                            <option value="">Select User Type</option>
                                            <?php 
                                                print_r($user_types);
                                                foreach($user_types as $type){
                                                echo '<option value="'.$type.'">'.$type.'</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div> <br />
                                <!--<legend></legend>-->
                            </div>
                            
                            <div class="col-md-6">
                                <h4><strong>Personal Information</strong></h4>
                                <legend></legend>
                                <div class="control-group">
                                    <label class="control-label" for="first_name">First Name</label>
                                    <div class="controls">
                                        <input type="text" id="first_name" name="first_name" placeholder="Enter Your First Name" class="form-control" required>
                                    </div>
                                </div>
        
                                <div class="control-group">
                                    <label class="control-label" for="last_name">Last Name</label>
                                    <div class="controls">
                                        <input type="text" id="last_name" name="last_name" placeholder="Enter Your Last Name" class="form-control" required>
                                    </div>
                                </div>
        
                                <div class="control-group">
                                    <label class="control-label" for="phone">Phone</label>
                                    <div class="controls">
                                        <input type="tel" id="phone" name="phone" placeholder="Enter Your Contact No." class="form-control">
                                    </div>
                                </div>
        
                                <div class="control-group">
                                    <label class="control-label" for="city">City</label>
                                    <div class="controls">
                                        <input type="text" id="city" name="city" placeholder="Enter Your City" class="form-control" required>
        
                                    </div>
                                </div>
        
                                <div class="control-group">
                                    <label class="control-label" for="country">Country</label>
                                    <div class="controls">
                                        <select id="country" name="country" placeholder="" class="form-control" required>
                                            <option value="">Select Your Country</option>
                                            <?php 
                                            foreach($countries as $key=>$country){
                                            echo '<option value="'.$country['country_name'].'" ';
                                            if($country['country_name'] == "Nepal"){
                                            echo 'selected';
                                            }
                                            echo '>'.$country['country_name'].'</option>';
                                            }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                                <!--<br /><legend></legend>-->
                            </div>
                            
                            <!-- Button --><!--<br /><legend></legend>-->
                            <div class="control-group col-md-12">
                                <br /> <legend></legend>
                                <div class="controls">
                                    <button class="btn btn-success pull-right">Register</button>
                                    <button type="reset" class="btn btn-warning pull-left">Reset Form</button>
                                    <br /><br /><p align="right">If you already have an account, please <a href="<?php echo base_url();?>login">login</a></p>
                                </div>
                            </div>
                        </div>
                	</fieldset>
            	</form> 
        	<!--</div>-->
    	<!--</div>-->
	</div>
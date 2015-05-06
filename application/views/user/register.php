<div class="container">
    <div class="row">
        <div class="col-md-6">

            <form class="form-horizontal" action="" method="POST">
                <fieldset>
                    <div id="legend">
                        <legend class="">Register for a new account</legend>
                    </div>
                    <h3>Account Information</h3>
                    <div class="well">
                        <div class="control-group">
                            <label class="control-label" for="email">E-mail</label>
                            <div class="controls">
                                <input type="email" id="email" name="email" placeholder="" class="form-control input-lg" required>
                                <p class="help-block">Please provide your E-mail</p>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="password">Password</label>
                            <div class="controls">
                                <input type="password" id="password" name="password" placeholder="" pattern=".{6,}"   required title="Password should be minimum six characters" class="form-control input-lg" required>
                                <p class="help-block">Password should be at least 6 characters</p>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="confirm_password">Confirm Password</label>
                            <div class="controls">
                                <input type="password" id="confirm_password" name="confirm_password" placeholder="" pattern=".{6,}"   required title="Password should be minimum six characters" class="form-control input-lg" required>
                                <p class="help-block">Retype your password to confirm</p>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="user_type">Role</label>
                            <div class="controls">
                                <select id="user_type" name="user_type" placeholder="" class="form-control input-lg" required>
                                	<option>User Type</option>
                                    <?php 
                                        print_r($user_types);
                                        foreach($user_types as $type){
                                        echo '<option value="'.$type.'">'.$type.'</option>';
                                        }
                                    ?>
                                </select>
                                <p class="help-block">Choose your role</p>
                            </div>
                        </div>
                    </div>

                    <h3>Personal Information</h3>
                    <div class="well">
                        <div class="control-group">
                            <label class="control-label" for="first_name">First Name</label>
                            <div class="controls">
                                <input type="text" id="first_name" name="first_name" placeholder="" class="form-control input-lg" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="last_name">Last Name</label>
                            <div class="controls">
                                <input type="text" id="last_name" name="last_name" placeholder="" class="form-control input-lg" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="phone">Phone</label>
                            <div class="controls">
                                <input type="tel" id="phone" name="phone" placeholder="" class="form-control input-lg">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="city">City</label>
                            <div class="controls">
                                <input type="text" id="city" name="city" placeholder="" class="form-control input-lg" required>

                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="country">Country</label>
                            <div class="controls">
                                <select id="country" name="country" placeholder="" class="form-control input-lg" required>
                                	<option>Select Country</option>
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
                    </div>
                
                    <div class="control-group">
                        <!-- Button -->
                        <div class="controls">
                            <button class="btn btn-success">Register</button>
                            <button type="reset" class="btn btn-warning pull-right">Reset Form</button>
                        </div>
                    </div>
                </fieldset>
            </form>
            <br>
        <p>If you already have an account, please <a href="<?php echo base_url();?>login">login</a>.</p>
        </div>

    </div>
</div>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="#">
<title>Victim Info</title>
</head>
<link class="cssdeck" rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap_form.css">
<link class="cssdeck" rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css">

<div class="well">
    <div id="myTabContent" class="tab-content">
        <form class="form-horizontal" action='' method="POST">
            <fieldset>
                <div id="legend">
                    <legend class="">Basic Information of Victim</legend>
                </div>    
                <div class="control-group">
                    <label class="control-label"  for="first_name">Family Head First Name</label>
                    <div class="controls">
                        <input type="text" name="first_name" value="" class="input-xlarge" required>
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label"  for="middle_name">Family Head Middle Name</label>
                    <div class="controls">
                        <input type="text" name="middle_name" value="" class="input-xlarge">
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label"  for="last_name">Family Head Last Name</label>
                    <div class="controls">
                        <input type="text" name="last_name" value="" class="input-xlarge" required>
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label"  for="gender">Gender</label>
                    <div class="controls">
                        <input type="radio" name="gender" value="m" class="input-xlarge" required>&nbsp;Male &nbsp;
                        <input type="radio" name="gender" value="f" class="input-xlarge" required>&nbsp;Female &nbsp;
                        <input type="radio" name="gender" value="o" class="input-xlarge" required>&nbsp;Others
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label"  for="age">Age</label>
                    <div class="controls">
                        <input type="number" name="age" value="" min="0" max="125" class="input-xlarge" required>
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label"  for="address">Address 1</label>
                    <div class="controls">
                        <input type="text" name="address1" value="" class="input-xlarge" required>
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label"  for="tole">Tole</label>
                    <div class="controls">
                        <input type="text" name="tole" value="" class="input-xlarge" required>
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label"  for="ward">Ward No.</label>
                    <div class="controls">
                        <input type="number" name="ward" value="" min="1" max="50" class="input-xlarge" required>
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label"  for="vdc_municipality">VDC/Municipality</label>
                    <div class="controls">
                        <input type="text" name="vdc_municipality" value="" class="input-xlarge" required>
                    </div>
                </div>

                <div id="legend">
                	<legend class=""></legend>
                    <legend class="">Other Family Members</legend>
                </div>
                
                <div class="control-group">
                    <label class="control-label"  for="babies">No. of Babies (Age 0-5yrs)</label>
                    <div class="controls">
                        <input type="number" min="0" max="30" name="babies" value="" class="input-xlarge">
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label"  for="babies">No. Children(Age 6-15 yrs)</label>
                    <div class="controls">
                        <input type="number" min="0" max="30" name="children" value="" class="input-xlarge">
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label"  for="babies">No. Adult Male (Age 16-59yrs)</label>
                    <div class="controls">
                        <input type="number" min="0" max="30" name="adult_male" value="" class="input-xlarge">
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label"  for="babies">No. Adult Female (Age 16-59yrs)</label>
                    <div class="controls">
                        <input type="number" min="0" max="30" name="adult_female" value="" class="input-xlarge">
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label"  for="babies">No. Senior Citizens (Age 60yrs & above)</label>
                    <div class="controls">
                        <input type="number" min="0" max="30" name="senior_citizen" value="" class="input-xlarge">
                    </div>
                </div>
                
                <div class="control-group">
                    <!-- Button -->
                    <div class="controls">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    
                        <button type="reset" class="btn btn-primary">Reset Form</button>
                    </div>    
                </div>
            </fieldset>
        </form>                
    </div>
</div>

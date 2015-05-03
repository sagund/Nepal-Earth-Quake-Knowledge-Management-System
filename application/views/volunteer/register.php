<?php require_once(APPPATH.'views/nav.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="#">
<title>Volunteer Registration</title>
</head>
<link class="cssdeck" rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap_form.css">
<link class="cssdeck" rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css">

<div class="well">
    <div id="myTabContent" class="tab-content">
        <form class="form-horizontal" action='<?php echo base_url();?>volunteer/create' method="POST">
            <fieldset>
                <div id="legend">
                    <legend class="">Register Me as a Volunteer</legend>
                </div>    
                <div class="control-group">
                    <label class="control-label"  for="name">Name</label>
                    <div class="controls">
                        <input type="text" name="name" value="" class="input-xlarge" required>
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label"  for="mobile">Mobile No.</label>
                    <div class="controls">
                        <input type="tel" name="mobile" value="" class="input-xlarge" required>
                    </div>
                </div>
                
                <div class="control-group">
                <label class="control-label"  for="volunteering_area"><b>Volunteering Area</b></label>
                </div>
                
                <div class="control-group">
                    <label class="control-label"  for="district">District</label>
                    <div class="controls">
                        <select name="district" class="input-xlarge" required>
                        	<option  value="">Select District</option>
                            <?php
	
	
		foreach($districts as $key=>$district){
			echo '<option value="'.$district['id'].'">'.$district['name'].'</option>';
		}

	?>
                        </select>
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label"  for="municipality">VDC/Municipality</label>
                    <div class="controls">
                        <select name="district" class="input-xlarge" required>
                        	<option  value="">Select VDC/Municipality</option>
                            <option  value="Kathmandu">Kathmandu</option>
                        </select>
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label"  for="ward">Ward No.</label>
                    <div class="controls">
                        <input type="number" name="ward" min="1" max="50" value="" class="input-xlarge" required>
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label"  for="expertise">Area of Expertise</label >
                    <div class="controls">
                        <select name="district" class="input-xlarge" required>
                        	<option value="">Select Area of Expertise</option>
                            <option value="Rescue">Rescue</option>
                            <option>Medical Help</option>
                            <option>Sanitation &amp; Cleaning</option>
                            <option>Sanitation Awareness</option>
                            <option>Disease Awareness</option>
                            <option>Habitation</option>
                            <option>Others</option>
                        </select>
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

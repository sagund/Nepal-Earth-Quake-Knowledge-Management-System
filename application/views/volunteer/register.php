<!--Volunteer Register Body-->
	<div class="container">
    	<div id="legend">
        	<legend>Become a Volunteer</legend>
        </div>
		<form class="form-horizontal" action="" method="POST">
			<fieldset>
				<div class="well col-md-12">
					<div class="col-md-6">
                                <h4><strong>Volunteer Information</strong></h4>
                                <legend></legend>
                                
                                <div class="control-group">
                    		<label class="control-label"  for="name">Full Name</label>
                    		<div class="controls">
                        		<input type="text" name="name" value="" class="form-control" placeholder="Enter Your Full Name" required>
                    		</div>
                		</div>
                        
                        		<div class="control-group">
                    		<label class="control-label"  for="mobile">Mobile No.</label>
                    		<div class="controls">
                        		<input type="tel" name="mobile" value="" class="form-control"  placeholder="Enter Your Contact No." required>
                    		</div>
                		</div>
                        
                        		<div class="control-group">
                    		<label class="control-label"  for="volunteer_address">Your Address</label>
                    		<div class="controls">
                        		<input type="text" name="volunteer_address" value="" class="form-control" placeholder="Enter Your Address" required>
                    		</div>
                		</div>
                        
                        		<div class="control-group">
                            <label class="control-label"  for="expertise">Area of Expertise</label >
                            <div class="controls">
                                <select name="district" class="form-control" required>
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
                        </div> <br />
                        	
                            </div>
                            
					<div class="col-md-6">
                                <h4><strong>Volunteering Area</strong></h4>
                                <legend></legend>
                                
                                <div class="control-group">
                            <label class="control-label"  for="district">District</label>
                            <div class="controls">
                                <select name="district" class="form-control" required>
                                    <option>Select District</option>
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
                                <select name="district" class="form-control" required>
                                    <option>Select VDC/Municipality</option>
                                    <option  value="Kathmandu">Kathmandu</option>
                                </select>
                            </div>
                        </div>
                        
                        		<div class="control-group">
                            <label class="control-label"  for="ward">Ward No.</label>
                            <div class="controls">
                                <input type="number" name="ward" min="1" max="50" value="" class="form-control" placeholder="Enter Ward No.">
                            </div>
                        </div>
                        
                        		<!--Buttons-->
                                <div class="control-group">
                        			<br /><legend></legend>
                        			<button type="submit" name="submit" class="btn btn-success pull-right">Submit</button>
                        			<button type="reset" class="btn btn-warning pull-left">Reset Form</button><br />
                    			</div>
                                
							</div>
				</div>
			</fieldset>
		</form>
	</div>
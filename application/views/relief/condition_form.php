<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="#">
	<title>Victim Info</title>

</head>
<link class="cssdeck" rel="stylesheet"
	href="<?php echo base_url();?>assets/css/bootstrap_form.css">
	<link class="cssdeck" rel="stylesheet"
		href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css">


<div class="container">
					<div class="row">
						<div id="legend">
							<legend class=""></legend>
							<legend class="">Information On Victim's Condition</legend>
						</div>
						<div class="col-sm-12">
							<form class="form-horizontal" enctype="multipart/form-data"
								action='<?php echo base_url(); ?>relief/condition' method="POST">
								<fieldset>
									<div class="control-group">
										<label class="control-label" for="house_condition">House
											Condition</label>
										<div class="controls">
											<textarea name="house_condition" class="input-xlarge"
												required></textarea>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="family_condition">Family
											Condition</label>
										<div class="controls">
											<textarea name="family_condition" class="input-xlarge"
												required></textarea>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="water">Access To Safe
											Drinking Water</label>
										<div class="controls">
											<label class="radio-inline"><input type="radio" name="water"
												value="1" class="input-xlarge" required>&nbsp;Yes&nbsp;</label>
											<label class="radio-inline"><input type="radio" name="water"
												value="0" class="input-xlarge" required>&nbsp;No&nbsp;</label>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="meal">Access to safe food (3
											meals a day)</label>
										<div class="controls">
											<label class="radio-inline"><input type="radio" name="meal"
												value="1" class="input-xlarge" required>&nbsp;Yes&nbsp;</label>
											<label class="radio-inline"><input type="radio" name="meal"
												value="0" class="input-xlarge" required>&nbsp;No&nbsp;</label>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="medicine">Access to medical
											support / medicine</label>
										<div class="controls">
											<label class="radio-inline"><input type="radio"
												name="medical" value="1" class="input-xlarge" required>&nbsp;Yes&nbsp;</label>
											<label class="radio-inline"><input type="radio"
												name="medical" value="0" class="input-xlarge" required>&nbsp;No&nbsp;</label>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="temp_shelter">Access to a safe
											temporary shelter</label>
										<div class="controls">
											<label class="radio-inline"><input type="radio"
												name="temp_shelter" value="1" class="input-xlarge" required>&nbsp;Yes&nbsp;</label>
											<label class="radio-inline"><input type="radio"
												name="temp_shelter" value="0" class="input-xlarge" required>&nbsp;No&nbsp;</label>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="perm_shelter">Access to a safe
											permanent shelter</label>
										<div class="controls">
											<label class="radio-inline"><input type="radio"
												name="perm_shelter" value="1" class="input-xlarge" required>&nbsp;Yes&nbsp;</label>
											<label class="radio-inline"><input type="radio"
												name="perm_shelter" value="0" class="input-xlarge" required>&nbsp;No&nbsp;</label>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="cont_disease">Affected by
											any contagious disease ?</label>
											<div class="controls">
											<label class="radio-inline"><input type="radio"
												name="cont_disease" value="1" class="input-xlarge" required>&nbsp;Yes&nbsp;</label>
											<label class="radio-inline"><input type="radio"
												name="cont_disease" value="0" class="input-xlarge" required>&nbsp;No&nbsp;</label>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="house_condition">Name</label>
										<div class="controls">
											<input type="text" name="disease" value=""
												class="input-xlarge">

										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="house_condition">Condition</label>
										<div class="controls">
											<textarea name="disease_condition" class="input-xlarge"></textarea>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="psychological_state">Psychological
											State</label>
										<div class="controls">
											<label class="checkbox-inline"><input type="checkbox"
												name="psychological_state[]" value="friegntened"
												class="input-xlarge">friegntened to go back</label> <label
												class="checkbox-inline"><input type="checkbox"
												name="psychological_state[]" value="stress"
												class="input-xlarge"> stress</label> <label
												class="checkbox-inline"><input type="checkbox"
												name="psychological_state[]" value="normal"
												class="input-xlarge"> normal</label> <label
												class="checkbox-inline"><input type="checkbox"
												name="psychological_state[]" value="depressed"
												class="input-xlarge"> depressed</label> <label
												class="checkbox-inline"><input type="checkbox"
												name="psychological_state[]" value="positive"
												class="input-xlarge"> positive</label>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="physical_state">Physical
											state</label>
										<div class="controls">
											<label class="checkbox-inline"><input type="checkbox"
												name="physical_state[]" value="no warm clothing"
												class="input-xlarge">has no warm clothing</label> <label
												class="checkbox-inline"><input type="checkbox"
												name="physical_state[]" value="no blankets"
												class="input-xlarge"> has no blanket</label> <label
												class="checkbox-inline"><input type="checkbox"
												name="physical_state[]" value="no mat"
												class="input-xlarge"> has no mat</label> <label
												class="checkbox-inline"><input type="checkbox"
												name="physical_state[]" value="no tent"
												class="input-xlarge"> has no tent</label> <label
												class="checkbox-inline"><input type="checkbox"
												name="physical_state[]" value="no utensils"
												class="input-xlarge"> has no utensils (plates, cups, spoons,
													cooking pot)</label>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="economic_state">Economic
											state</label>
										<div class="controls">
											<label class="radio-inline"><input type="radio"
												name="economic_state" value="no warm clothing"
												class="input-xlarge">very very poor = has less than 100
													rupees to spend per day for the family for a month</label><br />
											<label class="radio-inline"><input type="radio"
												name="economic_state" value="no blankets"
												class="input-xlarge"> poor = has less than 500 rupees per
													day to spend for the family for a month</label><br /> <label
												class="radio-inline"><input type="radio"
												name="economic_state" value="no mat" class="input-xlarge">
													non-poor = has more than 500 rupees per day to spend for
													the family for a month )</label>

										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="photographs">Photographs</label>
										<div class="controls">
											<input type="file" name="photographs" multiple
												class="input-xlarge">

										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="initial_assesment">Initial
											Assesment </label>
										<div class="controls">
											<textarea name="initial_assesment" class="input-xlarge"></textarea>
										</div>
									</div>

									<div class="control-group">

										<div class="controls">
											<label>*Note: try to ask questions in Native language when
												possible</label>
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
				</div>

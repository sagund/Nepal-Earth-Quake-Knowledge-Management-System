<?php //print_r($districts); ?>
<link class="cssdeck" rel="stylesheet"
	href="<?php echo base_url();?>assets/css/bootstrap_form.css">
	<link class="cssdeck" rel="stylesheet"
		href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css">

		<div class="well">
			<div id="myTabContent" class="tab-content">
				<form class="form-horizontal" action='' method="POST">
					<fieldset>
						<div id="legend">
							<legend class="">Basic Information of Victim</legend>
						</div>
						<div class="control-group">
							<label class="control-label" for="first_name">Family Head First
								Name</label>
							<div class="controls">
								<input type="text" name="first_name" value=""
									class="input-xlarge" required>

							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="middle_name">Family Head Middle
								Name</label>
							<div class="controls">
								<input type="text" name="middle_name" value=""
									class="input-xlarge">

							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="last_name">Family Head Last
								Name</label>
							<div class="controls">
								<input type="text" name="last_name" value=""
									class="input-xlarge" required>

							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="gender">Gender</label>
							<div class="controls">
								<label class="radio-inline"><input type="radio" name="gender"
									value="m" class="input-xlarge" required>&nbsp;Male &nbsp;</label>
								<label class="radio-inline"><input type="radio" name="gender"
									value="f" class="input-xlarge" required>&nbsp;Female &nbsp;</label>
								<label class="radio-inline"><input type="radio" name="gender"
									value="o" class="input-xlarge" required>&nbsp;Others</label>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="age">Age</label>
							<div class="controls">
								<input type="number" name="age" value="" min="0" max="125"
									class="input-xlarge" required>

							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="address">Address 1</label>
							<div class="controls">
								<input type="text" name="address1" value="" class="input-xlarge"
									required>

							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="tole">Tole</label>
							<div class="controls">
								<input type="text" name="tole" value="" class="input-xlarge"
									required>

							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="district">District</label>
							<div class="controls">
								<select name="district" id="district" class="input-xlarge" required>
									<?php 
										if(isset($districts) && sizeof($districts)>0){
											foreach ($districts as $key => $district) {
												echo '<option value="'.$district['id'].'">'.$district['name'].'</option>';
											}
										}else{
											echo '<option></option>';
										}

									?>

								</select>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="vdc_municipality">VDC/Municipality</label>
							<div class="controls">
								<select name="vdc_municipality" id="vdc" class="input-xlarge" >

								</select>	

							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="ward">Ward No.</label>
							<div class="controls">
								<input type="number" name="ward" value="" min="1" max="50"
									class="input-xlarge" required>

							</div>
						</div>

						



						<div class="control-group">
							<!-- Button -->
							<div class="controls">

							</div>
						</div>
					</fieldset>

				<div class="container">
					<div class="row">
						<div id="legend">
							<legend class=""></legend>
							<legend class="">Additional Information of Family Members</legend>
						</div>




						<div class="containerx">
							<div class="row clearfix">
								<div class="col-md-12 column">
									<table class="table table-bordered table-hover" id="tab_logic">
										<thead>
											<tr>
												<th class="text-center">#</th>
												<th class="text-center">Name</th>
												<th class="text-center">Age</th>
												<th class="text-center">Gender</th>

												<th class="text-center">CitizenShip Num</th>
												<th class="text-center">State</th>



											</tr>
										</thead>
										<tbody>
											<tr id='addr0'>
												<td>1</td>
												<td><input type='text' name='name0' placeholder='Name'
													class='form-control' required /></td>
												<td><input type='text' name='age0' type='number' min='0'
													max='125' placeholder='Age' class='input-xlarge' required />
												</td>
												<td><select name='gender0' required>
														<option value='m'>Male</option>
														<option value='f'>Female</option>
														<option value='o'>Other</option>

												</select></td>

												<td><input type='text' name='citizen_num0'
													placeholder='Name' class='form-control' /></td>

												<td><select name='status0' required>
														<option></option>
														<option value='living'>Living & Healthy</option>
														<option value='injured'>Injured</option>
														<option value='missing'>Missing</option>
														<option value='dead'>Dead</option>
												</select></td>


											</tr>
											<tr id='addr1'></tr>
										</tbody>
									</table>
								</div>
							</div>
							<a id="add_row" class="btn btn-default pull-left">Add Family Member</a><a
								id='delete_row' class="pull-right btn btn-default">Delete Last Row</a>
						</div>
<br></br>

    <input id="num_family" type="hidden" name='num_family' value="1"/>
	<button type="submit" name="submit" class="btn btn-primary">Submit</button>

								<button type="reset" class="btn btn-primary">Reset Form</button>
</form>
						<script type="text/javascript">

$(document).ready(function(){
    var i=1;
   $("#add_row").click(function(){


	   $('#addr'+i).html("<td>"+ (i+1) +"</td> <td><input type='text' name='name"+i+"' placeholder='Name' class='form-control' required /></td> <td><input type='text' name='age"+i+"' type='number' min='0' max='125' placeholder='Age' class='input-xlarge' required /> </td> <td><select name='gender"+i+"' required> <option value='m'>Male</option> <option value='f'>Female</option> <option value='o'>Other</option> </select></td> <td><input type='text' name='citizen_num"+i+"' placeholder='Name' class='form-control' /></td> <td><select name='status"+i+"' required> <option></option> <option value='living'>Living & Healthy</option> <option value='injured'>Injured</option> <option value='missing'>Missing</option> <option value='dead'>Dead</option> </select></td>");


    $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');

    $('#num_family').val(i+1);

    i++;
});
   $("#delete_row").click(function(){
  	 if(i>1){
		 $("#addr"+(i-1)).html('');
		 i--;
		 }
	 });

});

</script>


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
										<label class="control-label" for="meal">Access to medical
											support / medicine</label>
										<div class="controls">
											<label class="radio-inline"><input type="radio"
												name="medical" value="1" class="input-xlarge" required>&nbsp;Yes&nbsp;</label>
											<label class="radio-inline"><input type="radio"
												name="medical" value="0" class="input-xlarge" required>&nbsp;No&nbsp;</label>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="meal">Access to a safe
											temporary shelter</label>
										<div class="controls">
											<label class="radio-inline"><input type="radio"
												name="temp_shelter" value="1" class="input-xlarge" required>&nbsp;Yes&nbsp;</label>
											<label class="radio-inline"><input type="radio"
												name="temp_shelter" value="0" class="input-xlarge" required>&nbsp;No&nbsp;</label>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="meal">Access to a safe
											permanent shelter</label>
										<div class="controls">
											<label class="radio-inline"><input type="radio"
												name="perm_shelter" value="1" class="input-xlarge" required>&nbsp;Yes&nbsp;</label>
											<label class="radio-inline"><input type="radio"
												name="perm_shelter" value="0" class="input-xlarge" required>&nbsp;No&nbsp;</label>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="disease">Affected by
											any contagious disease ?</label>
										<div class="controls">
											<label class="radio-inline"><input type="radio"
												name="disease" value="1"  class="input-xlarge" checked required>&nbsp;Yes&nbsp;</label>
											<label class="radio-inline"><input type="radio"
												name="disease" value="0" class="input-xlarge" required>&nbsp;No&nbsp;</label>
										</div>	
									</div>

									<div class="control-group disease_name">
										<label class="control-label" for="disease_name">Name</label>
										<div class="controls">
											<input type="text" name="disease_name" value=""
												class="input-xlarge">

										</div>
									</div>

									<div class="control-group disease_condition">
										<label class="control-label" for="disease_condition">Condition</label>
										<div class="controls">
											<textarea name="disease_condition" class="input-xlarge"></textarea>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="psychological_state">Psychological
											State</label>
										<div class="controls">
											<label class="checkbox-inline"><input type="checkbox"
												name="psychological_state" value="friegntened"
												class="input-xlarge">friegntened to go back</label> <label
												class="checkbox-inline"><input type="checkbox"
												name="psychological_state" value="stress"
												class="input-xlarge"> stress</label> <label
												class="checkbox-inline"><input type="checkbox"
												name="psychological_state" value="normal"
												class="input-xlarge"> normal</label> <label
												class="checkbox-inline"><input type="checkbox"
												name="psychological_state" value="depressed"
												class="input-xlarge"> depressed</label> <label
												class="checkbox-inline"><input type="checkbox"
												name="psychological_state" value="positive"
												class="input-xlarge"> positive</label>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="physical_state">Physical
											state</label>
										<div class="controls">
											<label class="checkbox-inline"><input type="checkbox"
												name="psychological_state" value="no warm clothing"
												class="input-xlarge">has no warm clothing</label> <label
												class="checkbox-inline"><input type="checkbox"
												name="psychological_state" value="no blankets"
												class="input-xlarge"> has no blanket</label> <label
												class="checkbox-inline"><input type="checkbox"
												name="psychological_state" value="no mat"
												class="input-xlarge"> has no mat</label> <label
												class="checkbox-inline"><input type="checkbox"
												name="psychological_state" value="no tent"
												class="input-xlarge"> has no tent</label> <label
												class="checkbox-inline"><input type="checkbox"
												name="psychological_state" value="no utensils"
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
			</div>
		</div>
<script type="text/javascript">
	$(document).ready(function(){
		var districts=<?php echo json_encode($districts); ?>;
		//console.log(districts);
		$("#district").change(function(){
			var district_id = $("#district").val();
	        $('#vdc').empty();
	        $.each(districts, function (key, value) {
	        	if(value.id==district_id){
	        		//console.log(value);
	        		//console.log(value.district_units);
	        		$.each(value.district_units, function (key, village) {
		                $('#vdc').append($('<option>', {
		                    value: village.id,
		                    text: village.name
		                }));
	            	});
	        	}
	        });
		});

		$("input:radio[name=disease]:first-child").click(function(){
			if($(this).val()==1){
				$(".disease_name").css("display","block");
				$(".disease_condition").css("display","block");
			}else{
				$(".disease_name").css("display","none");
				$(".disease_condition").css("display","none");
			}
		})


	})
</script>





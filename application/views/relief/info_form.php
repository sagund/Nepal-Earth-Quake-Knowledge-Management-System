
<link class="cssdeck" rel="stylesheet"
	href="<?php echo base_url();?>assets/css/bootstrap_form.css">
	<link class="cssdeck" rel="stylesheet"
		href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css">

		<div class="well">
			<div id="myTabContent" class="tab-content">
				<div class="container">
					<div class="row clearfix">
						<div class="col-md-12 column">
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
								
								
						
									<div id="legend">
										<legend class=""></legend>
										<legend class="">Additional Information of Family Members</legend>
									</div>
										<!-- <div class="col-md-12 column"> -->
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
														class='form-control'  /></td>
													<td><input type='text' name='age0' type='number' min='0'
														max='125' placeholder='Age' class='input-xlarge'  />
													</td>
													<td><select name='gender0' >
															<option value='m'>Male</option>
															<option value='f'>Female</option>
															<option value='o'>Other</option>

													</select></td>

													<td><input type='text' name='citizen_num0'
														placeholder='Citizenship No.' class='form-control' /></td>

													<td><select name='status0' >
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
											<!-- </div> -->
										
										<a id="add_row" class="btn btn-default pull-left">Add Family Member</a><a
											id='delete_row' class="pull-right btn btn-default">Delete Last Row</a>
									
									<br></br>

								    <input id="num_family" type="hidden" name='num_family' value="1"/> 
									<button type="submit" name="submit" class="btn btn-primary">Submit</button>

									<button type="reset" class="btn btn-primary">Reset Form</button>
								</fieldset>
	
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
<script type="text/javascript">

$(document).ready(function(){
    var i=1;
    $("#add_row").click(function(){


	    $('#addr'+i).html("<td>"+ (i+1) +"</td> <td><input type='text' name='name"+i+"' placeholder='Name' class='form-control'  /></td> <td><input type='text' name='age"+i+"' type='number' min='0' max='125' placeholder='Age' class='input-xlarge'  /> </td> <td><select name='gender"+i+"' required> <option value='m'>Male</option> <option value='f'>Female</option> <option value='o'>Other</option> </select></td> <td><input type='text' name='citizen_num"+i+"' placeholder='Citizenship No.' class='form-control' /></td> <td><select name='status"+i+"' > <option></option> <option value='living'>Living & Healthy</option> <option value='injured'>Injured</option> <option value='missing'>Missing</option> <option value='dead'>Dead</option> </select></td>");


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

});

</script>




				
		</div>
	</div>

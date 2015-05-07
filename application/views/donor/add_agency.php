<!--Add Agency Body-->
	<div class="container">
    	<div id="legend">
			<legend class="">Add Donor/Volunteering Agencies</legend>
		</div>
        <form class="form-horizontal" action="" method="POST">
			<fieldset>
				<div class="well col-md-12">
					<h4><strong>Agency Information</strong></h4>
					<legend></legend>
                    <div class="col-md-6"> 
                        
                        <div class="control-group">
                            <label class="control-label" for="agency_name">Agency Name</label>
                            <div class="controls">
                                <input type="text" id="agency_name" name="agency_name" placeholder="Enter Agency Name" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="support_type">Type of Support</label>
                            <div class="controls">
                                <select id="support_type" name="support_type" class="form-control" required/>
                                	<option value="">Select Support Type</option>
                                    <option value="food">Food</option>
                                    <option value="water">Water</option>
                                    <option>Tents</option>
                                    <option>Blankets</option>
                                    <option>Clothes</option>
                                    <option>Kitchen Utensils</option>
                                    <option>Medical Personnel</option>
                                    <option>Rescue Personnel</option>
                                    <option>Medicines</option>
	                         	</select>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="volunteer_no">Total No. of Volunteers</label>
                            <div class="controls">
                                <input type="number" id="volunteer_tot" name="volunteer_tot" placeholder="Enter no. of volunteers" class="form-control" min="0" required>
                            </div>
                        </div>
                        
					</div>
                        
                    <div class="control-group col-md-12">
						<br /> <legend></legend>
						<h4><strong>Active Districts</strong></h4>
                        <table class="table table-bordered table-hover" id="tab_logic">
                        	<thead>
                            	<tr>
                                	<th class="text-center">#</th>
                                    <th class="text-center">District</th>
                                    <th class="text-center">VDC/Municapility</th>
                                    <th class="text-center">Activity</th>
                                    <th class="text-center">No. of volunteers</th>
								</tr>
							</thead>
							<tbody>
								<tr id='addr0'>
									<td>1</td>
									<td><select id="" name="active_district0" placeholder="" class="form-control">
                                        	<option>Select District</option>
                                            <option value=''>Kathmandu</option>
                                            <option>Bhaktapur</option>
										</select>
                                    </td>
									<td><input name='vdc_mun0' type='text' placeholder='VDC/Municipality' class='form-control' />
                                    </td>
									<td><textarea name='local_activity0' rows='3' placeholder='Enter in short the local activity of your agency' class='form-control'></textarea>
                                    </td>
                                    <td><input type='number' name='volunteer_no0' placeholder='No of Volunteers' min="0" class='form-control' />
                                    </td>
								</tr>
                                <tr id='addr1'></tr>
							</tbody>
						</table>
                           <a id="add_row" class="btn btn-primary pull-right">Add Active District</a>
                           <a id='delete_row' class="pull-left btn btn-danger">Delete Last Row</a>
                           <br /><br /><br /><legend></legend><div class="pull-right">
                           <button type="submit" name="submit" class="btn btn-success">Submit</button>
                           <button type="reset" class="btn btn-warning">Reset Form</button></div>
                           <br /><br />
                    	</div>
                    	</div>
            </fieldset>
        </form>
	</div>
<!--JavScript Function for the Form-->    
    <script type="text/javascript">
    
    $(document).ready(function(){
        var i=1;
        $("#add_row").click(function(){
    
           $('#addr'+i).html("<td>"+ (i+1) +"</td> <td><select name='active_district"+i+"' class='form-control' required><option value=''>Select District</option><option value='kathmandu'>Kathmandu</option><option value='bhaktapur'>Bhaktapur</option></select></td> <td><input name='vdc_mun0"+i+"' type='text' placeholder='VDC/Municipality' class='form-control' required/> <td><textarea name='local_activity"+i+"' rows='3' placeholder='Enter in short the local activity of your agency' class='form-control'></textarea></td>  <td><input type='number' name='volunteer_no"+i+"' placeholder='No. of Volunteers' class='form-control' min='0' required/></td>");    
    
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
        
        //var districts="<?php echo json_encode($districts); ?>";
        //console.log(districts);
        /*$("#district").change(function(){
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
            });*/
    
    });

	</script>
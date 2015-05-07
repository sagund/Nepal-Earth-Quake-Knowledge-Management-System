<!--Victim Info Body-->
	<div class="container">
    	<div id="legend">
			<legend class="">Victim Information</legend>
		</div>
        <form class="form-horizontal" action="" method="POST">
			<fieldset>
				<div class="well col-md-12">
					<h4><strong>Basic Information of Victim</strong></h4>
					<legend></legend>
                    <div class="col-md-6"> 
                        <!--Text field-->
                        <div class="control-group">
                            <label class="control-label" for="first_name">Family Head First Name</label>
                            <div class="controls">
                                <input type="text" placeholder="Enter First Name" name="first_name" value="" class="form-control" required>

                            </div>
                        </div>
                        
                        <div class="control-group">
                                        <label class="control-label" for="middle_name">Family Head Middle
                                            Name</label>
                                        <div class="controls">
                                            <input type="text" name="middle_name" placeholder="Enter Middle Name"
                                                class="form-control" value="">

                                        </div>
                                    </div>
                        
                        <div class="control-group">
                                        <label class="control-label" for="last_name">Family Head Last
                                            Name</label>
                                        <div class="controls">
                                            <input type="text" name="last_name" placeholder="Enter Last Name" value="" class="form-control" required>

                                        </div>
                                    </div>

                        <div class="control-group">
                            <label class="control-label" for="gender">Gender</label>
                            <div class="controls">
                                <label class="radio-inline"><input type="radio" name="gender"
                                    value="m" class="input-xlarge" required>Male &nbsp;</label>
                                <label class="radio-inline"><input type="radio" name="gender"
                                    value="f" class="input-xlarge" required>Female &nbsp;</label>
                                <label class="radio-inline"><input type="radio" name="gender"
                                    value="o" class="input-xlarge" required>Others &nbsp;</label>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="age">Age</label>
                            <div class="controls">
                                <input type="number" name="age" value="" min="0" max="125"
                                    placeholder="Enter Age"class="form-control" required>

                            </div>
                        </div>
                      </div>
                      
                    <div class="col-md-6">
                        <div class="control-group">
                            <label class="control-label" for="address">Address</label>
                            <div class="controls">
                                <input type="text" name="address1" value="" class="form-control" placeholder="Enter Address">

                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="district">District</label>
                            <div class="controls">
                                <select name="district" id="district" class="form-control" required>
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
                                <select name="vdc_municipality" id="vdc" class="form-control" >
                                    <option value="">Select VDC/Municipality</option>
                                        <option value="kathmandu">Kathmandu</option>
                                </select>
                                </select>	

                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="ward">Ward No.</label>
                            <div class="controls">
                                <input type="number" name="ward" value="" min="1" max="50"
                                    class="form-control" required>

                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="tole">Tole</label>
                            <div class="controls">
                                <input type="text" name="tole" value="" class="form-control" placeholder="Enter Locality / Street / Tole"required>

                            </div>
                        </div>
                    </div>
                    
                    <div class="control-group col-md-12">
                        <br /> <legend></legend>
                        <h4><strong>Additional Information of Family Members</strong></h4>
                        <table class="table table-bordered table-hover" id="tab_logic">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Age</th>
                                    <th class="text-center">Gender</th>
                                    <th class="text-center">Citizenship No.</th>
                                    <th class="text-center">State</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id='addr0'>
                                    <td>1</td>
                                    <td><input type='text' name='name0' placeholder='Full Name' class='form-control' /></td>
                                    <td><input name='age0' type='number' min='0' max='125' placeholder='Age' class='form-control' /></td>
                                    <td>
                                        <select name='gender0' class='form-control'>
                                            <option>Select Gender</option>
                                            <option value='m'>Male</option>
                                            <option value='f'>Female</option>
                                            <option value='o'>Other</option>
                                        </select>
                                    </td>
                                    <td><input type='text' name='citizen_num0' placeholder='Citizenship No.' class='form-control' /></td>
                                    <td>
                                        <select name='status0' class='form-control'>
                                            <option>Select Physical State</option>
                                            <option value='living'>Living & Healthy</option>
                                            <option value='injured'>Injured</option>
                                            <option value='missing'>Missing</option>
                                            <option value='dead'>Dead</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr id='addr1'></tr>
                            </tbody>
                        </table>
                       <a id="add_row" class="btn btn-primary pull-right">Add Family Member</a>
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
    
	<script type="text/javascript">
    
    $(document).ready(function(){
        var i=1;
        $("#add_row").click(function(){
    
    
           $('#addr'+i).html("<td>"+ (i+1) +"</td> <td><input type='text' name='name"+i+"' placeholder='Full Name' class='form-control' required /></td> <td><input name='age"+i+"' type='number' min='0' max='125' placeholder='Age' class='form-control' required /> </td> <td><select name='gender"+i+"' class='form-control' required> <option value=''>Select Gender</option><option value='m'>Male</option> <option value='f'>Female</option> <option value='o'>Other</option> </select></td> <td><input type='text' name='citizen_num"+i+"' placeholder='Citizenship No.' class='form-control' /></td> <td><select class='form-control' name='status"+i+"' required> <option value=''>Select Physical State</option> <option value='living'>Living & Healthy</option> <option value='injured'>Injured</option> <option value='missing'>Missing</option> <option value='dead'>Dead</option> </select></td>");
    
    
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
        
        var districts="<?php echo json_encode($districts); ?>";
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
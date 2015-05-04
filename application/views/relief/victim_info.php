<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="#">
<title>Victim Info</title>
</head>
<!-- jQuery -->
<script src="<?php echo base_url();?>assets/js/jquery-1.11.2.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

<link class="cssdeck" rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap_form.css">
<link class="cssdeck" rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css">

<body>
<div class="well">
	<div id="myTabContent" class="tab-content">
		<form class="form-horizontal" action='' method="POST">
			<fieldset>
                <div id="legend">
                    <legend>Basic Information of Victim</legend>
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
                        <label class="radio inline"><input type="radio" name="gender" value="m" class="input-xlarge" required>Male &nbsp;</label>
                        <label class="radio inline"><input type="radio" name="gender" value="f" class="input-xlarge" required>Female &nbsp;</label>
                        <label class="radio inline"><input type="radio" name="gender" value="o" class="input-xlarge" required>Others &nbsp;</label>
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label"  for="age">Age</label>
                    <div class="controls">
                        <input type="number" name="age" value="" min="0" max="125" class="input-xlarge" required>
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label"  for="address">Address</label>
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
                                            <th class="text-center">Physical State</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr id='addr0'>
                                            <td>1</td>
                                            <td><input type='text' name='name0' placeholder='Name'
                                                class='' /></td>
                                            <td><input name='age0' type='number' min='0' max='125' placeholder='Age' class='input-xlarge'  /></td>
                                            <td><select name='gender0' >
                                                    <option value=''>Select Gender</option>              
                                                    <option value='m'>Male</option>
                                                    <option value='f'>Female</option>
                                                    <option value='o'>Other</option>

                                            </select></td>
                                            <td><input type='text' name='citizen_num0'
                                                placeholder='Name' class='form-control' /></td>
                                            <td><select name='status0' >
                                                    <option value="">Select Physical State</option>
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
                        <a id="add_row" class="btn btn-default pull-left">Add Family Member</a>
                        <a id='delete_row' class="pull-right btn btn-danger">Delete Last Row</a>
                    </div>
                            <input id="num_family" type="hidden" name='num_family' value="1"/>
                            <br><br><br>
                    <legend></legend>
                     <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-primary">Reset Form</button>
                    </form>     
                </div>
           </div>
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
	</div>
</div>
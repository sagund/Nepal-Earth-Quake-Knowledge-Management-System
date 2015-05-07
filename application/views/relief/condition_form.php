<!--Victim Condition Body-->
	<div class="container">
    	<div id="legend">
			<legend class="">Victim Information</legend>
        </div>
		<div class="row col-md-12">
            <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url(); ?>relief/condition" method="POST">
                <fieldset>
                    <div class="well">
                    	<h4><strong>Victim Condition</strong></h4>
                        <legend></legend>
                    	
                        <!--Water-->
                        <div class="control-group">
							<label class="control-label" for="water">Access To Safe Drinking Water?</label>
							<div class="controls">
                                <label class="radio-inline"><input type="radio" name="water" value="1" class="input-xlarge" required>Yes&nbsp;</label>
                                <label class="radio-inline"><input type="radio" name="water" value="0" class="input-xlarge" required>No&nbsp;</label>
							</div>
						</div> <br />
                            
                        <!--Food-->
                        <div class="control-group">
								<label class="control-label" for="meal">Access to Fafe Food (3 Meals a Day)?</label>
								<div class="controls">
									<label class="radio-inline"><input type="radio" name="meal"
										value="1" class="input-xlarge" required>Yes&nbsp;</label>
									<label class="radio-inline"><input type="radio" name="meal"
										value="0" class="input-xlarge" required>No&nbsp;</label>
								</div>
							</div> <br />
                            
                        <!--Medical Support-->
                        <div class="control-group">
								<label class="control-label" for="medicine">Access to Medical Support / Medicine?</label>
								<div class="controls">
									<label class="radio-inline"><input type="radio"
										name="medical" value="1" class="input-xlarge" required>Yes&nbsp;</label>
									<label class="radio-inline"><input type="radio"
										name="medical" value="0" class="input-xlarge" required>No&nbsp;</label>
								</div>
							</div> <br />
                            
                        <!--Shelter-->
                        <div class="control-group">
                            <label class="control-label" for="shelter">Access to shelter?</label>
                            <div class="controls">
                                <label class="radio-inline"><input type="radio" name="shelter" value="permanent" class="input-xlarge" required>Permanent&nbsp;&nbsp;</label>
                                <label class="radio-inline"><input type="radio" name="shelter" value="temp" class="input-xlarge" required>Temporary&nbsp;&nbsp;</label>
                                <label class="radio-inline"><input type="radio" name="shelter" value="temp" class="input-xlarge" required>No shelter&nbsp;&nbsp;</label>
                            </div>
                        </div> <br />
                        
                        <!--Psychological State-->
                        <div class="control-group">
                            <label class="control-label" for="psychological_state">Psychological State?</label>
                            <div class="controls">
                                <label class="radio-inline"><input type="radio" name="psychological_state" value="friegntened" class="input-xlarge" required>Shocked&nbsp;&nbsp;</label>
                                <label class="radio-inline"><input type="radio" name="psychological_state" value="stress" class="input-xlarge" required>Stressed&nbsp;&nbsp;</label> 
                                 <label class="radio-inline"><input type="radio" name="psychological_state" value="depressed" class="input-xlarge" required>Depressed&nbsp;&nbsp;</label>   
                                <label class="radio-inline"><input type="radio" name="psychological_state" value="normal" class="input-xlarge" required>Normal&nbsp;&nbsp;</label>
                                <label class="radio-inline"><input type="radio" name="psychological_state" value="positive" class="input-xlarge" required>Positive&nbsp;&nbsp;</label>
                            </div>
                        </div> <br />
                        
                        <!--Physical State-->
                        <div class="control-group">
								<label class="control-label" for="physical_state">Physical state</label>
								<div class="controls">
									<label class="checkbox-inline"><input type="checkbox" name="physical_state[]" value="no warm clothing" class="input-xlarge">has no warm clothing</label><br />
                                    <label class="checkbox-inline"><input type="checkbox" name="physical_state[]" value="no blankets" class="input-xlarge"> has no blanket</label><br />
                                    <label class="checkbox-inline"><input type="checkbox" name="physical_state[]" value="no mat" class="input-xlarge"> has no mat</label><br />
                                    <label class="checkbox-inline"><input type="checkbox" name="physical_state[]" value="no tent" class="input-xlarge"> has no tent</label><br />
                                    <label class="checkbox-inline"><input type="checkbox" name="physical_state[]" value="no utensils" class="input-xlarge"> has no utensils (plates, cups, spoons, cooking pot)</label>
								</div>
							</div> <br />
                            
                        <!--Financial State-->
                        <div class="control-group">
								<label class="control-label" for="financial_state">Financial state</label>
								<div class="controls">
									<label class="radio-inline"><input type="radio" name="economic_state" value="dire" class="input-xlarge" required>Dire (has less than Rs.100 per day to spend for the family for a month)</label><br />
									<label class="radio-inline"><input type="radio" name="economic_state" value="poor" class="input-xlarge" required>Poor (has less than Rs.200 per day to spend for the family for a month)</label><br />
                                    <label class="radio-inline"><input type="radio" name="economic_state" value="satisfactory" class="input-xlarge" required>Satisfactory (has less than Rs.500 per day to spend for the family for a month)</label> <br />
                                    <label class="radio-inline"><input type="radio" name="economic_state" value="good" class="input-xlarge" required>Good (has more than Rs.500 per day to spend for the family for a month)</label>
								</div>
							</div> <br />
                            
                        <!--Disease State-->
                        <div class="control-group">
								<label class="control-label" for="cont_disease">Affected by any contagious disease ?</label>
								<div class="controls">
									<label class="radio-inline"><input type="radio" name="cont_disease" value="1" class="input-xlarge" checked required>Yes&nbsp;</label>
									<label class="radio-inline"><input type="radio" name="cont_disease" value="0" class="input-xlarge" required>No&nbsp;</label>
								</div>
							</div>
                        <div class="control-group disease_name">
                            <label class="control-label" for="disease_name">Disease Name</label>
                            <div class="controls">
                                <input type="text" name="disease_name" value="" class="form-control" placeholder="Enter Disease Name Here" required>

                            </div>
                        </div>
                        <div class="control-group disease_condition">
                            <label class="control-label" for="disease_condition">Disease Condition</label>
                            <div class="controls">
                                <textarea name="disease_condition" class="form-control" placeholder="Enter Patient's Condition Here"></textarea>
                            </div>
                        </div> <br />
                        <legend></legend>
                        <!--Buttons-->
                    	<div class="control-group">
                        	<div class="controls">
                            	<button type="submit" name="submit" class="btn btn-success">Submit</button>
                            	<button type="reset" class="btn btn-warning pull-right">Reset Form</button>
                        	</div>
                    	</div>
                        
                    </div>
                
                </fieldset>
            </form>
            <br />
    	</div>
	</div>
    
<script type="text/javascript">

$("input:radio[name=cont_disease]:first-child").click(function(){
	if($(this).val()==1){
		$(".disease_name").css("display","block");
		$(".disease_condition").css("display","block");
	}else{
		$(".disease_name").css("display","none");
		$(".disease_condition").css("display","none");
	}
})

</script>

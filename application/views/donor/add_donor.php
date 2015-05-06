<link class="cssdeck" rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap_form.css">
<link class="cssdeck" rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css">

<div class="well">
    <div id="myTabContent" class="tab-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<form class="form-horizontal" action='' enctype="multipart/form-data" method="POST">
						<fieldset>
							<div id="legend">
					            <legend class="">Donation Information</legend>
					        </div>
							<div class="control-group">
			                    <label class="control-label"  for="item_name">Item Name</label>
			                    <div class="controls">
			                        <input type="text" name="item_name" value="" placeholder="Item Name" class="input-xlarge" required>
			                    </div>
			                </div>

			                <div class="control-group">
			                    <label class="control-label"  for="item_desc">Item Description</label>
			                    <div class="controls">
			                        <input type="text" name="item_desc" value="" placeholder="Item Description"class="input-xlarge" required>
			                    </div>
			                </div>

			                <div class="control-group">
			                    <label class="control-label"  for="item_type">Item Type</label>
			                    <div class="controls">
			                        <input type="text" name="item_type" value="" placeholder="Item Type" class="input-xlarge" required>
			                    </div>
			                </div>

			                <div class="control-group">
			                    <label class="control-label"  for="item_qty">Quantity</label>
			                    <div class="controls">
			                        <input type="text" name="item_qty" value="" placeholder="Item Quantity" class="input-xlarge" required>
			                    </div>
			                </div>

			                <div class="control-group">
			                    <label class="control-label"  for="collection_point">Collection Point</label>
			                    <div class="controls">
			                        <input type="text" name="collection_point" value="" placeholder="Where to collect" class="input-xlarge" required>
			                    </div>
			                </div>

			                <div class="control-group">
			                    <label class="control-label"  for="contact_number">Contact Number</label>
			                    <div class="controls">
			                        <input type="text" name="contact_number" value="" placeholder="Whom to Contact" class="input-xlarge" required>
			                    </div>
			                </div>

			                <!-- <div class="control-group">
			                    <label class="control-label"  for="media_type">Media Upload Type</label>
			                    <div class="controls">
			                    	<select name="media_type" class="input-xlarge">
			                    		<option > </option>
			                    		<option value="image"> Image </option>
			                    		<option value="video"> Video </option>
			                    		<option value="document"> Document </option>
			                    		<option value="audio"> Audio File </option>

			                    	</select>

			                    </div>
			                </div> -->
			                <div class="control-group">
			                    <label class="control-label"  for="media">Media</label>
			                    <div class="controls">
			                        <input type="file" name="media" class="input-xlarge">
			                    </div>
			                </div>

			                <div class="control-group">
			                    <label class="control-label"  for="status">Status</label>
			                    <div class="controls">
			                        <input type="text" name="status" value="" placeholder="Item status (i.e available, on-the-way, etc..." class="input-xlarge">
			                    </div>
			                </div>
			                <div class="control-group">
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

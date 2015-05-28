<!--Make Donation Body-->
	<div class="container">
    	<div id="legend">
			<legend class="">Make Donation</legend>
		</div>
        <form class="form-horizontal" action="" method="POST">
			<fieldset>
				<div class="well col-md-12">
					<h4><strong>Donation Information</strong></h4>
					<legend></legend>
                    <div class="col-md-6"> 
                        
                        <div class="control-group">
                            <label class="control-label" for="item_name">Item Name</label>
                            <div class="controls">
                                <input type="text" id="item_name" name="item_name" placeholder="Item Name" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="item_type">Item Type</label>
                            <div class="controls">
                                <select id="item_type" name="item_type" placeholder="" class="form-control">
                                	<option>Select Item Type</option>
                                    <option value="money">Cash</option>
                                    <option value="food">Food</option>
                                    <option value="clothes">Clothes</option>
                                    <option value="service">Service</option>
                                    <option value="general">General</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="item_unit">Unit for Quantity</label>
                            <div class="controls">
                                <select id="item_unit" name="item_unit" placeholder="" class="form-control">
                                	<option>Select Unit</option>
                                    <option value="rs">Rs.</option>
                                    <option value="pcs">Pcs.</option>
                                    <option value="kg">Kg</option>
                                    <option value="ltr">Litre</option>
                                    <option value="meter">Meter</option>
                                    <option value="qui">Quintel</option>
                                    <option value="ton">Ton</option>
                                    <option value="carton">Carton</option>
                                    
                                </select>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="item_quantity">Item Quantity</label>
                            <div class="controls">
                                <input type="number" min="0" step="any" id="item_quantity" name="item_quantity" placeholder="" class="form-control">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="item_desc">Item Description</label>
                            <div class="controls">
                                <textarea id="item_desc" name="item_desc" placeholder="Enter a short description about the item you are donating here." class="form-control"></textarea>
                            </div>
                        </div>
                      </div>
                      
                    <div class="col-md-6">
                        <div class="control-group">
                            <label class="control-label" for="collection_point">Collection Point</label>
                            <div class="controls">
                                <input type="text" id="collection_point" name="collection_point" placeholder="Collection Point" class="form-control" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="donor_name">Donor Name</label>
                            <div class="controls">
                                <input type="text" id="donor_name" name="donor_name" placeholder="Donor Full Name" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="donor_phone">Donor Contact No.</label>
                            <div class="controls">
                                <input type="tel" id="donor_phone" name="donor_phone" placeholder="Donor Contact No." class="form-control">
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="item_status">Item Status</label>
                            <div class="controls">
                                <select id="item_status" name="item_status" placeholder="" class="form-control">
                                	<option>Select Item Status</option>
                                    <option value="delivered">Delivered</option>
                                    <option value="way">On the Way</option>
                                    <option value="avil">Available</option>
                                    <option value="out_stock">Out of stock</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="control-group">
                        	<br /><legend></legend><br />
                        	<button type="submit" name="submit" class="btn btn-success pull-right">Donate</button>
                        	<button type="reset" class="btn btn-warning pull-left">Reset Form</button><br />
                    	</div>
                        
                    </div>                    
				</div>
            </fieldset>
        </form>
	</div>
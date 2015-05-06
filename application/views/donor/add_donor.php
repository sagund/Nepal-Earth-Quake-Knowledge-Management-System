	<div class="container">
		<div class="row">
        	<div class="col-md-6">
            <form class="form-horizontal" action="" method="POST">
                <fieldset>
                    <div id="legend">
                        <legend class=""><h2>Make Donation</h2></legend>
                    </div>
                    <h3>Donation Information</h3>
                    <div class="well">
                        <div class="control-group">
                            <label class="control-label" for="item_name">Item Name</label>
                            <div class="controls">
                                <input type="text" id="item_name" name="item_name" placeholder="Item Name" class="form-control input-lg" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="item_type">Item Type</label>
                            <div class="controls">
                                <select id="item_type" name="item_type" placeholder="" class="form-control input-lg" required>
                                	<option>Select Item Type</option>
                                    <option>Cash</option>
                                    <option>Food</option>
                                    <option>Water</option>
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="item_unit">Unit for Quantity</label>
                            <div class="controls">
                                <select id="item_unit" name="item_unit" placeholder="" class="form-control input-lg" required>
                                	<option>Select Unit</option>
                                    <option>Rs.</option>
                                    <option>Pcs.</option>
                                    <option>Kg</option>
                                    <option>Litre</option>
                                    <option>Meter</option>
                                    <option>Quintel</option>
                                    <option>Ton</option>
                                    <option>Carton</option>

                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="item_quantity">Item Quantity</label>
                            <div class="controls">
                                <input type="number" min="0" step="any" id="item_quantity" name="item_quantity" placeholder="" class="form-control input-lg" required>
                            </div>
                        </div>


                        <div class="control-group">
                            <label class="control-label" for="item_description">Item Description</label>
                            <div class="controls">
                                <textarea id="item_description" name="item_description" placeholder="Enter a short description about the item you are donating here." class="form-control input-lg"></textarea>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="collection_point">Collection Point</label>
                            <div class="controls">
                                <input type="text" id="collection_point" name="collection_point" placeholder="Collection Point" class="form-control input-lg" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="donor_name">Donor Name</label>
                            <div class="controls">
                                <input type="text" id="donor_name" name="donor_name" placeholder="Donor Full Name" class="form-control input-lg" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="donor_phone">Donor Contact No.</label>
                            <div class="controls">
                                <input type="tel" id="donor_phone" name="donor_phone" placeholder="Donor Contact No." class="form-control input-lg">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="item_status">Item Status</label>
                            <div class="controls">
                                <select id="item_status" name="item_status" placeholder="" class="form-control input-lg">
                                	<option>Select Item Status</option>
                                    <option>Delivered</option>
                                    <option>On the Way</option>
                                    <option>Available</option>
                                    <option>Out of stock</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="control-group">
                        <!-- Button -->
                        <div class="controls">
                            <button type="submit" name="submit" class="btn btn-success">Donate</button>
                            <button type="reset" class="btn btn-warning pull-right">Reset Form</button>
                        </div>
                    </div>
                </fieldset>
            </form>
            <br />
        </div>
    	</div>
	</div>

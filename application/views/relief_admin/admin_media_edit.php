 <?php foreach ($media_m as $md){?>
<div class="container">
	<div class="row">
        <div class="col-sm-12">
        	<h3>Edit Media</h3>                  <a href="<?php echo base_url();?>relief_admin/admin/delete_media/<?php echo $md['media_id'];?>">Click to Delete </a>

          <?php //echo $this->session->flashdata('msg')?>
        	<form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>relief_admin/admin/add_media/<?php echo $md['media_id']; ?>">

        	<?php if ($md['file_name'] != "0" && $md['file_name'] != NULL ){?>
        		<div class="form-group">
                  <label for="inputType" class=" control-label">Image</label>
                   <div class="">
                    
                    <img src= "<?php echo base_url();?>images/media/<?php echo $md['file_name'];?>">
                   </br>  <input type="checkbox" name="media_delete_flag" value="yes">Delete this file<br>

                   <?php } ?>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputType" class=" control-label">Media Links</label>
                   <div class="">
                      <input type="text" name="media_link" value="<?php echo $md['media_link'];?>"  class="form-control"  placeholder="Media Link">
                       <div class="help-block alert-danger">
                        
                       </div>
                  </div>
                </div>
                OR
            <div class="form-group">
                  <label for="inputType" class=" control-label">Page Description </label>
                   <div class="">
                      <input type="file" name="media">
                       <div class="help-block alert-danger">
                        
                       </div>
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputType" class=" control-label">Caption</label>

                   <div class="">
                      <input type="text" name="caption" value="<?php echo $md['caption'];?>" required class="form-control"  placeholder="Media Caption">
                       <div class="help-block alert-danger">
                        
                       </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputType" class=" control-label">Source</label>
                   <div class="">
                      <input type="text" name="media_source" value="<?php echo $md['source'];?>" required class="form-control"  placeholder="Media Source">
                       <div class="help-block alert-danger">
                        
                       </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputType" class=" control-label"> </label>
                  <div class="">
                    <button type="submit" class="btn btn-success btn-lg">Update</button>

                  </div>
                </div>
        	</form>
        </div>
    </div>
    <?php }?>
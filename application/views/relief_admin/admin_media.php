
<div class="container">
  <div class="row">
    <div class="col-sm-12">
     <h3>Add Media</h3>
     <?php //echo $this->session->flashdata('msg')?>
     <form method="post" enctype="multipart/form-data" action="<?php echo base_url().'relief_admin/admin/add_media'; ?>">

      <div class="form-group">
        <label for="inputType" class=" control-label">Media Links</label>
        <div class="">
          <input type="text" name="media_link" value="" class="form-control"  placeholder="Media Link">
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
          <input type="text" name="caption" value="" required class="form-control"  placeholder="Media Caption">
          <div class="help-block alert-danger">

          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="inputType" class=" control-label">Source</label>
        <div class="">
          <input type="text" name="media_source" value="" required class="form-control"  placeholder="Media Source">
          <div class="help-block alert-danger">

          </div>
        </div>
        </div> 
      <div class="form-group">
        <label for="inputType" class=" control-label"> </label>
        <div class="">
          <button type="submit" class="btn btn-success btn-lg">ADD</button>
        </div>
      </div>
    </form>
  </div>
</div><br /><br />
<div class="row">
 <div class="col-sm-12">
   <table class="table table-striped">
     <tr>
      <th>S.N</th>
      <th>Media Link</th>
      <th>Image</th>                  
      <th>Caption</th>
      <th>Source</th>
      <th>Edit</th>

    </tr>
    <tr>
     <?php foreach ($media_m as $md){?>
     <tr>
      <th><?php echo $md['media_id'];?></th>
      <th><?php echo $md['media_link'];?></th>
      <th><?php echo $md['file_name'];?></th>                  
      <th><?php echo $md['caption'];?></th>
      <th><?php echo $md['source'];?></th>
      <th><a href="<?php echo base_url();?>relief_admin/admin/add_media/<?php echo $md['media_id'];?>">Edit </a></th>
    </tr>
    <tr>
     <?php } ?>
     <td colspan="7">

     </td>
   </tr>

 </table>
</div>     
</div>
</div>

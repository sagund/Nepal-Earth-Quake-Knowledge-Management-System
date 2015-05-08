<script type="text/javascript" src="<?php echo base_url().'assets/ckeditor/ckeditor.js';?>"></script>
<?php
  if(isset($page_detail) && sizeof($page_detail)>0){
    $page_title=$page_detail['page_title'];
    $desc=$page_detail['page_description'];
    $status=$page_detail['status'];
    $page_url=$page_detail['url'];
    $button="Update";
    $form="admin/updatepage/".$page_detail['id'];;
  }else{
    $page_title="";
    $desc="";
    $status="";
    $page_url="";
    $button="Add";
    $form="admin/addpage";
  }
?>

<div class="container">
	<div class="row">
        <div class="col-sm-12">
        	<h3>Static Page</h3>
          <?php //echo $this->session->flashdata('msg')?>
        	<form method="post" enctype="multipart/form-data" action="<?php echo base_url().$form; ?>">
            	<div class="form-group">
                  <label for="inputType" class="control-label">Page Title </label>
                   <div class="">
                      <input type="text" name="page_title" value="<?php echo $page_title; ?>" required class="form-control"  placeholder="Page Title">
                       <div class="help-block alert-danger">
                        <?php echo form_error('page_title'); ?>
                       </div>
                  </div>
                </div>
                <div class="clearfix">
                </div>                
                <div class="form-group">
                  <label for="inputType" class=" control-label">Page Description </label>
                   <div class="">
                      <textarea  class="ckeditor" name="editor1"><?php echo $desc; ?></textarea>
                       <div class="help-block alert-danger">
                        <?php echo form_error('editor1'); ?>
                       </div>
                  </div>
                </div>
                <div class="clearfix">
                <div class="form-group">
                  <label for="inputType" class=" control-label">Page URL <small><?php echo base_url(); ?>page/</small> </label>
                   <div class="">
                      <input type="text" name="page_url" value="<?php echo $page_url; ?>" required class="form-control"  placeholder="Page URL">
                       <div class="help-block alert-danger">
                        <?php echo form_error('page_url'); ?>
                       </div>
                  </div>
                </div>
                <div class="clearfix">
                </div>
                 <div class="form-group">
                  <label for="inputType" class=" control-label">Status  </label>
                  <div class="">
                      <?php if($status==1){
                       echo' <input type="checkbox" checked value="1" name="status"  >';
                      }else{
                        echo' <input type="checkbox" value="1" name="status"  >';
                      }?>
                       Make an Active.
                       <div class="help-block alert-danger">
                       </div>
                  </div>
                </div>
                <div class="clearfix">
                </div>
                <div class="form-group">
                  <label for="inputType" class=" control-label"> </label>
                  <div class="">
                    <button type="submit" class="btn btn-success btn-lg"><?php echo $button; ?></button>
                  </div>
                </div>
            </form>
        </div>
    </div><br/><br/>
     <div class="row">
       <div class="col-sm-12">
         <table class="table table-striped">
                <tr>
                  <th>S.N</th>
                  <th>Page title</th>
                  <!-- <th>Page Description</th>                   -->
                  <th>Status</th>
                  <th>Edit</th>
                </tr>
                <?php 

                if(isset($pages) && sizeof($pages)>0){
                  foreach ($pages as $key => $page) {
                    echo '<tr>
                        <td>'.($key+1).'</td>';
                       
                    echo '<td>'.$page['page_title'].'</td>                        
                       
                        <td>'.$page['status'].'</td>
                        <td>
                        <a href="'.base_url().'page/'.$page['url'].'"><i class="glyphicon glyphicon-search" title="View Page" target="_blank"></i></a> | 
                        <a href="'.base_url().'admin/pages/'.$page['id'].'"><i class="glyphicon glyphicon-pencil" title="Edit Page"></i></a> | 
                        <a onclick="return confirm(\'Are you sure you want delete?\')" href="'.base_url().'admin/deletepage/'.$page['id'].'" title="Delete Page"><i class="glyphicon glyphicon-remove"></i></a>
                        </td>
                     
                       
                    </tr>';
                  }

                }else{?>
                  <tr>
                    <td colspan="7">
                      <span style="font-size:18px;color:#B2B2B2">No Pages Availalble.</span>
                    </td>
                  </tr>
                <?php  }?>

          </table>
     </div>     
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    CKEDITOR.replace( 'editor1', {
        //filebrowserBrowseUrl: '/browser/browse.php',
        filebrowserUploadUrl: '<?php echo base_url();?>assets/ckeditor/upload.php',
        filebrowserImageWindowWidth: '640',
        filebrowserImageWindowHeight: '480'
    });
  });
</script>
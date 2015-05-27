<?php 
    require_once('nav.php') ;
?>
    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header"><?php echo $page_detail['page_title']; ?></h2>
                <?php 
                    $page_detail['page_description']=str_replace("../../", base_url(), $page_detail['page_description']);
                    echo $page_detail['page_description']; 
                ?>
                <br>
                <p>Last Updated On:<a ><?php 
                $date = explode(' ', $page_detail['updated_date']);
                echo $date[0]; ?></a></p>
            </div>
        </div>
    </div>


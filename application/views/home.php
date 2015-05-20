    <header>
        <div class="header-content">
            <div class="header-content-inner">

                <h1>Nepal Earthquake<br /> Victim Relief Endeavours</h1>

                <hr>
                <p>Total Death: <strong><?php echo $death ?></strong>. Total Injured:<strong><?php echo $injured ?></strong>.<br> 
                    <small>(Source: <a href="http://drrportal.gov.np" target="_blank">drrportal.gov.np</a>  Updated Date: <?php echo $updateAt ?>)</small><br />
                	Most Affected Districts: <strong>Sindhupalchowk, Kathmandu,Nuwakot, Rasuwa,
Kavrepalanchowk, Bhaktapur, Dolakha,Nuwakot, Gorkha,Dhading,Lalitpur,Okhaldhunga,Makawanpur,Ramechhap</strong></p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">We've got what you need!</h2>
                    <hr class="light">
                    <p class="text-faded">This is an attempt to very quickly realize a Knowledge Management System(KMS) which you can use to match demands, supplies, supports and needs in the earthquake victim relief endeavors, where everyone in the world is with Nepal.</p>
                    <a href="<?php echo base_url(); ?>page/about" class="btn btn-default btn-xl">Read More!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="help">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Help the Earthquake victims</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                     <a href="<?php echo base_url(); ?>"><div class="service-box">
                        <i class="fa fa-4x fa-users wow bounceIn text-primary"></i>
                        <h3>Victims</h3>
                        <p class="text-muted">There are more than 8 millions people are affected by earthquake. Many are from very remote areas of Nepal.</p>
                    </div></a>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <a href="<?php echo base_url(); ?>page/agencies"><div class="service-box">
                        <i class="fa fa-4x fa-thumbs-up wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Volunteer</h3>
                        <p class="text-muted">Even with your small effort many people can live better. Lets volunteer and help.</p>
                    </div></a>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <a href="<?php echo base_url(); ?>"><div class="service-box">
                        <i class="fa fa-4x fa-usd wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>Donate</h3>
                        <p class="text-muted">We help to make sure that the donations go to the people in need. We help in routing your contributions to the right people.</p>
                    </div></a>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                     <a href="<?php echo base_url(); ?>victim"><div class="service-box">
                        <i class="fa fa-4x fa-map-marker wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Affected Areas</h3>
                        <p class="text-muted">More than 15 districts with estimated 8 million people have been affected by the earthquake. View all in detail.</p>
                    </div></a>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="districts">
        <div class="container-fluid">
            <div class="row no-gutter">
                <?php if(isset($districts) && sizeof($districts)>0){
                    $effected_districts=array("Sindhupalchok", "Kathmandu","Nuwakot", "Rasuwa", "Kavrepalanchok", "Bhaktapur", "Dolakha", "Gorkha","Dhading","Lalitpur","Okhaldhunga","Makwanpur","Ramechhap" );
                    $count = 0;
                    foreach ($districts as $key => $district) {
                       if(in_array($district['name'], $effected_districts)){ 
                        //echo $count;
                        //if ($count<6) {
                            
                        ?>
                       <!--  <div class="col-lg-4 col-sm-6"> -->
                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                            <a href="<?php echo base_url(); ?>victim/district_details/<?php echo $district['id'];?>" class="portfolio-box">
                                <img src="<?php echo base_url(); ?>assets/img/affected_areas/<?php echo strtolower($district['name']); ?>/main.jpg" class="img-responsive" alt="">
                                <div class="portfolio-box-caption">
                                    <div class="portfolio-box-caption-content">
                                        <div class="project-category text-faded">
                                            <?php echo $district['zone_name']; ?>
                                        </div>
                                        <div class="project-name">
                                            <?php echo $district['name']; ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                <?php   //}
                 $count++;
                    }
                 }
                }?>
                
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Let's help, even small effort can make big changes. </h2>
                <a href="<?php echo base_url(); ?>register" class="btn btn-default btn-xl wow tada">Join Us Now!</a>
            </div>
        </div>
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready to join with us? That's great! Join us or give us a call or just send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>01-526-0469</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:feedback@afterquake.org">feedback@afterquake.org</a></p>
                </div>
            </div>
        </div>
    </section>

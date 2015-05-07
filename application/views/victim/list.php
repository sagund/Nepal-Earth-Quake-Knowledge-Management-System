<link rel="stylesheet" type="text/css" href="<?php echo base_url() ;?>assets/css/style1.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ;?>assets/css/district_list.css" />

<script type="text/javascript">
//to redirect to specific content via url
	/*if(window.location.hash) {
		var hashvalue = window.location.hash;
		var sendto = hashvalue.replace(/#/g , ""); 
		setTimeout(function(){
			var l = document.getElementById(sendto);
			l.click();

			$('#mainNav').removeClass('navbar-fixed-top').addClass('hide');	
		},500)
	}*/
</script>

		<div class="wrapper">
			<div id="theGrid" class="main">
				<?php 
					$this->load->view ( 'nav' );
				?>
				<section class="grid">
				  <?php if(isset($districts) && sizeof($districts)>0){
	                $effected_districts=array("Sindhupalchok", "Kathmandu","Nuwakot", "Rasuwa", "Kavrepalanchok", "Bhaktapur", "Dolakha", "Gorkha","Dhading","Lalitpur","Okhaldhunga","Makwanpur","Ramechhap" );
	                foreach ($districts as $key => $district) {
	                   if(in_array($district['name'], $effected_districts)){  ?>
	                   <a class="grid__item" href="<?php echo base_url(); ?>victim/district_details/<?php echo $district['id'];?>">
							<h2 class="title title--preview"><?php echo $district['name']; ?></h2>
							<div class="loader"></div>
							<span class="category"><?php echo $district['zone_name']; ?> Zone</span>
							<div class="meta meta--preview">
								
								<img class="meta__avatar" src="<?php echo base_url(); ?>assets/img/district_small/<?php echo ucfirst($district['name']); ?>.png" alt="<?php echo $district['name']; ?>" />
								<span class="meta__date"><i class="fa fa-times"></i> 15 Dead</span>
								<span class="meta__reading-time"><i class="fa fa-medkit"></i> 25 Casualties</span>
							</div>
						</a>
	            <?php  
	                }

	                   
	                }
	            }?>
				</section>
					
					
				
				
			</div>
		</div><!-- /wrapper -->

		<!--<script src="<?php echo base_url() ;?>assets/js/modernizr.custom.js"></script>
		<script src="<?php echo base_url() ;?>assets/js/district_list.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){

			$('.grid__item').click(function(){
				setTimeout(function(){
					$('#mainNav').removeClass('navbar-fixed-top');	
				},500);
				
			});


			$('#close-pageinfo').click(function(){
				$('#mainNav').addClass('navbar-fixed-top').removeClass('hide');
			});
		});
			
		</script>-->

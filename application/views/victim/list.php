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
					<a class="grid__item" href="<?php echo base_url(); ?>victim/district_details">
						<h2 class="title title--preview">Sindhupalchowk</h2>
						<div class="loader"></div>
						<span class="category">Bagmati Zone</span>
						<div class="meta meta--preview">
							<img class="meta__avatar" src="http://placehold.it/50x50&text=Map Outline" alt="Achham" />
							<span class="meta__date"><i class="fa fa-times"></i> 15 Dead</span>
							<span class="meta__reading-time"><i class="fa fa-medkit"></i> 25 Casualties</span>
						</div>
					</a>
					
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

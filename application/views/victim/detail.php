<link rel="stylesheet" type="text/css" href="<?php echo base_url() ;?>assets/css/style1.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ;?>assets/css/district_list.css" />
<div class="totop" ><a href="#theGrid"><i class="fa fa-chevron-up fa-2x"></i></a></div>
<div class="container">
	<div id="theGrid" class="">
		<section class="grid">
			<div class="">
				
				<article class="" id="toTopAn">
					<span class="category category--full"><?php echo $district_detail['zone_name'] ?> Zone</span>
					<h2 class="title title--full"><?php echo $district_detail['name'] ?></h2>
					<div class="meta meta--full">
						<img class="meta__avatar__large" src="<?php echo base_url(); ?>assets/img/district_large/<?php echo ucfirst($district_detail['name']); ?>.png" alt="<?php echo $district_detail['name'] ?>" />
					
					</div>
					<div class="">
						<div class="col-md-8">
							<div class="well col-xs-12 col-sm-6">
								<label>Contents</label>
								<ol>
									<li><a href="#achham-images">Images</a></li>
									<li><a href="#achham-newscuts">News Articles</a></li>
									<li><a href="#achham-videos">Videos</a></li>
									<li><a href="#achham-others">Others</a></li>
								</ol>
							</div>
							<div class="clearfix"></div><br>
							<p></p>
						</div>
						<div class="col-md-4">
							<table cellspacing="3" class="table table-striped">
						    	<h3 class="text-center"><?php echo $district_detail['name'] ?></h3>
							    <tbody>
							    	<tr>
							    		<th>Urgent Need</th>
							    		<th>Tent &amp; drinkable water</th>
							    	</tr>
							    	<tr>
							    		<th>Municipality</th>
							    		<td></td>
							    	</tr>
							    	<tr>
							    		<th>VDC</th>
							    		<td></td>
							    	</tr>
							        <tr>
							            <th>Dead</th>
							            <td></td>
							        </tr>
							        <tr>
							            <th>Casualties</th>
							            <td></td>
							        </tr>
							        <tr>
							            <th>Homeless</th>
							            <td></td>
							        </tr>
							        <tr>
							            <th>Population</th>
							            <td></td>
							        </tr>
							        <tr>
							            <th>Male</th>
							            <td></td>
							        </tr>
							         <tr>
							            <th>Female</th>
							            <td></td>
							        </tr>
							         <tr>
							            <th>Children</th>
							            <td></td>
							        </tr>
							         <tr>
							            <th>Total Houses</th>
							            <td></td>
							        </tr>
							         <tr>
							            <th>Damaged Houses</th>
							            <td></td>
							        </tr>
							         <tr>
							            <th>Livable Houses</th>
							            <td></td>
							        </tr>

							    </tbody>
							</table>
						</div>
					</div>
					<div class="clearfix"></div>
					<div id="achham-images">
						<div class="col-md-12">
							<h2>Images</h2>
						</div>
						<div class="clearfix"></div>
							
						<div class="img-gallery">
							<div class="col-md-3 col-sm-4 col-xs-6">
								<a title="Caption 1" rel="prettyPhoto[images]" href="<?php echo base_url();?>assets/img/quakes/1.jpg"><img class="img-responsive" src="<?php echo base_url();?>assets/img/quakes/1.jpg" /></a>
								
							</div>
							<div class="col-md-3 col-sm-4 col-xs-6">
								<a title="Caption 2" rel="prettyPhoto[images]" href="<?php echo base_url();?>assets/img/quakes/2.jpg"><img class="img-responsive" src="<?php echo base_url();?>assets/img/quakes/2.jpg" /></a>
							</div>
							<div class="col-md-3 col-sm-4 col-xs-6">
								<a title="Caption 3" rel="prettyPhoto[images]" href="<?php echo base_url();?>assets/img/quakes/3.jpg"><img class="img-responsive" src="<?php echo base_url();?>assets/img/quakes/3.jpg" /></a>
								
							</div>
							<div class="col-md-3 col-sm-4 col-xs-6">
								<a title="Caption 4" rel="prettyPhoto[images]" href="<?php echo base_url();?>assets/img/quakes/4.jpg"><img class="img-responsive" src="<?php echo base_url();?>assets/img/quakes/4.jpg" /></a>
							</div>
							<div class="col-md-3 col-sm-4 col-xs-6">
								<a title="Caption 5" rel="prettyPhoto[images]" href="<?php echo base_url();?>assets/img/quakes/5.jpg"><img class="img-responsive" src="<?php echo base_url();?>assets/img/quakes/5.jpg" /></a>
								
							</div>
							<div class="col-md-3 col-sm-4 col-xs-6">
								<a title="Caption 6" rel="prettyPhoto[images]" href="<?php echo base_url();?>assets/img/quakes/6.jpg"><img class="img-responsive" src="<?php echo base_url();?>assets/img/quakes/6.jpg" /></a>
							</div>
							<div class="col-md-3 col-sm-4 col-xs-6">
								<a title="Caption 7" rel="prettyPhoto[images]" href="<?php echo base_url();?>assets/img/quakes/7.jpg"><img class="img-responsive" src="<?php echo base_url();?>assets/img/quakes/7.jpg" /></a>
								
							</div>
							<div class="col-md-3 col-sm-4 col-xs-6">
								<a title="Caption 8" rel="prettyPhoto[images]" href="<?php echo base_url();?>assets/img/quakes/8.jpg"><img class="img-responsive" src="<?php echo base_url();?>assets/img/quakes/8.jpg" /></a>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div id="achham-newscuts">
						<div class="col-md-12">
							<h2>News Articles</h2>
						</div>
						<div class="clearfix"></div>
						<div class="news-cut">
							<div class="col-md-3 col-sm-4 col-xs-6">
								<a title="Caption 1" rel="prettyPhoto[news-cut]" href="<?php echo base_url();?>assets/img/quakes/1.jpg"><img class="img-responsive" src="<?php echo base_url();?>assets/img/quakes/1.jpg" /></a>
							</div>
							<div class="col-md-3 col-sm-4 col-xs-6">
								<a title="Caption 2" rel="prettyPhoto[news-cut]" href="<?php echo base_url();?>assets/img/quakes/2.jpg"><img class="img-responsive" src="<?php echo base_url();?>assets/img/quakes/2.jpg" /></a>
							</div>
							<div class="col-md-3 col-sm-4 col-xs-6">
								<a title="Caption 3" rel="prettyPhoto[news-cut]" href="<?php echo base_url();?>assets/img/quakes/3.jpg"><img class="img-responsive" src="<?php echo base_url();?>assets/img/quakes/3.jpg" /></a>
							</div>
							
						</div>
					</div>
					<div class="clearfix"></div>
					<div id="achham-videos">
						<div class="col-md-12">
							<h2>Videos</h2>
							<div class="">
								<iframe width="560" height="315"  class="youtube-vid" src="https://www.youtube.com/embed/_gE0UnyA2kI" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>

					</div>
					<div class="clearfix"></div>
					<div id="achham-others">
						<div class="col-md-12">
							<h2>Others</h2>
							<h3>References</h3>
							<ul>
								<!-- <li><a href="">Earthquake 2015, Ekantipur.com</a></li>
								<li><a href="">Earthquake Nepal Achham, Annapurna Post.com</a></li>
								<li><a href="">Nepal Earthquake, Photography Nepal [FB Page]</a></li> -->
							</ul>
						</div>
					</div>
				</article>
				
			</div>
			<!-- <a class="close-button" id="close-pageinfo" href="#"><i class="fa fa-close"></i><span>Close</span></a> -->
		</section>
	</div>
</div>
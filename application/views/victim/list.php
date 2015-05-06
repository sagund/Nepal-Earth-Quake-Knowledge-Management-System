<link rel="stylesheet" type="text/css" href="<?php echo base_url() ;?>assets/css/style1.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ;?>assets/css/district_list.css" />

<script type="text/javascript">
//to redirect to specific content via url
	if(window.location.hash) {
		var hashvalue = window.location.hash;
		var sendto = hashvalue.replace(/#/g , ""); 
		setTimeout(function(){
			var l = document.getElementById(sendto);
			l.click();

			$('#mainNav').removeClass('navbar-fixed-top').addClass('hide');	
		},500)
	}
</script>

		<div class="wrapper">
			<button id="menu-toggle" class="menu-toggle hide"><span>Menu</span></button>
			<div id="theSidebar" class="sidebar hide">
				<button class="close-button fa fa-fw fa-close"></button>
			</div>
			<div id="theGrid" class="main">
				<?php 
					$this->load->view ( 'nav' );
				?>
				<section class="grid">
					<a class="grid__item" href="#achham" id="achham">
						<h2 class="title title--preview">Achham</h2>
						<div class="loader"></div>
						<span class="category">Seti Zone</span>
						<div class="meta meta--preview">
							<img class="meta__avatar" src="http://placehold.it/50x50&text=Map Outline" alt="Achham" />
							<span class="meta__date"><i class="fa fa-times"></i> 15 Dead</span>
							<span class="meta__reading-time"><i class="fa fa-medkit"></i> 25 Casualties</span>
						</div>
					</a>
					<a class="grid__item" href="#arghakhanchi" id="arghakhanchi">
						<h2 class="title title--preview">Arghakhanchi</h2>
						<div class="loader"></div>
						<span class="category">Lumbini Zone</span>
						<div class="meta meta--preview">
							<div class="text-center">
							<i class="fa fa-file-text meta__avatar fa-2x"></i></div>
							<span class="meta__date"><i class="fa fa-times"></i> 2 Dead</span>
							<span class="meta__reading-time"><i class="fa fa-medkit"></i> 8 Casualties</span>
						</div>
					</a>
					<a class="grid__item" href="#baglung" id="baglung">
						<h2 class="title title--preview">Baglung</h2>
						<div class="loader"></div>
						<span class="category">Dhaulagiri Zone</span>
						<div class="meta meta--preview">
							<div class="text-center">
							<i class="fa fa-file-text meta__avatar fa-2x"></i></div>
							<span class="meta__date"><i class="fa fa-times"></i> 14 Dead</span>
							<span class="meta__reading-time"><i class="fa fa-medkit"></i> 35 Casualties</span>
						</div>
					</a>
					<a class="grid__item" href="#baitadi" id="baitadi">
						<h2 class="title title--preview">Baitadi</h2>
						<div class="loader"></div>
						<span class="category">Mahakali Zone</span>
						<div class="meta meta--preview">
							<div class="text-center">
							<i class="fa fa-file-text meta__avatar fa-2x"></i></div>
							<span class="meta__date"><i class="fa fa-times"></i> 0 Dead</span>
							<span class="meta__reading-time"><i class="fa fa-medkit"></i> 5 Casualties</span>
						</div>
					</a>
					<a class="grid__item" href="#bajhang" id="bajhang">
						<h2 class="title title--preview">Bajhang</h2>
						<div class="loader"></div>
						<span class="category">Seti Zone</span>
						<div class="meta meta--preview">
							<div class="text-center">
							<i class="fa fa-file-text meta__avatar fa-2x"></i></div>
							<span class="meta__date"><i class="fa fa-times"></i> 15 Dead</span>
							<span class="meta__reading-time"><i class="fa fa-medkit"></i> 25 Casualties</span>
						</div>
					</a>	
				</section>
				<section class="content">
					<div class="scroll-wrap">
						<div class="totop" ><a href="#toTopAn"><i class="fa fa-chevron-up fa-2x"></i></a></div>
						<article class="content__item" id="toTopAn">
							<span class="category category--full">Seti Zone</span>
							<h2 class="title title--full">Achham</h2>
							<div class="meta meta--full">
								<img class="meta__avatar" src="http://placehold.it/100x100&text=Map Outline" alt="Achham" />
								<span class="meta__author">Far-Western Development Region</span>
								<span class="meta__date hide"><i class="fa fa-times"></i> 15 Dead</span>
								<span class="meta__reading-time hide"><i class="fa fa-medkit"></i> 25 Casualties</span>
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
									<p>I am fully aware of the shortcomings in these essays. I shall not touch upon those which are characteristic of first efforts at investigation. The others, however, demand a word of explanation.</p>
									<p>The four essays which are here collected will be of interest to a wide circle of educated people, but they can only be thoroughly understood and judged by those who are really acquainted with psychoanalysis as such. It is hoped that they may serve as a bond between students of ethnology, philology, folklore and of the allied sciences, and psychoanalysts; they cannot, however, supply both groups the entire requisites for such co-operation. They will not furnish the former with sufficient insight into the new psychological technique, nor will the psychoanalysts acquire through them an adequate command over the material to be elaborated. Both groups will have to content themselves with whatever attention they can stimulate here and there and with the hope that frequent meetings between them will not remain unproductive for science.</p>
								</div>
								<div class="col-md-4">
									<table cellspacing="3" class="table table-striped">
								    	<h3 class="text-center">Achham</h3>
									    <tbody>
									    	<tr>
									    		<th>Urgent Need</th>
									    		<th>Tent &amp; drinkable water</th>
									    	</tr>
									    	<tr>
									    		<th>Municipality</th>
									    		<td>2</td>
									    	</tr>
									    	<tr>
									    		<th>VDC</th>
									    		<td>12</td>
									    	</tr>
									        <tr>
									            <th>Dead</th>
									            <td>150</td>
									        </tr>
									        <tr>
									            <th>Casualties</th>
									            <td>400</td>
									        </tr>
									        <tr>
									            <th>Homeless</th>
									            <td>30</td>
									        </tr>
									        <tr>
									            <th>Population</th>
									            <td>9000</td>
									        </tr>
									        <tr>
									            <th>Male</th>
									            <td>4000</td>
									        </tr>
									         <tr>
									            <th>Female</th>
									            <td>5000</td>
									        </tr>
									         <tr>
									            <th>Children</th>
									            <td>870</td>
									        </tr>
									         <tr>
									            <th>Total Houses</th>
									            <td>100</td>
									        </tr>
									         <tr>
									            <th>Damaged Houses</th>
									            <td>35</td>
									        </tr>
									         <tr>
									            <th>Livable Houses</th>
									            <td>65</td>
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
										<li><a href="">Earthquake 2015, Ekantipur.com</a></li>
										<li><a href="">Earthquake Nepal Achham, Annapurna Post.com</a></li>
										<li><a href="">Nepal Earthquake, Photography Nepal [FB Page]</a></li>
									</ul>
								</div>
							</div>
						</article>
						<article class="content__item">
							<span class="category category--full">Lumbini Zone</span>
							<h2 class="title title--full">Arghakhanchi</h2>
							<div class="meta meta--full">
								<span class="meta__author">Western Development Region</span>
								<span class="meta__date"><i class="fa fa-times"></i> 15 Dead</span>
								<span class="meta__reading-time"><i class="fa fa-medkit"></i> 25 Casualties</span>
							</div>
							<p>Faulty psychic actions, dreams and wit are products of the unconscious mental activity, and like neurotic or psychotic manifestations represent efforts at adjustment to one’s environment. </p>
							<p>The aforementioned psychic formations are therefore nothing but manifestations of the struggle with reality, the constant effort to adjust one’s primitive feelings to the demands of civilization. In spite of all later development the individual retains all his infantile psychic structures. Nothing is lost; the infantile wishes and primitive impulses can always be demonstrated in the grown-up and on occasion can be brought back to the surface. In his dreams the normal person is constantly reviving his childhood, and the neurotic or psychotic individual merges back into a sort of psychic infantilism through his morbid productions. The unconscious mental activity which is made up of repressed infantile material for ever tries to express itself. Whenever the individual finds it impossible to dominate the difficulties of the world of reality there is a regression to the infantile, and psychic disturbances ensue which are conceived as peculiar thoughts and acts. Thus the civilized adult is the result of his childhood or the sum total of his early impressions; psychoanalysis thus confirms the old saying: The child is father to the man.</p>
							<p>Excerpts from <a href="http://www.gutenberg.org/ebooks/41214">Totem and Taboo</a> by Sigmund Freud.</p>
						</article>
						<article class="content__item">
							<span class="category category--full">Dhaulagiri Zone</span>
							<h2 class="title title--full">Baglung</h2>
							<div class="meta meta--full">
								<span class="meta__author">Western Development Region</span>
								<span class="meta__date"><i class="fa fa-times"></i> 15 Dead</span>
								<span class="meta__reading-time"><i class="fa fa-medkit"></i> 25 Casualties</span>
							</div>
							<p>Primitive man is known to us by the stages of development through which he has passed: that is, through the inanimate monuments and implements which he has left behind for us, through our knowledge of his art, his religion and his attitude towards life, which we have received either directly or through the medium of legends, myths and fairy tales; and through the remnants of his ways of thinking that survive in our own manners and customs. </p>
							<p>Moreover, in a certain sense he is still our contemporary: there are people whom we still consider more closely related to primitive man than to ourselves, in whom we therefore recognize the direct descendants and representatives of earlier man. We can thus judge the so-called savage and semi-savage races; their psychic life assumes a peculiar interest for us, for we can recognize in their psychic life a well-preserved, early stage of our own development.
							<p>Excerpts from <a href="http://www.gutenberg.org/ebooks/41214">Totem and Taboo</a> by Sigmund Freud.</p>
						</article>
						<article class="content__item">
							<span class="category category--full">Mahakali Zone</span>
							<h2 class="title title--full">Baitadi</h2>
							<div class="meta meta--full">
								<span class="meta__author">Far-Western Development Region</span>
								<span class="meta__date"><i class="fa fa-times"></i> 15 Dead</span>
								<span class="meta__reading-time"><i class="fa fa-medkit"></i> 25 Casualties</span>
							</div>
							<p>In contrast to this, our discussion readily shows that the double meaning in question belonged to the word taboo from the very beginning and that it serves to designate a definite ambivalence as well as everything which has come into existence on the basis of this ambivalence. </p>
							<p>Taboo is itself an ambivalent word and by way of supplement we may add that the established meaning of this word might of itself have allowed us to guess what we have found as the result of extensive investigation, namely, that the taboo prohibition is to be explained as the result of an emotional ambivalence. A study of the oldest languages has taught us that at one time there were many such words which included their own contrasts so that they were in a certain sense ambivalent, though perhaps not exactly in the same sense as the word taboo[88]. Slight vocal modifications of this primitive word containing two opposite meanings later served to create a separate linguistic expression for the two opposites originally united in one word.</p>
							
							<p>Excerpts from <a href="http://www.gutenberg.org/ebooks/41214">Totem and Taboo</a> by Sigmund Freud.</p>
						</article>
						<article class="content__item">
							<span class="category category--full">Seti Zone</span>
							<h2 class="title title--full">Bajhang</h2>
							<div class="meta meta--full">
								<span class="meta__author">Far-Western Development Region</span>
								<span class="meta__date"><i class="fa fa-times"></i> 15 Dead</span>
								<span class="meta__reading-time"><i class="fa fa-medkit"></i> 25 Casualties</span>
							</div>
							<p>Conscience is the inner perception of objections to definite wish impulses that exist in us; but the emphasis is put upon the fact that this rejection does not have to depend on anything else, that it is sure of itself. </p>
							<p>If I judge my readers’ impressions correctly, I dare say that after hearing all that was said about taboo they are far from knowing what to understand by it and where to store it in their minds. This is surely due to the insufficient information I have given and to the omission of all discussions concerning the relation of taboo to superstition, to belief in the soul, and to religion. On the other hand I fear that a more detailed description of what is known about taboo would be still more confusing; I can therefore assure the reader that the state of affairs is really far from clear. We may say, however, that we deal with a series of restrictions which these primitive races impose upon themselves; this and that is forbidden without any apparent reason; nor does it occur to them to question this matter, for they subject themselves to these restrictions as a matter of course and are convinced that any transgression will be punished automatically in the most severe manner. There are reliable reports that innocent transgressions of such prohibitions have actually been punished automatically. For instance, the innocent offender who had eaten from a forbidden animal became deeply depressed, expected his death and then actually died. The prohibitions mostly concern matters which are capable of enjoyment such as freedom of movement and unrestrained intercourse; in some cases they appear very ingenious, evidently representing abstinences and renunciations; in other cases their content is quite incomprehensible, they seem to concern themselves with trifles and give the impression of ceremonials. Something like a theory seems to underlie all these prohibitions, it seems as if these prohibitions are necessary because some persons and objects possess a dangerous power which is transmitted by contact with the object so charged, almost like a contagion. The quantity of this dangerous property is also taken into consideration. Some persons or things have more of it than others and the danger is precisely in accordance with the charge. The most peculiar part of it is that any one who has violated such a prohibition assumes the nature of the forbidden object as if he had absorbed the whole dangerous charge. This power is inherent in all persons who are more or less prominent, such as kings, priests and the newly born, in all exceptional physical states such as menstruation, puberty and birth, in everything sinister like illness and death and in everything connected with these conditions by virtue of contagion or dissemination.</p>
							<p>Excerpts from <a href="http://www.gutenberg.org/ebooks/41214">Totem and Taboo</a> by Sigmund Freud.</p>
						</article>
					</div>
					<a class="close-button" id="close-pageinfo" href="#"><i class="fa fa-close"></i><span>Close</span></a>
				</section>
			</div>
		</div><!-- /wrapper -->

		<script src="<?php echo base_url() ;?>assets/js/modernizr.custom.js"></script>
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
			
		</script>

<?php if (!defined('FLUX_ROOT'))
	exit; ?>
<?php if ($session->theme !== 'website'): ?>





	<?php if (Flux::config('CMSNewsOnHomepage')): ?>
		<h2>
			<?php echo htmlspecialchars(sprintf(Flux::message('MainPageWelcome'), Flux::config('SiteTitle'))) ?>
		</h2>

		<?php if ($newstype == '1'): ?>
			<?php if ($news): ?>
				<div class="newsDiv">
					<?php foreach ($news as $nrow): ?>
						<h4>
							<?php echo $nrow->title ?>
						</h4>
						<div class="newsCont">
							<span class="newsDate"><small>by
									<?php echo $nrow->author ?> on
									<?php echo date(Flux::config('DateFormat'), strtotime($nrow->created)) ?>
								</small></span>
							<p>
								<?php echo $nrow->body ?>
							</p>
							<?php if ($nrow->created != $nrow->modified && Flux::config('CMSDisplayModifiedBy')): ?>
								<small>
									<?php echo htmlspecialchars(Flux::message('CMSModifiedLabel')) ?> :
									<?php echo date(Flux::config('DateFormat'), strtotime($nrow->modified)) ?>
								</small>
							<?php endif; ?>
							<?php if ($nrow->link): ?>
								<a class="news_link" href="<?php echo $nrow->link ?>"><small>
										<?php echo htmlspecialchars(Flux::message('CMSNewsLink')) ?>
									</small></a>
								<div class="clear"></div>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				</div>
			<?php else: ?>
				<p>
					<?php echo htmlspecialchars(Flux::message('CMSNewsEmpty')) ?>
				</p>
			<?php endif ?>

		<?php elseif ($newstype == '2'): ?>
			<?php if (isset($xml) && isset($xml->channel)): ?>
				<div class="newsDiv">
					<?php foreach ($xml->channel->item as $rssItem): ?>
						<?php $i++;
						if ($i <= $newslimit): ?>
							<h2>
								<?php echo $rssItem->title ?>
							</h2>
							<div class="newsCont">
								<span class="newsDate"><small>Posted on
										<?php echo date(Flux::config('DateFormat'), strtotime($rssItem->pubDate)) ?>
									</small></span>
								<p>
									<?php echo $rssItem->description ?>
								</p>
								<a class="news_link" href="<?php echo $rssItem->link ?>"><small>
										<?php echo htmlspecialchars(Flux::message('CMSNewsLink')) ?>
									</small></a>
								<div class="clear"></div>
							</div>
						<?php endif ?>
					<?php endforeach; ?>
				</div>
			<?php else: ?>
				<p>
					<?php echo htmlspecialchars(Flux::message('CMSNewsRSSNotFound')) ?><br /><br />
				</p>
			<?php endif ?>
		<?php endif ?>




	<?php else: ?>
		<h2>
			<?php echo htmlspecialchars(Flux::message('MainPageHeading')) ?>
		</h2>
		<p><strong>
				<?php echo htmlspecialchars(Flux::message('MainPageInfo')) ?>
			</strong></p>
		<p>
			<?php echo htmlspecialchars(Flux::message('MainPageInfo2')) ?>
		</p>
		<ol>
			<li>
				<p class="green">
					<?php echo htmlspecialchars(sprintf(Flux::message('MainPageStep1'), __FILE__)) ?>
				</p>
			</li>
			<li>
				<p class="green">
					<?php echo htmlspecialchars(Flux::message('MainPageStep2')) ?>
				</p>
			</li>
		</ol>
		<p style="text-align: right"><strong><em>
					<?php echo htmlspecialchars(Flux::message('MainPageThanks')) ?>
				</em></strong></p>
	<?php endif ?>

<?php else: ?>
	<!-- ======= Server News Updates ======= -->
	<section class="newsupdates content-wrap" id="newsupdates">
		<div class="container">
			<div class="section-title">
				<h2>Latest News</h2>
			</div>
			<div class="news-updates">
				<div class="tab-content row" id="nav-tabContent">
					<div class="news-content owl-carousel owl-theme d-flex flex-wrap">
						<div class="news-article card shadow m-3 mx-1" data-aos="flip-right" data-aos-delay="200">
							<div class="card-img-top thumbnail-container">
								<img class="img-fluid w-100 article-thumbnail"
									src="<?php echo $this->themePath('img/newsthumbnails/A1webimage.jpg') ?> " />
							</div>
							<div class="card-body news-contain">
								<span class="date">Oct 15, 2023</span>
								<span class="article-type Content Update">Content Update</span>
								<div style="height: 5px; display: block"></div>
								<a class="card-title title" target="_blank"
									href="https://projectalfheim.net/wiki/index.php/Episode_A_1_0_Old_Glast_Heim">Episode
									A1.0: Old Glast ...</a>
								<p class="card-text">
									This episode brings Old Glast Heim, Airship Assault, new
									costumes, and more!
								</p>
								<span class="author text-value font-italic font-weight-light">By: <b
										class="text-danger">Charlie</b></span>
								<a target="_blank"
									href="https://projectalfheim.net/wiki/index.php/Episode_A_1_0_Old_Glast_Heim"><span
										class="read-more" title="Read more...">Read more...</span></a>
							</div>
						</div>
						<div class="news-article card shadow m-3 mx-1" data-aos="flip-right" data-aos-delay="200">
							<div class="card-img-top thumbnail-container">
								<img class="img-fluid w-100 article-thumbnail"
									src=" <?php echo $this->themePath('img/newsthumbnails/namelessislandweb.jpg') ?> " />
							</div>
							<div class="card-body news-contain">
								<span class="date">Sept 4, 2022</span>
								<span class="article-type Content Update">Content Update</span>
								<div style="height: 5px; display: block"></div>
								<a class="card-title title" target="_blank"
									href="https://projectalfheim.net/wiki/index.php/Episode_11.3_Nameless_Island">Episode
									11.3, Nameless I...</a>
								<p class="card-text">
									With Episode 11.3 comes Nameless Island, Fallen Bishop,
									Beelzebub and more!
								</p>
								<span class="author text-value font-italic font-weight-light">By: <b
										class="text-danger">Charlie</b></span>
								<a target="_blank"
									href="https://projectalfheim.net/wiki/index.php/Episode_11.3_Nameless_Island"><span
										class="read-more" title="Read more...">Read more...</span></a>
							</div>
						</div>
						<div class="news-article card shadow m-3 mx-1" data-aos="flip-right" data-aos-delay="200">
							<div class="card-img-top thumbnail-container">
								<img class="img-fluid w-100 article-thumbnail"
									src="<?php echo $this->themePath('img/newsthumbnails/thorvolcanoweb.jpg') ?> " />
							</div>
							<div class="card-body news-contain">
								<span class="date">Aug 18, 2022</span>
								<span class="article-type Content Update">Content Update</span>
								<div style="height: 5px; display: block"></div>
								<a class="card-title title" target="_blank"
									href="https://projectalfheim.net/wiki/index.php/Episode_11.2_Veins">Episode 11.2,
									Veins...</a>
								<p class="card-text">
									With Episode 11.2 comes Thors Volcano, Ifrit, Veins town
									and more!
								</p>
								<span class="author text-value font-italic font-weight-light">By: <b
										class="text-danger">Charlie</b></span>
								<a target="_blank" href="https://projectalfheim.net/wiki/index.php/Episode_11.2_Veins"><span
										class="read-more" title="Read more...">Read more...</span></a>
							</div>
						</div>
						<div class="news-article card shadow m-3 mx-1" data-aos="flip-right" data-aos-delay="200">
							<div class="card-img-top thumbnail-container">
								<img class="img-fluid w-100 article-thumbnail"
									src="<?php echo $this->themePath('img/newsthumbnails/summerevent.jpg') ?> " />
							</div>
							<div class="card-body news-contain">
								<span class="date">Aug 1, 2022</span>
								<span class="article-type Event">Event</span>
								<div style="height: 5px; display: block"></div>
								<a class="card-title title" target="_blank"
									href="https://projectalfheim.net/wiki/index.php/Patch_Notes_August_1st_2022">Summer
									Event ends soon...</a>
								<p class="card-text">
									The summer event reaches its final month, and with it
									comes nighttime beach prontera! Make sure you spend your
									Starfish Tokens soon and snatch up your costumes and
									Wandering Duck pet while you can!
								</p>
								<span class="author text-value font-italic font-weight-light">By: <b
										class="text-danger">Charlie</b></span>
								<a target="_blank"
									href="https://projectalfheim.net/wiki/index.php/Patch_Notes_August_1st_2022"><span
										class="read-more" title="Read more...">Read more...</span></a>
							</div>
						</div>
						<div class="news-article card shadow m-3 mx-1" data-aos="flip-right" data-aos-delay="200">
							<div class="card-img-top thumbnail-container">
								<img class="img-fluid w-100 article-thumbnail"
									src="<?php echo $this->themePath('img/newsthumbnails/byalan6.jpg') ?> " />
							</div>
							<div class="card-body news-contain">
								<span class="date">June 13, 2022</span>
								<span class="article-type Content Update">Content Update</span>
								<div style="height: 5px; display: block"></div>
								<a class="card-title title" target="_blank"
									href="https://projectalfheim.net/wiki/index.php/Summer_Event_2022">Lasagna and Byalan 6
									Add...</a>
								<p class="card-text">
									Lasagna has been aded in with a newbie friendly tutorial
									to help you get started! Byalan 6 offers a challenge for
									more experienced players!
								</p>
								<span class="author text-value font-italic font-weight-light">By: <b
										class="text-danger">Charlie</b></span>
								<a target="_blank" href="https://projectalfheim.net/wiki/index.php/Summer_Event_2022"><span
										class="read-more" title="Read more...">Read more...</span></a>
							</div>
						</div>
						<div class="news-article card shadow m-3 mx-1" data-aos="flip-right" data-aos-delay="200">
							<div class="card-img-top thumbnail-container">
								<img class="img-fluid w-100 article-thumbnail"
									src="<?php echo $this->themePath('img/newsthumbnails/randgris.jpg') ?> " />
							</div>
							<div class="card-body news-contain">
								<span class="date">Mar 19, 2022</span>
								<span class="article-type Content Update">Content Update</span>
								<div style="height: 5px; display: block"></div>
								<a class="card-title title" target="_blank"
									href="https://projectalfheim.net/wiki/index.php/Kiel_Hugel_Odins">Episode 10.4:
									Hugel...</a>
								<p class="card-text">
									With 10.4 comes Valkyrie Randgris and Odins Temple. Kiel
									Hyre Quest with a skippable optoin and Hugel town itself
									are also here!
								</p>
								<span class="author text-value font-italic font-weight-light">By: <b
										class="text-danger">Charlie</b></span>
								<a target="_blank" href="https://projectalfheim.net/wiki/index.php/Kiel_Hugel_Odins"><span
										class="read-more" title="Read more...">Read more...</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section-title mt-5">

				<h2>Server Information</h2>
				<p>
					Project Alfheim is a Pre-Renewal MMORPG server that offers many
					unique mechanics to spice things up such as Random Options on
					gears, evolved pets, and more!
				</p>

			</div>
			<table class="table bottommargin-lg info-table">
				<thead>
					<tr>
						<th colspan="2" class="active" width="50%">
							Server Rates and Stats
						</th>
						<th colspan="2" class="active" width="50%">Other Key Info</th>
					</tr>
				</thead>
				<tr>
					<td class="t700">Max Level</td>
					<td>99/70</td>
					<td class="t700">Current Episode Template</td>
					<td>A1- Old Glast Heim (13.2 Pre-Re+)</td>
				</tr>
				<tr>
					<td class="t700">EXP Rates</td>
					<td>3x Base, up to 6x with Manuals.</td>
					<td class="t700">Gameplay</td>
					<td>Pre-Renewal Mechanics</td>
				</tr>
				<tr>
					<td class="t700">Drop Rates</td>
					<td class="text-success">
						5x, 1.75% floor for random optioned gears.
					</td>
					<td class="t700">Security</td>
					<td>Gepard Shield</td>
				</tr>
				<tr>
					<td class="t700">MVP Drops</td>
					<td>2x pre Lighthalzen, 1x post Lighthalzen.</td>
					<td class="t700">Player Commands</td>
					<td>
						@noks, @lgp, @shopjump, @autotrade, @autoloot, @bigmvp,
						@refresh, @monsterinfo, @iteminfo, @whereis, @searchstore,
						@whobuy, @whosell,
					</td>
				</tr>
				<tr>
					<td class="t700">MVP Cards</td>
					<td>1x</td>
				</tr>
				<tr>
					<td class="t700">Mini-Boss Drops</td>
					<td>3x</td>
				</tr>
				<tr>
					<td class="t700">Mini-Boss Cards</td>
					<td>1x</td>
				</tr>
			</table>
		</div>
	</section>
	<!-- End Server News Updates -->
	<!-- ======= Welcome Desc Section ======= -->
	<section id="cta" class="cta">
		<div class="container text-white" data-aos="zoom-in">
			<div class="row">
				<div class="about-people col-md-6" data-aos="fade-right" data-aos-delay="600">
					<img src="<?php echo $this->themePath('img/about-people.png') ?> " class="img-fluid" />
				</div>
				<div class="about-desc col-md-6 my-auto" data-aos="fade-right" data-aos-delay="300">
					<span class="about-title text-atlantis">Welcome to Project Alfheim!</span>
					<p data-aos="fade-right" data-aos-delay="600">
						Project Alfheim is a community for people who love to enjoy
						classic MMORPGs. We follow Pre-renewal Mechanics, but do not shy
						away from custom changes or renewal content. The biggest part of
						our vision is endless progression, meaning the server will never
						stop updating. <a class="collapsible">Read more.</a>
					</p>
					<p id="collapse" style="display: none">
						We are 3x/3x/5x rates, but dont let the low rates scare you.
						Party play EXP is doubled here from normal classic mechanics and
						leveling is easy with free daliy exp, event exp buffs, and
						manuals available just by playing the game. We strive to get
						people to play together so party play is heavily encouraged.
					</p>
					<div class="monthly-statistics">
						<h2 class="text-white">Monthly Statistics</h2>
						<div class="data-stats row">
							<div class="new-characters">
								<div class="icon-chars">
									<img src="<?php echo $this->themePath('img/accounts-bg.png') ?> " />
								</div>
								<div class="num-stats">
									<span class="num-data counter" data-number="102643">&nbsp;</span><br />
									<span class="text-data">New Characters</span>
								</div>
							</div>
							<div class="sign-ups">
								<div class="icon-signups">
									<img src="<?php echo $this->themePath('img/signup-bg.png') ?> " />
								</div>
								<div class="num-stats">
									<span class="num-data counter" data-number="55127">&nbsp;</span><br />
									<span class="text-data">Sign-ups</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Welcome Desc Section --><!-- ======= Server Custom Changes and Server Information ======= -->
	<section id="customchanges" class="customchanges">
		<div class="container" data-aos="fade-up">
			<div class="section-title mt-5">
				<h2>Custom Changes</h2>
				<p>
					Project Alfheim is not afraid to make custom changes to make the
					game feel more balanced and overall fun to play. We mostly focus
					on quality of life, but class balance is a key focus of ours as
					well!
				</p>
			</div>
			<div class="container">
				<div class="row">
					<div class="features d-flex flex-wrap">
						<div class="feature-card mb-4 col-md-4 px-2" data-aos="fade-up" data-aos-delay="0">
							<div class="feature-cover">
								<img src="<?php echo $this->themePath('img/customchanges/sittingregen.gif') ?> " alt=""
									class="img-fluid" />
							</div>
							<div class="feature-article shadow">
								<h4 class="feature-title text-theme text-center">
									Quality of Life Changes
								</h4>
								<p class="feature-desc">
									Most of Project Alfheims primary goal is to ease up on the
									tedious aspects of the game. From improving sitting regen
									dramatically, giving inns 30 minutes increase agi and
									blessing buffs, and having warps unlocked after visiting,
									we hope things should feel better. You can read more
									<a href="https://projectalfheim.net/wiki/index.php/Quality_of_Life_Changes">by clicking
										here</a>
								</p>
							</div>
						</div>
						<div class="feature-card mb-4 col-md-4 px-2" data-aos="fade-up" data-aos-delay="300">
							<div class="feature-cover">
								<img src="<?php echo $this->themePath('img/customchanges/magnusexample.gif') ?> " alt=""
									class="img-fluid" />
							</div>
							<div class="feature-article shadow">
								<h4 class="feature-title text-theme text-center">
									Skill Rebalancing
								</h4>
								<p class="feature-desc">
									Project Alfheim does not shy away from custom rebalancing
									of the classes often taking precedent from changes made in
									renewal and tweaked to be more balanced in a prerenewal
									setting. Most classes and builds should at a bare minimum
									feel viable and fun to use! You can see a complete list
									<a href="https://projectalfheim.net/wiki/index.php/Skill_Changes">by clicking here</a>
								</p>
							</div>
						</div>
						<div class="feature-card mb-4 col-md-4 px-2" data-aos="fade-up" data-aos-delay="600">
							<div class="feature-cover">
								<img src="<?php echo $this->themePath('img/customchanges/randomoptionsexample.gif') ?> "
									alt="" class="img-fluid" />
							</div>
							<div class="feature-article shadow">
								<h4 class="feature-title text-theme text-center">
									Random Options
								</h4>
								<p class="feature-desc">
									Random Options on Weapons, Armors, Garments, and Shoes are
									a key feature of Project Alfheim. All these gears have
									increased drop rates to 1.75% minimum and add a new flavor
									to existing pre-renewal builds! Now you have more long
									term goals to grind for than just refines! You can read
									more about these
									<a href="https://projectalfheim.net/wiki/index.php/Random_Options">by clicking here.</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Server Custom Changes and Server Information Section -->
	<!-- End LowProfileMode -->

<?php endif ?>
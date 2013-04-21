<?php
include "init.php";
include 'func/View.php';
include 'func/ProcessCategory.php';
include 'func/Category.php';
include 'func/Videos.php';

$siteName = 'LKBits.com';

if (!isset($_GET['id'])) {
	header('Location: index.php');
	exit();
}

if (isset($_GET['id'])) {
	$id = (int)$_GET['id'];
	if ($id === '') {
		header('Location: index.php');
		exit();
	} else if ($id === 0) {
		header('Location: index.php');
		exit();
	}

	$view = new View($id);
	$title = $view -> getTitle();
	$view -> incrementViews();
	$view -> setModifiedDate();
	$cate_id = $view -> getCategoryId();
	$last_modified_date = $view -> getCreatedTime();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="Watch Sri Lankan TV Shows, Movies, Funny Programs, Music Videos And Many More.">

<meta name="keywords" content="Sinhala Teledrama, Sri Lankan LIVE Shows, sri lankan lanka,Sri laka,Sri lnkan tv,lankan news,lanka,sri lanka teledrama,sri lanka tv,lanka fm,Sri lanka news,lanka news,Sri lankan models,tamil news,lankan,news,about srilanka, sinhala, sinhalese">

<title><?php echo "$title | $siteName"; ?></title>

<link href="css/view.css" rel="stylesheet" type="text/css" />

<!--new pagination start-->

<style type="text/css">
	a:link {
		text-decoration: none;
		color: #0033FF;
	}
	a:visited {
		text-decoration: underline;
		color: #0033FF;
	}
	a:hover {
		text-decoration: none;
		color: #FF9900;
	}
	a:active {
		text-decoration: underline;
		color: #FF00CC;
	}
</style>

<style type="text/css">
	.hidepiece {
		display: none
	}
	@media print {
		.hidepiece {
			display: block !important;
		}
	}
</style>
<!--new pagination end-->

</head>

<body>
<div id="wrraper">
	<div id="body">
		
		<div id="header">
			<img src="image/header.png" width="990" height="150" />
		</div>
		
		<div id="un_header">
			<div id="un_header_area" style="padding-left: 18px;">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="http://lkbits.com/category.php?cat=Sinhala%20Cartoons">Cartoons</a></li>
					<li><a href="currency.php">Currency Converter</a></li>
					<li><a href="http://lkbits.com/category.php?cat=Sinhala%20Movies">Films</a></li>
					<li><a href="http://lkbits.com/category.php?cat=Funny%20Programs">Fun Videos</a></li>
					<li><a href="http://news.lkbits.com">Gossip Lanka</a></li>
					<li><a href="http://lkbits.com/search.php?term=Palaa+Pala+Dina+Asiriya">Horoscope</a></li>
					<li><a href="http://lkbits.com/category.php?cat=For%20Ladies">Ladies Corner</a></li>
					<li><a href="music.php">MP3 Songs</a></li>
					
				</ul>
			</div>	
		</div>
		<!--<div id="un_header">
			<div id="un_header_area" style="alignment-adjust:central">
				<ul>
					<li><a href="#">Models</a></li>
					<li><a href="#">Music Videos</a></li>
					<li><a href="#">News</a></li>
					<li><a href="#">Sports</a></li>					
				</ul>
			</div>	
		</div>-->
		
		<div id="un_header_un">
			<div id="un_header_un-goo">
				<div id="un_header_un-goo-area">
					<script type="text/javascript">
						<!--
						google_ad_client ="ca-pub-1600544234483313";
						/* LKBits_View_Top */
						google_ad_slot = "4267165392";
						google_ad_width = 728;
						google_ad_height = 90;
						//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>			</div>
			</div>
		</div>
		
		<div id="content1">
			<div id="content1_area">
				
				<div id="nc">
					<div id="nc-left">
						<div id="nc-left-video-title">
																
						<?php echo "$title&nbsp;$last_modified_date"; ?>				  
						
						</div>
						
						<div id="nc-left-video" align="center">
							
							<?php
							include 'func/ResizeCode.php';
							$resizer = new ResizeCode;

							$code = $view -> getCode();
							echo $resizer -> resizeMarkup($code, array('width' => 620, 'height' => 500));
						?>
						</div>
						
							
						<div id="nc-left-video-more">
							<div id="c_catogory_name">
								<div id="name_area">
									<div id="cat_title">
									<?php
									$related_processCat = new ProcessCategory;

									$name = $related_processCat -> id2cate($cate_id);
									?>
									<?php echo $name; ?>									</div>
									<div id="c-viewall">
									 	<a href="category.php?cat=<?php echo $name; ?>">  View all items >>> </a>
									</div>
									<div id="t22_image_area">
										
									</div>	
								</div>
							</div>
							<div id="c_catogory_all">
								<div id="all_show">
								
										
											
												<?php
												$related_query = "SELECT 
                    					id
                  					 FROM 
                    					categories
                  					 WHERE
                    					name = '$name'";

												$related_result = mysql_query($related_query) or die(mysql_error());

												$num_rows = mysql_num_rows($related_result);

												if ($num_rows > 0) {
													$related_id = mysql_result($related_result, 0, "id");

													$related_output_videos_query = "SELECT 
                    									    *
                  									FROM 
                    									    videos
                  									WHERE
                    									    cate_id=$related_id
                    									ORDER BY
                    									    created_at DESC
                  									";

													$related_videos = mysql_query($related_output_videos_query) or die(mysql_error());

													$num_rows = mysql_num_rows($related_videos);

													if ($num_rows > 20) {
														$num_rows = 5;
													}

													if ($num_rows > 0) {
														$i = 0;

														while ($i < $num_rows) {
															$id = mysql_result($related_videos, $i, "id");
															$thumbnail = mysql_result($related_videos, $i, "thumbnail");
															$title = mysql_result($related_videos, $i, "title");
															$descripton = mysql_result($related_videos, $i, "description");

															$short_title = substr($title, 0, 14);
															$short = substr(urldecode($descripton), 0, 500);

															echo "<div id='clip_area'>";
															echo "<div id='uuu'>";
															echo "<div id='clip_image'>";
															echo "<a href='view.php?id=$id'>";
															echo "<img src='$thumbnail' class='clipimage'/>";
															echo "</a>";
															echo "</div>";
															echo "<div id='clip_name'>$title</div>";
															//echo "<div id='clip_date'>$short_title</div>";
															echo "</div>";
															echo "</div>";
															$i++;
														}
													}

												}
												?>												
									</div>							
							</div>
						</div>
						
						<div id="nc-left-video-more">
							<div id="c_catogory_name">
								<div id="name_area">
									<div id="cat_title">
									Recently added Videos
									</div>
									<div id="c-viewall">
											
									</div>
									<div id="t22_image_area">
										
									</div>	
								</div>
							</div>
							<div id="rnext">
								<div id="rnext_area">
									<div id="rnext_area-in">
								<div id="gallerypaginate00" class="paginationstyle"><a href="recent.php?id=2">More Videos....</a>
        </div>
									</div>
								</div>
							</div>
							<div id="c_catogory_all">
								<div id="all_show">
																	
																	<?php
																	$videos = new Videos();
																	$recent_videos = $videos -> get_recent_videos(0, 100);
																	$num_rows = mysql_num_rows($recent_videos);

																	$i = 0;

																	while ($i < $num_rows) {
																		$id = mysql_result($recent_videos, $i, "id");
																		$thumbnail = mysql_result($recent_videos, $i, "thumbnail");
																		$title = mysql_result($recent_videos, $i, "title");
																		$views = mysql_result($recent_videos, $i, "views");
																		
																		echo "<div style='display: block;' class='virtualpage00 hidepiece'>";
																		echo "<div id='clip_area'>";
																		echo "<div id='uuu'>";
																		echo "<div id='clip_image'>";
																		echo "<a href='view.php?id=$id'>";
																		echo "<img src='$thumbnail' class='clipimage' />";
																		echo "</a>";
																		echo "</div>";
																		echo "<div id='clip_name'>";
																		echo "$title";
																		echo "</div>";
																		echo "</div>";
																		echo "</div>";
																		echo "</div>";
																		
																		$i++;
																	}
					?>
									
										
																	
								</div>
							</div>
						</div>
						
					</div>
					<div id="nc-right">
						<div id="nc-right-area">
							<script type="text/javascript"><!--
google_ad_client = "ca-pub-1600544234483313";
/* LKBits_Right_Top_300x250 */
google_ad_slot = "9755295790";
google_ad_width = 300;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>					</div>
						<div id="show-banner">
							<div id="show-banner-area">
								
																<div id="show-banner-area-in-in">
								<div id="show-banner-area-in">
									
																			<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<a class="addthis_button_preferred_3"></a>
<a class="addthis_button_preferred_4"></a>
<a class="addthis_button_compact"></a>
<a class="addthis_counter addthis_bubble_style"></a>
</div>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-516fff754ad28285"></script>
<!-- AddThis Button END -->
																		</div>
								</div>
																<div id="show-banner-area-in-in">
								<div id="show-banner-area-in" style="padding-top: 20px;">
									
																			<script type="text/javascript"><!--
google_ad_client = "ca-pub-1600544234483313";
/* LKBits_Right_Top_300x250 */
google_ad_slot = "9755295790";
google_ad_width = 300;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>	
																		</div>
								</div>
														<!--		<div id="show-banner-area-in-in">
								<div id="show-banner-area-in">
									
																			<a href="http://sithma.co.uk/horoscope/index.php" target="_blank">
																						<img src="images/NipEyK71036254941_horoscope.jpg" class="show-banner-area-in" />
																					</a>
																		</div>
								</div>
																
							</div>
						</div>
						<div id="nc-right-area">
						<script type="text/javascript">
							<!--
							google_ad_client ="pub-0442943596565805";
							/* 300x250, creato 14/10/11 */
							google_ad_slot = "0036745879";
							google_ad_width = 300;
							google_ad_height = 250;
							//-->
							<!--
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>						</div>
						<div id="show-banner">
							<div id="show-banner-area">
								
																<div id="show-banner-area-in-in">
								<div id="show-banner-area-in">
									
																			<a href="http://sithma.co.uk/ladies/index.php" target="_blank">
																						<img src="images/ewRWlY42392615323_ladiess.gif" class="show-banner-area-in" />
																					</a>
																		</div>
								</div>
																<div id="show-banner-area-in-in">
								<div id="show-banner-area-in">
									
																			<a href="http://sithma.net/ladies/resepi.php?id=542" target="_blank">
																						<img src="images/riMtoj54688981828_rice.jpg" class="show-banner-area-in" />
																					</a>
																		</div>
								</div>
																<div id="show-banner-area-in-in">
								<div id="show-banner-area-in">
									
																			<a href="http://sithma.co.uk/video/" target="_blank">
																						<img src="images/lCIUAd86074364605_sinhalasong.jpg" class="show-banner-area-in" />
																					</a>
																		</div>
								</div>
																<div id="show-banner-area-in-in">
								<div id="show-banner-area-in">
									
																			<a href="http://sithma.co.uk/horoscope/sinhala-show.php?id=2673" target="_blank">
																						<img src="images/fkUSBL75558074704_horoc.gif" class="show-banner-area-in" />
																					</a>
																		</div>
								</div>
																<div id="show-banner-area-in-in">
								<div id="show-banner-area-in">
									
																			<a href="http://sithma.net/ladies/resepi.php?id=556" target="_blank">
																						<img src="images/CbczLW11063940498_cham.jpg" class="show-banner-area-in" />
																					</a>
																		</div>
								</div> -->
																
							</div>
						</div>
						
					</div>
					
					
				</div>
				
			</div>
		</div>
		
		
		
		<div id="footer">
		<div id="f_iiiii">
			<div id="footer_left">
			Copyright © 2012 - 2013 LKBits , All Rights Reserved.

			</div>
			<div id="footer_links">
					<a href="http://lkbits.com">Home</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="">about us</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="https://plus.google.com/104839919144548546094" rel="publisher">G+</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="recent.php">Recent Videos</a>
			</div>
		</div>
		</div>
		 
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38309917-1']);
  _gaq.push(['_setDomainName', 'lkbits.com']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!-- Histats.com  START (hidden counter)-->
<script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
<a href="http://www.histats.com" target="_blank" title="hit tracker" ><script  type="text/javascript" >
try {Histats.start(1,2259336,4,0,0,0,"");
Histats.track_hits();} catch(err){};
</script></a>
<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?2259336&101" alt="hit tracker" border="0"></a></noscript>
<!-- Histats.com  END  -->
	</div>
</div>


</body>
</html>
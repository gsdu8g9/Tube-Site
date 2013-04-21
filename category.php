<?php
include 'init.php';
include 'func/Category.php';

if(!isset($_GET['cat'])){
	header('Location: index.php');
	exit();
}elseif($_GET['cat'] == ''){
	header('Location: index.php');
	exit();
}

$cat = $_GET['cat'];

$siteName = "LKBits";
$siteTitle = "Sri Lankan Video Portal";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="Watch Sri Lankan TV Shows, Movies, Funny Programs, Music Videos And Many More.">

<meta name="keywords" content="Sinhala Teledrama, Sri Lankan LIVE Shows, sri lankan lanka,Sri laka,Sri lnkan tv,lankan news,lanka,sri lanka teledrama,sri lanka tv,lanka fm,Sri lanka news,lanka news,Sri lankan models,tamil news,lankan,news,about srilanka, sinhala, sinhalese">

<title><?php echo $siteName . " | " . $siteTitle; ?></title>

<link href="css/index_style.css" rel="stylesheet" type="text/css" />



</head>

<body>
<div id="wrraper">
	<div id="body">
	
		<div id="header">
			<img src="image/header.png" width="990" height="150" />
		</div>
		
		<div id="un_header">
			<div id="un_header_area">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="http://lkbits.com/category.php?cat=Sinhala%20Cartoons">Cartoons</a></li>
					<li><a href="http://lkbits.com/currency.php">Currency Converter</a></li>
					<li><a href="http://www.lkbits.com/category.php?cat=Sinhala%20Movies">Films</a></li>
					<li><a href="http://www.lkbits.com/category.php?cat=Funny%20Programs">Fun Videos</a></li>
					<li><a href="http://news.lkbits.com">Gossip Lanka</a></li>
					<li><a href="http://www.lkbits.com/category.php?cat=Miscellaneous">Horoscope</a></li>
					<li><a href="http://www.lkbits.com/category.php?cat=For%20Ladies">Ladies Corner</a></li>
					<li><a href="music.php">MP3 Songs</a></li>
				</ul>
			</div>	
		</div>
		

		
		
		<div id="content1">
			<div id="content1_area">
				<div id="content_left">
					<div id="content_paidadd">
						<div id="paid_area" style="background-color:white"> 
															<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FLkBits&amp;width=195&amp;height=258&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=false&amp;appId=539151252791942" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:196px; height:258px;" allowTransparency="true"></iframe>
													</div>
					</div>
						
										
					<div id="content_paidadd">
						<div id="paid_area"> 
															<a href="category.php?cat=Sports%20Programs" target="_blank">
																<img src="http://lkbits.com/uploads/wwe01.jpg" class="addimage" />
															</a>
													</div>
					</div>

								 	
					<div id="content_paidadd">
						<div id="paid_area"> 
															<a href="http://lkbits.com/category.php?cat=Sinhala%20Cartoons" target="_blank">
																<img src="http://lkbits.com/uploads/Kadiyai%20Thadiyai.jpg" class="addimage" />
															</a>
													</div>
					</div> 
									 	
					<div id="content_paidadd">
						<div id="paid_area"> 
															<a href="http://lkbits.com/category.php?cat=Abheetha%20Diyani" target="_blank">
																<img src="http://imgsout.appspot.com/image/26001/" class="addimage" />
															</a>
													</div>
					</div> 
									 	
					<div id="content_paidadd">
						<div id="paid_area"> 
															<a href="http://lkbits.com/view.php?id=4223" target="_blank">
																<img src="http://imgsout.appspot.com/image/27001/" class="addimage" />
															</a>
													</div>
					</div> 
				
					<div id="content_left_gooadd">
						<div id="c_gooadd_area">
							
<script type="text/javascript">
	<!--
	google_ad_client ="ca-pub-1600544234483313";
	/* LKBits_Left_Side_160x600 */
	google_ad_slot = "8440012991";
	google_ad_width = 160;
	google_ad_height = 600;
	//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>					</div>
					</div>
					
									 	
					<div id="content_paidadd">
						<div id="paid_area"> 
															<a href="http://lkbits.com/view.php?id=5523" target="_blank">
																<img src="http://lkbits.com/uploads/7375546Mickie-James-defeated-Alicia-Fox.JPG" class="addimage" />
															</a>
													</div>
					</div> 
									 	
					<div id="content_paidadd">
						<div id="paid_area"> 
															<a href="http://lkbits.com/category.php?cat=Brilliant%20Legacy%20(Eng%20Sub)%20Korean%20Drama" target="_blank">
																<img src="http://lkbits.com/uploads/brillientlegacykorentvshow.jpg" class="addimage" />
															</a>
													</div>
					</div> 
									
				</div>
				
				
				
				<div id="content_center">
					<div id="con_cen_area">
					
							<div id="c_catogory_paddingc_goo468">
								<div id="c_goo468">
									<script type="text/javascript">
										<!--
										google_ad_client ="ca-pub-1600544234483313";
										/* LKBits_Index_Top_468_15 */
										google_ad_slot = "4347890591";
										google_ad_width = 468;
										google_ad_height = 15;
										//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
								</div>
							</div>

							<script>
  (function() {
    var cx = '001898268929737199146:so4fokgfb7y';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
							
							<!--<div id="cenpaidad">
							
																<div id="cenpaidad-area">
									<div id="cenpaidad-area-image"> 
																					<a href="http://lkbits.com/category.php?cat=For%20Ladies" target="_blank">
																						<img src="http://imgsout.appspot.com/image/28001/" class="cenpaidad-area-image" />
																					</a>
																			</div>
								</div> 
																<div id="cenpaidad-area">
									<div id="cenpaidad-area-image"> 
																					<a href="#" target="_blank">
																						<img src="http://imgsout.appspot.com/image/27002/" class="cenpaidad-area-image" />
																					</a>
																			</div>
								</div> 
								
							</div>-->
											
							<div id="c_catogory_padding2"><!--recently added-->
								<div id="c_catogory2">
								
									<div id="cat_title">
										<div id="t1">
											
										</div>
									</div>
									
									<div id="cat_title2">
										<div id="t2">
											<div id="t2_text">
												
											</div>
											<div id="t2_more">
											<a href="recent.php?id=1">More Videos...</a>
										
											</div>
											<div id="t2_image">
													
											</div>
										</div>
									</div>
									
									<div id="cat_cliparea">
										
										<?php
										
										$category = new Category();
										$category_videos = $category -> getCatItems($cat);
										$num_rows = mysql_num_rows($category_videos);

										$i = 0;

										while ($i < $num_rows) {
											$id = mysql_result($category_videos, $i, "id");
											$thumbnail = mysql_result($category_videos, $i, "thumbnail");
											$title = mysql_result($category_videos, $i, "title");
											$descripton = mysql_result($category_videos, $i, "description");
											$views = mysql_result($category_videos, $i, "views");
											$short_title = substr($title, 0, 19);
											$short = substr(urldecode($descripton), 0, 20);

											$tooltip_desc = urldecode($descripton);

											echo "<div id='recent'>";
											echo "<div id='uuu-recent'>";
											echo "<div id='clip_image-recent'>";
											echo "<a href='view.php?id=$id'>";
											echo "<img src='$thumbnail' class='clipimage' />";
											echo "</a>";
											echo "</div>";
											echo "<div id='clip_name-recent'>";
											echo "$title";
											echo "</div>";
											echo "<div id='clip_date-recent'>";
											echo "$short<br /><font color='#FF3300'>Viewed $views times</font>";
											echo "</div>";
											echo "</div>";
											echo "</div>";

											$i++;
										}
							?>
																	
																				
									</div>
									
								</div>
							</div><!--recently add end-->
							<div class="pagination" style="text-align: center">
								<?php
								for($i = 1; $i < 26; $i++){
								 echo "<a href='cat_more.php?cat=$cat&page=$i'>$i</a>&nbsp;";	
								}
								?>
								</div>
							
							<div id="cenpaidad">
							
																
																<div id="cenpaidad-area">
									<div id="cenpaidad-area-image"> 
																					<a href="recent.php?id=1" target="_blank">
																						<img src="http://vinsaara.com/my_ads/vinsaara.gif" class="cenpaidad-area-image" />
																					</a>
																			</div>
								</div> 
																
																
							</div>
							
							
					</div>
				</div>
			
				<div id="content_right">
				 	
					<div id="r-paidad">
						<div id="r-paidad-area"> 
															<a href="http://lkbits.com/view.php?id=4825" target="_blank">
																<img src="http://lkbits.com/uploads/8249ma.jpg" class="r-paidad-area" />
															</a>
													</div>
					</div> 
									 	
					<div id="r-paidad">
						<div id="r-paidad-area"> 
															<a href="http://lkbits.com/view.php?id=5160" target="_blank">
																<img src="http://img.youtube.com/vi/5Zv1Ild2bvg/0.jpg" class="r-paidad-area" />
															</a>
													</div>
					</div> 
									 	
					<div id="r-paidad">
						<div id="r-paidad-area"> 
															<a href="http://lkbits.com/view.php?id=5103" target="_blank">
																<img src="http://i4.ytimg.com/vi/kFvYcmp2cO4/mqdefault.jpg" class="r-paidad-area" />
															</a>
													</div>
					</div> 
										
					
					

					
					
					<div id="r-paidad">
						LKBits is the best and fastest growing entertainment portal in Sri Lanka with hourly update of Sinhala Teledramas, music videos,  News, Teledramas, Films, Documentaries, Educational programs, Children's entertainment, programs dubbed in Sinhala, Game shows, Reality TV, Religious programs, Political debates & more.
Some of the programs are Sinhala News, Rupawahini News, ITN news, Sri Lanka News , swarnawahini Live @ 8 , swarnawahini Live @ 12 ,Sirasa news first 7, Sirasa news first 10, Sirasa morning news , Derana news , Derana noon news , Rupawahin Noon News , Rupawahin 8 News , Rupawahin 9.30 News , ITN Noon News , ITN Morning News , 24 Hours news online , Latest News in Sri lanka , News debrief, Hadena hati, Abeetha diyani, Sujatha diyani and ladies corner specially for ladies.
					</div>
					
					<div id="c_r_link">
						<div id="rrr">
						
<script type="text/javascript">
	<!--
	google_ad_client ="ca-pub-1600544234483313";
	/* LKBits_Left_Side_160x600 */
	google_ad_slot = "8440012991";
	google_ad_width = 160;
	google_ad_height = 600;
	//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>					</div>
					</div>
					
					
					<div id="r-paidad">
						<script language="JavaScript">
var txt = " Bookmark Us!";
var url = "http://lkbits.com/";
var who = "LKBits Home Page";

var ver = navigator.appName;
var num = parseInt(navigator.appVersion);
if ((ver == "Microsoft Internet Explorer")&&(num >= 4)) {
document.write('<A HREF="javascript:window.external.AddFavo? ');
document.write('onMouseOver=" window.status=');
document.write("txt; return true ");
document.write('"onMouseOut=" window.status=');
document.write("' '; return true ");
document.write('">'+ txt + '</a>');
}else{
txt += " (Ctrl+D)";
document.write(txt);
} 
</script>
					</div>
									 	
					<div id="r-paidad">
						<div id="r-paidad-area"> 
															<a href="http://lkbits.com/view.php?id=5276" target="_blank">
																<img src="http://lkbits.com/uploads/56051365873274764676hghg767.jpg" class="r-paidad-area" />
															</a>
													</div>
					</div> 

					<div id="r-paidad">
						<div id="r-paidad-area"> 
															<a href="http://lkbits.com/category.php?cat=Sinhala%20Cartoons" target="_blank">
																<img src="http://lkbits.com/uploads/cartoon 002.jpg" class="r-paidad-area" />
															</a>
													</div>
					</div> 
										
					<div id="c_r_link">
						<div id="rrr">
						
<script type="text/javascript">
	<!--
	google_ad_client ="ca-pub-1600544234483313";
	/* LKBits_Left_Side_160x600 */
	google_ad_slot = "8440012991";
	google_ad_width = 160;
	google_ad_height = 600;
	//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>						</div>
					</div>
					
					
					
									 	
					<div id="r-paidad">
								<div id="r-paidad-area">
									<a href="http://lkbits.com/category.php?cat=Sinhala%20Cartoons" target="_blank"> <img src="http://lkbits.com/uploads/cartoon 002.jpg" class="r-paidad-area" /> </a>
								</div>
							</div>

							<!--<div id="r-paidad">
								<div id="r-paidad-area">
									<a href="http://sithma.co.uk/horoscope/index.php" target="_blank"> <img src="images/ikkvQk69012713852_horoscope-ad.gif" class="r-paidad-area" /> </a>
								</div>
							</div>

							<div id="r-paidad">
								<div id="r-paidad-area">
									<a href="http://rupatv.com/" target="_blank"> <img src="http://kodeuwa.com/more/ads/col3neg.gif" class="r-paidad-area" /> </a>
								</div>
							</div>

							<div id="r-paidad">
								<div id="r-paidad-area">
									<a href="http://www.sithma.co/horoscope/sinhala_lagna_palapala.php" target="_blank"> <img src="http://dhahara.com/ad/col3top_dhahara.gif" class="r-paidad-area" /> </a>
								</div>
							</div>

							<div id="r-paidad">
								<div id="r-paidad-area">
									<a href="http://rupatv.com/" target="_blank"> <img src="http://i1132.photobucket.com/albums/m580/muthuvision/Banner/Balumgala.jpg" class="r-paidad-area" /> </a>
								</div>
							</div>

							<div id="r-paidad">
								<div id="r-paidad-area">
									<a href="http://sithma.co.uk/model/index.php" target="_blank"> <img src="http://sithma.co.uk/models/modelimage/966071254-paba.jpg" class="r-paidad-area" /> </a>
								</div>
							</div>

							<div id="r-paidad">
								<div id="r-paidad-area">
									<a href="http://www.9lanka.com" target="_blank"> <img src="http://www.lankaderana.com/lanka/la50.gif" class="r-paidad-area" /> </a>
								</div>
							</div>

									 	
					<div id="r-paidad">
						<div id="r-paidad-area"> 
															<a href="http://sithma.co.uk/cartoon/" target="_blank">
																<img src="http://sithma.co.uk/cartoon/images/YEheho25350798714-The%20Garfield%20Show%202.jpg" class="r-paidad-area" />
															</a>
													</div>
					</div> 
									</div>
				-->
				
			</div>
		</div>
		
		
		<div id="footer">
		<div id="f_iiiii">
			<div id="footer_left">
			Copyright Â© 2012 - 2013 LKBits , All Rights Reserved. 

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

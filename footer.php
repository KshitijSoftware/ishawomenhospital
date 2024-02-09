

    <!-- Section: News & Updates-->
    <section>
      <div class="container pt-90">
        <div class="section-title">
          <div class="row justify-content-md-center">
            <div class="col-md-8">
              <div class="text-center mb-60">
                <div class="tm-sc-section-title section-title section-title-style1 text-center">
                  <div class="title-wrapper">
                    <h2 class="title icon-bottom"> <span class="">Our </span> <span class="text-theme-colored1">Channel </span> Videos</h2>
                    <div class="title-seperator-line"></div>
                    <div class="paragraph">
                    <p>Subscribe this channel to get updates on various topics of women health and fertility.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
                
                   <ul class="list-unstyled video-list-thumbs row">
                    <style>

/* Source: http://bootsnipp.com/snippets/featured/video-list-thumbnails */

.video-list-thumbs{}
.video-list-thumbs > li{
    margin-bottom:12px
}
.video-list-thumbs > li:last-child{}
.video-list-thumbs > li > a{
	display:block;
	position:relative;
	background-color: #212121;
	color: #fff;
	padding: 8px;
	border-radius:3px
}
.video-list-thumbs > li > a:hover{
	background-color:#000;
	transition:all 500ms ease;
	box-shadow:0 2px 4px rgba(0,0,0,.3);
	text-decoration:none
}
.video-list-thumbs h2{
	bottom: 0;
	font-size: 14px;
	height: 33px;
	margin: 8px 0 0;
}
.video-list-thumbs .glyphicon-play-circle{
    font-size: 60px;
    opacity: 0.6;
    position: absolute;
    right: 39%;
    top: 31%;
    text-shadow: 0 1px 3px rgba(0,0,0,.5);
}
.video-list-thumbs > li > a:hover .glyphicon-play-circle{
	color:#fff;
	opacity:1;
	text-shadow:0 1px 3px rgba(0,0,0,.8);
	transition:all 500ms ease;
}
.video-list-thumbs .duration{
	background-color: rgba(0, 0, 0, 0.4);
	border-radius: 2px;
	color: #fff;
	font-size: 11px;
	font-weight: bold;
	left: 12px;
	line-height: 13px;
	padding: 2px 3px 1px;
	position: absolute;
	top: 12px;
}
.video-list-thumbs > li > a:hover .duration{
	background-color:#000;
	transition:all 500ms ease;
}
@media (min-width:320px) and (max-width: 480px) { 
	.video-list-thumbs .glyphicon-play-circle{
    font-size: 35px;
    right: 36%;
    top: 27%;
	}
	.video-list-thumbs h2{
		bottom: 0;
		font-size: 12px;
		height: 22px;
		margin: 8px 0 0;
	}
}
</style>
                    <?php
                        $channelId = 'UCIyc3KcIO-gXf3kuRwzzc8Q';
                        $maxResults = 6;
                        $API_key = 'AIzaSyD9fScixw6F6PpWXcbHH7JeNwYRXJ8VXhE';

                        set_error_handler('videoListDisplayError');
                        $video_list = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelId.'&maxResults='.$maxResults.'&key='.$API_key.''));
                        
                        foreach($video_list->items as $item)
                        {
                            if(isset($item->id->videoId)){
                            echo '<li id="'. $item->id->videoId .'" class="col-lg-4 col-sm-12 col-xs-12 youtube-video">
                                    <a href="#'. $item->id->videoId .'" title="'. $item->snippet->title .'">
                                            <img src="'. $item->snippet->thumbnails->medium->url .'" alt="'. $item->snippet->title .'" class="img-responsive" width="420px" height="315px" />
                                            <h2 style="color:white">'. $item->snippet->title .'</h2>
                                            <span class="glyphicon glyphicon-play-circle"></span>
                                    </a>
                                   </li>';
                            }
                            else if(isset($item->id->playlistId))
                            {
                               echo '<li id="'. $item->id->playlistId .'" class="col-lg-4 col-sm-12 col-xs-12 youtube-playlist">
                                        <a href="#'. $item->id->playlistId .'" title="'. $item->snippet->title .'">
                                                <img src="'. $item->snippet->thumbnails->medium->url .'" alt="'. $item->snippet->title .'" class="img-responsive" width="420px" height="315px"/>
                                                <h2 style="color:white">'. $item->snippet->title .'</h2>
                                                <span class="glyphicon glyphicon-play-circle"></span>
                                        </a>
                                    </li>';
                            }
                        }
                        function videoListDisplayError()
                        {
                                echo '<div class="alert alert-danger" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <i class="fa fa-exclamation-triangle"></i> Error while displaying videos!</div>';
                        }
                    ?>
                       </ul>
                  
      
      </div>
    </section>
              <script>
//For video
$(".youtube-video").click(function(e){
	$(this).children('a').html('<div class="vid"><iframe width="420px" height="315px" src="https://www.youtube.com/embed/'+ $(this).attr('id') +'?autoplay=1" frameborder="0" allowfullscreen></iframe></div>');
    return false;
	 e.preventDefault();
	});
	//For playlist
	$(".youtube-playlist").click(function(e){
	$(this).children('a').html('<div class="vid"><iframe width="420px" height="315px" src="https://www.youtube.com/embed/videoseries?list='+ $(this).attr('id') +'&autoplay=1" frameborder="0" allowfullscreen></iframe></div>');
    return false;
	 e.preventDefault();
	});
	
</script>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Divider -->

    <!-- Section: Testimonial -->
    <section class="" data-tm-bg-img="images/pattern/p4.png">
      <div class="container pb-0">
        <div class="section-content">
          <div class="row mb-90">
            <div class="col-sm-12">
              <div class="tm-sc-testimonials tm-sc-testimonials-carousel testimonial-style4-modern owl-dots-light-skin owl-dots-center testimonial-has-quote-icon">
                <!-- Isotope Gallery Grid -->
                <div id="testimonials-holder-117227" class="owl-carousel owl-theme tm-owl-carousel-3col" data-autoplay="true" data-loop="true" data-duration="6000" data-smartspeed="300" data-margin="30" data-stagepadding="0">
                  <!-- the loop -->
                  <div class="tm-carousel-item">
                    <div class="tm-testimonial testimonials type-testimonials status-publish has-post-thumbnail hentry">
                      <div class="testimonial-inner">
                        <div class="testimonial-text-holder">
                          <div class="author-text">
                            One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt.
                          </div>
                        </div>
                        <div class="testimonial-author-details">
                          <div class="testimonial-image-holder">
                            <div class="author-thumb">
                              <img src="images/testimonials/1.jpg" class="img-thumbnail rounded-circle" alt="images"/>
                            </div>
                          </div>
                          <div class="testimonial-author-info-holder">
                            <h5 class="name">Robert Jonson</h5>
                            <span class="job-position">CEO</span>
                            <a class="company-url" href="#">kodesolution.</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tm-carousel-item">
                    <div class="tm-testimonial testimonials type-testimonials status-publish has-post-thumbnail hentry">
                      <div class="testimonial-inner">
                        <div class="testimonial-text-holder">
                          <div class="author-text">
                            One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt.
                          </div>
                        </div>
                        <div class="testimonial-author-details">
                          <div class="testimonial-image-holder">
                            <div class="author-thumb">
                              <img src="images/testimonials/2.jpg" class="img-thumbnail rounded-circle" alt="images"/>
                            </div>
                          </div>
                          <div class="testimonial-author-info-holder">
                            <h5 class="name">Jessica Bela</h5>
                            <span class="job-position">Employee</span>
                            <a class="company-url" href="#">kodesolution.</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tm-carousel-item">
                    <div class="tm-testimonial testimonials type-testimonials status-publish has-post-thumbnail hentry">
                      <div class="testimonial-inner">
                        <div class="testimonial-text-holder">
                          <div class="author-text">
                            One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt.
                          </div>
                        </div>
                        <div class="testimonial-author-details">
                          <div class="testimonial-image-holder">
                            <div class="author-thumb">
                              <img src="images/testimonials/3.jpg" class="img-thumbnail rounded-circle" alt="images"/>
                            </div>
                          </div>
                          <div class="testimonial-author-info-holder">
                            <h5 class="name">Mark Smith</h5>
                            <span class="job-position">Employee</span>
                            <a class="company-url" href="#">kodesolution.</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tm-carousel-item">
                    <div class="tm-testimonial testimonials type-testimonials status-publish has-post-thumbnail hentry">
                      <div class="testimonial-inner">
                        <div class="testimonial-text-holder">
                          <div class="author-text">
                            One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt.
                          </div>
                        </div>
                        <div class="testimonial-author-details">
                          <div class="testimonial-image-holder">
                            <div class="author-thumb">
                              <img src="images/testimonials/1.jpg" class="img-thumbnail rounded-circle" alt="images"/>
                            </div>
                          </div>
                          <div class="testimonial-author-info-holder">
                            <h5 class="name">Rebecca Williams</h5>
                            <span class="job-position">Manager</span>
                            <a class="company-url" href="#">kodesolution.</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end of the loop -->
                </div>
              </div>
            </div>
          </div>
          <div class="section-content section-typo-light">
            <div class="row row-o-equal-height">
              <div class="bg-theme-colored1 col-sm-4">
                <div class="tm-sc-icon-box icon-box icon-left tm-iconbox-icontype-font-icon text-left iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-left p-30">
                  <div class="icon-box-wrapper">
                    <a class="icon icon-type-font-icon icon-default text-white"> <i class="flaticon-medical-ambulance14 font-size-48"></i> </a>
                    <div class="icon-text">
                      <h5 class="icon-box-title mt-0"> 24 Hours Service</h5>
                      <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              <div class="bg-theme-colored2 col-sm-4">
                <div class="tm-sc-icon-box icon-box icon-left tm-iconbox-icontype-font-icon text-left iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-left p-30">
                  <div class="icon-box-wrapper">
                    <a class="icon icon-type-font-icon icon-default text-white"> <i class="fa fa-comments font-size-48"></i> </a>
                    <div class="icon-text">
                      <h5 class="icon-box-title mt-0"> Online Help</h5>
                      <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              <div class="bg-theme-colored1 col-sm-4">
                <div class="tm-sc-icon-box icon-box icon-left tm-iconbox-icontype-font-icon text-left iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-left p-30">
                  <div class="icon-box-wrapper">
                    <a class="icon icon-type-font-icon icon-default text-white"> <i class="fa fa-credit-card font-size-48"></i> </a>
                    <div class="icon-text">
                      <h5 class="icon-box-title mt-0"> Online Payment</h5>
                      <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Divider -->
  </div>
  <!-- end main-content -->

  <!-- Footer -->
  <footer id="footer" class="footer">
    <div class="footer-widget-area">
      <div class="container pt-90 pb-60">
        <div class="row">
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="tm-widget-contact-info contact-info-style1 contact-icon-theme-colored1">
              <div class="thumb">
                <img alt="Logo" src="images/Isha_logo2.png">
              </div>
              <div class="description">Ground floor, Globe Pinnacle Towers, MIDC Rd, opposite Pendharkar college Gate, Azde Gaon, Tata Power Company Limited, Dombivli East, Dombivli, Maharashtra 421203</div>
            </div>

              <ul class="styled-icons icon-dark icon-theme-colored1 icon-rounded clearfix">
              <li><a class="social-link" href=https://www.facebook.com/profile.php?id=100091439307949" target="_blank" ><i class="fab fa-facebook"></i></a></li>
              <li><a class="social-link" href="#" ><i class="fab fa-twitter"></i></a></li>
              <li><a class="social-link" href="https://youtube.com/@chinmaypataki?si=yc5-2iGu7E1L9ldT" target="_blank" ><i class="fab fa-youtube"></i></a></li>
              <li><a class="social-link" target="_blank" href="https://www.instagram.com/ishawomenhospital/" ><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="widget">
              <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Latest News</h4>
              <div class="latest-posts">
                <article class="post clearfix pb-0 mb-20">
                  <a class="post-thumb" href="news-details.html"><img src="images/blog/square1.jpg" alt="images"></a>
                  <div class="post-right">
                    <h5 class="post-title mt-0"><a href="news-details.html">Sustainable Construction</a></h5>
                    <span class="post-date">
                      <time class="entry-date" datetime="2021-05-15T06:10:26+00:00">April 15, 2021</time>
                    </span>
                  </div>
                </article>
                <article class="post clearfix pb-0 mb-20">
                  <a class="post-thumb" href="news-details.html"><img src="images/blog/square2.jpg" alt="images"></a>
                  <div class="post-right">
                    <h5 class="post-title mt-0"><a href="news-details.html">Industrial Coatings</a></h5>
                    <span class="post-date">
                      <time class="entry-date" datetime="2021-05-15T06:10:26+00:00">April 15, 2021</time>
                    </span>
                  </div>
                </article>
                <article class="post clearfix pb-0 mb-20">
                  <a class="post-thumb" href="news-details.html"><img src="images/blog/square3.jpg" alt="images"></a>
                  <div class="post-right">
                    <h5 class="post-title mt-0"><a href="news-details.html">Storefront Installations</a></h5>
                    <span class="post-date">
                      <time class="entry-date" datetime="2021-05-15T06:10:26+00:00">April 15, 2021</time>
                    </span>
                  </div>
                </article>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="widget widget_nav_menu split-nav-menu clearfix">
              <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Links</h4>
              <ul>
                <li><a href="index-mp-layout1.html">Insurance</a></li>
                <li><a href="index-mp-layout1.html">About</a></li>
                <li><a href="index-mp-layout1.html">Get a Quote</a></li>
                <li><a href="index-mp-layout1.html">Latest Post</a></li>
                <li><a href="index-mp-layout1.html">Industries</a></li>
                <li><a href="index-mp-layout1.html">Contact</a></li>
                <li><a href="index-mp-layout1.html">Help</a></li>
                <li><a href="index-mp-layout1.html">Privacy Policy</a></li>
                <li><a href="index-mp-layout1.html">Terms of use</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="widget">
              <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Opening Hours</h4>
              <div class="opening-hours border-dark">
                <ul>
                  <li class="clearfix"> <span> Friday - Saturday :  </span>
                    <div class="value"> 10.00 am - 6.00 pm </div>
                  </li>
                  <li class="clearfix"> <span> Monday - Thusday :</span>
                    <div class="value"> 8.00 am - 9.00 pm </div>
                  </li>
                  <li class="clearfix"> <span> Sunday : </span>
                    <div class="value"> Closed </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom" data-tm-bg-color="#2A2A2A">
        <div class="container">
          <div class="row pt-20 pb-20">
            <div class="col-sm-6">
              <div class="footer-paragraph">
                © 2021 ThemeMascot. All Rights Reserved.
              </div>
            </div>
            <div class="col-sm-6">
              <div class="footer-paragraph text-right">
                Site Template
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>
</html>


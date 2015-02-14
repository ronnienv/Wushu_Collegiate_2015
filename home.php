<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/database/db_content.php');	
require_once($_SERVER['DOCUMENT_ROOT'] . '/template/header-new.php');
?>
  <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!-- jQuery scripts -->           
	
	<script>
	$(document).ready(function(){
	    // grab the initial top offset of the navigation 
		var sticky_navigation_offset_top = $('#sticky_navigation').offset().top;
     
    	// our function that decides weather the navigation bar should have "fixed" css position or not.
		var sticky_navigation = function(){
		var scroll_top = $(window).scrollTop(); // our current vertical position from the top
			 
			// if we've scrolled more than the navigation, change its position to fixed to stick to top,
			// otherwise change it back to relative
			if (scroll_top > sticky_navigation_offset_top) { 
				$('#sticky_navigation').css({ 'position': 'fixed', 'top':0, 'left':0 });
			} else {
				$('#sticky_navigation').css({ 'position': 'relative' }); 
			}   
		};
		
		 	// run our function on load
			sticky_navigation();
			 
			// and run it again every time you scroll
			$(window).scroll(function() {
				 sticky_navigation();
			});
		});
	 </script>
<body>

  <!-- Header Section Start -->
  <div id="header">
    <div class=" container demo_top_wrapper">
      <div class="col-md-12 top-header">
            <div class="logo-menu">
                  <div class="logo pull-left wow fadeInDown animated">
                        <a href="index.html"><img id="logo" src="assets/img/wushu_logo.png" alt="logo"></a>
                  </div> 
                   
            </div>
      <div class="row">
            <div class="col-md-12 top-header">
                  <div class="banner text-center">
                    	<h1 class="wow fadeInDown animated" id="title">Collegiate Wushu</h1>
                    	<h2 class="wow fadeInDown animated" id="subtitle">19th Annual Collegiate Wushu Tournament<br>Saturday, April 11th, 2015</h2>
                    	<p><a href="info.php" class="btn btn-border lg wow fadeInLeft animated" >Learn More </a></p>
                    	<p> <a href="account/register.php" class="btn btn-common lg wow fadeInLeft animated" >Register Now</a></p>
 				</div> 
			</div>
		</div>
	</div>
</div>		
                        <!-- Navigation Start -->   
                        <div class="nav" id="sticky_navigation_wrapper">
                            <div id="sticky_navigation">
                                <ul>
                                    <li><a href="#newsfeed"> News</a></li>
                                    <li><a href="#aboutus"> About</a></li>
                                    <li><a href="#media"> Multimedia</a></li>
                                    <li><a href="#tournament"> Tournament</a></li>
                                    <li><a href="#clients"> Collegiates</a></li>
                                    <li><a href="#contact"> Contact Us</a></li>
                                </ul>
                             </div>
                        </div>      
                    </div>
          			<!-- Navigation End -->
                    
  <!-- Header Section End -->

  <!-- NewsFeed Section Start -->
  <section id="newsfeed">
    <div class="container">
      <div class="row">
        <h1 class="section-title wow fadeInLeft animated">Latest <span>News </span></h1>
        
            <?php 
            $dbc = db_connect() or die('We are currently experiencing database technical problems.  Please try again later.');

            $select = "SELECT * FROM Content ORDER BY postdate DESC";                
            $export = mysql_query($select);
            
            $counter = 0;
            $data = "";
            $line = "";
            
            while ($counter < 5 and $row = mysql_fetch_assoc($export) {
                title = stripslashes($row["title"]);
                $content = stripslashes(nl2br($row["content"]));
                $line = '<div class="col-lg-4 col-md-4 col-sm-8 col-xs-12"><div class="blog-large wow fadeInLeft animated"><img src="assets/img/actionShots/0' . ($counter + 2) . '.jpg" alt=""><div class="large"><a class="title" href="#">' . $title .'</a><p>' . $content . '</p></div></div></div>';
                $counter ++;
                $data .= trim($line);
            }
            
            echo $data;
            
            mysql_close($dbc);
        ?>
        
      </div>
    </div>
  </section>
  <!-- newsfeed Section Start -->

  <!-- About Us Section Start -->
  <section id="aboutus">
    <div class="container">
      <div class="row">
        <h1 class="section-title wow fadeInLeft animated">About <br><span>Collegiate Wushu</span></h1>
        <p class="wow fadeInLeft animated">The Annual Collegiate Wushu Tournament was created to foster collegiate-level wushu in the nation. The first tournament was hosted by the University of Oregon in 1997, organized by Brandon Sugiyama. Today, the tournament draws in competitors from colleges all across the country. Last year's tournament (2013) had competitors from 21 different colleges and 13 groups in the team competition demonstrating that the tournament has been drawing more and more midwest and eastern schools in recent years.
        </p>
        <p class="wow fadeInLeft animated">
        Each year, a call is made to clubs for the position of host and bids are voted on by the Collegiate Wushu Committee voting members. The CWC is composed of advisors and school representatives, with each school on the CWC posessing one voting representative. The CWC also discusses and votes on changes to tournament rules such as competitor eligiblity requirements and experience level determination. To receive an invitation to the CWC, a school must have hosted at least one Collegiate Wushu Tournament. </p>
      </div>
    </div>
  </section>

  <!-- About Us Section End -->

  <!-- Media Section Start -->
  <section id="media">
    <div class="container">
      <div class="row">
        	<h1 class="section-title wow fadeInLeft animated">Multi<span>MEDIA</span></h1>
        <div class="col-md-7 col-lg-7 grid-left wow fadeInLeft animated">
          <div class="large">
            <img src="assets/img/actionShots/15.jpg" alt="">
            <div class="overlay">
              <a href="assets/img/actionShots/15.jpg" data-lightbox="img1"><i class="fa fa-search-plus"></i></a>
            </div>
          </div>
          <div class="grid-box">
            <img src="assets/img/actionShots/07.jpg" alt="">
            <div class="overlay">
               <a href="assets/img/actionShots/07.jpg" data-lightbox="img2"><i class="fa fa-search-plus"></i></a>
            </div>
          </div>
          <div class="grid-box">
            <img src="assets/img/actionShots/13.jpg" alt="">
            <div class="overlay">
               <a href="assets/img/actionShots/13.jpg" data-lightbox="img3"><i class="fa fa-search-plus"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-5 grid-right wow fadeInLeft animated">
          <div class="grid-box large">
            <img src="assets/img/actionShots/06.jpg" alt="">
            <div class="overlay">
               <a href="assets/img/actionShots/06.jpg" data-lightbox="img4"><i class="fa fa-search-plus"></i></a>
            </div>
          </div>
          <div class="grid-box">
            <img src="assets/img/actionShots/16.jpg" alt="">
            <div class="overlay">
               <a href="assets/img/actionShots/16.jpg" data-lightbox="img5"><i class="fa fa-search-plus"></i></a>
            </div>
          </div>
          <div class="browse-box">
            <div class="more">
              <a target="_blank" href="https://www.flickr.com/photos/56926895@N08/sets/72157644144660916/">
              <i class="fa fa-arrow-circle-right" ></i>BROWSE ALL</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Media Section End -->

  <!-- Tournament Section Start -->
  <section id="tournament">
    <div class="container">
      <div class="row">
        <h1 class="section-title wow fadeInLeft animated"><span>19th Collegiate Wushu </br></span> Tournament</h1>
        <p class="wow fadeInLeft animated">This year's tournament will be hosted by the University of California, Irvine on April 11th, 2015. 
        <br>
        <br>
        <b>Schedule:</b><br>
        - Tentatively Opening Ceremonies and Performances at 8:00am<br>
        - Tournament Start up at 8:30am<br>
        - To contact the host school, email wushuclubuci@gmail.com
        </p>

        <h2 class="wow fadeInLeft animated"><b>Instructions</b></h2>
        <p class="wow fadeInLeft animated">
          <ol class="instructions wow fadeInLeft animated">
            <li>Create an account to register. If you already have an account, skip to the next step.</li>
            <li>Log-in to your account.</li>
            <li>Begin registration by clicking <a class="reg-small" href="http://collegiatewushu.org/accounthome.php?viewpage=1"> <b>HERE</b> </a> or by clicking on "Account Panel" at the top on the right sidebar.</li>

            <li>To register for your individual events*, click on "Register Individual Events" <br>
                and follow the instructions.</li>
              - If you are part of a groupset for Team Competition, make sure you hit the event checkbox for the <br>
              "Group Set Event" as you select all your other individual events. <br>
              - Once you receive email confirmation, you should be able to go to "My Events" in your "Account Panel"<br>
              to view the events you signed up for.

            <li>If you are in a groupset, you must also then click on "Register for Team Competition" from your Account Panel.</li>
            - If you are team captain, you must create your team. Your other group members can then join your <br>
            team by pulling it up in the dropdown menu.<br>
            - You will not be able to create or join a team if you did not checkmark the "Group Set" event when you <br>
            were registering for your individual events.
          </ol>

          <a class="btn btn-border wow fadeInLeft animated" href="info.php">More Information</a>
        </p>
      </div>
    </div>
  </section>
  <!-- Tournament Section End -->

  <!-- Collegiates Section Start -->
  <section id="clients">
    <div class="container">
      <div class="row">
        <h1 class="section-title wow fadeInLeft animated">Collegiate <br><span>Wushu Clubs</span></h1>
        <div id="clients-carousel" class="owl-carousel owl-theme">
          <div class="item wow fadeInLeft animated" >
            <a href="http://www.columbia.edu/cu/csc/wushu/index.html"><img src="assets/img/schools/columbia.png" alt=""></a>
          </div>
          <div class="item wow fadeInLeft animated" >
            <a href="http://cornellwushu.wordpress.com/"><img src="assets/img/schools/cornell.png" alt=""></a>
          </div>
          <div class="item wow fadeInLeft animated" >
            <a href="http://wushu.gtorg.gatech.edu/about.php"><img src="assets/img/schools/georgia.jpg" alt=""></a>
          </div>
          <div class="item wow fadeInLeft animated" >
            <a href="http://www.hcs.harvard.edu/~hwushu/"><img src="assets/img/schools/harvard.png" alt=""></a>
          </div>
          <div class="item wow fadeIn animated">
            <a href="http://nauwushu.wordpress.com/"><img src="assets/img/schools/nau.png" alt=""></a>
          </div>
          <div class="item wow fadeIn animated">
            <a href="https://www.facebook.com/dragonphoenixwushu"><img src="assets/img/schools/ohiostate.png" alt=""></a>
          </div>
          <div class="item wow fadeIn animated">
            <a href="http://spartanwushu.com/"><img src="assets/img/schools/sanjose.jpg" alt=""></a>
          </div>
          <div class="item wow fadeIn animated">
            <a href="http://wushu.stanford.edu/"><img src="assets/img/schools/stanford.png" alt=""></a>
          </div>
          <div class="item wow fadeIn animated">
            <a href="http://www.calwushu.com/"><img src="assets/img/schools/berkeley.png" alt=""></a>
          </div>
          <div class="item wow fadeIn animated">
            <a href="https://www.facebook.com/pages/Wushu-Club-at-UCI/257655661091545"><img src="assets/img/schools/irvine.png" alt=""></a>
          </div>
          <div class="item wow fadeIn animated">
            <a href="http://www.studentgroups.ucla.edu/wushu/"><img src="assets/img/schools/ucla.jpg" alt=""></a>
          </div>
          <div class="item wow fadeIn animated">
            <a href="http://www.ucsdwushu.com/"><img src="assets/img/schools/ucsd.png" alt=""></a>
          </div>
          <div class="item wow fadeIn animated">
            <a href="http://uhwushu.weebly.com/"><img src="assets/img/schools/houston.png" alt=""></a>
          </div>
          <div class="item wow fadeIn animated">
            <a href="https://www.facebook.com/groups/19392756832/"><img src="assets/img/schools/umbc.png" alt=""></a>
          </div>
          <div class="item wow fadeIn animated">
            <a href="http://www.terpwushu.org/"><img src="assets/img/schools/umcp.jpg" alt=""></a>
          </div>
          <div class="item wow fadeIn animated">
            <a href="#"><img src="assets/img/schools/northcarolina.jpg" alt=""></a>
          </div>
          <div class="item wow fadeIn animated">
            <a href="http://pages.uoregon.edu/wushu/"><img src="assets/img/schools/oregon.png" alt=""></a>
          </div>
          <div class="item wow fadeIn animated">
            <a href="http://www.texaswushu.org/"><img src="assets/img/schools/texas.jpg" alt=""></a>
          </div>
          <div class="item wow fadeIn animated">
            <a href="http://virginiawushu.com/"><img src="assets/img/schools/uva.jpg" alt=""></a>
          </div>
          <div class="item wow fadeIn animated">
            <a href="http://students.washington.edu/uwwushu/"><img src="assets/img/schools/washington.png" alt=""></a>
          </div>
          <div class="item wow fadeIn animated">
            <a href="#"><img src="assets/img/schools/vt.png" alt=""></a>
          </div>
          <div class="item wow fadeIn animated">
            <a href="https://sites.google.com/a/wellesley.edu/wellesleywushuclub/"><img src="assets/img/schools/wellesley.jpg" alt=""></a>
          </div>
          <div class="item wow fadeIn animated">
            <a href="http://sites.google.com/site/yalewushu/"><img src="assets/img/schools/yale.gif" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- clients Section End -->


  <!-- Contact Section Start -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <h1 class="section-title wow fadeInLeft animated"><span>Contact Us</span></h1>
        <div class="col-sm-6 col-md-6 wow fadeInLeft animated" >
          <form action="" name="contact">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" name="name" class="form-control" placeholder="Your name">
            </div>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
              <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-fire"></i></span>
              <input type="text" name="subject" class="form-control" placeholder="Subject">
            </div>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-comments"></i></span>
              <textarea name="message" class="form-control large" placeholder="Message"></textarea>
            </div>
            <button type="submit" class="btn btn-gold"><i class="fa fa-envelope-o"></i>Send</button>
          </form>
        </div>
        <div class="col-sm-4 col-md-4 col-md-offset-2 wow fadeInLeft animated" d>
          <div class="address">
            <h2>Contact Info</h2>
            <ul class="contact-info">
              <li><i class="fa fa-mobile"></i> +88 019788XYZ</li>
              <li><i class="fa fa-skype"></i> musa.xyz</li>
              <li><i class="fa fa-envelope-o"></i> wushuclubuci@gmail.com</li>
            </ul>
          
          <h2>Follow Us</h2>
            <ul class="social-icon">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Feedback Section End -->

  <!-- Footer section Start -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
          <div class="copyright wow fadeInUp animated" data-wow-delay=".8s">
            
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
          <div class="scroll-top text-center wow fadeInUp animated" data-wow-delay=".6s">
            <a href="#header"><i class="fa fa-chevron-circle-up fa-2x"></i></a>
          </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
          
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer section End -->
</body>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/template/footer-new.php');
?>

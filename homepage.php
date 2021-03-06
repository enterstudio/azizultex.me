<?php 
/*
Template name: Homepage
*/
?>

<!DOCTYPE html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->  
<!--[if IE 9]> <html <?php language_attributes(); ?> class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->  
<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">

    <!-- Web Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

    <?php wp_head(); ?>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/line-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/venobox.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/app.css">

    <!-- CSS Page Style -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/profile.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/shortcode_timeline2.css">

    <!-- CSS Customization -->

    <!--[if lt IE 9]>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/respond.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/html5shiv.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/placeholder-IE-fixes.js"></script>
    <![endif]-->

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-78230898-1', 'auto');
      ga('send', 'pageview');

    </script>

    <!-- start of Zopim Live Chat Script-->
    <script type="text/javascript">
    window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
    d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
    _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
    $.src="//v2.zopim.com/?3wPu2kCAnHKH1R4xv60YXNsNtlbRKxi7";z.t=+new Date;$.
    type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
    </script>
    <!--End of Zopim Live Chat Script-->


    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

</head>	

<body class="homepage">    

<!-- <h1 class="top-title"> Let's Kickoff Your Next WordPress Project <i class="fa fa-thumbs-up"></i></h1> -->
<div class="wrapper">
    <!--=== Profile ===-->
    <div class="container content profile">	
    	<div class="row">       
            <!-- Profile Content -->
            <div class="col-sm-12">
                <div class="profile-body">
                    <div class="profile-bio margin-bottom-30">
                        <div class="row">
                            <div class="col-sm-4">
                                <img class="img-responsive md-margin-bottom-10" src="<?php echo get_stylesheet_directory_uri(); ?>/img/profile.png" alt="">
                            </div>
                            <div class="col-sm-8">
								<div class="col-sm-9 col-xs-9 no-padding">
									<h2>Azizul Haque</h2>
									<strong>Responsive Designer and WordPress Developer</strong>
								</div>
								<div class="col-sm-3 col-xs-3 no-padding">
								<a class="btn-u btn-u-sm pull-right contact-form" data-toggle="modal" data-target="#contactModal" href="#">Ask me</a>		</div>
								<div class="clearfix"></div>
                                <hr>
                                <div class="overview">
                                <p> Hi, if you are looking for some WordPress help, you are on the right place. Having 7+ years working experience in Front-End Design and WordPress Development, I am able to handle any kind of WordPress project very efficiently. </p> 

                                My Services:
                                <div class="margin-bottom-10">
                                    <ul class="list-unstyled labels-demo">
                                        <li><span class="badge badge-yellow rounded"> Theme Development </span></li>
                                        <li><span class="badge badge-yellow rounded"> Plugin Development </span></li>
                                        <li><span class="badge badge-yellow rounded"> Customizing Existing Theme </span></li>
                                        <li><span class="badge badge-yellow rounded"> WooCommerce Solution </span></li>
                                        <li><span class="badge badge-yellow rounded"> WordPress Multilingual </span></li>
                                        <li><span class="badge badge-yellow rounded"> PSD to Responsive HTML Template</span></li>
                                        <li><span class="badge badge-yellow rounded"> PSD to WordPress </span></li>
                                    </ul>
                                </div>

                                <ul>
                                    <li>
                                        ✎ Designing Super Responsive HTML Templates using Twitter Bootstrap and latest web trends like HTML5, CSS3 ( animation, transition, transformation), and jQuery Plugins. 
                                    </li> 
                                    <li>
                                        ✎ Designing Pixel Perfect PSD to HTML Templates and WordPress Themes ensuring fully optimized, clean, cross-browser supported. 
                                    </li>
                                    <li>
                                         ✎ Building a WordPress Theme From Scratch adhering WordPress standard, and utilizing awesome Frameworks like Piklist, Redux, CMB allowing to manage the complete website without a bit of prior coding skills. 
                                    </li>
                                    <li>
                                        ✎ Customizing a Premium WordPress Theme with a Child Theme for Woocommerce Template editing, integrate new features with existing theme. 
                                    </li>
                                </ul>
                                <br>
                                <p> Seems helpful? Let's discuss and kickoff your next WordPress project :)</p>
                            </div>
                            </div>
                        </div>    
                    </div><!--/end row-->

                    <!-- Modal -->
                    <div class="container">
                    <div class="col-xs-4 col-md-4">
                    <div id="contactModal" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <div id="mainform">
                                <?php echo do_shortcode('[contact-form-7 id="7" title="Contact form 1"]'); ?>
                                </div>
                          </div>

                        </div>

                      </div>
                    </div>
                    </div>
					</div>
					
                    <div class="row margin-bottom-30">
					
					    <!--Skills-->
                        <div class="col-sm-6 sm-margin-bottom-30">
                            <div class="panel panel-profile">
                                <div class="panel-heading overflow-h">
                                    <h2 class="panel-title heading-sm pull-left"><i class="fa fa-lightbulb-o"></i> Skills</h2>
                                </div>
                                <div class="panel-body">
                                    <small>HTML5/CSS3</small>
                                    <small>92%</small>
                                    <div class="progress progress-u progress-xxs">
                                        <div style="width: 92%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="92" role="progressbar" class="progress-bar progress-bar-u">
                                        </div>
                                    </div>

                                    <small>PHP / MySQL </small>
                                    <small>80%</small>
                                    <div class="progress progress-u progress-xxs">
                                        <div style="width: 80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-u">
                                        </div>
                                    </div>


                                    <small>Javascript / jQuery / Ajax </small>
                                    <small>80%</small>
                                    <div class="progress progress-u progress-xxs">
                                        <div style="width: 80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-u">
                                        </div>
                                    </div>  

                                    <small>WordPress</small>
                                    <small>95%</small>
                                    <div class="progress progress-u progress-xxs">
                                        <div style="width: 95%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="95" role="progressbar" class="progress-bar progress-bar-u">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>    
                        <!--End Skills-->  
					
                        <!--Social Icons v3-->
                        <div class="col-sm-6 sm-margin-bottom-30">
                            <div class="panel panel-profile site-developed">
                                <div class="panel-heading overflow-h">
                                    <h2 class="panel-title heading-sm pull-left"><i class="fa fa-globe"></i> Recently developed websites </small></h2>
                                    <a href="#"></a>
                                </div>
                                <div class="panel-body">
                                     <ul class="list-unstyled social-contacts-v2">
                                        <li>
                                            <div class="recent-work">
                                                <a target="_blank" href="http://http://viz360.com.au"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/viz360.png" class="img-responsive">viz360.com.au</a>
                                            </div>
                                        </li>                                        
                                        <li>
                                            <div class="recent-work">
                                                <a target="_blank" href="http://olive.dextel.net"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/olive-orange.png" class="img-responsive">olive.dextel.net</a>
                                            </div>
                                        </li>                                        
                                        <li>
											<div class="recent-work">
												<a target="_blank" href="http://www.smartfleece.com"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Smartfleece.png" class="img-responsive">Smartfleece.com</a>
											</div>
										</li>
                                        <li>
											<div class="recent-work">
												<a target="_blank" href="http://www.writtenbysumer.com"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/summer.png" class="img-responsive">Writtenbysummer.com</a>
											</div>
										</li>
                                        <li>
											<div class="recent-work">
												<a target="_blank" href="http://dsolution.com"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dsolution.png" class="img-responsive">Dsolution.com</a>
											</div>
										</li>
                                        <li>
											<div class="recent-work">
												<a target="_blank" href="http://www.quovimc3.com"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quovim.png" class="img-responsive">Quovimc3.com</a>
											</div>
										</li>
                                    </ul>
                                </div>       
                            </div>
                        </div>
                        <!--End Social Icons v3-->
						
                    </div><!--/end row-->    
	
					<div class="row">
                        <div class="col-sm-12 margin-bottom-30">
                            <div class="panel panel-profile">
                                <div class="panel-heading overflow-h">
                                    <h2 class="panel-title heading-sm pull-right">check me on <a href="https://www.upwork.com/users/~0188ce4ab4eaceff53" target="_blank"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/upwork-logo.png" alt="Upwork logo"></a></h2>
                                </div>     
                            </div>
                        </div>
					</div>

                    <!--Timeline-->
                    <div class="panel panel-profile">
                        <div class="panel-heading overflow-h">
                            <h2 class="panel-title heading-sm pull-left"><i class="fa fa-comments-o"></i> Happy clients say: </h2>
                        </div>
                        <div class="panel-body margin-bottom-40">
                            <ul class="timeline-v2 timeline-me">

                                <li>
                                    <time datetime="" class="cbp_tmtime"><span>David Laufer</span> <span>Aug 2016</span></time>
                                    <i class="cbp_tmicon rounded-x hidden-xs"></i>
                                    <div class="cbp_tmlabel">
                                        <h2>Installation, updating and troubleshooting a site with wordpress salient/visual composer</h2>
                                        <p>Azizul is either a Wordpress genius or a magician—maybe some of each! Fast, accomplished and easy to work with. Will definitely be back.</p>
                                    </div>
                                </li>                                  

                                <li>
                                    <time datetime="" class="cbp_tmtime"><span>Damian Traveiso</span> <span>Jul 2016 - Aug 2016</span></time>
                                    <i class="cbp_tmicon rounded-x hidden-xs"></i>
                                    <div class="cbp_tmlabel">
                                        <h2>Wordpress Website Development</h2>
                                        <p>It's been great working with Azizul. He's a very good developer, knowledgeable, fast, hard working and responsible. I will definitely be hiring him again for website development jobs and also recommend him to anyone looking for a reliable dev!</p>
                                    </div>
                                </li>                                  

                                <li>
                                    <time datetime="Aug 2016" class="cbp_tmtime"><span>Ryan Vazquez</span> <span>Aug 2016</span></time>
                                    <i class="cbp_tmicon rounded-x hidden-xs"></i>
                                    <div class="cbp_tmlabel">
                                        <h2>desktop website that is mobile responsive for cleaning business</h2>
                                        <p>Azizul is VERY easy to work with. He speaks fluent english and easy to communicate. His work is ABSOLUTELY BEAUTIFUL. Azizul did not stop until i was happy. Thank you.</p>
                                    </div>
                                </li>                                

                                <li>
                                    <time datetime="" class="cbp_tmtime"><span>Nairobi Morgan</span> <span>Jun 2016</span></time>
                                    <i class="cbp_tmicon rounded-x hidden-xs"></i>
                                    <div class="cbp_tmlabel">
                                        <h2>Need to create WordPress Child Theme For TRACKS PRO</h2>
                                        <p>Mr. Haque is dedicated to client satisfaction. He has a very professional attitude, and solves problems quickly. I am very happy with the quality of the work he has done, and look forward to hiring him again. It was a great experience overall.</p>
                                    </div>
                                </li>
                                <li>
                                    <time datetime="" class="cbp_tmtime"><span>Letisha Brown</span> <span>Mar 2016 - May 2016</span></time>
                                    <i class="cbp_tmicon rounded-x hidden-xs"></i>
                                    <div class="cbp_tmlabel">
                                        <h2>Designer/Developer Needed for Website</h2>
                                        <p>He did a great job on our website. He is friendly and clearly very skilled and knowledgable when it comes to web development. Things that I thought would be complicated to do, he was able to quickly implement in a timely and communicative manner. I would definitely hire him again for future website needs. Thanks for all your hard work Azizul!</p> 
                                    </div>
                                </li>
                                <li>
                                    <time datetime="" class="cbp_tmtime"><span>Angharad Rixon</span> <span>Feb 2016 - May 2016</span></time>
                                    <i class="cbp_tmicon rounded-x hidden-xs"></i>
                                    <div class="cbp_tmlabel">
                                    <h2>Assistance required for wordpress sites: tablet/mobile compatibility, mailchimp intergration</h2>
                                        <p>Azizul is great, he has been really patient with us while we have been figuring out how to make our new websites. The project was eventually cancelled because we found an easier way for us to manage our websites, but this was not at all to do with Azizul's work. I would highly recommend him for and wordpress related tasks.</p>
                                    </div>
                                </li>
                                <li>
                                    <time datetime="" class="cbp_tmtime"><span>Pra Pillay</span> <span>Mar 2016 - Apr 2016</span></time>
                                    <i class="cbp_tmicon rounded-x hidden-xs"></i>
                                    <div class="cbp_tmlabel">
                                    <h2>Mapping software for tracking Lionfish to be attached to website</h2>
                                        <p>Great developer to work make sure the task is completed to the best of his ability.</p>
                                    </div>
                                </li>  
                                <li>
                                    <time datetime="" class="cbp_tmtime"><span>Michael DeVore</span> <span>Mar 2016</span></time>
                                    <i class="cbp_tmicon rounded-x hidden-xs"></i>
                                    <div class="cbp_tmlabel">
                                    <h2>WordPress theme install and configure</h2>
                                        <p>Azizul is an extremely skilled Wordpress designer and performed exactly what we expected him to do. His word was fast and accurate. We enjoyed him on the team and never let us down on any of his milestones. Recommend him highly.</p>
                                    </div>
                                </li> 
                                <li>
                                    <time datetime="" class="cbp_tmtime"><span>Michelle Salater</span> <span>Feb 2016 - Mar 2016</span></time>
                                    <i class="cbp_tmicon rounded-x hidden-xs"></i>
                                    <div class="cbp_tmlabel">
                                    <h2>Create Wordpress Theme from Unify Template</h2>
                                        <p>Azizul was amazing to work with! He did an amazing job on our new site, he met deadlines, and his communication skills are great. I plan on hiring him again and referring him to my colleagues.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>    
                    </div>
                    <!--End Timeline-->
					
                    <div class="row">
                        <!--Social Contacts v2-->
                        <div class="col-sm-6">
                            <div class="panel panel-profile">
                                <div class="panel-heading overflow-h">
                                    <h2 class="panel-title heading-sm pull-left"><i class="fa fa-link"></i> Connect me</h2>
                                </div>
                                <div class="panel-body">
                                    <ul class="list-unstyled social-contacts-v3">
                                        <li>
                                            <i class="rounded-x sk fa fa-skype"></i> <a href="skype:azizultex?chat">azizultex</a> 
                                        </li>
                                        <li>
                                            <i class="rounded-x ln fa fa-linkedin"></i>
                                            <a href="https://bd.linkedin.com/in/azizultex" target="_blank"> LinkedIn </a>
                                        </li>                                        
                                        <li>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/upwork.png" alt="upwork logo">
                                            <a href="https://www.upwork.com/users/~0188ce4ab4eaceff53" target="_blank"> Upwork </a>
                                        </li>
                                        <li>
                                            <i class="rounded-x gm fa fa-envelope"></i> 
                                            <a href="mailto:azizultex@gmail.com">azizultex@gmail.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>    
                        <!--End Social Contacts v2-->

                        <!--Design Skills-->
                        <div class="col-sm-6">
                            <div class="panel panel-profile">
                                <div class="panel-heading overflow-h">
                                    <h2 class="panel-title heading-sm pull-left"><i class="fa fa-volume-control-phone"></i> Facilities! </h2>
                                </div>
                                <div class="panel-body">
                                     <ul class="list-unstyled social-contacts-v2 custom-list">

                                        <li> Independent contractor, no company, no team.</li>
                                        <li> Reasonable price, best quality.</li>
                                        <li> Keen eyes to clients requirements. </li>
                                        <li> Long term business relation and support.</li>
                                        <li> 24/7 reply via Email, Phone, Skype.</li>

                                    </ul> 
                                </div>       
                            </div>
                            </div>
                        </div>
                        <!--End Design Skills-->            
                    </div><!--/end row-->
                </div>
            </div>
            <!-- End Profile Content -->
            <p class="copyright"> All right reserved @2016, azizultex.com </p>
        </div>

        <div id="testimonal"></div>
    </div>		
    <!--=== End Profile ===-->
</div><!--/wrapper-->

<!-- JS Global Compulsory -->           
<?php wp_footer(); ?>

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/venobox.min.js"></script>

<!-- JS Customization -->
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/readmore.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/setting.js"></script>

</body>
</html>	

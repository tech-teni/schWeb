<?php 	

$url = 'https://eschool-ng.com/free-eSchool/portal/fetchdata_fulbrightachieversschools.php';
$request_url = $url;

$curl = curl_init($request_url);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response= curl_exec($curl);
curl_close($curl);


// echo $response;

$json = $response



?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from rometheme.net/html/kids/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Dec 2020 20:37:47 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<!-- Basic Page Needs
    ================================================== -->
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta description="">
	<title>Precious Sprout School </title>
	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="apple-touch-icon" sizes="180x180" href="./favicon_io/android-chrome-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./favicon_io/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./favicon_io/favicon-16x16.png">
	<link rel="manifest" href="./favicon_io/site.webmanifest">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<!-- ==============================================
	CSS VENDOR
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="css/vendor/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/vendor/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/animate.min.css">

	<!-- ==============================================
	Custom Stylesheet
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="css/style.css" />

	<script src="js/vendor/modernizr.min.js"></script>

	<script src='../../google_analytics_auto.html'></script>
</head>

<body>

	<!-- LOAD PAGE -->
	<div class="animationload">
		<div class="loader"></div>
	</div>

	<!-- BACK TO TOP SECTION -->
	<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

	<!-- HEADER -->
	<div class="header header-1">

		<!-- TOPBAR -->
		<div class="topbar">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-sm-8 col-md-6">
						<div class="info">
							<div class="info-item">
								<i class="fa fa-phone"></i> 08060089905, 08099397370
							</div>
							<div class="info-item">
								<i class="fa fa-envelope-o"></i>
								<a href="mailto:preciousproutedu@gmail.com">preciousproutedu@gmail.com</a>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-6">
						<div class=" pull-right d-inline-flex" style="margin: 15px 0px 15px 0px;">
							<!--<a href="https://www.facebook.com/Crownimperials/" class="fb"><i class="fa fa-facebook"></i></a> 
							<a href="https://twitter.com/SchoolCrown" class="tw"><i class="fa fa-twitter"></i></a> 
							<a href="#" class="ig"><i class="fa fa-instagram"></i></a> 
							<a href="#" class="in"><i class="fa fa-linkedin"></i></a> -->
							<a href="https://eschool-ng.com/login.php" class="btn btn-primary kkd"> <i
									class="fa fa-lock"></i> eSchool Portal Login</a>
							<style>
								.sosmed-icon a {
									color: #000;
									background-color: #fd4d40;

								}

								.kkd {
									border-radius: 5px !important;
									background-color: #fff !important;
									padding-left: 10px;
									padding-right: 10px;

								}
							</style>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- NAVBAR SECTION -->
		<div class="navbar-main">
			<div class="container">
				<nav id="navbar-example" class="navbar navbar-expand-lg">
					<a class="navbar-brand jk" href="index.html">
						<img src="./img/img\preciousLogo.jpg" alt="logo">
					</a>

					<style type="text/css">
						.jk img {
							width: 120px;
							height: auto;
						}

						@media screen and (max-width: 768px) {
							.navbar-main.stiky .navbar-brand img {
								width: 120px;
								text-align: center;
								margin: 0 40px 0 40px;
							}

							.jk img {
								width: 120px;
								height: auto;
							}

							.navbar-brand {
								margin-right: 0;
							}
						}
					</style>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
						aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="index.html">HOME</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="about.html">ABOUT US</a>
							</li>
							<li class="nav-item dropdown dmenu">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
									aria-haspopup="true" aria-expanded="false">
									OUR SCHOOL
								</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="admission.html">ADMISSION</a>


								</div>
							</li>
							<li class="nav-item dropdown dmenu">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
									aria-haspopup="true" aria-expanded="false">
									ACADEMICS
								</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="academics.html">OVERVIEW</a>
									<a class="dropdown-item" href="curriculum.html">OUR CURRICULUM</a>

								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="gallery.html">GALLERY</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact.html">CONTACT US</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="blog.php">BLOG</a>
							</li>
						</ul>
					</div>
				</nav> <!-- -->

			</div>
		</div>

	</div>

<div class="my-5"></div>
		<!-- Start Blog Grid Area -->
		<div class="dcare__blog__list bg--white section-padding--lg">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-9">
        				<div class="page__blog__details">
        					<article id="blog__inner" class="dacre__blog__details">
        					
        					</article>

<?php 
    echo "
    <script>
    let ajax = $json
    </script>"
     ?>
<?php 
    echo "
    <script>
        let blogId =" .  $_GET['id'].
        "; console.log(blogId)
    </script>"
     ?>
     
    <script>
    // console.log(ajax[0][10])
    
    // let dataDiv = document.getElementById('dataDiv')
    let blogDetail = document.getElementById('blog__inner')
    
    let blogs = ajax.slice()
    let blogInfo = blogs.find(item => item[0] === blogId )
    
    console.log(blogInfo)
    // blogs.map((item, index) => {
       
        // blogs.map((post, i) => {
            
            blogDetail.innerHTML += `
            	<div class="blog__thumb">
					<img src="https://eschool-ng.com/free-eSchool/portal/news_image/${blogInfo[6]}" alt="blog images" width="100%">
				</div>
            <div class="blog__inner p-4">
				<h2 class="blog-title">${blogInfo[1]}</h2>
				<ul class='list'>
					<li> Post By <a href="#">${blogInfo[4]}</a></li>
					<i style="color:black; background-color:white; margin-right:2px" class="fa fa-clock-o"></i><li>${blogInfo[5]}</li>
				</ul>

				<p>
				    ${blogInfo[3]}
				</p>
			</div>
            `
        // })
    // })
    </script>
							<!-- Start Latest Blog -->
							<div class="blog__latest">
								<h4 class="title__line--3">Latest Blog</h4>
								<div id="blogData" class="row">

									<!-- Start Single BLog -->
		              <?php 
    echo "
    <script>
    // let ajax = $json
    </script>"
     ?>
     
    <script>
    // console.log(ajax[0][10])
    
    let dataDiv = document.getElementById('dataDiv')
    let blogData = document.getElementById('blogData')
    let blog = ajax.slice()
    blog.length = 4
    // blog.map((item, index) => {
       
        blog.map((post, i) => {
            
            blogData.innerHTML += `
                <div class="col-12 col-lg-6 col-md-6 sm-mt-40 my-4" style="padding:0">
		                                <article class="blog__single blog__item">
		                                    <div class="blog__thumb">
		                                        <a href="">
		                                            <img src="https://eschool-ng.com/free-eSchool/portal/news_image/${post[6]}" width='100%'>
		                                        </a>
		                                    </div>
		                                    <div class="blog__content p-4">
		                                        <h2 class='blog-title'><a href="">${post[1]}</a></h2>
		                                        <ul class="bl__post">
		                                            <li> Blog : Post By ${post[4]}</li>
		                                            <li>Date : ${post[5]}</li>
		                                        </ul>
		                                        <p>${post[3].substring(0, 150)}</p>
		                                        <div class="blog__btn flex" style="width:100%">
		                                    <div style="width:30%">
        									<a class="btn btn-warning " href='blog-details.php?id="${post[0]}"'>Read More</a>
        									</div>
        									<div class="blog__share" style='width:70%;'>
        										<a href="#"><i class="fa fa-share-alt"></i></a>
        										<div class="sosmed-icon d-inline-flex">
                            <i class="fa fa-facebook"></i>
                           <i class="fa fa-twitter"></i>
                           <i class="fa fa-instagram"></i>
                            <i class="fa fa-linkedin"></i>
                        </div>
        									</div>
		                                    </div>
		                                </article>
		                            </div>
            `
        })
    // })
    </script>
		                            
								</div>
							</div>
							<!-- End Latest Blog -->



        				</div>
        			</div>
        			<!-- End BLog Details -->
        			<!-- Start Sidebar -->
        			<div class="col-lg-3">
        				<div class="sidebar__widgets sidebar--right">

        					<!-- Single Widget -->
        					<!-- <div class="single__widget search">
        						<h4>Search</h4>
        						<form action="#">
        							<input type="text" placeholder="Search keyword">
        							<button type="submit"><i class="fa fa-search"></i></button>
        						</form>
        					</div> -->
        					<!-- End Widget -->
        					<h4>Recent Posts</h4>
        					<!-- Single Widget -->
        					<div class="single__widget about" id="widget">
                  <script type="text/javascript">
                    let widgetData = document.getElementById('widget')
    
                    let blogWidget = ajax.slice()
                    blogWidget.length = 5
                    blogWidget.map((post, i) => {
            
                    widgetData.innerHTML +=`
                    <div class='single-widget my-3' style='box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);'>
                      <a href="blog-details.php?id=${post[0]}">
                          <img src="https://eschool-ng.com/free-eSchool/portal/news_image/${post[6]}"/ width="100%">
                        </a>
                    </div>
                    `

                  });
                  </script>
                </div>
        					<!-- End Widget -->

        					<!-- Single Widget -->
        					<div class="single__widget recent__post">
        						<h4>Recent Posts</h4>
								<ul id="dataUl">

	                            <?php 
    echo "
    <script>
    let recentPost = $json
    </script>"
     ?>
    <script>
    // console.log(ajax[0][10])
    
    let dataUl = document.getElementById('dataUl')
    
    let otherPosts = recentPost
    // otherPosts.map((item, index) => {
        // console.log(item)
        otherPosts.slice(4, 7).map((post, i) => {
            dataUl.innerHTML += `
                <li>
					<a href=""><img src="https://eschool-ng.com/free-eSchool/portal/news_image/${post[6]}" alt="post images"></a>
					<div class="post__content">
						<h6 class=''><a href="">${post[1]}</a></h6>
						<span class="date"><i class="fa fa-calendar"></i>${post[5]}</span>
					</div>
				</li>
            `
        })
    // })
    </script>
									

								</ul>
        					</div>
        					<!-- End Widget -->       			

        				</div>
        			</div>
        			<!-- End Sidebar -->
        		</div>
        	</div>
        </div>
		<!-- End Blog Grid Area -->

		



      <!-- FOOTER AREA -->
      <div class="footer" data-background="images/footer.jpg">
		<div class="content-wrap">
			<div class="container">

				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-3">
						<div class="footer-item">
							<img src="img\img\preciousLogo.jpg" alt="logo bottom" class="logo-bottom">
							<div class="spacer-30"></div>
							<p>Welcome to Precious Sprout School where learning is value. We promote a welcoming, caring
								and safe environment where each pupil is nurtured to lead.</p>

						</div>
					</div>

					<div class="col-sm-12 col-md-6 col-lg-3">
						<div class="footer-item">
							<div class="footer-title">
								Contact Info
							</div>
							<ul class="list-info">
								<li>
									<div class="info-icon">
										<span class="fa fa-map-marker"></span>
									</div>
									<div class="info-text">Address: 14, White Avenue, Magbon, Mowo Nla, Ikorodu</div>
								</li>
								<li>
									<div class="info-icon">
										<span class="fa fa-phone"></span>
									</div>
									<div class="info-text">08060089905, 08099397370, 08034817241</div>
								</li>
								<li>
									<div class="info-icon">
										<span class="fa fa-envelope"></span>
									</div>
									<div class="info-text"><a href="mailto:preciousproutedu@gmail.com"
											title="">preciousproutedu@gmail.com </a></div>
								</li>
								<li>
									<div class="info-icon">
										<span class="fa fa-clock-o"></span>
									</div>
									<div class="info-text">Mon - Sat 09:00 - 17:00</div>
								</li>
							</ul>

						</div>
					</div>




					<div class="col-sm-12 col-md-6 col-lg-3">
						<div class="footer-item">
							<div class="footer-title">
								Useful Links
							</div>

							<ul class="list">
								<li><a href="about.html" title="About us">About us</a></li>
								<li><a href="admission.html" title="Admission">Admission</a></li>
								<li><a href="academics.html" title="Academics">Academics</a></li>
								<li><a href="gallery.html" title="Gallery">Gallery</a></li>
								<li><a href="contact.html" title="Contact Us">Contact Us</a></li>
								<li><a href="https://fayofunmischools.com:2096/cpsess6572153512/3rdparty/roundcube/" title="Webmail">Webmail</a></li>
							</ul>

						</div>
					</div>

					<div class="col-sm-12 col-md-6 col-lg-3">
						<div class="footer-item">
							<div class="footer-title">
								Get in Touch
							</div>
							<p>Follow us on all our social media handles @Precious Sprout School</p>
							<div class="sosmed-icon d-inline-flex">
								<a href="#" class="fb"><i class="fa fa-facebook"></i></a>
								<a href="#" class="tw"><i class="fa fa-twitter"></i></a>
								<a href="#" class="ig"><i class="fa fa-instagram"></i></a>
								<a href="#" class="in"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="fcopy bg-secondary">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<p class="ftex copy" style="color: #42241c;">© 2022 Precious Sprout School. All rights reserved. Designed by <a
								href="http://akisolutions.com.ng" target="_blank">AKI Solutions</a></p>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- JS VENDOR -->
	<script src="js/vendor/jquery.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/vendor/owl.carousel.js"></script>
	<script src="js/vendor/jquery.magnific-popup.min.js"></script>

	<!-- SENDMAIL -->
	<script src="js/vendor/validator.min.js"></script>
	<script src="js/vendor/form-scripts.js"></script>

	<script src="js/script.js"></script>
    </body>
    </html>
<?php require_once( '../spadministrator/cms.php' ); ?>
<cms:template title='en / Home page' />
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>agrogreet</title>

    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/device.js"></script>	
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/core.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	

	<!--[if lt IE 9]>
        <div style='text-align:center'><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div>  
    <![endif]-->
</head>
<body>
<div id="webSiteLoader"></div>
<div id="glob-wrap">
	<header>


		<div class="container">
			<div class="row">
				<div class="col-lg-12 tac">

		<!--menu-->
					<nav id="mainNav" class="mainNav hideMenu" data-follow="location" data-type="navigation">
						<cms:pages masterpage='en/navigator.php'>	
							<cms:show navigator />
						</cms:pages>

						<a style="float:right" href="//<cms:php >
						echo $_SERVER['SERVER_NAME'];
						</cms:php>"><img width="50px" src="img/vi.gif" /></a>
						<a style="float:right" href="//<cms:php >
						echo $_SERVER['SERVER_NAME'];
						</cms:php>/en"/><img width="50px" src="img/us.gif" /></a>
					</nav>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</header>
	<article id="content" data-follow="location" data-type="switcher" data-behavior="scroll" class=''>
		<div data-id="" id="page1" class=''>
			<div class="bgHolder">
				<div class="bg1"></div>
			</div>
						
			<div class="content">
				<div class="row">
					 <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0  col-sm-offset-0 col-sm-12 col-xs-offset-0 col-xs-12 tac perspective">
					   			<!--logo and company name-->  
				   		<cms:pages masterpage='en/logo.php' >
							<h1 style="left: 47%;"><a href="./" class="navbar-brand">
								<img src="<cms:show logo_image />" alt="<cms:show logo_name />">
								<span class="extra-wrap">
								 	<span class="logo_slog"><cms:show logo_name /></span>
									<em>&bull; <cms:show logo_sologan /> &bull;</em>
								</span>
							</a></h1> 
						</cms:pages>
					</div>
				</div>
			</div>
			<div class="slider_box">
			    <div class="slider_wrapper">
			        <div>
			            <div id="camera_wrap">
			            <cms:pages masterpage='en/banner.php' >
                            <div data-src="<cms:show banner_image />">
                                <div class="caption fadeIn">
                                        <div class="container">
                                         <div class="row">
                                                 <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0  col-sm-offset-0 col-sm-12 col-xs-offset-0 col-xs-12 tac">
                                                  <p class="p1"><cms:show k_page_title /></p>
                                                 </div>
                                         </div>
                                        </div>
                                </div>
                            </div>
                        </cms:pages>

			            </div>
			        </div> 
			    </div>
			</div>
			
		</div>
		<div data-id="about" id="page2" class=''>
			<a name="about"></a>
			<div id="page2_bg"  data-stellar-background-ratio="-0.1">
		 
									<div class="container">
						<div class="row mar_t_180">
							<div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-3 col-xs-3 perspective">
								<div class="bord_1"></div>
							</div>
						</div>
							
							<div class="row pad_b_280">
							<div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-xs-12 perspective">
							<cms:pages masterpage='en/ajax/aboutus.php' >
								<h2><cms:show company_name /></h2>
								<h3><cms:show company_sologan /></h3>
								</div>
								<div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-6 col-xs-12  mar_t_2 perspective">
									<div class="p2_block_1 ">
										<h4><cms:show company_title /></h4>
										<cms:excerptHTML count='75' ignore='img'>
											<cms:show company_content />
										</cms:excerptHTML>
										
									 	<a href="./aboutus.php" class="btn btn-default mar_t_35 mar_b_1">Đọc thêm >></a>
									</div>
								</div>
							</cms:pages>
							<div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-6 col-xs-12  mar_t_2 perspective">
								<div class="p2_block_2 ">
									<cms:pages masterpage='en/ajax/aboutus.php' >
										<h4><cms:show company_staff_title /></h4>
									</cms:pages>
									
					              	<div id="owl2">
					              		<cms:pages masterpage='en/ajax/partner.php'>
					              		<div class="item">
											<a target="_blank" href="<cms:show partner_link />" data-image="1" class="p2_button"><img src="<cms:show partner_image />" alt=""></a>
						                </div>
						                </cms:pages>
						             </div>
								</div>
							</div>
						</div>
					</div>

			</div>
		</div>
		<div data-id="products" id="page3" class=''>
		<div id="page3_bg"   data-stellar-background-ratio="-0.6">
			<a name="products"></a>
				<div class='pad_page3'>
				<div class="p3_plane ">
					<div class="p3_block_1 perspective">
						<div class="bord_2"></div>
						<cms:editable name='products' label='Products' type='richtext'>
							<h2>our<br>products</h2>
							 <p class="mar_t_5">
							  Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient.
							 </p>
							 <p class="">
							  montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, 
							  luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. 
							 </p>
						 <a href="./products.php" data-image="0" class="btn btn-default mar_t_15 mar_b_1">See all products</a>
						 </cms:editable>
					</div>
<!-- desktop-gallery -->
						<div class="car_div mar_t_2 desktop-only">
			              	<div id="owl1">
			              	<cms:pages masterpage='en/ajax/products.php' >
				                <div class="item">
		                            <div class="box">
		                        			<div class="circ">
		                            			<span><cms:show k_page_title /></span>
		                            		</div>
		                        			<a href="./products.php?p=<cms:show k_page_id />" data-image="0" class=""><img src="<cms:show product_thumb />" alt=""></a>
		                        	</div>
				                </div>
			              	</cms:pages>
				               
			                </div>
			               </div>
			                <div class="clear"></div>
<!-- mobile_gallery -->
			            <div class="car_div mar_t_2 mobile-only">
			              	<div id="1">
			              		<cms:pages masterpage='en/ajax/products.php' >
					                <div class="item">
			                            <div class="box">
			                        			<div class="circ">
			                            			<span><cms:show k_page_title /></span>
			                            		</div>
			                        			<a href="./products.php" data-image="0" class=""><img src="<cms:show product_thumb />" alt=""></a>
			                        	</div>
					                </div>
				              	</cms:pages>
				             </div>
			                </div>
			                </div>
					</div>   
				</div>
		</div>
		<div data-id="technologies" id="page4"  class=''>
		<div id="page4_bg"   data-stellar-background-ratio="-0.4">	
			<div class="container">
				
				<div class="row mar_t_180">
					<div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-3 col-xs-3 perspective">
						<div class="bord_3"></div>
					</div>
				</div>
					
					<div class="row pad_b_280">
					<div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-xs-12 perspective">
					<cms:editable name='technologies_title' label='Technologies Title' type='richtext'>
					<h2>new technologies</h2>
					<h3>eget tellus non erat</h3>
					</cms:editable>
					</div>
					<cms:pages masterpage='en/ajax/technologies.php' >
						<div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-12 col-xs-12  mar_t_3 perspective">
							<div class="p4_block_1">
									<a href="./technologies.php?p=<cms:show k_page_id />" class="img_1 img-indent">
									 <img src="<cms:show technology_image />" alt="" class=''>
									 </a>
									
									<div class="extra-wrap pad_3">
									 <h5><cms:show k_page_title /></h5>
									 <a href="./technologies.php?p=<cms:show k_page_id />" class="a1"><cms:show technology_sologan /></a>
									 <cms:show technology_content />
									</div>	
							</div>
						</div>
					</cms:pages>
				</div>
			
			</div>		
			</div>
			
		</div>
		<div data-id="testimonials" id="page5"  class=''>
		<div id="page5_bg"   data-stellar-background-ratio="-0.6">
			
				<div class="container">
				<div class="slider_box perspective pad_b_280">
			    <div class="slider_wrapper">
			        <div>
			            <div id="camera_wrap_1">
			            	<cms:pages masterpage='en/ajax/staff.php' >
			                <div data-src="img/transper.png">
			                	<div class="caption fadeIn">
			                		<div class="container">
			                		 <div class="row">
				                		 <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0  col-sm-offset-0 col-sm-12 col-xs-offset-0 col-xs-12 tac">
				                		 <div class="p5_pic"><a href="./staff.php?p=<cms:show k_page_id />"><img src="<cms:show staff_image />" alt=""></a></div>
				                		 <p class="p2">“</p>
				                		 <cms:show staff_introduce />
										<div class="author"><cms:show k_page_title /></div>
				                		 </div>
			                		 </div>
			                		</div>
			                	</div>
			                </div>
			                </cms:pages>
			            </div>
			        </div> 
			    </div>
			</div>
			</div>
			</div>
			
		</div>

			<div data-id="contacts" id="page6">
				<div class="bgHolder">
					<div class="bg6"></div>	
				</div>
				<div class="container">
					<div class="row mar_t_180">
						<div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-3 col-xs-3 perspective">
							<div class="bord_4"></div>
						</div>
					</div>
						
						<div class="row">
						<div class="col-lg-8 col-lg-offset-0 col-md-8 col-md-offset-0 col-sm-12 col-xs-12 perspective">
						<cms:editable name='contacts_title' label='Contacts Title' type='richtext'>
							<h2>Contact info</h2>
							<h3><span>eget tellus non erat</span></h3>
						</cms:editable>
						</div>
						<div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-12 col-xs-12  mar_t_2 perspective">
						<h6>
						<cms:editable name='contacts_content' label='Contacts Content' type='text'>
						Pellentesque sed doloraliquam congue fermentum nisl. Mauris accumsan nulla. 
						</cms:editable>
						</h6>
						</div>
						</div>
						<div class="row pad_b_280">
						<div class="col-lg-8 col-lg-offset-0 col-md-8 col-md-offset-0 col-sm-12 col-xs-12  mar_t_2 perspective">
							<form id="form-1" action="mailto:hieunc@songphi.com" method="post">
					            <div class="success-message">Trân trọng cảm ơn bạn đã liên hệ với chúng tôi. Chúng tôi sẽ gọi lại trong vòng 24 giờ.</div>
					            <label class="name animateItem4">
					              <input type="text" placeholder="Nhập tên bạn:" class="form-control" data-constraints="@Required @Pattern(regex=/^[a-zA-Z'][a-zA-Z-' ]+[a-zA-Z']?$/)"/>
					              <span class="error">*Tên không dấu.</span> <span class="empty">*Tên không hợp lệ</span>
					            </label>
					            <label class="email animateItem5">
					              <input type="email" placeholder="E-mail:" class="form-control" data-constraints="@Required @Email"/>
					              <span class="error">*Email không được bỏ trống.</span> <span class="empty">*Email không hợp lệ.</span>
					            </label>
					            <label class="message animateItem6">
					              <textarea placeholder="Nhập nội dung:" class="form-control" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
					              <span class="error">*Nội dung quá ngắn.</span> <span class="empty">*Nội dung không hợp lệ.</span>
					            </label>
					            <div class="btns animateItem7"><p><a href="#" class="btn btn-default btn-link btn-special form_b_1" data-type="reset">Làm lại</a><a href="hieunc@songphi.com" class="btn btn-default btn-link btn-special form_b_2" data-type="submit">Gửi</a></p></div>
					        </form>
						</div>
						<div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-12 col-xs-12  mar_t_2 perspective">
						<div class="p6_block_1">
						 <i class="fa-home img-indent_1"></i>
						 <h6 class= "mar_t_1">
						 	<cms:editable name='contacts_addr' label='Contacts Address' type='text'>
						 	8901 Marmora Road, Glasgow, D04 89GR.
						 	</cms:editable>
						 	</h6>
						</div>
						<div class="p6_block_2 mar_t_25">
						 <i class="fa-phone img-indent_1"></i>
						 <h6 class='mar_t_1'>
						 	<cms:editable name='contacts_phone' label='Contacts Phone' type='text'>
						 	+1 800 603 6035<br>+1 800 889 9898 
						 	</cms:editable>
						 </h6>
						</div>
						<div class="p6_block_3 mar_t_25">
						 <i class="fa-envelope img-indent_1"></i>
						 <h6 class= 'mar_t_1'>
						 	<a href="#">
						 	<cms:editable name='contacts_email' label='Contacts Email' type='text'>
						 	mail@demolink.org
						 	</cms:editable>
						 	</a>

						 	</h6>
						</div>

						</div>
					</div>
				</div>
				

			</div>
		
	</article>
	<div id="other_pages" data-follow="location" data-type="switcher" data-flags="ajax">
		
	</div>
	<footer>
	<div class="container">
	<div class="row bord">
	 	<cms:editable name='footer' label='Footer' type='richtext'>
		<div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-6 col-xs-12 ">
			<p class="copyright">Agrogreet &copy; <span id="year1"></span> &bull; <a href="./privacy.html">Privacy Policy</a><br>More Agriculture Website Templates at <a rel="nofollow" href="http://www.templatemonster.com/category/agriculture-web-templates/" target="_blank">TemplateMonster.com</a></p>
		</div>
		</cms:editable>
		<div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-6 col-xs-12 ">
		
					
					
					<ul class="follow-links">
			                <li><a href="<cms:editable name='twitter' label='Twitter' type='text'></cms:editable>"><i class="fa-twitter"></i></a></li>
			                <li><a href="<cms:editable name='facebook' label='Facebook' type='text'></cms:editable>"><i class="fa-facebook"></i></a></li>
			                <li><a href="<cms:editable name='rss' label='Rss' type='text'></cms:editable>"><i class="fa-rss"></i></a></li>
			                 <li><a href="<cms:editable name='google' label='Google plus' type='text'></cms:editable>"><i class="fa-google-plus"></i></a></li>
					</ul>
		</div>
		
	</div>
	</div>
	</footer>
</div>
<!-- coded by cactus -->
</body>
</html>
<?php COUCH::invoke(); ?>
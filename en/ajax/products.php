<?php require_once( '../../spadministrator/cms.php' ); ?>
<cms:template title='en / Products' clonable='1' >
	<cms:editable name='product_content' label='Content' type='richtext' />
	<cms:editable name='product_thumb' label='Thumb Image'
		crop='1'
		type='image' 
	/>
	<cms:editable name='product_image_1' label='Image 1'
		crop='1'
		type='image' 
	/>
	<cms:editable name='product_image_2' label='Image 2'
		crop='1'
		type='image' 
	/>
	<cms:editable name='product_image_3' label='Image 3'
		crop='1'
		type='image' 
	/>
	<cms:editable name='product_image_4' label='Image 4'
		crop='1'
		type='image' 
	/>
	<cms:editable name='product_image_5' label='Image 5'
		crop='1'
		type='image' 
	/>

</cms:template>
<cms:if k_is_page >
<!doctype html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>fruit</title>
	</head>
	<body>
			<div data-id="fruit" class="gall_indent">
			<a href="./products" class="closeIcon historyBack closeIconGallery"></a>
			<!-- fullscreen gallery -->
			<div class="galleryContainer">
				<div class="imgSpinner"></div>
				<a href="#" class="prevButton">
					<span></span>
				</a>
				<a href="#" class="nextButton">
					<span></span>
				</a>
				<div class="galleryHolder">
					<div class="imageHolder">
						<img src="img/gallery/fruit/pic1.jpg" alt="">
						</div>
				</div>
				<div class="inner">
					<ul>
						<cms:if product_image_1 >
							<li>
								<a href="<cms:show product_image_1 />"></a>
							</li>
						</cms:if>
						<cms:if product_image_2 >
							<li>
								<a href="<cms:show product_image_2 />"></a>
							</li>
						</cms:if>
						<cms:if product_image_3 >
							<li>
								<a href="<cms:show product_image_3 />"></a>
							</li>
						</cms:if>
						<cms:if product_image_4 >
							<li>
								<a href="<cms:show product_image_4 />"></a>
							</li>
						</cms:if>
						<cms:if product_image_5 >
							<li>
								<a href="<cms:show product_image_5 />"></a>
							</li>
						</cms:if>
					</ul>
				</div>
				<ul class="galleryDiscription">
					
				</ul>
			</div>
			<!-- end fullscreen gallery -->
		</div>
	</body>
	</html>

</cms:if>
<?php COUCH::invoke(); ?>
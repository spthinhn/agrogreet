<?php require_once( '../../spadministrator/cms.php' ); ?>
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
							<cms:pages masterpage='products.php' >
							<li>
								<a href="<cms:show product_image />"></a>
							</li>
							</cms:pages>
						</ul>
					</div>
					<ul class="galleryDiscription">
						<cms:pages masterpage='products.php' >
						<li>
							<p class="info">
								<cms:show product_content />
							</p>
						</li>
						</cms:pages>
					</ul>
				</div>
				<!-- end fullscreen gallery -->
			</div>
</body>
</html>
<?php COUCH::invoke(); ?>
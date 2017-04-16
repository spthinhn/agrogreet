<?php require_once( '../spadministrator/cms.php' ); ?>
<cms:template title='Technologies' clonable='1' >
	<cms:editable name='technology_sologan' label='Sologan' type='text' />
	<cms:editable name='technology_content' label='Content' type='richtext' />
	<cms:editable name='technology_image' label='Image'
		crop='1'
		type='image' 
	/>
</cms:template>
<cms:if k_is_page >
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Read More</title>
</head>
<body>
<div class="bgHolder" style="background-image: url('img/products_bg.jpg');background-size: cover">
				<div class="bg7"></div>
			</div>
	<div class="container mar_t_20 pad_b_m_5" >
		<div class="row">
		
			<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12 tac mar_t_15">
				<a href="./" class="closeIcon historyBack"></a>
				<h2><cms:show k_page_title /></h2>
				<h3><cms:show technology_sologan /></h3>
				<div style="text-align: left">
 					<cms:show technology_content />
				</div>
			</div>
		</div>
	</div>  
</body>
</html>
</cms:if >
<?php COUCH::invoke(); ?>
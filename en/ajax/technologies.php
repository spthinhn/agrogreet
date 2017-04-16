<?php require_once( '../../spadministrator/cms.php' ); ?>
<cms:template title='en / Technologies' clonable='1' >
	<cms:editable name='technology_sologan' label='Sologan' type='text' />
	<cms:editable name='technology_content' label='Content' type='richtext' />
	<cms:editable name='technology_image' label='Image'
		crop='1'
		type='image' 
	/>
</cms:template>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Read More</title>
</head>
<body>
<div class="bgHolder">
				<div class="bg7"></div>
			</div>
	<cms:pages masterpage='ajax/technologies.php' >
	<div class="container mar_t_20 pad_b_m_5">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12 tac mar_t_15">
				<a href="./" class="closeIcon historyBack"></a>
				<h2><cms:show k_page_title /></h2>
				<h3><cms:show technology_sologan /></h3>
 				<cms:show technology_content />
			</div>
		</div>
	</div>  
	</cms:pages>
</body>
</html>
<?php COUCH::invoke(); ?>
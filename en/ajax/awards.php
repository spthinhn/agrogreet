<?php require_once( '../../spadministrator/cms.php' ); ?>
<cms:template title='en / Awards' >
	<cms:editable name='awards_title' label='Title' type='text' />
	<cms:editable name='awards_content' label='Content' type='richtext' />
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
	<div class="container mar_t_20 pad_b_m_5">
		<div class="row">
		<cms:pages masterpage='en/ajax/news.php' >
			<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12 tac mar_t_15">
				<a href="./" class="closeIcon historyBack"></a>
				<h2><cms:show awards_title /></h2>
				
				<cms:show awards_content />
			</div>
		</cms:pages>
		</div>
	</div>  
</body>
</html>
<?php COUCH::invoke(); ?>
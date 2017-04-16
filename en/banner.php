<?php require_once( '../spadministrator/cms.php' ); ?>
<cms:template title='en / Banner' clonable='1' />
	<cms:editable name='banner_image' label='Image'
		type='image' 
		crop='1'
	/>

<?php COUCH::invoke(); ?>
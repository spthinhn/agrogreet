<?php require_once( '../spadministrator/cms.php' ); ?>
<cms:template title='en / Logo' />
	<cms:editable name='logo_name' label='Name' type='text' />
	<cms:editable name='logo_sologan' label='Sologan' type='text' />
	<cms:editable name='logo_image' label='Image'
		type='image' 
		crop='1'
	/>

<?php COUCH::invoke(); ?>
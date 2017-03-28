<?php require_once( 'spadministrator/cms.php' ); ?>
<cms:template title='Product' />
	<cms:editable name='product_title' label='Title' type='text' />
	<cms:editable name='product_content' label='Content' type='richtext' />

<?php COUCH::invoke(); ?>
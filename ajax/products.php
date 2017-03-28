<?php require_once( '../spadministrator/cms.php' ); ?>
<cms:template title='Products' clonable='1' >
	<cms:editable name='product_content' label='Content' type='richtext' />
	<cms:editable name='product_thumb' label='Thumb Image'
		crop='1'
		type='image' 
	/>
	<cms:editable name='product_image' label='Image'
		crop='1'
		type='image' 
	/>
</cms:template>


<?php COUCH::invoke(); ?>
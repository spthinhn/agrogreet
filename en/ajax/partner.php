<?php require_once( '../../spadministrator/cms.php' ); ?>
<cms:template title='en / Partner' clonable='1' >
	<cms:editable name='partner_link' label='Link' type='text' />
	<cms:editable name='partner_image' label='Image'
		width='147' 
		height='148' 
		crop='1'
		type='image' 
	/>
</cms:template>

<?php COUCH::invoke(); ?>
<?php require_once( '../spadministrator/cms.php' ); ?>
<cms:template title='Staff' clonable='1' >
	<cms:editable name='staff_content' label='Content' type='richtext' />
	<cms:editable name='staff_image' label='Image'
		width='147' 
		height='148' 
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
	<div class="container mar_t_20 pad_b_m_5">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12 tac mar_t_15">
				<a href="./" class="closeIcon historyBack"></a>
				<cms:if k_is_page >
					<h2><cms:show k_page_title /></h2>
					<cms:show staff_content />
				<cms:else />
					<h2>Read more</h2>
	 				<p class='p6 mar_t_8'><a href="./readmore.html" class="">
					 Koleacene anritma hasra dnuysa lecnadasert abuyas.</a><br> Ciasfena nec scesaser ermenteras ertasn ctor wisoleaanritmhasra tyreras isiegereras muygase 
					nuyasser vtrdasrutrum lacus miytasas delorytfas. </p>
					<p class="p6 mar_t_3 pad_b_2">
					 Cuisque nulla bytdaser bytrasger rutumcus. Kocne anritma has deyulety. 
					Vereas feugiata lecnadas phasedert abuyasa ledatynacsaser ermenteras ertasn
					sisoleaene anritmhasesera tyreras isieger rutrum lacus. 
					</p>
					<p class="p6 mar_t_3 pad_b_2">
					 Cuisque nulla bytdaser bytrasger rutumcus. Kocne anritma has deyulety. 
					Vereas feugiata lecnadas phasedert abuyasa ledatynacsaser ermenteras ertasn
					sisoleaene anritmhasesera tyreras isieger rutrum lacus. 
					</p>
				</cms:if>
			</div>
		</div>
	</div>  
</body>
</html>
<?php COUCH::invoke(); ?>
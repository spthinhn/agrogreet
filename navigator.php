<?php require_once( 'spadministrator/cms.php' ); ?>
<cms:template title='Navigator' />
	<cms:editable name='navigator' label='Navigator' type='richtext'>
		<ul>
			<li><a href="./">home</a></li>
			<li><a href="./about">about</a></li>
			<li><a href="./products">products</a>
				<div class="sf-mega">
					<ul>
						<li><a href="./readmore.html">history</a></li>
						<li><a href="./readmore.html">news</a></li>
						<li class="last"><a href="./readmore.html">awards</a></li>
					</ul>
				</div>
			</li>
			<li><a href="./technologies">new technologies</a></li>
			<li><a href="./testimonials">testimonials</a></li>
			<li><a href="./contacts">contacts</a></li>
		</ul>
	</cms:editable>
<?php COUCH::invoke(); ?>
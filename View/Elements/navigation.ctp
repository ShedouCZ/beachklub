<?php
	$links = array(
		'Domů' => '/',
		'O nás' => '/o-nas',
		'Partneři' => '/partneri',
		'Kalendář' => '/kalendar-akci',
		'Burza' => '/burza',
		'Kontakty' => '/kontakty',
	);
?>
	<div class="clearfix">
		<div class="region region-menu">
			<div id="block-superfish-1" class="block block-superfish block-odd">


				<div class="content">
					<ul id="superfish-1" class="menu sf-menu sf-main-menu sf-horizontal sf-style-none sf-total-items-5 sf-parent-items-0 sf-single-items-5 superfish-processed sf-js-enabled">
						<?php
							foreach ($links as $title => $url) {
								$link = $this->Html->link($title, $url);
								$options = array();
								if ($this->request->here == Router::url($url)) { // detect query string + params
									$options = array('class' => 'active-trail');
								}
								echo $this->Html->tag('li', $link, $options);
							}
						?>
					</ul>
				</div>
				<!-- /.content -->

			</div>
			<!-- /.block -->
		</div>
	</div>

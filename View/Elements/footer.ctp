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
    <div class="container-24">
        <div class="grid-24">
            <div class="footer-wrapper clearfix">
                <div class="region region-footer">
                    <div id="block-system-main-menu" class="block block-system footer-menu block-menu block-odd">


                        <div class="content">
                            <ul class="menu clearfix">
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
                    <div id="block-block-5" class="block block-block block-even">


                        <div class="content">
                            beachklubladvi.cz © 2015
                        <!-- /.content -->

                    </div>
                    <!-- /.block -->
                </div>
            </div>
        </div>
    </div>

<?php
#### This is just a mark file ###
Configure::write('GalleryOptions.Pictures.resize_to', array(0, 1024, false));
Configure::write('GalleryOptions.Pictures.styles', 
	array(
		'medium' => array(255, 170, $cropped=true),
		'slide'  => array(926, 0,   $cropped=false),
		'tile'   => array(309, 153, $cropped=true),
		'docs'   => array(570, 0,   $cropped=false),
		'square' => array(190, 180, $cropped=true),
	) 
);
Configure::write('GalleryOptions.Pictures.jpg_quality', 92);

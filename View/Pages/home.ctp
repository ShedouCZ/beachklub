<style>
	.content article img {
		width: 60%;
	}
	#flexslider-1 .field-content img {
		max-height:350px!important;
	}
	/*
	3 tiles per row
	.tiles {
		zoom: 0.65;
	    width: 1000px;
	    position: absolute;
	}
	*/
	/*2 tiles per row*/
	.tiles {
		zoom: 0.95;
		width: 900px;
		position: absolute;
	}
	.down {
		margin-top: 470px;
	}
	.alpha {
		margin-left: 5px !important;
	}
	.omega {
		margin-right: 5px !important;
	}
</style>

<div class="region region-content-bottom" style="margin-bottom: 45px">
    <div id="block-views-services-block" class="block block-views block-even">
        <div class="content">
            <div class="view view-services view-id-services view-display-id-block tiles">
                <div class="view-content">
                    <?php echo $this->element('tiles'); ?>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.block -->
</div>

<div class="column column_right prefix-1 grid-8 omega">
	<?php echo $this->element('sidebar_2_homepage') ?>
</div>

<div id="content" class="column down" role="main">
    <div class="section">
        <div class="tabs">
        </div>
        <div class="region region-content">
            <div id="block-system-main" class="block block-system block-even">
                <div class="content">
                    <article class="node node-page node-promoted node-teaser published with-comments promote clearfix">
                        <?php echo $this->element('latest_documents', array('first'=>true)); ?>
                    </article>
                    <!-- /.node -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.block -->
        </div>
    </div>
</div>


<div id="content" class="column">
    <div class="section">
        <div class="tabs">
        </div>
        <div class="region region-content">
            <div id="block-system-main" class="block block-system block-even">
                <div class="content">
                    <article id="node-153" class="node node-page node-promoted node-teaser node-odd published with-comments promote node-teaser clearfix">
                        <h3>DALŠÍ NOVINKY:</h3>
                        <?php echo $this->element('latest_documents', array('first'=>false)); ?>
                    </article>
                    <!-- /.node -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.block -->
        </div>
    </div>
</div>

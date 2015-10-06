<?php
  $partner_types = $this->requestAction(
    'partnerTypes/index'
  );
?>
<div id="main" class="clearfix">

    <div id="content" class="column" role="main">
        <div class="section">
            <div class="region region-content">
                <?php foreach ($partner_types as $type) { ?>
                    <section id="block-views-upcoming-tournaments-block" class="block block-views views-clearfix block-even">

                        <h2><?php echo $type['PartnerType']['title'];?></h2>

                        <?php foreach ($type['Partner'] as $item) { ?>
                            <div class="content partners">
                                <?php
                                    if (AuthComponent::user()) {
                                        $link = $this->Html->link('upravit', '/admin/partners/edit/' . $item['id']);
                                        echo $this->Html->div('button admin_edit left', $link, array('style'=>'margin-top:15px'));
                                    }
                                ?>
                                <div class="view view-upcoming-tournaments view-id-upcoming_tournaments view-display-id-block view-dom-id-7aa8b03895c96536fd397502c23fec68">
                                    <div class="view-content">
                                        <div class="views-row views-row-1 views-row-odd views-row-first">

                                            <div class="views-field views-field-field-tournaments-photo img-left">
                                                <div class="field-content">
                                                    <a href ='<?php echo $item['url'];?>'><img src="<?php echo $item['Picture']['styles']['docs'];?>" width="210" alt=""> </a>
                                                </div>
                                            </div>
                                            <div class="views-field views-field-nothing extra">
                                                <span class="field-content">
                                                    <div class="views-field-title">
                                                        <a href="<?php echo $item['url'];?>"><h2><?php echo $item['name'];?></h2></a>
                                                    </div>
                                                    <div class="views-field-body">
                                                        <p>
                                                            <?php echo $item['desc'];?>
                                                        </p>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.content -->
                            <?php }; ?>
                        </section><!-- /.block -->
                <?php }; ?>
            </div>
        </div>
    </div>
</div>

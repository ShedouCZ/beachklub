<?php
  $partner_types = $this->requestAction(
    'partnerTypes/index'
  );
?>
<div id="main" class="clearfix">
    <?php $this->start('sidebar'); ?>
    <aside id="sidebar-second-grid-8" class="column column_right prefix-1 grid-8 omega" role="complementary">
        <div class="section">
            <div class="region region-sidebar-second-grid-4">
                <section id="block-block-6" class="block block-block block-even">
                    <div class="content">
                        <div class="views-field-title align-center title-indent"><h2>Naši partneři</h2></div>
                        <p>
                            Provoz sportovního areálu se neobejde bez partnerství města a sponzorů.
                            Touto stránkou bychom rádi poděkovali všem našim příznivcům a podporovatelům.
                        </p>
                        <p>
                            Máte rádi sport a přemýšlíte o podpoře smysluplného projektu na Praze 8 nebo dokonce
                            plánujete zasáhnout celou republiku? Napište nám na marketing@beachklubladvi.cz a my
                            Vám připravíme zajímavou a konkrétní nabídku.
                        </p>
                        <p>
                            Usilovně hledáme
                            <ul>
                                <li>sponzory konkrétních projektů, které chystáme v areálu pro Vás - umělé osvětlení, dětské hřiště, tribuna, atd.</li>
                                <li>partnery finanční i materiálové pro naše turnaje</li>
                                <li>partnery pro sportovní turnaj v přehazované pro děti z dětských domovů</li>
                            </ul>
                        </p>
                        <p>
                            Nechcete plýtvat s rozpočtem v dobách finanční krize? Nebojte se a napište.
                            Nemáme velké oči a oceníme každou pomoc. A tu velmi rychle poznáte na kvalitě
                            našich služeb.
                            Předem děkujeme
                        </p>
                    </div><!-- /.content -->
                </section><!-- /.block -->
            </div>
        </div>
    </aside>
    <?php $this->end(); ?>

    <div id="content" class="column" role="main">
        <div class="section">
            <div class="tabs">
            </div>
            <div class="region region-content">
                <div id="block-system-main" class="block block-system block-odd">
                    <div class="content">
                        <div class="panel-flexible panels-flexible-5 clearfix">
                            <div class="panel-flexible-inside panels-flexible-5-inside">
                                <div class="panels-flexible-region panels-flexible-region-5-center panels-flexible-region-first panels-flexible-region-last">
                                    <div class="inside panels-flexible-region-inside panels-flexible-region-5-center-inside panels-flexible-region-inside-first panels-flexible-region-inside-last">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.content -->
                </div><!-- /.block -->

                <?php foreach ($partner_types as $type) { ?>
                    <section id="block-views-upcoming-tournaments-block" class="block block-views views-clearfix block-even">

                        <h2><?php echo $type['PartnerType']['title'];?></h2>

                        <?php foreach ($type['Partner'] as $item) { ?>
                            <div class="content">
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
                                                        <a href="<?php echo $item['url'];?>"><h1><?php echo $item['name'];?></h1></a>
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

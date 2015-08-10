<div class="panel-flexible panels-flexible-1 clearfix" id="contacts">
    <div class="panel-flexible-inside panels-flexible-1-inside">
        <div class="panels-flexible-row panels-flexible-row-1-main-row panels-flexible-row-first clearfix">
            <div class="inside panels-flexible-row-inside panels-flexible-row-1-main-row-inside panels-flexible-row-inside-first clearfix">
                <div class="panels-flexible-region panels-flexible-region-1-center panels-flexible-region-first panels-flexible-region-last">
                    <div class="inside panels-flexible-region-inside panels-flexible-region-1-center-inside panels-flexible-region-inside-first panels-flexible-region-inside-last">
                        <div class="panel-pane pane-node"  >

                            <h2 class="pane-title">Kontakty</h2>

                            <div class="pane-content">
                                <article id="node-81" class="node node-maps node-odd published with-comments clearfix">

                                    <header>
                                        <h2><a href="/node/81"></a></h2>
                                    </header>

                                    <div class="content">
                                        <script src="https://maps.googleapis.com/maps/api/js"></script>
                                        <script>
                                          function initialize() {
                                            var mapCanvas = document.getElementById('map-canvas');
                                            var mapOptions = {
                                              center: new google.maps.LatLng(50.131984, 14.475362),
                                              zoom: 16,
                                              mapTypeId: google.maps.MapTypeId.ROADMAP
                                            }
                                            var map = new google.maps.Map(mapCanvas, mapOptions)
                                          }
                                          google.maps.event.addDomListener(window, 'load', initialize);
                                        </script>
                                        <div id="map-canvas" style="height:300px"></div>
                                        <script>
                                            initialize();
                                        </script>
                                    </div><!-- /.content -->

                                    <footer>
                                    </footer>

                                </article><!-- /.node -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panels-flexible-row panels-flexible-row-1-1 panels-flexible-row-last clearfix ">
            <div class="inside panels-flexible-row-inside panels-flexible-row-1-1-inside panels-flexible-row-inside-last clearfix">
                <div class="panels-flexible-region panels-flexible-region-1-contacts_region panels-flexible-region-first panels-flexible-region-last contacts-region">
                    <div class="inside panels-flexible-region-inside panels-flexible-region-1-contacts_region-inside panels-flexible-region-inside-first panels-flexible-region-inside-last">
                        <div class="panel-pane pane-contact grid-12 alpha"  >

                            <h2 class="pane-title">NAPIŠTE NÁM</h2>

                            <div class="pane-content">
                                <?php echo $this->Form->create('Message', array('role'=>'form', 'class'=>'form-horizontal')); ?>
                                    <div>
                                        <div class="form-item form-type-textfield form-item-name">
                                            <label for="edit-name">Komu <span class="form-required" title="Toto pole je vyžadováno.">*</span></label>
                                            <?php echo $this->Form->input('message_recipient_id', array('label'=>false));?>
                                        </div>
                                        <div class="form-item form-type-textfield form-item-name">
                                            <label for="edit-name">Vaše jméno <span class="form-required" title="Toto pole je vyžadováno.">*</span></label>
                                            <input type="text" id="edit-name" name="data[Message][title]" value="" size="60" maxlength="255" class="form-text required" />
                                        </div>
                                        <div class="form-item form-type-textfield form-item-mail">
                                            <label for="edit-mail">Vaše e-mailová adresa <span class="form-required" title="Toto pole je vyžadováno.">*</span></label>
                                            <input type="text" id="edit-mail" name="data[Message][email]" value="" size="60" maxlength="255" class="form-text required" />
                                        </div>
                                        <div class="form-item form-type-textfield form-item-subject">
                                            <label for="edit-subject">Předmět <span class="form-required" title="Toto pole je vyžadováno.">*</span></label>
                                            <input type="text" id="edit-subject" name="data[Message][subject]" value="" size="60" maxlength="255" class="form-text required" />
                                        </div>
                                        <div class="form-item form-type-textarea form-item-message">
                                            <label for="edit-message">Zpráva <span class="form-required" title="Toto pole je vyžadováno.">*</span></label>
                                            <div class="form-textarea-wrapper resizable">
                                                <textarea id="edit-message" name="data[Message][desc]" cols="60" rows="5" class="form-textarea required"></textarea>
                                            </div>
                                        </div>
                                        <input type="hidden" name="form_build_id" value="form-e0Z7vJ5GxQVC9DhvmOf3AwYmbysWtLzGrga8yjj1XaU" />
                                        <input type="hidden" name="form_id" value="contact_site_form" />
                                        <div class="form-actions form-wrapper" id="edit-actions">
                                            <input type="submit" id="edit-submit" name="op" value="Odeslat zprávu" class="form-submit" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="panel-separator">
                        </div>
                        <div class="panel-pane pane-custom pane-1 contact-information grid-12 omega"  >

                            <h2 class="pane-title">Kontakty na Beachklub Ládví</h2>

                            <div class="pane-content">
                                <p>
                                        <strong>ONLINE REZERVACE KURTŮ:</strong><br>
                                        Zde nebo teletonicky na 608 862 740.
                                        <br><br>
                                        <strong>DLOUHODOBÉ PRONÁJMY, PROVOZNÍ ZÁLEŽITOSTI KLUBU:</strong><br>
                                        Jarda Falc: falc@centrum.cz , 724 165 620
                                        <br><br>
                                        <strong>ŠÉFTRENÉR:</strong><br>
                                        Ondra Michálek: seftrener@beachklubladvi.cz , 605 218 056
                                        <br><br>
                                        <strong>ADMINISTRATIVA, PŘÍMĚSTSKÉ TÁBORY, KEMPY:</strong><br>
                                        Lucka Trnková: info@beachklubladvi.cz , 728 189 731
                                        <br><br>
                                        <strong>OSLAVY, FIREMNÍ AKCE AJ.:</strong><br>
                                        Recepce: recepce@beachklubladvi.cz , 723 841 031
                                </p>
                            </div>
                            <h2 class="pane-title">Jak nás najdete</h2>

                            <div class="pane-content">
                                <p>
                                    Beachklub Ládví najdete v areálu SPŠE Eltodo v ulici Chabařovická 4 na Praze 8.
                                    Areál se nachází cca 7 minut od stanice metra C Ládví či autem cca 10 minut z centra.
                                    Vchod pro pěší je jak z ulice Chabařovická, tak z ulice Žernosecká.
                                    V případě, že jedete metrem tak vyražte směrem k Multikinu Ládví a pak napříč sídlištěm dle mapy.
                                    V případě, že jedete autem, tak můžete nově využít příjezd ze Žernosecké ulice.
                                    Původní příjezd z Chabařovické bude dočasně ponechán v provozu, ale v nejbližší době bude uzavřen.
                                    V areálu se dá parkovat.
                                </p>
                                <p>
                                    Beachklub Ládví z.s.<br>
                                    Chabařovická 4<br>
                                    180 00  Praha 8<br>
                                    IČO: 22735135<br>
                                    ICP: 1000559998<br>
                                    korespondenční adresa: Beachklub Ládví z.s., Horáčkova 1213, Praha 4, 14000
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

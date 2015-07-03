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
                                <form class="user-info-from-cookie contact-form" action="/kontakty" method="post" id="contact-site-form" accept-charset="UTF-8">
                                    <div>
                                        <div class="form-item form-type-textfield form-item-name">
                                            <label for="edit-name">Komu <span class="form-required" title="Toto pole je vyžadováno.">*</span></label>
                                            <?php echo $this->Form->input('message_recipient_id', array('class'=>'form-control', 'placeholder'=>__('Message Recipient Id')));?>
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

                            <h2 class="pane-title">Kontaktní informace</h2>

                            <div class="pane-content">
                                <p><strong>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</strong><br />
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    et quasi architecto beatae vitae dicta sunt explicabo. Mornunc odio gravida atcursus
                                    neus a lorem. Maecenas tristique orci ac sem. Duis ultric pharetra magna. Donec
                                    accumsan malesuada orcic sit amet eros. Lorem ipsum dolor sit amet onsectetuer
                                    adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus
                                    dolor dapibus eget.
                                </p>
                                <p>The Company Name Inc.<br />
                                    9870 St Vincent Place,<br />
                                    Glasgow, DC 45 Fr 45.
                                </p>
                                <p>Telephone:+1 800 603 6035<br />
                                    FAX:+1 800 889 9898<br />
                                    E-mail: <a href="mailto:mail@beachbar.cz">mail@beachbar.cz</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

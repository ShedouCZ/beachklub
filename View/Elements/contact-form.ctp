<?php
    $messageRecipients = $this->requestAction('message_recipients/get');
    $this->set(compact('messageRecipients'));
?>
<div class="panel-pane pane-contact grid-11 alpha"  >
    <h2 class="pane-title">NAPIŠTE NÁM</h2>

    <div class="pane-content">
        <?php echo $this->Form->create('Message', array('role'=>'form', 'class'=>'form-horizontal')); ?>
            <div>
                <div class="form-item form-type-textfield form-item-name">
                    <label for="edit-name">Komu <span class="form-required" title="Toto pole je vyžadováno.">*</span></label>
                    <?php echo $this->Form->input('message_recipient_id', array('label'=>false, 'wrap' => false));?>
                </div>
                <div class="form-item form-type-textfield form-item-name">
                    <label for="edit-name">Vaše jméno <span class="form-required" title="Toto pole je vyžadováno.">*</span></label>
                    <input type="text" id="edit-name" name="data[Message][title]" value="" size="69" maxlength="255" class="form-text required" />
                </div>
                <div class="form-item form-type-textfield form-item-mail">
                    <label for="edit-mail">Vaše e-mailová adresa <span class="form-required" title="Toto pole je vyžadováno.">*</span></label>
                    <input type="text" id="edit-mail" name="data[Message][email]" value="" size="69" maxlength="255" class="form-text required" />
                </div>
                <div class="form-item form-type-textfield form-item-subject">
                    <label for="edit-subject">Předmět <span class="form-required" title="Toto pole je vyžadováno.">*</span></label>
                    <input type="text" id="edit-subject" name="data[Message][subject]" value="" size="69" maxlength="255" class="form-text required" />
                </div>
                <div class="form-item form-type-textarea form-item-message">
                    <label for="edit-message">Zpráva <span class="form-required" title="Toto pole je vyžadováno.">*</span></label>
                    <div class="form-textarea-wrapper resizable">
                        <textarea id="edit-message" name="data[Message][desc]" cols="60" rows="15" class="form-textarea required"></textarea>
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
<div class="grid-2">&nbsp;
</div>

<?php
    $document = $this->requestAction('documents/view');

    if (AuthComponent::user()) {
        $link = $this->Html->link('upravit', '/admin/documents/edit/' . $document['Document']['id'] . '#sidebar');
        echo $this->Html->div('button admin_edit right', $link, array('style'=>'margin-top:15px'));
    }

    echo $document['Document']['perex'];
    $this->assign('perex', @$document['Document']['description']);
    $this->assign('title', $document['Document']['title']);
?>

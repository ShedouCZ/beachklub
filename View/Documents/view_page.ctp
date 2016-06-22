<?php
    if (AuthComponent::user()) {
        $link = $this->Html->link('upravit', '/admin/documents/edit/' . $document['Document']['id']);
        echo $this->Html->div('button admin_edit left', $link, array('style'=>'margin-top:17px'));
    }
?>

<?php
    $this->assign('title', $document['Document']['title']);
    $this->assign('perex', @$document['Document']['description']);

    $sidebar = $document['Document']['perex'];
    if (!empty($sidebar) && $sidebar != '<p><br></p>') {
        if ($sidebar == '<p>[[none]]</p>') {
            // empty sidebar
            $this->assign('sidebar', '');
        } else {
            $this->start('sidebar'); ?>
                <aside class="column column_right prefix-1 grid-8 omega" role="complementary">
                    <?php
                        if (AuthComponent::user()) {
                            $link = $this->Html->link('upravit', '/admin/documents/edit/' . $document['Document']['id'] . '#sidebar');
                            echo $this->Html->div('button admin_edit right', $link);
                        }
                    ?>
                    <?php echo $this->Html->replace_elements($document['Document']['perex']); ?>
                </aside><?php
            $this->end();
            //$this->assign('sidebar', $sidebar);
        }
    }
?>

<div id="content" class="column" role="main">
    <div class="section">
        <div class="region region-content">
            <div id="block-system-main" class="block block-system block-odd">
                <div class="content">
                    <article id="doc-<?php echo $document['Document']['id']?>" class="clearfix">

                        <div class="content air-mode">
                            <?php echo $this->Html->replace_elements($document['Document']['content']);?>
                        </div><!-- /.content -->

                    </article><!-- /.node -->
                </div><!-- /.content -->
            </div><!-- /.block -->
        </div>
    </div>
</div>

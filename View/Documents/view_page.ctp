<?php
    if (!empty($document['Document']['perex'])) {
        $this->start('sidebar'); ?>
            <aside class="column column_right prefix-1 grid-8 omega" role="complementary">
                    <?php echo $document['Document']['perex']; ?>
            </aside><?php
        $this->end();
        //$this->assign('sidebar', $document['Document']['perex']);
    }

    if (strpos($document['Document']['content'], '[[') !== false) {
        // replace elements
        $matches = array();
        preg_match_all('/\[\[element:(.*)\]\]/', $document['Document']['content'], $matches, PREG_SET_ORDER);
        foreach ($matches as $match) {
            $element      = $match[1];
            $placeholder  = $match[0];
            $document['Document']['content'] = str_replace($placeholder, $this->element($element), $document['Document']['content']);
        }
    }
?>

<div id="content" class="column" role="main">
    <div class="section">
        <div class="region region-content">
            <div id="block-system-main" class="block block-system block-odd">
                <div class="content">
                    <article id="doc-<?php echo $document['Document']['id']?>" class="node node-blog node-teaser node-odd published with-comments node-teaser clearfix">

                        <div class="content air-mode">
                            <?php echo $document['Document']['content'];?>
                        </div><!-- /.content -->

                        <footer>
                            <ul class="links inline">
                                <?php if ($neighbors['prev']) { ?>
                                    <li class="node-readmore first">
                                        <a href="/<?php echo $neighbors['prev']['Document']['slug']; ?>" rel="tag" title="">Předchozí</a>
                                    </li>
                                <?php } ?>
                                <?php if ($neighbors['next']) { ?>
                                    <li class="node-readmore last">
                                        <a href="/<?php echo $neighbors['next']['Document']['slug']; ?>" rel="tag" title="">Další</a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </footer>

                    </article><!-- /.node -->
                </div><!-- /.content -->
            </div><!-- /.block -->
        </div>
    </div>
</div>

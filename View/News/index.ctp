<div id="main" class="clearfix">
    
    <div id="content" class="column content" role="main">
        <?php foreach ($items as $doc): ?>
            <article id="doc-<?php echo $doc['Document']['id']?>" class="node node-page node-promoted node-teaser node-odd published with-comments promote node-teaser clearfix">
              <header>
                  <h2>
                      <?php
                          $title = $this->Html->nbsp_prepositions($doc['Document']['title']);
                          $id = $doc['Document']['id'];
                          $url = '/'.$doc['Document']['slug'];
                          echo $this->Html->link($title, $url, array('escape'=>false));
                      ?>
                  </h2>
                </header>
                <div class="content">
                    <div class="field field-name-body field-type-text-with-summary field-label-hidden">
                        <div class="field-items">
                            <div class="field-item even">
                                <p>
                                    <?php echo $doc['Document']['perex']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.content -->
                <footer>
                    <ul class="links inline">
                        <li class="node-readmore first">
                            <?php echo $this->Html->link('Číst dál', $url, array('rel'=>'tag', 'title'=>$title)); ?>
                        </li>
                    </ul>
                </footer>
            </article><!-- /.node -->
        <?php endforeach; ?>

        <?php echo $this->Element('pager', array('paging' => $this->params['paging']['Document'])) ?>
    </div>
</div>

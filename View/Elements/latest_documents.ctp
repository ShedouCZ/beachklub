<?php
  $docs = $this->requestAction(
    'documents/index/sort:ord/direction:desc/limit:5'
  );
?>
<div id="block-system-main" class="block block-system block-even">
  <div class="content">
    <article id="node-153" class="node node-page node-promoted node-teaser node-odd published with-comments promote node-teaser clearfix">
        <?php foreach ($docs as $doc): ?>
              <header>
                  <h2>
                      <?php
                          $title = $doc['Document']['title'];
                          $id = $doc['Document']['id'];
                          $url = '/'.$doc['Document']['slug'];
                          echo $this->Html->link($title, $url);
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
        <?php endforeach; ?>
    </article><!-- /.node -->
    </div>
    <!-- /.content -->
</div>

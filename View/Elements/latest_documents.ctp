<?php
  $docs = $this->requestAction(
    'documents/index'
  );
  
  $heads = array_splice($docs, 0, 2);
  if ($first) {
      $docs = $heads;
  }
?>
<div id="block-system-main" class="block block-system block-even">
  <div class="content">
        <?php foreach ($docs as $doc): ?>
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
    </div>
    <!-- /.content -->
    
<?php if (!$first) { ?>
    <div class="item-list">
        <ul class="pager">
            <li class="pager-current first">1</li>
            <li class="pager-item">
                <a title="Přejít na stranu 2" href="/blog?page=1">2</a>
            </li>
            <li class="pager-item">
                <a title="Přejít na stranu 3" href="/blog?page=2">3</a>
            </li>
            <li class="pager-item">
                <a title="Přejít na stranu 4" href="/blog?page=3">4</a>
            </li>
            <li class="pager-item">
                <a title="Přejít na stranu 5" href="/blog?page=4">5</a>
            </li>
            <li class="pager-item">
                <a title="Přejít na stranu 6" href="/blog?page=5">6</a>
            </li>
            <li class="pager-next">
                <a title="Přejít na další stranu" href="/blog?page=1">následující ›</a>
            </li>
            <li class="pager-last last">
                <a title="Přejít na poslední stranu" href="/blog?page=5">poslední »</a>
            </li>
        </ul>
    </div>
<?php } ?>    
    
</div>

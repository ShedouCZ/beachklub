<?php
  $posts = $this->requestAction(
    'posts/index/sort:created/direction:asc/limit:5'
  );
?>
<div id="block-system-main" class="block block-system block-even">
  <div class="content">
    <article id="node-153" class="node node-page node-promoted node-teaser node-odd published with-comments promote node-teaser clearfix">
        <?php foreach ($posts as $post): ?>
              <header>
                  <h2>
                      <?php
                          $title = $post['Post']['title'];
                          $id = $post['Post']['id'];
                          $url = '/posts/view'.$id;
                          echo $this->Html->link($title, $url);
                      ?>
                  </h2>
                </header>
                <div class="content">
                    <div class="field field-name-body field-type-text-with-summary field-label-hidden">
                        <div class="field-items">
                            <div class="field-item even">
                                <p>
                                    <?php echo $post['Post']['perex']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.content -->
                <footer>
                    <ul class="links inline"><li class="node-readmore first"><a href="/proseries-prague/hledam-spoluhrace" rel="tag" title="Hledám spoluhráče">Číst dál<span class="element-invisible"> Hledám spoluhráče</span></a></li>
                        <li class="comment-add"><a href="/comment/reply/153#comment-form" title="Přidat komentář k této stránce.">Přidat komentář</a></li>
                    </ul>
                </footer>
        <?php endforeach; ?>
    </article><!-- /.node -->
    </div>
    <!-- /.content -->
</div>

<?php
  $posts = $this->requestAction(
    'posts/index/sort:created/direction:asc/limit:5'
  );
?>
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
      <?php echo $post['Post']['desc']; ?>
    <footer>
        <ul class="links inline"><li class="node-readmore first"><a href="/proseries-prague/hledam-spoluhrace" rel="tag" title="Hledám spoluhráče">Číst dál<span class="element-invisible"> Hledám spoluhráče</span></a></li>
            <li class="comment-add"><a href="/comment/reply/153#comment-form" title="Přidat komentář k této stránce.">Přidat komentář</a></li>
            <li class="translation_en last"><a href="/node/242?language=en" title="Looking for a mate" class="translation-link" xml:lang="en">English</a></li>
        </ul>
    </footer>
<?php endforeach; ?>

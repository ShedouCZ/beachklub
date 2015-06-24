<?php
  $tiles = $this->requestAction(
    'tiles/index/sort:created/direction:asc/limit:9'
  );
?>
<?php foreach ($tiles as $tile): ?>
    <div class="grid-8 alpha odd">
        <div class="views-field views-field-field-service-image img-indent-bottom-2 img-shadow">
            <div class="field-content">
                <a href="/supercup">
                    <img src="<?php echo $tile['Tile']['url']; ?>" width="289" height="133" alt="">
                </a>
            </div>
        </div>
        <div class="title-2 border-bottom-1 indent-bottom-15">
            <div>
                <?php
                    $title = $tile['Tile']['title'];
                    $id = $tile['Tile']['id'];
                    $url = '/posts/view'.$id;
                    echo $this->Html->link($title, $url);
                ?>
            </div>
        </div>
    </div>
<?php endforeach; ?>

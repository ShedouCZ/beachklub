<?php
  $items = $this->requestAction(
    'tiles/index/sort:created/direction:asc/'
  );
?>
<?php foreach ($items as $i => $item):?>
    <?php
        $class = '' ;
        if ($i%3 == 0) { $class = 'alpha'; };
        if ($i%3 == 2) { $class = 'omega';};
    ?>
    <div class="grid-8 <?php echo $class; ?>">
        <div class="views-field views-field-field-service-image img-indent-bottom-2 img-shadow">
            <div class="field-content">
                <a href="/supercup">
                    <img src="<?php echo $item['Tile']['url']; ?>" width="289" height="133" alt="">
                </a>
            </div>
        </div>
        <div class="title-2 border-bottom-1 indent-bottom-15">
            <div>
                <?php
                    $title = $item['Tile']['title'];
                    $id = $item['Tile']['id'];
                    $url = '/posts/view'.$id;
                    echo $this->Html->link($title, $url);
                ?>
            </div>
        </div>
    </div>
<?php endforeach; ?>

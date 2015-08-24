<?php
  $items = $this->requestAction(
    'tiles/index/sort:ord/direction:asc/'
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
                <a href="<?php echo $item['Document']['slug'];?>">
                    <img src="<?php echo $item['Picture']['styles']['tile']; ?>" width="289" height="133" alt="">
                </a>
            </div>
        </div>
        <div class="title-2 border-bottom-1 indent-bottom-15">
            <div>
                <?php
                    $title = $item['Tile']['title'];
                    $url = '/' . $item['Document']['slug'];
                    echo $this->Html->link($title, $url);
                ?>
            </div>
        </div>
    </div>
<?php endforeach; ?>

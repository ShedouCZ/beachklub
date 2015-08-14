<?php
    $items = $this->requestAction(
    'coaches/index/sort:created/direction:asc'
    );
?>
<?php foreach ($items as $item): ?>
    <div class="views-row first odd">
        <div class="views-field views-field-field-coaches-photo img-left">
            <div class="field-content">
                <img src=<?php
                if (@$item['Picture']['styles']['medium']) {
                    echo $item['Picture']['styles']['medium'];
                }
                else {
                    echo "/img/coaches/no_image.jpg";
                }
                    ?> width="190" height="180" alt="" />
            </div>
        </div>
        <div class="views-field views-field-nothing extra">
            <span class="field-content">
                <div class="views-field-title title-indent">
                    <h2><?php echo $item['Coach']['name']; ?></h2>
                </div>
                <div class="views-field-body">
                    <h3><?php echo $item['Coach']['title']; ?></h3>
                    <?php echo $item['Coach']['desc']; ?>
                </div>
            </span>
        </div>
    </div>
<?php endforeach; ?>

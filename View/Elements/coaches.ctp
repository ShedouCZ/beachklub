<?php
    $items = $this->requestAction(
    'coaches/index/sort:ord/direction:asc'
    );
?>
<?php foreach ($items as $item): ?>
    <div class="views-row coaches">
        <?php
            if (AuthComponent::user()) {
                $link = $this->Html->link('upravit', '/admin/coaches/edit/' . $item['Coach']['id']);
                echo $this->Html->div('button admin_edit left', $link, array('style'=>'margin-top:15px'));
            }
        ?>
        <div class="views-field views-field-field-coaches-photo img-left">
            <div class="field-content">
                <img src=<?php
                if (@$item['Picture']['styles']['square']) {
                    echo $item['Picture']['styles']['square'];
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
                    <?php echo $this->Html->tag('h2', $item['Coach']['name'], array('id'=>$item['Coach']['slug'])); ?>
                </div>
                <div class="views-field-body">
                    <h3><?php echo $item['Coach']['title']; ?></h3>
                    <?php echo $item['Coach']['desc']; ?>
                </div>
            </span>
        </div>
    </div>
<?php endforeach; ?>

<?php
  $items = $this->requestAction(
    'coaches/index/sort:ord/direction:asc'
  );
?>
<section class="sidebar-menu"><h2>Trenéři</h2>
    <ul>
        <?php
            foreach ($items as $item) {
                $title = $item['Coach']['name'];
                $title = mb_strtoupper($title);
                $slug  = $item['Coach']['slug'];
                $link  = $this->Html->link($title, "#$slug");
                echo $this->Html->tag('li', $link);
            }
        ?>
    </ul>
</section>

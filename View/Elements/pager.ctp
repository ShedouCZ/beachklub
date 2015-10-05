<?php
    $page  = $paging['page'];
    $page_count = $paging['pageCount'];
    $start = 1;
    $end   = $page_count;

    $modulus = 8;
    if ($modulus && $page_count > $modulus) {
        // code from PaginatorHelper
        $half = (int)($modulus / 2);
        $end = $paging['page'] + $half;

        if ($end > $paging['pageCount']) {
            $end = $paging['pageCount'];
        }
        $start = $paging['page'] - ($modulus - ($end - $paging['page']));
        if ($start <= 1) {
            $start = 1;
            $end = $paging['page'] + ($modulus - $paging['page']) + 1;
        }
    }
?>
<ul class="pager">
    <?php if (($page == $end || $start != 1) && $paging['prevPage']) { ?>
        <li class="pager-first first">
            <?php echo $this->Html->link("« první", "/", array('title'=>"Přejít na první stránku")) ?>
        </li>
        <li class="pager-previous">
            <?php echo $this->Html->link('‹ předchozí', "/novinky/page:".($page-1), array('title'=>"Přejít na předchozí stránku")) ?>
        </li>
    <?php } ?>
    <?php for ($i=$start; $i<=$end; $i++) { ?>
        <?php if ($i == $page) { ?>
            <li class="pager-current">
                <?php echo $i; ?>
            </li>
        <?php } else { ?>
            <li class="pager-item">
                <?php echo $this->Html->link($i, "/novinky/page:$i", array('title'=>"Přejít na $i. stránku")) ?>
            </li>
        <?php } ?>
    <?php } ?>
    <?php if ($paging['nextPage']) { ?>
        <li class="pager-next">
            <?php echo $this->Html->link('následující ›', "/novinky/page:".($page+1), array('title'=>"Přejít na další stránku")) ?>
        </li>
        <li class="pager-last last">
            <?php echo $this->Html->link("poslední »", "/novinky/page:$page_count", array('title'=>"Přejít na poslední stránku")) ?>
        </li>
    <?php } ?>
</ul>

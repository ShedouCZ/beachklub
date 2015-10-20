<section class="sidebar-menu"><h2>Přehled</h2>
    <ul>
        <?php
            foreach ($titles as $slug => $title) {
                $title = mb_strtoupper($title);
                $link = $this->Html->link($title, "#$slug");
                echo $this->Html->tag('li', $link);
            }
        ?>
    </ul>
</section>

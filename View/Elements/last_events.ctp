<?php
  $items = $this->requestAction(
    'events/index/sort:created/direction:asc'
  );
?>
<div class="view-content events">
    <div class=" jcarousel-skin-default">
        <div class="jcarousel-container jcarousel-container-vertical">
            <div class="jcarousel-clip jcarousel-clip-vertical">
                <ul class="jcarousel jcarousel-view--front-carousel--block jcarousel-dom-1 jcarousel-skin-default">
                    <?php foreach ($items as $i => $item): ?>
                        <?php $odd_even =  ($i % 2) ? 'even' : 'odd'; ?>
                        <?php $j = $i + 1; ?>
                        <li class="jcarousel-item-<?php echo "$j $odd_even";?>">
                            <div class="views-field views-field-created img-left news-date">
                                  <span class="field-content">
                                      <?php
                                        $parts = explode ('-', $item['Event']['date']);
                                        //echo $parts['2'];
                                        echo $this->Time->format($item['Event']['date'], '%-d.%-m.');
                                      ?>
                                  </span>
                            </div>
                            <div class="views-field views-field-nothing extra">
                                <span class="field-content">
                                    <div class="title-2">
                                        <?php
                                            $title = $item['Event']['title'];
                                            $id    = $item['Event']['id'];
                                            $url   = '/akce/' . $item['Event']['slug'];
                                            echo $this->Html->link($title, $url);
                                        ?>
                                    </div>
                                    <div><?php echo $item['Event']['perex']; ?></div>
                                 </span>
                            </div>
                        </li>
                    <?php endforeach; ?>
                  </ul>
            </div>
            <a href="javascript:void(0)" class="jcarousel-prev jcarousel-prev-vertical"></a>
            <a href="javascript:void(0)" class="jcarousel-next jcarousel-next-vertical"></a>
        </div>
    </div>
</div>

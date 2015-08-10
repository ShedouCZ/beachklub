<?php
  $items = $this->requestAction(
    'news/index/sort:created/direction:asc/limit:5'
  );
?>
<div class="view-content">
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
                                        $parts = explode ('-', $item['News']['date']);
                                        echo $parts['2'];
                                      ?>
                                  </span>
                            </div>
                            <div class="views-field views-field-nothing extra">
                                <span class="field-content">
                                    <div class="title-2">
                                        <?php
                                            $title = $item['News']['title'];
                                            $id    = $item['News']['id'];
                                            $url   = '/items/view'.$id;
                                            echo $this->Html->link($title, $url);
                                        ?>
                                    </div>
                                    <div><?php echo $item['News']['desc']; ?></div>
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



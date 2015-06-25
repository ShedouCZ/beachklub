<?php
  $sliders = $this->requestAction(
    'sliders/index/sort:ord/direction:asc/'
  );
?>
<div class="region region-header">
    <div id="block-views-slider-block" class="block block-views slider-front block-even">
        <div class="content">
            <div class="view view-slider view-id-slider view-display-id-block view-dom-id-fd7bed6b392356d50877e393fa89485c">
                <div class="view-content">
                    <div  id="flexslider-1" class="flexslider">
                        <ul class="slides">
                            <?php foreach ($sliders as $slider): ?>
                                <li>
                                    <div class="views-field views-field-field-slide-image">
                                        <div class="field-content">
                                            <img src=<?php echo $slider['Slider']['url']; ?> width="926" height="358" alt="" />
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- /.content -->
    </div><!-- /.block -->
</div>

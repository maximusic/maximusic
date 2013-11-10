<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div id="rtl" class="content spr_lr">  
    <div id="sliding-navigation" class="sidebar">
        <?php echo $content; ?>
        <?php
        $this->widget('application.widgets.LatestNewsWidget', array(
            'limit' => 3
        ));
        ?>
    </div>
    <div class="clear"></div>
</div>
</div>
<?php $this->endContent(); ?>


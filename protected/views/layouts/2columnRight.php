<?php /* @var $this Controller */ ?>

<?php $this->beginContent('//layouts/main'); ?>
<div class="content spr">   
    <?php echo $content; ?>

    <div id="sliding-navigation" class="sidebar">
        <h3>Categories</h3>
        <ul class="slide">
            <li><a href="#" title="Advertising">Advertising</a></li>
            <li><a href="#" title="News">News</a></li>
            <li><a href="#" title="Web Design">Web Design</a></li>
        </ul>
        <h3>Popular Posts</h3>
        <ul class="recent_comm">
            <li>
                <a href="#"><img src="/images/recent_post1.jpg" width="67" height="63" alt="" class="pic_left" />
                    Curabitur nec viverra erosullam fermentum posuere. <span class="date">June 12, 2010</span></a>
            </li>
            <li>
                <a href="#"><img src="/images/recent_post2.jpg" width="67" height="63" alt="" class="pic_left" />
                    Curabitur nec viverra erosullam fermentum posuere. <span class="date">June 12, 2010</span></a>
            </li>
            <li>
                <a href="#"><img src="/images/recent_post3.jpg" width="67" height="63" alt="" class="pic_left" />
                    Curabitur nec viverra erosullam fermentum posuere. <span class="date">June 12, 2010</span></a>
            </li>
        </ul>
        <h3>Blogroll</h3>
        <ul class="slide">
            <li><a href="#" title="Development Blog">Development Blog</a></li>
            <li><a href="#" title="Documentation">Documentation</a></li>
            <li><a href="#" title="Plugins">Plugins</a></li>
            <li><a href="#" title="Suggest Ideas">Suggest Ideas</a></li>
            <li><a href="#" title="Support Forum">Support Forum</a></li>
            <li><a href="#" title="Themes">Themes</a></li>
            <li><a href="#" title="WordPress Planet">WordPress Planet</a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
</div>

<?php $this->endContent(); ?>


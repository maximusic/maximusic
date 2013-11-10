<!-- Begin Header -->
<div id="simple_header">
    <div class="gradient">
        <div class="header">
            <h1>Our Blog</h1>
        </div>
    </div>
</div>
<!-- End Header -->
</div>
<!-- Begin Breadcrumbs -->
<div id="breadcrumbs">
    <ul>
        <li class="first"><a href="./index.html" title="Home">Home</a></li>
        <li>blog</li>
    </ul>
    <div class="clear"></div>
</div>
<!-- End Breadcrumbs -->
<!-- Begin Content -->
<div class="content spr">
    <div class="cont">
        <?php foreach($article as $articles): ?>
        
        <h2><a href="<?php echo Yii::app()->createAbsoluteUrl('blog/readArticle/',array('articleid' =>$articles->id )) ?>"><?php echo $articles->title; ?></a></h2>
        <div class="posted">Posted by <span class="author"><?php echo $articles->author->firstName; ?></span> in <a href="#"><?php echo $articles->category->title; ?></a> on <?php echo $articles->createdTime; ?>  |  <?php echo ArticleModel::getCountComments($articles->id); ?> &raquo;</div>
        <p><?php echo CHtml::image(ArticleModel::getImagePath($articles->id),$alt="",array('id'=>'blogImage','class' =>'pic')); ?></p>
        <p><?php echo $articles->shirtDesc; ?><a href="<?php echo Yii::app()->createAbsoluteUrl('blog/readArticle/',array('articleid' =>$articles->id )) ?>">Continue Reading &raquo;</a></p>
        <div class="line"></div>
        <?php endforeach; ?>
        <div id="paging">
            <ul>
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">Last &raquo;</a></li>
            </ul>
        </div>
    </div>
    <div id="sliding-navigation" class="sidebar">
        <div id="search_area">
            <input type="text" class="search" id="search" /><input type="submit" value="Search" title="Search" class="search_btn" />
        </div>
        <div class="widget">
            <ul class="banners_125x125">
                <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/banner1_125x125.jpg" width="125" height="125" alt="" /></a></li>
                <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/banner2_125x125.jpg" width="125" height="125" alt="" /></a></li>
                <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/banner3_125x125.jpg" width="125" height="125" alt="" /></a></li>
                <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/banner4_125x125.jpg" width="125" height="125" alt="" /></a></li>
            </ul><div class="clear"></div>
        </div>
        <?php $this->widget('application.widgets.CategoriesWidget');?>
        <h3>Archives</h3>
        <ul class="slide">
            <li><a href="#" title="June 2010">June 2010</a></li>
            <li><a href="#" title="May 2010">May 2010</a></li>
            <li><a href="#" title="April 2010">April 2010</a></li>
        </ul>
        <h3>Recent Posts</h3>
        <ul class="recent_comm">
            <li>
                <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/recent_post1.jpg" width="67" height="63" alt="" class="pic_left" />
                    Curabitur nec viverra erosullam fermentum posuere. <span class="date">June 12, 2010</span></a>
            </li>
            <li>
                <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/recent_post2.jpg" width="67" height="63" alt="" class="pic_left" />
                    Curabitur nec viverra erosullam fermentum posuere. <span class="date">June 12, 2010</span></a>
            </li>
            <li>
                <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/recent_post3.jpg" width="67" height="63" alt="" class="pic_left" />
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

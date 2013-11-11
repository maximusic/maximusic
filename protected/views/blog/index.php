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
             <?php $this->widget('application.widgets.CategoriesWidget');?>
    </div>
    <div class="clear"></div>
</div>

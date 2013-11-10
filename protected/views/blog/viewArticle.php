<?php Yii::app()->clientScript->registerScript(
   'myHideEffect',
   '$(".info").animate({opacity: 1.0}, 3000).fadeOut("slow");',
   CClientScript::POS_READY
); ?>
<!-- Begin Header -->
<div id="simple_header">
    <div class="gradient">
        <div class="header">
            <h1><?php echo $article->title; ?></h1>
        </div>
    </div>
</div>
<!-- End Header -->
</div>
<!-- Begin Breadcrumbs -->
<div id="breadcrumbs">
    <ul>
        <li class="first"><a href="./index.html" title="Home">Home</a></li>
        <li><a href="<?php echo Yii::app()->createUrl('/blog') ?>" title="Blog">Blog</a></li>
        <li><?php echo $article->title; ?></li>
    </ul>
    <div class="clear"></div>
</div>
<!-- End Breadcrumbs -->
<!-- Begin Content -->
<div class="content spr">
    <div class="cont">
        <h2><a href="#"><?php echo $article->title; ?></a></h2>
        <div class="posted">Posted by <span class="author">Admin</span> in <a href="#">Web Design</a> on May 30, 2010  |  <?php echo ArticleModel::getCountComments($article->id); ?> &raquo; <span class="post_like"><?php if(!Yii::app()->user->isGuest): ?><?php echo CHtml::link('Like',Yii::app()->createAbsoluteUrl('blog/like', array('articleId'=>$article->id,'userId' => Yii::app()->user->getId())),$alt="",array('id'=>'like')) ?>  <i id="like_icon"></i><i class="like"><?php echo LikesModel::getLikes($article->id); ?></i></span><?php endif; ?></div>
        <p><?php echo CHtml::image(ArticleModel::getImagePath($article->id),$alt="",array('id'=>'blogImage','class' =>'pic')); ?></p>
        <p><?php echo $article->content; ?></p>
        <!-- ================== Start Comments Block ========================= -->
        <div class="line"></div>
        <h2><?php echo ArticleModel::getCountComments($article->id); ?></h2>
        <ul id="commentlist">
            <?php foreach($comment as $comments): ?>
            <?php if ($comments->status == 'cheked'):?>
             <li class="comment odd">
                <div class="avatar"><?php echo CHtml::image(UserModel::getImagePath($comments->userIdAddComment),$alt="",array('class' =>'avatar')); ?><a href="#" class="reply_comment">Reply</a></div>
                <div class="posted_content">
                    <div class="author"><a href="#"><?php echo $comments->userIdAdd->firstName ?></a></div>
                    <div class="when_posted"><?php echo $comments->creationDate ?></div>
                    <div class="comment_body"><?php echo $comments->content; ?></div>
                </div>
                <div class="clear"></div>
            </li>
            <?php endif; ?>
            <?php endforeach; ?>
        </ul>
        <div id="sliding-navigation" class="sidebar"></div>
        <!-- ================== End Comments Block ========================= -->
        <!-- ================== Start Comment Form Block ========================= -->
        <?php if(Yii::app()->user->isGuest): ?>
        <h3><?php echo CHtml::link('To add a comment, please login.',Yii::app()->createUrl('site/login')) ?></h3>
        <?php else: ?>    
        <h3>Leave a Reply</h3>
         <?php if(Yii::app()->user->hasFlash('addComment')): ?>
            <p class="info"> <?php echo Yii::app()->user->getFlash('addComment');  ?></p> 
                <?php endif; ?>     
        
        <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'commentform',
	'enableAjaxValidation'=>true,
        'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
        <p>
		<?php echo $form->labelEx($model,'Your Name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</p>
        
        <p>
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</p>
        
              
        <p>
		<?php echo $form->labelEx($model,'Your Message:'); ?>
		<?php echo $form->textArea($model,'content',array('cols'=>15,'rows'=>7)); ?>
		<?php echo $form->error($model,'content'); ?>
	</p>
        
            <p><?php echo CHtml::submitButton('Submit'); ?></p>
        
        <?php $this->endWidget(); ?>
        <?php endif; ?>    
    </div>
    <div id="sliding-navigation" class="sidebar">
        <?php $this->widget('application.widgets.CategoriesWidget');?>
        <?php
        $this->widget('application.widgets.LatestNewsWidget', array(
            'limit' => 3
        ));
        ?>
    </div>

    <div class="clear"></div>
</div>

</div>

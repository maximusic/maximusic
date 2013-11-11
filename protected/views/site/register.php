<?php Yii::app()->clientScript->registerScript(
   'myHideEffect',
   '$(".info").animate({opacity: 1.0}, 3000).fadeOut("slow");',
   CClientScript::POS_READY
); ?>
<div id="simple_header">
			<div class="gradient">
				<div class="header">
					<h1>Registration    </h1>
				</div>
			</div>
</div>
<div id="breadcrumbs">
    <ul>
        <li class="first"><a href="./index.html" title="Home">Home</a></li>
        <li>Registration</li>
    </ul>
    <div class="clear"></div>
</div>
<div class="content spr">
    <div class="cont">
    <?php if(Yii::app()->user->hasFlash('register')): ?>
<div class="info">
	<?php echo Yii::app()->user->getFlash('register'); ?>
</div>
<?php endif; ?>     
        <div class="contact_form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'commentform',
        'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
        'htmlOptions' => array(
            'enctype' => 'multipart/form-data',
            'autocomplete' => 'off',
    )
)); ?>
            
            <p>
		<?php echo $form->labelEx($model,'firstName'); ?>
		<?php echo $form->textField($model,'firstName'); ?>
                <?php echo $form->error($model,'firstName'); ?>
            </p>
            
            <p>
		<?php echo $form->labelEx($model,'lastName'); ?>
		<?php echo $form->textField($model,'lastName'); ?>
                <?php echo $form->error($model,'lastName'); ?>
            </p>
            
                <div class="pi-row avatar-row">
                <?php echo $form->hiddenField($model, 'avatar'); ?>
                <img id="afterUploadPreview" src="<?php echo $model->getFileSrc('avatar') ?>" width="222">
            </div>
                <?php
                $this->widget('ext.cocoCod.CocoCodWidget'
                    , array(
                        'id' => 'cocowidget1',
                        'onCompleted' => 'function(id,filename,jsoninfo){ $("#UserModel_avatar").val(filename); $("#afterUploadPreview").attr("src",jsoninfo.uploadUrl)}',
                        'onCancelled' => 'function(id,filename){ alert("cancelled"); }',
                        'onMessage' => 'function(m){ alert(m); }',
                        'allowedExtensions' => array('jpeg', 'jpg', 'gif', 'png'), // server-side mime-type validated
                        'sizeLimit' => 2000000, // limit in server-side and in client-side
                        'uploadDir' => Yii::getPathOfAlias('webroot') . '/uploads/temp/', // coco will @mkdir it
                        'uploadUrl' => Yii::app()->getBaseUrl(true) . '/uploads/temp/', // coco will @mkdir it
// this arguments are used to send a notification
// on a specific class when a new file is uploaded,
                        'receptorClassName' => 'application.models.UserModel',
                        'methodName' => 'onFileUploaded',
                        'userdata' => array(),
                        // controls how many files must be uploaded
                        'maxUploads' => -1, // defaults to -1 (unlimited)
                        'maxUploadsReachMessage' => 'No more files allowed', // if empty, no message is shown
// controls how many files the can select (not upload, for uploads see also: maxUploads)
                        'multipleFileSelection' => true, // true or false, defaults: true
                        'buttonText' => 'Upload photo',
                        'dropFilesText' => 'Upload or Drop here',
                        'htmlOptions' => array('style' => 'width: 300px;'),
                        'defaultControllerName' => '/site',
                        //'defaultActionName' => 'coco',
                    ));
                ?>
             <p>
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
                 <?php echo $form->error($model,'email'); ?>
            </p>
            
             <p>
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
                 <?php echo $form->error($model,'password'); ?>
            </p>
        
        
                <div class="row_form">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>
    <?php $this->endWidget(); ?>
 </div>
    </div>
     <div id="sliding-navigation" class="sidebar">
        <?php $this->widget('application.widgets.SidebarInfoWidget',array(
            'pageContent' => 'contact'
        )); ?>
    </div>
    <div class="clear"></div>
</div>
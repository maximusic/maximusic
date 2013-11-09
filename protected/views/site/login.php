<div id="simple_header">
			<div class="gradient">
				<div class="header">
					<h1>Login</h1>
				</div>
			</div>
</div>
<div id="breadcrumbs">
    <ul>
        <li class="first"><a href="./index.html" title="Home">Home</a></li>
        <li>Login</li>
    </ul>
    <div class="clear"></div>
</div>
<!-- End Breadcrumbs -->
<!-- Begin Content -->

<div class="content spr">
    <div class="cont">
        <div class="contact_form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'commentform',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p>
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</p>

	<p>
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</p>

      	<div class="row_form">
		<?php echo CHtml::submitButton('Login'); ?>
	</div>

<?php $this->endWidget(); ?>
</div>
    </div>
    <div id="sliding-navigation" class="sidebar">
        <h3>Contact Information</h3>
        <div id="address">
            <address><strong>Address Info:</strong> <br />
                123 Main Street<br />
                Los Angeles, CA, 94101</address>
            <strong>Phone:</strong>   +1 800 123 4567<br />
            <strong>FAX:</strong>        +1 800 891 2345<br />
            <strong>Email:</strong> testmail@sitename.com
        </div>
    </div>
    <div class="clear"></div>
</div>



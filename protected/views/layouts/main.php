<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style-skyblue.css" type="text/css" title="skyblue" media="screen" />
        <style type="text/css">
            @import url(<?php echo Yii::app()->request->baseUrl; ?>/css/style.css);			
            @import url(<?php echo Yii::app()->request->baseUrl; ?>/css/tipsy.css);			
            @import url(<?php echo Yii::app()->request->baseUrl; ?>/css/ddsmoothmenu.css);		
        </style>
        <!-- Initialise jQuery Library -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/cufon/cufon-yui.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/cufon/mgopen_modata_400-mgopen_modata_700.font.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/cufon/cufon-load.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.tipsy.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#attr a').tipsy(
                        {
                            gravity: 's', // nw | n | ne | w | e | sw | s | se
                            fade: true
                        });
            });
        </script>
        <title>Maximus | Home page</title>
        <meta charset="UTF-8"></head>
    <body>
        <div id="wide" class="container">
            <div id="top">
                <div class="wrap">
                    <a href="<?php Yii::app()->createUrl("/"); ?>" class="logo" title="Maximus"></a>
                    <div id="menu">
                     <?php $this->widget('zii.widgets.CMenu',array(
                                'htmlOptions'=> array('class' => 'ddsmoothmenu'),
                                'items'=>array(
                                array('label'=>'Home',    'url'=>array('/site/index')),
                                array('label'=>'About',   'url'=>array('/site/page')),
                                array('label'=>'Blog',    'url'=>array('/site/contact')),
                                array('label'=>'Gallery', 'url'=>array('/site/login')),
                                array('label'=>'Contact', 'url'=>array('/site/logout'))
                                ),
                     )); ?>
                    </div>
                    <div class="clear"></div>
                </div>
                <!-- Begin Header -->
                <div id="simple_header">
                    <div class="gradient">
                        <div class="header">
                            <h1>Welcome to Maximus xHTML Template</h1>
                            <p>Donec accumsan malesuada orcnec sitmet eros lorem ipsum dolor amet incon ect etuer adipiscing. Elit maurise pharetra magna donec accumsan. Malesuada orcdon umet lorem ipsum dolorconsec tetuer male suada. Udipiscing elit mauris sifermentum tellus dolor, dapibus eget, elementum.</p>
                        </div>
                    </div>
                </div>
                <!-- End Header -->
            </div>
            
                <?php echo $content; ?>
            
            <div id="footer_sidebar">
                <div class="footer_sidebar_cont">
                    <h2 class="icon3">Why Choosing Us?</h2>
                    <p>Malesuada orcidonec sitmet eros lorem ipsum dolor amet iect etuer adipiscing elit maurise pharetra magna donec acumsanmalesuada orcdonec umet lorem ipsum dolorconsec tetuer malesuada udipiscing elit mauris sifermentum tellus dolor, dapibus eget, elementum. 
                        Unean auctor wisi aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Consectetuer adipiscing elit. Maurisfetun Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros.</p>
                </div>
            </div>
            <!-- End Footer Sidebar  -->

            <div id="footer_lower">
                <div id="footer_info">
                    <div id="copyright">
                        Copyright &copy; 2010  &bull;  MixerTheme  &bull;  All rights reserved
                        <span class="valid">Valid xHTML | Valid CSS</span>
                    </div>
                    <div id="attr">
                         <?php $this->widget('zii.widgets.CMenu',array(
                                'linkLabelWrapper' => 'span',
                                'linkLabelWrapperHtmlOptions' => array('class'=>'hover'),
                                'items'=>array(
                                array('url'=>array('#'),'linkOptions'=>array('class'=>'ico_rss','title' => 'RSS')),    
                                array('url'=>array('#'),'linkOptions'=>array('class'=>'ico_delicious','title' => 'Delicious')),     
                                array('url'=>array('#'),'linkOptions'=>array('class'=>'ico_twitter','title' => 'Twitter')),     
                                array('url'=>array('#'),'linkOptions'=>array('class'=>'ico_fliсkr','title' => 'Flickr')),         
                                array('url'=>array('#'),'linkOptions'=>array('class'=>'ico_facebook','title' => 'Facebook')),         
                                ),
                        )); ?>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <!-- End Footer  -->
        </div>
    </body>
</html>

<!-- footer -->



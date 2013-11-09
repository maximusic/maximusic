<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />

        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style-skyblue.css" type="text/css" title="skyblue" media="screen" />

        <style type="text/css">
            @import url(<?php echo Yii::app()->request->baseUrl; ?>/css/style.css);			/*link to the CSS MAIN file */
            @import url(<?php echo Yii::app()->request->baseUrl; ?>/css/tipsy.css);			/*link to the CSS file for tips */
            @import url(<?php echo Yii::app()->request->baseUrl; ?>/css/ddsmoothmenu.css);		/*link to the CSS file for dropdown menu */
        </style>

        <!-- Initialise jQuery Library -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/cufon/cufon-yui.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/cufon/mgopen_modata_400-mgopen_modata_700.font.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/cufon/cufon-load.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.cookie.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                // find the div.fade elements and hook the hover event
                $('#attr a').hover(function() {
                    // on hovering over find the element we want to fade *up*
                    var fade = $('> .hover', this);

                    // if the element is currently being animated (to fadeOut)...
                    if (fade.is(':animated')) {
                        // ...stop the current animation, and fade it to 1 from current position
                        fade.stop().fadeTo(300, 1);
                    } else {
                        fade.fadeIn(300);
                    }
                }, function() {
                    var fade = $('> .hover', this);
                    if (fade.is(':animated')) {
                        fade.stop().fadeTo(300, 0);
                    } else {
                        fade.fadeOut(300);
                    }
                });

                // get rid of the text
                $('#attr a > .hover').empty();
            })
        </script>
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
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ddsmoothmenu.js"></script> 
        <script type="text/javascript">
            ddsmoothmenu.init({
                mainmenuid: "menu", //menu DIV id
                orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
                classname: 'ddsmoothmenu', //class added to menu's outer DIV
                //customtheme: ["#1c5a80", "#18374a"],
                contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
            })
        </script>

        <title>Maximus | Home page</title>
        <meta charset="UTF-8"></head>
    <body>
        <div id="wide" class="container">
            <div id="top">
                <div class="wrap">
                    <a href="./index.html" class="logo" title="Maximus"></a>
                    <div id="menu">
                        <ul class="ddsmoothmenu">
                            <li><a href="./index.html" class="menu-item current" title="home">home</a>
                                <ul class="children">
                                    <li><a href="./index.html">Home Page 1</a></li>
                                    <li><a href="./index-2.html">Home Page 2</a></li>
                                    <li><a href="./index-3.html">Home Page 3</a></li>
                                    <li><a href="./index-4.html">Home Page 4</a></li>
                                    <li><a href="./index-5.html">Home Page 5</a></li>
                                    <li><a href="./index-6.html">Home Page 6</a></li>
                                    <li><a href="./index-7.html">Home Page 7</a></li>
                                    <li><a href="./index-8.html">Home Page 8</a></li>
                                </ul>
                            </li>
                            <li><a href="./about.html" class="menu-item" title="pages">pages</a>
                                <ul class="children">
                                    <li><a href="./about.html">About</a></li>
                                    <li><a href="./services.html">Services</a></li>
                                    <li><a href="./sidebar_left.html">Left Sidebar</a></li>
                                    <li><a href="./bottom_sidebar.html">Bottom Sidebar</a></li>
                                    <li><a href="./full_width.html">Full Width</a></li>
                                    <li><a href="./layouts.html">Layouts</a></li>
                                    <li><a href="./error_404_page.html">Error 404</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html" class="menu-item" title="blog">blog</a>
                                <ul class="children">
                                    <li><a href="./blog.html">Blog Page</a></li>
                                    <li><a href="./simple_page.html">Simple Page</a></li>
                                </ul>
                            </li>
                            <li><a href="./gallery.html" class="menu-item" title="gallery">gallery</a>
                                <ul class="children">
                                    <li><a href="./gallery.html">Gallery</a></li>
                                    <li><a href="./gallery-video.html">Video Gallery</a></li>
                                </ul>
                            </li>
                            <li><a href="./contacts.php.html" class="menu-item" title="contact">contact</a></li>
                        </ul>
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
                        <ul>
                            <li><b>Stay Connected</b></li>
                            <li><a href="#" class="ico_rss" title="RSS Feed"><span class="hover"></span></a></li>
                            <li><a href="#" class="ico_delicious" title="Delicious"><span class="hover"></span></a></li>
                            <li><a href="#" class="ico_fliсkr" title="Flickr"><span class="hover"></span></a></li>
                            <li><a href="#" class="ico_twitter" title="Twitter"><span class="hover"></span></a></li>
                            <li><a href="#" class="ico_facebook" title="Facebook"><span class="hover"></span></a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <!-- End Footer  -->
        </div>
    </body>
</html>

<!-- footer -->



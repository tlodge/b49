<?php
// $Id: page.tpl.php,v 1.18.2.1 2009/04/30 00:13:31 goba Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
  <?php print $head ?>
    <title><?php print $head_title ?></title>
    <?php print $styles ?>
    <?php print $scripts ?>
    <!--[if lt IE 7]>
      <?php print phptemplate_get_ie_styles(); ?>
    <![endif]-->
   
</head>

<body<?php print phptemplate_body_class($left, $right); ?>>

<div id="main">

    <!-- Header -->
    <div id="header">
		
        <h1 id="logo"><a href="./" title="[Go to homepage]"><span></span>FutureMag</a></h1>
        <hr class="noscreen" />          

    </div> <!-- /header -->
    
    <!-- Tray -->
    <div id="tray">
        <ul class="box">
        	 <?php if (isset($primary_links)) : ?>
        	 		
          			<?php print theme('links', $primary_links, array('class' => 'links primary-links')) ?>
        	<?php endif; ?>
        </ul>
    	<hr class="noscreen" />
    </div> <!-- /tray -->

    <!-- Columns -->
   <div id="cols" class="box">

        <!-- Content -->
        <div id="content">

            <div id="content-left">
				
				<?php if ($topstory): ?>
                <!-- Topstory -->
                <div id="topstory-top"></div>
                <div id="topstory" class="box">
                	<?php print $topstory ?>
                    <div id="topstory-img"><img src="/sites/all/themes/block49/tmp/180x135.gif" width="180" height="135" alt="" /></div>
                    
                    <div id="topstory-desc">
						
                        <h2><a href="#">Lorem ipsum dolor sit amet</a></h2>
                        <p class="info">Published: <strong>16.7.2008</strong> by: <strong><a href="#">John Doe</a></strong></p>
                        <p class="nomb">Lorem ipsum dolor sit amet, consectetuer ad. Duis eros. Nunc imperdiet, lacus quias posule accumsan, elit nunc eleifend augue id uipera enim augue id eros. Etiam justo.</p>

                    </div> <!-- /topstory-desc -->
                
                </div> <!-- /topstory -->
                <?php endif; ?>
                
                <?php if ($topstory_list): ?>
                <div id="topstory-list" class="box">

                    <p class="nom">
                    	<?php print $topstory_list ?>
                        <a href="#"><img src="/sites/all/themes/block49/tmp/105x75.gif" width="105" height="75" alt="" /></a><a href="#"><img src="/sites/all/themes/block49/tmp/105x75.gif" width="105" height="75" alt="" /></a><a href="#"><img src="/sites/all/themes/block49/tmp/105x75.gif" width="105" height="75" alt="" /></a><a href="#" class="last"><img src="/sites/all/themes/block49/tmp/105x75.gif" width="105" height="75" alt="" /></a>
                    </p>

                </div> <!-- /topstory-list -->
                <div id="topstory-bottom"></div>
 				<?php endif; ?>
                <hr class="noscreen" />

                <div id="content-left-in">
               		<?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul>'; endif; ?>
          			<?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
					<?php print $content?>
                </div> <!-- /content-left-in -->

            </div> <!-- /content-left -->

            <hr class="noscreen" />

			<?php  if ($right): ?>
            <div id="content-right">
				
                <!-- Ads 125x125 --> 
                <!-- News -->
                
       			<?php print $right?>
               
                

            </div> <!-- /content-right -->
			<?php endif;?>
        <hr class="noscreen" />
        </div> <!-- /content -->

		<?php if ($left):?>
        	<div id="aside">
            <div id="aside-top"></div>
            	<?php print $left?>     
        	<hr class="noscreen" />          
        	</div> <!-- /aside -->
        <div id="aside-bottom"></div>
    	<?php endif;?>
    </div>  

	<?php if ($footer):?>
    <!-- Footer -->
    <div id="footer">
		<?php print $footer?>
        <!-- Do you want remove this backlinks? Look at www.nuviotemplates.com/payment.php -->
        <p class="f-right"><a href="http://www.nuviotemplates.com/">Free web templates</a> by <a href="http://www.nuvio.cz/">Nuvio</a> &ndash; Our tip: <a href="http://last-minute.invia.sk" title="Last Minute">Last Minute</a> <a href="http://wycieczki.invia.pl" title="Wczasy">Wczasy</a></p>
        <!-- Do you want remove this backlinks? Look at www.nuviotemplates.com/payment.php -->

        <p>Copyright &copy;&nbsp;2008 <strong><a href="#">Your Name</a></strong>, All Rights Reserved &reg;</p>

    </div> <!-- /footer -->
	<?php endif;?>
</div> <!-- /main -->

</body>
</html>


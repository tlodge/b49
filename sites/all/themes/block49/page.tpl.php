<?php
// $Id: page.tpl.php,v 1.28.2.1 2009/04/30 00:13:31 goba Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
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
		<?php 
		  if ($site_name) {
            $site_fields[] = check_plain($site_name);
          }
          $site_title = implode(' ', $site_fields);
        ?> 
        <div id="headerleft"><h1 id="logo"><a href="./" title="[Go to homepage]"><span></span><?php print $site_title?></a></h1></div>
		<?php if($headerright):?>
		
		<div id="headerright">
		<div id="headerright-top"></div> 
		<?php print $headerright?>
		<div id="headerright-bottom"></div>
		</div> 
		<?php endif;?>
		
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
					<div id="topstory-top"></div>
                		<?php print $topstory ?>
                	<?php endif; ?>
                
                <?php if ($topstory_list): ?>
                <div id="topstory-list" class="box">

                    <p class="nom">
                    	<?php print $topstory_list ?>
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
        <p>Copyright &copy;&nbsp;2010 <strong><a href="#">Block49</a></strong>, All Rights Reserved &reg;</p>

    </div> <!-- /footer -->
	<?php endif;?>
</div> <!-- /main -->
<?php print $closure ?>
</body>
</html>


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

<body> 

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
            <!--  <li id="tray-active"><a href="#">Homepage</a></li> 
            <li><a href="#">Category</a></li>
            <li><a href="#">Category</a></li>
            <li><a href="#">Category</a></li>
            <li><a href="#">Category</a></li>
            <li><a href="#">Category</a></li>
            <li><a href="#">Category</a></li>
            <li><a href="#">Category</a></li>
            <li><a href="#">Category</a></li>-->
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
					<?php print $content?>
                    <!-- Recent Articles -->
                    <h3 class="title">Recent articles</h3>

                    <!-- Article -->
                    <div class="article box">
                        <div class="article-img">
                            <img src="/sites/all/themes/block49/tmp/180x135.gif" width="180" height="135" alt="" />
                        </div> <!-- /article-img -->
                        <div class="article-desc">
                            <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                            <p class="info">Published: <strong>16.7.2008</strong> by: <strong><a href="#">John Doe</a></strong></p>
                            <p class="nomb">Lorem ipsum dolor sitae amet, consectetuer ad. Duisa eros. Nunc imperdiet, lacus quias posule accumsan, elita nunc eleifend augue id uipera enim augue id eros. Etiam justo.</p>
                        </div>
                    </div> <!-- /article -->

                    <!-- Article -->
                    <div class="article box">
                        <div class="article-img">
                            <img src="/sites/all/themes/block49/tmp/180x135.gif" width="180" height="135" alt="" />
                        </div> <!-- /article-img -->
                        <div class="article-desc">
                            <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                            <p class="info">Published: <strong>16.7.2008</strong> by: <strong><a href="#">John Doe</a></strong></p>
                            <p class="nomb">Lorem ipsum dolor sitae amet, consectetuer ad. Duisa eros. Nunc imperdiet, lacus quias posule accumsan, elita nunc eleifend augue id uipera enim augue id eros. Etiam justo.</p>
                        </div>
                    </div> <!-- /article -->

                    <!-- Article -->
                    <div class="article box">
                        <div class="article-img">
                            <img src="/sites/all/themes/block49/tmp/180x135.gif" width="180" height="135" alt="" />
                        </div> <!-- /article-img -->
                        <div class="article-desc">
                            <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                            <p class="info">Published: <strong>16.7.2008</strong> by: <strong><a href="#">John Doe</a></strong></p>
                            <p class="nomb">Lorem ipsum dolor sitae amet, consectetuer ad. Duisa eros. Nunc imperdiet, lacus quias posule accumsan, elita nunc eleifend augue id uipera enim augue id eros. Etiam justo.</p>
                        </div>
                    </div> <!-- /article -->

                    <!-- Article -->
                    <div class="article box">
                        <div class="article-img">
                            <img src="/sites/all/themes/block49/tmp/180x135.gif" width="180" height="135" alt="" />
                        </div> <!-- /article-img -->
                        <div class="article-desc">
                            <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                            <p class="info">Published: <strong>16.7.2008</strong> by: <strong><a href="#">John Doe</a></strong></p>
                            <p class="nomb">Lorem ipsum dolor sitae amet, consectetuer ad. Duisa eros. Nunc imperdiet, lacus quias posule accumsan, elita nunc eleifend augue id uipera enim augue id eros. Etiam justo.</p>
                        </div>
                    </div> <!-- /article -->

                    <p class="t-right"><a href="#" class="more">Older articles</a></p>

                </div> <!-- /content-left-in -->

            </div> <!-- /content-left -->

            <hr class="noscreen" />

            <div id="content-right">
				
                <!-- Ads 125x125 -->
                <?php if($ads):?>
                <div class="box">
                	<?php print $ads?>
                    <span class="f-right"><a href="#"><img src="/sites/all/themes/block49/tmp/125x125.gif" width="125" height="125" alt="" /></a></span>
                    <span class="f-left"><a href="#"><img src="/sites/all/themes/block49/tmp/125x125.gif" width="125" height="125" alt="" /></a></span>
                </div>
                <?php endif; ?>
                <!-- News -->
                <?php  if ($right): ?>
       			<?php print $right?>
                <div class="box-01-top"></div>
                <div class="box-01-top-b box">
                    <span class="f-right">Updated: 15.7.2008 @ 15:34</span>
                    <span class="f-left"><strong>News</strong></span>
                </div> <!-- /box-01-top-b -->
                <div class="box-01">
                
                    <dl class="news box">
                        <dt>SEP<br /><span>23</span></dt>
                        <dd><span>@ 15:34</span><br />Lorem ipsum dolor sit, consectetuer ad. Duisa eros. Nunc imperdiet, lacus quas posule accumsan, elita nunc eleifendel augue id uipera enim augue id eros.</dd>
                    </dl>

                    <div class="bg">
                        <dl class="news box">
                            <dt>SEP<br /><span>23</span></dt>
                            <dd><span>@ 15:34</span><br />Lorem ipsum dolor sit, consectetuer ad. Duisa eros. Nunc imperdiet, lacus quas posule accumsan, elita nunc eleifendel augue id uipera enim augue id eros.</dd>
                        </dl>
                    </div> <!-- /bg -->

                    <dl class="news box">
                        <dt>SEP<br /><span>23</span></dt>
                        <dd><span>@ 15:34</span><br />Lorem ipsum dolor sit, consectetuer ad. Duisa eros. Nunc imperdiet, lacus quas posule accumsan, elita nunc eleifendel augue id uipera enim augue id eros.</dd>
                    </dl>

                    <div class="bg">
                        <dl class="news box">
                            <dt>SEP<br /><span>23</span></dt>
                            <dd><span>@ 15:34</span><br />Lorem ipsum dolor sit, consectetuer ad. Duisa eros. Nunc imperdiet, lacus quas posule accumsan, elita nunc eleifendel augue id uipera enim augue id eros.</dd>
                        </dl>
                    </div> <!-- /bg -->

                    <dl class="news box">
                        <dt>SEP<br /><span>23</span></dt>
                        <dd><span>@ 15:34</span><br />Lorem ipsum dolor sit, consectetuer ad. Duisa eros. Nunc imperdiet, lacus quas posule accumsan, elita nunc eleifendel augue id uipera enim augue id eros.</dd>
                    </dl>
                    
                </div> <!-- /box-01 -->
                <div class="box-01-bottom"></div>

                <!-- Most readed articles -->
                <div class="box-02-top"></div>
                <div class="box-02-top-b box">
                    <span class="f-left"><strong>Most readed articles</strong></span>
                </div> <!-- /box-02-top-b -->
                <div class="box-02 box">

                    <ul class="mostreaded">
                        <li><span class="f-right">1925&times</span><a href="#">Lomem ipsum dolor sit amet</a></li>
                        <li><span class="f-right">1925&times</span><a href="#">Lomem ipsum dolor sit amet</a></li>
                        <li><span class="f-right">1925&times</span><a href="#">Lomem ipsum dolor sit amet</a></li>
                        <li><span class="f-right">1925&times</span><a href="#">Lomem ipsum dolor sit amet</a></li>
                        <li><span class="f-right">1925&times</span><a href="#">Lomem ipsum dolor sit amet</a></li>
                    </ul>

                </div> <!-- /box-02 -->
                <div class="box-02-bottom"></div>

            </div> <!-- /content-right -->
			<?php endif;?>
        <hr class="noscreen" />
        </div> <!-- /content -->

		<?php if ($left):?>
        <!-- Aside -->
        <div id="aside">

            <div id="aside-top"></div>
            
            <!-- Categories -->
            <div class="padding">
                <h4 class="nom">Categories:</h4>
            </div> <!-- /padding -->
            <?php print $left?>
            <ul class="nav">
                <li id="nav-active"><a href="#">Active category</a> <!-- Active -->
                    <ul>
                        <li><a href="#">Subcategory</a></li>
                        <li><a href="#">Subcategory</a></li>
                        <li><a href="#">Subcategory</a></li>
                        <li><a href="#">Subcategory</a></li>
                        <li><a href="#">Subcategory</a></li>
                    </ul>
                </li>
                <li><a href="#">Some category</a></li>
                <li><a href="#">Some category</a></li>
                <li><a href="#">Some category</a></li>
                <li><a href="#">Some category</a></li>
                <li><a href="#">Some category</a></li>
                <li><a href="#">Some category</a></li>
                <li><a href="#">Some category</a></li>
            </ul>
                
            <!-- RSS feeds -->
            <div class="padding">

                <h4 class="margin">RSS feeds:</h4>
                
                <p class="nom">
                    <a href="#" class="rss">Articles</a><br />
                    <a href="#" class="rss">Comments</a>
                </p>
                
                <h4 class="margin">Search:</h4>

                <form action="#" method="get">
                    <div id="search" class="box">
                        <input type="text" size="20" id="search-input" /><input type="submit" id="search-submit" value="Search" />
                    </div> <!-- /search -->
                </form>

            </div> <!-- /padding -->
            
        <hr class="noscreen" />          
        </div> <!-- /aside -->
        
        <div id="aside-bottom"></div>
    	<?php endif;?>
    </div> <!-- /cols -->

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


<?php
// $Id: block.tpl.php,v 1.3 2007/08/07 08:39:36 goba Exp $
?>
<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="clear-block block block-<?php print $block->module ?>">
   	<div id="topstory" class="box">
   		<!--<div id="topstory-img"><img src="/sites/all/themes/block49/tmp/180x135.gif" width="180" height="135" alt="" /></div>  -->     
   		<div id="topstory-desc">
			<?php if (!empty($block->subject)): ?>
  				<h2><a href="#"><?php print $block->subject ?></a></h2>
  			<?php endif;?>
  			
  				
  					<?php print $block->content ?>
  				
  			
			
  		</div> <!-- /topstory-desc -->
     </div> <!-- /topstory -->
 </div> <!-- block -->
 
 
            
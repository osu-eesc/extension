<?php
// $Id: page.tpl.php,v 1.1.2.5 2010/01/11 00:09:05 sociotech Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language; ?>" xml:lang="<?php print $language->language; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
	<link rel="stylesheet" href="<?php print $base_path . $directory; ?>/css/print.css" type="text/css" media="all">
</head>

<body class="print-friendly-body">

	<!-- adds shadow  around page -->
	<div id="limiter">
		<form id="send-to-printer">
			<input type="button" value="Print newsletter" onClick="window.print()" />
			<input type="button" value="Back to newsletter" onClick="history.go(-1)" />
		</form>
		
		
		<div id="content-region" class="content-region row nested">
			<div id="content-region-inner" class="content-region-inner inner">
				<div id="content-inner" class="content-inner block">
       				<div id="content-inner-inner" class="content-inner-inner inner">
        				
						<?php if ($title): ?>
	       					<h1 class="title">
								<?php print $title; ?>
                            </h1>
	     				<?php endif; ?>
          				
						<?php if ($content): ?>
                            <div id="content-content" class="content-content">
                            	<?php //dsm($node); ?>
                                <?php print $content; ?>
                                <?php print $feed_icons; ?>
                            </div><!-- /content-content -->
        				<?php endif; ?>
                        
       				</div><!-- /content-inner-inner -->
        		</div><!-- /content-inner -->
  			</div><!-- /content-region-inner -->
		</div><!-- /content-region -->

	</div> <!-- /limiter -->
	
  <?php print $closure; ?>

</body>
</html>

<div class='wrap amazonpressadmin'>

	<h2>AmazonPress: Dashboard</h2>
	
	<ul id="tabnav">
		<li><a href="<?php echo $homePath; ?>&amazonpressAdminPage=dashboard" class='highlighted'>Dashboard</a></li>
		<li><a href="<?php echo $homePath; ?>&amazonpressAdminPage=options">Options</a></li>
		<li><a href="<?php echo $homePath; ?>&amazonpressAdminPage=message_log">Message Log</a></li>
		<li><a href="<?php echo $homePath; ?>&amazonpressAdminPage=view_cache">View Cache</a></li>
		<li><a href="http://www.wordpressconnect.net/amazonpress/" class='highlighted-external'>AmazonPress</a></li>
	</ul>
	
	
	<table class='widefat' style='width: 600px;'>
		<tr>
			<td align="left">
				<p>
				<strong>Welcome to the <a href='http://www.wordpressconnect.net/' target='_blank'>Amazonpress WordPress plugin</a></strong>  This
				plugin is designed to allow you to quickly and easily promote products from Amazon on your WordPress
				blog related to the topics you write about.  It is designed to function as unobtrusively as possible,
				choosing products to be displayed based directly on either your blog categories or tags.  In other words
				all you need to do is categorize/tag your posts as you normally would, and amazonpress will find products
				to promote to your visitors related to those blog post topics.
				</p>
				
				<?php if(!$this->live) { ?>
				<p class='amazonpresswarning'>
				<strong>It looks like you have not yet configured amazonpress</strong> with all the required options.  Visit the <a href="<?php echo $homePath; ?>&amazonpressAdminPage=options">Options
				page</a> to save your preferred plugin options.  You will need to enter things like your AWS Access Key,
				your associates tag and your display options.
				</p>
				<?php } ?>
					
				<p>
				In this latest version of amazonpress there is also a <strong>sidebar widget</strong> option which allows you to easily display
				relevant products on the sidebar(s) of your site.  In order to use this widget you simply need to enable it under
				the Appearance &gt; Widgets tab of the blog's administrative navigation.
				</p>
				
				<p>

				</p>		

				<p>
			<strong>Your Version is 8.5	</strong><p>
			
			<strong>Most recent Version is</strong><p><iframe src ="http://www.wordpressconnect.net/amazon.php" width="500" height="130" frameborder="0"></iframe>

	
			</td>
		</tr>
	
	</table>
	
</div>
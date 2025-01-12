<div class='wrap'>

	<h2>Amazon Press Management</h2>
	
	<ul id="tabnav">
		<li><a class='highlighted' href="<?php echo $homePath; ?>">Options</a></li>
		<li><a href="<?php echo $homePath; ?>&amazonpressAdminPage=message_log">Message Log</a></li>
		<li><a href="<?php echo $homePath; ?>&amazonpressAdminPage=view_cache">View Cache</a></li>
	</ul>
	<ul class='secondTabs'>
		<li><a href="javascript:;" onClick="jQuery('#amazonpressConnection').show(); jQuery('#amazonpressSearch').hide(); jQuery('#amazonpressDisplay').hide(); jQuery('.updated').hide();">Connection</a></li>
		<li><a href="javascript:;" onClick="jQuery('#amazonpressConnection').hide(); jQuery('#amazonpressSearch').show(); jQuery('#amazonpressDisplay').hide(); jQuery('.updated').hide();">Search</a></li>
		<li><a href="javascript:;" onClick="jQuery('#amazonpressConnection').hide(); jQuery('#amazonpressSearch').hide(); jQuery('#amazonpressDisplay').show(); jQuery('.updated').hide();">Display</a></li>
	</ul>
	
	<form action='' method='POST'>
		<div id="amazonpressConnection">
			<table class='widefat' style='width: 600px;'>
				<tr>
					<td><strong>Select Locale:</strong><br/><small>If you reside in or wish to display products from a country other than the US (amazon.com) site, you can select your locale here.  Please be aware that in order to collect referral rewards, your associate account must be registered in the same locale as you are using to pull products from.</small></td>
					<td><select name='Locale'>
						<option value='United States' <?php if($this->options['Locale'] == 'United States') echo "selected"; ?>>United States</option>
						<option value='United Kingdom' <?php if($this->options['Locale'] == 'United Kingdom') echo "selected"; ?>>United Kingdom</option>
						<option value='Canada' <?php if($this->options['Locale'] == 'Canada') echo "selected"; ?>>Canada</option>
					</select></td>
				</tr>
				<tr>
					<td><strong>AWS Access Key:</strong><br/><small>The access key you applied for and received from the <a href='http://aws.amazon.com/'>Amazon Web Services site</a>.</small></td>
					<td><input type='text' name='AWSAccessKeyId' value='<?php echo $this->options['AWSAccessKeyId']; ?>' /></td>
				</tr>
				<tr>
					<td><strong>AWS Secret Access Key:</strong><br/><small>The secret access key you received from the <a href='http://aws.amazon.com/'>Amazon Web Services site</a>.  This key must be kept secure at all times.</small></td>
					<td><input type='password' name='AWSSecretAccessKeyId' value='<?php if($this->options['AWSSecretAccessKeyId']) echo "************************"; ?>' /></td>
				</tr>
				<tr>
					<td><strong>Associate Tag:</strong><br/><small>Your Amazon associate tag which you received when you signed up as an <a href='https://affiliate-program.amazon.com/'>Amazon associate</a>.</small></td>
					<td><input type='text' name='AssociateTag' value='<?php echo $this->options['AssociateTag']; ?>' /></td>
				</tr>
			</table>
		</div>
	
		<div id="amazonpressSearch" style='display:none;'>
			<table class='widefat' style='width: 600px;'>
				<tr>
					<td><strong>Search Based On:</strong><br/><small>Choose whether to search for related content based on categories or tags.</small></td>
					<td><select name='SearchFrom'>
						<option value='categories' <?php if($this->options['SearchFrom'] == 'categories') echo "selected"; ?>>Categories</option>
						<option value='tags' <?php if($this->options['SearchFrom'] == 'tags') echo "selected"; ?>>Tags</option>
					</select></td>
				</tr>
				<tr>
					<td><strong>Search Index:</strong><br/><small>Select what types of related items you want featured on your blog. You may wish to clear the local cache after changing this in order for the changes to become visible more quickly.</small></td>
					<td>
						<input type='radio' name='SearchIndex' value='Books' <?php if($this->options['SearchIndex'] == 'Books') echo 'checked'; ?> /> Books
						<br/>
						
						<input type='radio' name='SearchIndex' value='Music' <?php if($this->options['SearchIndex'] == 'Music') echo 'checked'; ?> /> Music
						<br/>
						
						<input type='radio' name='SearchIndex' value='Video' <?php if($this->options['SearchIndex'] == 'Video') echo 'checked'; ?> /> Video
						<br/>
						
						<input type='radio' name='SearchIndex' value='Electronics' <?php if($this->options['SearchIndex'] == 'Electronics') echo 'checked'; ?> /> Electronics
						<br/>
						
						<input type='radio' name='SearchIndex' value='Software' <?php if($this->options['SearchIndex'] == 'Software') echo 'checked'; ?> /> Software
						<br/>
						
						<input type='radio' name='SearchIndex' value='Blended' <?php if($this->options['SearchIndex'] == 'Blended') echo 'checked'; ?> /> Blended
						<br/>
						
						<input type='radio' name='SearchIndex' value='All' <?php if($this->options['SearchIndex'] == 'All') echo 'checked'; ?> /> All
						<br/>
					</td>
				</tr>
				<tr>
					<td><strong>Default Tags:</strong><br/><small>Enter a couple default tags seperated by commas to be used on articles not having any specific tags.  (used to find products related to these tags)</small></td>
					<td><input type='text' name='DefaultTags' value='<?php echo $this->options['DefaultTags']; ?>' /></td>
				</tr>
				<tr>
					<td><strong>Cache Expiry Minutes:</strong><br/><small>How many minutes would you like between when related items are refreshed from Amazon.com?</small></td>
					<td><input type='text' name='CacheExpiry' value='<?php echo $this->options['CacheExpiry']; ?>' /></td>
				</tr>
				<tr>
					<td><strong>Clear Cache Now:</strong><br/><small>If you wish to clear the local cache of products now, click this checkbox.</small></td>
					<td><input type='checkbox' name='ClearCacheNow' value='yes' /></td>
				</tr>
				<tr>
					<td><strong>Tip the Developer:</strong><br/>
						<small>If you find this plugin to be useful in helping you to make money with your blog,
						why not give a "tip" to the developer by allowing him to share a bit of the profit.<br/>
						<br/>
						Allowing this box to be checked, will cause one of the related products to send the Amazon
						referral on behalf of the developer instead of using your own affiliate ID.  In this way
						you can help to support ongoing development on this plugin.</small></td>
					<td><input type='checkbox' name='AllowTip' value='yes' <?php if($this->options['AllowTip'] == true) echo "checked"; ?> /> Yes</td>
				</tr>
			</table>
		</div>
	
		<div id="amazonpressDisplay" style='display:none;'>
			<table class='widefat' style='width: 600px;'>
				<tr>
					<td><strong>Show On:</strong><br/><small>Select which areas of your blog you wish these items to be displayed on.</small></td>
					<td>
						<input type='checkbox' name='ShowOnPosts' value='yes' <?php if($this->options['ShowOnPosts'] == true) echo "checked"; ?> /> Posts<br/>
						<input type='checkbox' name='ShowOnPages' value='yes' <?php if($this->options['ShowOnPages'] == true) echo "checked"; ?> /> Pages<br/>
						<input type='checkbox' name='ShowOnHome' value='yes' <?php if($this->options['ShowOnHome'] == true) echo "checked"; ?> /> Home<br/>
						<input type='checkbox' name='ShowOnCategories' value='yes' <?php if($this->options['ShowOnCategories'] == true) echo "checked"; ?> /> Categories<br/>
						<input type='checkbox' name='ShowOnTags' value='yes' <?php if($this->options['ShowOnTags'] == true) echo "checked"; ?> /> Tags<br/>
						<input type='checkbox' name='ShowOnSearch' value='yes' <?php if($this->options['ShowOnSearch'] == true) echo "checked"; ?> /> Search<br/>
					</td>
				</tr>
				<tr>
					<td><strong>Title Text:</strong><br/><small>Enter the text you wish to use in the related reading title or leave it as is.</small></td>
					<td><input type='text' name='TitleText' value='<?php echo htmlentities(stripslashes($this->options['TitleText']), ENT_QUOTES); ?>' /></td>
				</tr>
				<tr>
					<td><strong>Max Results:</strong><br/><small>How many products would you like to promote on each post? (maximum)</small></td>
					<td><input type='text' name='MaxResults' value='<?php echo $this->options['MaxResults']; ?>' /></td>
				</tr>
				<tr>
					<td><strong>Show Images:</strong><br/><small>Do you wish to show images associated with the related products?</small></td>
					<td><input type='checkbox' name='ShowImages' value='yes' <?php if($this->options['ShowImages'] == true) echo "checked"; ?> /> Yes</td>
				</tr>
				<tr>
					<td><strong>Show Text:</strong><br/><small>Do you wish to show text associated with the related products?</small></td>
					<td><input type='checkbox' name='ShowText' value='yes' <?php if($this->options['ShowText'] == true) echo "checked"; ?> /> Yes</td>
				</tr>
				<tr>
					<td><strong>Link Targets:</strong><br/><small>What sort of window would you like the links to open in?  (ie new window? same window?)</small></td>
					<td><select name='LinkTarget'>
						<option value='' <?php if($this->options['LinkTarget'] == '') echo "selected"; ?>>Default (same window)</option>
						<option value='_blank' <?php if($this->options['LinkTarget'] == '_blank') echo "selected"; ?>>New Window</option>
					</select></td>
				</tr>
				<tr>
					<td><strong>Display StyleSheet:</strong><br/><small>Choose a stylesheet for use in displaying the products on your blog.  You can also create your own and put them in the amazonpress/css/ folder.</small></td>
					<td><select name='StyleSheet'>
						<?php
							foreach($stylesheets as $filename)
							{
								?>
								<option value='<?php echo $filename; ?>' <?php if($this->options['StyleSheet'] == $filename) echo "selected"; ?> ><?php echo $filename; ?></option>
								<?php
							}
						?>
					</select></td>
				</tr>
			</table>
		</div>

		<table class='widefat' style='width: 600px;'>
			<tr>
				<td>Once you have input and saved appropriate values for these options, your site will be able to begin displaying related items on all your blog pages and posts.</td>
				<td><input type='submit' action='submit' value='Save' /></td>
			</tr>
		</table>
	</form>
</div>
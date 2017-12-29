<div class="wrap" id="weblizar_wrap">		
	<div id="content_wrap">			
		<div class="weblizar-header">
			<h2><span class="dashicons dashicons-facebook-alt" style="width: auto;"><?php _e( 'Facebook By Weblizar', WEBLIZAR_FACEBOOK_TEXT_DOMAIN ); ?> </span></h2>
			<br>
			<div class="weblizar-submenu-links" id="weblizar-submenu-links">
				<ul>
					<li class=""><div class="dashicons dashicons-format-chat"></div> <a href="http://wordpress.org/plugins/facebook-by-weblizar/" target="_blank" title="Support Forum"><?php _e( 'Support Forum', WEBLIZAR_FACEBOOK_TEXT_DOMAIN ); ?></a></li>
					<li class=""><div class="dashicons dashicons-welcome-write-blog"></div> <a href="<?php echo WEBLIZAR_FACEBOOK_PLUGIN_URL.'readme.txt'; ?>" target="_blank" title="Theme Changelog"><?php _e( 'Plugin Change Log', WEBLIZAR_FACEBOOK_TEXT_DOMAIN ); ?></a></li>      
				</ul>
			</div>			
		</div>		
		<div id="content">
			<div id="options_tabs" class="ui-tabs">
				<ul class="options_tabs ui-tabs-nav" role="tablist" id="nav">					
					<li class="active">
						<a id="general">
							<div class="dashicons dashicons-admin-generic"></div><?php _e('Settings', WEBLIZAR_FACEBOOK_TEXT_DOMAIN);?>
						</a>
					</li>
					<li>
						<a id="recommendation">
							<div class="dashicons dashicons-admin-plugins"></div><?php _e('Plugin Recommendation', WEBLIZAR_FACEBOOK_TEXT_DOMAIN);?>
						</a>
					</li>
					
					<li>
						<a id="needhelp">
							<div class="dashicons dashicons-editor-help"></div><?php _e('Need Help', WEBLIZAR_FACEBOOK_TEXT_DOMAIN);?>
						</a>
					</li>
					<li>
						<a id="ourproduct">
							<div class="dashicons dashicons-plus"></div><?php _e('Our Products', WEBLIZAR_FACEBOOK_TEXT_DOMAIN);?>
						</a>
					</li>
					<li>
						<a id="general" href="https://wordpress.org/plugins/facebook-by-weblizar/" target="_new">
							<div class="dashicons dashicons-star-empty"></div><?php _e('Rate Us', WEBLIZAR_FACEBOOK_TEXT_DOMAIN);?>
						</a>
					</li>
				</ul>					
				<?php require_once('help-body.php'); ?>
			</div>		
		</div>
		<div class="weblizar-header" style="margin-top:0px; border-radius: 0px 0px 6px 6px;">			
			<div class="weblizar-submenu-links" style="margin-top:15px;">				
			</div><!-- weblizar-submenu-links -->
		</div>
		<div class="clear"></div>
	</div>
</div>
<?php
/**
 * Time Theme Pro plugin settings
 */

$plugin = $vars['entity'];

$theme_settings = array('topbar' => array('topbar_background_color','topbar_a_color'),
												'body'=> array('content_background_color', 'content_font_color','content_a_color', 'content_button_color'),
												'slidebar'=> array('slidebar_background_color', 'slidebar_a_color'));

?>
<link rel="stylesheet" href="<?php echo elgg_get_site_url();?>mod/time_theme_pro/lib/spectrum/spectrum.css">
<div>
	<h4>Recommendations</h4><br>
	<ul>
		<li>1. Disable the cache in Advanced settings</li>
		<li>2. Edit your color settings here</li>
		<li>3. Clear the cache from the dashboard</li>
		<li>4. Verify that the configuration is correct</li>
		<li>5. Activate your cache settings	</li>
	</ul>
</div><br>
<h4>Settings</h4>
<table style="border:0px;width:80%; margin:10px">
	<tr>
		<td style="width:40%; padding:5px;">
			<?php echo elgg_echo('time_theme_pro:settings:background_type'); ?>
		</td>
		<td style="width:60%; padding-bottom:5px;">		
			<?php echo elgg_view('input/select', array(
											'name' => 'params[background_type]',
											'value' => $vars['entity']->background_type,
											'options' => array('imagen','color'),
										));
			 ?>
	</td>
	</tr>
		<tr>
		<td style="width:40%; padding:5px;">
			<?php echo elgg_echo('time_theme_pro:settings:extractability'); ?>
		</td>
		<td style="width:60%; padding-bottom:5px;">	
			<?php echo elgg_view('input/select', array(
											'name' => 'params[extractability]',
											'value' => $vars['entity']->extractability,
											'options' => array('disabled', 'all', 'oembed', 'information'),
										));
			 ?>
		</td>
	</tr>
<?php foreach ($theme_settings as $section => $attrs): ?>
 	<tr>
 		<td colspan="2"><label><?php echo elgg_echo('time_theme_pro:settings:'.$section) ?></label></td>
 	</tr>
 	<?php foreach ($attrs as $key => $value): ?>
		<tr>
			<td style="width:40%; padding:5px;">
				<?php echo elgg_echo('time_theme_pro:settings:'.$value); ?> 		
			</td>
			<td style="width:60%; padding-bottom:5px;">							
				<?php echo elgg_view('input/text', array(
									  'name' => 'params['.$value.']',
									  'value' => $vars['entity']->$value,
									  'id' => 'time_theme_pro_'.$value, 
									  'class' => 'color'
									)); ?>			
			</td>
		</tr>	
 	<?php endforeach ?>
<?php endforeach ?>
	<tr>
		<td style="width:40%; padding:10px 0;">
		Set to default settings values</td>
		<td style="padding:10px 0;">		
		<?php 		
		$action = elgg_add_action_tokens_to_url("/action/time_theme_pro/reset");
		 ?>
		 <a href="<?php echo $action ?>" class="" style="color:red">
			RESET		 	
		 </a>
		</td>
	</tr>
	<tr>
 		<td colspan="2"><label><?php echo elgg_echo('time_theme_pro:settings:code') ?></label><br>
 		<small><?php echo elgg_echo('time_theme_pro:settings:code_help') ?></small></td>
 	</tr>
	<tr>
			<td style="width:40%; padding:5px;">
				<?php echo elgg_echo('time_theme_pro:settings:header_code'); ?> 		
			</td>
			<td style="width:60%; padding-bottom:5px;">							
				<?php echo elgg_view('input/plaintext', array(
									  'name' => 'params[header_code]',
									  'value' => $vars['entity']->header_code,
									  'id' => 'time_theme_pro_header_code', 
									)); ?>			
			</td>
	</tr>
	<tr>
			<td style="width:40%; padding:5px;">
				<?php echo elgg_echo('time_theme_pro:settings:footer_code'); ?> 		
			</td>
			<td style="width:60%; padding-bottom:5px;">							
				<?php echo elgg_view('input/plaintext', array(
									  'name' => 'params[footer_code]',
									  'value' => $vars['entity']->footer_code,
									  'id' => 'time_theme_pro_footer_code', 
									  'cols' =>80
									)); ?>			
			</td>
	</tr>
	<tr>
			<td style="width:40%; padding:5px;">
				<?php echo elgg_echo('time_theme_pro:settings:sidebar_code'); ?> 		
			</td>
			<td style="width:60%; padding-bottom:5px;">							
				<?php echo elgg_view('input/plaintext', array(
									  'name' => 'params[sidebar_code]',
									  'value' => $vars['entity']->sidebar_code,
									  'id' => 'time_theme_pro_sidebar_code', 
									)); ?>			
			</td>
	</tr>
</table>

<script>
require(['<?php echo elgg_get_site_url();?>mod/time_theme_pro/lib/spectrum/spectrum.js'], function () {

	  $(".color").spectrum({
    		preferredFormat: "hex",
    		showInput: true,	
  		});
});
</script>


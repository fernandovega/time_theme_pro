<?php
/**
 * Elgg pageshell
 * The standard HTML page shell that everything else fits into
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['head']        Parameters for the <head> element
 * @uses $vars['body_attrs']  Attributes of the <body> tag
 * @uses $vars['body']        The main content of the page
 * @uses $vars['sysmessages'] A 2d array of various message registers, passed from system_messages()
 */

// backward compatability support for plugins that are not using the new approach
// of routing through admin. See reportedcontent plugin for a simple example.
if (elgg_get_context() == 'admin') {
	if (get_input('handler') != 'admin') {
		elgg_deprecated_notice("admin plugins should route through 'admin'.", 1.8);
	}
	_elgg_admin_add_plugin_settings_menu();
	elgg_unregister_css('elgg');
	echo elgg_view('page/admin', $vars);
	return true;
}

elgg_load_css('font-awesome');
elgg_load_js('slidebars');
elgg_load_js('flowplayer');
elgg_load_css('flowplayer');

// render content before head so that JavaScript and CSS can be loaded. See #4032

$messages = elgg_view('page/elements/messages', array('object' => $vars['sysmessages']));

$header = elgg_view('page/elements/header', $vars);
$navbar = elgg_view('page/elements/navbar', $vars);
$content = elgg_view('page/elements/body', $vars);
//$footer = elgg_view('page/elements/footer', $vars);
$user_menu = elgg_view('page/elements/sidebar', $vars);

$body = <<<__BODY
<div class="elgg-page elgg-page-default">
	<div class="elgg-page-messages">
		$messages
	</div>
__BODY;

$body .= elgg_view('page/elements/topbar_wrapper', $vars);
/*

  <div class="elgg-page-header">
		<div class="elgg-inner">
			$header
		</div>
	</div>
	*/

$body .= <<<__BODY
	<div class="sb-slidebar sb-left sb-style-overlay">
		<div class="sliderbar-user-menu">
		 $user_menu		 
		</div>
		<div class="elgg-inner">
			$navbar
		</div>
	</div>
	<div class="elgg-page-body" id="sb-site" style="margin-top: 45px">
		<div class="elgg-inner">
			$content			
		</div>
	</div>
</div>
<script>
  (function($) {
    $(document).ready(function() {
      $.slidebars();
    });

    
  }) (jQuery);
</script>
__BODY;

$body .= elgg_view('page/elements/foot');

$head = elgg_view('page/elements/head', $vars['head']);

$params = array(
	'head' => $head,
	'body' => $body,
);

if (isset($vars['body_attrs'])) {
	$params['body_attrs'] = $vars['body_attrs'];
}

echo elgg_view("page/elements/html", $params);

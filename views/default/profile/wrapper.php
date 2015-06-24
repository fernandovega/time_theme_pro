<?php
/**
 * Profile info box
 */
$user = elgg_get_page_owner_entity();

if (!$user) {
  // no user so we quit view
  echo elgg_echo('viewfailure', array(__FILE__));
  return TRUE;
}

// grab the actions and admin menu items from user hover
$menu = elgg_trigger_plugin_hook('register', "menu:user_hover", array('entity' => $user), array());
$builder = new ElggMenuBuilder($menu);
$menu = $builder->getMenu();
$menu = elgg_trigger_plugin_hook('prepare', "menu:user_hover", array(
  'menu' => $menu,
  'entity' => $user,
  'username' => $user->username,
  'name' => 'user_hover',
), $menu);

$actions = elgg_extract('action', $menu, array());
$admin = elgg_extract('admin', $menu, array());
// if admin, display admin links
$admin_links = '';
if (elgg_is_admin_logged_in() && elgg_get_logged_in_user_guid() != elgg_get_page_owner_guid()) {
  $text = elgg_echo('admin:options');

  $admin_links = '<ul class="profile-admin-menu-wrapper">';
  $admin_links .= "<li><a rel=\"toggle\" href=\"#profile-menu-admin\">$text&hellip;</a>";
  $admin_links .= '<ul class="profile-admin-menu" id="profile-menu-admin">';
  foreach ($admin as $menu_item) {
    $admin_links .= elgg_view('navigation/menu/elements/item', array('item' => $menu_item));
  }
  $admin_links .= '</ul>';
  $admin_links .= '</li>';
  $admin_links .= '</ul>';  
}

// content links
$content_menu = elgg_view_menu('owner_block', array(
  'entity' => elgg_get_page_owner_entity(),
  'class' => 'profile-content-menu',
));

$cover = getCoverIconUrl('large');
?>

<?php /* We add mrn here because we're doing stupid things with the grid system. Remove this hack */ ?>
<div class="profile elgg-col-3of3 mrn profile-details">
	<div class="elgg-inner clearfix h-card vcard elgg-cover" style="background: url(<?php echo $cover ?>) center no-repeat; position: relative">
		<?php echo elgg_view('profile/owner_block'); ?>
		
	</div>
</div>
<div class="profile elgg-col-2of3">
  <div class=" clearfix">
    <?php echo elgg_view('profile/details'); ?>
    <?php echo elgg_view('profile/river'); ?>
  </div>
</div>

<div class="profile elgg-col-1of3">
  <div class="profile-menu">
    <?php echo $content_menu ?>
    <?php echo $admin_links ?>
  </div>
</div>

<script>
$(document).ready(function(){
    $("#profile-button").click(function(){
        $("#profile-details-info").toggle();
        return false;
    });

     $("#profile-config-botom").click(function(){
        $("#elgg-profile-actions").toggle();
        return false;
    });
});
</script>



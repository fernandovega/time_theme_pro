<?php
/**
 * Cover upload action
 */

$guid = get_input('guid');
$owner = get_entity($guid);

if (!$owner || !($owner instanceof ElggUser) || !$owner->canEdit()) {
	register_error(elgg_echo('cover:upload:fail'));
	forward(REFERER);
}

$error = elgg_get_friendly_upload_error($_FILES['cover']['error']);
if ($error) {
	register_error($error);
	forward(REFERER);
}

$icon_sizes = elgg_get_config('cover_sizes');

// get the images and save their file handlers into an array
// so we can do clean up if one fails.
$files = array();
foreach ($icon_sizes as $name => $size_info) {
	$resized = get_resized_image_from_uploaded_file('cover', $size_info['w'], $size_info['h'], $size_info['square'], $size_info['upscale']);

	if ($resized) {
		//@todo Make these actual entities.  See exts #348.
		$file = new ElggFile();
		$file->owner_guid = $guid;
		$file->setFilename("cover/{$guid}{$name}.jpg");
		$file->open('write');
		$file->write($resized);
		$file->close();
		$files[] = $file;
	} else {
		// cleanup on fail
		foreach ($files as $file) {
			$file->delete();
		}

		register_error(elgg_echo('cover:resize:fail'));
		forward(REFERER);
	}
}

// reset crop coordinates
$owner->x1 = 0;
$owner->x2 = 0;
$owner->y1 = 0;
$owner->y2 = 0;

$owner->covertime = time();
system_message(elgg_echo("cover:upload:success"));
/*if (elgg_trigger_event('profileiconupdate', $owner->type, $owner)) {

	$view = 'river/user/default/profileiconupdate';
	elgg_delete_river(array('subject_guid' => $owner->guid, 'view' => $view));
	elgg_create_river_item(array(
		'view' => $view,
		'action_type' => 'update',
		'subject_guid' => $owner->guid,
		'object_guid' => $owner->guid,
	));
}*/

forward(REFERER);

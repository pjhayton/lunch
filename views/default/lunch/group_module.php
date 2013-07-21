<?php
/**
 * Group lunch module
 */

$owner = elgg_get_page_owner_entity();

//if ($group->lunch_enable == "no") {
//	return true;
//}

$all_link = elgg_view('output/url', array(
	'href' => "lunch/group/$group->guid/all",
	'text' => elgg_echo('link:view:all'),
	'is_trusted' => true,
));

elgg_push_context('widgets');
$options = array(
	'type' => 'object',
	'subtype' => 'lunch',
	'limit' => 3,
	'container_guid' => $owner->guid,
	'full_view' => false,
	'pagination' => false,
);

$content = elgg_list_entities($options);
elgg_pop_context();

if (!$content) {
	$content = '<p>' . elgg_echo('lunch:none') . '</p>';
}

$new_link = elgg_view('output/url', array(
	'href' => "lunch/add/$owner->guid",
	'text' => elgg_echo('lunch:add'),
	'is_trusted' => true,
));

echo elgg_view('groups/profile/module', array(
	'title' => elgg_echo('lunch:group'),
	'content' => $content,
	'all_link' => $all_link,
	'add_link' => $new_link,
));
<?php
    
// Load array of schools and geocodes from group objects
$schools = "";
$groups = elgg_get_entities(array('types' => 'group', 'limit' => false));
foreach($groups as $group) {
		$infowindow = '<img src="'.$group->getIcon().'"/><a href="'. $group->getURL() .'">'. $group->name.'</a>';
        $schools .= '[\'' . $infowindow . '\', ' . $group->geocode[0] .', ' . $group->geocode[1] . '],';
}

// Get number of schools
$groupcount = elgg_get_entities(array(
	'types' => 'group',
	'count' => true,
	));
	
$params = array(
	'group_count' => $groupcount,
	'school_meta' => $schools,
);

// Output map page
$title = "Map";
$drawer = elgg_view('page/map/drawer');
$content = elgg_view('page/map/index', $params);
$vars = array('drawer' => $drawer);
$body = elgg_view_layout('one_column', array('content' => $content, 'drawer' => $drawer));

echo elgg_view_page($title, $body, 'default', $vars);

?>
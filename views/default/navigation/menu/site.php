<?php
/**
 * Site navigation menu
 *
 * @uses $vars['menu']['default']
 * @uses $vars['menu']['more']
 */

$default_items = elgg_extract('default', $vars['menu'], array());
$more_items = elgg_extract('more', $vars['menu'], array());

echo '<ul class="elgg-menu elgg-menu-site elgg-menu-site-default clearfix">';
foreach ($default_items as $menu_item) {
	echo elgg_view('navigation/menu/elements/item', array('item' => $menu_item));
}


echo '<li class="dropdown"><a href="/profile"><img src="' . get_loggedin_user()->getIconURL('small') . '" style="float: right"/><br/>' . get_loggedin_user()->name . ' </a>';
echo '<ul><li><a href="/profile/">Profile</a></li>';
echo '<li><a href="/settings/">Settings</a></li>';
echo '<li><a href="/action/logout">Sign Out</a></li></ul>';
echo '</li></ul>';


/*
echo '<ul id="nav" class="drop"><li><a href="/profile">';
echo 
echo '</a><ul><li><a href="/settings"><img class="user-dropdown-avatar" src="';
echo 
echo '" />Account Settings</a></li><li><a href="/action/logout">Sign Out</a></li></ul></li></ul>';
*/
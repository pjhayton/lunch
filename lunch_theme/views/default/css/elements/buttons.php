<?php
/**
 * CSS buttons
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>
/** Misc **/
#login-dropdown-box {
	z-index: 2001;
}

/* **************************
	BUTTONS
************************** */
#signup_button {
	height: 28px;
	font-size: 17px;
	line-height: 25px;
	padding: 0px 50px;
	letter-spacing: 0px !important;
	vertical-align: 6px;
	border-radius: 6px 6px 6px 6px;
	background: -moz-linear-gradient(center top , rgb(124, 177, 91) 0px, rgb(105, 157, 72) 100%) repeat scroll 0% 0% transparent;
	border-color: rgba(0, 0, 0, 0.65);
	display: inline-block;
	text-decoration: none !important;
	cursor: pointer;
	font-family: "Helvetica Neue",Arial,Helvetica,sans-serif;
	color: rgb(255, 255, 255);
	font-weight: bold;
	text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.32);
	border-width: 1px;
	border-style: solid;
	box-shadow: 0px 1px 0px 0px rgba(255, 255, 255, 0.6) inset;
	-moz-user-select: none;
}

/* Base */
.elgg-button {
	font-size: 16px;
	font-weight: bold;
	margin: 15px 0 0;
	text-align: center;
	border-color: rgba(0, 0, 0, 0.65);
	background-color: #00bff3;
	
	width: auto;
	padding: 4px 15px;
	outline: none;
	
	font-family: "Helvetica Neue",Arial,Helvetica,sans-serif;
	color: #000;
	rgb(255, 255, 255);
}
a.elgg-button {
	padding: 3px 6px;
}
/* Submit: This button should convey, "you're about to take some definitive action" */
.elgg-button-submit {
	color: white;
	text-shadow: 1px 1px 0px black;
	text-decoration: none;
	border: 1px solid #4690d6;
}

.elgg-button-submit:hover {
	border-color: #0054a7;
	text-decoration: none;
	color: white;
}

.elgg-button-submit.elgg-state-disabled {
	background: #999;
	border-color: #999;
	cursor: default;
}

/* Cancel: This button should convey a negative but easily reversible action (e.g., turning off a plugin) */
.elgg-button-cancel {
	color: #FFF;
	border: 1px solid #999;
}
.elgg-button-cancel:hover {
	border-color: #0054a7;
	text-decoration: none;
}

/* Action: This button should convey a normal, inconsequential action, such as clicking a link */
.elgg-button-action {
	background: #ccc url(<?php echo elgg_get_site_url(); ?>_graphics/button_background.gif) repeat-x 0 0;
	border:1px solid #999;
	color: #333;
	padding: 2px 15px;
	text-align: center;
	font-weight: bold;
	text-decoration: none;
	text-shadow: 0 1px 0 white;
	cursor: pointer;
	
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}

.elgg-button-action:hover,
.elgg-button-action:focus {
	background: #ccc url(<?php echo elgg_get_site_url(); ?>_graphics/button_background.gif) repeat-x 0 -15px;
	color: #111;
	text-decoration: none;
	border: 1px solid #999;
}

/* Delete: This button should convey "be careful before you click me" */
.elgg-button-delete {
	color: #bbb;
	text-decoration: none;
	border: 1px solid #333;
	background: #555 url(<?php echo elgg_get_site_url(); ?>_graphics/button_graduation.png) repeat-x left 10px;
	text-shadow: 1px 1px 0px black;
}
.elgg-button-delete:hover {
	color: #999;
	background-color: #333;
	background-position: left 10px;
	text-decoration: none;
}

.elgg-button-dropdown {
	padding:3px 6px;
	text-decoration:none;
	display:block;
	font-weight:bold;
	position:relative;
	margin-left:0;
	color: white;
	border:1px solid #71B9F7;
	
	-webkit-border-radius:4px;
	-moz-border-radius:4px;
	border-radius:4px;
	
	-webkit-box-shadow: 0 0 0;
	-moz-box-shadow: 0 0 0;
	box-shadow: 0 0 0;
	
	/*background-image:url(<?php echo elgg_get_site_url(); ?>_graphics/elgg_sprites.png);
	background-position:-150px -51px;
	background-repeat:no-repeat;*/
}

.elgg-button-dropdown:after {
	content: " \25BC ";
	font-size:smaller;
}

.elgg-button-dropdown:hover {
	background-color:#71B9F7;
	text-decoration:none;
}

.elgg-button-dropdown.elgg-state-active {
	background: #ccc;
	outline: none;
	color: #333;
	border:1px solid #ccc;
	
	-webkit-border-radius:4px 4px 0 0;
	-moz-border-radius:4px 4px 0 0;
	border-radius:4px 4px 0 0;
}

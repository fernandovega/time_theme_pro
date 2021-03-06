<?php
/**
 * CSS Time theme
 *
 * @package TimeTheme
 * @subpackage UI
 */
$topbar_background_color = elgg_get_plugin_setting('topbar_background_color', 'time_theme_pro');
$topbar_a_color = elgg_get_plugin_setting('topbar_a_color', 'time_theme_pro');
$content_button_color = elgg_get_plugin_setting('content_button_color', 'time_theme_pro');
?>
/* <style> /**/

/* ***************************************
	MISC
*****************************************/
#dashboard-info {
	border: 1px solid #DCDCDC;
	margin: 0 10px 15px;
}
.elgg-sidebar input[type=text],
.elgg-sidebar input[type=password] {
	box-shadow: inset 0 2px 6px rgba(0, 0, 0, 0.1);
}
.elgg-module .elgg-list-river {
	border-top: none;
}
.elgg-module .elgg-list {
	margin-top: 0;
}
/* ***************************************
	TOPBAR MENU DROPDOWN
*****************************************/
.elgg-page-topbar .top-search{
 	float: right;
	margin: -40px 150px;
  max-width: 200px;
  padding: 10px;
 	color: <?php echo $topbar_a_color ?>;
}

.elgg-page-topbar form.elgg-search{
  max-width: 150px;
  margin: 0 15px 0 0;
}

.elgg-page-topbar i.fa-search {
    color: <?php echo $topbar_a_color ?>;
    float: left;
    margin: 9px 5px;
}

.elgg-page-topbar form.elgg-search input{
   border: 0px solid;
   border-bottom-width: 1px;
   background: <?php echo $topbar_background_color ?>;
   border-color: <?php echo $topbar_a_color ?>;
   padding: 2px;
   color: <?php echo $topbar_a_color ?>;
}

.elgg-topbar-dropdown {
	padding-bottom: 8px; /* forces button to reach bottom of topbar */
}
.elgg-menu-topbar > li > .elgg-topbar-dropdown:hover {
	color: #EEE;
	cursor: default;
}
.elgg-menu-topbar-alt ul {
	position: absolute;
	display: none;
	background-color: #FFF;
	border: 1px solid #DEDEDE;
	text-align: left;
	top: 33px;
	margin-left: -100px;
	width: 180px;

	border-radius: 0 0 3px 3px;
	box-shadow: 1px 3px 5px rgba(0, 0, 0, 0.25);
}
.elgg-menu-topbar-alt li ul > li > a {
	text-decoration: none;
	padding: 10px 20px;
	background-color: #FFF;
	color: #444;
}
.elgg-menu-topbar-alt li ul > li > a:hover {
	background-color: #F0F0F0;
	color: #444;
}
.elgg-menu-topbar-alt > li:hover > ul {
	display: block;
}
.elgg-menu-item-account > a:after {
	
}

.elgg-river-item input[type="text"] {
    width: 84%;
	}
/* ***************************************
	RESPONSIVE
*****************************************/
html {
	font-size: 100%;
	-webkit-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
}
.elgg-button-nav {
	display: none;
	color: #FFF;
	float: left;
	padding: 14px 18px;
}
.elgg-button-nav:hover {
	color: #FFF;
	text-decoration: none;
	background-color: <?php echo $content_button_color; ?>;
}
.elgg-button-nav .icon-bar {
	background-color: #F5F5F5;
	border-radius: 1px 1px 1px 1px;
	box-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);
	display: block;
	height: 2px;
	width: 22px;
}
.elgg-button-nav .icon-bar + .icon-bar {
	margin-top: 3px;
}
@media (max-width: 1030px) {
	.elgg-menu-topbar-default > li:first-child a {
		margin-left: 0;
	}
	.elgg-menu-topbar-alt > li > a.elgg-topbar-dropdown {
		margin-right: 0;
	}
	.elgg-page-footer {
		padding: 0 20px;
	}
}
@media (max-width: 820px) {

	.elgg-river-item input[type="text"] {
    width: 80%;
	}


	.elgg-page-default {
		min-width: 0;
	}
	.elgg-page-body {
		padding: 0;
	}

	.elgg-main {     	
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
    }
    .elgg-layout-one-sidebar .elgg-main,
	.elgg-layout-two-sidebar .elgg-main {
        width: 100%;
        margin: 0px;
    }
	.elgg-sidebar {
		border-left: none;
		border-top: 1px solid #DCDCDC;
		border-bottom: 1px solid #DCDCDC;
		background-color: #FAFAFA;
		width: 100%;
		float: left;
		padding: 27px 20px 20px;
		box-shadow: 0 3px 6px rgba(0, 0, 0, 0.05) inset;

		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}
	.elgg-sidebar-alt {
		display: none;
	}
	.elgg-page-default .elgg-page-footer > .elgg-inner {
		border-top: none;
	}
	.elgg-menu-footer {
		float: none;
		text-align: center;
	}
	.elgg-menu-page,
	.elgg-sidebar .elgg-menu-owner-block,
	.elgg-menu-groups-my-status {
		border-bottom: 1px solid #DCDCDC;
	}
	.elgg-menu-page a,
	.elgg-sidebar .elgg-menu-owner-block li a,
	.elgg-menu-groups-my-status li a {
		border-color: #DCDCDC;
		border-style: solid;
		border-width: 1px 1px 0 1px;
		margin: 0;
		padding: 10px;		
		background-color: #FFFFFF;
	}
	.elgg-menu-page a:hover,
	.elgg-sidebar .elgg-menu-owner-block li a:hover,
	.elgg-menu-groups-my-status li a:hover,
	.elgg-menu-page li.elgg-state-selected > a,
	.elgg-sidebar .elgg-menu-owner-block li.elgg-state-selected > a,
	.elgg-menu-groups-my-status li.elgg-state-selected > a {
		color: #444;
		background-color: #F0F0F0;
		text-decoration: none;
	}

	.elgg-river-item input[type=submit] {
		margin: 5px 0 0 0;
	}
	/***** CUSTOM INDEX ******/
	.elgg-col-1of2 {
		float: none;
		width: 100%;
	}
	.prl {
		padding-right: 0;
	}
	/***** WIDGETS ******/
	.elgg-col-1of3,
	.elgg-col-2of3,
	#elgg-widget-col-1,
	#elgg-widget-col-2,
	#elgg-widget-col-3 {
		float: none;
		min-height: 0 !important;
		width: 100%;
	}
	.elgg-module-widget {
		margin: 0 0 15px;
	}
	.custom-index-col1 > .elgg-inner,
	.custom-index-col2 > .elgg-inner {
		padding: 0;
	}
	#dashboard-info {
		margin: 0 0 15px;
	}
}

	
	.elgg-page-header > .elgg-inner h1 {
		padding-top: 10px;
	}
	.elgg-heading-site, .elgg-heading-site:hover {
		font-size: 1.6em;
	}
	.elgg-button-nav {
		cursor: pointer;
		display: block;
	}
	.elgg-nav-collapse {
		clear: both;
		display: block;
		width: 100%;
	}
	#login-dropdown a {
		padding: 10px 18px;
	}
	.elgg-menu-site {
		float: none;
	}
	.elgg-menu-site > li > ul {
		position: static;
		display: block;
		left: 0;
		margin-left: 0;
		border: none;
		box-shadow: none;
		background: none;
	}
	.elgg-more,
	.elgg-menu-site-more li,
	.elgg-menu-site > li > ul {
		width: auto;
	}
	.elgg-menu-site ul li {
		float: none;
		margin: 0;
	}

	.elgg-more > a {
		/*border-bottom: 1px solid #294E6B;*/
	}

	
	.elgg-menu-site > li {
		clear: both;
		float: none;
		margin: 0;
	}
	.elgg-menu-site > li:first-child {
		border-top: none;
	}
	.elgg-menu-site > li > a {
		padding: 10px 18px;
	}

@media (max-width: 600px) {
	.groups-profile-fields {
		float: left;
		padding-left: 0;
	}
	#profile-owner-block {
		border-right: none;
		width: auto;
	}

	.elgg-avatar-topbar{
		display: none;
	}
	

	.elgg-river-item input[type="text"] {
    width: 60%;
	}

	audio {
		max-width: 220px;
	}

	.elgg-form-comment-save{
		width: 90%;
	}

.elgg-page-topbar form.elgg-search {
    width: 110px;
    margin: 0 15px 0 0;
	}

	#groups-tools > li {
		width: 100%;
		margin-bottom: 20px;
	}
	#groups-tools > li:nth-child(odd) {
		margin-right: 0;
	}
	#groups-tools > li:last-child {
		margin-bottom: 0;
	}
	.elgg-menu-entity, .elgg-menu-annotation {
		margin-left: 0;
	}
	.elgg-menu-entity > li, .elgg-menu-annotation > li {
		margin-left: 0;
		margin-right: 15px;
	}
	.elgg-subtext {
		margin-right: 15px;
	}
}

.align-right{
	float: right;
}

/* Fluid width container that does not wrap floats */
.elgg-body,
.elgg-col-last {
	display: block;
	width: auto;
	word-wrap: break-word;
	overflow: visible;
}

.elgg-item-object-comment .elgg-image-block {
    padding: 0;
}

h1, h2, h3, h4, h5, h6 {
  color: #444;
  font-weight: normal;
}

.elgg-river-comments-tab{
	display: none
}

.elgg-filters-select-river select{
  background: url("<?php echo elgg_get_site_url();?>mod/time_theme_pro/graphics/arrow-down-01-16.png") no-repeat scroll right center #fff;
  border: 0 solid #ccc;
  overflow: hidden;
  width: 100px;
  font-size: 80%;
  -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}

.white{
	background: #ffffff;
}

.elgg-filters-select-river{
   margin: -40px 0 55px 0;
   position: relative;
}

.elgg-river-layout > .elgg-main > .elgg-filters-menu{
    height: 34px;
    margin: -5px 0 10px;
    border: 1px solid #dcdcdc;
    border-top: 0px;
}

.elgg-list-entity{
	padding: 10px 0;
}

.logo{
    margin: 0 auto;
    width: 200px
}

.elgg-topbar-new{
    background-color: #dc0d17;
    color: #fff;
    display: block;
    float: right;
    font-family: helvetica;
    font-size: 70%;
    margin: -9px 0 0 -5px;
    padding: 1px 3px;
    text-align: center;
    font-weight: bold;
    width: 15px;
    z-index: 99999999;
}

.thewire-post .elgg-content {
    margin: 20px 5px 10px;
}

.sliderbar-user-menu{
	margin:15px 20px;
	display: none;
}

.elgg-cover {
    background-size: 945px;
    display: block;
    height: 250px;
    width: 945px;
}

#profile-owner-block {
    float: left;
    height: 200px;
    margin-top: 20px;
    padding: 15px;
    color: #fff;
 }

.profile-details {
	padding: 0px
}

.elgg-profile-name{
	float: left;
	margin: 170px 0 0 10px;
}

#elgg-profile-actions{
  display: none;
  background: #000;
  bottom: 0;
  margin: 10px;
  min-width: 120px;
  position: absolute;
  right: 0;
}

#elgg-profile-config{
  position:absolute;
  bottom:0;
  right:0;
  margin: 15px;
}

#elgg-profile-config a{
  text-shadow: 1px 1px 2px #000;
  color: #fff;  
}

#elgg-profile-config a:hover{
  text-decoration: none;
  text-transform: none;
}

#elgg-profile-actions li a:hover{
  color: #fff;
}

.profile h2, .nickname{
	text-shadow: 1px 1px 2px #000;
	color: #fff;
}

.profile .nickname {
    font-size: 1.5em;
    line-height: 1.1em;
}


.elgg-action-a{
	color: #fff;
}

.theme-sandbox-main {
    float: right;
    min-height: 360px;
    padding: 20px;
    position: relative;
    width: 80%;
}

#profile-details-info{
  display: none
}

#profile-button{
  margin-bottom: 10px;
}

#profile-button a{
  color: #000;
  font-size: 120%;  
  padding: 5px;
}

#profile-button a:hover{
  text-decoration: none;
  text-transform: none;
}

.profile #profile-owner-block img {
width: 180px;
height: 180px;
}

@media (max-width: 820px) {
	.elgg-cover {
	    background-size: 800px auto;
	    height: 250px;
	    width: 105%;
	}

	#profile-owner-block {
    float: left;
    height: 100px;
    margin-top: 20px;
    padding: 10px;
	}

	.elgg-profile-name {
    float: left;
    margin: 170px 40px 0 10px;
	}

	.profile h2 {
    font-size: 2.0em;
    line-height: 1.1em;
	}

	.profile .nickname {
    font-size: 1.4em;
    line-height: 1.1em;
	}

}
@media (max-width: 600px) {
	.elgg-cover {
	    background-size: 600px auto;
	    height: 250px;
	    width: 100%;
	}

	#profile-owner-block {
    float: left;
    height: 100px;
    margin-top: 20px;
    padding: 10px;
	}

	.elgg-profile-name {
    float: left;
    margin: 10px 0 0 10px;
	}

	.profile h2 {
    font-size: 1.7em;
    line-height: 1.1em;
	}

	.profile .nickname {
    font-size: 1.2em;
    line-height: 1.1em;
	}

	.profile #profile-owner-block img {
    width: 100px;
    height: 100px;
	}	


}

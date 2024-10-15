	
<!doctype html>
<html>
<head>
<link rel="icon" href="http://demo.elixrlite.com/portal/Theme1/images/favicon.png" type="image/png" sizes="16x16">
<link rel="stylesheet" href="http://demo.elixrlite.com/portal/Theme1/css/buttondesign.css" type="text/css" media="screen" />
         <link rel="stylesheet" href="http://demo.elixrlite.com/portal/Theme1/css/bootstrap.min.css">
		   <meta charset="UTF-8">
		   <title id="pagetitle">Elixr Lite - Retail Billing SoftwareSALES</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <script src="http://demo.elixrlite.com/portal/Theme1/js/jquery.min.js"></script>
        <script src="http://demo.elixrlite.com/portal/Theme1/js/bootstrap.min.js"></script> 



<link rel="stylesheet" href="http://demo.elixrlite.com/portal/Theme1/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="http://demo.elixrlite.com/portal/Theme1/css/style_sheet.css" type="text/css" media="screen" />
<link rel="stylesheet" href="http://demo.elixrlite.com/portal/Theme1/css/pagination.css" type="text/css" media="screen" />

<script type="text/javascript" src="http://demo.elixrlite.com/portal/Theme1/js/default.js"></script>
<script type="text/javascript" src="http://demo.elixrlite.com/portal/Theme1/js/sorttable.js"></script>

<script src="http://demo.elixrlite.com/js/main.js"></script>

<link href="http://demo.elixrlite.com/portal/Theme1/css/san_themify-icons.css" rel="stylesheet" type="text/css" />
<link href="http://demo.elixrlite.com/portal/Theme1/css/san_ionicons.min.css" rel="stylesheet" type="text/css" />
<link href="http://demo.elixrlite.com/portal/Theme1/css/san_salesheader.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" media="all" href="http://demo.elixrlite.com/portal/Theme1/css/style_002.css">
<link rel="stylesheet" type="text/css" href="http://demo.elixrlite.com/portal/Theme1/css/superfish.css" media="screen">
<link href="http://demo.elixrlite.com/portal/Theme1/css/dropdown.css" media="screen" rel="stylesheet" type="text/css" />
<link href="http://demo.elixrlite.com/portal/Theme1/css/default.ultimate.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="http://demo.elixrlite.com/portal/Theme1/css/form.css" media="screen">
<link href="http://demo.elixrlite.com/portal/Theme1/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="http://demo.elixrlite.com/portal/Theme1/css/calendar/dhtmlgoodies_calendar.css" media="screen">
<link type="text/css" rel="stylesheet" href="http://demo.elixrlite.com/portal/Theme1/css/calendar/dhtmlgoodies_calendar.css" media="screen"></LINK>
<SCRIPT type="text/javascript" src="http://demo.elixrlite.com/portal/Theme1/css/calendar/dhtmlgoodies_calendar.js"></script>
        <link href="http://demo.elixrlite.com/portal/Theme1/css/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
 
        <link href="http://demo.elixrlite.com/portal/Theme1/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->

        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN Theme GLOBAL STYLES -->
        <link href="http://demo.elixrlite.com/portal/Theme1/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="http://demo.elixrlite.com/portal/Theme1/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <!-- END Theme GLOBAL STYLES -->
        <!-- BEGIN Theme LAYOUT STYLES -->
        <link href="http://demo.elixrlite.com/portal/Theme1/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="http://demo.elixrlite.com/portal/Theme1/css/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
		<link rel="stylesheet" type="text/css" media="screen" href="http://demo.elixrlite.com/portal/Theme1/css/jquery-ui-1.8.9.custom.css"/>
				
				<script type="text/javascript" src="http://demo.elixrlite.com/portal/Theme1/js/jquery-1.9.1.min.js"></script>
		<script>
		 var jq191 = $.noConflict();
		</script>
	<link rel="stylesheet" href="http://demo.elixrlite.com/portal/Theme1/css/select2.min.css" type="text/css" media="screen" />
	<script type="text/javascript" src="http://demo.elixrlite.com/portal/Theme1/js/select2.full.min.js"></script>
		<script type="text/javascript" src="http://demo.elixrlite.com/portal/Theme1/js/jquery-1.js"></script>
		
		<link rel="stylesheet" type="text/css" href="http://demo.elixrlite.com/portal/Theme1/css/flexigrid.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="http://demo.elixrlite.com/portal/Theme1/css/jquery.ui.combogrid.css"/>
<script type="text/javascript" src="http://demo.elixrlite.com/portal/Theme1/js/jquery-ui-1.8.9.custom.min.js"></script>
<script type="text/javascript" src="http://demo.elixrlite.com/portal/Theme1/js/jquery.ui.combogrid-1.6.2.js"></script>

<script type="text/javascript" src="http://demo.elixrlite.com/portal/Theme1/js/flexigrid.js"></script>
        <script>
            $(document).ready(function () {
              var trigger = $('.hamburger'),
                  overlay = $('.overlay'),
                 isClosed = false;
            
                // trigger.click(function () {
                //   hamburger_cross();      
                // });
            
                function hamburger_cross() {
            
                  if (isClosed == true) {          
                    overlay.hide();
                    trigger.removeClass('is-open');
                    trigger.addClass('is-closed');
                    isClosed = false;
                  } else {   
                    overlay.show();
                    trigger.removeClass('is-closed');
                    trigger.addClass('is-open');
                    isClosed = true;
                  }
              }
              
              $('[data-toggle="offcanvas"]').click(function () {
                    $('#wrapper').toggleClass('toggled');
	      });  
	      jq191('select.select2').select2()
            });
        </script>
		<link href="http://demo.elixrlite.com/portal/Theme1/css/fonts.css" rel="stylesheet">
		<script>

var themepath = 'http://demo.elixrlite.com/portal/';

</script>
<style>


body {
  position: relative;
  overflow-x: hidden;
  font: 12px arial!important;

}
.container-fluid
{
	height: 49px;
}
@media (min-width: 768px)
{
.navbar-nav>li>a {
    padding-top: 5px!important;
    padding-bottom: 12px!important;
    font-weight: bold;
	font-size:12px!important;
}
}
#titleheading
{
    text-align: center!important;
    padding: 4px!important;
    text-transform: uppercase!important;
    font-weight: bolder!important;
    
}
body,
html {
  height: 100%;


}
.nav .open > a {
  background-color: transparent;
}
.nav .open > a:hover {
  background-color: transparent;
}
.nav .open > a:focus {
  background-color: transparent;
}
/*-------------------------------*/
/*           Wrappers            */
/*-------------------------------*/
#wrapper {
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -webkit-transition: all 0.5s ease;
  padding-left: 0;
  transition: all 0.5s ease;
}
#wrapper.toggled {
  padding-left: 220px;
}
#wrapper.toggled #sidebar-wrapper {
  width: 220px;
}
#wrapper.toggled #page-content-wrapper {
  margin-right: -220px;
  /* position: absolute; */
}
#sidebar-wrapper {
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -webkit-transition: all 0.5s ease;
  background: #31373d;
  height: 100%;
  left: 220px;
  margin-left: -220px;
  overflow-x: hidden;
  overflow-y: auto;
  transition: all 0.5s ease;
  width: 0;
  z-index: 1000;
}
#sidebar-wrapper::-webkit-scrollbar {
  display: none;
}
#page-content-wrapper {
  /* padding-top: 40px; */
  width: 100%;
      background-image: linear-gradient(to bottom, #424949 100%, #424949 100%);
    border-color: #424949;
}
/*-------------------------------*/
/*     Sidebar nav styles        */
/*-------------------------------*/
.sidebar-nav {
  list-style: none;
  margin: 0;
  padding: 0;
  position: absolute;
  top: 0;
  width: 220px;
}
.sidebar-nav li {
  display: inline-block;
  line-height: 20px;
  position: relative;
  width: 100%;
}
.sidebar-nav li:before {
  background-color: #1c1c1c;
  content: '';
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  -webkit-transition: width 0.2s ease-in;
  transition: width 0.2s ease-in;
  width: 3px;
  z-index: -1;
}
.sidebar-nav li:first-child a {
  background-color: #1a1a1a;
  color: #ffffff;
}
.sidebar-nav li:nth-child(2):before {
  background-color: #402d5c;
}
.sidebar-nav li:nth-child(3):before {
  background-color: #4c366d;
}
.sidebar-nav li:nth-child(4):before {
  background-color: #583e7e;
}
.sidebar-nav li:nth-child(5):before {
  background-color: #64468f;
}
.sidebar-nav li:nth-child(6):before {
  background-color: #704fa0;
}
.sidebar-nav li:nth-child(7):before {
  background-color: #7c5aae;
}
.sidebar-nav li:nth-child(8):before {
  background-color: #8a6cb6;
}
.sidebar-nav li:nth-child(9):before {
  background-color: #987dbf;
}
.sidebar-nav li:hover:before {
  -webkit-transition: width 0.2s ease-in;
  transition: width 0.2s ease-in;
  width: 100%;
}
.sidebar-nav li a {
  color: #dddddd;
  display: block;
  padding: 10px 15px 10px 30px;
  text-decoration: none;
}
.sidebar-nav li.open:hover :before {
  -webkit-transition: width 0.2s ease-in;
  transition: width 0.2s ease-in;
  width: 100%;
}
.sidebar-nav .dropdown-menu {
  background-color: #222222;
  border-radius: 0;
  border: none;
  box-shadow: none;
  margin: 0;
  padding: 0;
  position: relative;
  width: 100%;
}
.sidebar-nav li a:hover,
.sidebar-nav li a:active,
.sidebar-nav li a:focus,
.sidebar-nav li.open a:hover,
.sidebar-nav li.open a:active,
.sidebar-nav li.open a:focus {
  background-color: transparent;
  color: #ffffff;
  text-decoration: none;
}
.sidebar-nav > .sidebar-brand {
  font-size: 20px;
  height: 65px;
  line-height: 44px;
}
/*-------------------------------*/
/*       Hamburger-Cross         */
/*-------------------------------*/
.hamburger {
    background: transparent;
    border: none;
    display: block;
    height: 29px;
    margin-left: 15px!important;
    position: absolute;
    top: 4px;
    width: 26px;
    z-index: 999;
}
.hamburger:hover {
  outline: none;
}
.hamburger:focus {
  outline: none;
}
.hamburger:active {
  outline: none;
}
.hamburger.is-closed:before {
  -webkit-transform: translate3d(0, 0, 0);
  -webkit-transition: all 0.35s ease-in-out;
  color: #ffffff;
  content: '';
  display: block;
  font-size: 14px;
  line-height: 32px;
  opacity: 0;
  text-align: center;
  width: 100px;
}
.hamburger.is-closed:hover :before {
  -webkit-transform: translate3d(-100px, 0, 0);
  -webkit-transition: all 0.35s ease-in-out;
  display: block;
  opacity: 1;
}
.hamburger.is-closed:hover .hamb-top {
  -webkit-transition: all 0.35s ease-in-out;
  top: 0;
}
.hamburger.is-closed:hover .hamb-bottom {
  -webkit-transition: all 0.35s ease-in-out;
  bottom: 0;
}
.hamburger.is-closed .hamb-top {
  -webkit-transition: all 0.35s ease-in-out;
  background-color: rgba(255, 255, 255, 0.7);
  top: 5px;
}
.hamburger.is-closed .hamb-middle {
  background-color: rgba(255, 255, 255, 0.7);
  margin-top: -2px;
  top: 50%;
}
.hamburger.is-closed .hamb-bottom {
  -webkit-transition: all 0.35s ease-in-out;
  background-color: rgba(255, 255, 255, 0.7);
  bottom: 5px;
}
.hamburger.is-closed .hamb-top,
.hamburger.is-closed .hamb-middle,
.hamburger.is-closed .hamb-bottom,
.hamburger.is-open .hamb-top,
.hamburger.is-open .hamb-middle,
.hamburger.is-open .hamb-bottom {
  height: 2px;
  left: 0;
  position: absolute;
  width: 100%;
}
.hamburger.is-open .hamb-top {
  -webkit-transform: rotate(45deg);
  -webkit-transition: -webkit-transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
  background-color: #fff;
  margin-top: -2px;
  top: 50%;
}
.hamburger.is-open .hamb-middle {
  background-color: #fff;
  display: none;
}
.hamburger.is-open .hamb-bottom {
  -webkit-transform: rotate(-45deg);
  -webkit-transition: -webkit-transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
  background-color: #fff;
  margin-top: -2px;
  top: 50%;
}
.hamburger.is-open:before {
  -webkit-transform: translate3d(0, 0, 0);
  -webkit-transition: all 0.35s ease-in-out;
  color: #ffffff;
  content: '';
  display: block;
  font-size: 14px;
  line-height: 32px;
  opacity: 0;
  text-align: center;
  width: 100px;
}
.hamburger.is-open:hover :before {
  -webkit-transform: translate3d(-100px, 0, 0);
  -webkit-transition: all 0.35s ease-in-out;
  display: block;
  opacity: 1;
}
/*-------------------------------*/
/*          Dark Overlay         */
/*-------------------------------*/
.overlay {
  position: fixed;
  display: none;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.4);
  z-index: 1;
}
/* SOME DEMO STYLES - NOT REQUIRED */
body,
html {
  
}
body h1,
body h2,
body h3,
body h4 {
  color: rgba(255, 255, 255, 0.9);
}
body p,
body blockquote {
  color: rgba(255, 255, 255, 0.7);
}
body a {
  color: rgba(255, 255, 255, 0.8);

}
body a:hover {
  color: #fff;
}
/* reset css */




.col-sm-2,.col-md-2
{
	font-size:15px!important;
}
article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section { display: block }

body { line-height: 1 }

ol, ul { list-style: none }

blockquote, q { quotes: none }

blockquote:before, blockquote:after, q:before, q:after {
  content: '';
  content: none
}

table {
  border-collapse: collapse;
  border-spacing: 0
}



a { text-decoration: none; }

/**
 * Hidden fallback
 */


/**
 * Styling navigation
 */

header {
  margin-right: auto;
  margin-left: auto;
  max-width: 22.5rem;
  margin-top:150px;
  box-shadow: 0 3px 12px rgba(0, 0, 0, 0.25);
}

/**
 * Styling top level items
 */
.navbar-nav>li>.dropdown-menu
{
	    min-width: 93%;
		left:0px!important;
}
.nav a, .nav label {
display: block;
    padding: 6px 0px;
    text-transform: capitalize;
	    text-decoration: none;
    color: #d3d3d3;
  
    font-size: 15px;
    font-weight: 400;
    -webkit-transition: all .25s ease-in;
    transition: all .25s ease-in;
}
.nav.set {
	  box-shadow: inset 0 -1px #ddd;
}

.nav a:focus, .nav a:hover, .nav label:focus, .nav label:hover {
  color: rgba(255, 255, 255, 0.5);
  background: none;
}

.nav label { cursor: pointer;padding-left:20px; }

/**
 * Styling first level lists items
 */

.group-list a, .group-list label {
  padding-left: 2rem;
 
}



/**
 * Styling second level list items
 */

.sub-group-list a, .sub-group-list label {
    padding-left: 1.8rem!important;
  
  background: none;
 
}


/**
 * Styling third level list items
 */

.sub-sub-group-list a, .sub-sub-group-list label {
  padding-left: 6rem;
  background: #454545;
  box-shadow: inset 0 -1px #575757;
}

.sub-sub-group-list a:focus, .sub-sub-group-list a:hover, .sub-sub-group-list label:focus, .sub-sub-group-list label:hover { background: #333333; }

/**
 * Hide nested lists
 */

.group-list, .sub-group-list, .sub-sub-group-list {

  max-height: 0;
  overflow: hidden;
  -webkit-transition: max-height .5s ease-in-out;
  transition: max-height .5s ease-in-out;
}

.nav__list input[type=checkbox]:checked + label + ul { /* reset the height when checkbox is checked */
max-height: 1000px; }

/**
 * Rotating chevron icon
 */

label > span {

}

.nav__list input[type=checkbox]:checked + label > span {
  -webkit-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  transform: rotate(90deg);
}
.nav>li>a:focus, .nav>li>a:hover
{
	
}
.navbar-right {
    float: right!important;
 
}
 .btn-label {    position: relative;
    left: -11px;
    display: inline-block;
    padding: 4px 9px;
    background: rgba(0,0,0,0.15);
    border-radius: 3px 0 0 3px;}
.btn-labeled {padding-top: 0;padding-bottom: 0;}
.btn { margin-bottom:10px; }
.btn:not(.md-skip) {
    font-size: 12px;
    transition: box-shadow .28s cubic-bezier(.4,0,.2,1);
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -ms-border-radius: 2px;
    -o-border-radius: 2px;
    border-radius: 2px;
    overflow: hidden;
    position: relative;
    user-select: none;
 
}
.alert-success {
    color: #3c763d!important;
    background-color: #dff0d8!important;
    border-color: #d6e9c6!important;
}
.alert-warning {
    color: #8a6d3b!important;
    background-color: #fcf8e3!important;
    border-color: #faebcc!important;
}
.alert-danger {
    color: #a94442!important;
    background-color: #f2dede!important;
    border-color: #ebccd1!important;
}
.onterms
{
	padding-left: 0px;
    padding-right: 3px;
}
input[type=search]::-webkit-search-cancel-button {
    -webkit-appearance: searchfield-cancel-button;
}
</style>  
<script>
var basepath = 'http://demo.elixrlite.com/';
</script>      
</head>
<link href="http://demo.elixrlite.com/portal/Theme1/css/sticky.css" rel="stylesheet" type="text/css">
<body>
     <div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top nav" id="sidebar-wrapper" role="navigation">
		<img src="../../../../Theme/company/logo.png" style="padding: 10px;width: 200px;">
         <link rel="stylesheet" href="http://demo.elixrlite.com/portal/Theme1/css/ti.css" type="text/css" media="screen" />
<link rel="stylesheet" href="http://demo.elixrlite.com/portal/Theme1/css/themify-icons.css" type="text/css" media="screen" />
<style>
.icon
{
	padding-right: 10px;
    font-size: 16px;
}
.group-list
{
	margin:2px!important;
	padding-left: 1.8rem!important;
}
.sub-group-list
{
	margin:2px!important;
}
.rightarrow
{
	font-size:10px;
}
.nav__list label:hover
{
	background: #3f4c61;
    color: #FFF;
	border-left:3px solid #fff;
}
.sub-group-list label:hover
{
	background: #3f4c61!important;
    color: #FFF;
	border-left:3px solid #fff;
}
.logout-btn a.link-btn {
    background: #f9f9f9 !important;
    display: flex;
    max-width: 160px;
    margin: 0 auto 10px;
    border-radius: 5px;
	align-items:center;
    justify-content: center;
    padding: 8px;
    font-weight: 600;
	color:#e7505a;
}
.logout-btn label:hover{
	border:0;
}
</style>
<ul class="nav__list" style="margin-left:0px; margin-right: 0px;">
		<li	class="logout-btn">
			<a class="link-btn" href="http://demo.elixrlite.com/logout.php" id="prodgroup">
			<input id="sub-group-2" type="checkbox" hidden="">
			<label for="sub-group-2" style="background:none;display:flex;color:#e7505a;align-items:center;padding:0;">
			<i class="icon ti-lock"  style="padding-right: 10px;font-weight:600;"></i>
		</label>Log-out</a>
		</li>
         <li>
            <input id="group-p" type="checkbox" hidden />
			<label for="group-p" style="text-transform:capitalize;"><i class="icon ti-user"  style="    padding-right: 10px;"></i>admin<i class="icon ti-angle-right rightarrow" style="float:right;padding-top: 5px;"></i></span></label>
         
            <ul class="sub-group-list" style="background:none;margin-bottom:10px;">
			
			<li>
				<input id="sub-group-1" type="checkbox" hidden="">
            <label for="sub-group-1" style="padding-left:0px;background:none;"><a style="
    padding-left: 0px;
    box-shadow: none;
    padding-top: 0px;
	padding-bottom: 0px;
" href="http://demo.elixrlite.com/profile.php" id="prodgroup">Profile</a></label>
</li>
<li>
				<input id="sub-group-2" type="checkbox" hidden="">
            <label for="sub-group-2" style="padding-left:0px;background:none;"><a style="
    padding-left: 0px;
    box-shadow: none;
    padding-top: 0px;
	padding-bottom: 0px;
" href="http://demo.elixrlite.com/change_pass.php" id="prodgroup">Change Password</a></label>
</li>

<li>
				<input id="sub-group-2" type="checkbox" hidden="">
            <label for="sub-group-2" style="padding-left:0px;background:none;"><a style="
    padding-left: 0px;
    box-shadow: none;
    padding-top: 0px;
	padding-bottom: 0px;
" href="http://demo.elixrlite.com/logout.php" id="prodgroup">Sign-out</a></label>
</li>
		
             
             
            </ul>
          
     
      </li> 
		  	
            
      <li>
        
	  		
		   <input id="group-1" type="checkbox" hidden="">
		
		
       


         <label for="group-1"><a style="
    padding-left: 0px;
    box-shadow: none;
    padding-top: 0px;
	padding-bottom: 0px;
" href='http://demo.elixrlite.com/portal/modules/dashboard/home.php' id="#"><!--<img src="http://demo.elixrlite.com/portal/Theme1/resources/icons/<i class="icon ti-home"></i>" style="    padding-right: 10px;width:25px;">-->

<i class="icon ti-home"></i>Dashboard</a></label>



		
		    <ul class="group-list">
				
		</li>
         <!-- <li>
            <input id="sub-group-1" type="checkbox" hidden />
            <label for="sub-group-1"><span class="fa fa-angle-right"></span> Second level</label>
            <ul class="sub-group-list">
              <li><a href="#">2nd level nav item</a></li>
              <li><a href="#">2nd level nav item</a></li>
              <li><a href="#">2nd level nav item</a></li>
             
            </ul>-->
          </li>
        </ul>
      </li>
				
            
      <li>
        
	        


	  <input id="group-2" type="checkbox" hidden="">
		
		
        <label for="group-2"><!--<img src="http://demo.elixrlite.com/portal/Theme1/resources/icons/<i class="icon ti-server"></i>" style="    padding-right: 10px;width:25px;">-->
		
		<i class="icon ti-server"></i>		Items<i class="icon ti-angle-right rightarrow" style="float:right;padding-top: 5px;"></i></label>    <ul class="group-list">
			
		<li>
				<input id="sub-group-21" type="checkbox" hidden />
            <label for="sub-group-21"><a style="
    padding-left: 0px;
    box-shadow: none;
    padding-top: 0px;
	padding-bottom: 0px;
"  href='http://demo.elixrlite.com/portal/modules/product/product_details.php?menu_rootid=2&submenu_rootid=22' id="1"> Products [Add/Edit]</a></label>
            
		

				
	
	
	

							
						
				
		<li>
				<input id="sub-group-22" type="checkbox" hidden />
            <label for="sub-group-22"><a style="
    padding-left: 0px;
    box-shadow: none;
    padding-top: 0px;
	padding-bottom: 0px;
"  href='http://demo.elixrlite.com/product.php?tab=prodgroup&menu_rootid=2&submenu_rootid=17' id="prodgroup"> Product Category</a></label>
            
		

				
	
	
	

							
						
				
		<li>
				<input id="sub-group-23" type="checkbox" hidden />
            <label for="sub-group-23"><a style="
    padding-left: 0px;
    box-shadow: none;
    padding-top: 0px;
	padding-bottom: 0px;
"  href='http://demo.elixrlite.com/product.php?tab=prodcat&menu_rootid=2&submenu_rootid=182' id="#"> Sub Category</a></label>
            
		

				
	
	
	

							
						
				
		<li>
				<input id="sub-group-24" type="checkbox" hidden />
            <label for="sub-group-24"><a style="
    padding-left: 0px;
    box-shadow: none;
    padding-top: 0px;
	padding-bottom: 0px;
"  href='http://demo.elixrlite.com/product.php?tab=prodmfr&menu_rootid=2&submenu_rootid=19' id="prodmfr"> Brand</a></label>
            
		

				
	
	
	

							
						
				
		<li>
				<input id="sub-group-26" type="checkbox" hidden />
            <label for="sub-group-26"><a style="
    padding-left: 0px;
    box-shadow: none;
    padding-top: 0px;
	padding-bottom: 0px;
"  href='http://demo.elixrlite.com/product.php?tab=unit&menu_rootid=2&submenu_rootid=20' id="unit"> Unit</a></label>
            
		

				
	
	
	

							
						
				
		<li>
				
		 		<input id="sub-group-27" type="checkbox" hidden />
            <label for="sub-group-27" ><i class="icon ti-angle-right rightarrow" style="float:right;padding-top:5px;"></i> Tax</label>
		
		
				
	
	
	

		<ul class='sub-group-list'>					<li><a href="http://demo.elixrlite.com/tax.php?tab=tax&menu_rootid=2&submenu_rootid=201&submenu_id=21" id="tax">GST_TAX</a></li>
						
		</ul>				
					
		</li>
         <!-- <li>
            <input id="sub-group-1" type="checkbox" hidden />
            <label for="sub-group-1"><span class="fa fa-angle-right"></span> Second level</label>
            <ul class="sub-group-list">
              <li><a href="#">2nd level nav item</a></li>
              <li><a href="#">2nd level nav item</a></li>
              <li><a href="#">2nd level nav item</a></li>
             
            </ul>-->
          </li>
        </ul>
      </li>
				
            
      <li>
        
	        


	  <input id="group-3" type="checkbox" hidden="">
		
		
        <label for="group-3"><!--<img src="http://demo.elixrlite.com/portal/Theme1/resources/icons/<i class="icon ti-id-badge"></i>" style="    padding-right: 10px;width:25px;">-->
		
		<i class="icon ti-id-badge"></i>		Accounts<i class="icon ti-angle-right rightarrow" style="float:right;padding-top: 5px;"></i></label>    <ul class="group-list">
			
		<li>
				<input id="sub-group-32" type="checkbox" hidden />
            <label for="sub-group-32"><a style="
    padding-left: 0px;
    box-shadow: none;
    padding-top: 0px;
	padding-bottom: 0px;
"  href='http://demo.elixrlite.com/san_payment_mode.php?menu_rootid=3&submenu_rootid=200' id="#"> Payment Modes</a></label>
            
		

				
	
	
	

							
						
				
		<li>
				<input id="sub-group-33" type="checkbox" hidden />
            <label for="sub-group-33"><a style="
    padding-left: 0px;
    box-shadow: none;
    padding-top: 0px;
	padding-bottom: 0px;
"  href='http://demo.elixrlite.com/portal/modules/payment/payment.php?menu_rootid=3&submenu_rootid=146' id="1"> Payables</a></label>
            
		

				
	
	
	

							
						
				
		<li>
				<input id="sub-group-34" type="checkbox" hidden />
            <label for="sub-group-34"><a style="
    padding-left: 0px;
    box-shadow: none;
    padding-top: 0px;
	padding-bottom: 0px;
"  href='http://demo.elixrlite.com/portal/modules/receipt/receipt.php?menu_rootid=3&submenu_rootid=120' id="Sales Receipt"> Receivables</a></label>
            
		

				
	
	
	

							
						
					
		</li>
         <!-- <li>
            <input id="sub-group-1" type="checkbox" hidden />
            <label for="sub-group-1"><span class="fa fa-angle-right"></span> Second level</label>
            <ul class="sub-group-list">
              <li><a href="#">2nd level nav item</a></li>
              <li><a href="#">2nd level nav item</a></li>
              <li><a href="#">2nd level nav item</a></li>
             
            </ul>-->
          </li>
        </ul>
      </li>
				
            
      <li>
        
	        


	  <input id="group-5" type="checkbox" hidden="">
		
		
        <label for="group-5"><!--<img src="http://demo.elixrlite.com/portal/Theme1/resources/icons/<i class="icon ti-user"></i>" style="    padding-right: 10px;width:25px;">-->
		
		<i class="icon ti-user"></i>		Contacts<i class="icon ti-angle-right rightarrow" style="float:right;padding-top: 5px;"></i></label>    <ul class="group-list">
			
		<li>
				<input id="sub-group-51" type="checkbox" hidden />
            <label for="sub-group-51"><a style="
    padding-left: 0px;
    box-shadow: none;
    padding-top: 0px;
	padding-bottom: 0px;
"  href='http://demo.elixrlite.com/portal/modules/ledger/ledger.php?type=13&menu_rootid=24&submenu_rootid=204' id="#"> Suppliers</a></label>
            
		

				
	
	
	

							
						
				
		<li>
				<input id="sub-group-52" type="checkbox" hidden />
            <label for="sub-group-52"><a style="
    padding-left: 0px;
    box-shadow: none;
    padding-top: 0px;
	padding-bottom: 0px;
"  href='http://demo.elixrlite.com/portal/modules/ledger/ledger.php?type=9&menu_rootid=24&submenu_rootid=205' id="#"> Customers</a></label>
            
		

				
	
	
	

							
						
					
		</li>
         <!-- <li>
            <input id="sub-group-1" type="checkbox" hidden />
            <label for="sub-group-1"><span class="fa fa-angle-right"></span> Second level</label>
            <ul class="sub-group-list">
              <li><a href="#">2nd level nav item</a></li>
              <li><a href="#">2nd level nav item</a></li>
              <li><a href="#">2nd level nav item</a></li>
             
            </ul>-->
          </li>
        </ul>
      </li>
				
            
      <li>
        
	        


	  <input id="group-6" type="checkbox" hidden="">
		
		
        <label for="group-6"><!--<img src="http://demo.elixrlite.com/portal/Theme1/resources/icons/<i class="icon ti-bag"></i>" style="    padding-right: 10px;width:25px;">-->
		
		<i class="icon ti-bag"></i>		Purchase<i class="icon ti-angle-right rightarrow" style="float:right;padding-top: 5px;"></i></label>    <ul class="group-list">
			
		<li>
				<input id="sub-group-61" type="checkbox" hidden />
            <label for="sub-group-61"><a style="
    padding-left: 0px;
    box-shadow: none;
    padding-top: 0px;
	padding-bottom: 0px;
"  href='http://demo.elixrlite.com/opening_stock.php?menu_rootid=5&submenu_rootid=66' id="openstk"> Opening Stock Entry</a></label>
            
		

				
	
	
	

							
						
				
		<li>
				<input id="sub-group-62" type="checkbox" hidden />
            <label for="sub-group-62"><a style="
    padding-left: 0px;
    box-shadow: none;
    padding-top: 0px;
	padding-bottom: 0px;
"  href='http://demo.elixrlite.com/mrn_entry.php?menu_rootid=5&submenu_rootid=27' id="mrn_ent"> Purchase Entry MRN</a></label>
            
		

				
	
	
	

							
						
				
		<li>
				<input id="sub-group-63" type="checkbox" hidden />
            <label for="sub-group-63"><a style="
    padding-left: 0px;
    box-shadow: none;
    padding-top: 0px;
	padding-bottom: 0px;
"  href='http://demo.elixrlite.com/mrn_return.php?menu_rootid=5&submenu_rootid=37' id="mrr"> Purchase  Return (MRR)</a></label>
            
		

				
	
	
	

							
						
				
		<li>
				<input id="sub-group-64" type="checkbox" hidden />
            <label for="sub-group-64"><a style="
    padding-left: 0px;
    box-shadow: none;
    padding-top: 0px;
	padding-bottom: 0px;
"  href='http://demo.elixrlite.com/ratechange_barcode_view.php?menu_rootid=5&submenu_rootid=128' id="barcode"> Barcode Print</a></label>
            
		

				
	
	
	

							
						
					
		</li>
         <!-- <li>
            <input id="sub-group-1" type="checkbox" hidden />
            <label for="sub-group-1"><span class="fa fa-angle-right"></span> Second level</label>
            <ul class="sub-group-list">
              <li><a href="#">2nd level nav item</a></li>
              <li><a href="#">2nd level nav item</a></li>
              <li><a href="#">2nd level nav item</a></li>
             
            </ul>-->
          </li>
        </ul>
      </li>
				
            
      <li>
        
	        


	  <input id="group-8" type="checkbox" hidden="">
		
		
        <label for="group-8"><!--<img src="http://demo.elixrlite.com/portal/Theme1/resources/icons/<i class="icon ti-write"></i>" style="    padding-right: 10px;width:25px;">-->
		
		<i class="icon ti-write"></i>		Sales<i class="icon ti-angle-right rightarrow" style="float:right;padding-top: 5px;"></i></label>    <ul class="group-list">
			
		<li>
				<input id="sub-group-81" type="checkbox" hidden />
            <label for="sub-group-81"><a style="
    padding-left: 0px;
    box-shadow: none;
    padding-top: 0px;
	padding-bottom: 0px;
"  href='http://demo.elixrlite.com/portal/modules/sales/pos/sales.php?menu_rootid=27&submenu_rootid=209&menu_rootid=6&submenu_rootid=105' id="issue"> Sales List</a></label>
            
		

				
	
	
	

							
						
				
		<li>
				<input id="sub-group-83" type="checkbox" hidden />
            <label for="sub-group-83"><a style="
    padding-left: 0px;
    box-shadow: none;
    padding-top: 0px;
	padding-bottom: 0px;
"  href='http://demo.elixrlite.com/sales_return.php?menu_rootid=6&submenu_rootid=109' id="2"> Sales Return</a></label>
            
		

				
	
	
	

							
						
					
		</li>
         <!-- <li>
            <input id="sub-group-1" type="checkbox" hidden />
            <label for="sub-group-1"><span class="fa fa-angle-right"></span> Second level</label>
            <ul class="sub-group-list">
              <li><a href="#">2nd level nav item</a></li>
              <li><a href="#">2nd level nav item</a></li>
              <li><a href="#">2nd level nav item</a></li>
             
            </ul>-->
          </li>
        </ul>
      </li>
				
            
      <li>
        
	        


	  <input id="group-10" type="checkbox" hidden="">
		
		
        <label for="group-10"><!--<img src="http://demo.elixrlite.com/portal/Theme1/resources/icons/<i class="icon ti-bar-chart"></i>" style="    padding-right: 10px;width:25px;">-->
		
		<i class="icon ti-bar-chart"></i>		Reports<i class="icon ti-angle-right rightarrow" style="float:right;padding-top: 5px;"></i></label>    <ul class="group-list">
			
		<li>
				<input id="sub-group-101" type="checkbox" hidden />
            <label for="sub-group-101"><a style="
    padding-left: 0px;
    box-shadow: none;
    padding-top: 0px;
	padding-bottom: 0px;
"  href='http://demo.elixrlite.com/purchase_report.php?menu_rootid=9&submenu_rootid=113' id="purchase report"> Purchase Report</a></label>
            
		

				
	
	
	

							
						
				
		<li>
				<input id="sub-group-102" type="checkbox" hidden />
            <label for="sub-group-102"><a style="
    padding-left: 0px;
    box-shadow: none;
    padding-top: 0px;
	padding-bottom: 0px;
"  href='http://demo.elixrlite.com/purchase_ret_report.php?menu_rootid=9&submenu_rootid=119' id="purchase return report"> Purchase Return Report</a></label>
            
		

				
	
	
	

							
						
				
		<li>
				<input id="sub-group-103" type="checkbox" hidden />
            <label for="sub-group-103"><a style="
    padding-left: 0px;
    box-shadow: none;
    padding-top: 0px;
	padding-bottom: 0px;
"  href='http://demo.elixrlite.com/sales_report.php?menu_rootid=9&submenu_rootid=115' id="sales report"> Sales Report</a></label>
            
		

				
	
	
	

							
						
				
		<li>
				<input id="sub-group-104" type="checkbox" hidden />
            <label for="sub-group-104"><a style="
    padding-left: 0px;
    box-shadow: none;
    padding-top: 0px;
	padding-bottom: 0px;
"  href='http://demo.elixrlite.com/sales_ret_report.php?menu_rootid=9&submenu_rootid=116' id="sales return report"> Sales Return Report</a></label>
            
		

				
	
	
	

							
						
				
		<li>
				
		 		<input id="sub-group-105" type="checkbox" hidden />
            <label for="sub-group-105" ><i class="icon ti-angle-right rightarrow" style="float:right;padding-top:5px;"></i> Stock Report</label>
		
		
				
	
	
	

		<ul class='sub-group-list'>					<li><a href="http://demo.elixrlite.com/godown_report.php?menu_rootid=9&submenu_rootid=117&submenu_id=125" id="godown_report">Godown Stock Report</a></li>
						<li><a href="http://demo.elixrlite.com/stores_report.php?menu_rootid=9&submenu_rootid=117&submenu_id=126" id="stores_report">Store Stock Report</a></li>
						<li><a href="http://demo.elixrlite.com/stock_summary.php?menu_rootid=9&submenu_rootid=117&submenu_id=166" id="#">Stock Summary</a></li>
						
		</ul>				
				
		<li>
				<input id="sub-group-106" type="checkbox" hidden />
            <label for="sub-group-106"><a style="
    padding-left: 0px;
    box-shadow: none;
    padding-top: 0px;
	padding-bottom: 0px;
"  href='http://demo.elixrlite.com/product_profit_report.php?menu_rootid=9&submenu_rootid=136' id="prod_profit_report"> Product Profit Report</a></label>
            
		

				
	
	
	

							
						
				
		<li>
				
		 		<input id="sub-group-1010" type="checkbox" hidden />
            <label for="sub-group-1010" ><i class="icon ti-angle-right rightarrow" style="float:right;padding-top:5px;"></i> Accounts</label>
		
		
				
	
	
	

		<ul class='sub-group-list'>					<li><a href="http://demo.elixrlite.com/creditor_report.php?menu_rootid=9&submenu_rootid=167&submenu_id=169" id="#">Supplier Payment Entry Report</a></li>
						<li><a href="http://demo.elixrlite.com/debitors_report.php?menu_rootid=9&submenu_rootid=167&submenu_id=168" id="#">Customer Receipt  Report</a></li>
						<li><a href="http://demo.elixrlite.com/outstanding_report.php?menu_rootid=9&submenu_rootid=167&submenu_id=170" id="#">Customer outstanding report</a></li>
						<li><a href="http://demo.elixrlite.com/purchase_outstanding.php?menu_rootid=9&submenu_rootid=167&submenu_id=171" id="#">Purchase Outstanding</a></li>
						
		</ul>				
				
		<li>
				<input id="sub-group-1011" type="checkbox" hidden />
            <label for="sub-group-1011"><a style="
    padding-left: 0px;
    box-shadow: none;
    padding-top: 0px;
	padding-bottom: 0px;
"  href='http://demo.elixrlite.com/expiry_report.php?menu_rootid=9&submenu_rootid=131' id="expiry"> Expiry Report</a></label>
            
		

				
	
	
	

							
						
				
		<li>
				<input id="sub-group-1012" type="checkbox" hidden />
            <label for="sub-group-1012"><a style="
    padding-left: 0px;
    box-shadow: none;
    padding-top: 0px;
	padding-bottom: 0px;
"  href='http://demo.elixrlite.com/product_list_page.php?menu_rootid=9&submenu_rootid=132' id="reorder_report"> Product List Report</a></label>
            
		

				
	
	
	

							
						
					
		</li>
         <!-- <li>
            <input id="sub-group-1" type="checkbox" hidden />
            <label for="sub-group-1"><span class="fa fa-angle-right"></span> Second level</label>
            <ul class="sub-group-list">
              <li><a href="#">2nd level nav item</a></li>
              <li><a href="#">2nd level nav item</a></li>
              <li><a href="#">2nd level nav item</a></li>
             
            </ul>-->
          </li>
        </ul>
      </li>
				
            
      <li>
        
	        


	  <input id="group-11" type="checkbox" hidden="">
		
		
        <label for="group-11"><!--<img src="http://demo.elixrlite.com/portal/Theme1/resources/icons/<i class="icon ti-cloud-down"></i>" style="    padding-right: 10px;width:25px;">-->
		
		<i class="icon ti-cloud-down"></i>		Gst Reports<i class="icon ti-angle-right rightarrow" style="float:right;padding-top: 5px;"></i></label>    <ul class="group-list">
			
		<li>
				
		 		<input id="sub-group-111" type="checkbox" hidden />
            <label for="sub-group-111" ><i class="icon ti-angle-right rightarrow" style="float:right;padding-top:5px;"></i> Purchase Annexure 1A</label>
		
		
				
	
	
	

		<ul class='sub-group-list'>					<li><a href="http://demo.elixrlite.com/gst_supplierwise_1A.php?menu_rootid=10&submenu_rootid=149&submenu_id=153" id="#">Supplierwise (GSTIN)_1A</a></li>
						<li><a href="http://demo.elixrlite.com/gst_productwise_1A.php?menu_rootid=10&submenu_rootid=149&submenu_id=154" id="#">Productwise (HSN)_1A</a></li>
						
		</ul>				
				
		<li>
				
		 		<input id="sub-group-112" type="checkbox" hidden />
            <label for="sub-group-112" ><i class="icon ti-angle-right rightarrow" style="float:right;padding-top:5px;"></i> Purchase Return Annexure 2A</label>
		
		
				
	
	
	

		<ul class='sub-group-list'>					<li><a href="http://demo.elixrlite.com/gst_supplierwise_ret_1A.php?menu_rootid=10&submenu_rootid=150&submenu_id=164" id="#">Supplierwise (GSTIN)_1A</a></li>
						<li><a href="http://demo.elixrlite.com/gst_productwise_ret_1A.php?menu_rootid=10&submenu_rootid=150&submenu_id=165" id="#">Productwise (HSN)_1A</a></li>
						
		</ul>				
				
		<li>
				
		 		<input id="sub-group-113" type="checkbox" hidden />
            <label for="sub-group-113" ><i class="icon ti-angle-right rightarrow" style="float:right;padding-top:5px;"></i> Sales Annexure_1A</label>
		
		
				
	
	
	

		<ul class='sub-group-list'>					<li><a href="http://demo.elixrlite.com/gst_customerwise_2A.php?menu_rootid=10&submenu_rootid=151&submenu_id=160" id="#">Customerwise (GSTIN)_1A</a></li>
						<li><a href="http://demo.elixrlite.com/gst_productwise_2A.php?menu_rootid=10&submenu_rootid=151&submenu_id=161" id="#">Productwise (HSN)_2A</a></li>
						
		</ul>				
				
		<li>
				
		 		<input id="sub-group-114" type="checkbox" hidden />
            <label for="sub-group-114" ><i class="icon ti-angle-right rightarrow" style="float:right;padding-top:5px;"></i> Sales Return Annexure_2A</label>
		
		
				
	
	
	

		<ul class='sub-group-list'>					<li><a href="http://demo.elixrlite.com/gst_customerwise_ret_2A.php?menu_rootid=10&submenu_rootid=152&submenu_id=162" id="#">Customerwise (GSTIN)_2A</a></li>
						<li><a href="http://demo.elixrlite.com/gst_productwise_ret_2A.php?menu_rootid=10&submenu_rootid=152&submenu_id=163" id="#">Productwise (HSN)_2A</a></li>
						
		</ul>				
					
		</li>
         <!-- <li>
            <input id="sub-group-1" type="checkbox" hidden />
            <label for="sub-group-1"><span class="fa fa-angle-right"></span> Second level</label>
            <ul class="sub-group-list">
              <li><a href="#">2nd level nav item</a></li>
              <li><a href="#">2nd level nav item</a></li>
              <li><a href="#">2nd level nav item</a></li>
             
            </ul>-->
          </li>
        </ul>
      </li>
			

    </ul>	
        </nav>
        <!-- /#sidebar-wrapper -->
	

<div class="container-fluid" style="background-image: linear-gradient(to bottom, #424949 100%, #424949 100%);
    border-color: #424949;">
<div class="row" style="background: #424949;height:100% ">
<div class="col-md-12 col-sm-12" style="height:100%; display: flex; align-items: center;justify-content: space-between; ">
		<div class="col-md-1 col-sm-6" style="padding-left: 0px; width: 5%;padding-right: 0px;height: 100%;display: flex;align-items: center;    grid-gap: 45px;">
			<div class="navbar-header" >
				<!--<a class="navbar-brand" href="#" onclick="openNav(event)">
          <span class="glyphicon glyphicon-menu-hamburger orange" aria-hidden="true"></span>
        </a>
        <a class="navbar-brand"> <strong> store </strong></a>-->
        <div id="page-content-wrapper">
          <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas" style="margin-left:5px!important">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
          </button>
        </div>
    	</div>
		  <a href="http://demo.elixrlite.com/portal/modules/dashboard/home.php" style="max-height:28px;height:100%"><img src="http://demo.elixrlite.com/portal/Theme1/images/home.png"></a>
		  <!-- <h1 class="" id="titleheading" style="text-align:left!important;padding-left: 52px!important;"></h1>-->
		</div>
	      <style>
      .fa-bill:before{
        content:url(http://demo.elixrlite.com/portal/Theme1/images/invoice.png);
      }
      .fa-stock:before{
        content:url(http://demo.elixrlite.com/portal/Theme1/images/stock.png);
      }
      .fa-qty:before{
        content:url(http://demo.elixrlite.com/portal/Theme1/images/qty.png);
      }
    </style>
         <div class="col-md-2 col-sm-2 headerbox" style="width:12%;padding:0;">
      <i class="fa fa-calendar iconsheader" ></i>&nbsp;&nbsp;
      <span class="textheader" style="">Date : 
        <b><input type="date" class="text-input small-input" name="invoicedate_header" id="invoicedate_header" value="2024-09-30" style="max-width:50%;width:100%;border:0;background:transparent;max-height:20px" onchange="invoicedate_header_changed()" onfocus="this.showPicker()" /> <!-- onfocus="displayCalendar(document.mrn_ent.invoicedate,'dd-mm-yyyy',this)"  /--> </b>
      </span>
    </div>
    <div class="col-md-2 col-sm-2 headerbox" style="padding:0;width:13%;">
      <i class="fa fa-bill iconsheader" style="position: relative;top: 2px;"></i>&nbsp;&nbsp;<span class="textheader" style="">Bill No : <b><span class="textdetail" id="billnodisplay">1</span></b></span>
      <!--<label class="salesbillno"><img src="http://demo.elixrlite.com/portal/Theme1/images/invoice.png">&nbsp;&nbsp;Bill No</label>
      <label class="salesbilltext" id="billnodisplay">1</label>-->
    </div>
    <div class="col-md-1 col-sm-1 headerbox" style="padding:0;">
      <!--<label class="salesbillno">Stock</label>
      <label class="salesbilltext"><span id="stk_id" style="color: green;font-weight:  bold;">&nbsp;</span></label>-->
      <i class="fa fa-stock iconsheader" ></i>&nbsp;&nbsp;<span class="textheader" style="">Stock : <b><span class="textdetail" id="stk_id">&nbsp;</span></b></span>
    </div>
    <div class="col-md-1 col-sm-1 headerbox" style="padding:0;">
      <i class="fa fa-qty iconsheader" ></i>&nbsp;&nbsp;<span class="textheader" style="">Qty : <b><span class="textdetail" id="total_quantity"></span></b></span>
      <!--<label class="salesbillno">Qty</label>
      <label class="salesbilltext"><span id="total_quantity">&nbsp;</span></label>-->
    </div>
    <div class="col-md-2 col-sm-1 headerbox" style="padding:0;width:17%;">
      <span class="textheader">Credit Outstanding : <b><span class="textdetail" id="credit_outstanding"></span></b></span>
    </div>
    <div class="form-group col-md-3 col-sm-6 searchsales" style="display:flex;margin:0 !important;align-items:center;padding:0;">
      <a href="javascript(0)" data-toggle="modal" data-target="#myModal6" id='settings_icn' style="max-height:24px;"><img src="http://demo.elixrlite.com/portal/Theme1/images/settings.png" style="height: 24px;margin-top: 0px;"></a>
      <div class="input-group add-on sales-custom" style="width: 100%;margin-left:10px;">
        <select form="mrn_ent" name="sel_supplier_list" id="sel_supplier_list" class="text_customer choosesalescustomer select2" onchange="datalist(this.value);">
          <option value=''>Choose Customer</option>
                    <option value="3" form="mrn_ent">73052 29527 - MADHAV [433000.00]</option>
                  </select>
        <!--<button type="button" class="btn btn-labeled addedit"id="aoe_customer" data-toggle="modal" data-target="#myModal5">
          <span class="btn-label addeditlabel"><i class="fa fa-plus"></i></span>Add/Edit</button>-->
        <div class="input-group-btn" >
          <button class="btn btn-default salesbuttonpop"  data-toggle="modal" data-target="#myModal5" onclick="openaddpopup();"    type="button"><i class="fa fa-plus" style="color: #fff!important;"></i></button>
          <button class="btn btn-default salesbuttonpop" id="aoe_customer" data-toggle="modal" data-target="#myModal5" type="button" onclick="openeditpopup();" ><i class="fa fa-pencil" style=" color: #fff!important;"></i></button>
        </div>
      </div>
      <span class="required"></span>
      <input type='hidden'   name ="inclfn" id="inclfn" form="mrn_ent" value="0" ></span>
      <span style="color:#fff;display:none;">	 Qty : </span>
    </div>
    <div class="col-md-2 col-sm-6" style="padding-top: 3px;text-align:  center;top:7px;display:none;"></div>
    <div class="col-md-2 col-sm-3" style="padding-left: 0px;padding-right: 0px;color:#fff;display:none;"></div>
<style>
  .dropdown-menu>li>a {
    padding: 8px 8px!important;
  }
</style>
  </li>
</ul>
</div>
<!-- Page Content -->
<!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->
<script  src="http://demo.elixrlite.com/portal/Theme1/js/angular/angular.min.js">  </script>
<script src="http://demo.elixrlite.com/portal/Theme1/js/angular/lib/dirPagination.js"></script>
<script src="http://demo.elixrlite.com/portal/Theme1/js/angular/angular-sanitize.js"></script>
<script>
 function invoicedate_header_changed()
 {
  $('#invoicedate').val($('#invoicedate_header').val())
 }
</script>
 <script>
	
function taxcal(grossval,disc,cgstper,sgstper,sgstamt,discamt,srate,tax_typ,netqty,inv_type,igstper,cessper)
{	

	var cgstamt = 0, sgstamt = 0 , rte = 0,tax=0, igstamt = 0, cessamt = 0;
	cgstamt = (parseFloat(grossval) - parseFloat(disc))/100 * parseFloat(cgstper); 
	
	//alert(disc);
sgstamt = (parseFloat(grossval) - parseFloat(disc))/100 * parseFloat(sgstper);
igstamt = (parseFloat(grossval) - parseFloat(disc))/100 * parseFloat(igstper);  
cessamt = (parseFloat(grossval) - parseFloat(disc))/100 * parseFloat(cessper);  
cgstamt = parseFloat(cgstamt);//.toFixed(2);
sgstamt = parseFloat(sgstamt);//.toFixed(2);
cessamt = parseFloat(cessamt);//.toFixed(2);
//alert(cgstamt);
if(disc != 0){
	grossval = (parseFloat(grossval) - parseFloat(disc));
}
	if(tax_typ=='0')
			{
				srate=parseFloat(srate)*parseFloat(netqty);
				
			if(discamt!=0)
			{
				srate = parseFloat(srate)- parseFloat(disc);
				
			}
				
				
				tax = parseFloat(cgstper)+parseFloat(sgstper) + parseFloat(cessper);
	rte = parseFloat(srate)/(1+(parseFloat(tax)/100));


		cgstamt =  parseFloat(rte)*(parseFloat(cgstper)/100);
			
				cgstamt = cgstamt;//.toFixed(2);
	
			sgstamt =   parseFloat(rte)*(parseFloat(sgstper)/100);
			sgstamt = sgstamt;//.toFixed(2);

			cessamt =   parseFloat(rte)*(parseFloat(cessper)/100);
			cessamt = cessamt;//.toFixed(2);
		
			igstamt =   parseFloat(rte)*((parseFloat(igstper))/100);
				igstamt = igstamt;//.toFixed(2);	
				
				grossval = rte;//.toFixed(2);
			
		
			}
	
			if(inv_type == 0){
				igstamt = 0;
			}else{
				cgstamt = 0;
				sgstamt = 0;
			}
			//alert(cgstamt+'~'+sgstamt+'~'+igstamt);
			return tax+'~'+rte+'~'+cgstamt+'~'+sgstamt+'~'+grossval+'~'+igstamt+'~'+cessamt;
}


function purtax(cgst,sgst)
{
	var  cgst_total =0; sgst_total=0;
	if(cgst != "") {
			cgst_total = parseFloat(cgst_total) + parseFloat(cgst);
		}
		if(sgst != "") {
			sgst_total = parseFloat(sgst_total) + parseFloat(sgst);
		}

		return cgst_total+'~'+sgst_total;
	
}
</script>
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="confirm_modal" style="display:none;">
  <div class="modal-dialog confirmdialog modal-sm">
    <div class="modal-content">
      <div class="modal-header confirmheader">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title confirmtitle" id="myModalLabel">Information !</h4>
      </div>
      <div class="modal-body confirmbody">
	  <label id="confirm_title"></label><br/>
        <p id="confirm_body"> </p>
      </div>
      <div class="modal-footer confirmfooter">
        
		
		 <button type="button" class="button btn btn-success yesbut" id="modal-btn-si" data-dismiss='modal' onclick="return fn_dismiss(1);" /><span class="btn-label yeslabel"><i class="fa fa-check"></i></span>Yes</button>
		 <button name="reset" type="button" class="btn btn-labeled btn-danger nobut"  id="modal-btn-no" data-dismiss='modal' onclick="return fn_dismiss(2);">
<span class="btn-label nolabel" style=""><i class="fa fa-times" ></i></span>No</button>
		 
 
		
		
		
      </div>
    </div>
  </div>
</div>

  <button style="display: none;" type="button" class="btn btn-info btn-lg" id="btn_confirm" data-toggle="modal" data-target="#confirm_modal">Open Modal</button>

<script type="text/javascript">
  function fn_dismiss(a){
    if(a == 1){
      var sup = $("#sel_supplier_list").val();
      fn_clear_ledger();
      $("#ledger_name").val(sup);
      $("#aoe_customer").click();
      return false;
    }else{
      $("#sel_supplier_list").val("");
    }
  }
</script>
<style type="text/css">

</style><script>


function getweight()
{
	$.ajax({
		 type: 'POST',
		 url: 'fn_sales.php',
		 data:{
			type : 'getweight'
		},
		 success: function(msg){
			 //msg = msg.split('~');
			 if(msg>0)
			 {
			document.getElementById('qty_sing').value=msg.trim();
      //document.getElementById('qty'+ival).readOnly=true;
			document.getElementById("qty_sing").style.backgroundColor="lightgrey";
			//fn_qty(msg.trim(),ival);
			fn_qty_sing(msg.trim());
		}
			}
	});
	return false;
}



function fn_productname_sing(prddesc){
	//alert(prddesc+" "+ival);
	var bill_types = document.getElementById('bill_type1').value;
	var gdn_code = document.getElementById('sel_godown').value;
	var mem_card = '';
	var mem_id = '';
	//var mem_card = document.getElementById('mem_cardtype').value;
	//var mem_id = document.getElementById('mem_id').value;
	var pend_cnt = document.getElementById("pend_cnt").value; 
		
	var prdcod = document.getElementById("PCode_sing").value; 
	var bcode = document.getElementById("barcode_sing").value; 
	var comdisc = document.getElementById("common_discount").value;
	var Pro_type = document.getElementById("Pro_type_sing").value;
	var rate_type = document.getElementById("txt_rate_type").value;
	var enter_qty = "";
	var c=0;
	var prdcnt = 0,tprdcnt = 0;
	
	if(prdcod != '' || bcode != '' ) {
		if(prddesc == "")
		{
			row_clear_sing();
			return false;
		}
		else if(bill_types == 'PC' && mem_id == '')
		{
			row_clear_sing();
			document.getElementById('prdname_sing').value = '';
			alert_popup("Please Enter Member ID","RED",'mem_id');
			document.getElementById('mem_id').focus();
			return false;
		}
	
		if(pend_cnt == '') { pend_cnt = 0; } 
		pend_cnt = parseInt(pend_cnt) - parseInt(tprdcnt);
		$("#inclfn").val('1');
		if(c == 0)
		{
			$.ajax({	
				type: 'POST',
				url: 'fn_sales.php',
				data:{
					type : 'product_details',
					prdname : name,
					prdcod: prdcod,
					bcode: bcode,
					bill_types : bill_types,
					enter_qty : enter_qty,
					gdn_code: gdn_code,
					mem_card : mem_card,
					mem_id : mem_id,
					pend_cnt : pend_cnt,
					prdcnt : prdcnt,
					discount : comdisc,
					Pro_type : Pro_type,
					rate_type : rate_type,
				},
				success: function(msg){
				if(msg == 1){
					alert_popup("Invalid Item Description or Barcode","RED",'prdname_sing');
					document.getElementById('prdname_sing').focus();
					document.getElementById('prdname_sing').value = "";
					row_clear_sing();
					return false;			
				} else {
				   	$("#hid_inc").val('1');
					msg =msg.split('~');		
					//alert(msg[39]);
					if(msg[36] != 0){
						if(msg[4]>msg[5]){
							msg[4] = msg[5];
						}
					}
					document.getElementById('PCode_sing').value = msg[0];	    
					document.getElementById('prdname_sing').value = msg[1];	
					document.getElementById('uom_sing').value = msg[2];
					document.getElementById('hdnuom_sing').value = msg[2];	
					document.getElementById('batch_sing').value = msg[3];
					document.getElementById('hidqty_sing').value = msg[5];
					document.getElementById('hidqtytemp_sing').value = msg[5];
					document.getElementById('disc_sing').value = msg[6];
					document.getElementById('discamt_sing').value = msg[6];
					document.getElementById('p_price_sing').value = msg[7];
					document.getElementById('s_price_sing').value = msg[8]; 
					document.getElementById('mrp_sing').value = msg[9];
					document.getElementById('tot_price_sing').value = msg[10];
					//document.getElementById('tax_per'+ival).value = msg[11];
					//document.getElementById('tax_amt'+ival).value = msg[12];
					
					document.getElementById('valwithtax_sing').value = msg[13];
					document.getElementById('netvalue_sing').value = msg[13];
					
					document.getElementById('batchrecno_sing').value = msg[14];
					document.getElementById('discamt_sing').value = msg[15];
					document.getElementById('hid_discamt_sing').value = msg[15];
					document.getElementById('mop_sing').value = msg[16];
					//document.getElementById('taxtype'+ival).value = msg[17];
					document.getElementById('taxtypedesc_sing').value = msg[18];
					document.getElementById('costrate_sing').value = msg[19];
					document.getElementById('godown_sing').value = msg[20];
					document.getElementById('msp_sing').value = msg[21];
					document.getElementById('TotPV_sing').value = msg[22];
				
					document.getElementById('tax_typ_sing').value = msg[23];
					document.getElementById('barcode_sing').value = msg[24];
					document.getElementById('batch_sing').innerHTML=msg[25]; 
					document.getElementById('ismulti_sing').value=msg[26];
					document.getElementById('mrpo_sing').value=msg[28];
					document.getElementById('marginper_sing').value=msg[29];
					document.getElementById('saving_sing').value=msg[30];
					document.getElementById('Pro_type_sing').value=msg[36];
					document.getElementById('cgst_per_sing').value=msg[31];
					//document.getElementById('sub_cgst_per').innerHTML=msg[31];
					document.getElementById('sgst_per_sing').value=msg[32];
					//document.getElementById('sub_sgst_per').innerHTML=msg[32];
					//document.getElementById('igst_per'+ival).value=msg[33];
				    document.getElementById('cgst_amt_sing').value=msg[33];
					document.getElementById('sgst_amt_sing').value=msg[34];
					document.getElementById('taxdes_sing').value=msg[35];
					document.getElementById('igst_per_sing').value=msg[37];
					//document.getElementById('sub_cgst_per').innerHTML=msg[31];
					document.getElementById('cess_per_sing').value=msg[38];
					document.getElementById("choose_tax_sing").value=msg[17];
					$("#choose_batch").html(msg[39]);
					if(msg[26]==0 || $("#choose_batch").children().length<=1)
					{
					document.getElementById("batch_sing").disabled = true;
					document.getElementById("exp_dt_sing").disabled = true;
					document.getElementById("prod_dt_sing").disabled = true;
					if($('#Weight_machine').val() == 1){
						getweight_sing();
					}else{
						document.getElementById('qty_sing').value = msg[4];
						fn_qty_sing(msg[4]);
						var barcode_en = $('#hidbar').val();
						if(barcode_en == 1){
							$("#qty_sing").select();
						}else{
							$("#barcode_sing").focus();
						}
					}
					}
					else
					{
					document.getElementById("batch_sing").disabled = false;
					document.getElementById("exp_dt_sing").disabled = false;
					document.getElementById("prod_dt_sing").disabled = false;
					/*if($('#Weight_machine').val() == 1){
						getweight_sing();
					}*/
					document.getElementById('qty_sing').value = msg[4];
					$('#batch_modal_btn').click();
					setTimeout(fn_select, 200);
						
					}
						
					if(msg[5] != "") {
						document.getElementById("stk_id").style.display = "inline";
						document.getElementById("stk_id").innerHTML =parseInt(msg[5]);
					} else {
						document.getElementById("stk_id").innerHTML = "";
						document.getElementById("stk_id").style.display = "none";
					}
					
					hiddenprice = $('#hiddenprice').val();
				  }
				}
			  
			});
		}
		
	}
  return false;
  
}
function fn_select() {
    //alert("This is sample function");
    $('#bat_btn1').focus();
}

function getweight_sing(ival)
{
	//alert(123);
	$.ajax({
		 type: 'POST',
		 url: 'fn_sales.php',
		 data:{
			type : 'getweight'
		},
		 success: function(msg){
			 //msg = msg.split('~');
			 //alert(msg);
			 if(msg>0)
			 {
			document.getElementById('qty_sing').value=msg.trim();
     		//document.getElementById('qty'+ival).readOnly=true;
			document.getElementById("qty_sing").style.backgroundColor="lightgrey";
			fn_qty_sing(msg.trim());
			}
			}
	});
	return false;
}


function fn_qty_sing(qty) {
	var ival = 1;
	
	if(qty <= 0) {
		//alert("Enter the Quantity Greater than Zero");
		alert_popup("Enter the Quantity Greater than Zero","RED",'qty_sing');
		document.getElementById('qty_sing').value = "0";
		document.getElementById('qty_sing').select();
		return false;
	} else {
	var tmpval=0;
	if(document.getElementById('ismulti_sing').value=="1")
	{
	if(document.getElementById('batch_sing').value=="" || document.getElementById('batch_sing').value=="0")
	{
	//alert("Select Batch Number");
	alert_popup("Select Batch Number","RED",'qty_sing');
	document.getElementById('qty_sing').value = "";
	//document.getElementById('qty'+ival).select();
	return false;
	}
	}
		var netqty = 0;
		var hdqty = document.getElementById('hidqty_sing').value;
		var saluom = document.getElementById('hdnuom_sing').value;
	
		var cgstper = document.getElementById('cgst_per_sing').value;
		var sgstper = document.getElementById('sgst_per_sing').value;
		var discamt = document.getElementById('discamt_sing').value;
		netqty = parseFloat(qty,qty);

		var Pro_type = document.getElementById('Pro_type_sing').value;
			
		if(Pro_type!='0')
		{
		if(hdqty < netqty) {
			document.getElementById('qty_sing').value = "";
			qtyCalculation_sing('0');
			//alert("Quantity not Available");
			alert_popup("Quantity not Available","RED",'qty_sing');
			document.getElementById('qty_sing').select();
			return false;
		} else {
			qtyCalculation_sing(qty)
			//tmpval=parseInt(ival)+parseInt(1);
			//document.getElementById('mrp_sing').select();
			
		}
	}
	else
	{
		qtyCalculation_sing(qty)
		tmpval=parseInt(ival)+parseInt(1);

		/*if(document.querySelector("#mrp").readOnly) {
			document.getElementById('barcode_sing').focus();
		}else{
			document.getElementById('mrp_sing').select();
		}*/
		
	}
	
		}
	
}


function qtyCalculation_sing(qty) {
//alert(ival);
	var netqty = 0,disc=0, rte=0,tax = 0;
	var flat_dis_per = $("#common_discount").val();
	var hdqty = document.getElementById('hidqty_sing').value; 

	var saluom = document.getElementById('hdnuom_sing').value;
	//var taxper = document.getElementById('tax_per'+ival).value;
	var cgstper = document.getElementById('cgst_per_sing').value;

	var sgstper = document.getElementById('sgst_per_sing').value;
	var igstper = document.getElementById('igst_per_sing').value;
	var cessper = document.getElementById('cess_per_sing').value;
	var discamt = document.getElementById('hid_discamt_sing').value;
	var tax_typ = document.getElementById('tax_typ_sing').value;
	netqty = parseFloat(qty);
	//alert(netqty);
	disc=parseFloat(qty)*parseFloat(discamt);
	//alert(discamt);
	
	flat_dis=parseFloat(qty)*parseFloat(flat_dis_per);
	var srate = 0, freeval = 0, totqty = 0, grossval = 0, taxamt = 0, cgstamt = 0, sgstamt = 0 , valtax = 0;
				
	freeval = document.getElementById('free_sing').value;
	srate = document.getElementById('mrp_sing').value;

	if(freeval == "") {
		freeval = 0;
	}
	if(discamt == "") {
		discamt = 0;
	}
	
	totqty = parseFloat(netqty) + parseFloat(freeval); 
	grossval = parseFloat(netqty) * parseFloat(srate); 

	var taxtyp = $("#incl").val();
	 //alert(taxtyp);
		
	var inv_tpe_chk = $("#get_gst").attr("checked");
	if(!inv_tpe_chk){
		inv_tpe = 0;
	}else{
		inv_tpe = 1;
	}
	var totalcal = '';		
	var totalcal = taxcal(grossval,disc,cgstper,sgstper,sgstamt,discamt,srate,taxtyp,netqty,inv_tpe,igstper,cessper);	
	totalcal = totalcal.split('~');
	cgstamt= parseFloat(totalcal[2]);
	sgstamt= parseFloat(totalcal[3]);
	grossval = parseFloat(totalcal[4]);
	var igstamt = parseFloat(totalcal[5]);
	var cessamt = parseFloat(totalcal[6]);
	if(totalcal[5] == 0){
		var tot_taxamt =  parseFloat(cgstamt)+ parseFloat(sgstamt);
	}else{
		var tot_taxamt =  parseFloat(igstamt);
	}
	valtax = parseFloat(grossval) +parseFloat(tot_taxamt) +parseFloat(cessamt);
	document.getElementById('discamt_sing').value=disc.toFixed(3);
	document.getElementById('qty_sing').value = netqty.toFixed(3);
	document.getElementById('cgst_amt_sing').value = cgstamt;
	document.getElementById('sgst_amt_sing').value = sgstamt;
	document.getElementById('igst_amt_sing').value = igstamt;
	document.getElementById('cess_amt_sing').value = cessamt;
	cgstamt = parseFloat(cgstamt).toFixed(2);
	sgstamt = parseFloat(sgstamt).toFixed(2);
	cessamt = parseFloat(cessamt).toFixed(2);
	igstamt = parseFloat(igstamt).toFixed(2);
	document.getElementById('cgstspan').innerHTML='<span id="cgstvalue" style="padding-left:5px;color:blue;display:none;">CGST-'+cgstamt+'</span>';
	document.getElementById('sgstspan').innerHTML='<span id="sgstvalue" style="padding-left:7px;color:blue;display:none;">SGST-'+sgstamt+'</span>';
	document.getElementById('cessspan').innerHTML='<span id="cessvalue" style="padding-left:7px;color:blue;display:none;">CESS-'+cessamt+'</span>';
	document.getElementById('igstpan').innerHTML='<span id="igstvalue" style="padding-left:7px;color:blue;display:none;">IGST-'+igstamt+'</span>';
	document.getElementById('total_sing').value = totqty.toFixed(2);
	document.getElementById('tot_price_sing').value = grossval;
	document.getElementById('valwithtax_sing').value = valtax.toFixed(2);
	var scanning = document.getElementById('scanning').value;
	if(scanning==0)
	{

	}
	else
	{
		if($('#addrow').val() == 1){
			document.getElementById('prdname_sing').select();
		}else{
			document.getElementById('barcode_sing').select();
		}
		fn_addrow();
	}
}



function fn_discper_sing(disc) {
	var discamt = 0, netval = 0, valtax = 0;
	var mrp = $("#mrp_sing").val();
	discamt = parseFloat(mrp) * parseFloat(disc)/100;
	$("#hid_discamt_sing").val(discamt);	
	$("#discamt_sing").val(discamt);
	fn_qty_sing($("#qty_sing").val());
}

function fn_discamt_sing(discamt) {

	var disc = 0, netval = 0, valtax = 0;
	var mrp = $("#mrp_sing").val();
	disc = (parseFloat(discamt)*100)/parseFloat(mrp) ;
	$("#disc_sing").val(disc);
	$("#hid_discamt_sing").val(discamt);	
	fn_qty_sing($("#qty_sing").val());
}

function fn_addrow(){
	if($("#PCode_sing").val() != '' && $("#PCode_sing").val() != 0){
		var exist = 0;
		var hide_rows = $('#hiddenprice').val();
		var barcode = $('#barcode_sing').val();
		var pcode = $('#PCode_sing').val();
		var batch = $('#batch_sing').val();
		var qty = $("#qty_sing").val();
		var hidden_qty = $('#hidqty_sing').val();
		for(var i=1;i<=hide_rows;i++){
			var barcode_i = $('#barcode'+i).val();
			var pcode_i = $('#PCode'+i).val();
			var batch_i = $('#batch'+i).val();
			var qty_i = $("#qty"+i).val();
			if(barcode == null){
				barcode = '';
			}
			if(barcode_i == null){
				barcode_i = '';
			}
			if(pcode == null){
				pcode = '';
			}
			if(pcode_i == null){
				pcode_i = '';
			}
			if(batch == null){
				batch = '';
			}
			if(batch_i == null){
				batch_i = '';
			}
			barcode = barcode.trim();
			barcode_i = barcode_i.trim();
			pcode = pcode.trim();
			pcode_i = pcode_i.trim();
			batch = batch.trim();
			batch_i = batch_i.trim();
			if(barcode == ''){
				continue;
			}
			if(exist == 0){
				if((barcode ==barcode_i) && (pcode ==pcode_i) && (batch ==batch_i)){
					exist = 1;
					qty_i = parseFloat(qty_i)+parseFloat(qty);
					if(hidden_qty != ''){
						if(qty_i > hidden_qty){
							//alert("Qty Not Availables");
							alert_popup("Qty Not Availables","RED",'');
							row_clear_sing();
							continue;
						}
					}
					fn_qty_prod(qty_i,i);
					row_clear_sing();
					continue;
				}
			}
		}
		if(exist == 0){
			var batch_det = $("#batch_sing").val();
			//return false;
			var rows_num = $('#hiddenprice').val();
			$("#addImage").click();
			var ival = $("#hiddenprice").val();
			$('#sal_type'+ival).val($("#sal_type_sing").val());
			$('#barcode'+ival).val($("#barcode_sing").val());
			$('#hidbar'+ival).val($("#hidbar_sing").val());
			$('#PCode'+ival).val($("#PCode_sing").val());
			$('#Pro_type'+ival).val($("#Pro_type_sing").val());
			$('#prdname'+ival).val($("#prdname_sing").val());
			$('#item_note'+ival).val($("#item_note_sing").val());
			$('#uom'+ival).val($("#uom_sing").val());
			$('#hdnuom'+ival).val($("#hdnuom_sing").val());
			//$('#batch'+ival).html($("#batch_sing").html());
			$('#batch'+ival).val(batch_det);
			$('#expiry'+ival).val($("#expiry_sing").val());
			$('#godown'+ival).val($("#godown_sing").val());
			$('#ismulti'+ival).val($("#ismulti_sing").val());
			$('#prod_dt'+ival).val($("#prod_dt_sing").val());
			$('#mrpo'+ival).val($("#mrpo_sing").val());
			$('#exp_dt'+ival).val($("#exp_dt_sing").val());
			$('#ptr'+ival).val($("#ptr_sing").val());
			$('#s_price'+ival).val($("#s_price_sing").val());
			$('#mop'+ival).val($("#mop_sing").val());
			$('#msp'+ival).val($("#msp_sing").val());
			$('#mrp'+ival).val($("#mrp_sing").val());
			$('#marginper'+ival).val($("#marginper_sing").val());
			$('#saving'+ival).val($("#saving_sing").val());
			$('#TotPV'+ival).val($("#TotPV_sing").val());
			$('#qty'+ival).val($("#qty_sing").val());
			$('#hidqty'+ival).val($("#hidqty_sing").val());
			$('#hidqtytemp'+ival).val($("#hidqtytemp_sing").val());
			$('#free'+ival).val($("#free_sing").val());
			$('#total'+ival).val($("#total_sing").val());
			$('#disc'+ival).val($("#disc_sing").val());
			$('#discamt'+ival).val($("#discamt_sing").val());
			$('#hid_discamt'+ival).val($("#hid_discamt_sing").val());
			$('#p_price'+ival).val($("#p_price_sing").val());
			$('#margin'+ival).val($("#margin_sing").val());
			$('#taxtypedesc'+ival).val($("#taxtypedesc_sing").val());
			$('#costrate'+ival).val($("#costrate_sing").val());
			$('#choose_tax'+ival).html($("#choose_tax_sing").html());
			$('#choose_tax'+ival).val($("#choose_tax_sing").val());
			$('#cgst_per'+ival).val($("#cgst_per_sing").val());
			$('#cgst_amt'+ival).val($("#cgst_amt_sing").val());
			//$('#sub_cgst_per'+ival).html($("#sub_cgst_per").html());
			//$('#sub_cgst_amt'+ival).html($("#sub_cgst_amt").html());
			$('#sgst_per'+ival).val($("#sgst_per_sing").val());
			$('#sgst_amt'+ival).val($("#sgst_amt_sing").val());
			//$('#sub_sgst_per'+ival).html($("#sub_sgst_per").html());
			//$('#sub_sgst_amt'+ival).html($("#sub_sgst_amt").html());
			$('#tax_typ'+ival).val($("#tax_typ_sing").val());
			$('#taxdes'+ival).val($("#taxdes_sing").val());
			$('#igst_per'+ival).val($("#igst_per_sing").val());
			$('#igst_amt'+ival).val($("#igst_amt_sing").val());
			//$('#sub_igst_per'+ival).html($("#sub_igst_per").html());
			//$('#sub_igst_amt'+ival).html($("#sub_igst_amt").html());
			$("#cess_per"+ival).val($("#cess_per_sing").val());
			$("#cess_amt"+ival).val($("#cess_amt_sing").val());
			$('#sub_cess_per'+ival).html($("#sub_cess_per").html());
			$('#sub_cess_amt'+ival).html($("#sub_cess_amt").html());
			//$('#tax_amt'+ival).html($("#tax_amt_sing").html());
			//$('#tax_per'+ival).html($("#tax_per_sing").html());
			$('#valwithtax'+ival).val($("#valwithtax_sing").val());
			$('#tot_price'+ival).val($("#tot_price_sing").val());
			$('#netvalue'+ival).val($("#netvalue_sing").val());
			$('#dcno'+ival).val($("#dcno_sing").val());
			$('#dcdt'+ival).val($("#dcdt_sing").val());
			$('#dcsno'+ival).val($("#dcsno_sing").val());
			$('#batchrecno'+ival).val($("#batchrecno_sing").val());
			cgstamt = parseFloat($("#cgst_amt_sing").val()).toFixed(2);
			sgstamt = parseFloat($("#sgst_amt_sing").val()).toFixed(2);
			cessamt = parseFloat($("#cess_amt_sing").val()).toFixed(2);
			igstamt = parseFloat($("#igst_amt_sing").val()).toFixed(2);
			document.getElementById('cgstspan'+ival).innerHTML='<span id="cgstvalue" style="padding-left:5px;color:blue;">CGST-'+cgstamt+'</span>';
			document.getElementById('sgstspan'+ival).innerHTML='<span id="sgstvalue" style="padding-left:7px;color:blue;">SGST-'+sgstamt+'</span>';
			document.getElementById('cessspan'+ival).innerHTML='<span id="cessvalue" style="padding-left:7px;color:blue;">CESS-'+cessamt+'</span>';
			document.getElementById('igstspan'+ival).innerHTML='<span id="igstvalue" style="padding-left:7px;color:blue;">IGST-'+igstamt+'</span>';
			row_clear_sing();
			total_price();
			var barcode_en = $('#hidbar').val();
			if(barcode_en == 1){
				$("#prdname_sing").focus();
			}else{
				$("#barcode_sing").focus();
			}
			
		}
	}else{
		var barcode_en = $('#hidbar').val();
		if(barcode_en == 1){
			var nxt_prod = "prdname_sing";
		}else{
			var nxt_prod = "barcode_sing";
		}
		alert_popup("Please Scan <img src='../../../Theme1/images/barcode.png'	style='padding:0 2px;' width='18px'/> a Product or Enter Quantity","RED",nxt_prod);
	}
}

function row_clear_sing(){
	$("#choose_batch").html('');
	$("#igstvalue").html('');
	$("#cgstvalue").html('');
	$("#sgstvalue").html('');
	$("#cessvalue").html('');
	$("#sal_type_sing").val('');
	$("#barcode_sing").val('');
	$("#hidbar_sing").val('');
	$("#PCode_sing").val('');
	$("#Pro_type_sing").val('');
	$("#prdname_sing").val('');
	$("#item_note_sing").val('');
	$("#uom_sing").val('');
	$("#hdnuom_sing").val('');
	$("#batch_sing").html('');
	$("#expiry_sing").val('');
	$("#godown_sing").val('');
	$("#ismulti_sing").val('');
	$("#prod_dt_sing").val('');
	$("#mrpo_sing").val('');
	$("#exp_dt_sing").val('');
	$("#ptr_sing").val('');
	$("#s_price_sing").val('');
	$("#mop_sing").val('');
	$("#msp_sing").val('');
	$("#mrp_sing").val('');
	$("#marginper_sing").val('');
	$("#saving_sing").val('');
	$("#TotPV_sing").val('');
	$("#qty_sing").val('');
	$("#hidqty_sing").val('');
	$("#hidqtytemp_sing").val('');
	$("#free_sing").val('');
	$("#total_sing").val('');
	$("#disc_sing").val('');
	$("#discamt_sing").val('');
	$("#hid_discamt_sing").val('');
	$("#p_price_sing").val('');
	$("#margin_sing").val('');
	$("#taxtypedesc_sing").val('');
	$("#costrate_sing").val('');
	$("#choose_tax_sing").val('');
	$("#cgst_per_sing").val('');
	$("#cgst_amt_sing").val('');
	$("#tax_typ_sing").val('');
	$("#sgst_per_sing").val('');
	$("#sgst_amt_sing").val('');
	$("#taxdes_sing").val('');
	$("#igst_per_sing").val('');
	$("#igst_amt_sing").val('');
	$("#cess_per_sing").val('');
	$("#cess_amt_sing").val('');
	//$("#tax_amt_sing").html('');
	//$("#tax_per_sing").html('');
	$("#valwithtax_sing").val('');
	$("#tot_price_sing").val('');
	$("#netvalue_sing").val('');
	$("#dcno_sing").val('');
	$("#dcdt_sing").val('');
	$("#cgstvalue").val('');
	$("#sgstvalue").val('');
	$("#dcsno_sing").val('');
	$("#batchrecno_sing").val('');
	//$('#prdname_sing').focus();
	//$("#sub_cgst_per").html('');
	//$("#sub_cgst_amt").html('');
	//$("#sub_sgst_per").html('');
	//$("#sub_sgst_amt").html('');
	//$("#sub_igst_per").html('');
	//$("#sub_igst_amt").html('');
	//$("#sub_cess_per").html('');
	//$("#sub_cess_amt").html('');
	total_price();
}


function fn_batchno_sing(batno)
{
	/*alert(batno);
	alert(ival);*/
	
$("#batch_sing").val(batno);
$('#buttonbatch').click();
var comdisc = document.getElementById("common_discount").value;
var godcode=document.getElementById('sel_godown').value;
var pcode=document.getElementById('PCode_sing').value;
var barcode=document.getElementById('barcode_sing').value;
var terms = document.getElementById('sel_terms').value;
var supplier = document.getElementById('sel_supplier').value;
var enter_qty = document.getElementById('qty_sing').value;
var rate_type = document.getElementById("txt_rate_type").value;
var new_flatoff = $("#common_discount").val(); 
	if(new_flatoff !="")
	{
		var comdisc = new_flatoff;
	}else{
		var comdisc = $("#disc_sing").val();
	}
var cur_qty = 1;
//alert(enter_qty);
//var newival=parseInt(ival)+1;
if(batno != '0')
	{
		$.ajax({
		   type: 'POST',
		   url: 'fn_sales.php',
		   data:{
				type : 'batch_details',
				batno : batno,
				pcode : pcode,
				barcode : barcode,
				godcode : godcode,
				terms : terms,
				supplier : supplier,
				discount : comdisc,
				enter_qty : enter_qty,
				rate_type : rate_type,
			},
		   success: function(msg){
			   //alert(msg);
			    
			   msg=msg.split("~!");
			   
			 //alert(msg[5]);
			   if(msg[0].trim()!="0")
			   {
				 
				 /*var disc_price = msg[3]*disc/100;
				 msg_val= msg[3] - disc_price;
				   var tot_price=parseFloat(enter_qty)*msg_val;*/
				    
				document.getElementById('exp_dt_sing').value = msg[0].trim();
				document.getElementById('prod_dt_sing').value = msg[1].trim();
				document.getElementById('hidqty_sing').value = msg[2].trim();
				document.getElementById('mrp_sing').value = msg[3].trim();
				document.getElementById('mrpo_sing').value = msg[4].trim();
				document.getElementById('ptr_sing').value = msg[5].trim();
				//document.getElementById('tot_price'+ival).value = msg[5].trim();
				if(cur_qty >msg[2]){
					cur_qty = msg[2];
				}
				document.getElementById('qty_sing').value = cur_qty;
				//document.getElementById('barcode'+newival).focus();
				document.getElementById("stk_id").style.display = "block";
				document.getElementById("stk_id").innerHTML =parseInt(msg[2]);
				//document.getElementById("stk_id").innerHTML = "The Current Stock is : "+msg[2];
				var scanning = document.getElementById('scanning').value;
				if($('#Weight_machine').val() == 1){
					getweight_sing();
					if(scanning==0)
					{
						$("#qty_sing").select();
					}
				}else{
					if(scanning==0)
					{
						fn_qty_sing(cur_qty);
						$("#qty_sing").select();
					}
					else
					{
						fn_qty_sing(cur_qty);
					}
				}
			   }
			   else
			   {
			   //alert("This Batch date is expired you cannot proceed this batch");
			   alert_popup("This Batch date is expired you cannot proceed this batch","RED",'');
			   document.getElementById('batch_sing').value = 0;
			   document.getElementById('exp_dt_sing').value = '';
			   document.getElementById('prod_dt_sing').value = '';
			   document.getElementById('ptr_sing').value = '';
			   document.getElementById('hidqty_sing').value=document.getElementById('hidqtytemp_sing').value;
			   document.getElementById('qty_sing').value = '';
			   document.getElementById("stk_id").style.display = "block";
			   document.getElementById("stk_id").innerHTML =parseInt(document.getElementById('hidqtytemp_sing').value);
			 //  document.getElementById("stk_id").innerHTML = "The Current Stock is : "+document.getElementById('hidqtytemp_sing').value;
			   
				}
		    }
		});
	} else {
		document.getElementById('batch_sing').value = 0;
		document.getElementById('exp_dt_sing').value = '';
		document.getElementById('prod_dt_sing').value = '';
		document.getElementById('ptr_sing').value = '';
		document.getElementById('hidqty_sing').value=document.getElementById('hidqtytemp_sing').value;
		document.getElementById('qty_sing').value = '';
		document.getElementById("stk_id").style.display = "block";
		document.getElementById("stk_id").innerHTML = "The Current Stock is : "+document.getElementById('hidqtytemp_sing').value;
		}
		//total_price();
}

function fn_mrp_sing(mrpprice) {

	if(parseFloat(mrpprice) <= 0) {
		//alert("Please Enter the Correct MRP");
		alert_popup("Please Enter the Correct MRP","RED",'mrp_sing');
		document.getElementById('mrp_sing').value = "";
		document.getElementById('mrp_sing').focus();
		return false;
	} /*else if(parseFloat(mrpprice) >= parseFloat(document.getElementById('mrpo'+ival).value)) {
		alert("Sales Price Should not be Greater than MRP");
		document.getElementById('mrp'+ival).value = "";
		document.getElementById('mrp'+ival).focus();
		return false;
	}*/else{
		//alert('asd');
		var qty = $("#qty_sing").val();
			qtyCalculation_sing(qty);
			//fn_addrow();
		//tmpv = parseInt(ival)+ parseInt(1);
		//var barhid = document.getElementById('hidbar').value;
		
	}
} 


$(document).ready(function(){
	$("#choose_tax_sing").live("change",function(){
		var tax_code=this.value;
		if(tax_code == ""){
			//alert("Please Select Tax");
			alert_popup("Please Select Tax","RED",'');
			return false;
		}
		$.ajax({
			url: 'fn_sales.php',
			type: 'POST',
			data: {
				type: 'get_tax',
				tax_code: tax_code,
			},
			success: function(res){
				res = res.split("!@#");
				$("#cgst_per_sing").val(res[1]);
				$("#sgst_per_sing").val(res[2]);
				$("#igst_per_sing").val(res[3]);
				var qty = $("#qty_sing").val();
				if(qty != '' || qty != 0){
					qtyCalculation_sing(qty);
				}
			}
		});
	});
});


</script>
<!--  For Sales  -->
<button type="button" class="btn btn-info btn-lg" id="alert_pop"  data-toggle="modal" data-target="#alertModal" style="display:none;"></button>
<div id="alertModal" class="modal fade" role="dialog" style="  z-index: 10051;display: none;">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" >
        <div class="modal-header" id="mod_content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="headingpopupwarning">Warning</h4>
        </div>
        <div class="modal-body" id="mod_body">
            <p id="alert-modal" style="color:#000;"></p>
        </div>
        <div class="modal-footer">
        <button name="reset" type="button" class="btn btn-labeled btn-danger" data-dismiss="modal" id="delbut_new" style="height:30px;border:none; padding:0px 12px 0px;margin-top:10px;" onclick="fn_nexttab(next_focus.value);">
        <span class="btn-label" style=""><i class="glyphicon glyphicon-remove" style="height:30px;"></i></span>CLOSE</button>
        <input type="hidden" name="enable_warning" id="enable_warning" value="0">
        <input type="hidden" name="next_focus" id="next_focus" value="">
    </div>
    </div>

  </div>
</div>

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#error_popup" id="popen_popup_error" style="display: none;">Open Modal</button>
<!-- Modal -->
<div id="error_popup" class="modal fade barcode-modal" data-backdrop="static" role="dialog" style="  z-index: 10051;display: none;">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="modal-title" id="disp_error"></h5>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="error_next_focus" id="error_next_focus" value="">
                <button type="button" class="btn btn-danger" id="error_popup_close" onclick="fn_err_next();" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    function alert_popup(err_msg,err_btn,next_tab){
        $("#popen_popup_error").click();
        $("#disp_error").html(err_msg);
        $("#error_next_focus").val(next_tab);
        $("#disp_error").css("color",err_btn);
        setTimeout(function(){
            $("#error_popup_close").focus();
        }, 200);
    }
    function fn_err_next(){
        setTimeout(function(){
            var next = $("#error_next_focus").val();
            $('#'+next).select();
        }, 200);
    }
    function fn_nexttab(nxt){
        $("#"+nxt).focus();
    }
</script><style>
	.count_top{
		font-size:12.5px!important;
	}
</style>
<script type="text/javascript" src="http://demo.elixrlite.com/Theme/js/scripts.js"></script>
<style type="text/css">
	.focus_class{ width: 100%;border-color: #ffffff; }
 	.focus_class:focus{ background: none; }
 	.focus_class:focus .batchpanel{ background: #8BC34A!important; }
    .btn-label {position: relative;left: -12px;display: inline-block;padding: 6px 12px;background: rgba(0,0,0,0.15);border-radius: 3px 0 0 3px;}
	.btn-labeled {padding-top: 0;padding-bottom: 0;}
	.btn { margin-bottom:10px; }
	.btn:not(.md-skip) {
		font-size: 12px;
		transition: box-shadow .28s cubic-bezier(.4,0,.2,1);
		-webkit-border-radius: 2px;
		-moz-border-radius: 2px;
		-ms-border-radius: 2px;
		-o-border-radius: 2px;
		border-radius: 2px;
		overflow: hidden;
		position: relative;
		user-select: none;
	}
</style>
<script>
	var basepath = "http://demo.elixrlite.com/";
	function fn_newprod(){
		var pcode = $("#prod_code").val();
		var batch = $("#batch_no").val();
		if(batch == ''){
			//alert("Please Choose Batch type");
			alert_popup("Please Choose Batch type","RED",'batch_no');
			return false;
		}
		var pro_type = $("#pro_type").val();
		var hsncode = $("#Commodity").val();
		var prod_name = $("#name_text_name").val();
		if(prod_name==''){
			//alert("Please Enter Product Name");
			alert_popup("Please Choose Product Name","RED",'name_text_name');
			return false;
		}
		if(pro_type == ''){
			//alert("Please Choose Product Type");
			alert_popup("Please Choose Product Type","RED",'pro_type');
			return false;
		}
		var stock_type = $("#stock_type").val();
		var barcode = $("#name_text_barcode").val();
		if(barcode == ''){
			if(stock_type == ''){
				//alert("Please Choose Product Type");
				alert_popup("Please Choose Product Type","RED",'stock_type');
				return false;
			}
		}
		var sel_grp = $("#select_group").val();
		/*if(sel_grp == ''){
			//alert("Please Choose Product Type");
			alert_popup("Please Choose Group","RED",'select_group');
			return false;
		}*/
		var sel_brnd = $("#select_brand").val();
		/*if(sel_brnd == ''){
			//alert("Please Choose Product Type");
			alert_popup("Please Choose Brand","RED",'select_brand');
			return false;
		}*/
		var min_qty = $("#min_qty").val();
		if(min_qty == ''){
			min_qty = 0;
		}
		var max_qty = $("#max_qty").val();
		if(max_qty == ''){
			max_qty = 0;
		}
		var reorder_qty = $("#reorder_qty").val();
		if(reorder_qty == ''){
			reorder_qty = 0;
		}
		var sel_uom = $("#sel_uom").val();
		if(sel_uom == ''){
			alert("Please Select UOM");
			return false;
		}
		var pprice = $("#pprice").val();
		if(pprice == ''){
			pprice = 0;
		}
		var margin = $("#txt_margin").val();
		if(margin == ''){
			margin = 0;
		}
		var mrp = $("#mrp").val();
		if(mrp == ''){
			mrp = 0;
		}
		var mrpo = $("#mrpo").val();
		if(mrpo == ''){
			mrpo = 0;
		}
		var saving = $("#txt_saving").val();
		if(saving == ''){
			saving = 0;
		}
		//var active = $("#sel_active").val();
		var active = 'Y';
		var ptax = 0;//$("#sel_purtax").val();
		var stax = 0;//$("#sel_saltax").val();
		var gst_slab = $("#taxslab").val();
		if(gst_slab == ''){
			//alert("Please Choose Tax Slab");
			alert_popup("Please Choose Tax Slab","RED",'gst_slab');
			return false;
		}
		var disc_per = $("#disc_per").val();
		$.ajax({
			type:'POST',
			url:'fn_sales.php',
			data:{
				type:'new_prodadd',
				pcode :pcode,
				batch :batch,
				pro_type :pro_type,
				hsncode :hsncode,
				prod_name :prod_name,
				stock_type :stock_type,
				barcode :barcode,
				sel_grp :sel_grp,
				sel_brnd :sel_brnd,
				min_qty :min_qty,
				reorder_qty :reorder_qty,
				sel_uom :sel_uom,
				pprice :pprice,
				margin :margin,
				mrp :mrp,
				mrpo :mrpo,
				saving :saving,
				active :active,
				ptax :ptax,
				stax :stax,
				max_qty:max_qty,
				gst_slab :gst_slab,
				disc_per :disc_per,
			},
			success: function(msg){
				
				msg= msg.trim();
				//alert(msg);
				//$('#add_product').hide();
				//$('#hid_popup').show();
				row_clear();
				$('#hid_popup').trigger("click");
				// $('#myModal').modal('hide');
				
			}
		});
	}
	function row_clear(){
		$("#prod_code").val('');
		//$("#batch_no").val('');
		$("#pro_type").val(0);
		$("#Commodity").val('');
		$("#name_text_name").val('');
		$("#stock_type").val(1);
		//$("#name_text_barcode").val('');
		$("#select_group").val('');
		$("#select_brand").val('');
		//$("#min_qty").val('');
		//$("#reorder_qty").val('');
		$("#sel_uom").val('');
		$("#pprice").val('');
		$("#mrpo").val('');
		$("#mrp").val('');
		$("#taxslab").val('');
		//$("#txt_saving").val('');
		//$("#sel_active").val('Y');
		//$("#disc_per").val('');
		//$('#add_product').show();
		//$('#hid_popup').hide();

	}
	function fn_billtyp(){
		var bill_terms = $("#hid_inc").val();
		if(bill_terms == 1){
			//alert("Please Choose preferred Bill-Type Before Process the Bill");
			alert_popup("Please Choose preferred Bill-Type Before Process the Bill","RED",'');
			location.reload();
		}
	}
	function fn_qty(qty, ival) {
		//alert(qty);
		if(qty <= 0) {
			//alert("Enter the Quantity Greater than Zero");
			alert_popup("Enter the Quantity Greater than Zero","RED",'qty'+ival);
			document.getElementById('qty'+ival).value = "0";
			//document.getElementById('qty'+ival).select();
			return false;
		} else {
		var tmpval=0;
		if(document.getElementById('ismulti'+ival).value=="1"){
			if(document.getElementById('batch'+ival).value=="" || document.getElementById('batch'+ival).value=="0"){
				//alert("Select Batch Number");
				alert_popup("Select Batch Number","RED",'qty'+ival);
				document.getElementById('qty'+ival).value = "";
				//document.getElementById('qty'+ival).select();
				return false;
			}
		}
		var netqty = 0;
		var hdqty = document.getElementById('hidqty'+ival).value; 
		//alert(hdqty);
		var saluom = document.getElementById('hdnuom'+ival).value;
		//	var taxper = document.getElementById('tax_per'+ival).value;
		var cgstper = document.getElementById('cgst_per'+ival).value;
		var sgstper = document.getElementById('sgst_per'+ival).value;
		var discamt = document.getElementById('discamt'+ival).value;
			netqty = parseFloat(qty,qty);
		var Pro_type = document.getElementById('Pro_type'+ival).value;
		if(Pro_type!='0'){
			if(hdqty < netqty) {
				document.getElementById('qty'+ival).value = "";
				qtyCalculation('0',ival);
				//alert("Quantity not Available");
				alert_popup("Quantity not Available","RED",'qty'+ival);
				document.getElementById('qty'+ival).select();
				return false;
			} else {
				qtyCalculation(qty,ival)
				tmpval=parseInt(ival)+parseInt(1);
				document.getElementById('mrp'+ival).select();
			}
		}
		else{
			qtyCalculation(qty,ival)
			tmpval=parseInt(ival)+parseInt(1);
			if(document.querySelector("#mrp"+ival).readOnly) {
				document.getElementById('barcode'+tmpval).focus();
			}else{
				document.getElementById('mrp'+ival).select();
			}
		}
		}
	}
	function fn_qty_prod(qty, ival) {
	//alert(qty);
		if(qty <= 0) {
			//alert("Enter the Quantity Greater than Zero");
			alert_popup("Enter the Quantity Greater than Zero","RED",'qty'+ival);
			document.getElementById('qty'+ival).value = "0";
			document.getElementById('qty'+ival).select();
			return false;
		} else {
		var tmpval=0;
		if(document.getElementById('ismulti'+ival).value=="1")
		{
		if(document.getElementById('batch'+ival).value=="" || document.getElementById('batch'+ival).value=="0"){
		//alert("Select Batch Number");
		alert_popup("Select Batch Number","RED",'qty'+ival);
		document.getElementById('qty'+ival).value = "";
		//document.getElementById('qty'+ival).select();
		return false;
	}
	}
		var netqty = 0;
		var hdqty = document.getElementById('hidqty'+ival).value; 
		//alert(hdqty);
		var saluom = document.getElementById('hdnuom'+ival).value;
	//	var taxper = document.getElementById('tax_per'+ival).value;
	
			var cgstper = document.getElementById('cgst_per'+ival).value;
				var sgstper = document.getElementById('sgst_per'+ival).value;
		var discamt = document.getElementById('discamt'+ival).value;
		netqty = parseFloat(qty,qty);

		var Pro_type = document.getElementById('Pro_type'+ival).value;
			//alert(hdqty+'~'+netqty);
		if(Pro_type!='0')
		{
		if(hdqty < netqty) {
			document.getElementById('qty'+ival).value = "";
			qtyCalculation('0',ival);
			//alert("Quantity not Available");
			alert_popup("Quantity not Available","RED",'qty'+ival);
			document.getElementById('qty'+ival).select();
			return false;
		} else {
			qtyCalculation(qty,ival)
			tmpval=parseInt(ival)+parseInt(1);
			//$("#barcode_sing").focus();
			
		}
	}
	else
	{
		qtyCalculation(qty,ival)
		tmpval=parseInt(ival)+parseInt(1);
		//$("#barcode_sing").focus();
	}
	
		}
	
}
function fn_focus(ival)
{
	tmpval=parseInt(ival)+parseInt(1);

		if(document.querySelector("#mrp"+ival).readOnly) {
			document.getElementById('barcode'+tmpval).focus();
		}else{
			document.getElementById('mrp'+ival).select();
		}
}

function fn_changetax(ival,value){
	var tax_code = value;
	if(tax_code == ""){
		//alert("Please Select Tax");
		alert_popup("Please Select Tax","RED",'');
		return false;
	}
	$.ajax({
		url: 'fn_sales.php',
		type: 'POST',
		data: {
			type: 'get_tax',
			tax_code: tax_code,
		},
		success: function(res){
			res = res.split("!@#");
			$("#taxdes"+ival).val(tax_code);
			$("#cgst_per"+ival).val(res[1]);
			$("#sgst_per"+ival).val(res[2]);
			$("#igst_per"+ival).val(res[3]);
			var qty = $("#qty"+ival).val();
			if(qty != '' || qty != 0){
				qtyCalculation(qty,ival);
			}
		}
	});
}

function qtyCalculation(qty,ival) {
	//alert(ival);
	var netqty = 0,disc=0, rte=0,tax = 0;
	var flat_dis_per = $("#common_discount").val();
	var hdqty = document.getElementById('hidqty'+ival).value; 

	var saluom = document.getElementById('hdnuom'+ival).value;
	//var taxper = document.getElementById('tax_per'+ival).value;
	var cgstper = document.getElementById('cgst_per'+ival).value;

	var sgstper = document.getElementById('sgst_per'+ival).value;
	var igstper = document.getElementById('igst_per'+ival).value;
	var cessper = document.getElementById('cess_per'+ival).value;
	var discamt = document.getElementById('hid_discamt'+ival).value;
	var tax_typ = document.getElementById('tax_typ'+ival).value;
	//var subvalue=0;
	//var subvalue1=,0;
	//var subvalue2=0;
///var qtty = document.getElementById('qty'+ival).value
	netqty = parseFloat(qty);
	//alert(netqty);
	disc=parseFloat(qty)*parseFloat(discamt);
	//alert(discamt);
	
	flat_dis=parseFloat(qty)*parseFloat(flat_dis_per);
	var srate = 0, freeval = 0, totqty = 0, grossval = 0, taxamt = 0, cgstamt = 0, sgstamt = 0 , valtax = 0;
				
	freeval = document.getElementById('free'+ival).value;
	srate = document.getElementById('mrp'+ival).value;

	if(freeval == "") {
		freeval = 0;
	}
	if(discamt == "") {
		discamt = 0;
	}
	
	totqty = parseFloat(netqty) + parseFloat(freeval); 
	grossval = parseFloat(netqty) * parseFloat(srate); 

	//taxamt = (parseFloat(grossval) - parseFloat(disc))/100 * parseFloat(taxper); 
//alert(netqty);
	//valtax = parseFloat(grossval) + parseFloat(taxamt); 
	//var taxtyp = document.querySelector('input[name="incl"]:checked').value;
	var taxtyp = $("#incl").val();
	 //alert(taxtyp);
		var inv_tpe_chk = $("#get_gst").attr("checked");
		if(!inv_tpe_chk){
			inv_tpe = 0;
		}else{
			inv_tpe = 1;
		}
		var totalcal = '';		
		var totalcal =   taxcal(grossval,disc,cgstper,sgstper,sgstamt,discamt,srate,taxtyp,netqty,inv_tpe,igstper,cessper);	
		//alert('grossval - '+grossval+' disc - '+disc+' cgstper - '+cgstper+' sgstper - '+sgstper+' sgstamt - '+sgstamt+' discamt - '+discamt+' srate - '+srate+' taxtyp - '+taxtyp+' netqty - '+netqty+' inv_tpe - '+inv_tpe+' igstper - '+igstper+' cessper - '+cessper);
	//return false;
			/*else
			{
				
					cgstamt = ((parseFloat(grossval) - parseFloat(disc)) * parseFloat(cgstper))/100;
				cgstamt = cgstamt.toFixed(2);
					sgstamt = ((parseFloat(grossval) - parseFloat(disc)) * parseFloat(sgstper))/100;
				sgstamt = sgstamt.toFixed(2);
			}*/
		totalcal = totalcal.split('~');
		//alert(totalcal);
		cgstamt= parseFloat(totalcal[2]);
		sgstamt= parseFloat(totalcal[3]);
	//	alert(cgstamt);
	grossval = parseFloat(totalcal[4]);
	var igstamt = parseFloat(totalcal[5]);
	var cessamt = parseFloat(totalcal[6]);
	if(totalcal[5] == 0){
		var tot_taxamt =  parseFloat(cgstamt)+ parseFloat(sgstamt);
	}else{
		var tot_taxamt =  parseFloat(igstamt);
	}
			valtax = parseFloat(grossval) +parseFloat(tot_taxamt) +parseFloat(cessamt);
	document.getElementById('discamt'+ival).value=disc.toFixed(2);
	document.getElementById('qty'+ival).value = netqty.toFixed(2);
	//document.getElementById('qty'+ival).select();

    //$('input#bankcert.field').focus();
  //alert(cgstamt);
	//document.getElementById('tax_amt'+ival).value = taxamt;
	document.getElementById('cgst_amt'+ival).value = cgstamt;
	document.getElementById('sgst_amt'+ival).value = sgstamt;
	document.getElementById('igst_amt'+ival).value = igstamt;
	document.getElementById('cess_amt'+ival).value = cessamt;
	//alert(cgstamt);
	cgstamt = parseFloat(cgstamt).toFixed(2);
	sgstamt = parseFloat(sgstamt).toFixed(2);
	cessamt = parseFloat(cessamt).toFixed(2);
	igstamt = parseFloat(igstamt).toFixed(2);
	//alert(cgstamt);
	document.getElementById('cgstspan'+ival).innerHTML='<span id="cgstvalue" style="padding-left:5px;color:blue;">CGST-'+cgstamt+'</span>';
	document.getElementById('sgstspan'+ival).innerHTML='<span id="sgstvalue" style="padding-left:7px;color:blue;">SGST-'+sgstamt+'</span>';
	document.getElementById('cessspan'+ival).innerHTML='<span id="cessvalue" style="padding-left:7px;color:blue;">CESS-'+cessamt+'</span>';
	document.getElementById('igstspan'+ival).innerHTML='<span id="igstvalue" style="padding-left:7px;color:blue;">IGST-'+igstamt+'</span>';

	//document.getElementById('sub_cgst_amt'+ival).value = cgstamt.toFixed(2);
	//document.getElementById('sub_sgst_amt'+ival).value = sgstamt.toFixed(2);
	//document.getElementById('sub_igst_amt'+ival).value = igstamt.toFixed(2);
	//document.getElementById('sub_cess_amt'+ival).value = cessamt.toFixed(2);

	document.getElementById('total'+ival).value = totqty.toFixed(2);
	document.getElementById('tot_price'+ival).value = grossval;
	document.getElementById('valwithtax'+ival).value = valtax.toFixed(2);

    //$('input#bankcert.field').focus();
  
	total_price();
}


function getweight(ival)
{
	//alert(123);
	$.ajax({
		 type: 'POST',
		 url: 'fn_sales.php',
		 data:{
			type : 'getweight'
		},
		 success: function(msg){
			 //msg = msg.split('~');
			 //alert(msg);
			 if(msg>0)
			 {
			document.getElementById('qty'+ival).value=msg.trim();
      //document.getElementById('qty'+ival).readOnly=true;
			document.getElementById("qty"+ival).style.backgroundColor="lightgrey";
			fn_qty(msg.trim(),ival);
			}
			}
	});
	return false;
}


function fn_productname(prddesc,ival){
	//alert(prddesc+" "+ival);
	var bill_types = document.getElementById('bill_type1').value;
	var gdn_code = document.getElementById('sel_godown').value;
	var mem_card = '';
	var mem_id = '';
	//var mem_card = document.getElementById('mem_cardtype').value;
	//var mem_id = document.getElementById('mem_id').value;
	var pend_cnt = document.getElementById("pend_cnt").value; 
		
	var prdcod = document.getElementById("PCode"+ival).value; 
	var bcode = document.getElementById("barcode"+ival).value; 
	var comdisc = document.getElementById("common_discount").value;
	var Pro_type = document.getElementById("Pro_type"+ival).value;
	var rate_type = document.getElementById("txt_rate_type").value;
	var enter_qty = "";
	var c=0;
	var prdcnt = 0,tprdcnt = 0;
	var newival=parseInt(ival)+parseInt(1);
	//var prdcod = '';
	//var cur_prdcode = '1'; 
	
	if(prdcod != '' || bcode != '' ) {
	//alert(prdcod);
		if(prddesc == "")
		{
			fn_resetValue(ival);
			/*alert("Enter Item Description");
			document.getElementById('prdname'+ival).focus();*/
			return false;
		}
		else if(bill_types == 'PC' && mem_id == '')
		{
			fn_resetValue(ival);
			document.getElementById('prdname'+ival).value = '';
			//alert("Please Enter Member ID");
			alert_popup("Please Enter Member ID","RED",'mem_id');
			document.getElementById('mem_id').focus();
			return false;
		}
		/*else
		{
			var row_cnt,i;
			if(document.getElementById('hiddenprice').value == '' ) { 
				row_cnt = 6;
			} else { 
				row_cnt = parseInt(document.getElementById('hiddenprice').value) + 1; 
			}
			for(i = 1; i < row_cnt; i++)
			{
				var name = document.getElementById('prdname'+i).value;
				var prdcod = document.getElementById('PCode'+i).value;
				if((prddesc == name) && (i != ival))
				{
					c++;
					fn_resetValue(ival);
					alert("This Item is Already Used");
					document.getElementById('prdname'+ival).focus();
					return false;
				}
				
				if((parseInt(prdcod) == parseInt(cur_prdcode)) && (i != ival)) {
					prdcnt++;
				}
				
				if(name != ''  && (i != ival)) {
					tprdcnt++;
				}
									   
			}
	
		}*/
		if(pend_cnt == '') { pend_cnt = 0; } 
		pend_cnt = parseInt(pend_cnt) - parseInt(tprdcnt);
		$("#inclfn").val('1');
		if(c == 0)
		{
		
			$.ajax({
							
				   type: 'POST',
				   url: 'fn_sales.php',
				   data:{
						type : 'product_details',
						prdname : name,
						prdcod: prdcod,
						bcode: bcode,
						bill_types : bill_types,
						enter_qty : enter_qty,
						gdn_code: gdn_code,
						mem_card : mem_card,
						mem_id : mem_id,
						pend_cnt : pend_cnt,
						prdcnt : prdcnt,
						discount : comdisc,
						Pro_type : Pro_type,
						rate_type : rate_type,
						is_ptr : ($('#is_ptr').length && $('#is_ptr')[0].checked ? 1 : 0),
				   },
				   success: function(msg){
					 //alert(msg);
					 //return false;
				   
				  if(msg == 1){			
					/*alert("Please Enter the Correct Product Name");*/
					//alert("Invalid Item Description or Barcode");
					alert_popup("Invalid Item Description or Barcode","RED",'prdname'+ival);
					document.getElementById('prdname'+ival).focus();
					document.getElementById('prdname'+ival).value = "";
					fn_resetValue(ival);
					return false;			
				   } else {
				   	$("#hid_inc").val('1');
					 msg =msg.split('~');		
					//alert(msg[5]);
		
					document.getElementById('PCode'+ival).value = msg[0];	    
					document.getElementById('prdname'+ival).value = msg[1];	
					document.getElementById('uom'+ival).value = msg[2];
					document.getElementById('hdnuom'+ival).value = msg[2];	
					document.getElementById('batch'+ival).value = msg[3];
					document.getElementById('hidqty'+ival).value = msg[5];
					document.getElementById('hidqtytemp'+ival).value = msg[5];
					document.getElementById('disc'+ival).value = msg[6];
					document.getElementById('discamt'+ival).value = msg[6];
					document.getElementById('p_price'+ival).value = msg[7];
					document.getElementById('s_price'+ival).value = msg[8]; 
					document.getElementById('mrp'+ival).value = msg[9];
					document.getElementById('tot_price'+ival).value = msg[10];
					//document.getElementById('tax_per'+ival).value = msg[11];
					//document.getElementById('tax_amt'+ival).value = msg[12];
					
					document.getElementById('valwithtax'+ival).value = msg[13];
					document.getElementById('netvalue'+ival).value = msg[13];
					
					document.getElementById('batchrecno'+ival).value = msg[14];
					document.getElementById('discamt'+ival).value = msg[15];
					document.getElementById('hid_discamt'+ival).value = msg[15];
					document.getElementById('mop'+ival).value = msg[16];
					//document.getElementById('taxtype'+ival).value = msg[17];
					document.getElementById('taxtypedesc'+ival).value = msg[18];
					document.getElementById('costrate'+ival).value = msg[19];
					document.getElementById('godown'+ival).value = msg[20];
					document.getElementById('msp'+ival).value = msg[21];
					document.getElementById('TotPV'+ival).value = msg[22];
				
					document.getElementById('tax_typ'+ival).value = msg[23];
					document.getElementById('barcode'+ival).value = msg[24];
					document.getElementById('batch'+ival).innerHTML=msg[25]; 
					document.getElementById('ismulti'+ival).value=msg[26];
					document.getElementById('mrpo'+ival).value=msg[28];
					document.getElementById('marginper'+ival).value=msg[29];
					document.getElementById('saving'+ival).value=msg[30];
					document.getElementById('Pro_type'+ival).value=msg[36];
					document.getElementById('cgst_per'+ival).value=msg[31];
					document.getElementById('sgst_per'+ival).value=msg[32];
					//document.getElementById('igst_per'+ival).value=msg[33];
				    document.getElementById('cgst_amt'+ival).value=msg[33];
					document.getElementById('sgst_amt'+ival).value=msg[34];
					document.getElementById('taxdes'+ival).value=msg[35];
					document.getElementById('igst_per'+ival).value=msg[37];
					document.getElementById('cess_per'+ival).value=msg[38];
					 //alert(msg[27]);
					 if(msg[26]==0)
					 {
					 document.getElementById("batch"+ival).disabled = true;
					 document.getElementById("exp_dt"+ival).disabled = true;
					 document.getElementById("prod_dt"+ival).disabled = true;
					 }
					 if(msg[26]==1)
					 {
					 document.getElementById("batch"+ival).disabled = false;
					 document.getElementById("exp_dt"+ival).disabled = false;
					 document.getElementById("prod_dt"+ival).disabled = false;
					 document.getElementById("batch"+ival).value=msg[27];
					 fn_batchno(msg[27],ival);
					 }
					 //fn_qty_prod(msg[4],ival);
					 if($('#Weight_machine').val() == 1){
						getweight(ival);
					 }else{
						document.getElementById('qty'+ival).value = msg[4];
						fn_qty_prod(msg[4],ival);
					 }
					 total_price();
						
					 if(msg[5] != "") {
						document.getElementById("stk_id").style.display = "inline";
						document.getElementById("stk_id").innerHTML ="<span class='count_top'><i class='fa fa-info-circle'></i> Current Stock</span><div class='count green'>"+msg[5]+"</div>";
					 } else {
						document.getElementById("stk_id").innerHTML = "";
						document.getElementById("stk_id").style.display = "none";
					 }
					 
					 //var nxt=parseInt(ival)+1;
					 hiddenprice = $('#hiddenprice').val();
					 /*if(newival == hiddenprice){
					 	$('#addImage').click();
					 }*/
					 //document.getElementById('barcode'+newival).focus();
var scanning = document.getElementById('scanning').value;
			tmpval = parseInt(ival)+parseInt(1);
			if(scanning==1)
			{
				document.getElementById('barcode'+tmpval).focus();
			}
			else
			{
					document.getElementById('qty'+ival).select();
			}
					 /*if(res_data[2] > 0) {
						document.getElementById('dis'+pele_ival).value = res_data[2];
						document.getElementById('dis'+pele_ival).setAttribute('readonly','readonly');
						document.getElementById('qty'+pele_ival).focus();
					 } else {
						document.getElementById('dis'+pele_ival).focus();
					 }*/
				  }
				}
			  
			});
		}
		
	}
  return false;
  
}
function change(ival) {
/*var row=document.getElementById("table_dc"+ival);
    row.parentNode.removeChild(row);*/
	fn_resetValue(ival);
   // document.getElementById('prdname'+ival).value = "";
 
	 // document.getElementById('table_dc').removeChild(row);
}

function fn_balamt(){
	var net_total = 0,rec_amt = 0,card_amt = 0,ernd_amt = 0;
	var terms = $('#sel_terms').val();
	if(document.getElementById("net_total").value == "") {
		net_total = 0;
	} else {
		net_total = document.getElementById("net_total").value;
	}
	
	if(document.getElementById("card_amt").value == "") {
		card_amt = 0;
	} else {
		card_amt = document.getElementById("card_amt").value;
	}
	if(terms == 'card'){
		if(parseFloat(card_amt)>parseFloat(net_total)){
			//alert("Card amount could not greater then Netamount");
			alert_popup("Card amount could not greater then Netamount","RED",'card_amt');
			$("#card_amt").val('');
			$("#card_amt").focus();
			return false;
		}
	}
	if(document.getElementById("erndamt").value == "") {
		ernd_amt = 0;
	} else {
		ernd_amt = document.getElementById("erndamt").value;
	}
	
	//alert(card_amt);
	//alert(grosstot);
	if(document.getElementById("rec_amount").value == "") {
		rec_amt = 0;
		document.getElementById("rec_amount").value = 0;
	} else {
		rec_amt = document.getElementById("rec_amount").value;
	}
	document.getElementById("bal_amount").value=(parseFloat(rec_amt) + parseFloat(card_amt) - parseFloat(net_total));// + parseFloat(ernd_amt))
	if($("#sel_terms").val() != 'credit'){
		if($('#typ_rec_amt').val() == '0'){
			document.getElementById("bal_amount").value=0;
			document.getElementById("rec_amount").value=parseFloat(net_total);
			
		}
	}

}

function getCommission(sales_rep)
{
	if(sales_rep != '')
	{
		$.ajax({
		   type: 'POST',
		   url: 'fn_sales.php',
		   data:{
				type : 'getCommission',
				sales_rep : sales_rep,
			},
		   success: function(msg){
			   msg = msg.split('~');
				document.getElementById('commission_per').value = msg[1];
		    }
		});
	} else {
		document.getElementById('commission_per').value = 0;
	}
}


function cust_reset()
{
	document.getElementById('sel_supplier').value = '';
	document.getElementById('customer').value = '';
	document.getElementById("address").value = '';
	document.getElementById("place").value = '';

	document.getElementById("phone").value = '';
	document.getElementById("lyltpoints").value = '';
	document.getElementById("rdmpoints").value = '';
	document.getElementById("erndamt").value = '';
	document.getElementById("savebtn").style.display='none';
	document.getElementById("updtbtn").style.display='none';
	//document.getElementById("sel_area_name").value = '';
	//document.getElementById("sel_area").value = '';
	
}


function fn_stk() {
	document.getElementById("stk_id").innerHTML = "";
	document.getElementById("stk_id").style.display = "none";
}

function lastbill_print()
{
var printid='';
	$.ajax({
		   type: 'POST',
		   url: 'fn_sales.php',
		   data:{
				type : 'lastbill',
				},
		   success: function(msg){
			   //msg = msg.split('~');
			   if(msg!='')
			   {
				printid=msg.trim();
				var print_file = $("#printpage_a4").val();
				if(print_file == ''){
					print_file = $("#printpage").val();
				}
		//print_file = "../../sales_print.php";
		window.open(basepath+print_file+"?id="+printid,"Window2","MyWindow1','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=800px,height=600px,left=150px,top=100px");
		}
		else
		{
		//alert("No Bill to print");
		alert_popup("No Bill to print","RED",'');
		return false;
		}
		    }
		});
		
}

function frn_savevalidate()
{
	$("#thermalbillsales").attr("disabled",true);
	//$('#bill_size').val(a);
	var c = 0;
	var count=document.getElementById("hiddenprice").value ;
	/*if(document.getElementById("mem_id").value!=""){
		fn_member()
	}
	if(document.getElementById("ref_id").value!=""){
		fn_refer()
	}*/
	if(document.getElementById('sel_terms').value=='credit')
	{
	if(document.getElementById('slcode_no').value == '') {
		c =1;
		//alert("Please Enter Customer Name");
		alert_popup("Please Enter Customer Name","RED",'slcode_no');
		return false;
	}
	}
	/*if(document.getElementById('address').value == '') {
		c =1;
		alert("Please Enter Customer Address");
		document.getElementById('address').focus();
		return false;
	}*/
	/*if(document.getElementById('phone').value == '') {
		c =1;
		alert("Please Enter Customer Phone No.");
		document.getElementById('phone').focus();
		return false;
	}*/
	/* if(document.getElementById('sale_type').value == 'DSF' && document.getElementById('sel_salesrep').value == '')
	{
		c =1;
		alert("Select Staff Name");
		document.getElementById('sel_salesrep').focus();
		return false;
	}*/
	var barcode_en = $('#hidbar').val();
	if(barcode_en == 1){
		var next_tab = "prdname_sing";
	}else{
		var next_tab = "barcode_sing";
	}
	if(document.getElementById('net_total').value == '')
	{
		c =1;
		$('#alert_pop').click();
		$('#next_focus').val(next_tab);	
		$("#enable_warning").val(1);
		$('#alert-modal').html('Enter Atleast One Entry');
		//$("#alertModal").modal('toggle');
		//alert("Enter atleast one Entry");
		$("#a_click").val(0);
		$("#thermalbillsales").attr("disabled",false);
		setTimeout(function(){ document.getElementById('delbut_new').focus(); }, 200);
		return false;
	}
	else if(parseFloat(document.getElementById('net_total').value) <= 0)
	{
		c =1;
		$('#alert_pop').click();
		$('#next_focus').val(next_tab);	
		$("#enable_warning").val(1);
		$('#alert-modal').html('Enter Atleast One Entry');
		//alert("Enter atleast one Entry");
		$("#thermalbillsales").attr("disabled",false);
		setTimeout(function(){ document.getElementById('delbut_new').focus(); }, 200);
		$("#a_click").val(0);
		return false;
	}
	

	for(var i=1; i<= count; i++ )
	{
		var del_row = $('#hid_delrow').val();
			if(del_row != ''){
				del_row = del_row.slice(0,-1);
				del_array = del_row.split(',');
				del_length = del_array.length;
				var j = '0';
				j++;
				//j = j.trim();
				var a = del_array.indexOf(i.toString());
				//var a = $.inArray(j,del_array)
				if(a != '-1'){
					continue;
				}
			}
	var pname=document.getElementById('prdname'+i).value;
	var qty=document.getElementById('qty'+i).value;

	var bar = document.getElementById('barcode'+i).value;

	if(pname!='')
	{
		if(document.getElementById('prods_rtn'+i).checked)
		{
		if(bar=='')
		{
				c=1;
			//alert("Enter valid barcode");
			alert_popup("Enter valid barcode","RED",'barcode'+i);
	document.getElementById('barcode'+i).focus();
	$("#thermalbillsales").attr("disabled",false);
	$("#a_click").val(0);
	return false;
		}
		}
	if(qty=="")
	{
	//alert("Enter Qty For-"+pname);
	alert_popup("Enter Qty For-"+pname,"RED",'qty'+i);
	document.getElementById('qty'+i).focus();
	$("#thermalbillsales").attr("disabled",false);
	$("#a_click").val(0);
	return false;
	}
	if((qty)<0)
	{
	//alert("Enter Qty Greater Than Zero For-"+pname);
	alert_popup("Enter Qty Greater Than Zero For-"+pname,"RED",'qty'+i);
	document.getElementById('qty'+i).focus();
	$("#thermalbillsales").attr("disabled",false);
	$("#a_click").val(0);
	return false;
	}
	}
	}
	if(document.getElementById('sel_terms').value=='Card')
	{
	if(document.getElementById('card_name').value=='')
	{
	c=1;
	//alert("Enter The Card Name");
	alert_popup("Enter The Card Name","RED",'card_name');
	document.getElementById('card_name').focus();
	$("#thermalbillsales").attr("disabled",false);
	$("#a_click").val(0);
	return false;
	}
	if(document.getElementById('cardno').value=='')
	{
	c=1;
	//alert("Enter The Card Number");
	alert_popup("Enter The Card Number","RED",'cardno');
	document.getElementById('cardno').focus();
	$("#thermalbillsales").attr("disabled",false);
	$("#a_click").val(0);
	return false;
	}
	if(document.getElementById('card_amt').value=='')
	{
	c=1;
	//alert("Enter The Card Amount");
	alert_popup("Enter The Card Amount","RED",'card_amt');
	document.getElementById('card_amt').focus();
	$("#thermalbillsales").attr("disabled",false);
	$("#a_click").val(0);
	return false;
	} else if(document.getElementById('card_amt').value > document.getElementById('net_total').value){
		c=1;
		//alert("Card amount should not exceed the Net amount");
		alert_popup("Card amount should not exceed the Net amount","RED",'');
	}
	}
	if(document.getElementById('sel_terms').value=='cash')
	{
	
	if(document.getElementById('rec_amount').value=='NaN'||document.getElementById('rec_amount').value=='')
	{
	 c=1;
	 //alert("The Received Amount Should be greater than or equal to net amount");
	 alert_popup("The Received Amount Should be greater than or equal to net amount","RED",'rec_amount');
	 document.getElementById('bal_amount').value='';
	 document.getElementById('rec_amount').focus();
	 $("#thermalbillsales").attr("disabled",false);
	 $("#a_click").val(0);
	 return false;
	}

	if((parseFloat(document.getElementById('net_total').value))>(parseFloat(document.getElementById('rec_amount').value)))
	{
	
	 c=1;
	 //alert("The Received Amount Should be greater than or equal to net amount");
	 alert_popup("The Received Amount Should be greater than or equal to net amount","RED",'rec_amount');
	 document.getElementById('bal_amount').value='';
	 document.getElementById('rec_amount').focus();
	 $("#thermalbillsales").attr("disabled",false);
	 $("#a_click").val(0);
	 return false;
	}
	
	}
	
	if(document.getElementById('sel_terms').value=='card')
	{
	var net_total = 0,rec_amt = 0,card_amt = 0,tmpamt = 0,ernd_amt = 0;
	
	if(document.getElementById("net_total").value == "") {
		net_total = 0;
	} else {
		net_total = document.getElementById("net_total").value;
	}
	
	if(document.getElementById("card_amt").value == "") {
		card_amt = 0;
	} else {
		card_amt = document.getElementById("card_amt").value;
	}
	//alert(card_amt);
	//alert(grosstot);
	if(document.getElementById("rec_amount").value == "") {
		rec_amt = 0;
	} else {
		rec_amt = document.getElementById("rec_amount").value;
	}
	
	if(document.getElementById("erndamt").value == "") {
		ernd_amt = 0;
	} else {
		ernd_amt = document.getElementById("erndamt").value;
	}
	
	tmp_amt=parseFloat(card_amt)+parseFloat(rec_amt)+parseFloat(ernd_amt);
	if(document.getElementById('rec_amount').value=='NaN')
	{
	 c=1;
	 //alert("The Received Amount Should be greater than or equal to net amount");
	 alert_popup("The Received Amount Should be greater than or equal to net amount","RED",'rec_amount');
	 document.getElementById('bal_amount').value='';
	 document.getElementById('rec_amount').focus();
	 $("#thermalbillsales").attr("disabled",false);
	 $("#a_click").val(0);
	 return false;
	}
	if(parseFloat(parseFloat(net_total))>parseFloat(tmp_amt))
	{
	
	 c=1;
	 //alert("The Received Amount Should be greater than or equal to net amount");
	 alert_popup("The Received Amount Should be greater than or equal to net amount","RED",'rec_amount');
	 document.getElementById('bal_amount').value='';
	 document.getElementById('rec_amount').focus();
	 $("#thermalbillsales").attr("disabled",false);
	 $("#a_click").val(0);
	 return false;
	}
	
	}
	
	if(c == 0)
	{
		
		$(".Add_hide").attr('disabled','disabled');
		//$(".Add_hide").css({'display':'none'});
		//document.getElementById('Add').style.display = 'none';
		document.getElementById('reset').onclick = '';
		
			document.mrn_ent.submittedvalue.value="1";
			window.document.mrn_ent.submit();
		
	}
	
	
}

function calNetTotalAmt()
{ 
	var hdncnt = document.getElementById('hiddenprice').value;
	var i =1; var flow = 1;
	var qty = '';
	var pcode = '';
	var prddesc = '';
	var salprice =  ''; var prd_cst =  '';
	var disc_per =  '';
	var disc_amt =  '';
	var taxcode =  ''; var taxper = '';  var taxprice = '';  var cgstprice = ''; var sgstprice = '';var tax_typ = '';
	var tot_price =  ''; var subvalue = '';var subvalue1 = ''; var subvalue2 = '';var valtax = '';
	
	while(i<=hdncnt)
	{
		//alert(i+'=='+flow);
		qty = '0'; pcode = ''; prddesc = ''; salprice =  '0';disc_per = '0'; disc_amt =  '0';
		taxcode = 0; taxper = 0;cgstper = 0;sgstper = 0; taxprice = 0;cgstprice = 0; sgstprice=0; tax_typ = '';
		prd_cst = 0; tot_price = 0; subvalue = 0;subvalue1 = 0;subvalue2 = 0; valtax = 0;
		
		qty = document.getElementById('qty'+i).value;
		pcode = document.getElementById('PCode'+i).value;
		prddesc = document.getElementById('prdname'+i).value;
		
		salprice = document.getElementById('mrp'+i).value;
		
		disc_per = document.getElementById('disc'+i).value;
		disc_amt = document.getElementById('discamt'+i).value;
		
//taxcode = document.getElementById('taxtype'+i).value;
		//		taxper = document.getElementById('tax_per'+i).value;
		tax_typ = document.getElementById('tax_typ'+i).value;
		
		if(disc_per == '') {
			disc_per = 0;
		}
		
		if(prddesc != '' && pcode != '')
		{
			prd_cst = parseFloat(qty) * parseFloat(salprice);
			prd_cst =  prd_cst.toFixed(2);
			
			disc_amt =(parseFloat(prd_cst) * parseFloat(disc_per)) / parseFloat(100);
			disc_amt = disc_amt.toFixed(2);
			
			tot_price = parseFloat(prd_cst);
			tot_price = tot_price.toFixed(2);
			//alert(tot_price);
			
			if(tax_typ == 'I')
			{
				subvalue1 =  ((parseFloat(tot_price) - parseFloat(disc_amt)) / (100 + parseFloat(cgstper))) * 100;
				subvalue1 = subvalue1.toFixed(2);
				subvalue2 =  ((parseFloat(tot_price) - parseFloat(disc_amt)) / (100 + parseFloat(sgstper))) * 100;
				subvalue2 = subvalue2.toFixed(2);
				//taxprice =  parseFloat(tot_price) - parseFloat(disc_amt) - parseFloat(subvalue);
				//taxprice = taxprice.toFixed(2);
				cgstprice =  parseFloat(tot_price) - parseFloat(disc_amt) - parseFloat(subvalue1);
			cgstprice = cgstprice.toFixed(2);
				sgstprice =  parseFloat(tot_price) - parseFloat(disc_amt) - parseFloat(subvalue2);
				sgstprice = sgstprice.toFixed(2);
				tot_price = subvalue1+subvalue2;
			//alert(tot_price);

			}
			else
			{
				//taxprice = ((parseFloat(tot_price) - parseFloat(disc_amt)) * parseFloat(taxper))/100;
				//taxprice = taxprice.toFixed(2);
				cgstprice = ((parseFloat(tot_price) - parseFloat(disc_amt)) * parseFloat(cgstper))/100;
			cgstprice = cgstprice.toFixed(2);
			sgstprice = ((parseFloat(tot_price) - parseFloat(disc_amt)) * parseFloat(sgstper))/100;
			sgstprice = sgstprice.toFixed(2);
				tot_price =  parseFloat(tot_price) - parseFloat(disc_amt);
			}
			//alert(tot_price);
			valtax = parseFloat(tot_price) + parseFloat(cgstprice)+ parseFloat(sgstprice);
			valtax = valtax.toFixed(2);
			
			
			//alert(valtax + '~'+ tot_price + '~' + taxprice + '~'+ disc_amt);
			
			document.getElementById("valwithtax"+i).value = valtax;
			document.getElementById("netvalue"+i).value = valtax;
			document.getElementById("tot_price"+i).value = tot_price;
		//	document.getElementById("tax_amt"+i).value = taxprice;
			document.getElementById("discamt"+i).value = disc_amt;
			total_price();
		}
		i++;
	}
	
	return true;
	
}

function fn_billprint(pgmode,printid,saltypeid,bill_size,printpagefile,printa4) {
	//alert(pgmode);
	//alert(bill_size);
	var print_file = '';
	var a;

	if(bill_size ==1 && printpagefile != ''){
		a = 1;
	}else if(bill_size ==2 && printa4 != ''){
		a = 2;
	}else if(bill_size == 3 && printa4 != ''){
		a = 3;
	}else{
		a = 4;
	}
	if(a != 4){
	if(1) {
		
		/*if(saltypeid == '1') {
			print_file = "sales2_print.php";
		} else {
			print_file = "sales_print.php";
		}*/

			if(bill_size ==1){
				if(printpagefile != ''){
					print_file = basepath+printpagefile;
					window.open(print_file+"?id="+printid,"Window2","MyWindow1','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=800px,height=600px,left=150px,top=100px");
				}
			}else if(bill_size == 2){
				if(printa4 != ''){
					print_file = basepath+printa4;
					window.open(print_file+"?id="+printid,"Window2","MyWindow1','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=800px,height=600px,left=150px,top=100px");
				}
			}else if(bill_size == 3){
				if(printa4 != ''){
					print_file = basepath+printa4;
					window.open(print_file+"?id="+printid+"&sm=1","Window2","MyWindow1','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=800px,height=600px,left=150px,top=100px");
				}
			}
			
		//return false;	
		//window.location.href="sales_print.php?id="+printid;
		if(pgmode == "add") {
			//window.location.href = 'sales.php?Action=Added';
			window.location.href = 'sales.php?act=add';
			//setTimeout("location.href = 'sales.php?Action=Added';",1500);
		} else if(pgmode == "edit") {
			window.location.href = 'sales.php?Action=Update';
			//window.location.href = 'sales.php?act=add';
			//setTimeout("location.href = 'sales.php?Action=Update';",1500);
		} else if(pgmode == "add_s") {
			window.location.href = 'sales.php?act=add';
		}
	} else {
		if(pgmode == "add") {
			//window.location.href = 'sales.php?Action=Added';
			window.location.href = 'sales.php?act=add';
			//setTimeout("location.href = 'sales.php?Action=Added';",1500);
		} else if(pgmode == "edit") {
			window.location.href = 'sales.php?Action=Update';
			//setTimeout("location.href = 'sales.php?Action=Update';",1500);
		} else if(pgmode == "add_s") {
			window.location.href = 'sales.php?act=add';
		}
	} }  else {
		if(pgmode == "add") {
			//window.location.href = 'sales.php?Action=Added';
			window.location.href = 'sales.php?act=add';
			//setTimeout("location.href = 'sales.php?Action=Added';",1500);
		} else if(pgmode == "edit") {
			window.location.href = 'sales.php?Action=Update';
			//setTimeout("location.href = 'sales.php?Action=Update';",1500);
		} else if(pgmode == "add_s") {
			window.location.href = 'sales.php?act=add';
		}
	}
}

function total_price() {
//document.getElementById("hiddenprice").value=parseFloat(document.getElementById("hdn_count").value)-document.getElementById("hiddenprice").value;

//var rowcnt=1;
var rowcnt=0;	
	/*if(parseFloat(document.getElementById("hdn_count").value)!=""){
	//alert(rowcnt);
		rowcnt = parseFloat(document.getElementById("hdn_count").value);
	}
	else {
		rowcnt = parseFloat(document.getElementById("hiddenprice").value);
	}*/
			
rowcnt = parseFloat(document.getElementById("hiddenprice").value);		
//alert(rowcnt);
	var gross_total = 0, disc_total = 0, tax_total = 0, cgst_total = 0, sgst_total = 0,igst_total =0,tot_qty = 0,cess_total = 0; 
	
	
	/*if(document.getElementById("qty"+j).value == "") {
			document.getElementById("qty"+j).value = 0;
		}document.getElementById("hdnnet_qty").value;*/	
	for(var i=1;i<=rowcnt;i++) {

			var del_row = $('#hid_delrow').val();
			if(del_row != ''){
				del_row = del_row.slice(0,-1);
				del_array = del_row.split(',');
				del_length = del_array.length;
				var j = '0';
				j++;
				//j = j.trim();
				var a = del_array.indexOf(i.toString());
				//var a = $.inArray(j,del_array)
				if(a != '-1'){
					continue;
				}
			}
	
		if(document.getElementById("tot_price"+i).value != "") {
			gross_total = parseFloat(gross_total) + parseFloat(document.getElementById("tot_price"+i).value);
			
			if(document.getElementById("sal_type"+i).value == "R") {
				gross_total = parseFloat(gross_total) - parseFloat(document.getElementById("tot_price"+i).value);
			}
		}
		if(document.getElementById("discamt"+i).value != "") {
		//alert(parseFloat(document.getElementById("discamt"+i).value));
			disc_total = parseFloat(disc_total) + parseFloat(document.getElementById("discamt"+i).value);
		}
		
	/*	if(document.getElementById("tax_amt"+i).value != "") {
			tax_total = parseFloat(tax_total) + parseFloat(document.getElementById("tax_amt"+i).value);
		}*/
	if(document.getElementById("cgst_amt"+i).value != "") {
			cgst_total = parseFloat(cgst_total) + parseFloat(document.getElementById("cgst_amt"+i).value);
		}
			if(document.getElementById("sgst_amt"+i).value != "") {
			sgst_total = parseFloat(sgst_total) + parseFloat(document.getElementById("sgst_amt"+i).value);
		}
		if(document.getElementById("igst_amt"+i).value != "") {
			igst_total = parseFloat(igst_total) + parseFloat(document.getElementById("igst_amt"+i).value);
		}
		if(document.getElementById("cess_amt"+i).value != "") {
			cess_total = parseFloat(cess_total) + parseFloat(document.getElementById("cess_amt"+i).value);
		}
		
		
		if(document.getElementById("qty"+i).value != "") {
			tot_qty = parseFloat(tot_qty) + parseFloat(document.getElementById("qty"+i).value);
		}

	

	}
	
	//alert(tax_total);
	
	document.getElementById("gross_amt").value = gross_total.toFixed(2);
	document.getElementById("netdisc_amt").value = disc_total.toFixed(2);
	//document.getElementById("sal_disc").value = disc_total.toFixed(2);
	//document.getElementById("nettax_amt").value = tax_total.toFixed(2);
	/*    To remove roundoff issue add new feild for all tax     */
	document.getElementById("netcgst_amt").value = cgst_total;
	document.getElementById("netsgst_amt").value = sgst_total;
	document.getElementById("netigst_amt").value = igst_total;
	document.getElementById("netcess_amt").value = cess_total;
	document.getElementById("netcgst_amt_dis").value = cgst_total.toFixed(2);
	document.getElementById("netsgst_amt_dis").value = sgst_total.toFixed(2);
	document.getElementById("netigst_amt_dis").value = igst_total.toFixed(2);
	document.getElementById("netcess_amt_dis").value = cess_total.toFixed(2);
	document.getElementById("hdnnet_qty").value = tot_qty;
	document.getElementById("total_qty").value = tot_qty;
	document.getElementById("total_quantity").innerHTML =tot_qty;
	//return false;
	fn_nettotal();
	return true;
	
}

function fn_nettotal() {
	//alert("hai");
	//return false;
	var grosstot = 0, discamt = 0, taxamt = 0, cgstamt = 0, sgstamt =0, igstamt =0, addamt = 0, lessamt = 0, cashdisc = 0, rndoff = 0, net_total = 0, diff = 0, diffamt = 0, deliverychrg = 0,tval =0,trans_chage = 0;
		
	if(document.getElementById("gross_amt").value == "") {
		grosstot = 0;
	} else {
		grosstot = document.getElementById("gross_amt").value;
	}
	//alert(grosstot);
	if(document.getElementById("netdisc_amt").value == "") {
		discamt = 0;
	} else {
		discamt = document.getElementById("netdisc_amt").value;
	}
	
/*	if(document.getElementById("nettax_amt").value == "") {
		taxamt = 0;
	} else {
		taxamt = document.getElementById("nettax_amt").value;
	}*/
	if(document.getElementById("netcgst_amt").value == "") {
		cgstamt = 0;
	} else {
		cgstamt = document.getElementById("netcgst_amt").value;
	}
	if(document.getElementById("netsgst_amt").value == "") {
		sgstamt = 0;
	} else {
		sgstamt = document.getElementById("netsgst_amt").value;
	}
	if(document.getElementById("netigst_amt").value == "") {
		igstamt = 0;
	} else {
		igstamt = document.getElementById("netigst_amt").value;
	}
	if(document.getElementById("netcess_amt").value == "") {
		igstamt = 0;
	} else {
		igstamt = document.getElementById("netcess_amt").value;
	}
	if(document.getElementById("add_amt").value == "") {
		addamt = 0;
	} else {
		addamt = document.getElementById("add_amt").value;
	}
	
	if(document.getElementById("less_amt").value == "") {
		lessamt = 0;
	} else {
		lessamt = document.getElementById("less_amt").value;
	}
	
	if(document.getElementById("cashdisc_amt").value == "") {
		cashdisc = 0;
	} else {
		cashdisc = document.getElementById("cashdisc_amt").value;
	}
	if(document.getElementById("sal_disc").value == "") {
		sal_disc = 0;
	} else {
		sal_disc = document.getElementById("sal_disc").value;
	}

	if(document.getElementById("trans_chage").value == "") {
		trans_chage = 0;
	} else {
		trans_chage = document.getElementById("trans_chage").value;
	}
	/*if(document.getElementById("rndoff_amt").value == "") {
		rndoff = 0;
	} else {
		rndoff = document.getElementById("rndoff_amt").value;
	}*/
	if(document.getElementById("gross_amt").value == "") {
		total = 0;
	} else {
		tval = parseFloat(document.getElementById("gross_amt").value) ;//- parseFloat(document.getElementById("netdisc_amt").value)
		total = parseFloat(tval) + parseFloat(document.getElementById("netcgst_amt").value)+ parseFloat(document.getElementById("netsgst_amt").value)+ parseFloat(document.getElementById("netigst_amt").value)+ parseFloat(document.getElementById("netcess_amt").value);
		
	}
	
	if(document.getElementById("delcharge").value == "")
	{
	deliverychrg = 0;
	}else {
		deliverychrg = document.getElementById("delcharge").value;
	}
	if($('#earned_label').val() == ''){
		var earned_label = 0;
	}else{
		var earned_label = $('#earned_label').val();
	}
	//alert(total);
document.getElementById("total").value = total.toFixed(2);
//net_total = parseFloat(grosstot) - parseFloat(discamt) + parseFloat(taxamt) + parseFloat(addamt) - parseFloat(lessamt) - parseFloat(cashdisc);

net_total = (parseFloat(total) + parseFloat(addamt)- parseFloat(lessamt) - parseFloat(cashdisc)) - parseFloat(sal_disc) - parseFloat(earned_label); 
	//alert(earned_label);
diff = parseFloat(net_total) - parseInt(net_total);

	if (parseFloat(diff)>=0.50)
	{
		rndoff = 1-diff;
	}
	else
	{
		rndoff = -(diff);
	}
	document.getElementById("rndoff_amt").value = rndoff.toFixed(2);

	
	net_total = parseFloat(net_total) + parseFloat(rndoff)+parseFloat(trans_chage);
	//net_total = parseFloat(net_total) +parseFloat(trans_chage);

	document.getElementById("net_total").value = net_total.toFixed(2);
	document.getElementById("net_total_popup").value = net_total.toFixed(2);
	document.getElementById("net_tot_dis").style.display = "inline";
	document.getElementById('net_tot_dis').innerHTML =net_total.toFixed(2);
	
	//For Billing Type
	 if(parseInt(document.getElementById('net_total').value) > 0 )
	 {
		 if(document.getElementById('bill_type').value == 'PC')
		 {
			 document.getElementById('mem_id').setAttribute("readonly","true");
		 }
		document.getElementById('bill_type').setAttribute('disabled','true');
		document.getElementById('sale_type1').setAttribute('disabled','true');
	 }
	 else
	 {
		 document.getElementById('bill_type').removeAttribute('disabled');
		 document.getElementById('sale_type1').removeAttribute('disabled');
		 if(document.getElementById('bill_type').value == 'PC')
		 {
			 document.getElementById('mem_id').removeAttribute("readonly");
		 }
	 }
	 //End
	
	fn_gridnettotal();
	return true;;
}

function fn_gridnettotal() {
	
	var hidcnt = document.getElementById("hiddenprice").value;
	var addamount = 0, lessamount = 0, cashdisc = 0, temp_value1 = 0, temp_value2 = 0, temp_value3 = 0, gridnet = 0, j = 1, rndoff = 0, grosstot = 0, discamt = 0, taxamt = 0,cgstamt =0,cessamt = 0, sgstamt =0,igstamt=0, delcharge = 0;
	
	if(document.getElementById("gross_amt").value == "") {
		grosstot = 0;
	} else {
		grosstot = document.getElementById("gross_amt").value;
	}
	
	if(document.getElementById("netdisc_amt").value == "") {
		discamt = 0;
	} else {
		discamt = document.getElementById("netdisc_amt").value;
	}
	
	/*if(document.getElementById("nettax_amt").value == "") {
		taxamt = 0;
	} else {
		taxamt = document.getElementById("nettax_amt").value;
	}*/
		if(document.getElementById("netcgst_amt").value == "") {
		cgstamt = 0;
	} else {
		cgstamt = document.getElementById("netcgst_amt").value;
	}	
	
	if(document.getElementById("netsgst_amt").value == "") {
		sgstamt = 0;
	} else {
		sgstamt = document.getElementById("netsgst_amt").value;
	}
	
	
	if(document.getElementById("netcess_amt").value == "") {
		cessamt = 0;
	} else {
		cessamt = document.getElementById("netcess_amt").value;
	}
	
	if(document.getElementById("netigst_amt").value == "") {
		igstamt = 0;
	} else {
		igstamt = document.getElementById("netigst_amt").value;
	}
	if(document.getElementById("gross_amt").value == "") {
		total = 0;
	} else {
		total = parseFloat(document.getElementById("gross_amt").value) + parseFloat(document.getElementById("netcgst_amt").value)+ parseFloat(document.getElementById("netsgst_amt").value)+ parseFloat(document.getElementById("netigst_amt").value)+ parseFloat(document.getElementById("netcess_amt").value);
	}

	if(document.getElementById("add_amt").value == "") {
		addamount = 0;
	} else {
		addamount = document.getElementById("add_amt").value;
	}
	
	if(document.getElementById("less_amt").value == "") {
		lessamount = 0;
	} else {
		lessamount = document.getElementById("less_amt").value;
	}
	
	if(document.getElementById("cashdisc_amt").value == "") {
		cashdisc = 0;
	} else {
		cashdisc = document.getElementById("cashdisc_amt").value;
	}
	
	if(document.getElementById("sal_disc").value == "") {
		sal_disc = 0;
	} else {
		sal_disc = document.getElementById("sal_disc").value;
	}
	
	if(document.getElementById("delcharge").value == "") {
		delcharge = 0;
	} else {
		delcharge = document.getElementById("delcharge").value;
	}
	
	if(document.getElementById("rndoff_amt").value == "") {
		rndoff = 0;
	} else {
		rndoff = document.getElementById("rndoff_amt").value;
	}
	
	temp_value1 = parseFloat(addamount) - parseFloat(lessamount) - parseFloat(cashdisc) - parseFloat(sal_disc) + parseFloat(delcharge) + parseFloat(rndoff);
	
	for(j=1;j<=hidcnt;j++) {
		var del_row = $('#hid_delrow').val();
			if(del_row != ''){
				del_row = del_row.slice(0,-1);
				del_array = del_row.split(',');
				del_length = del_array.length;
				
				//j = j.trim();
				var a = del_array.indexOf(j.toString());
				//var a = $.inArray(j,del_array)
				if(a != '-1'){
					continue;
				}
			}
	
		if(document.getElementById("discamt"+j).value == "") {
			document.getElementById("discamt"+j).value = 0;
		} 
	/*	if(document.getElementById("tax_amt"+j).value == "") {
			document.getElementById("tax_amt"+j).value = 0;
		} */
			if(document.getElementById("cgst_amt"+j).value == "") {
			document.getElementById("cgst_amt"+j).value = 0;
		} 
			if(document.getElementById("sgst_amt"+j).value == "") {
			document.getElementById("sgst_amt"+j).value = 0;
		} 
		if(document.getElementById("igst_amt"+j).value == "") {
			document.getElementById("igst_amt"+j).value = 0;
		} 
		if(document.getElementById("cess_amt"+j).value == "") {
			document.getElementById("cess_amt"+j).value = 0;
		} 
		if(document.getElementById("netvalue"+j).value == "") {
			document.getElementById("netvalue"+j).value = 0;
		} 	
	
		temp_value2 = parseFloat(document.getElementById("tot_price"+j).value);
		temp_value3 = parseFloat(document.getElementById("tot_price"+j).value)  + parseFloat(document.getElementById("cgst_amt"+j).value)+ parseFloat(document.getElementById("sgst_amt"+j).value)+ parseFloat(document.getElementById("igst_amt"+j).value)+ parseFloat(document.getElementById("cess_amt"+j).value);
		
		
		gridnet = parseFloat(temp_value3) + ((parseFloat(temp_value1) / parseFloat(grosstot)) * parseFloat(temp_value2));
		
		document.getElementById("netvalue"+j).value = gridnet.toFixed(2);
		
		
	}
	fn_balamt();
	return true;;
	
}

function validate(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]|\./;
  if( !regex.test(key) && evt.keyCode != 9 && evt.keyCode != 8 && evt.keyCode != 109 ) {
 
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}

function fn_batchno(batno,ival)
{
	var comdisc = document.getElementById("common_discount").value;
var godcode=document.getElementById('sel_godown').value;
var pcode=document.getElementById('PCode'+ival).value;
var barcode=document.getElementById('barcode'+ival).value;
var terms = document.getElementById('sel_terms').value;
var supplier = document.getElementById('sel_supplier').value;
var enter_qty = document.getElementById('qty'+ival).value;
var rate_type = document.getElementById("txt_rate_type").value;
var new_flatoff = $("#common_discount").val(); 
				 if(new_flatoff !="")
				 {
					 var comdisc = new_flatoff;
				 }else{
					 var comdisc = $("#disc"+ival).val();
				 }

//alert(enter_qty);
var newival=parseInt(ival)+1;
if(batno != '0')
	{
		$.ajax({
		   type: 'POST',
		   url: 'fn_sales.php',
		   data:{
				type : 'batch_details',
				batno : batno,
				pcode : pcode,
				barcode : barcode,
				godcode : godcode,
				terms : terms,
				supplier : supplier,
				discount : comdisc,
				enter_qty : enter_qty,
				rate_type : rate_type,
			},
		   success: function(msg){
			    
			   msg=msg.split("~!");
			   if(msg[0].trim()!="0")
			   {
				 
				 /*var disc_price = msg[3]*disc/100;
				 msg_val= msg[3] - disc_price;
				   var tot_price=parseFloat(enter_qty)*msg_val;*/
				    
				document.getElementById('exp_dt'+ival).value = msg[0].trim();
				document.getElementById('prod_dt'+ival).value = msg[1].trim();
				document.getElementById('hidqty'+ival).value = msg[2].trim();
				document.getElementById('mrp'+ival).value = msg[3].trim();
				document.getElementById('mrpo'+ival).value = msg[4].trim();
				document.getElementById('ptr'+ival).value = msg[5].trim();
				//document.getElementById('tot_price'+ival).value = msg[5].trim();
				//document.getElementById('barcode'+newival).focus();
				document.getElementById("stk_id").style.display = "block";
					document.getElementById("stk_id").innerHTML ="<span class='count_top'><i class='fa fa-info-circle'></i> Current Stock</span><div class='count green'>"+msg[2]+"</div>";
				var scanning = document.getElementById('scanning').value;
				tmpval = parseInt(ival)+parseInt(1);
				if(scanning==1)
				{
					document.getElementById('barcode'+tmpval).focus();
				}
				else
				{
					document.getElementById('qty'+ival).select();
				}
				//fn_qty_prod(enter_qty,ival);
				if($('#Weight_machine').val() == 1){
					getweight(ival);
				}else{
					//document.getElementById('qty'+ival).value = msg[4];
					document.getElementById('qty'+ival).value = '1';
					//alert("test");
					fn_qty_prod(1,ival);
				}
				//getweight(ival);
				total_price();
			   }
			   else
			   {
			   //alert("This Batch date is expired you cannot proceed this batch");
			   alert_popup("This Batch date is expired you cannot proceed this batch","RED",'');
			   document.getElementById('batch'+ival).value = 0;
			   document.getElementById('exp_dt'+ival).value = '';
			   document.getElementById('prod_dt'+ival).value = '';
			   document.getElementById('ptr'+ival).value = '';
			   document.getElementById('hidqty'+ival).value=document.getElementById('hidqtytemp'+ival).value;
			   document.getElementById('qty'+ival).value = '';
			   document.getElementById("stk_id").style.display = "block";
			   document.getElementById("stk_id").innerHTML ="<span class='count_top'><i class='fa fa-info-circle'></i> Current Stock</span><div class='count green'>"+document.getElementById('hidqtytemp'+ival).value+"</div>";
			  
			   
				}
		    }
		});
	} else {
		document.getElementById('batch'+ival).value = 0;
		document.getElementById('exp_dt'+ival).value = '';
		document.getElementById('prod_dt'+ival).value = '';
		document.getElementById('ptr'+ival).value = '';
		document.getElementById('hidqty'+ival).value=document.getElementById('hidqtytemp'+ival).value;
		document.getElementById('qty'+ival).value = '';
		document.getElementById("stk_id").style.display = "block";
			document.getElementById("stk_id").innerHTML ="<span class='count_top'><i class='fa fa-info-circle'></i> Current Stock</span><div class='count green'>"+document.getElementById('hidqtytemp'+ival).value+"</div>";

		}
		total_price();
}
</script>

<script language="javascript">
	function fn_invdt(invno)
{
	if(invno != "") {
		
		$.ajax({
		   type: 'POST',
		   url: 'fn_sales.php',
		   data:{
				type : 'inv_invdt',
				invno : invno,
		   },
		   success: function(msg){
		  //		alert(msg);
		   		msg = msg.split('~');
		 	//	document.getElementById("InvDt").value = msg[1];
		 		document.getElementById("ledger_name").value = msg[2];
		 		document.getElementById("add1").value = msg[3];
		 		document.getElementById("city").value = msg[4];
		 		document.getElementById("mobile_no").value = msg[5];
		 		document.getElementById("sel_godown").value = msg[6];
				document.getElementById("scrollheight").innerHTML = msg[7];
				document.getElementById("hiddenprice").value = msg[8];
				//document.getElementById('myModal6').style.display = 'none';
				$('#myModal6').hide();
				if(msg[5] != ''){
					check_mobile(msg[5]);
				}
				//alert(msg[10]);
				if(msg[10] == 0 ){
					$("#get_gst").attr("checked",false);
				}else{
					$("#get_gst").attr("checked",true);
				}
				fn_recal(msg[8]);		   }

		 });
		return false;
	} else {
		
		var row_cnt,i;
		if(document.getElementById('hiddenprice').value == '' ) { 
			row_cnt = 0;
		} else { 
			row_cnt = 0; 
		}
		
		document.getElementById('prods_rtn_ALL').checked = false;
		for(i = 1; i < row_cnt; i++)
		{
			document.getElementById('prods_rtn'+i).checked = false;
			fn_prodreset(i);
		}
	  }
}
$(document).ready(function(){
	$('#myModal6').click(function(e){
		e.stopPropagation();
	});
});
function fn_saldc(saldc_no)
{
	if(saldc_no != "") {
		
		$.ajax({
		   type: 'POST',
		   url: 'fn_saldc.php',
		   data:{
				type : 'inv_saldc',
				saldc_no : saldc_no,
		   },
		   success: function(msg){
		  //		alert(msg);
		   		msg = msg.split('~');
				
				var dcval = $("#dcvalue").val('1');
				//alert(dcval);
		 	//	document.getElementById("InvDt").value = msg[1];
			document.getElementById("sel_supplier").value = msg[2];
		 		document.getElementById("customer").value = msg[2];
		 		document.getElementById("address").value = msg[3];
		 		document.getElementById("place").value = msg[4];
		 		document.getElementById("phone").value = msg[5];
		 		document.getElementById("sel_godown").value = msg[6];
				document.getElementById("mrn_table").innerHTML = msg[7];
				document.getElementById("hiddenprice").value = msg[8];
				var sel = document.getElementById("sel_supplier");
 sel.options[sel.selectedIndex].text = msg[2];
				//alert(msg[10]);
				if(msg[10] == 0 ){
					document.getElementById("get_gst1").disabled = false;
					document.getElementById("get_gst1").checked = true;
					document.getElementById("get_gst2").checked = false;
					document.getElementById("get_gst2").disabled = true;
					
	
				}else{
					document.getElementById("get_gst2").disabled = false;
					document.getElementById("get_gst2").checked = true;
					document.getElementById("get_gst1").checked = false;
					document.getElementById("get_gst1").disabled = true;
				}
			//	document.getElementById("salesrep").value = msg[9];
				//returnProductAll(); 
		
				fn_recal(msg[8]);
						//returnProduct(ival);
				//total_price();
		   }
		 });
		return false;
	} else {
		
		var row_cnt,i;
		if(document.getElementById('hiddenprice').value == '' ) { 
			row_cnt = 0;
		} else { 
			row_cnt = parseInt(document.getElementById('hiddenprice').value) + 1; 
		}
		
		document.getElementById('prods_rtn_ALL').checked = false;
		for(i = 1; i < row_cnt; i++)
		{
			document.getElementById('prods_rtn'+i).checked = false;
			fn_prodreset(i);
		}
	  }
}


function fn_recal(row)
{
	for(i=1;i<=row;i++)
	{
		var qtt = document.getElementById("qty"+i).value;
		if(qtt>0)
		{
			fn_qty_prod(qtt,i);
		}else{
			if($('#PCode'+i).val() != ''){
				returnProduct_srt(i);
			}
		}
	}	
}
function fn_prodreset(ival)
{
	 document.getElementById('PCode'+ival).value = '';	    
	 document.getElementById('prdname'+ival).value = '';	
	 document.getElementById('uom'+ival).value = '';
	 document.getElementById('hdnuom'+ival).value = '';	
	 document.getElementById('batch'+ival).value = '';
	 document.getElementById('qty'+ival).value = '';
	 //document.getElementById('hidqty'+ival).value = '';
	 document.getElementById('disc'+ival).value = '';
	 document.getElementById('p_price'+ival).value = '';
	 //document.getElementById('s_price'+ival).value =''; 
	 document.getElementById('mrp'+ival).value = '';
	 document.getElementById('tot_price'+ival).value = '';
	 document.getElementById('tax_per'+ival).value = '';
	 document.getElementById('tax_amt'+ival).value = '';
	 document.getElementById('valwithtax'+ival).value ='';
	 document.getElementById('netvalue'+ival).value = '';
	 document.getElementById('batchrecno'+ival).value ='';
	 document.getElementById('discamt'+ival).value = '';
	 //document.getElementById('mop'+ival).value = '';
	 document.getElementById('taxtype'+ival).value = '';
	 document.getElementById('taxtypedesc'+ival).value = '';
	 document.getElementById('costrate'+ival).value = '';
	 //document.getElementById('godown'+ival).value = '';
	 //document.getElementById('invsno'+ival).value = '';
	 document.getElementById('hid_tot_price'+ival).value = '';
	 document.getElementById('hid_disc'+ival).value = '';
	 document.getElementById('hid_discamt'+ival).value = '';
	 document.getElementById('hid_cgst_amt'+ival).value = '';
	 document.getElementById('hid_sgst_amt'+ival).value = '';
	 document.getElementById('hid_igst_amt'+ival).value = '';
	 total_price();
	
}

function MRN_Validation() {
	//alert(1);
	//alert(inv_date);
	var sel_sup = document.getElementById("sel_supplier").value; 
	var invoice = document.getElementById("mrnno").value;
	var inv_date = document.getElementById("invoicedate").value;
	var barcode_val = document.getElementById("barcode").value;
	
	if(barcode_val == "")
	{ 
		//alert("Enter the valid Barcode");
		alert_popup("Enter the valid Barcode","RED",'barcode');
		document.getElementById("barcode").focus();
		return false;
	}
	if(invoice == "") {
		//alert("Enter the Invoice Number");
		alert_popup("Enter the Invoice Number","RED",'mrnno');
		document.getElementById("mrnno").focus();
		return false;
	}
	if(inv_date == "") {
		//alert("Select the Invoice Date");
		alert_popup("Select the Invoice Date","RED",'invoicedate');
		document.getElementById("invoicedate").focus();
		return false;
	}
	if(parseFloat(document.getElementById("recd_cnt").value) >= parseFloat(document.getElementById("pend_cnt").value)){
		///alert("Already You have reached Discount Product This Year");
		alert_popup("Already You have reached Discount Product This Year","RED",'mem_id');
		document.getElementById("mem_id").value="";
		document.getElementById("mem_id").focus();
		return false;
	}
	/*if(parseFloat(document.getElementById("hdnnet_qty").value) >= parseFloat(document.getElementById("pend_cnt").value)){
		   alert("Already You have reached Discount Product This Year");
		   document.getElementById("mem_id").value="";
		   document.getElementById("mem_id").focus();
		   return false;
	}*/
	
		
	
}


/***********************************function for cardnumber base insert start**************************/
	function card_number(card_no)
{
	var cust_code = $('#slcode_no').val();
	//alert(cust_code);
	if(card_no!='')
	{
		
		$.ajax({
	   type: 'POST',
	   url: 'fn_sales.php',
	   data:{
			type : 'getcard_cusdetails',
			card_no : card_no,
			cust_code : cust_code,
	   },
	   success: function(msg)
	   {
			if(msg!=0)
			{
			msg = msg.split("~");
			
			document.getElementById("customer").value = msg[0].trim();
			document.getElementById("address").value = msg[1].trim();
			document.getElementById("place").value = msg[2].trim();
			document.getElementById("lyltpoints").value = msg[3].trim();
			document.getElementById("hid_cardid").value = msg[4].trim();
			document.getElementById("hid_cusid").value = msg[5].trim();
			document.getElementById("phone").value = msg[6].trim();
			if(document.getElementById('savebtn'))
			document.getElementById("savebtn").style.display='none';
			//document.getElementById("savebtn_cardno").style.display='none';
			//alert(msg[0]);
			if(document.getElementById("updtbtn"))
			document.getElementById("updtbtn").style.display='';
			//document.getElementById("updatecard_num").style.display='';
			
			}
			else
			{
			/*document.getElementById("customer").value = '';
			document.getElementById("address").value = '';
			document.getElementById("place").value = '';
			document.getElementById("lyltpoints").value = '';
			document.getElementById("rdmpoints").value = '';
			document.getElementById("erndamt").value = '';
			document.getElementById("hid_cardid").value = '';
			document.getElementById("hid_cusid").value = '';
			document.getElementById("phone").value = '';
			document.getElementById("savebtn_cardno").style.display='';
			document.getElementById("savebtn").style.display='none';
			document.getElementById("updtbtn").style.display='none';
			document.getElementById("updatecard_num").style.display='none';*/
			return false;
			}
	   }
	});
	return false;

		
		
		
}
else
{
	document.getElementById("customer").value = '';
document.getElementById("address").value = '';
document.getElementById("place").value = '';


document.getElementById("lyltpoints").value = '';
document.getElementById("rdmpoints").value = '';
document.getElementById("erndamt").value = '';
document.getElementById("hid_cardid").value = '';
document.getElementById("hid_cusid").value = '';
document.getElementById("phone").value = '';
//document.getElementById("displayres").innerHTML = '';
document.getElementById("savebtn").style.display='none';
document.getElementById("savebtn_cardno").style.display='none';
document.getElementById("updtbtn").style.display='none';
document.getElementById("updatecard_num").style.display='none';

}

}


function createlcard_no()
{
	var c=0;
var card_num=document.getElementById('card_num').value;
var cmob=document.getElementById('phone').value;
var cname=document.getElementById('customer').value;
var cadd=document.getElementById('address').value;
var cplace=document.getElementById('place').value;


if(c==0)
{
$.ajax({
	   type: 'POST',
	   url: 'fn_sales.php',
	   data:{
			type : 'SaveCusDetails_crdno',
			cname : cname,
			cadd : cadd,
			cplace : cplace,
			cmob : cmob,
			card_num: card_num,
			
	   },
	   success: function(msg)
	   {
			//alert(msg);
			msg=msg.split("~");
			document.getElementById('displayres').innerHTML=msg[0].trim();
			document.getElementById("hid_cardid").value = msg[2].trim();
			document.getElementById("hid_cusid").value = msg[1].trim();
			document.getElementById("savebtn_cardno").style.display='none';
			document.getElementById("updtbtn").style.display='';
	   }
	});
	return false;
}

}
	
	
	
	function updatecard_number()
	{
		var c=0 ;
		
		var card_num=document.getElementById('card_num').value;
		
		if(card_num=='')
{
c=1;
//alert("Enter Card Number");
alert_popup("Enter Card Number","RED",'card_num');
document.getElementById('card_num').focus();
return false;
}
		
		var cardid=document.getElementById('hid_cardid').value;
	if(c==0)
{
$.ajax({
	   type: 'POST',
	   url: 'fn_sales.php',
	   data:{
			type : 'UpdateCardnumber',
			cardid :cardid,
			card_num :card_num,
			
	   },
	   success: function(msg)
	   {
			//alert(msg);
			document.getElementById("card_num").value=msg.trim();
			if(msg!='')
			{
				//alert('Card Number Updated')
				alert_popup('Card Number Updated',"RED",'');
			}
		}
	});
	return false;
}
	}
	
	
	/***********************************function for cardnumber base insert End**************************/

	
function card_mem(mbno)
{
	//alert(345);
	var card_no= document.getElementById("card_num").value ;
	var supplier= document.getElementById("slcode_no").value ;
if(mbno!='' && card_no=='')
{
$.ajax({
	   type: 'POST',
	   url: 'fn_sales.php',
	   data:{
			type : 'getcusdetails',
			mbno : mbno,
			supplier : supplier,
	   },
	   success: function(msg)
	   {
	
			if(msg!=0)
			{
				
			msg = msg.split("~");
			//alert(msg[4]);
			document.getElementById("customer").value = msg[0].trim();
			document.getElementById("address").value = msg[1].trim();
			document.getElementById("place").value = msg[2].trim();
			document.getElementById("lyltpoints").value = msg[3].trim();
			document.getElementById("hid_cardid").value = msg[4].trim();
			document.getElementById("hid_cusid").value = msg[5].trim();
			document.getElementById("card_num").value = msg[6].trim();
			//document.getElementById("savebtn").style.display='none';
			//document.getElementById("updtcardbtn").style.display='';
			//document.getElementById("updtbtn").style.display='';
			//document.getElementById("updatecard_num").style.display='';
			}
			else
			{
				
				document.getElementById("card_num").value = '';
			document.getElementById("customer").value = '';
				
			document.getElementById("address").value = '';
			document.getElementById("place").value = '';
			document.getElementById("lyltpoints").value = '';
			document.getElementById("rdmpoints").value = '';
			document.getElementById("erndamt").value = '';
			document.getElementById("hid_cardid").value = '';
			document.getElementById("hid_cusid").value = '';
			//document.getElementById("savebtn").style.display='';
			//document.getElementById("updtcardbtn").style.display='none';
			//document.getElementById("updtbtn").style.display='none';
			//document.getElementById("updatecard_num").style.display='none';
			}
	   }
	});
	return false;
}
else
{
	document.getElementById("card_num").value = '';
document.getElementById("customer").value = '';
document.getElementById("address").value = '';
document.getElementById("place").value = '';
document.getElementById("lyltpoints").value = '';
document.getElementById("rdmpoints").value = '';
document.getElementById("erndamt").value = '';
document.getElementById("hid_cardid").value = '';
document.getElementById("hid_cusid").value = '';
//document.getElementById("displayres").innerHTML = '';
//document.getElementById("savebtn").style.display='';
//document.getElementById("updtbtn").style.display='none';
//document.getElementById("updatecard_num").style.display='none';
}
}

function redeem_calc(rdmpnt)
{
	var point=document.getElementById('lyltpoints').value;

if(parseFloat(rdmpnt) > parseFloat(point))
{
	//alert('The Given Redeem Points Is Greater than Available Loyalty Points');
	alert_popup('The Given Redeem Points Is Greater than Available Loyalty Points',"RED",'rdmpoints');
	document.getElementById('rdmpoints').value='';
	document.getElementById('rdmpoints').focus();

}
else
{
var cardid=document.getElementById('hid_cardid').value;
var supplier = document.getElementById('sel_supplier').value;
if(rdmpnt!='')
{
if(document.getElementById('sel_supplier').value!='')
{
$.ajax({
	   type: 'POST',
	   url: 'fn_sales.php',
	   data:{
			type : 'getrdmdetails',
			rdmpnt : rdmpnt,
			cardid : cardid,
			supplier : supplier,
	   },
	   success: function(msg)
	   {
			//alert(msg);
			document.getElementById('erndamt').value=msg.trim();
			var ear_lable_amt=msg.trim();
			
		//	alert(ear_lable_amt);
			document.getElementById('earned_label').value=parseFloat(ear_lable_amt).toFixed(2);
			var net_total=document.getElementById("net_total").value;
			
			var earn_amt=msg.trim();
			if(parseFloat(earn_amt) > parseFloat(net_total) )
			{
				//alert('Earned Amount Greater than Net Amount');
				alert_popup('Earned Amount Greater than Net Amount',"RED",'rdmpoints');
				document.getElementById('rdmpoints').value='';
				document.getElementById('erndamt').value=0;
				document.getElementById('earned_label').value=0;
				document.getElementById('payable_label').value=net_total.toFixed(2);
	document.getElementById('rdmpoints').focus();
	return false;
			}
			else
			{
	if(net_total=='')
	{
		net_total=0;
	}
	else
	{
	net_total=net_total;
	
	}
	total_price();
	var payable=parseFloat(net_total)-parseFloat(earn_amt);
	//document.getElementById("earned_label").value =earn_amt.toFixed(2);
	document.getElementById("payable_label").value =payable.toFixed(2);
	
}
			
	   }
	});
	return false;
}
else
{
//alert("No Loyalty Points Found");
alert_popup("No Loyalty Points Found","RED",'');
document.getElementById('rdmpoints').value='';
return false;
}
}
else
{
document.getElementById('erndamt').value='';
}
}
}

function createlcard()
{
var c=0;
var cmob=document.getElementById('phone').value;
var cname=document.getElementById('customer').value;
var cadd=document.getElementById('address').value;
var cplace=document.getElementById('place').value;
var card_num=document.getElementById('card_num').value;

/*if(cmob=='')
{
c=1;
alert("Enter Mobile Number");
document.getElementById('phone').focus();
return false;
}
if(cname=='')
{
c=1;
alert("Enter Customer Name");
document.getElementById('customer').focus();
return false;
}
if(cadd=='')
{
c=1;
alert("Enter Customer Address");
document.getElementById('address').focus();
return false;
}
if(cplace=='')
{
c=1;
alert("Enter Customer Place");
document.getElementById('place').focus();
return false;
}*/

if(card_num=='')
{
c=1;
//alert("Enter The Card Number");
alert_popup("Enter The Card Number","RED",'card_num');
document.getElementById('card_num').focus();
return false;
}

if(c==0)
{
$.ajax({
	   type: 'POST',
	   url: 'fn_sales.php',
	   data:{
			type : 'SaveCusDetails',
			cname : cname,
			cadd : cadd,
			cplace : cplace,
			cmob : cmob,
			card_num: card_num,
			
	   },
	   success: function(msg)
	   {
			//alert(msg);
			msg=msg.split("~");
			document.getElementById('displayres').innerHTML=msg[0].trim();
			document.getElementById("hid_cardid").value = msg[2].trim();
			document.getElementById("hid_cusid").value = msg[1].trim();
			document.getElementById("savebtn").style.display='none';
			document.getElementById("updtbtn").style.display='';
	   }
	});
	return false;
}
}

function updtlcard()
{
var c=0;
var mobno=document.getElementById('phone').value;
var custid=document.getElementById('hid_cusid').value;
var cname=document.getElementById('customer').value;
var cadd=document.getElementById('address').value;
var cplace=document.getElementById('place').value;

if(mobno=='')
{
c=1;
//alert("Enter Mobile Number");
alert_popup("Enter Mobile Number","RED",'phone');
document.getElementById('phone').focus();
return false;
}
if(cname=='')
{
c=1;
//alert("Enter Customer Name");
alert_popup("Enter Customer Name","RED",'customer');
document.getElementById('customer').focus();
return false;
}
if(cadd=='')
{
c=1;
//alert("Enter Customer Address");
alert_popup("Enter Customer Address","RED",'address');
document.getElementById('address').focus();
return false;
}
if(cplace=='')
{
c=1;
//alert("Enter Customer Place");
alert_popup("Enter Customer Place","RED",'place');
document.getElementById('place').focus();
return false;
}
if(c==0)
{
$.ajax({
	   type: 'POST',
	   url: 'fn_sales.php',
	   data:{
			type : 'UpdateCusDetails',
			cname : cname,
			cadd : cadd,
			cplace : cplace,
			mobno : mobno,
			custid : custid
			
	   },
	   success: function(msg)
	   {
			//alert(msg);
			document.getElementById('displayres').innerHTML=msg.trim();
			document.getElementById("savebtn").style.display='none';
			document.getElementById("updtbtn").style.display='';
	   }
	});
	return false;
}
}

function fn_mrndetails() {

	var rowcnt = document.getElementById("hiddenprice").value;	
	/*var checkBoxs = $('.chk_dcs:checked').length;*/
	var checkBoxs =0;
	var x=document.getElementsByName("chk_dc[]");
	checkBoxs=x.length;
	
	/*alert(checkBoxs);
	return false;*/
	
	var total="";
	var dc_val="";
	for(var i=1; i <= checkBoxs; i++)
	{		
	 	if(document.getElementById("chk_dc"+i).checked) {
		    if(total !='')
			{
				total += ',';
				dc_val += ',';
			}
			total += document.getElementById("chk_dc"+i).value;	
			dc_val += document.getElementById("hdn_valdc"+i).value;		
		}
		
	}	
/*	alert(total);
	alert(dc_val);
*/	
	
	
	$.ajax({
	   type: 'POST',
	   url: 'fn_sales.php',
	   data:{
			type : 'dc_details',
			total : total,
			dc_val : dc_val,
			rowcnt : rowcnt
	   },
	   success: function(msg)
	   {
			/*alert("hdncnt"+msg[2]);
			return false;*/
			msg = msg.split("~");
			
			document.getElementById("mrn_table").innerHTML = msg[0];
			document.getElementById("hiddenprice").value = msg[1];
			//document.getElementById("hdn_count").value=msg[2];	
			document.getElementById("hiddenprice").value=msg[2];	
			
			$(".chk_dcs").attr ( "disabled" , true );
			total_price();
	   }
	});
	return false;
		
	/*for(var i=1;i<=rowcnt;i++) {
		chk = document.getElementById("chk_dc"+i).value;
		alert(chk);
		if(document.getElementById("prdname"+i).value == "") {
			//alert(i);
			//break;
		}
	}*/
}

function fn_saltype(saltyp, ival) {
	if(saltyp == "G") {
		document.getElementById("free"+ival).readOnly=false;
	} else {
		document.getElementById("free"+ival).readOnly=true;
	}
	if(saltyp == "C") {
		document.getElementById("s_price"+ival).readOnly=false;
	} else {
		document.getElementById("s_price"+ival).readOnly=true;
	}
	if(saltyp == "R") {
		total_price();
	}
}


function fn_productReset()
{
	var row_cnt = document.getElementById('hiddenprice').value;
	var i =1; var flg = 1,ival = 0;
	if( flg > 0)
	{
		for(i=1; i<= row_cnt; i++)
		{
			ival = i;
			document.getElementById('barcode'+ival).value = "";
			document.getElementById('PCode'+ival).value = "";	    
			document.getElementById('prdname'+ival).value ="";	
			document.getElementById('uom'+ival).value = "";
			document.getElementById('hdnuom'+ival).value = "";	
			document.getElementById('batch'+ival).value ="";
			document.getElementById('qty'+ival).value ="";
			document.getElementById('hidqty'+ival).value ='';
			document.getElementById('disc'+ival).value = "";
			document.getElementById('p_price'+ival).value = "";
			document.getElementById('s_price'+ival).value =""; 
			document.getElementById('mrp'+ival).value = "";
			document.getElementById('mrpo'+ival).value = "";
			document.getElementById('marginper'+ival).value = "";
			document.getElementById('saving'+ival).value = "";
			document.getElementById('tot_price'+ival).value ="";
			document.getElementById('taxtypedesc'+ival).value = '';
		//	document.getElementById('taxtype'+ival).value = '';
		//	document.getElementById('tax_per'+ival).value = "";
		//	document.getElementById('tax_amt'+ival).value = '';
			document.getElementById('valwithtax'+ival).value ="";
			document.getElementById('netvalue'+ival).value = "";
			document.getElementById('batchrecno'+ival).value = '';
			document.getElementById('discamt'+ival).value = "";
			document.getElementById('mop'+ival).value = '';
		//	document.getElementById('taxtype'+ival).value ='';
			document.getElementById('taxtypedesc'+ival).value = '';
			document.getElementById('costrate'+ival).value = '';
			document.getElementById('godown'+ival).value = '';
			document.getElementById('msp'+ival).value = '';
			document.getElementById('TotPV'+ival).value = '';
			document.getElementById('hidqtytemp'+ival).value ='';
		}
		total_price();
	}
	return false;
}


function fn_resetValue(ival)
{
	document.getElementById('barcode'+ival).value = "";
	document.getElementById('PCode'+ival).value = "";	    
	document.getElementById('prdname'+ival).value ="";	
	document.getElementById('uom'+ival).value = "";
	document.getElementById('hdnuom'+ival).value = "";	
	document.getElementById('batch'+ival).value ="";
	document.getElementById('qty'+ival).value ="";
	document.getElementById('cgst_amt'+ival).value = '';
	document.getElementById('sgst_amt'+ival).value ='';
	document.getElementById('tot_price'+ival).value ='';
	document.getElementById('cgstspan'+ival).value ='';
	document.getElementById('sgstspan'+ival).value ='';
	document.getElementById('igstspan'+ival).value ='';
	document.getElementById('hidqty'+ival).value ='';
	document.getElementById('disc'+ival).value = "";
	document.getElementById('p_price'+ival).value = "";
	document.getElementById('s_price'+ival).value =""; 
	document.getElementById('mrp'+ival).value = "";
	document.getElementById('mrpo'+ival).value = "";
	document.getElementById('marginper'+ival).value = "";
	document.getElementById('saving'+ival).value = "";
	document.getElementById('tot_price'+ival).value ="";
	document.getElementById('taxtypedesc'+ival).value = '';
//	document.getElementById('taxtype'+ival).value = '';
	//document.getElementById('tax_per'+ival).value = "";
	//document.getElementById('tax_amt'+ival).value = '';
	document.getElementById('valwithtax'+ival).value ="";
	document.getElementById('netvalue'+ival).value = "";
	document.getElementById('batchrecno'+ival).value = '';
	document.getElementById('discamt'+ival).value = "";
	document.getElementById('mop'+ival).value = '';
	//document.getElementById('cgst_per'+ival).value ='';

	document.getElementById('tax_typ'+ival).value ='';
	//document.getElementById('sgst_per'+ival).value = '';

	document.getElementById('costrate'+ival).value = '';
	document.getElementById('godown'+ival).value = '';
	
	document.getElementById('msp'+ival).value = '';
	document.getElementById('batch'+ival).value = '0';
	document.getElementById('exp_dt'+ival).value = '';
	document.getElementById('prod_dt'+ival).value = '';

	/*document.getElementById('netvalue'+ival).value = msg[12];
	document.getElementById('margin'+ival).value = msg[9];	 
	document.getElementById('free'+ival).value = 0;*/		
	
	$('#ImageDiv'+ival).remove();
	//$('ImageDiv'+ival).hide();
	var hidedenprice = $('#hiddenprice').val();
	if(parseFloat(ival) == parseFloat(hidedenprice)){
		$('#hiddenprice').val(parseFloat(ival)-1);
	}else{
		var del_rows = $("#hid_delrow").val();
		del_rows = del_rows+ival+',';
		$("#hid_delrow").val(del_rows);
	}

	total_price();
	return false;
}
/*netqty = parseFloat(qty) * parseFloat(saluom);
		
		if(hdqty < netqty) {
			alert("Quantity not Available in this Batch");
			document.getElementById('qty'+ival).value = "";
			document.getElementById('qty'+ival).focus();
			return false;
		} else {

*/


function fn_free(free, ival) {
	var qty = 0;
	
	if(free <= 0) {
		//alert("Please Enter the Correct Quantity");
		alert_popup("Please Enter the Correct Quantity","RED",'free'+ival);
		document.getElementById('free'+ival).value = "";
		document.getElementById('free'+ival).focus();
		return false;
	} else {
	
	var qty = document.getElementById('qty'+ival).value;
	var prd_name = document.getElementById('prdname'+ival).value;	
	var margin = document.getElementById('margin'+ival).value;
		
	$.ajax({
	   type: 'POST',
	   url: 'fn_sales.php',
	   data:{
			type : 'free_details',
			qty : qty,
			free : free,
			margin : margin,
			prd_name : prd_name			
	   },
	   success: function(msg){
	  /* alert(msg);
	   return false;*/
	 
	 msg =msg.split('~');	
	 document.getElementById('free'+ival).value = msg[0];
	 document.getElementById('total'+ival).value = msg[1];
	}
  });
  return false;
 }
}

function fn_discper(disc, ival) {
	var discamt = 0, netval = 0, valtax = 0;
	var mrp = $("#mrp"+ival).val();
	discamt = parseFloat(mrp) * parseFloat(disc)/100;
	$("#hid_discamt"+ival).val(discamt);
	fn_qty_prod($("#qty"+ival).val(),ival);
}

function fn_taxper(taxcode, ival) {
	//alert(taxcode+" "+ival);
	var qty = 0,prddesc ='';
	var discper = 0;
	var pprice = 0,s_price = 0,discamt = 0;
	prddesc = document.getElementById('prdname'+ival).value
	qty = document.getElementById('qty'+ival).value;
	pprice = document.getElementById('p_price'+ival).value;
	discper = document.getElementById('disc'+ival).value;
	s_price = document.getElementById('mrp'+ival).value;
	discamt = document.getElementById('discamt'+ival).value;
	
	if(prddesc == '')
	{
		document.getElementById('taxtype'+ival).value = '';
		alert_popup("Please Enter Item Description","RED",'prdname'+ival);
		//alert("Please Enter Item Description");
		document.getElementById('prdname'+ival).focus();
		return false;
	}
	else if(taxcode == '')
	{
		document.getElementById('taxtype'+ival).value = '';
		//document.getElementById("tax_per"+ival).value = '';
	//	document.getElementById("tax_amt"+ival).value = 0;
		document.getElementById("cgst_per"+ival).value = '';
		document.getElementById("cgst_amt"+ival).value = 0;
			document.getElementById("sgst_per"+ival).value = '';
	document.getElementById("sgst_amt"+ival).value = 0;
	document.getElementById("tax_typ"+ival).value = '';
	document.getElementById("valwithtax"+ival).value = s_price;
	document.getElementById("netvalue"+ival).value = s_price;
		
		total_price();
		//alert("Please Select Tax");
		alert_popup("Please Select Tax","RED",'taxtype'+ival);
		document.getElementById('taxtype'+ival).focus();
		return false;
	}
	else if(prddesc != '' && taxcode != '')
	{
	
		$.ajax({
		   type: 'POST',
		   url: 'fn_sales.php',
		   data:{
				type : 'ret_tax_details',
				taxcode : taxcode,
				qty : qty,
				discper : discper,
				pprice : pprice,
				s_price : s_price,
				discamt : discamt
			},
		   success: function(msg){
			   //alert(msg);
			msg = msg.split("~");
			//document.getElementById("tax_per"+ival).value = msg[1];
			//document.getElementById("tax_amt"+ival).value = msg[2];
			document.getElementById("valwithtax"+ival).value = msg[3];
			document.getElementById("netvalue"+ival).value = msg[4];
			document.getElementById('tot_price'+ival).value = msg[5];
			
			document.getElementById("tax_typ"+ival).value = msg[6];
			
			total_price();
		  }
		});
		return false;
	} 
}

function fn_purprice(purprice, ival) {
		//alert(purprice+" "+ival);
	if(parseFloat(purprice) <= 0) {
		alert("Please Enter the Correct Purchase Price");
		document.getElementById('p_price'+ival).value = "";
		document.getElementById('p_price'+ival).focus();
		return false;
	} else {
		var tot_price = 0;
		var discamt = 0;
		var taxamt = 0;
		var valuewithtax = 0;
		var profit = 0;
		var netamt = 0;
		var margin = 0;
		var salprice = 0;
		
		tot_price = parseFloat(document.getElementById('qty'+ival).value) * parseFloat(purprice);
		discamt = (parseFloat(tot_price) / 100) * parseFloat(document.getElementById('disc'+ival).value);
	//	taxamt = (parseFloat(tot_price)- parseFloat(discamt)) / 100 * parseFloat(document.getElementById('tax_per'+ival).value);
	cgstamt = (parseFloat(tot_price)- parseFloat(discamt)) / 100 * parseFloat(document.getElementById('cgst_per'+ival).value);
	sgstamt = (parseFloat(tot_price)- parseFloat(discamt)) / 100 * parseFloat(document.getElementById('sgst_per'+ival).value);
		valuewithtax = (parseFloat(tot_price)- parseFloat(discamt)) +  parseFloat(cgstamt)+ parseFloat(sgstamt);
		profit = (parseFloat(document.getElementById('mrp'+ival).value) - parseFloat(purprice)) / parseFloat(purprice) * 100;
		netamt = (parseFloat(tot_price) - parseFloat(discamt)) + parseFloat(cgstamt)+ parseFloat(sgstamt);
		margin = (parseFloat(purprice) * parseFloat(document.getElementById('margin'+ival).value)) / 100;
		salprice = parseFloat(purprice) + parseFloat(margin);
		
	    document.getElementById('tot_price'+ival).value = tot_price.toFixed(2);
		document.getElementById('discamt'+ival).value = discamt.toFixed(2);
		document.getElementById('tax_amt'+ival).value = taxamt.toFixed(2);
		document.getElementById('valwithtax'+ival).value = valuewithtax.toFixed(2);
		document.getElementById('profit'+ival).value = profit.toFixed(2);
		document.getElementById('netvalue'+ival).value = netamt.toFixed(2);
		document.getElementById('mrp'+ival).value = salprice.toFixed(2);
	}
	total_price();
}

function fn_salprice(salprice, ival) {
		var mop,mrp,msp;
	if(document.getElementById('mop'+ival).value == '') {
		mop =0;
	}else {
		mop = document.getElementById('mop'+ival).value;
	}
	
	if(document.getElementById('mrp'+ival).value == '') {
		mrp =0;
	}else {
		mrp = document.getElementById('mrp'+ival).value;
	}
	
	if(document.getElementById('msp'+ival).value == '') {
		msp =0;
	}else {
		msp = document.getElementById('msp'+ival).value;
	}
	

	if(parseFloat(salprice) <= 0) {
		
		document.getElementById('s_price'+ival).value = "";
		document.getElementById("tax_amt"+ival).value = 0;
		document.getElementById("valwithtax"+ival).value = 0;
		document.getElementById("tot_price"+ival).value = 0;
		total_price();
		//alert("Please Enter the Correct Sales Price");
		alert_popup("Please Enter the Correct Sales Price","RED",'s_price'+ival);
		document.getElementById('s_price'+ival).focus();
		return false;
	} else if((parseFloat(salprice) < parseFloat(msp)) || (parseFloat(salprice) > parseFloat(mop)))  {
		document.getElementById('s_price'+ival).value = "";
		document.getElementById("tax_amt"+ival).value = 0;
		document.getElementById("valwithtax"+ival).value = 0;
		document.getElementById("tot_price"+ival).value = 0;
		total_price();
		//alert("Sales Price Should be within "+msp+" and " +mop);
		alert_popup("Sales Price Should be within "+msp+" and " +mop,"RED",'s_price'+ival);
		document.getElementById('s_price'+ival).focus();
		return false;
	} else {
		
		var qty = document.getElementById('qty'+ival).value;
		var pcode = document.getElementById('PCode'+ival).value;
		//var tax_code = document.getElementById('taxtype'+ival).value;
		
		$.ajax({
		   type: 'POST',
		   url: 'fn_sales.php',
		   data:{
				type : 'WPVSalesRate',
				salprice : salprice,
				qty : qty,
				pcode : pcode,
				tax_code : tax_code,
			},
		   success: function(msg){
			  //alert(msg);
			msg = msg.split("~");
			//document.getElementById("tax_per"+ival).value = msg[0];
			//document.getElementById("tax_amt"+ival).value = msg[3];
			document.getElementById("valwithtax"+ival).value = msg[1];
			document.getElementById("tot_price"+ival).value = msg[2];
			total_price();
		  }
		});
		return false;
	}
	//total_price();
} 

function fn_mrp(mrpprice, ival) {
	var price_validation = $("#price_validation").val();
	if(parseFloat(mrpprice) <= 0) {
		//alert("Please Enter the Correct MRP");
		alert_popup("Please Enter the Correct MRP","RED",'mrp'+ival);
		document.getElementById('mrp'+ival).value = "";
		document.getElementById('mrp'+ival).focus();
		return false;
	} else if(price_validation == 1){

		if(parseFloat(mrpprice) > parseFloat(document.getElementById('mrpo'+ival).value)) {
			//alert("Sales Price Should not be Greater than MRP");
			alert_popup("Sales Price Should not be Greater than MRP","RED",'mrp'+ival);
			document.getElementById('mrp'+ival).value = "";
			document.getElementById('mrp'+ival).focus();
			return false;
		}else{
			var disc = $("#disc"+ival).val();
			fn_discper(disc, ival);
			//qtyCalculation(qty,ival);
			tmpv = parseInt(ival)+ parseInt(1);
			var barhid = document.getElementById('hidbar').value;
			if(barhid==1)
			{
				document.getElementById('prdname_sing').focus();
			}
			else
			{
				document.getElementById('barcode_sing').focus();
			}
		}
	}else{
		//alert('asd');
		var disc = $("#disc"+ival).val();
		fn_discper(disc, ival);
		//qtyCalculation(qty,ival);
		tmpv = parseInt(ival)+ parseInt(1);
		var barhid = document.getElementById('hidbar').value;
		if(barhid==1)
		{
			document.getElementById('prdname_sing').focus();
		}
		else
		{
			document.getElementById('barcode_sing').focus();
		}
	}
} 

function fn_addamt(addamount) {
	if(parseFloat(addamount) <= 0) {
		//alert("Add Amount Should be Greater than Zero");
		alert_popup("Add Amount Should be Greater than Zero","RED",'add_amt');
		document.getElementById('add_amt').value = "";
		document.getElementById('add_amt').focus();
	} else {
		total_price();
	}
}

function fn_lessamt(lessamount) {
	if(parseFloat(lessamount) <= 0) {
		//alert("Less Amount Should be Greater than Zero");
		alert_popup("Less Amount Should be Greater than Zero","RED",'less_amt');
		document.getElementById('less_amt').value = "";
		document.getElementById('less_amt').focus();
	} else {
		total_price();
	}
}

function fn_saldisc(saldisc) {
	if(parseFloat(saldisc) <= 0) {
		document.getElementById('sal_disc').value = "0";
		total_price();
		//alert("Sales Discount Should be Greater than Zero");
		alert_popup("Sales Discount Should be Greater than Zero","RED",'sal_disc');
		document.getElementById('sal_disc').focus();
	} else if(parseFloat(saldisc)>= document.getElementById('total').value ){
		document.getElementById('sal_disc').value = "0";
		total_price();
		//alert("Discount Should be Less Than Total Amount");
		alert_popup("Discount Should be Less Than Total Amount","RED",'sal_disc');
		document.getElementById('sal_disc').focus();
	}else {
		total_price();
	}
}


function fn_cashdiscamt(cashamount) {
	if(parseFloat(cashamount) <= 0) {
		//alert("Cash Discount Amount Should be Greater than Zero");
		alert_popup("Cash Discount Amount Should be Greater than Zero","RED",'cashdisc_amt');
		document.getElementById('cashdisc_amt').value = "";
		document.getElementById('cashdisc_amt').focus();
	} else {
		total_price();
	}
}

/*function fn_rndoffamt(rndoffamt) {
	if(parseFloat(rndoffamt) <= 0) {
		alert("Round Off Amount Should be Greater than Zero");
		document.getElementById('rndoff_amt').value = "";
		document.getElementById('rndoff_amt').focus();
	} else {
		total_price();
	}
}
*/


function fn_billingtype()
{
	var mem_val=document.getElementById("bill_type").value;
	var sal_typ=document.getElementById("sale_type1").value;
	document.getElementById('bill_type1').value = mem_val;
	document.getElementById('sale_type').value = sal_typ;
	//alert(mem_val);
	var row_cnt,i;
	if(document.getElementById('hiddenprice').value == '' ) { 
		row_cnt = 6;
	} else { 
		row_cnt = parseInt(document.getElementById('hiddenprice').value) + 1; 
	}
	
	document.getElementById('mem_id').value = '';
	document.getElementById('ref_id').value = '';
	document.getElementById('mem_cardtype').value = '';
	
	if(mem_val == 'PC')
	{
		document.getElementById('mem_id').removeAttribute("readonly");
		//document.getElementById('ref_id').value = '';
		document.getElementById('ref_id').setAttribute("readonly","readonly");
		for(i = 1; i < row_cnt; i++)
		{
			document.getElementById('s_price'+i).setAttribute("readonly","true");								   
		}
	}
	else if(mem_val == 'PV')
	{
		document.getElementById('ref_id').removeAttribute("readonly");
		//document.getElementById('mem_id').value = '';
		document.getElementById('mem_id').setAttribute("readonly","readonly");
		for(i = 1; i < row_cnt; i++)
		{
			document.getElementById('s_price'+i).setAttribute("readonly","true");								   
		}
	}
	else if(mem_val == 'WPV')
	{
		//alert(mem_val);
		//document.getElementById('mem_id').value = '';
		//document.getElementById('ref_id').value = '';
		document.getElementById('mem_id').setAttribute("readonly","readonly");
		document.getElementById('ref_id').setAttribute("readonly","readonly");
		for(i = 1; i < row_cnt; i++)
		{
			//alert(i);
			document.getElementById('s_price'+i).removeAttribute("readonly");
		}
	}
	
	
	/*else
	{
		for(i = 1; i < row_cnt; i++)
		{
			document.getElementById('s_price'+i).setAttribute("readonly","true");								   
		}
	}*/
	//fn_member();
}

function fn_member(){
	
	var mem_val=document.getElementById("mem_id").value;
	/*if(mem_val != '')
	{
		document.getElementById('ref_id').setAttribute('readonly','readonly');
	}
	else if(mem_val == '')
	{
		document.getElementById('ref_id').removeAttribute('readonly');
	}*/
	var billtypes=document.getElementById("bill_type").value;
	var terms = document.getElementById('sel_terms').value;
	var sal_typ=document.getElementById("sale_type").value;
	var aj_type = 'MemberExists'+sal_typ;
	if(mem_val != '')
	{
		$.ajax({
		   type: 'POST',
		   url: 'fn_sales.php',
		   data:{
				type : aj_type,
				mem_val : mem_val,
				billtypes:billtypes
			},
		   success: function(msg){	
			  //   alert("asfsadf==>"+msg);
				// alert('1'+strip(msg));	
			   // return false;
				//alert('1'+msg);
			  msg1 = msg.split("~");
			  if(msg1[1]=='S'){
					document.getElementById("recd_cnt").value=msg1[2];
					document.getElementById("pend_cnt").value=msg1[3];
					//alert(1);
					if(parseInt(document.getElementById("recd_cnt").value) >= parseInt(document.getElementById("pend_cnt").value))
					{
						document.getElementById("mem_id").value="";
					    document.getElementById('customer').value = '';
					    document.getElementById('address').value = '';
					    document.getElementById('place').value = '';
					    document.getElementById('phone').value = '';
						
					    //alert("Already You have reached Discount Product This Year");
					    alert_popup("Already You have reached Discount Product This Year","RED",'mem_id');
					    document.getElementById("mem_id").focus();
					   
					}
					if(terms != 'Credit')
					{
						document.getElementById('customer').value = msg1[4];
						document.getElementById('address').value = msg1[5];
						document.getElementById('place').value = msg1[6];
						document.getElementById('phone').value = msg1[8];
						//document.getElementById('sel_area_name').value = msg1[7];
						//document.getElementById("sel_area").value = msg1[9];
						document.getElementById('mem_cardtype').value = msg1[10];
					}
					return false;
					
			   }       
			   if(msg==2){
				  //document.getElementById('ref_id').removeAttribute('readonly');
				  document.getElementById("mem_id").value="";
				  document.getElementById('customer').value = '';
				  document.getElementById('address').value = '';
				  document.getElementById('place').value = '';
				  document.getElementById('phone').value = '';
				  //alert("Member ID Doesn't Match");
				  alert_popup("Member ID Doesn't Match","RED",'mem_id');
				  document.getElementById("mem_id").focus();
				  return false;
			   }
			   /*else
			   {
				   document.getElementById('ref_id').setAttribute('readonly','readonly');
			   }*/
		  }
		});
	}
	return false;
}
function returnProduct(ival)
{
	var tot_price=0;
	var hid_qty = $("#hidqty"+ival).val();
	hid_qty = parseInt(hid_qty);
	if(hid_qty==0){
		document.getElementById('prods_rtn'+ival).checked=false;
		fn_qty_prod(hid_qty,ival);
		
	}else{
		if(document.getElementById('prods_rtn'+ival).checked)
		{
			//tot_price=parseFloat(document.getElementById('hidqty'+ival).value)*parseFloat(document.getElementById('mrp'+ival).value);
			
			document.getElementById('tot_price'+ival).value = document.getElementById('hid_tot_price'+ival).value;
			document.getElementById('discamt'+ival).value = document.getElementById('hid_discamt'+ival).value;
			document.getElementById('cgst_amt'+ival).value = document.getElementById('hid_cgst_amt'+ival).value;
			document.getElementById('sgst_amt'+ival).value = document.getElementById('hid_sgst_amt'+ival).value;
			document.getElementById('igst_amt'+ival).value = document.getElementById('hid_igst_amt'+ival).value;
			document.getElementById('qty'+ival).value = document.getElementById('hidqty'+ival).value;
			document.getElementById('qty'+ival).readOnly = false;
		
		}
		else {
			document.getElementById('tot_price'+ival).value = 0 ;
			document.getElementById('discamt'+ival).value = 0 ;
			document.getElementById('cgst_amt'+ival).value = 0 ;
			document.getElementById('sgst_amt'+ival).value = 0 ;
			document.getElementById('qty'+ival).value = 0 ;
			document.getElementById('qty'+ival).readOnly = true;
		}
	}
	total_price();
}

function returnProduct_srt(ival)
{
	var tot_price=0;
	document.getElementById('prods_rtn'+ival).checked = false;

	document.getElementById('tot_price'+ival).value = 0 ;
	document.getElementById('discamt'+ival).value = 0 ;
	document.getElementById('cgst_amt'+ival).value = 0 ;
	document.getElementById('sgst_amt'+ival).value = 0 ;
	document.getElementById('qty'+ival).value = 0 ;
	document.getElementById('qty'+ival).readOnly = true;
	
	total_price();
}




function trim (myString)     
{     
    myString =  myString.replace(/^s+/g,'').replace(/s+$/g,'');
	myString =  myString.replace(/^s+/g,'').replace(/s+$/g,'');
	 return myString.replace(/^s+/g,'').replace(/s+$/g,'');
}

function fn_refer(mem_val=''){
	/*if(mem_val != '')
	{
		document.getElementById('mem_id').setAttribute('readonly','readonly');
	}
	else if(mem_val == '')
	{
		document.getElementById('mem_id').removeAttribute('readonly');
	}*/
	var sal_typ=document.getElementById("sale_type").value;
	var aj_type = 'ReferedMember'+sal_typ;
	
	mem_val = document.getElementById("ref_id").value;
	
	if(mem_val != '')
	{
		$.ajax({
		   type: 'POST',
		   url: 'fn_sales.php',
		   data:{
				type : aj_type,
				mem_val : mem_val
			},
		   success: function(msg){	
		   //alert(msg);
			   if(msg==2){
				  document.getElementById("ref_id").value="";
				  alert("Referral ID Doesn't Match");
				  document.getElementById("ref_id").focus();
				  return false;
			   }	
		  }
		});
	}
	return false;
}

function setArea(pincode)
{
	//alert(pincode);
	$.ajax({
	   type: 'POST',
	   url: 'fn_salesman.php',
	   data:{
			type : 'SalesDtlsEntry',
			pincode : pincode
		},
	   success: function(msg){	  
		   //alert(msg);
		   msg = msg.split('~');
		   //document.getElementById('sel_salesrep_name').value = msg[0];
		   document.getElementById('sel_salesrep').value = msg[1];
	  }
	});
}


function trim_fn(e)
{
	var unicode=e.charCode? e.charCode : e.keyCode;
	if(unicode == 32) return false;
}

</script>
<script type='text/javascript'>

		 function KeyPress(e) {
            var evtobj = window.event? event : e
console.log(evtobj.keyCode)
		if (evtobj.keyCode == 113)
			{
				$("#Add_thermal").click();
			//frn_savevalidate(1);
			}
			if (evtobj.keyCode == 114)
			{
				$("#add_product_popup").click();
			//frn_savevalidate(1);
			}
			if(evtobj.keyCode == 115){
				save_form_data();
			}
			
			if (evtobj.keyCode == 82 && evtobj.altKey)
			{
				document.getElementById("rec_amount").focus();
			}
			if (evtobj.keyCode == 65 && evtobj.altKey)
			{
				$("#Add_a4").click();
			}
			if (evtobj.keyCode == 78 && evtobj.altKey)
			{
				$("#send_mail").click();
			}	
			if (evtobj.keyCode == 116)
			{
				location.reload();
			}	

			if (evtobj.keyCode == 76 && evtobj.altKey)
			{
			lastbill_print();
			}	

		if(( window.event.keyCode == 73 && evtobj.altKey ))
        { // Capture and remap ALT+I
			$("#add_cust").click();
			$('#enable_warning2').val(1);
			var barcode_en = $('#hidbar').val();
			if(barcode_en == 1){
				var next_tab = "prdname_sing";
			}else{
				var next_tab = "barcode_sing";
			}
			$('#next_focus2').val(next_tab);
			setTimeout(function(){
				$('#sel_supplier_sel').focus();
			}, 200);		
        }
		var clse_pop = $("#enable_warning").val();
		var clse_pop1 = $("#enable_warning1").val();
		var clse_pop2 = $("#enable_warning2").val();
		var clse_pop3 = $("#enable_warning_prod").val();
        if(clse_pop == 1 && window.event.keyCode == 27)
        {
        	//alert(123);
        	$("#enable_warning").val(0);
        	$("#delbut_new").click();
        	setTimeout(function(){
				var barcode_en = $('#hidbar').val();
				/*if(barcode_en == 1){
					$("#prdname_sing").focus();
				}else{
					$("#barcode_sing").focus();
				}*/
				$("#"+next_focus).focus();
			}, 200);
        }
        else if(clse_pop1 == 1 && window.event.keyCode == 27)
        {
        	$("#enable_warning1").val(0);
        	$("#delbut_new1").click();
        	setTimeout(function(){
				var barcode_en = $('#hidbar').val();
				if(barcode_en == 1){
					$("#prdname_sing").focus();
				}else{
					$("#barcode_sing").focus();
				}
			}, 200);
        }
        else if(clse_pop2 == 1 && window.event.keyCode == 27)
        {
        	$("#enable_warning2").val(0);
        	$("#delcancel").click();
        	setTimeout(function(){
				var next_tab = $('#next_focus2').val();
				$("#"+next_tab).focus();
			}, 200);
        }
        else if(clse_pop3 == 1 && window.event.keyCode == 27)
        {
        	$("#enable_warning_prod").val(0);
        	$("#hid_popup").click();
        	setTimeout(function(){
				var next_tab = $('#next_focus_prod').val();
				$("#"+next_tab).focus();
			}, 200);
        }
        else if(window.event.keyCode == 38)
	{
	  if($('#batch_modal').css('display')!='none')
	  {
	   if(document.activeElement.id.includes('bat_btn'))
	   {
	    var n = parseInt(document.activeElement.id.replace('bat_btn', ''))
	    if(n>0)
	    n -= 1
	    $('#bat_btn'+n).focus()
	   }
	  }
        }
        else if(window.event.keyCode == 40)
	{
	  if($('#batch_modal').css('display')!='none')
	  {
	   if(document.activeElement.id.includes('bat_btn'))
	   {
	    var n = parseInt(document.activeElement.id.replace('bat_btn', ''))
	    n += 1
	    $('#bat_btn'+n).focus()
	   }
	  }
        }
			
        }
        document.onkeyup = KeyPress;
    </script> 
	

<script>
$(document).ready(function(){
	$("#titleheading").html("Create Bill");
	$("#add_cust").click(function(){
		//alert(123);
		//$("#hid_loyal").show();
	});
});
document.onkeydown = function(){
		
		if((window.event && window.event.keyCode == 120))

        { // Capture and remap F3
			$("#add_prod").click();
			$('#enable_warning_prod').val(1);
			var barcode_en = $('#hidbar').val();
			if(barcode_en == 1){
				var next_tab = "prdname_sing";
			}else{
				var next_tab = "barcode_sing";
			}
			$('#next_focus_prod').val(next_tab);
			setTimeout(function(){
				$('#Commodity').focus();
			}, 200);	
			
        }
}
function card_num(phno){
	$.ajax({
		type:'POST',
		url:'fn_salesman.php',
		data:{
			type:'user_find',
			phno : phno,
		},
		success : function(msg){
			//alert(msg);
			msg = msg.trim();
			$("#sel_supplier").val(msg);
			fn_supllier(msg);
		}
	});
}
function save_form_data(){
	var a_click = $("#a_click").val();
	if(a_click == 0){
		$("#a_click").val(1);
		frn_savevalidate();
	}
}
</script>
<input type="hidden" name="a_click" id="a_click" value="0">
<script type="text/javascript">
function item_mrnentry(){
var gdnm=document.getElementById('sel_godown').value;
//alert(gdnm);
jQuery( "input[name^=prdname]" ).combogrid({

		debug:true,
		colModel: [{'columnName':'code','hide':true,'width':'10','label':'Code'}, {'columnName':'name','width':'60','label':'Product'},{'columnName':'uom','hidden':true,'width':'5','label':'UOM'}, {'columnName':'TaxPer','hidden':true,'width':'5','label':'Tax','align':'right'}, {'columnName':'mop','hidden':true,'label':'MOP','align':'right'}, {'columnName':'pv_mrp','hidden':true,'label':'PVMRP','align':'right'},{'columnName':'mrp','width':'10','label':'S.Price','align':'right'},{'columnName':'purtax','hidden':true,'label':'TCode','align':'right'},{'columnName':'hidqty','hidden':true,'label':'hidqty','align':'right'},{'columnName':'qty','width':'15','label':'QTY','align':'right'}],
		url: 'pro_stock.php?gdnm='+gdnm+'&rows=20&is_ptr='+($('#is_ptr').length && $('#is_ptr')[0].checked ? 1 : 0),
		
		//"select item" event handler to set input fields
		select: function( event, ui ) {
		
			var id = jQuery(this).attr('id');
			var subst = "_sing";
			var prd = "prdname"+subst;
			var code = "PCode"+subst;
			var uom = "uom"+subst;
			var tax_per = "tax_per"+subst;
			var hdtaxtype = "hdtaxtype"+subst;		
			var mop = "mop"+subst;
			var pv_mrp = "pv_mrp"+subst;
			var mrp = "mrp"+subst;
			var hidqty = "hidqty"+subst;
			var qty = "qty"+subst;
			var mrpo = "mrpo"+subst;
			var marginper = "marginper"+subst;
			var saving = "saving"+subst;
			var barcode = "barcode"+subst;
			var Pro_type = "Pro_type"+subst;
			jQuery("#"+prd).val( ui.item.name );
			jQuery("#"+code).val( ui.item.code );
			jQuery("#"+uom).val( ui.item.uom );
			jQuery("#"+tax_per).val( ui.item.TaxPer );
			jQuery("#"+hdtaxtype).val( ui.item.purtax );
			jQuery("#"+mop).val( ui.item.mop );
			jQuery("#"+pv_mrp).val( ui.item.pv_mrp );
			jQuery("#"+mrp).val( ui.item.mrp );
			jQuery("#"+hidqty).val( ui.item.hidqty );
			jQuery("#"+barcode).val( ui.item.barcode );
			jQuery("#"+mrpo).val( ui.item.mrpo );
			jQuery("#"+marginper).val( ui.item.marginper );
			jQuery("#"+saving).val( ui.item.saving );
			jQuery("#"+Pro_type).val( ui.item.Pro_type );
			//jQuery("#"+qty).val( ui.item.qty );
			
			fn_productname_sing(ui.item.name);
			//document.getElementById("qty"+subst).select();
			return false;
		}
	});
}
</script>
<script>
function fn_prodcode(){

	$.ajax({
		type:'POST',
		url:'fn_sales.php',
		data:{
			type:'product_code',
		},
		success: function(msg){
			msg= msg.trim();
			$('#prod_code').val(msg);
			$('#name_text_barcode').val(msg);
		}
	});
}</script>

 <!--    ////////////////////////////////////////////////////////      Sales Day End Starts Here      /////////////////////////////////////////////////////////////   -->
 
<!--    ////////////////////////////////////////////////////////      Sales Day End Ends Here      /////////////////////////////////////////////////////////////   -->


		
<script type="text/javascript">

// <!----------------------------- Batch Textbox AutoComplete Starts Here ---------------------------------->
var jQuery = jQuery.noConflict();
jQuery(document).ready(function() {

	area_line();	 
	//"keyup" event handler to reset input fields
	jQuery( "input[name^=sel_area_name]" ).live('keyup', function(e){		
 		//Improved with keycode checking to prevent extra typing after select
		var key = e.charCode ? e.charCode : e.keyCode ? e.keyCode : 0;
		var keyCode = jQuery.ui.keyCode;
		if(key != keyCode.ENTER && key != keyCode.LEFT && key != keyCode.RIGHT && key != keyCode.DOWN) {
			//jQuery('#sel_area_name').val("");
			//jQuery('#sel_area').val("");
		}
	});
});
// <!----------------------------- Batch Textbox AutoComplete Ends Here ---------------------------------->
</script>


<style>
#dashboard
{
	overflow-y:hidden;
}
.form-class:focus {
     border-color:#06a8e1 !important;
    box-shadow: 0 0 0 0.01rem #26c281 !important;
}
.frm_title
{
	background: url("Theme/images/MRN.png") no-repeat scroll 5px center #F1F1F1;
    margin-bottom: 20px;
    padding-left: 40px;
	margin-bottom:10px;
}
.div_dcdet {
	height: 86px;
    overflow-x: hidden;
    overflow-y: scroll;
    width: 430px;
}
.tbl_supp td {
	border:1px solid #CCCCCC;
	padding-left:5px;
}
.th_right {
	padding-right:5px;
}
.th_left {
	padding-left:5px;
}
.divreadonlyblock
{
position: relative;z-index: -1;
}
.addr{
display: inline-block;
width:57px;
padding: 0 0 10px;
font-weight: bold;
float:left;
margin:0;
}
.edit_style
{
	margin-left:-26px;
}
#mrn_ent {
    margin-left: 0px;
}
.table td, .table th
{
	font-size:13px!important;
}
.table
{
	    width: 100%!important;
    max-width: 100%!important;
    margin-bottom: 0px!important;

    border-left: none!important;
    border-right: none!important;
}
</style>


  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog productdialog">
    	<input type='hidden' name="enable_warning_prod" id="enable_warning_prod" value="0">
		<input type='hidden' name="next_focus_prod" id="next_focus_prod" value="">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:0px;">
         
          <h4 class="headingpopup" >Add Product</h4>
        </div>
        <div class="modal-body">
        
		 <table width="100%" border="0" cellspacing="0" cellpadding="0" id="dzn_tbl">
		 <tr>
			<td width="250">Product Code</td>
			<td width="500"><input id="prod_code" class="text-input medium-input form-class" name="prod_code" type="text" value="" readonly/>
						<input type="hidden" name="batch_no" id="batch_no" value='0'>
			<input type="hidden" name="pro_type" id="pro_type" value='0'>
			<input type="hidden" name="stock_type" id="stock_type" value='1'>
			<input type="hidden" id="min_qty" name="min_qty" value='0'>
			<input type="hidden" id="max_qty" name="max_qty" value='0'>
			<input type="hidden" id="reorder_qty" name="reorder_qty" value='0'>
			<input type="hidden" id="txt_purprice" name="txt_purprice" value='0'>
			<input type="hidden" id="txt_saving" name="txt_saving" value='0'>
			<input type="hidden" name="sel_purtax" id="sel_purtax" value='0'>
			<input type="hidden" id="sel_saltax" name="sel_saltax" value='0'>
			<input type="hidden" id="disc_per" name="disc_per" value='0'>
			<input type="hidden" id="txt_margin" name="txt_margin" value='0'>
			<input type="hidden" id="txt_mrpo" name="txt_mrpo" value='0'>

			<!--<span style="padding-left:0px;"><span class="required">*</span>Batch Product<span style="padding-left:8px;">
				<select name="batch_no" id="batch_no" class="large_select" style="width:108px;">
					<option value="">Select Batch </option>
					<option value="1" >Yes</option>
			<option value="0" >No</option>
				</select>
				</span></span><span class="required"></span>-->
			<input type="hidden" id="hidbarcdtype" name="hidbarcdtype" value="">
			<input type="hidden" id="bno" name="bno" value="">
			</td>
		 </tr> 
		  <!--<tr>
		  <td width="199">
		  <span style="padding-left:0px;"><span class="required">*</span>Product Type<span style="padding-left:11px;"></td>
				<td width="841"><select tabIndex=1 name="pro_type" id="pro_type"  class="large_select" style="width:100px;"  >
			<option Value="0">NON-STOCK</option>
			<option Value="1">STOCK</option>
			</select><span class="required"></span></span></td></tr>-->
			<tr>
			<td width="">HSN Code</td>
			<td width=""><input id="Commodity" class="text-input medium-input form-class" name="Commodity" type="text" value="" maxlength="150" /> <span class="required"></span></td>
			
		 </tr>
     	 <tr>
			<td width=""><span class="required">*</span>Product Name</td>
			<td width=""><input id="name_text_name" class="text-input medium-input form-class" name="name_text_name" type="text" value="" maxlength="150" /> <span class="required"></span></td>
		 </tr> 
			<input type="hidden" name="hid_stk_type" id="hid_stk_type" value="">
			<input type="hidden" name="hid_stk_change_type" id="hid_stk_change_type" value="">
          <!--<tr>
			<td width="199"><span class="required">*</span>Barcode Type</td>
			<td width="841">
			<input type="hidden" name="hid_stk_type" id="hid_stk_type" value="">
			<input type="hidden" name="hid_stk_change_type" id="hid_stk_change_type" value="">
						<select name="stock_type" id="stock_type" class="large_ledgerselect" onChange="bar_validate(this.value)">
			<option value="1">Default</option>
			<option value="0">Dynamic</option></select>
			
			</td>
		 </tr>-->
          <tr style="">
			<td width=""><span class="required">*</span>Barcode</td>
						<td width=""><input id="name_text_barcode" class="text-input medium-input form-class" name="name_text_barcode" type="text" value="" maxlength="15"/>
			<input id="hid_name_text_barcode" class="large_ledgerinput" name="hid_name_text_barcode" type="hidden" value="" maxlength="15"/>
			<span class="required"></span></td>
		 </tr> 
		 
						
		 <tr>
			<td><span class="required"></span>Group</td>
			<td style="display:flex;">
			<span id="group_div">	<select name="select_group"  id="select_group" class="large_ledgerselect productselect form-class" >
					<option value="">SELECT GROUP</option>
										<option value="1"  >FOOD</option>
										<option value="2"  >MOBILE</option>
								  </select></span>	 <button class="button button-primary button-circle button-small form-class" style="height: 38px;border-radius:0px;" data-toggle="modal" data-target="#upload-avatar"><i class="fa fa-plus"></i></button><span class="required"></span></td>
		  </tr>

          <tr>
			<td width=""><span class="required"></span>Brand</td>
			<td width="" style="display:flex;">
			    <span id="brand_div">	<select  name="select_brand" id="select_brand" class="large_ledgerselect productselect form-class" >
					<option value="">SELECT BRAND</option>
										<option value="3" >IQOO</option>
										<option value="2" >REDMI</option>
										<option value="1" >SAKTHI</option>
								  </select></span><button class="button button-primary button-circle button-small form-class" style="height: 38px;border-radius:0px;" data-toggle="modal" data-target="#myModal1"><i class="fa fa-plus"></i></button><span class="required"></span> </td>
		  </tr>
		  
		 
			  
			   <!--<tr>
				<td width="199"><span class="required">*</span>Min Qty</td>
				<td width="841"><input id="min_qty" name="min_qty" onKeyPress="validate(event)" class="medium_input" type="text" value="" maxlength="8"  dir="rtl"/><span class="required"></span>
				<span style="padding-left:22px;"><span class="required">*</span>Max Qty<span style="padding-left:36px;"><input id="max_qty" name="max_qty" class="medium_input" type="text" value="" maxlength="8" onKeyPress="validate(event)"  dir="rtl"/><span class="required"></span></span></span>
				</td></tr>
			 
			  
			   <tr>
				<td width="199"><span class="required">*</span>Re-order Qty</td>
				<td width="841"><input id="reorder_qty" name="reorder_qty" onKeyPress="validate(event)" class="medium_input" type="text" value="" maxlength="8" dir="rtl"/><span class="required"></span>
				
				</td>
			  </tr>
<tr>
				<td width="199"><span class="required">*</span>Cost Price</td>
				<td width="841"><input id="txt_purprice" name="txt_purprice" onKeyPress="validate(event)" -onChange="savings_calc_margin()" class="medium_input" type="text" value="" maxlength="10"  dir="rtl"/><span class="required"></span>
                <span style="padding-left:27px;"><span class="required"></span>Margin<span style="padding-left:42px;"><input id="txt_margin" name="txt_margin" onKeyPress="validate(event)"  class="medium_input" type="text" value="" maxlength="10"  dir="rtl"/><span class="required"></span>
					</span></span>
				</td>
			  </tr>	
			
			  <tr>
				<td width="199"><span class="required">*</span>Sales Price</td>
				<td width="841"><input id="txt_mrp" onKeyPress="validate(event)" -onChange="savings_calc_margin()" name="txt_mrp" class="medium_input" type="text" value="" maxlength="10"  dir="rtl"/><span class="required"></span>
				<span style="padding-left:24px;"><span class="required">*</span>MRP<span style="padding-left:45px;">
				<input id="txt_mrpo" name="txt_mrpo" onKeyPress="validate(event)" onChange="savings_calc();" class="medium_input" type="text" value="" maxlength="10"  dir="rtl"/><span class="required"></span>
                </span></span>
				
				</td>
			  </tr>
			  
			  <tr><td width="199"><span class="required">*</span>Savings</td>
				<td width="841"><input id="txt_saving" name="txt_saving" onKeyPress="validate(event)" class="medium_input" type="text" value="" maxlength="10" readonly dir="rtl"/><span style="padding-left:12px;"><span class="required">*</span>Active<span style="padding-left:45px;"><select name="sel_active" id="sel_active" class="large_select" style="width:108px;">
					<option value="Y">Yes</option>
					<option value="N">No</option>
					</select><span class="required"></span>
					</span></span></td></tr>
			  
			  <tr>
				<td width="199"><span class="required">*</span>Purchase Tax</td>
				<td width="841"><select name="sel_purtax" id="sel_purtax" class="large_select" style="width:108px;" >
										<option value="12">0.00</option>		
										<option value="11">0.00</option>		
										<option value="10">0.00</option>		
										<option value="9">0.00</option>		
										<option value="8">0.00</option>		
										<option value="7">0.00</option>		
										<option value="6">0.00</option>		
										<option value="3">0.00</option>		
										<option value="4">2.00</option>		
										<option value="1">5.00</option>		
										<option value="5">12.50</option>		
										<option value="2">14.50</option>		
									</select>
				<span style="padding-left:19px; -display:none;"><span class="required">*</span>Sales Tax<span style="padding-left:23px;"><select name="sel_saltax" id="sel_saltax" class="large_select" style="width:108px;" >
										<option value="12" >0.00</option>		
										<option value="11" >0.00</option>		
										<option value="10" >0.00</option>		
										<option value="9" >0.00</option>		
										<option value="8" >0.00</option>		
										<option value="7" >0.00</option>		
										<option value="6" >0.00</option>		
										<option value="3" >0.00</option>		
										<option value="4" >2.00</option>		
										<option value="1" >5.00</option>		
										<option value="5" >12.50</option>		
										<option value="2" >14.50</option>		
									</select></span></span>
				</td>
			  </tr>-->

			  <tr><td width=""><span class="required"></span>UOM</td><td width="841">
				<select name="sel_uom"  id="sel_uom" class="large_ledgerselect productselect form-class" >
										<option value="55" >SETTS</option>		
										<option value="555" >LITERR</option>		
										<option value="DEZ" >DEZEN</option>		
										<option value="GRM" >GRAM</option>		
										<option value="KG" >KILOGRAM</option>		
										<option value="LTR" >LITER</option>		
										<option value="ML" >MILILITRE</option>		
										<option value="MTR" >METER</option>		
										<option value="PCS" >PIECES</option>		
										<option value="PKT" >PACKET</option>		
										<option value="QTL" >QUINTAL</option>		
										<option value="SET" >SETS</option>		
									</select><span class="required"></span>
				</span></td></tr>

			  
			  
			    <tr>
				<td width="">Cost Price</td>
				
			<td width=""><input id="pprice" class="text-input medium-input form-class" name="pprice" type="text" value="" maxlength="150" /> <span class="required"></span></td>
			  </tr>
			   <tr style="display: none;">
				<td width="">MRP Price</td>
			
			<td width=""><input id="mrpo" class="text-input medium-input form-class" name="mrpo" type="text" value="" maxlength="150" /> <span class="required"></span></td>
			  </tr>
			  
			   <tr>
				<td width="">Sales Price</td>
			<td width=""><input id="mrp" class="text-input medium-input form-class" name="mrp" type="text" value="" maxlength="150" /> <span class="required"></span></td>
			  </tr>
			  
			 <!--<tr>
				<td width="199"><span class="required"></span>Discount Percentage</td>
				<td width="841">
				<input type="text" id="disc_per" name="disc_per" class="medium_input" value=""  onKeyPress="return validate(event)"><span class="required"></span>
				</td>
			  </tr>-->
		  <tr>
				<td width=""><span class="required">*</span>GST TAX</td>
				<td width=""><select name="taxslab" id="taxslab" class="large_ledgerselect productselect form-class" >
										<option value="7">0%</option>		
										<option value="8">12%</option>		
										<option value="10">18%</option>		
										<option value="12">18%</option>		
										<option value="6">24%</option>		
										<option value="9">28%</option>		
										<option value="11">5%</option>		
										<option value="4">CESS</option>		
										<option value="3">VAT 0%</option>		
										<option value="5">VAT 12.5%</option>		
										<option value="2">VAT 14.5%</option>		
										<option value="1">VAT 5%</option>		
									</select>
				
				</td>
			  </tr>
						
			
		  
		  <tr>

			<td>&nbsp;</td>

			<td>
			
			<!--<input type='button' name='add_product' class="button form-class" id='add_product' onclick='fn_newprod();' -data-dismiss="modal" value='Add'>
			<input type='button' name='hid_popup' class="button form-class" id='hid_popup' style="display: none;" data-dismiss="modal" value='Add' onclick='row_clear();'>-->
			
			<button name='add_product' type="button" class="btn btn-primary save addcustomer form-class" id='add_product' onclick='fn_newprod();'><span class="btn-label addproductquote" 
><i class="glyphicon glyphicon-plus"></i></span><span id='change_label' >Add</span></button>



<button  name='hid_popup'  type="button" class="btn btn-labeled btn-danger delcancel form-class " data-dismiss="modal" id="hid_popup"  >
             <span class="btn-label delproductquote" 
><i class="glyphicon glyphicon-remove"></i></span> CANCEL</button>
			
			
			</td>
		  </tr>
		</table>                   

        </div>
        
      </div>
      
    </div>
  </div>

  <script>
  	
function bar_validate()
{
var stock=document.getElementById('stock_type').value;

 if(stock==0)
 {
 var NULL = null;
document.getElementById("name_text_barcode").disabled = true;
document.getElementById('name_text_barcode').value=NULL;
}
else
{
document.getElementById('name_text_barcode').disabled = false;
var barcode=document.getElementById('bar_code').value;
document.getElementById('name_text_barcode').value=barcode;
}
}
  </script>

  <style>
  	.large_ledgerinput {
    width: 75% !important;
    height: 38px !important;
    padding: 6px 12px !important;
    background-color: #fff !important;
    border: 1px solid #c2cad8 !important;
       border-radius: 0px !important;
  
    box-shadow: none!important;
 
}
.large_ledgerinput, output {
    font-size: 14px;
    line-height: 1.42857;
    color: #555;
    display: block;
} 
 
.button-circle
{
	    margin: 3px 0px 0px 0px!important;
}
 .large_ledgerselect {
		margin:3px!important;
    width: 50% !important;
       height: 38px !important;
    padding: 6px 12px !important;
    background-color: #fff !important;
    border: 1px solid #c2cad8 !important;
    border-radius: 0px !important;

    box-shadow: none!important;
    
}
.large_ledgerselect, output {
    font-size: 14px;
    line-height: 1.42857;
    color: #555;
  
}
#dzn_tbl input[type=text] {
    margin: 3px!important;
    font-size: 12px!important;
    height: 39px!important;
    width: 289px!important;
    border: #CCC solid 0.5px!important;
}


  </style>
  
  <div id="upload-avatar" class="modal" role="dialog"> 
  <div class="modal-dialog addgroup">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:0px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="headingpopup">Add group</h4>
      </div>
      <div class="modal-body">
      <div class="span12 widget" style="width:576px !important; margin:3px 0 0 3px;">	

 <div class="widget-header" style="width:576px !important;">
</div>
<div class="widget-content table-container">
<form name="cat_search" id="cat_search" method="get" enctype="multipart/form-data" >											
	<table id="demo-dtable-03" class="table table-striped" align="center">
		<thead>
			<tr>
				<td>Group Name</td>
				<td><input type="text"  class="large_ledgerinput form-class" style="margin-left: 0px;width: 288px!important;" name="new_group" id="new_group"  /></td>
			</tr>
            <tr>
              <td style="border-top: none;">&nbsp;</td>
              <td style="border-top: none;">
			  
			  			<button name='Add' type="button" class="btn btn-primary save addcustomer form-class" id='Add' onclick='fnadd_group();'><span class="btn-label add" 
><i class="glyphicon glyphicon-plus"></i></span><span id='change_label' >Add</span></button>



<button    type="button" class="btn btn-labeled btn-danger delcancel form-class" style="margin-top:0px!important;"  data-dismiss="modal" id="delgroup" >
             <span class="btn-label del" 
><i class="glyphicon glyphicon-remove"></i></span> CANCEL</button>
			  
             
              </td>
            </tr>
  		</thead>
	</table>
  </form>
</div>

</div>
      </div>
  
    </div>

  </div>
  </div>  
  
  <div id="myModal1" class="modal" role="dialog"> 
  <div class="modal-dialog addbrand">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:0px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="headingpopup">Add Brand</h4>
      </div>
      <div class="modal-body">
      <div class="span12 widget" style="width:576px !important; margin:3px 0 0 3px;">	

 <div class="widget-header" style="width:576px !important;">
</div>
<div class="widget-content table-container">
<form name="cat_search" id="cat_search" method="get" enctype="multipart/form-data" >											
	<table id="demo-dtable-03" class="table table-striped" align="center">
		<thead>
			<tr>
				<td>Brand Name</td>
				<td><input type="text" name="new_brand" class="large_ledgerinput form-class" style="margin-left: 0px;width: 288px!important;"  id="new_brand"  /></td>
			</tr>
            <tr>
              <td style="border:none;">&nbsp;</td>
              <td style="border:none;">
			  
			  			  			<button name='Add' type="button" class="btn btn-primary save addcustomer form-class" id='Add' onclick='fnadd_brand();'><span class="btn-label add" 
><i class="glyphicon glyphicon-plus"></i></span><span id='change_label' >Add</span></button>

<button name="reset"  type="button" class="btn btn-labeled btn-danger delcancel form-class" data-dismiss="modal" style="margin-top:0px!important;" id="delbrand" >
             <span class="btn-label del" 
><i class="glyphicon glyphicon-remove"></i></span> CANCEL</button>
				
				
				
              </td>
            </tr>
  		</thead>
	</table>
  </form>
</div>
</div>
</div>

</div>
      </div>
  
    </div>

  </div>
  </div>  
<style>
.inputgroupclass
{
	margin:3px!important;
}


</style><link rel='stylesheet prefetch' href='http://demo.elixrlite.com/portal/Theme1/css/sales.css'>  
<link rel='stylesheet prefetch' href='http://demo.elixrlite.com/portal/Theme1/css/modalpopup.css'>  

<input type="hidden" name='Weight_machine' id="Weight_machine" value="0">
<input type="hidden" id='typ_rec_amt' name='typ_rec_amt' value="1">
                     

<div id="content_main" class="clearfix "  >

      <div id="main_panel_container" class="left h-100" style="background: #f5f5f5;">
<style>
body
{
	    background: #f5f5f5;
}
input, select

{
	padding:0px 2px 0px;
	font-size:12px!important;
}

</style>
        <div id="dashboard" class="h-100"  style="background: #f5f5f5;margin-left:10px;padding-right:0px;">

<!--		<h2 class="frm_title">Sales List add</h2>-->
		

			<div style="clear:both;"></div>
<div id="tabledata" class="section ui-resizable" style="background:none;width:100%;margin-left:0px;float:left;height:100%;">
<!-------------------------- Comman File for add and Edit-------------------------->





<div id="batch_modal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-confirm batchmodal" style="width:500px!important;margin-top:40px;">
<style>
#choose_batch .odd:hover { 
    background-color: #4694d229;
}

</style>
    <!-- Modal content-->
    <div class="modal-content">
	
	<a data-dismiss="modal" style="
    float: right;
    margin-top: -44px;
    margin-right: -33px;
"><img src="http://demo.elixrlite.com/portal/Theme1/images/butclose.png" width="50px"></a>
   <!--   <div class="modal-header" style="padding:5px;">
        <button type="button" class="close" data-dismiss="modal" style="
    text-indent: 0px!important;
    color: #FFF;
    opacity: 1.2;
    margin-right: 13px;
    margin-top: 15px;
">&times;</button>
      
      </div>-->
      <div class="modal-body" id="choose_batch" style="padding:5px;">
      </div>
	  
	  <div class="modal-footer" style="padding:0px;display:none">
  <button type="button" class="btn btn-default batchclose" data-dismiss="modal" id="buttonbatch" style="display:none;" >Close</button>
   <button type="button" class="btn btn-default batchclose" data-dismiss="modal" onclick="row_clear_sing();" style="display:none;" >Close</button>
      </div>
       
    </div>

  </div>
</div>

<input type="hidden" id="batch_modal_btn" data-toggle="modal"  data-target="#batch_modal" data-backdrop="static" data-keyboard="false">
<script>
	
function fn_clear_ledger(){
 	$("#ledger_name").val('');
	$("#debitor").val('');
	$("#add1").val('');
	$("#add2").val('');
	$("#email").val('');
	$("#mobile_no").val('');
	$("#country1").val('');
	$("#city").val('');
	$("#state1").val('');
	$("#gstin").val('');
	$("#zip_code").val('');
	$("#contact_person").val('');
	$("#card_num").val('');
	$("#card_typ").val('');
	$("#customer_balance_cap").hide();
	$("#customer_balance_value").html('');
}

		</script>
	<style>
		.count
		{
			font-size:15px;
			font-weight:600;
			color:grey;
		}
		
		</style>

		
		
		


 <div class="col-sm-9" style="width:80%;
    padding-right: 0px;
    padding-left: 0px;
" >


 
	<form name="mrn_ent" id="mrn_ent" method="post" enctype="multipart/form-data" > 
	
<style>

body
{
    margin: 0;
    padding: 0;
    font-family: 'Lato' , sans-serif;
    color: #333;
    background-size: 100%;
    -webkit-font-smoothing: antialiased;
    -webkit-text-size-adjust: none;
    background-color: #475264;
}
.termsrow
{
	margin-top: 20px;
    margin-bottom: 20px;
}
p
{
    margin: 0;
    padding: 0 0 10px 0;
    line-height: 20px;
}
.span4
{
    width: 50px;
    float: left;
    margin: 0 12px 10px 4px;
}

.phone
{
    margin-top: 7px;
    
}
.tel
{
   
    border: none!important;
    border-radius: 0px;
}
.num-pad
{
    padding-left: 15px;
}


.num
{
    border: 1px solid #05a8dfb3;
    -webkit-border-radius: 999px;
    border-radius: 999px;
    -moz-border-radius: 999px;
    height: 50px;
    background-color: #fff;
    color: #333;
    cursor: pointer;
}
.del-num {
    border: 1px solid #05a8dfb3;
    -webkit-border-radius: 999px;
    border-radius: 999px;
    -moz-border-radius: 999px;
    height: 50px;
    background-color: #e43a45;
    color: #ffffff!important;
    cursor: pointer;
}
.del-num:hover
{
    background-color: #26c281;
    color: #fff!important;
    transition-property: background-color .2s linear 0s;
    -moz-transition: background-color .2s linear 0s;
    -webkit-transition: background-color .2s linear 0s;
    -o-transition: background-color .2s linear 0s;
}
.num:hover
{
    background-color: #4084bd;
    color: #fff!important;
    transition-property: background-color .2s linear 0s;
    -moz-transition: background-color .2s linear 0s;
    -webkit-transition: background-color .2s linear 0s;
    -o-transition: background-color .2s linear 0s;
}
.txt:hover{
	 color: #fff!important;
}
.txt
{
    font-size: 22px;
    text-align: center;
    margin-top: 8px;
    font-family: 'Lato' , sans-serif;
    line-height: 30px;
}
.small
{
    font-size: 15px;
}

.btn
{
    font-weight: bold;
    -webkit-transition: .1s ease-in background-color;
    -webkit-font-smoothing: antialiased;
    letter-spacing: 1px;
}
.btn:hover
{
    transition-property: background-color .2s linear 0s;
    -moz-transition: background-color .2s linear 0s;
    -webkit-transition: background-color .2s linear 0s;
    -o-transition: background-color .2s linear 0s;
}
.spanicons
{
    width: 72px;
    float: left;
    text-align: center;
    margin-top: 40px;
    color: #9e9e9e;
    font-size: 30px;
    cursor: pointer;
}
.spanicons:hover
{
    color: #3498db;
    transition-property: color .2s linear 0s;
    -moz-transition: color .2s linear 0s;
    -webkit-transition: color .2s linear 0s;
    -o-transition: color .2s linear 0s;
}
.active
{
    color: #3498db;
}

.modal-header {
    padding: 15px!important;
    border-bottom: 1px solid #e5e5e5!important;
}
.head
{
	padding: 15px!important;
	background: #d6d6d61f!important;
}
.price-value, .price-value.two, .price-value.three {
      padding: 0px;
	  padding-left:30px;


    position: relative;
}

.values{
      padding: 0px;
    background: #FFF;

	color:#000;

    position: relative;
}
.values  a

{
	color:#000!important;
}
.table td, .table th
{
	padding:0px!important;
}
.terms
{
	    margin-bottom: 5px!important;
}
.modal-dialog {
    width: 1000px!important;
}
.modal-body.termsbody
{
    padding: 0px!important;
	margin: 15px 16px 15px 17px!important;
	background:#FFF!important;
}
.fa-print
{
	width:100%!important;
	background: #8ec147!important;
	height: 5em!important;
	/* font-size: 23px; */
	padding: 0px 50px 0px 120px!important;
	font-size: 18px!important;color: #FFF!important;
	font-weight: bold!important;
	color:#FFF!important;
	border-bottom: 4px solid rgba(0, 0, 0, 0.1)!important;
	border-radius: 10px!important;
}
.headingterms
{
    background: none!important;
    text-align: left;
    color: #b4adad;
    display: inline;
    font-size: 25px;
    font-weight: bold;
    letter-spacing: -1px;
}
.amountfield a
{
    color: #000!important;
    font-size: 18px;
    /* padding: 10px; */
    font-weight: bold;
}
.termscontent
{
	background:#f9f9f9;
	font-family: 'Open Sans', sans-serif;
}
.termcss
{
    margin-bottom: 5px!important;
    width: 96%!important;
    background: #FFF;
    margin: 8px 0px 8px 16px;
    border: none!important;
}
.termcss td
{
	    border: none!important;
}
.amountfield
{
    padding-left: 15px;
    padding: 7px 4px 3px 15px;
}
.modal-dialog.termsdialog
{
	width:800px!important;
}
.num-clr
{
    width: 50%!important;
    margin: 0px auto!important;
    color: #000!important;
    font-size: 14px!important;
    margin-right: 85px!important;
    margin-top: 16px!important;
    border: 1px solid #05a8dfb3!important;
    background: none!important;
    text-align: center;
}
</style>
<link rel="stylesheet" href="http://demo.elixrlite.com/portal/Theme1/css/button.css">
<div id="myModalterms" class="modal fade in" role="dialog">
  <div class="modal-dialog termsdialog">

    <!-- Modal content-->
    <div class="modal-content termscontent">
      <div class="modal-header head" style="padding: 3px 0px 3px 16px!important;border-bottom: none!important;background: #FFF!important;">
<div class="row">
<div class="col-md-1" style="padding-right:0px;">
<img src="http://demo.elixrlite.com/portal/Theme1/images/checkout.png" style="
    width: 39px;
    padding-top: 5px;
">
</div>
<div class="col-md-10" style="padding-top: 12px!important;padding-left:0px;">
 <h4 class="headingterms" style="    float: left;">CHECKOUT PAGE </h4>
    <div class="input-group add-on" style="width: 100%;   width: 50% !important;">
    <input list="customerslist1" type="search" placeholder="Choose Customer" form="mrn_ent" name="sel_supplier_list1" id="sel_supplier_list1" class="text_customer choosesalescustomer" onchange="datalist1(this.value);" autocomplete="off" >
<style type="text/css">
  .datalist {
   height:50px !important;
   max-height:80px !important;
   overflow-y:auto;
   display:block !important;
}
</style>
<datalist id="customerslist1" form="mrn_ent" style="height: 100px !important;">
  <option data-value="3" form="mrn_ent" value="73052 29527 - MADHAV"></option>
                        </datalist>



                  <div class="input-group-btn" >
        <button class="btn btn-default salesbuttonpop"  data-toggle="modal" data-target="#myModal5" onclick="openaddpopup();"    type="button"><i class="fa fa-plus" style="
    color: #fff!important;;
"></i></button>
  <button class="btn btn-default salesbuttonpop" id="aoe_customer" data-toggle="modal" data-target="#myModal5" type="button" onclick="openeditpopup();" ><i class="fa fa-pencil" style="
    color: #fff!important;
"></i></button>
      </div>
      </div>
</div>
<div class="col-md-1" style="padding-top: 0px!important;padding-left:0px;padding-right: 35px;">
 <button type="button" class="close" data-dismiss="modal"><img src="http://demo.elixrlite.com/portal/Theme1/images/close.png" style="width:30px;" ></button>
</div>
</div>   
 <!--<img src="http://demo.elixrlite.com/portal/Theme1/images/checkout.png"> <h4 class="headingpopup" style="background: none!important;text-align:left;color:#000;display: inline;font-size:30px;">CHECKOUT</h4>
<p><img src="http://demo.elixrlite.com/portal/Theme1/images/checkout.png">CHECKOUT</p>-->
      </div>
    <table class="table table-bordered termcss">
    <thead>
      <tr class="">
        <th style="padding: 0px!important;border-left:none;"><div class="price-value">
									<h2 class="amountfield"><a href="#"> Total Amount</a></h2>
									
									

							</div></th>
       <th style="padding: 0px!important;"><div class="price-value">
									<h2 class="amountfield"><a href="#"> Received Amount</a></h2>
									
									

							</div></th>
        <th style="padding: 0px!important;border-right:none;"><div class="price-value">
									<h2 class="amountfield"><a href="#"> Balance Amount</a></h2>
									
									

							</div></th>
      </tr>
    </thead>
 </td ></tr>

    <tbody>

      <tr>
        <td style="padding: 0px!important;border-right: 1px solid #dfd7ca!important;"><div class="values">
            <h2 class="amountfield"><a href="#">  <input type="text" name="net_total_popup" id="net_total_popup" class="form-control tel" value="0.00" style="font-size: 26px!important;font-weight: normal;    padding-left: 28px!important;" /></a></h2>
			</div></td>
        <td style="padding: 0px!important;border-right: 1px solid #dfd7ca!important;"><div class="values">
            <h2 class="amountfield"><a href="#">  <input type="text" style="font-size: 26px!important;font-weight: normal;    padding-left: 28px!important;" name="rec_amount" autofocus id="rec_amount" class="form-control tel key-control" data-function="fn_balamt()" value="0.00" onchange="return fn_balamt()"/></a></h2>
			</div></td>
        <td style="padding: 0px!important;"><div class="values">
			<h2 class="amountfield"><input type="text" style="font-size: 26px!important;font-weight: normal;    padding-left: 28px!important;background:none;" class="form-control tel" name="bal_amount" id="bal_amount" value="0.00" readonly="true" /></h2>
			</div></td>
      </tr>
     
    </tbody>
  </table>
   
   
              <div class="modal-body termsbody">
      <div class="container" style="width:100%">
    <div class="row termsrow">
	
	<div class="col-md-5" >
	<p style="display:inline-flex;">
	<button type="button" class="btncard btn-3 btn-3d fa-card" onclick="selterms();" id="card_option" style="" ><span class="butlab">UPI</span></button>
	<button type="button" class="btncard btn-3 btn-3d fa-cash"  id="cash_option1" style="background-color: rgb(5, 168, 223); border: 1px solid rgb(52, 118, 174); color: rgb(255, 255, 255);" onclick="selcash();" ><span class="butlab">Cash</span></button>
    <button type="button" class="btncard btn-3 btn-3d fa-card"  id="credit_option" onclick="selcredit();" style="" ><span class="butlab">Credit</span></button>
		</p>
		
	<div class="col-md-10" id="cardfield" style="display:none;">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" id="dzn_tbl"	>
	   
	     <tr > <input type="hidden" name="sel_terms" id="sel_terms" value="cash" > 
     
          <td width="60%">UPI ID Name</td>
                <td  style="" class="td_phone">
            <input name="card_name" placeholder="UPI Name"  class="form-control" type="text" id="card_name" style="width: 250px;margin-top:4px;"/></span><span class="required"></span></td>
			</tr>
			<tr>
			  <td width="50%">UPI ID No</td>
			<td>
                
			<input name="cardno" placeholder="UPI No"  class="form-control key-control" data-function="" type="text" id="cardno" style="width:250px;margin-top:4px;"/></td>
			</tr>
			<tr>
			  <td width="50%">UPI ID Amount</td>
			<td>
             
			<input name="card_amt" placeholder="UPI Amt"  class="form-control key-control" data-function="fn_balamt()" style="width:250px;margin-top:4px;" type="text" id="card_amt" onkeypress="validate(event)" onchange="fn_balamt()" style="width:70px;"/>
              
				
			
       
                </td>
				
			
				
              </tr>
	  <!--<tr>
			<td colspan="2">   

              
<button name="reset" type="button" class="btn btn-labeled btn-danger form-class" data-dismiss="modal" id="delbut_new1" style="height:30px;border:none; padding:0px 12px 0px;margin-top:10px;">
                <span class="btn-label" style=""><i class="glyphicon glyphicon-remove" style="height:30px;"></i></span>Close</button>
		
             </td>
		
			
			</tr>-->
	  </table>
	  
	</div>
		
		
		<div class="col-md-12 col-md-offset-1">
<button class="btncard btn-3p btn-3dp fa-print" id="thermalbillsales" onclick="frn_savevalidate(1);" type="button" style="
    background: #05a6f0!important;
"><span class="butlabprint"> Take Bill</span></button>
</div>
	</div>
        <div class="col-md-4  phone" style="float:right;">
            <div class="row1">
                <div class="col-md-12" style="padding-left:30px;padding-bottom: 20px;border-radius: 5px;padding: 10px 0px 7px 0px;">
              
                    <div class="num-pad">
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                1
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                2 <span class="small">
                                   
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                3 <span class="small">
                                   
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                4 <span class="small">
                                    
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                5 <span class="small">
                                    
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                6 <span class="small">
                                  
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                7 <span class="small">
                                    
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                8 <span class="small">
                                    
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                9 <span class="small">
                                    
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                .
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                0 <span class="small">
                                   
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="del-num" style="border:1px solid #e43a45;">
                            <div class="txt">
                                <=
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="clearfix">
                    </div>
                     
                </div>
            </div>
          <br/><br/>
            <p style="text-align:center;margin:0px!important;padding:0px!important;">
			 <a href="#" class="btn btn-success btn-block flatbtn num-clr" >Clear</a></p>
        </div>
    </div>
    <input type="hidden" id="typ_boxid" name="typ_boxid" value="rec_amount">
	
<div class="row">
<div class="col-md-4 col-md-offset-1">
<!--<button class="btncard btn-3p btn-3dp fa-print">Print</button>-->
</div>
</div>
      </div>
   <!--   <div class="modal-footer" style="padding:3px;">
        <button type="button" class="btn btn-default del termsclose"  data-dismiss="modal">Close</button>
      </div>
    </div>-->

  </div>
</div>  </div>
</div>
<script>
$(document).ready(function () {

    $('.num').click(function () {
        var num = $(this);
        var text = $.trim(num.find('.txt').clone().children().remove().end().text());
        var typ_field = $("#typ_boxid").val();
        var telNumber = $('#'+typ_field);
        var numbrs = telNumber.val();
        if(text == '0' &&  numbrs == '0'){
            return false;
        }

        if(text == '.'){
            if(numbrs.indexOf('.') != '-1'){
                return false;
            }else{
                if(telNumber.val() == 0){
                    $(telNumber).val(text);
                }else{
                    $(telNumber).val(telNumber.val() + text);
                }
            }
        }else{
            if(telNumber.val() == 0){
                $(telNumber).val(text);
            }else{
                $(telNumber).val(telNumber.val() + text);
            }
        }
        fn_balamt();
    });
    $('.key-control').focus(function(){
        $("#typ_boxid").val($(this).attr("id"));
    });
    $(".num-clr").click(function(event) {
        var typ_field = $("#typ_boxid").val();
        var telNumber = $('#'+typ_field).val('');
        fn_balamt();
        //$("#"+telNumber).val('');
    });
    $(".del-num").click(function(event) {
        var typ_field = $("#typ_boxid").val();
        var telNumber = $('#'+typ_field).val();
        telNumber = telNumber.substring(0,((telNumber.length)-1));
        $('#'+typ_field).val(telNumber);
        fn_balamt();
    });
});


function datalist1(sup)
{
    //alert(sup);
    $("#cut_search").show();
        $("#addbutton").html('<button name="add_customer" type="button" class="btn btn-primary save updatecus form-class" id="addcustomer" onclick="fn_addcustomer()" > <span class="btn-label updatecuslabel"><i class="fa fa-plus"></i></span><span id="change_label_cust">UPDATE</span></button>');
        fn_clear_ledger();
        var supp = $('#customerslist1 [value="' + sup + '"]').attr('data-value');
        if(supp == undefined){
            $("#confirm_title").html("Customer Does Not Exist");
            $("#confirm_body").html("Do you wish to add this Customer.?");
            $("#btn_confirm").click();
        }else{
            $("#sel_supplier").val(supp);
            $("#addbutton").html('<button name="add_customer" type="button" class="btn btn-primary save updatecus form-class" id="addcustomer" onclick="fn_addcustomer()" > <span class="btn-label updatecuslabel"><i class="fa fa-plus"></i></span><span id="change_label_cust">UPDATE</span></button>');
            $("#add_newcust").attr('checked','');
            $("#slcode_exist").val(0);
            fn_supllier(supp);
        }
}

</script>
		<input type="hidden" id="hid_delrow" name="hid_delrow" value=""/>

<div id="remarkspopup" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="
    background: #489ee7;
    color: #FFF;
    text-align: center;
	    padding: 2px;
  
">
   <button type="button" class="close closeremarksbutton" data-dismiss="modal" style="margin-top:7px!important;" ><i class="fa fa-times closeremarks"></i></button>
        <h4 class="headingpopup">Remarks</h4>
      </div>
      <div class="modal-body">
      <table>					 
                    <tr>
					<td>
												<input onclick="$('#Disp_remarks').val('1');" type="radio" name="use_this" id="use_this"  ><label class="labelinline" onclick="$('#Disp_remarks').val('1');" for="use_this">&nbsp;&nbsp;&nbsp;Use This</label>
						&nbsp; &nbsp; &nbsp; 
						<input onclick="$('#Disp_remarks').val('2');" type="radio" name="use_this" id="use_this_also"  ><label class="labelinline" onclick="$('#Disp_remarks').val('2');" for="use_this_also">&nbsp;&nbsp;&nbsp;Use This & Common Terms Also</label>
						<input type="hidden" name="Disp_remarks" id="Disp_remarks" value="0" >
					</td></tr>
					   <tr><td>&nbsp;</td></tr>
                    <tr>
					<td>
						<textarea rows="3" cols="60" class="remarksinput" name="remarks" style="border:1px solid #ddd;padding:6px!important;height:60px;" id="remarks" value="" placeholder="Remarks"></textarea>
					</td></tr>
					<tr>
					
					<td>
						<textarea rows="3" cols="60"  class="remarksinput"  name="manuf_details" id="manuf_details" value="" placeholder="Other Details" style="margin-top:11px;border:1px solid #ddd;padding:6px!important;height:64px;"></textarea>
					
					
						</td></tr>
						<tr>
			<td colspan="2">   
<button name="Add" type="button" class="btn btn-primary settingssave" data-dismiss="modal" id="addbut" >
                <span class="btn-label settingssavelabel"><i class="glyphicon glyphicon-plus" style="height:30px;"></i></span>Save</button>
<button name="reset" type="button" class="btn btn-labeled btn-danger settingscancel" data-dismiss="modal" id="delbut" style="height:30px;border:none; padding:0px 12px 0px;margin-top:15px;">
                <span class="btn-label" style=""><i class="glyphicon glyphicon-remove" style="height:30px;"></i></span>CANCEL</button>
		
                <input type="hidden" name="commission_per" id="commission_per" value="0">
				<span class="required"></span></td>
		
			
			</tr>
						
						</table>
      </div>
 
    </div>

  </div>
</div>

		<div id="myModal5" class="modal fade" role="dialog"> 

	<input type='hidden' name="enable_warning2" id="enable_warning2" value="0">
	<input type='hidden' name="next_focus2" id="next_focus2" value="">
  <div class="modal-dialog customerpopup">
 <style>
         .error {color: #FF0000;}
      </style>
    <!-- Modal content-->
   
<style>
.modal-dialog.customerpopup
{
	width:800px!important;
}
#mobile_details td, th
{
	vertical-align:middle!important;
}
</style>
	<div class="modal-content">
      <div class="modal-header" style="
    background: none;
    color: #FFF;
    text-align: center;
	      padding: 0px!important;
  
">
	


<input type='hidden' id="hid_default_cntry" name="hid_default_cntry" value="103">
<input type='hidden' id="hid_default_state" name="hid_default_state" value="33">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="headingpopup" style="text-align:left;height: 45px;padding-top: 12px;">Customer Form<span style="float:right;padding: 4px;" class="rightbox">	 <!--<button type="button" class="button btn btn-success addcustomerinpopup"  name="add_newcust" id="add_newcust" onclick="fn_change_cust()" /><span class="btn-label addcustomerinpopuplabel"><i class="fa fa-check"></i></span>Add Customer</button>-->
	   
	  <label class="custom-checkbox addcheck" for="add_newcust"> <span class="label-text addtext">&nbsp;&nbsp;Add Customer</span>&nbsp;&nbsp;<input type="checkbox" onchange="fn_change_cust()" name="add_newcust" id="add_newcust"> <span class="helping-eladdcus"></span></label>
	   </span></h4>
      </div>
    
      <div class="modal-body cuspopup" style="padding: 0px 10px 10px 10px!important;">
	  <div class="row searchcustomerinpop" id="cut_search" style="display:block;" >
	  
	  
	  <div class="input-group add-on searchaddon" style="width: 100%!important;top:5px;">
     <input type="text"  class="form-control searchinput ng-pristine ng-untouched ng-valid searchlist" placeholder="Customer Name/Mobile No" id="sel_supplier_sel" autofocus style="width: 100%!important;" id="sel_supplier_sel" list="list_supp" onchange="fn_supllier_sel(this.value);" >
	 <input type="hidden"  id="sel_supplier" name="sel_supplier" value="">

			<datalist id="list_supp">
							</datalist>
	  <div class="input-group-btn">
        <button type="button" class="btn btn-default searchbutton" style="width: 95px;">Search</button>
      </div>
	  
	  
	  
	  </div>
	  
	  </div>
	  
      	<table width="100%" border="0" cellspacing="0" cellpadding="0" id="cus_search">
		
		<!--<tr>
	
		
		<td> <label class="custom-checkbox" for="add_newcust"> <span class="label-text">&nbsp;&nbsp;Add Customer</span>&nbsp;&nbsp;<input type="checkbox" onchange="fn_change_cust()" name="add_newcust" id="add_newcust"> <span class="helping-el"></span></label></td>
		
		</tr>-->
		
		
		<tr id="cut_search">
		
		<td colspan="4">
		
		
	  </td>
	  
	  </tr>
      		
      	</table>
		
		
	  
      <table width="100%" border="0" cellspacing="0" cellpadding="0" id="mobile_details" style="margin:5px 0px 0px 0px!important;">
	 <!-- <tr>
	  <td>
	  	<input type="text"  class="text-input medium-input" placeholder="Customer Name/Mobile No" id="sel_supplier_sel" id="sel_supplier_sel" list="list_supp" onchange="fn_supllier_sel(this.value);" >
				 	<input type="hidden"  id="sel_supplier" name="sel_supplier" >
				
					<datalist id="list_supp">
											<option data-value="3" value="73052 29527~MADHAV"></option>
					
			</datalist>
			
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
	  </tr>-->

		

	  	 <tr>
			<td width="20%"> Name<span class="required">*</span><br/><small style="font-size:10px;">&nbsp;[Company/Customer]</small></td>
		
			<td width="30%">
			<input type="text" class="text-input medium-input form-class" name="ledger_name" style="text-align:left;padding-left:2px;" id="ledger_name" maxlength="100" -tabindex="10" value="" /><span class = "error" id="lname_error"></span>
			
			<input type="hidden" value="" name="slcode_no" id="slcode_no" class="text-input medium-input form-class" autofocus maxlength="30" -tabindex="27" /></td>
			<td width="20%" style="padding-left:10px;">
			 <span>Mobile</span>
			 			</td>
			<td width="">
			<input type="hidden" class="text-input medium-input form-class" name="debitor"  id ="debitor" maxlength="100" -tabindex="10" value="9" />
			<input type="text" id="mobile_no" class="text-input medium-input form-class" autofocus name="mobile_no" maxlength="30" -tabindex="27" value="" onchange="check_mobile(this.value);" -onchange="display_mobile_details(this.value)"/><span class = "error" id="mob_error"></span>
		
			</td>
		 </tr> 
		
		
			<tr>
			<td width="">Address 1</td>
			<td width=""><input type="text" class="text-input medium-input form-class" name="add1" id="add1" maxlength="100" -tabindex="17" value="" /> <span class = "error" id="add1_error"></span></td>
			<td width="" style="padding-left:10px;">Address 2</td>
			<td width=""><input type="text" class="text-input medium-input form-class" name="add2" id="add2" maxlength="100" -tabindex="18" value="" /></td>
		 </tr>
     
		  	 <tr>
			<!--<td width=""><span class="required">*</span>Contact Person</td>
		
			<td width=""><input type="text" id="contact_person" class="text-input medium-input form-class"  name="contact_person" id="contact_person" maxlength="30" -tabindex="27" value="" -onblur="setArea(this.value);" /></td>-->
			
			<td width="" style="">Country</td>
		
			<td width="" id="countrytable">
			<input type="hidden" id="contact_person" class="text-input medium-input form-class"  name="contact_person" id="contact_person" maxlength="30" -tabindex="27" value="" -onblur="setArea(this.value);" />
			
			<select name="country" id="country1"  class="text-input medium-input form-class" style="width: 100%;margin-left: 3px;text-align:left;padding-left:2px;" -tabindex="23">

					

						
						  <option value="1"  >AFGHANISTAN</option>

					
						  <option value="2"  >ALAND ISLANDS</option>

					
						  <option value="3"  >ALBANIA</option>

					
						  <option value="4"  >ALGERIA</option>

					
						  <option value="5"  >AMERICAN SAMOA</option>

					
						  <option value="6"  >ANDORRA</option>

					
						  <option value="7"  >ANGOLA</option>

					
						  <option value="8"  >ANGUILLA</option>

					
						  <option value="9"  >ANTARCTICA</option>

					
						  <option value="10"  >ANTIGUA AND BARBUDA</option>

					
						  <option value="11"  >ARGENTINA</option>

					
						  <option value="12"  >ARMENIA</option>

					
						  <option value="13"  >ARUBA</option>

					
						  <option value="14"  >AUSTRALIA</option>

					
						  <option value="15"  >AUSTRIA</option>

					
						  <option value="16"  >AZERBAIJAN</option>

					
						  <option value="17"  >BAHAMAS</option>

					
						  <option value="18"  >BAHRAIN</option>

					
						  <option value="19"  >BANGLADESH</option>

					
						  <option value="20"  >BARBADOS</option>

					
						  <option value="21"  >BELARUS</option>

					
						  <option value="22"  >BELGIUM</option>

					
						  <option value="23"  >BELIZE</option>

					
						  <option value="24"  >BENIN</option>

					
						  <option value="25"  >BERMUDA</option>

					
						  <option value="26"  >BHUTAN</option>

					
						  <option value="27"  >BOLIVIA, PLURINATIONAL STATE OF</option>

					
						  <option value="28"  >BONAIRE, SINT EUSTATIUS AND SABA</option>

					
						  <option value="29"  >BOSNIA AND HERZEGOVINA</option>

					
						  <option value="30"  >BOTSWANA</option>

					
						  <option value="31"  >BOUVET ISLAND</option>

					
						  <option value="32"  >BRAZIL</option>

					
						  <option value="33"  >BRITISH INDIAN OCEAN TERRITORY</option>

					
						  <option value="34"  >BRUNEI DARUSSALAM</option>

					
						  <option value="35"  >BULGARIA</option>

					
						  <option value="36"  >BURKINA FASO</option>

					
						  <option value="37"  >BURUNDI</option>

					
						  <option value="38"  >CAMBODIA</option>

					
						  <option value="39"  >CAMEROON</option>

					
						  <option value="40"  >CANADA</option>

					
						  <option value="41"  >CAPE VERDE</option>

					
						  <option value="42"  >CAYMAN ISLANDS</option>

					
						  <option value="43"  >CENTRAL AFRICAN REPUBLIC</option>

					
						  <option value="44"  >CHAD</option>

					
						  <option value="45"  >CHILE</option>

					
						  <option value="46"  >CHINA</option>

					
						  <option value="47"  >CHRISTMAS ISLAND</option>

					
						  <option value="48"  >COCOS (KEELING) ISLANDS</option>

					
						  <option value="49"  >COLOMBIA</option>

					
						  <option value="50"  >COMOROS</option>

					
						  <option value="51"  >CONGO</option>

					
						  <option value="52"  >CONGO, THE DEMOCRATIC REPUBLIC OF THE</option>

					
						  <option value="53"  >COOK ISLANDS</option>

					
						  <option value="54"  >COSTA RICA</option>

					
						  <option value="55"  >COTE D'IVOIRE</option>

					
						  <option value="56"  >CROATIA</option>

					
						  <option value="57"  >CUBA</option>

					
						  <option value="58"  >CURACAO</option>

					
						  <option value="59"  >CYPRUS</option>

					
						  <option value="60"  >CZECH REPUBLIC</option>

					
						  <option value="61"  >DENMARK</option>

					
						  <option value="62"  >DJIBOUTI</option>

					
						  <option value="63"  >DOMINICA</option>

					
						  <option value="64"  >DOMINICAN REPUBLIC</option>

					
						  <option value="65"  >ECUADOR</option>

					
						  <option value="66"  >EGYPT</option>

					
						  <option value="67"  >EL SALVADOR</option>

					
						  <option value="68"  >EQUATORIAL GUINEA</option>

					
						  <option value="69"  >ERITREA</option>

					
						  <option value="70"  >ESTONIA</option>

					
						  <option value="71"  >ETHIOPIA</option>

					
						  <option value="72"  >FALKLAND ISLANDS (MALVINAS)</option>

					
						  <option value="73"  >FAROE ISLANDS</option>

					
						  <option value="74"  >FIJI</option>

					
						  <option value="75"  >FINLAND</option>

					
						  <option value="76"  >FRANCE</option>

					
						  <option value="77"  >FRENCH GUIANA</option>

					
						  <option value="78"  >FRENCH POLYNESIA</option>

					
						  <option value="79"  >FRENCH SOUTHERN TERRITORIES</option>

					
						  <option value="80"  >GABON</option>

					
						  <option value="81"  >GAMBIA</option>

					
						  <option value="82"  >GEORGIA</option>

					
						  <option value="83"  >GERMANY</option>

					
						  <option value="84"  >GHANA</option>

					
						  <option value="85"  >GIBRALTAR</option>

					
						  <option value="86"  >GREECE</option>

					
						  <option value="87"  >GREENLAND</option>

					
						  <option value="88"  >GRENADA</option>

					
						  <option value="89"  >GUADELOUPE</option>

					
						  <option value="90"  >GUAM</option>

					
						  <option value="91"  >GUATEMALA</option>

					
						  <option value="92"  >GUERNSEY</option>

					
						  <option value="93"  >GUINEA</option>

					
						  <option value="94"  >GUINEA-BISSAU</option>

					
						  <option value="95"  >GUYANA</option>

					
						  <option value="96"  >HAITI</option>

					
						  <option value="97"  >HEARD ISLAND AND MCDONALD ISLANDS</option>

					
						  <option value="98"  >HOLY SEE (VATICAN CITY STATE)</option>

					
						  <option value="99"  >HONDURAS</option>

					
						  <option value="100"  >HONG KONG</option>

					
						  <option value="101"  >HUNGARY</option>

					
						  <option value="102"  >ICELAND</option>

					
						  <option value="103" selected="selected" >INDIA</option>

					
						  <option value="104"  >INDONESIA</option>

					
						  <option value="105"  >IRAN, ISLAMIC REPUBLIC OF</option>

					
						  <option value="106"  >IRAQ</option>

					
						  <option value="107"  >IRELAND</option>

					
						  <option value="108"  >ISLE OF MAN</option>

					
						  <option value="109"  >ISRAEL</option>

					
						  <option value="110"  >ITALY</option>

					
						  <option value="111"  >JAMAICA</option>

					
						  <option value="112"  >JAPAN</option>

					
						  <option value="113"  >JERSEY</option>

					
						  <option value="114"  >JORDAN</option>

					
						  <option value="115"  >KAZAKHSTAN</option>

					
						  <option value="116"  >KENYA</option>

					
						  <option value="117"  >KIRIBATI</option>

					
						  <option value="118"  >KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF</option>

					
						  <option value="119"  >KOREA, REPUBLIC OF</option>

					
						  <option value="120"  >KUWAIT</option>

					
						  <option value="121"  >KYRGYZSTAN</option>

					
						  <option value="122"  >LAO PEOPLE'S DEMOCRATIC REPUBLIC</option>

					
						  <option value="123"  >LATVIA</option>

					
						  <option value="124"  >LEBANON</option>

					
						  <option value="125"  >LESOTHO</option>

					
						  <option value="126"  >LIBERIA</option>

					
						  <option value="127"  >LIBYAN ARAB JAMAHIRIYA</option>

					
						  <option value="128"  >LIECHTENSTEIN</option>

					
						  <option value="129"  >LITHUANIA</option>

					
						  <option value="130"  >LUXEMBOURG</option>

					
						  <option value="131"  >MACAO</option>

					
						  <option value="132"  >MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF</option>

					
						  <option value="133"  >MADAGASCAR</option>

					
						  <option value="134"  >MALAWI</option>

					
						  <option value="135"  >MALAYSIA</option>

					
						  <option value="136"  >MALDIVES</option>

					
						  <option value="137"  >MALI</option>

					
						  <option value="138"  >MALTA</option>

					
						  <option value="139"  >MARSHALL ISLANDS</option>

					
						  <option value="140"  >MARTINIQUE</option>

					
						  <option value="141"  >MAURITANIA</option>

					
						  <option value="142"  >MAURITIUS</option>

					
						  <option value="143"  >MAYOTTE</option>

					
						  <option value="144"  >MEXICO</option>

					
						  <option value="145"  >MICRONESIA, FEDERATED STATES OF</option>

					
						  <option value="146"  >MOLDOVA, REPUBLIC OF</option>

					
						  <option value="147"  >MONACO</option>

					
						  <option value="148"  >MONGOLIA</option>

					
						  <option value="149"  >MONTENEGRO</option>

					
						  <option value="150"  >MONTSERRAT</option>

					
						  <option value="151"  >MOROCCO</option>

					
						  <option value="152"  >MOZAMBIQUE</option>

					
						  <option value="153"  >MYANMAR</option>

					
						  <option value="154"  >NAMIBIA</option>

					
						  <option value="155"  >NAURU</option>

					
						  <option value="156"  >NEPAL</option>

					
						  <option value="157"  >NETHERLANDS</option>

					
						  <option value="158"  >NEW CALEDONIA</option>

					
						  <option value="159"  >NEW ZEALAND</option>

					
						  <option value="160"  >NICARAGUA</option>

					
						  <option value="161"  >NIGER</option>

					
						  <option value="162"  >NIGERIA</option>

					
						  <option value="163"  >NIUE</option>

					
						  <option value="164"  >NORFOLK ISLAND</option>

					
						  <option value="165"  >NORTHERN MARIANA ISLANDS</option>

					
						  <option value="166"  >NORWAY</option>

					
						  <option value="167"  >OMAN</option>

					
						  <option value="168"  >PAKISTAN</option>

					
						  <option value="169"  >PALAU</option>

					
						  <option value="170"  >PALESTINIAN TERRITORY, OCCUPIED</option>

					
						  <option value="171"  >PANAMA</option>

					
						  <option value="172"  >PAPUA NEW GUINEA</option>

					
						  <option value="173"  >PARAGUAY</option>

					
						  <option value="174"  >PERU</option>

					
						  <option value="175"  >PHILIPPINES</option>

					
						  <option value="176"  >PITCAIRN</option>

					
						  <option value="177"  >POLAND</option>

					
						  <option value="178"  >PORTUGAL</option>

					
						  <option value="179"  >PUERTO RICO</option>

					
						  <option value="180"  >QATAR</option>

					
						  <option value="181"  >REUNION</option>

					
						  <option value="182"  >ROMANIA</option>

					
						  <option value="183"  >RUSSIAN FEDERATION</option>

					
						  <option value="184"  >RWANDA</option>

					
						  <option value="185"  >SAINT BARTHELEMY</option>

					
						  <option value="186"  >SAINT HELENA, ASCENSION AND TRISTAN DA CUNHA</option>

					
						  <option value="187"  >SAINT KITTS AND NEVIS</option>

					
						  <option value="188"  >SAINT LUCIA</option>

					
						  <option value="189"  >SAINT MARTIN (FRENCH PART)</option>

					
						  <option value="190"  >SAINT PIERRE AND MIQUELON</option>

					
						  <option value="191"  >SAINT VINCENT AND THE GRENADINES</option>

					
						  <option value="192"  >SAMOA</option>

					
						  <option value="193"  >SAN MARINO</option>

					
						  <option value="194"  >SAO TOME AND PRINCIPE</option>

					
						  <option value="195"  >SAUDI ARABIA</option>

					
						  <option value="196"  >SENEGAL</option>

					
						  <option value="197"  >SERBIA</option>

					
						  <option value="198"  >SEYCHELLES</option>

					
						  <option value="199"  >SIERRA LEONE</option>

					
						  <option value="200"  >SINGAPORE</option>

					
						  <option value="201"  >SINT MAARTEN (DUTCH PART)</option>

					
						  <option value="202"  >SLOVAKIA</option>

					
						  <option value="203"  >SLOVENIA</option>

					
						  <option value="204"  >SOLOMON ISLANDS</option>

					
						  <option value="205"  >SOMALIA</option>

					
						  <option value="206"  >SOUTH AFRICA</option>

					
						  <option value="207"  >SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS</option>

					
						  <option value="208"  >SPAIN</option>

					
						  <option value="209"  >SRI LANKA</option>

					
						  <option value="210"  >SUDAN</option>

					
						  <option value="211"  >SURINAME</option>

					
						  <option value="212"  >SVALBARD AND JAN MAYEN</option>

					
						  <option value="213"  >SWAZILAND</option>

					
						  <option value="214"  >SWEDEN</option>

					
						  <option value="215"  >SWITZERLAND</option>

					
						  <option value="216"  >SYRIAN ARAB REPUBLIC</option>

					
						  <option value="217"  >TAIWAN, PROVINCE OF CHINA</option>

					
						  <option value="218"  >TAJIKISTAN</option>

					
						  <option value="219"  >TANZANIA, UNITED REPUBLIC OF</option>

					
						  <option value="220"  >THAILAND</option>

					
						  <option value="221"  >TIMOR-LESTE</option>

					
						  <option value="222"  >TOGO</option>

					
						  <option value="223"  >TOKELAU</option>

					
						  <option value="224"  >TONGA</option>

					
						  <option value="225"  >TRINIDAD AND TOBAGO</option>

					
						  <option value="226"  >TUNISIA</option>

					
						  <option value="227"  >TURKEY</option>

					
						  <option value="228"  >TURKMENISTAN</option>

					
						  <option value="229"  >TURKS AND CAICOS ISLANDS</option>

					
						  <option value="230"  >TUVALU</option>

					
						  <option value="231"  >UGANDA</option>

					
						  <option value="232"  >UKRAINE</option>

					
						  <option value="233"  >UNITED ARAB EMIRATES</option>

					
						  <option value="234"  >UNITED KINGDOM</option>

					
						  <option value="235"  >UNITED STATES</option>

					
						  <option value="236"  >UNITED STATES MINOR OUTLYING ISLANDS</option>

					
						  <option value="237"  >URUGUAY</option>

					
						  <option value="238"  >UZBEKISTAN</option>

					
						  <option value="239"  >VANUATU</option>

					
						  <option value="240"  >VENEZUELA, BOLIVARIAN REPUBLIC OF</option>

					
						  <option value="241"  >VIET NAM</option>

					
						  <option value="242"  >VIRGIN ISLANDS, BRITISH</option>

					
						  <option value="243"  >VIRGIN ISLANDS, U.S.</option>

					
						  <option value="244"  >WALLIS AND FUTUNA</option>

					
						  <option value="245"  >WESTERN SAHARA</option>

					
						  <option value="246"  >YEMEN</option>

					
						  <option value="247"  >ZAMBIA</option>

					
						  <option value="248"  >ZIMBABWE</option>

										</select>

					<span class="required"></span>	</td>
					
					<td width="" style="padding-left: 10px;">State</td>
				<td width="">
				
				  <select name="state" class="text_customer form-class" id="state1"  -tabindex="22" style="width: 100%;
    margin-left: 3px;text-align:left;padding-left:2px;">
                  
                                            <option value="32"  >ANDAMAN & NICOBAR</option>
                                            <option value="1"  >ANDHRA PRADESH</option>
                                            <option value="3"  >ARUNACHAL PRADESH</option>
                                            <option value="2"  >ASSAM</option>
                                            <option value="5"  >BIHAR</option>
                                            <option value="31"  >CHANDIGARH</option>
                                            <option value="35"  >CHATTISGARH</option>
                                            <option value="30"  >DADRA & NAGAR</option>
                                            <option value="29"  >DAMAN & DIU</option>
                                            <option value="25"  >DELHI</option>
                                            <option value="26"  >GOA</option>
                                            <option value="4"  >GUJRAT</option>
                                            <option value="6"  >HARYANA</option>
                                            <option value="7"  >HIMACHAL PRADESH</option>
                                            <option value="8"  >JAMMU & KASHMIR</option>
                                            <option value="34"  >JHARKHAND</option>
                                            <option value="9"  >KARNATAKA</option>
                                            <option value="10"  >KERALA</option>
                                            <option value="28"  >LAKSHDWEEP</option>
                                            <option value="11"  >MADHYA PRADESH</option>
                                            <option value="12"  >MAHARASHTRA</option>
                                            <option value="13"  >MANIPUR</option>
                                            <option value="14"  >MEGHALAYA</option>
                                            <option value="15"  >MIZORAM</option>
                                            <option value="16"  >NAGALAND</option>
                                            <option value="17"  >ORISSA</option>
                                            <option value="39"  >OTHERS</option>
                                            <option value="27"  >PONDICHERY</option>
                                            <option value="18"  >PUNJAB</option>
                                            <option value="19"  >RAJASTHAN</option>
                                            <option value="20"  >SIKKIM</option>
                                            <option value="33" selected="selected" >TAMIL NADU</option>
                                            <option value="38"  >TEST</option>
                                            <option value="40"  >TEST EN</option>
                                            <option value="22"  >TRIPURA</option>
                                            <option value="23"  >UTTAR PRADESH</option>
                                            <option value="21"  >UTTARANCHAL</option>
                                            <option value="24"  >WEST BENGAL</option>
                                          </select><span class = "error" id="stat_error"></span>	
				</td>
		 </tr> 
		 
			
		   <tr>
			
		<td width="" >City</td>
		
			<td width=""><input type="text" class="text-input medium-input form-class" name="city" id="city" maxlength="100"  value="" /><span class = "error" id="cit_error"></span></td>
			
			<td width="" style="padding-left: 10px;">ZipCode</td>
		
			<td width=""><input type="text" id="zip_code" class="text-input medium-input form-class" name="zip_code" id="zip_code" maxlength="30" -tabindex="27" value="" -onblur="setArea(this.value);" /><span class = "error" id="mob_error"></span></td>
			
		 </tr> 
		 

		 
		 
		 	 <tr>
			
			
			<td width="">GSTIN</td>
		
			<td width="">
			
			<input name="credit_days" class="text-input medium-input form-class" type="hidden" id="credit_days"  onchange="fn_duedate(this.value)" value="" />	
			
			<input name="duedate" class="text-input medium-input form-class" type="hidden" id="duedate" readonly="true" onchange="fn_creditdays()" value=""/></span> 
			
			
			<input type="text" class="text-input medium-input form-class" id="gstin" name="gstin" maxlength="100" -tabindex="29" value="" /> <span class="required"></span><span class="required" id='msg_ledger_email'></span></td>
			
			
				<td style=";padding-left: 10px;"><label>Type</label></td>
		 	<td style=""><select name="txt_rate_type" id="txt_rate_type" class="form-class" style="width: 100%;margin-left: 3px;text-align:left;padding-left:2px;">
		 		<option value="">Select</option>
		 				 			<option value="1"  >Member Ship</option>
		 				 			<option value="5"  >Whole Sales</option>
		 				 			<option value="6"  >Gold</option>
		 				 			<option value="7"  >Silver</option>
		 				 			<option value="8"  >Platinum</option>
		 				 	</select></td>
			
				 </tr> 
		  <tr>
					
			
			<td width="" style="">Email </td>
		
			<td width="">
				<input type="text" class="text-input medium-input form-class" id="cust_email" name="cust_email" maxlength="100" value="" />
			</td>
				</tr>
		  <tr>
			<td width=""> MSME TYPE : </td>
		
			<td width="">
				<input type="text" class="text-input medium-input form-class" id="MSMEType" name="MSMEType" maxlength="100" value="" />
			</td>
			<td width="" style=";padding-left: 10px;"> MSME No : </td>
		
		<td width="">
			<input type="text" class="text-input medium-input form-class" id="MSMENo" name="MSMENo" maxlength="100" value="" />
		</td>
			
		 </tr> 
		<!--  <tr id="credit_details">
			<td width=""><span class="required">*</span>Credit Days</td>
		
			<td width=""><input name="credit_days" class="text-input medium-input form-class" type="text" id="credit_days"  onchange="fn_duedate(this.value)" value="" />	 <span class="required"></span> </td>
			
			<td width="" style="padding-left:10px;"><span class="required">*</span>Due Date</td>
		
			<td width=""><input name="duedate" class="text-input medium-input form-class" type="text" id="duedate" readonly="true" onchange="fn_creditdays()" value=""/></span> </td>
		 </tr> 
		-->
			
		
		 </tr>
		
	  	 <tr>
			<td width="20%">Shipping Name</td>
		
			<td width="30%">
			 <input type="text" class="text-input medium-input form-class" name="shipping_name" style="text-align:left;padding-left:2px;" id="shipping_name" maxlength="100" -tabindex="10" value="" />
			</td>
			<td width="20%" style="padding-left:10px;">
			 <span>Shipping Mobile</span>
			</td>
			<td width="">
			 <input type="text" id="shipping_phone" class="text-input medium-input form-class" autofocus name="shipping_phone" maxlength="30" -tabindex="27" value="" />
			</td>
		 </tr> 
		
		
		<tr>
			<td width="">Shippping Line 1</td>
			<td width="">
			<input type="text" class="text-input medium-input form-class" name="shipping_add1" id="shipping_add1" maxlength="100" -tabindex="17" value="" />
			</td>
			<td width="" style="padding-left:10px;">Shipping Line 2</td>
			<td width="">
			 <input type="text" class="text-input medium-input form-class" name="shipping_add2" id="shipping_add2" maxlength="100" -tabindex="18" value="" /></td>
		 </tr>
     
	  	 <tr>
			<td width="" style="">Shipping Country</td>
		
			<td width="" id="countrytable">
			
			<select name="shipping_country" id="shipping_country"  class="text-input medium-input form-class" style="width: 100%;margin-left: 3px;text-align:left;padding-left:2px;" -tabindex="23">

					

						
						  <option value="1"  >AFGHANISTAN</option>

					
						  <option value="2"  >ALAND ISLANDS</option>

					
						  <option value="3"  >ALBANIA</option>

					
						  <option value="4"  >ALGERIA</option>

					
						  <option value="5"  >AMERICAN SAMOA</option>

					
						  <option value="6"  >ANDORRA</option>

					
						  <option value="7"  >ANGOLA</option>

					
						  <option value="8"  >ANGUILLA</option>

					
						  <option value="9"  >ANTARCTICA</option>

					
						  <option value="10"  >ANTIGUA AND BARBUDA</option>

					
						  <option value="11"  >ARGENTINA</option>

					
						  <option value="12"  >ARMENIA</option>

					
						  <option value="13"  >ARUBA</option>

					
						  <option value="14"  >AUSTRALIA</option>

					
						  <option value="15"  >AUSTRIA</option>

					
						  <option value="16"  >AZERBAIJAN</option>

					
						  <option value="17"  >BAHAMAS</option>

					
						  <option value="18"  >BAHRAIN</option>

					
						  <option value="19"  >BANGLADESH</option>

					
						  <option value="20"  >BARBADOS</option>

					
						  <option value="21"  >BELARUS</option>

					
						  <option value="22"  >BELGIUM</option>

					
						  <option value="23"  >BELIZE</option>

					
						  <option value="24"  >BENIN</option>

					
						  <option value="25"  >BERMUDA</option>

					
						  <option value="26"  >BHUTAN</option>

					
						  <option value="27"  >BOLIVIA, PLURINATIONAL STATE OF</option>

					
						  <option value="28"  >BONAIRE, SINT EUSTATIUS AND SABA</option>

					
						  <option value="29"  >BOSNIA AND HERZEGOVINA</option>

					
						  <option value="30"  >BOTSWANA</option>

					
						  <option value="31"  >BOUVET ISLAND</option>

					
						  <option value="32"  >BRAZIL</option>

					
						  <option value="33"  >BRITISH INDIAN OCEAN TERRITORY</option>

					
						  <option value="34"  >BRUNEI DARUSSALAM</option>

					
						  <option value="35"  >BULGARIA</option>

					
						  <option value="36"  >BURKINA FASO</option>

					
						  <option value="37"  >BURUNDI</option>

					
						  <option value="38"  >CAMBODIA</option>

					
						  <option value="39"  >CAMEROON</option>

					
						  <option value="40"  >CANADA</option>

					
						  <option value="41"  >CAPE VERDE</option>

					
						  <option value="42"  >CAYMAN ISLANDS</option>

					
						  <option value="43"  >CENTRAL AFRICAN REPUBLIC</option>

					
						  <option value="44"  >CHAD</option>

					
						  <option value="45"  >CHILE</option>

					
						  <option value="46"  >CHINA</option>

					
						  <option value="47"  >CHRISTMAS ISLAND</option>

					
						  <option value="48"  >COCOS (KEELING) ISLANDS</option>

					
						  <option value="49"  >COLOMBIA</option>

					
						  <option value="50"  >COMOROS</option>

					
						  <option value="51"  >CONGO</option>

					
						  <option value="52"  >CONGO, THE DEMOCRATIC REPUBLIC OF THE</option>

					
						  <option value="53"  >COOK ISLANDS</option>

					
						  <option value="54"  >COSTA RICA</option>

					
						  <option value="55"  >COTE D'IVOIRE</option>

					
						  <option value="56"  >CROATIA</option>

					
						  <option value="57"  >CUBA</option>

					
						  <option value="58"  >CURACAO</option>

					
						  <option value="59"  >CYPRUS</option>

					
						  <option value="60"  >CZECH REPUBLIC</option>

					
						  <option value="61"  >DENMARK</option>

					
						  <option value="62"  >DJIBOUTI</option>

					
						  <option value="63"  >DOMINICA</option>

					
						  <option value="64"  >DOMINICAN REPUBLIC</option>

					
						  <option value="65"  >ECUADOR</option>

					
						  <option value="66"  >EGYPT</option>

					
						  <option value="67"  >EL SALVADOR</option>

					
						  <option value="68"  >EQUATORIAL GUINEA</option>

					
						  <option value="69"  >ERITREA</option>

					
						  <option value="70"  >ESTONIA</option>

					
						  <option value="71"  >ETHIOPIA</option>

					
						  <option value="72"  >FALKLAND ISLANDS (MALVINAS)</option>

					
						  <option value="73"  >FAROE ISLANDS</option>

					
						  <option value="74"  >FIJI</option>

					
						  <option value="75"  >FINLAND</option>

					
						  <option value="76"  >FRANCE</option>

					
						  <option value="77"  >FRENCH GUIANA</option>

					
						  <option value="78"  >FRENCH POLYNESIA</option>

					
						  <option value="79"  >FRENCH SOUTHERN TERRITORIES</option>

					
						  <option value="80"  >GABON</option>

					
						  <option value="81"  >GAMBIA</option>

					
						  <option value="82"  >GEORGIA</option>

					
						  <option value="83"  >GERMANY</option>

					
						  <option value="84"  >GHANA</option>

					
						  <option value="85"  >GIBRALTAR</option>

					
						  <option value="86"  >GREECE</option>

					
						  <option value="87"  >GREENLAND</option>

					
						  <option value="88"  >GRENADA</option>

					
						  <option value="89"  >GUADELOUPE</option>

					
						  <option value="90"  >GUAM</option>

					
						  <option value="91"  >GUATEMALA</option>

					
						  <option value="92"  >GUERNSEY</option>

					
						  <option value="93"  >GUINEA</option>

					
						  <option value="94"  >GUINEA-BISSAU</option>

					
						  <option value="95"  >GUYANA</option>

					
						  <option value="96"  >HAITI</option>

					
						  <option value="97"  >HEARD ISLAND AND MCDONALD ISLANDS</option>

					
						  <option value="98"  >HOLY SEE (VATICAN CITY STATE)</option>

					
						  <option value="99"  >HONDURAS</option>

					
						  <option value="100"  >HONG KONG</option>

					
						  <option value="101"  >HUNGARY</option>

					
						  <option value="102"  >ICELAND</option>

					
						  <option value="103" selected="selected" >INDIA</option>

					
						  <option value="104"  >INDONESIA</option>

					
						  <option value="105"  >IRAN, ISLAMIC REPUBLIC OF</option>

					
						  <option value="106"  >IRAQ</option>

					
						  <option value="107"  >IRELAND</option>

					
						  <option value="108"  >ISLE OF MAN</option>

					
						  <option value="109"  >ISRAEL</option>

					
						  <option value="110"  >ITALY</option>

					
						  <option value="111"  >JAMAICA</option>

					
						  <option value="112"  >JAPAN</option>

					
						  <option value="113"  >JERSEY</option>

					
						  <option value="114"  >JORDAN</option>

					
						  <option value="115"  >KAZAKHSTAN</option>

					
						  <option value="116"  >KENYA</option>

					
						  <option value="117"  >KIRIBATI</option>

					
						  <option value="118"  >KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF</option>

					
						  <option value="119"  >KOREA, REPUBLIC OF</option>

					
						  <option value="120"  >KUWAIT</option>

					
						  <option value="121"  >KYRGYZSTAN</option>

					
						  <option value="122"  >LAO PEOPLE'S DEMOCRATIC REPUBLIC</option>

					
						  <option value="123"  >LATVIA</option>

					
						  <option value="124"  >LEBANON</option>

					
						  <option value="125"  >LESOTHO</option>

					
						  <option value="126"  >LIBERIA</option>

					
						  <option value="127"  >LIBYAN ARAB JAMAHIRIYA</option>

					
						  <option value="128"  >LIECHTENSTEIN</option>

					
						  <option value="129"  >LITHUANIA</option>

					
						  <option value="130"  >LUXEMBOURG</option>

					
						  <option value="131"  >MACAO</option>

					
						  <option value="132"  >MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF</option>

					
						  <option value="133"  >MADAGASCAR</option>

					
						  <option value="134"  >MALAWI</option>

					
						  <option value="135"  >MALAYSIA</option>

					
						  <option value="136"  >MALDIVES</option>

					
						  <option value="137"  >MALI</option>

					
						  <option value="138"  >MALTA</option>

					
						  <option value="139"  >MARSHALL ISLANDS</option>

					
						  <option value="140"  >MARTINIQUE</option>

					
						  <option value="141"  >MAURITANIA</option>

					
						  <option value="142"  >MAURITIUS</option>

					
						  <option value="143"  >MAYOTTE</option>

					
						  <option value="144"  >MEXICO</option>

					
						  <option value="145"  >MICRONESIA, FEDERATED STATES OF</option>

					
						  <option value="146"  >MOLDOVA, REPUBLIC OF</option>

					
						  <option value="147"  >MONACO</option>

					
						  <option value="148"  >MONGOLIA</option>

					
						  <option value="149"  >MONTENEGRO</option>

					
						  <option value="150"  >MONTSERRAT</option>

					
						  <option value="151"  >MOROCCO</option>

					
						  <option value="152"  >MOZAMBIQUE</option>

					
						  <option value="153"  >MYANMAR</option>

					
						  <option value="154"  >NAMIBIA</option>

					
						  <option value="155"  >NAURU</option>

					
						  <option value="156"  >NEPAL</option>

					
						  <option value="157"  >NETHERLANDS</option>

					
						  <option value="158"  >NEW CALEDONIA</option>

					
						  <option value="159"  >NEW ZEALAND</option>

					
						  <option value="160"  >NICARAGUA</option>

					
						  <option value="161"  >NIGER</option>

					
						  <option value="162"  >NIGERIA</option>

					
						  <option value="163"  >NIUE</option>

					
						  <option value="164"  >NORFOLK ISLAND</option>

					
						  <option value="165"  >NORTHERN MARIANA ISLANDS</option>

					
						  <option value="166"  >NORWAY</option>

					
						  <option value="167"  >OMAN</option>

					
						  <option value="168"  >PAKISTAN</option>

					
						  <option value="169"  >PALAU</option>

					
						  <option value="170"  >PALESTINIAN TERRITORY, OCCUPIED</option>

					
						  <option value="171"  >PANAMA</option>

					
						  <option value="172"  >PAPUA NEW GUINEA</option>

					
						  <option value="173"  >PARAGUAY</option>

					
						  <option value="174"  >PERU</option>

					
						  <option value="175"  >PHILIPPINES</option>

					
						  <option value="176"  >PITCAIRN</option>

					
						  <option value="177"  >POLAND</option>

					
						  <option value="178"  >PORTUGAL</option>

					
						  <option value="179"  >PUERTO RICO</option>

					
						  <option value="180"  >QATAR</option>

					
						  <option value="181"  >REUNION</option>

					
						  <option value="182"  >ROMANIA</option>

					
						  <option value="183"  >RUSSIAN FEDERATION</option>

					
						  <option value="184"  >RWANDA</option>

					
						  <option value="185"  >SAINT BARTHELEMY</option>

					
						  <option value="186"  >SAINT HELENA, ASCENSION AND TRISTAN DA CUNHA</option>

					
						  <option value="187"  >SAINT KITTS AND NEVIS</option>

					
						  <option value="188"  >SAINT LUCIA</option>

					
						  <option value="189"  >SAINT MARTIN (FRENCH PART)</option>

					
						  <option value="190"  >SAINT PIERRE AND MIQUELON</option>

					
						  <option value="191"  >SAINT VINCENT AND THE GRENADINES</option>

					
						  <option value="192"  >SAMOA</option>

					
						  <option value="193"  >SAN MARINO</option>

					
						  <option value="194"  >SAO TOME AND PRINCIPE</option>

					
						  <option value="195"  >SAUDI ARABIA</option>

					
						  <option value="196"  >SENEGAL</option>

					
						  <option value="197"  >SERBIA</option>

					
						  <option value="198"  >SEYCHELLES</option>

					
						  <option value="199"  >SIERRA LEONE</option>

					
						  <option value="200"  >SINGAPORE</option>

					
						  <option value="201"  >SINT MAARTEN (DUTCH PART)</option>

					
						  <option value="202"  >SLOVAKIA</option>

					
						  <option value="203"  >SLOVENIA</option>

					
						  <option value="204"  >SOLOMON ISLANDS</option>

					
						  <option value="205"  >SOMALIA</option>

					
						  <option value="206"  >SOUTH AFRICA</option>

					
						  <option value="207"  >SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS</option>

					
						  <option value="208"  >SPAIN</option>

					
						  <option value="209"  >SRI LANKA</option>

					
						  <option value="210"  >SUDAN</option>

					
						  <option value="211"  >SURINAME</option>

					
						  <option value="212"  >SVALBARD AND JAN MAYEN</option>

					
						  <option value="213"  >SWAZILAND</option>

					
						  <option value="214"  >SWEDEN</option>

					
						  <option value="215"  >SWITZERLAND</option>

					
						  <option value="216"  >SYRIAN ARAB REPUBLIC</option>

					
						  <option value="217"  >TAIWAN, PROVINCE OF CHINA</option>

					
						  <option value="218"  >TAJIKISTAN</option>

					
						  <option value="219"  >TANZANIA, UNITED REPUBLIC OF</option>

					
						  <option value="220"  >THAILAND</option>

					
						  <option value="221"  >TIMOR-LESTE</option>

					
						  <option value="222"  >TOGO</option>

					
						  <option value="223"  >TOKELAU</option>

					
						  <option value="224"  >TONGA</option>

					
						  <option value="225"  >TRINIDAD AND TOBAGO</option>

					
						  <option value="226"  >TUNISIA</option>

					
						  <option value="227"  >TURKEY</option>

					
						  <option value="228"  >TURKMENISTAN</option>

					
						  <option value="229"  >TURKS AND CAICOS ISLANDS</option>

					
						  <option value="230"  >TUVALU</option>

					
						  <option value="231"  >UGANDA</option>

					
						  <option value="232"  >UKRAINE</option>

					
						  <option value="233"  >UNITED ARAB EMIRATES</option>

					
						  <option value="234"  >UNITED KINGDOM</option>

					
						  <option value="235"  >UNITED STATES</option>

					
						  <option value="236"  >UNITED STATES MINOR OUTLYING ISLANDS</option>

					
						  <option value="237"  >URUGUAY</option>

					
						  <option value="238"  >UZBEKISTAN</option>

					
						  <option value="239"  >VANUATU</option>

					
						  <option value="240"  >VENEZUELA, BOLIVARIAN REPUBLIC OF</option>

					
						  <option value="241"  >VIET NAM</option>

					
						  <option value="242"  >VIRGIN ISLANDS, BRITISH</option>

					
						  <option value="243"  >VIRGIN ISLANDS, U.S.</option>

					
						  <option value="244"  >WALLIS AND FUTUNA</option>

					
						  <option value="245"  >WESTERN SAHARA</option>

					
						  <option value="246"  >YEMEN</option>

					
						  <option value="247"  >ZAMBIA</option>

					
						  <option value="248"  >ZIMBABWE</option>

										</select>

				</td>
					
				<td width="" style="padding-left: 10px;">Shipping State</td>

				<td width="">
				
				  <select name="shipping_state" class="text_customer form-class" id="shipping_state" -tabindex="22" style="width: 100%;
    margin-left: 3px;text-align:left;padding-left:2px;">
                  
                                            <option value="32"  >ANDAMAN & NICOBAR</option>
                                            <option value="1"  >ANDHRA PRADESH</option>
                                            <option value="3"  >ARUNACHAL PRADESH</option>
                                            <option value="2"  >ASSAM</option>
                                            <option value="5"  >BIHAR</option>
                                            <option value="31"  >CHANDIGARH</option>
                                            <option value="35"  >CHATTISGARH</option>
                                            <option value="30"  >DADRA & NAGAR</option>
                                            <option value="29"  >DAMAN & DIU</option>
                                            <option value="25"  >DELHI</option>
                                            <option value="26"  >GOA</option>
                                            <option value="4"  >GUJRAT</option>
                                            <option value="6"  >HARYANA</option>
                                            <option value="7"  >HIMACHAL PRADESH</option>
                                            <option value="8"  >JAMMU & KASHMIR</option>
                                            <option value="34"  >JHARKHAND</option>
                                            <option value="9"  >KARNATAKA</option>
                                            <option value="10"  >KERALA</option>
                                            <option value="28"  >LAKSHDWEEP</option>
                                            <option value="11"  >MADHYA PRADESH</option>
                                            <option value="12"  >MAHARASHTRA</option>
                                            <option value="13"  >MANIPUR</option>
                                            <option value="14"  >MEGHALAYA</option>
                                            <option value="15"  >MIZORAM</option>
                                            <option value="16"  >NAGALAND</option>
                                            <option value="17"  >ORISSA</option>
                                            <option value="39"  >OTHERS</option>
                                            <option value="27"  >PONDICHERY</option>
                                            <option value="18"  >PUNJAB</option>
                                            <option value="19"  >RAJASTHAN</option>
                                            <option value="20"  >SIKKIM</option>
                                            <option value="33" selected="selected" >TAMIL NADU</option>
                                            <option value="38"  >TEST</option>
                                            <option value="40"  >TEST EN</option>
                                            <option value="22"  >TRIPURA</option>
                                            <option value="23"  >UTTAR PRADESH</option>
                                            <option value="21"  >UTTARANCHAL</option>
                                            <option value="24"  >WEST BENGAL</option>
                      		    </select>
		   </td>
		 </tr> 
		 
			
	   <tr>
		<td width="">Shipping City</td>
		<td width="">
		 <input type="text" class="text-input medium-input form-class" name="shipping_city" id="shipping_city" maxlength="100"  value="" />
		</td>
		<td width="" style="padding-left: 10px;">Shipping ZipCode</td>
		<td width="">
		 <input type="text" class="text-input medium-input form-class" name="shipping_zipcode" id="shipping_zipcode" maxlength="30" -tabindex="27" value=""  />
		</td>
	 </tr> 
		 
		 </table></div>
		 
		 
		 	<span id='hid_loyal' style='display:none;'>	 <h3 class="headingpopup" style="padding-left: 10px!important;">Loyalty Details<span style="float:right;margin-top: -4px!important;"  style="" id='hid_layal' ><span style="font-weight:bold;"> Enable Loyalty </span> &nbsp; &nbsp; <input type='radio'  id = 'enble_loyalty1' name='enble_loyalty' title="Enable Loyalty For This Customer " class='second form-class' Value='1'  onchange='fn_loyalty();' style="
    display: inline;
    text-align: left;
    width: 20px!important;
"><label for='enble_loyalty1' style="
    display: inline;
">Yes&nbsp; </label><input type='radio'  id = 'enble_loyalty2' checked name='enble_loyalty' style="
    display: inline;
    text-align: left;
    width: 20px!important;
" class='second form-class' title="Disable Loyalty For This Customer " Value='0' onchange='fn_loyalty();' checked ><label for='enble_loyalty2' style="
    display: inline;
">No</label><span id='avai_cards' style="color: red;"></span><input type="hidden" name="available_cards" id="available_cards"></span></h3>
<div class="modal-body loyaltysection" style="
    padding: 5px 10px 0px 10px!important;
">
		 <table id="loyal">
	<!--<tr style="" id='hid_layal'>
		<td width="154"> Enable Loyalty </td><td width="231"> <input type='radio'  id = 'enble_loyalty1' name='enble_loyalty' title="Enable Loyalty For This Customer " class='second form-class' Value='1'  onchange='fn_loyalty();' style="
    display: inline;
    text-align: left;
    width: 20px!important;
"><label for='enble_loyalty1' style="
    display: inline;
">&nbsp; Yes&nbsp; </label>  &nbsp; &nbsp; <input type='radio'  id = 'enble_loyalty2' checked name='enble_loyalty' style="
    display: inline;
    text-align: left;
    width: 20px!important;
" class='second form-class' title="Disable Loyalty For This Customer " Value='0' onchange='fn_loyalty();' ><label for='enble_loyalty2' style="
    display: inline;
">&nbsp; No &nbsp; </label><span id='avai_cards' style="color: red;"></span><input type="hidden" name="available_cards" id="available_cards"> </td>
	</tr>-->
	
	<tr>
		<td width="20%" > Card Type </td><td width="30%"><select name='card_typ' id="card_typ" onchange="return fnd_balance_card();" class="form-class" style="margin-bottom: 5px; width: 169px;">
			
			<option value="">Select</option>
					</select><span class="error" id="card_error"></span></td>
		
		<td width="20%"  style="padding-left:10px;">Card No</td><td width="285" ><input type='text' name='card_num' id='card_num'  value="" class=" form-class " onchange="chk_card_name(this.value);" style="margin-bottom: 5px;width:100%;"></td>
	</tr>
	
		 
	<!--<tr >
		<td id="cash_custph" width="199"><span class="required"></span>Card Number</td>
		<td width="841"><input form="mrn_ent" type="text" name="card_num" id="" Placeholder="Card Number" value=""  style="width:165px;" class="text-input medium-input" onchange="card_number(this.value);"  required="true" class="input-field">&nbsp;<span class="required"></td>
	</tr> -->
		 
  <!--  <tr >
		<td width="">&nbsp;	</td>
	<td width="26%" colspan="3">	


	<p id="billing" class="a4" style="background:#3476ae!important;"><input type="text" style="width: 165px!important;"  name="lyltpoints" id="lyltpoints"   value="" class="text-input medium-input txtright form-class" readonly /></p><p id="billing_text" style="background:#3476ae!important;" class="text-center">Loyalty Points</p>
<td width="26%">	


	<p id="billing" class="a4" style="background:#3476ae!important"><input type="text"  name="rdmpoints" style="width: 165px!important;"  id="rdmpoints"  value="" class="text-input medium-input txtright form-class" onchange="redeem_calc(this.value);fn_balamt();" onkeypress='validate(event)' /></p><p id="billing_text" style="background:#3476ae!important;" class="text-center">Redeem Points</p>

</td>
<td width="26%">	


	<p id="billing" class="a4" style="background:#3476ae!important;">
	
	<input type="text"  name="erndamt" id="erndamt" style="width: 165px!important;"   value="" class="text-input medium-input txtright form-class" readonly />
	
	</p><p id="billing_text" style="background:#3476ae!important;" class="text-center">Earned Amount</p>

</td>


</td></tr>-->

</table>
   </div>
<div class="row" style="padding: 5px 10px 0px 10px!important;">

<div class="col-md-6" style="padding-right:0px;"> 
<table>

<tr>

<td colspan="2" class="loy_balance">Total Balance Points</td>
<td colspan="2" class="loyaltypoints" style="
   
"><input type="text" style="height:30px;"  name="lyltpoints" id="lyltpoints"   value="" class="text-input medium-input txtright form-class" readonly /></td></tr>

<tr>
<td colspan="2" class="loy_balance">Current Bill Points</td>
<td colspan="2" class="loyaltypoints"><input type="text"  name="erndamt" id="erndamt" style="height:30px;"   value="" class="text-input medium-input txtright form-class" readonly /></td>
</tr>

</table>
</div>

<div class="col-md-6">
<p class="reddem_points">Points To Redeem<br/>

<input type="text"  name="rdmpoints" id="rdmpoints"  value="" class="text-input medium-input txtright form-class redeeminput" onchange="redeem_calc(this.value);fn_balamt();" onkeypress='validate(event)' />
</p>

</div>

</div>
	
		</span>




	

   
  <div class="modal-footer customerfooter" style="background:none!important;border-top:none!important;    margin-right:5px;" >
  
  
<input type="hidden" name="slcode_exist" id="slcode_exist" value="0">
	<span id="addbutton"><button name="add_customer" type="button" class="btn btn-primary save addcus form-class"  id='addcustomer' onclick="fn_addcustomer()" > <span class="btn-label  addcuslabel"><i class="fa fa-plus"></i></span><span id='change_label_cust' >Add </span></button></span>

<button name="reset"  type="button" class="btn btn-labeled btn-danger cancelcus form-class" id="delcancelquote" data-dismiss="modal" id="" >
                <span class="btn-label cancelcuslabel" style=""><i class="fa fa-times" ></i></span>CANCEL</button>
				





</div>
    </div>


<input type="hidden" name="js_basepath" id="js_basepath" value="http://demo.elixrlite.com/">
<script type="text/javascript">

function fn_hidloyal(sel){
	if(sel == 9){
		$('#hid_loyal').css({'display':'block'});
		document.getElementById('enble_loyalty1').checked = 'true';
	}else{
		$('#hid_loyal').css({'display':'none'});
	}
}
function fn_loyalty(){
	var data =  document.querySelector('input[name=enble_loyalty]:checked').value;
	$("#card_typ").val('');
	$("#card_num").val('');
	if(data == 0){
		$("#card_typ").attr('disabled','disabled');
		$("#card_num").attr('readonly','readonly');
		//$("#loyalty_ptns").attr('readonly','readonly');
		//$("#redeem_ptns").attr('readonly','readonly');
	}else{
		$("#card_typ").attr('disabled','');
		$("#card_num").attr('readonly','');
		//$("#loyalty_ptns").attr('readonly','');
		//$("#redeem_ptns").attr('readonly','');
	}
}
function chk_card_name(cardno){
	var slcode = $("#slcode_no").val();
	if(slcode != ''){
		$.ajax({
			type:'POST',
			url:js_basepath+'fn_salesman.php',
			data:{
				type : 'check_card',
				cardno : cardno,
			},
			success : function(res){
				if(res != 0 ){
					card_number(cardno);
					//$(".second").attr('checked', false);
					//$(".second").attr('disabled', true);
					//$('#card_typ').prop( "disabled", true );
					//$('#card_num').prop( "readOnly", true );
				}
			}
		});
	}else{
		if($('#mobile_no').val() == ''){
			//alert("Please Select Customer");
			alert_popup("Please Select Customer","RED",'card_num');
			//$("#card_num").val();
			return false;
		}else{
			return false;
		}
	}
}

</script>

<script>
		var js_basepath = $("#js_basepath").val();
		function fn_addcustomer(){
			var cust   = $("#ledger_name").val();
			var deb   = $("#debitor").val();
			var ad1   = $("#add1").val();
			var ad2   = $("#add2").val();
			var mail = $("#cust_email").val();
			var phn = $("#mobile_no").val();
			var con = $("#country1").val();
			var cit = $("#city").val();
			var stat = $("#state1").val();
			var gstin = $("#gstin").val();
			var zipcode  = $("#zip_code").val();
			var cperson  = $("#contact_person").val();
			var due_day  = $("#credit_days").val();
			var find = $("#slcode_exist").val();
			var slcode_no  = $("#slcode_no").val();
			var rate_type = $("#txt_rate_type").val();
			var msme_type = $("#MSMEType").val();
			var msme_no = $("#MSMENo").val();
			var shipping_name = $("#shipping_name").val()
			var shipping_phone = $("#shipping_phone").val()
			var shipping_add1 = $("#shipping_add1").val()
			var shipping_add2 = $("#shipping_add2").val()
			var shipping_city = $("#shipping_city").val()
			var shipping_zipcode = $("#shipping_zipcode").val()
			var shipping_state = $("#shipping_state").val()
			var shipping_country = $("#shipping_country").val()
			
		if(cust == ''){
		$('#lname_error').html("Please enter name");
		$("#ledger_name").focus();
		return false;
		}
		/*else if(ad1==""){
		$('#add1_error').html("Please enter address");
		$("#add1").focus();
		return false;
	}
	else if(cit==""){v
		$('#cit_error').html("Please enter city");
		$("#city").focus();
		return false;
	}*/
	/*else if(stat==""){

		$('#stat_error').html("Please enter State");

		return false;
		}*/
		/*else if(gstin == ''){
		$('#msg_ledger_email').html("Please enter GSTIN");
		$("#gstin").focus();
		return false;
	}*/

	var enble_loyalty =  document.querySelector('input[name=enble_loyalty]:checked').value;
	var card_no = $("#card_num").val();
	var card_typ = $("#card_typ").val();
	if(enble_loyalty==1){
		if(card_typ == ""){
			$('#card_error').html("Please Enter Card Type");
			return false;
		}
	}

	$.ajax({
			type:'POST',
			url: js_basepath+'ajax_redirect.php',
			data:{
				data:'popup_customer',
				ledger_name:cust,
				debitor:deb,
				add1:ad1,
				add2:ad2,
				email:mail,
				mobile_no:phn,
				country:con,
				city:cit,
				state:stat,
				gstin:gstin,
				zip_code:zipcode,
				contact_person:cperson,
				enble_loyalty:enble_loyalty,
				card_no:card_no,
				card_typ:card_typ,
				due_day:due_day,
				find:find,
				slcode_no:slcode_no,
				rate_type:rate_type,
				msme_type:msme_type,
				msme_no:msme_no,
				shipping_name:shipping_name,
				shipping_phone:shipping_phone,
				shipping_add1:shipping_add1,
				shipping_add2:shipping_add2,
				shipping_city:shipping_city,
				shipping_zipcode:shipping_zipcode,
				shipping_state:shipping_state,
				shipping_country:shipping_country,
			},
			success: function(res){
				res = res.split('!@#');

				$('#delcancelquote').click();
				
				//res[0] = trim(res['0']);
				res[0] = parseInt(res['0'])+0;
				
				//$('#sel_supplier_list').val(res[1]);
				$('#slcode_no').val(res['0']);
				
				$('#sel_supplier').val(res['0']);
				
				$("#list_supp").html(res['1']);
				
				$("#customerslist").html(res['2']);
				
				$("#slcode_exist").val('0');
				
				$("#change_label_cust").html("UPDATE");
			
				fn_supllier(res[0]);
					return false;
				//fn_clear_ledger();
			}
		});
	}
function fn_clear_ledger(){
 	$("#ledger_name").val('');
	$("#add1").val('');
 	$("#sel_supplier_sel").val('');
	$("#add2").val('');
 	$("#sel_supplier_list").val('');
	$("#cust_email").val('');
	$("#mobile_no").val('');
	$("#country1").val($("#hid_default_cntry").val());
	$("#city").val('');
	$("#state1").val($("#hid_default_state").val());
	$("#gstin").val('');
	$("#zip_code").val('');
	$("#contact_person").val('');
	$("#slcode_no").val('');
	$("#credit_days").val('0');
	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth()+1; //January is 0!
	var yyyy = today.getFullYear();
	if(dd<10) {
	    dd = '0'+dd
	}
	if(mm<10) {
	    mm = '0'+mm
	}
	today = dd + '-' + mm + '-' + yyyy;
	$("#duedate").val(today);

	$("#slcode_exist").val('0');
	$("#card_num").val('');
	$("#card_typ").val('');
	$("#enble_loyalty2").click();
}


function check_mobile(mobno){
	//alert(234);
	$.ajax({
		type:'POST',
		url:js_basepath+'fn_salesman.php',
		data:{
			type : 'check_mobile',
			mobno : mobno,
		},
		success : function(res){
			res = res.trim();
			if(res==0)
			{
				//$("#alert_pop").click();
				//$("#alert-modal").html("Mobile No does not exist, Please add the details");
				$("#change_label_cust").html("ADD");
				$('#sel_supplier_sel').val("");	
				$('#next_focus').val('ledger_name');	
				//$("#").focus();
				setTimeout(function(){
					$('#delbut_new').focus();
				}, 200);
				$("#enable_warning").val(1);
				$("#slcode_exist").val(1);
				//$("#addcustomer").addClass("addcustomer");
			}
			else { //if(res != 0 ){
				$('#sel_supplier_sel').val(mobno);
				fn_supllier_sel(mobno);
				$("#change_label_cust").html("UPDATE");
				//display_mobile_details(mobno);
				$("#slcode_exist").val(0);
				//$("#addcustomer").removeClass("addcustomer");
				//alert("Mobile No Already Exist, Please Try with new one");
				//$('#mobile_no').val('');
				//$('#mobile_no').focus();
			}
		}
	});
}




function fnd_balance_card(){
	var card_typ = $("#card_typ").val();
	$.ajax({
		type : 'POST',
		url : js_basepath+'fn_salesman.php',
		data:{
			type:'remaining_cards',
			card_typ:card_typ,
		},
		success:function(msg){
			msg = msg.trim();
			if(msg != '1'){
				msg = msg.split('!@#');
				//alert(msg);
				$('#avai_cards').html("Available Cards - "+msg[1]);
				$('#available_cards').val(msg[1]);
			}else{
				$('#card_typ').val('');
				$('#avai_cards').html("Available Cards - 0");
				$('#available_cards').val(0);
				//alert("For this type, Card(s) not available");
				alert_popup("For this type, Card(s) not available","RED",'');
			}
		}
	});
}
function display_mobile_details(phoneno)
{
	//alert(345);
$.ajax({
	type:'POST',
	url:'fn_mobile_details.php',
	data: {
		
		phoneno:phoneno,
	},
	
	success:function(msg)
	{
		msg = msg.split('~');
		//alert(msg);
		//$("#mobile_details").html(msg);
		$("#ledger_name").val(msg[0]);
		$("#add1").val(msg[1]);
		$("#add2").val(msg[2]);
		$("#city").val(msg[3]);
		$("#zip_code").val(msg[6]);
		$("#gstin").val(msg[7]);
		$("#state1").val(msg[4]);
		$("#country1").val(msg[5]);
		$("#contact_person").val(msg[8]);
		$("#credit").val(msg[9]);
		$("#due").val(msg[10]);
		$("#slcode_no").val(msg[11]);
		$("#cust_email").val(msg[12]);
		card_mem(phoneno);
	}
	
	
});



}

function fn_change_cust(){
	var check_val = $("#add_newcust").is(":checked");
	if(check_val){
		$("#cut_search").hide();
		$("#addbutton").html('<button name="add_customer" type="button" class="btn btn-primary save addcus form-class" id="addcustomer" onclick="fn_addcustomer()" > <span class="btn-label addcuslabel"><i class="fa fa-plus"></i></span><span id="change_label_cust">ADD</span></button>');
		fn_clear_ledger();
	}else{
		
		
var delayInMilliseconds = 200; //1 second
setTimeout(function() {

$("#sel_supplier_sel").focus();
}, delayInMilliseconds);

		
		$("#cut_search").show();
		$("#addbutton").html('<button name="add_customer" type="button" class="btn btn-primary save updatecus form-class" id="addcustomer" onclick="fn_addcustomer()" > <span class="btn-label updatecuslabel"><i class="fa fa-plus"></i></span><span id="change_label_cust">UPDATE</span></button>');
		//fn_clear_ledger();
	}
}

function openaddpopup()
{
	fn_clear_ledger();
    $("#add_newcust").attr("checked",true);
    fn_change_cust();
	var delayInMilliseconds = 200; //1 second
	setTimeout(function() {
		$("#cut_search").focus();
		$("#ledger_name").focus();
	}, delayInMilliseconds);
}

function openeditpopup()
{
    var delayInMilliseconds = 400; //0.4 second
    $("#add_newcust").attr("checked",false);
    fn_change_cust();
    //$("#add_newcust").click();
    setTimeout(function() {
      //alert(4355);
        $("#sel_supplier_sel").focus();
    }, delayInMilliseconds);

}
		</script>
<!-- Hidden Details for Loyalty Details -->

<input type="hidden" name="customer" id="customer" value="">
<input type="hidden" name="address" id="address" value="">
<input type="hidden" name="place" id="place" value="">
<input type="hidden" name="hid_cardid" id="hid_cardid" value="">
<input type="hidden" name="hid_cusid" id="hid_cusid" value="">
<input type="hidden" name="phone" id="phone" value="">

  </div>
  </div>  




<script>
$( document ).ready(function() {
 var billno = $("#mrnno").val(); 
   $("#billnodisplay").html(billno);
 });

</script>
		 <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_main" style="margin-top:8px;">
		 <tr>
		    <td align="left" valign="top">
		
			<table style="    margin-top: -32px;" width="100%" border="0" cellspacing="2"  cellpadding="2">
			
              <tr>
                <td width="100%" >
								
                	<input type="hidden" class="text-input medium-input text_billno" style="width:53px;" name="mrnno" id="mrnno" value="7" readonly="true"/>
                      <span class="required">                     </span>
                                           
                   
              
				
						
							
				
				 <span id="credit_detail" >
				<select name="sel_supplier" id="sel_supplier" class="text_customer" onchange="fn_supllier(this.value); /*setAreaCredit(this.value);*/" style="width:250px;margin-top:4px;display:none;">
					<option value="">Select Customer</option>
											<option value="3" >MADHAV</option>
					
			

 
				</select><span class="required"></span>		<a href="javascript:void(0);" style="display:none;" data-toggle="modal" data-target="#myModal5">  <button class="button button-primary button-circle button-small" type="button" id="add_cust" onclick="focus_next_forward()"><i class="fa fa-plus"></i></button></a><a style="
    margin-left: 6px;
    border-radius: 4px;
	height:31px;display:none;
" class="btn btn-primary" href="javascript:void(0);" data-toggle="modal" data-target="#customerdata"> <span class="glyphicon glyphicon-eye-open"></span><span class="onterms">View</span></a>

				
							  
			
			
			
			<!-- Modal -->
<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width:600px;">
        <div class="modal-content">
		<div class="modal-header" style="
    background: #489ee7;
    color: #FFF;
    text-align: center;
	    padding: 2px;
  
">
        <button type="button" class="close closeremarksbutton" data-dismiss="modal" style="margin-top:7px!important;" ><i class="fa fa-times closeremarks"></i></button>
      	 <h4 class="headingpopup">Settings</h4>
      </div>
            <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class=""><a href="#uploadTab" aria-controls="uploadTab" role="tab" data-toggle="tab" style="display:none;border:none;background:none;padding:6px;background-color: #00acd6;color:#FFF">LOYALTY</a>

                        </li>
                        <li role="presentation"  class="active" ><a href="#browseTab" style="border:none;background:#4694d2;padding:6px;color:white;text-transform:capitalize;"  aria-controls="browseTab" role="tab" data-toggle="tab">MANUAL</a>

                        </li>
						
						 <li role="presentation"  class="" ><a href="#autotab" style="border:none;background:#4694d2;padding:6px;color:white;text-transform:capitalize;"  aria-controls="browseTab" role="tab" data-toggle="tab">AUTO</a>

                        </li>
                    </ul>
            <div class="modal-body remarksbody">
		
                <div role="tabpanel">
                    <!-- Nav tabs -->
					                   
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane" id="uploadTab" style="display:none">
						
							
						
						</div>
						
						
						   <div role="tabpanel" class="tab-pane" id="autotab">
						
						
						<table width="100%" border="0" cellspacing="0" cellpadding="0" id="dzn_tbl" style="margin:10px!important;">
		 
				    <tr >
			<td width="300">Vehicle No</td>
				<td width="841">  		 <input type="text" placeholder="Vehicle No"  class="text-input small-input form-class" name="vehicle_no"   value="" style="width:169px;margin:0px!important;"/> </td>
		
			
		 </tr> 
		 
		
		 
		 <tr >
			<td width="300">Vehicle Model</td>
				<td width="841">  		 <input type="text" placeholder="Vehicle Model" style="width:169px;margin:4px 0px 0px 0px;"  class="text-input small-input form-class" name="vehicle_model"   value=""  /> </td>
		
			
		 </tr> 
		 
		  <tr >
			<td width="300">Chassis No</td>
				<td width="841">  		 <input type="text" placeholder="Chassis No" style="width:169px;margin:4px 0px 0px 0px;"  class="text-input small-input form-class" name="chasis_no"   value=""  /> </td>
		
			
		 </tr> 
		 
		  <tr >
			<td width="300">Kilometer</td>
				<td width="841">  		 <input type="text" placeholder="Kilometer"   class="text-input small-input form-class" name="kilometer"   value="" style="width:169px;margin:4px 0px 0px 0px;"/> </td>
		
			
		 </tr> 
		 
		 
		 
		 <tr>
		 <td width="300">&nbsp;</td>
			<td >   

<button name="reset" type="button" class="btn btn-primary save form-class" data-dismiss="modal"  style="height:30px;border:none; padding:0px 12px 0px;margin-top:15px;background:#a3c400">
                <span class="btn-label" style=""><i class="glyphicon glyphicon-remove" style="height:30px;"></i></span>Add</button>
		
		
		</tr>
		 
		   
</table>	
						
						</div>
						
						
                        <div role="tabpanel" class="tab-pane active" id="browseTab">
						
						
						<table width="100%" border="0" cellspacing="0" cellpadding="0" id="dzn_tbl" style="margin:10px!important;">
		 
				    <tr >
			<td id="cash_custph" width="300"><span class="required">*</span>Flat Discount</td>
				<td width="841">  		 <input type="text" placeholder="Flat Discount"  class="text-input small-input form-class" name="common_discount" id="common_discount"  value="" style="width:230px;" onkeypress='validate(event)'/> </td>
		
			
		 </tr> 
		 
		 
		   <tr >
			<td id="cash_custph" width=""><span class="required">*</span>Transport Details /Site</td>
				<td width="">	
				<input type="text" class="form-class" placeholder="Site" style="width:230px;margin:4px 0px 0px 0px;" name="site" value=""> </td>
		
			
		 </tr> 
		 
		 
		   <tr >
			<td id="cash_custph" width=""><span class="required">*</span>DC No</td>
				<td width="">	
				<input type="text"  placeholder="DC NO" style="width:230px;margin:4px 0px 0px 0px;" name="dccno" value="" class=' form-class'> </td>
		
			
		 </tr> 
		 
		   <tr >
			<td id="cash_custph" width=""><span class="required">*</span>DC Date</td>
				<td width="">	
				<input type="text"  placeholder="DC Date" style="width:230px;margin:4px 0px 0px 0px;" name="dcdate" id="dcdate" class=' form-class' onfocus="displayCalendar(document.mrn_ent.dcdate,'dd-mm-yyyy',this)" style="width:169px;margin:4px 0px 0px 0px;" value="30-09-2024"> </td>
		
			
		 </tr> 
		 
		 	
</table>


 <p class="headingpopup" style="padding:6px;color:white;margin: 8px 0px 7px 0px;">System Settings</p>
<div  class="modal-body remarksbody">


		 <div class="modal-body">
		 <table id="dzn_tbl" >
		 
		 
		 
	  <tr>
			  	<td width="252">Quotation No</td>
<td width=""><span id="invdetails" >
	
				<select name="InvNo" id="InvNo" style="width: 289px;margin: 3px!important;padding: 8px!important;" onchange="fn_invdt(this.value)" class=' form-class' tabindex="7">
					<option value="">SELECT</option>
									</select>
				</span>
				</span>&nbsp;<span class="required"></span></span>
			
			
			
				
				</td>
				
			</tr>
			<tr>
			<td>Dc.No:</td>
			<td><span id="invdetails" >
	
				<select name="saldc_no" id="saldc_no" style="width: 289px;margin: 3px!important;padding: 8px!important;" onchange="fn_saldc(this.value)" tabindex="7" class=' form-class' >
					<option value="">SELECT</option>
					SELECT InvNo FROM erp_wh_salhd_dc WHERE DivCode = 1 AND BranchCode = 'B00001' AND ReturnFlag = 'N'  ORDER BY InvNo DESC				</select>
				</span>
				</span>&nbsp;<span class="required"></span></span></td>
			</tr>
			<tr>
			<td>Order No/ Vehicle.No</td>
			<td><input type="text" placeholder="Order No" name="orderno" style="width:289px;margin:4px 0px 0px 0px;" class=' form-class'  value=""></td>
			
			</tr>
			<tr>
			<td>Order Date</td>
			<td><input type="text" placeholder="Order Date" name="orderdate" class=' form-class'  id="orderdate" onfocus="displayCalendar(document.mrn_ent.orderdate,'dd-mm-yyyy',this)" style="width:230px;margin:4px 0px 0px 0px;" value=""></td>
			
			</tr>
			<tr>
			
			<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			<td>   
<button name="Add" type="button" class="btn btn-primary settingssave form-class"  data-dismiss="modal" id="addbut">
<span class="btn-label settingssavelabel"><i class="glyphicon glyphicon-plus" style="height:30px;"></i></span>Save</button>
<button name="reset" type="button" class="btn btn-labeled btn-danger settingscancel form-class" data-dismiss="modal" id="delbut"	 style="">
                <span class="btn-label" style=""><i class="glyphicon glyphicon-remove" style="height:30px;"></i></span>CANCEL</button>
		
                <input type="hidden" name="commission_per" id="commission_per" value="0" />
				</span><span class="required"></span></span></td>
		
			
			</tr>
			         

				
				
			
			
				
					
		  
		
		</table>  
						
</div>						
</div>
		
		
		
						
						</div>
						
						
						
						
						
                    </div>
                </div>
            </div>
         
             
            
											<input type="hidden" name="sel_godown" id="sel_godown" value="1" >
	
				
				
				
				<select name="sel_area" id="sel_area" style="width:108px;display: none;" >
						
				</select>
			
					 
			  
					 
	

</p>

           
		

				 


<input type='hidden' id ="incl" name ="incl" value="0" >

	 <input type="hidden" name ="hid_inc" id="hid_inc" value='0'>
	 
	 
              </td>  <br>

				
				<td width="20%" ><span>
			


				  
                     <span style=" display:none;-padding-left:23px; text-align:center;">&nbsp;&nbsp;Sale Type:
						<select name="sale_type1" id="sale_type1" style="width:55px" onchange="return fn_billingtype()" >  
							<option value="DSF" >DSF</option>
							<option value="ASF" >ASF</option>
						</select>
                        <input type="hidden" name="sale_type" id="sale_type" value="DSF" />				
					</span>
					<span style=" display:none;-padding-left:15px; float:right;">Bill Type:
						<select name="bill_type" id="bill_type" style="width:85px" onchange="return fn_billingtype()" >  
							<option value="PV" >With PV</option>
							<option value="WPV" >Without PV</option>
							<option value="PC" >PV Card</option>
						</select>
                        <input type="hidden" name="bill_type1" id="bill_type1" value="PV" />				
					</span>	
                   
				</span>				</td>
		
			 
              </tr>
                          
    
            
			
            <tr>
		
			<td>
			<button type='button' name='add_prod' id='add_prod' data-toggle="modal" class="btn btn-primary" data-target="#myModal" onclick="fn_prodcode();" -style="margin-top:10px;padding: 5px;" style="display:none;"> Add New Product </button>
				
	
		
			
			</td></tr>
			  
	
				
            </table>
		
			<div class="common col-sm-12 col-lg-12 col-xs-12" style="padding: 0px 0 0 0px;"><span class="required"></span>
           	
			<div id="mrn_table" >
			<div class="row scan">
			<table width="100%" cellpadding="0" cellspacing="0" class="blueTablescan" border="0" style="margin-top:-3px;">
              	<tr class=";" id="table_dc" style=";display:flex;grid-gap: 10px;justify-content: space-around;">
					<td  class="sale_chk"  style="display: none;">
						<input type="checkbox" name="prods_rtn[]" id="prods_rtn" />
					</td>
					<td class="sale_sno" style="width:17%;border:none;display: flex;">
						<input type="hidden" class="text-input small-input" name="invoicedate" id="invoicedate" value="2024-09-30" style='width:188px' /> <!-- onfocus="displayCalendar(document.mrn_ent.invoicedate,'dd-mm-yyyy',this)" style="width:70px;display:none" /--> 
						<label style="font-weight:bold;" class="barstyle"><i class="fa fa-barcode"></i></label>
						<input  type="text" autofocus placeholder="Scan Item" class="maxtxt text_barcode barcodebox" name="barcode_sing" id="barcode_sing" value="" onchange="return fn_productname_sing(this.value)"  tabindex="1"/>
						<input type="hidden" name="slno_sing" id="slno_sing" value="~" class="text_sno" readonly="true" />
						<input type="hidden" name="sal_type_sing" id="sal_type_sing" value="S" style="width:25px" readonly="true" />
		 			</td>		
					<style>
						.inputWithIcon i {
							position: absolute;
							right: 25px;
							padding: 0;
							color: #4249498c;
							transition: 0.3s;
							height: 100%;
							top: 35%;
							visibility: hidden;
						}

						.inputWithIcon input[type="text"]:focus + i {
						color: dodgerBlue;
						}

						.inputWithIcon.inputIconBg i {
						background-color: #aaa;
						color: #fff;
						padding: 9px 4px;
						border-radius: 4px 0 0 4px;
						}
						.inputWithIcon.inputIconBg input[type="text"]:focus + i {
						color: #fff;
						background-color: dodgerBlue;
						}
						.sal_del.barcode-btn .sale-qr-model {
							position: relative;
							height: 100%;
							display: grid;
							place-items: center;
						}
						.sal_del.barcode-btn .sale-qr-model input{
							position: absolute;
							width: 100%;
							height: 100%;
							left: 0;
							background: transparent;
							border: 0;
						}
					</style>		
					<td width="" class="sale_sno " style="border:none;;display: flex;width:26.5%">
						<label style="font-weight:bold;"  class="barstyle">Item</label>
													<input style="padding-right:2px;" type="hidden" class="maxtxt text_barcode" name="hidbar_sing" id="hidbar_sing"   value=""  />
							<input type="hidden" name="PCode_sing" id="PCode_sing" style="width:60px" /> 
							<input type="hidden" name="Pro_type_sing" id="Pro_type_sing" style="width:60px"  />
							<div class="inputWithIcon" style="width:100%;position:relative;"><i class="fa fa-arrow-down fa-lg fa-fw" aria-hidden="true"></i>
							<input type="text" name="prdname_sing" placeholder="Enter Item Name" class="maxtxt text_itemdesc productbox" id="prdname_sing" autofocus tabindex="2"/></div><br>
							<span id="cgstspan" class="spanvalue" style="display:none;"></span>
							<span id="sgstspan" class="spanvalue" style="display:none;"></span>
							<span id="cessspan" class="spanvalue" style="display:none;"></span>
							<span id="igstpan" class="spanvalue" style="display:none;"></span>
							<input type="hidden" class="maxtxt text_uom" name="uom_sing" id="uom_sing"   value="" readonly="true" /><input type="hidden" name="hdnuom<_sing" id="hdnuom_sing"/>
												</td>
					<td width="" class="" style="font-weight:bold;display:flex;;width:8%;" >
						<label style="font-weight:bold;display:none"  class="barstyle">Batch</label>
						<select name="batch_sing" id="batch_sing" class="select_batch batchbox" onchange="return fn_batchno_sing(this.value);" tabindex="3"><option value="">Batch</option></select>
					</td>	
						<input type="hidden" class="maxtxt" name="expiry_sing" id="expiry_sing"  value="" readonly="true" style="width:55px" />
						<input type="hidden" class="maxtxt" name="godown_sing" id="godown_sing"  value="" readonly="true" style="width:55px" />	
						<input type="hidden" class="maxtxt" name="godown_sing" id="godown_sing"  value="" readonly="true" style="width:55px" />	
						<input type="hidden" class="maxtxt" name="ismulti_sing" id="ismulti_sing"  value="" readonly="true" style="width:55px" />
						<input type="hidden" class="minitext1 txtright text_production_date" name="prod_dt_sing" id="prod_dt_sing"  value="" readonly="true"/>
					</td>
					<td width="" class="sale_sno " style="border:none;;display: flex;width:10%">
						<label style="font-weight:bold;"  class="barstyle">Qty</label>
						<input type="text" class="minitext1 txtright text_qty qtybox" name="qty_sing" id="qty_sing" tabindex='4' onchange="return fn_qty_sing(this.value)" style="padding-right:3px;" value="" onkeypress='validate(event)' />
						<input type="hidden" class="minitext1 txtright" name="hidqty_sing" id="hidqty_sing" value="" style="width:50px;" readonly="true" />
						<input type="hidden" class="minitext1 txtright" name="hidqtytemp_sing" id="hidqtytemp_sing" value="" style="width:50px;" readonly="true" />
					</td>
					<td width="" class="sale_sno " style="border:none;;display: flex;;width:10%">
						<label style="font-weight:bold;"  class="barstyle">Disc</label>
						<input type="hidden" class="minitext1 txtright "  name="free_sing" id="free_sing"   value=""  maxlength="10" readonly="true" onchange="return fn_free(this.value,'')" onkeypress='validate(event)' />
						<input type="hidden" class="minitext1 txtright" name="total_sing" id="total_sing" value="" style="width:50px;" />	
							
						<input type="text" class="minitext1 txtright text_disc qtybox" name="disc_sing" id="disc_sing" tabindex="5" value="" onchange="return fn_discper_sing(this.value)" onkeypress='validate(event)' />
					</td>
					<td style="display:none;;width:6%;" class="sal_disc" >
						<input type="text" name="discamt_sing" class="minitext1 txtright text_disc" style="padding-right:3px;" id="discamt_sing" onchange="return fn_discamt_sing(this.value)" -onblur='return fn_addrow();'/>	
						<input type="hidden" name="hid_discamt_sing" id="hid_discamt_sing" />
					</td>
				<!--<td class="td_sel_tax">-->
									<input type="hidden" name="taxtypedesc_sing" id="taxtypedesc_sing" value="" class="minitext2 txtright"  class="select_tax" readonly="readonly" />
				<input type="hidden" name="taxtype_sing" id="taxtype_sing" value="" class="minitext2 txtright"  style="width:55px;" />	
								<input type="hidden" class="minitext2 txtright" name="p_price_sing" id="p_price_sing"  value="" style="width:55px;" onchange="return fn_purprice_sing(this.value);" />
				<input type="hidden" name="margin_sing" id="margin_sing" value="" style="width:35px;" />			
				<input type="hidden" class="minitext2 txtright" name="costrate_sing" id="costrate_sing"  value="" style="width:55px;" />		
				<input type="hidden" name="cgst_per_sing" id="cgst_per_sing" value="" class="text_tax_per" readonly="true" />				
				<input type="hidden" name="cgst_amt_sing" id="cgst_amt_sing" value="" class="text_tax_per" style="padding-right:2px;" readonly="true" />
				<input type="hidden" name="tax_typ_sing" id="tax_typ_sing" value="" style="width:35px;" readonly="true" />	
				<input type="hidden" name="sgst_per_sing" id="sgst_per_sing" value="" class="text_tax_per" readonly="true" />				
				<input type="hidden" style="padding-right:6px;"  name="sgst_amt_sing" id="sgst_amt_sing" value="" class="text_tax_per" readonly="true" />	
				<input type="hidden" class="minitext1 txtright" name="taxdes_sing" id="taxdes_sing" value="" style="width:35px;" />					
           		<input type="hidden" name="tax_typ_sing" id="tax_typ_sing" value="" style="width:35px;" readonly="true" />	
				<input type="hidden" name="igst_per_sing" id="igst_per_sing" value="" class="text_tax_per" readonly="true" />	
				<input type="hidden" name="igst_amt_sing" id="igst_amt_sing" value="" class="text_tax_per" readonly="true" />
				<input type="hidden" name="cess_per_sing" id="cess_per_sing" value="" class="text_tax_per" readonly="true" />			
				<input type="hidden" name="cess_amt_sing" id="cess_amt_sing" value="" class="text_tax_per" readonly="true" />
	          	<td  class="sal_mrp" style="width:6%;display:none;">
					<input type="text" class="minitext1 txtright text_pprice" name="mrpo_sing" id="mrpo_sing" value=""/>
				</td>	
				<td style="display:none;width:6%;display:none;font-weight:bold;" class="sal_ptr">
					<input type="text" class="minitext1 txtright text_expiry_date" name="ptr_sing" id="ptr_sing"  value="" />
					<input type="hidden" class="minitext1 txtright text_expiry_date" name="exp_dt_sing" id="exp_dt_sing"  value="" readonly="true"/>
				</td>
				<td width="" class="sale_sno " style="border:none;;display: flex;width:12%">
					<label style="font-weight:bold;"  class="barstyle">S.Price</label>
					<input type="hidden" class="minitext2 txtright" name="s_price_sing" id="s_price_sing"  value="" style="width:55px;" readonly="true" onchange="return fn_salprice_sing(this.value)" onkeypress='validate(event)' />
                    <input type="hidden" name="mop_sing" id="mop_sing" value="" />	
                    <input type="hidden" name="msp_sing" id="msp_sing" value="" />
					<input type="text" class="minitext1 txtright text_pprice qtybox"  name="mrp_sing" id="mrp_sing" tabindex='6'  value="" onchange="return fn_mrp_sing(this.value)"  onkeypress='validate(event)'  />
										<input type="hidden" class="minitext1 txtright text_pprice" name="mrpedit" id="mrpedit"   value="1" />
					<input type="hidden" class="minitext1 txtright text_pprice" name="price_validation" id="price_validation"   value="0" />
					<input type="hidden" class="minitext1 txtright text_pprice" name="scanning" id="scanning"   value="1" />
					<input type="hidden" class="minitext1 txtright text_pprice" name="marginper_sing" id="marginper_sing"   value=""/>
					<input type="hidden" class="minitext1 txtright text_pprice" name="saving_sing" id="saving_sing"   value=""/>
                    <input type="hidden" id="TotPV_sing" name="TotPV_sing" value="" />
					<input type="hidden" class="minitext1 txtright" name="tot_price_sing" id="tot_price_sing" value=""  style="width:70px;" readonly="true" />
					<input type="hidden" class="minitext1 txtright" name="netvalue_sing" id="netvalue_sing"   value="" style="width:70px;" readonly="true" />
					<input type="hidden" class="minitext1 txtright" name="dcno_sing" id="dcno_sing"   value="" style="width:70px;" readonly="true" />
					<input type="hidden" class="minitext1 txtright" name="dcdt_sing" id="dcdt_sing"   value="" style="width:70px;" readonly="true" />
					<input type="hidden" class="minitext1 txtright" name="dcsno_sing" id="dcsno_sing"   value="" style="width:70px;" readonly="true" />
					<input type="hidden" class="minitext1 txtright" name="batchrecno_sing" id="batchrecno_sing"   value="" style="width:70px;" readonly="true" />
				</td>
                <td class="sale_total" style="width:6%;display:none;" >
					<input type="text"  class="minitext2 txtright text_val_with_tax" name="valwithtax_sing" id="valwithtax_sing" tabindex="7" value="" readonly="true" />
				</td>
				<td width="" class="sale_sno " style="border:none;;display: flex;width:8.5%">
					<label style="font-weight:bold;"  class="barstyle">Tax</label>
					<select id="choose_tax_sing" name="choose_tax_sing"  tabindex="8" class="minitext1 txtright text_qty qtybox" disabled >
						<!--<option value="">Select Tax</option>-->
													<option value="1">VAT 5%</option>
													<option value="2">VAT 14.5%</option>
													<option value="3">VAT 0%</option>
													<option value="4">CESS</option>
													<option value="5">VAT 12.5%</option>
													<option value="6">24%</option>
													<option value="7">0%</option>
													<option value="8">12%</option>
													<option value="9">28%</option>
													<option value="10">18%</option>
													<option value="11">5%</option>
													<option value="12">18%</option>
											</select>
				</td>
				<td class="sal_del barcode-btn" style="text-align:center;border: none; width:4%;display:none;">
					<div class="sale-qr-model">
						<img src="../../../Theme1/images/barcode.png" class="img-fluid" width="18px"/>
						<input type='button'  onfocus="fn_addrow();" tabindex="9" >
						<!-- style="background: url('../../../../img/plus-math.png') no-repeat;width: 30px;text-align: center;border: none;vertical-align:  middle;background-size: 25px 25px;height: 23px;" -->
					</div>
				</td>			
			</tr>
		</table>
	</div>
			
			<div id="scrollheight" style="overflow-y: scroll;height:400px;overflow-x:hidden;background: #FFF;padding: 5px;box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);width:100%!important;" >
			<table width="100%" cellpadding="0" cellspacing="0" class="blueTable" border="0" id="sal_tab">
				<tbody style="z-index: 1;width:100%" >
              <tr id="heading" style=" 
    height:35px;
    color: #FFF;font-size:13px;">
			  	<th align="left" class="th_left" style="padding-left: 7px;padding-top:1px;text-align: left;width: 2%;"> <input type="checkbox" name="prods_rtn_ALL[]" id="prods_rtn_ALL" /> </th>
                <th align="left" class="th_left"  style="width:3%;">S.No</th>
                <th style=";width:13%;    text-align: left;" align="left" class="th_left">Barcode</th>
			    <th align="left" class="th_left" style="    text-align: left;width: 38%;">Item Description</th>
             
                <th style=";text-align: center;width: 5%;"    align="left" class="th_left" >Batch</th>
			
                <th align="right" class="th_right"  style="width:5%;    text-align: right;">Qty</th>
                <th style=";text-align: right;width: 6%;" align="right" class="th_right">Disc%</th>

				<th align="right" class="th_right" style="text-align: right;width: 6%; display:none;">MRP</th>
					<th  align="left" style="display:none;text-align: right;width: 6%;" class="th_left">PTR</th>
     			<th align="right" class="th_right" style="text-align: right;width: 7%;">Unit Rate</th>
				<th align="right" class="th_right"  style="width:5%;    text-align: right;">Tax</th>
                <th align="right" class="th_right" style="width:7%;text-align: right;">Net Value</th>
				<th align="right" class="th_right"  style="text-align: center;width:3%;"></th>
              </tr>
			  
			</tbody>
</table>
</div>


			
					<span id='ImagesGroup' style="margin:0px 0px 0px 0px; overflow-y: scroll;height: 390px;" >
						<div id="ImageDiv0" style="margin:0px 0px 0px 0px;"></div>
					</div>
					</span>			
					<table width="100%" cellpadding="0" cellspacing="0" class="pdzn_tbl" style="padding-right:2px;">
	
		<tr style="display: none;">
		  <td><input type='button' class="button"  value='+Add' id='addImage' tabindex="7">
	
          		<input type="hidden" class="minitext1 txtright"  name="disctype" id="disctype"   value="1" style="width:35px;"/> 
				<input type="hidden" id="hiddenimagecount" name="hiddenimagecount" value="1" />
				<input type="hidden" id="hiddenprice" name="hiddenprice" value="0"/>
				<input type="hidden" name="hdn_count" id="hdn_count" >
				<input type="hidden" name="hdnnet_qty" id="hdnnet_qty" >

                   
                    			
                      
					
					  
					   <input type="hidden" class="minitext2 txtright" name="delcharge" id="delcharge" value="" onkeypress="return validate(event)" onchange="return total_price()" />
		             
					

               
            
                        
                       		
                       
                
                    
					
	</table>

</div> 
           
		  </td>
		  </tr>
	
		 
		  
		</table>     

<div class="row" style="margin-top: 7px;margin-left: -2px;margin-right: 0px;">
  
<table>
<tr>

<td class="buttoncol"> 
<input type='hidden' name='printpage' id='printpage' value=''>
<input type='hidden' name='printpage_a4' id='printpage_a4' value='templates/sales_print/a4/sales_print_a4_D6SS270.php'>

<button type="button" name="Add"  id="Add_thermal"  data-toggle="modal" onclick="termsfocus();$('#bill_size').val('1');" data-target="#myModalterms" class="buttonsalesdiv" style="margin-top:0px;border:none;background: #ee2c2d!important;"  ><br/>
<span class="buttonsalestext"><i class="fa fa-file-text"></i><b>Thermal Bill</b></span>
<p class="buttonsaleslabel"><b style="font-size:18px;">F2</b></span></button>

</td>
  
<td class="buttoncol"> 

<button type="button" name="Add"  id="Add_a4" data-toggle="modal" data-target="#myModalterms" onclick="termsfocus();$('#bill_size').val('2');" -onclick="return frn_savevalidate(2);" class="buttonsalesdiv white" style="margin-top:0px;"  >
<br/><span class="buttonsalestext"><i class="fa fa-file-text-o" aria-hidden="true"></i><b>A4 Bill</b></span>
<p class="buttonsaleslabel"><b>ALT + A</b></span></button>

</td>

<td class="buttoncol"> 

<button type="button" id='send_mail' data-toggle="modal" data-target="#myModalterms" onclick="termsfocus();$('#bill_size').val('3');" class="buttonsalesdiv white" style="margin-top:0px;"  >
<br/><span class="buttonsalestext"><i class="fa fa-paper-plane-o" aria-hidden="true"></i><b>Send</b></span>
<p class="buttonsaleslabel"><b>ALT + N</b></span></button>
<input type='hidden' name='bill_size' id='bill_size' value=''>

</td>

<td class="buttoncol"> 

<button type="button"  data-toggle="modal" data-target="#myModal5" onclick="focus_next_forward()" class="buttonsalesdiv white" style="margin-top:0px;" ><br/>
<span class="buttonsalestext"><i class="fa fa-user" aria-hidden="true"></i><b>Customer</b></span>
<p class="buttonsaleslabel"><b>ALT + I</b></span></button>

</td>


<td class="buttoncol"> 
<button type="button"name="reset"  id="reset" onclick="location.reload();" class="buttonsalesdiv white" style="margin-top:0px;" ><br/>
<span class="buttonsalestext"><i class="fa fa-refresh" aria-hidden="true"></i><b>Refresh</b></span>
<p class="buttonsaleslabel"><b>F5</b></span></button><input name="submittedvalue" id="submittedvalue" type="hidden" value="" />
<input type="hidden" name="loop_i" id="loop_i" />
<input type="hidden" name="loop_f" id="loop_f" />
<input name="recd_cnt" id="recd_cnt" type="hidden" />
<input name="pend_cnt" id="pend_cnt" type="hidden" />

</td>

<td class="buttoncol"> 

<button type="button" data-toggle="modal" data-target="#remarkspopup" class="buttonsalesdiv white" style="margin-top:0px;" ><br/>
<span class="buttonsalestext"><i class="fa fa-edit" aria-hidden="true"></i><b>Remarks</b></span>
<p class="buttonsaleslabel">  <b style="visibility:hidden;">o</b></span></button>

</td>

<td class="buttoncol"> 

<a href="sales.php?act=add" target="_blank">
<button type="button" class="buttonsalesdiv white" style="margin-top:0px;    background-color: #f7a300; color: #fff;"><br/>
<span class="buttonsalestext"><i class="fa fa-pause" aria-hidden="true"></i><b>Hold</b></span>
<p class="buttonsaleslabel" style=" color:#fff;"><b style="visibility:hidden;">i</b></span></button></a>
</td>
</tr>
  
</table>

  </div> 		
	   </div>

<div class="col-sm-3 col3panelsales" > 
	<div class="bill-sidepanel h-100">
		<div class="panel panel-primary totalstyle">
			<div class="head-bill"><p  class="totalsalesbill totalnetamt">BILL</p>
			<p class="bill-no">Bill No : <span><i class="fa fa-file-text-o"></i><b id="billnodisplay"></b>1</span></p></div>
			
			<div class="panel-body">
				<table class="table table-inverse" id="nettable" style="padding:0px!important;">
					<tbody>
						<tr> 
							<td>Gross Amt</td>
							<td> 
								<input type="hidden" class="minitext2 txtright" name="total_qty" style="margin:4px 0px 0px 10px;width:57px;color:#000;text-align:center;font-size: 17px;" id="total_qty" value="" readonly="true" />
								<input type="text" style="padding:4px;" class="minitext2 txtright" name="gross_amt" id="gross_amt" value="0.00" readonly="true"/>
							</td>
						</tr>
						<tr>
							<td>
								<label class="custom-checkbox checkquote">
									<span class="label-text">IGST AMT </span> &nbsp;&nbsp;
									<input type="checkbox" name="get_gst" id="get_gst" onclick="fn_incl()" > <span class="helping-el"></span>
								</label>
							</td>
							<td>
								<input type="hidden" name="netigst_amt" id="netigst_amt" value="" readonly="true"/>
								<input type="text" style="padding:4px;" class="minitext2 txtright" name="netigst_amt_dis" id="netigst_amt_dis"  value="0.00" readonly="true"  />
							</td>
						</tr>
						<tr style="">
							<td >CGST Amt</td>
							<td>
								<input type="hidden" name="netcgst_amt" id="netcgst_amt" value="" readonly="true"  />
								<input type="text" style="padding:4px;" class="minitext2 txtright" name="netcgst_amt_dis" id="netcgst_amt_dis" value="0.00" readonly="true"  />
							</td>
						</tr>
						<tr style="">
							<td >SGST Amt</td>
							<td>
								<input type="hidden" name="netsgst_amt" id="netsgst_amt" value="" readonly="true"/>
								<input type="text" style="padding:4px;" class="minitext2 txtright" name="netsgst_amt_dis" id="netsgst_amt_dis" value="0.00" readonly="true"  />
							</td>
						</tr>
						<tr>
							<td >Cess AMT</td>
							<td>
								<input type="hidden" name="netcess_amt" id="netcess_amt"  value="" readonly="true"  />
								<input type="text" style="padding:4px;" class="minitext2 txtright" name="netcess_amt_dis" id="netcess_amt_dis"  value="0.00" readonly="true"  />
							</td>
						</tr>
						<tr>
							<td >Net Price</td>
							<td>
								<input type="text" style="padding:4px;"  class="minitext2 txtright" name="total" id="total" value="0.00" readonly="true"/>
							</td>
						</tr>
						<tr>
							<td >Rounded Off</td>
							<td>
								<input type="text" style="padding:4px;"  class="minitext2 txtright" name="rndoff_amt" id="rndoff_amt" value="0.00" onchange="return fn_nettotal()" readonly="true"/>
								<input type="hidden" class="minitext2 txtright" name="add_amt" id="add_amt" onchange="return fn_addamt(this.value)" value="" onkeypress='validate(event)' /><input type="hidden" class="minitext2 txtright" name="less_amt" id="less_amt" value="" onchange="return fn_lessamt(this.value)" onkeypress='validate(event)'/><input type="hidden" value="" class="minitext2 txtright" name="cashdisc_amt" id="cashdisc_amt" onchange="return fn_cashdiscamt(this.value)" onkeypress='validate(event)'/>
							</td>
						</tr>
						<tr>
							<td>Product Discount</td>
							<td>
								<input type="text" class="minitext2 txtright" style="padding:4px;" name="netdisc_amt" id="netdisc_amt" value="0.00" readonly="true"/>
							</td>
						</tr>
						<tr>
							<td>Discount</td>
							<td>
								<input type="text" style="padding:4px;" class="minitext2 txtright"  name="sal_disc" id="sal_disc" value="0.00"  -onkeypress="return fn_saldisc(this.value)" onchange="return fn_saldisc(this.value)"  />
							</td>
						</tr>
						<tr class='d-none'>
							<td>Transport Charges</td>
							<td>
								<input type="text"  style="padding:4px;"  class="minitext2 txtright" name="trans_chage" id="trans_chage" value="" onchange='fn_nettotal();' />
							</td>
						</tr>
						<tr class="d-none">
							<td>Loyalty</td>
							<td>
								<input type="text" style="padding:4px;" class="minitext2 txtright" name="earned_label" id="earned_label" value="0.00" disabled="true"/>
							</td>
						</tr>
						<tr>
							<td>Total </td >
							<td>
								<input type="text" style="padding:4px;"  class="minitext2 txtright" name="net_total" id="net_total" value="0.00" readonly="true"/>
							</td >
						</tr>
					</tbody>
				</table>
				<div class="totalcol">
					<p class="totalnetamt" style="font-size: 18px;color: #fff;text-transform: capitalize;font-weight: 500;padding:0;">Net Amount</p>
					<p id="net_tot_dis" ><b>₹</b>0.00</p>
				</div>      
				<style>
					.inner{
						display: inline-block;
					}
					.panel-primary>.panel-heading{
						background-color: #00acd6!important;
					}
					.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover{
						color: #FFF;
						background-color:#05a8df!important;
						border: 1px solid #ddd;
						border-bottom-color: transparent;
						cursor: default;
					}
					.nav nav-tabs{
						margin-left:0px!important;
					}
					.tbl_main td input{
						padding-right:2px;
					}
				</style>
			</div>
		</div>
	</div>
</div >
</div>
</div>	

  </form>

 
        </div>

        </div>

      </div>

    </div>

  </div>
  <style>

.form-control.search
{
	    height: 33px;
    border-radius: 2px;
    width: 100%!important;
}
#tabledata
{
	margin-top:0px;
}

#add_product{
	padding:0px!important;
	height: 30px!important;
    background-color: #a3c400!important;
    border: none!important;
    margin-bottom: 0px!important;
    padding: 0px 12px 0px!important;
    width: 140px!important;
}
.btn-label.add{
    left: -37px!important;

}
#delcancel
{

}
.delcancel
{
	padding:0px!important;
	height: 30px!important;
    background-color: #ed6b75!important;
    border: none!important;
    margin-bottom: 0px!important;
    padding: 0px 12px 0px!important;
    width: 140px!important;
	margin-top:4px!important;
}
.btn-label.del{
    left: -23px!important;
}


</style>
				
<div style="clear:left;"></div>
<input type="hidden" id="addrow"  value="0">   <!-- Hide Barcode in sales -->
<input type="hidden" id="addrow1" value="0">   <!-- Hide Batch in sales -->


<script language="javascript" type="text/javascript">

// function to add number of days (accepts number of days to add)

        function AddDays(days) {

            var thisDate = new Date();

            thisDate.setDate(thisDate.getDate() + days);

            return thisDate;

        }



// call your function like this

       // alert(AddDays(1));

</script>
<script language="javascript" type="text/javascript">
	function confirm_del(e){
		if(confirm("Are you sure want to Delete")){
			window.location = $(e).attr('href_new');
		}
	}
function fn_supllier_sel(supp1) {
	//alert(supp1);
	$.ajax({
		type:'POST',
		url: 'fn_sales.php',
		data:{
			type:'find_subcode',
			sup_val:supp1,
		},
		success:function(msg){
			msg= msg.trim();
			var supp = msg;
			if(supp != ''){
				$("#sel_supplier").val(supp);
				$("#change_label_cust").html("UPDATE");
				$("#slcode_exist").val(0);
				fn_supllier(supp);
			}
			else{
				if(supp1 != ''){
					check_mobile(supp1);
				}
			}
		}
	});
}
function datalist(sup)
{
	//alert("tes");
	if(sup == ""){
		openaddpopup();
		$("#add_cust_terms").html("Add Customer").attr({onclick: 'openaddpopup()'});
		return false;
	}
	$("#cut_search").show();
		$("#addbutton").html('<button name="add_customer" type="button" class="btn btn-primary save updatecus form-class" id="addcustomer" onclick="fn_addcustomer()" > <span class="btn-label updatecuslabel"><i class="fa fa-plus"></i></span><span id="change_label_cust">UPDATE</span></button>');
		fn_clear_ledger();
		//var supp = $('#customerslist [value="' + sup + '"]').attr('data-value');
		var supp = sup
		if(supp == undefined){
			$("#confirm_title").html("Customer Does Not Exist");
			$("#confirm_body").html("Do you wish to add this Customer.?");
			$("#btn_confirm").click();
		}else{
			$("#sel_supplier").val(supp);
			$("#addbutton").html('<button name="add_customer" type="button" class="btn btn-primary save updatecus form-class" id="addcustomer" onclick="fn_addcustomer()" > <span class="btn-label updatecuslabel"><i class="fa fa-plus"></i></span><span id="change_label_cust">UPDATE</span></button>');
			$("#add_newcust").attr('checked','');
			$("#slcode_exist").val(0);
			fn_supllier(supp);
		}
}
function fn_supllier(supp) {
	//alert(supp)
	if(supp != "") {
		$.ajax({
		   type: 'POST',
		   url: 'fn_sales.php',
		   data:{
				type : 'supplier_details',
				supp : supp
		   },
		   success: function(msgs){
				msg = msgs.split("~");
				//alert(msg);
				//msg[0] = 'tst';
		    	//alert(msg['23']);
				 add1 = msg[0].trim();
                                document.getElementById("add1").value = msg[0].trim();
                                document.getElementById("add2").value = msg[1].trim();
				document.getElementById("ledger_name").value = msg[12];
				document.getElementById('sel_supplier_list').value = msg[12];
				document.getElementById('sel_supplier_list1').value = msg[12];
				document.getElementById("mobile_no").value = msg[10];
				document.getElementById("city").value = msg[3];	
				document.getElementById("credit_days").value = msg[7];	
				document.getElementById("zip_code").value = msg[4];	
				document.getElementById("cust_email").value = msg[22];	
				//document.getElementById("sel_salesrep").value = msg[8];
				//document.getElementById('phone').value = msg[10];
			//	document.getElementById("sel_area_name").value = msg[11];
			//	document.getElementById("sel_area").value = msg[7];
				document.getElementById("gstin").value = msg[13];	
				document.getElementById("contact_person").value = msg[14];	
				document.getElementById("state1").value = msg[15];
				document.getElementById("country1").value = msg[16];		
				document.getElementById("slcode_no").value = msg[17];
				document.getElementById("txt_rate_type").value = msg[21];
				$("#add_cust_terms").html(msg[12]).attr({onclick: 'openeditpopup()'});
				$("#credit_outstanding").html(msg[23]);
				$("#shipping_name").val(msg[24]);
				$("#shipping_phone").val(msg[25]);
				$("#shipping_add1").val(msg[26]);
				$("#shipping_add2").val(msg[27]);
				$("#shipping_city").val(msg[28]);
				$("#shipping_zipcode").val(msg[29]);
				$("#shipping_state").val(msg[30]);
				$("#shipping_country").val(msg[31]);
				if(msg[23]!=0){
					$("#customer_balance_cap").show();
					$("#customer_balance_value").html(msg[23]);
				}
				if(msg['19'] == 1){
					$("#enble_loyalty1").attr('checked', true);
					fn_loyalty(1);
				}else{
					$("#enble_loyalty2").attr('checked', true);	
					fn_loyalty(0);		
				}
				$('#card_typ').val(msg[20]);
				var invoice_date = document.getElementById("invoicedate").value;
				$("#card_num").val(msg[18]);
				chk_card_name(msg[18]);

				/********************** SPLIT THE INVOICE DATE PROCESS STARTS HERE *************************/
					invoice_date = invoice_date.split("-");
					var inv_date = invoice_date[0];
					var inv_mon = invoice_date[1];
					var inv_year = invoice_date[2];
				/********************** SPLIT THE INVOICE DATE PROCESS ENDDS HERE *************************/
				
				/******************* CHANGE THE INVOICE DATE FORMAT PROCESS STARTS HERE *********************/		
					if ( inv_year < 1970 ) inv_year = inv_year + 100;	
					yr = new String(inv_year);	
					mon = new String(inv_mon);	 
					dat = new String(inv_date);	 
					if ( mon.length == 1 ) mon = "0" + mon;	
					if ( dat.length == 1 ) dat = "0" + dat;	 
					yr = mon + "/" + dat + "/" +  yr;
				/******************* CHANGE THE INVOICE DATE FORMAT PROCESS ENDS HERE *********************/
				
				/******************* ADD NUMBER OF DAYS IN GIVEN DATE PROCESS STARTS HERE *********************/
					var d = new Date(yr); 
					d.setDate(d.getDate() + parseInt(msg[6]));
					
					var diffdat = d.getDate();
					var diffmon = (d.getMonth()+1);
					var diffyr = d.getFullYear();
					
					if(diffdat < 10) {
						diffdat = "0"+diffdat; 
					}
					if(diffmon < 10) {
						diffmon = "0"+diffmon; 
					}
					var nexdate = diffdat+"-"+diffmon+"-"+diffyr;
					document.getElementById("credit_days").value = msg[6];
					document.getElementById("duedate").value = nexdate;
					if(msg[6] == "") {
						document.getElementById("duedate").value = "";
					}
					
				/******************* ADD NUMBER OF DAYS IN GIVEN DATE PROCESS ENDS HERE *********************/
				
				if(msg[5] == "no_dc") {
					document.getElementById("sel_supplier").focus();
					return false;
				} else {
					document.getElementById("main_dcdet").style.display = "block";
					document.getElementById("dcdetails").innerHTML = msg[5];					
				}
		   }
		 });
		return false;
	} else {
		document.getElementById("add1").value = "";
		document.getElementById("add2").value = "";	
		document.getElementById("credit_days").value = "";
		document.getElementById("duedate").value = "";
		document.getElementById("sel_salesrep").value = "";
		//document.getElementById("sel_area").value = "";
		document.getElementById("main_dcdet").style.display = "none";
		//alert("Select the Customer");
		alert_popup("Select the Customer","RED",'sel_supplier');
		document.getElementById("sel_supplier").focus();
		return false;
	}
}


function fn_selterms(ch_val){


//return false;
document.getElementById("card_amt").value='';
document.getElementById("rec_amount").value='';
document.getElementById("bal_amount").value='';
	if(ch_val=='Card'){
		//alert(ch_val);	
		
		document.getElementById("card_details").style.display='';
				
		//document.getElementById("credit_cust").style.display='none';
		/*document.getElementById("credit_custadd1").style.display='none';
		document.getElementById("credit_custadd2").style.display='none';*/
		//document.getElementById("cash_cust").style.display='';
		/*document.getElementById("cash_custaddress").style.display='';
		document.getElementById("cash_custplace").style.display='';
		document.getElementById("phone").style.display='';*/
		
		//cust_reset();
		document.getElementById("address").removeAttribute('readonly');
		
		document.getElementById("place").removeAttribute('readonly');
		document.getElementById("phone").removeAttribute('readonly');
	//	document.getElementById("gstno").removeAttribute('readonly');
		//document.getElementById("sel_area_name").removeAttribute('readonly');
		//document.getElementById("sel_area").removeAttribute('readonly');
	}	
	else if(ch_val=='Cash'){
	//alert(ch_val);		

		//document.getElementById("credit_cust").style.display='none';
		/*document.getElementById("credit_custadd1").style.display='none';
		document.getElementById("credit_custadd2").style.display='none';*/
	
		document.getElementById("card_details").style.display='none';
		
		//document.getElementById("cash_cust").style.display='';
		/*document.getElementById("cash_custaddress").style.display='';
		document.getElementById("cash_custplace").style.display='';
		document.getElementById("cash_custph").style.display='';*/
		
		//cust_reset();
		document.getElementById("address").removeAttribute('readonly');
		document.getElementById("place").removeAttribute('readonly');
		document.getElementById("phone").removeAttribute('readonly');
				//document.getElementById("gstno").removeAttribute('readonly');
		//document.getElementById("sel_area_name").removeAttribute('readonly');
		//document.getElementById("sel_area").removeAttribute('readonly');
	}
	
	else if(ch_val=='Credit'){
	//alert(ch_val);
		document.getElementById("credit_details").style.display='';
		//document.getElementById("credit_cust").style.display='';
		/*document.getElementById("credit_custadd1").style.display='';
		document.getElementById("credit_custadd2").style.display='';*/
		document.getElementById("card_details").style.display='none';
		//document.getElementById("cash_cust").style.display='none';
		/*document.getElementById("cash_custaddress").style.display='none';
		document.getElementById("cash_custplace").style.display='none';
		document.getElementById("cash_custph").style.display='none';	*/	
		
		//cust_reset();
		document.getElementById("address").setAttribute('readonly','readonly');
		document.getElementById("place").setAttribute('readonly','readonly');
		document.getElementById("phone").setAttribute('readonly','readonly');
		//document.getElementById("gstno").setAttribute('readonly','readonly');
		//document.getElementById("sel_area_name").setAttribute('readonly','readonly');
		//document.getElementById("sel_area").setAttribute('readonly','readonly');
	}

}
</script>
<script language="javascript" type="text/javascript">

function ajax()
{
	if (window.XMLHttpRequest)
	{
	// code for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttp=new XMLHttpRequest();
	}
	else if (window.ActiveXObject)
	{
	// code for IE6, IE5
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	else
	{
	//alert("Your browser does not support XMLHTTP!");
	alert_popup("Your browser does not support XMLHTTP!","RED",'');
	return;
	}
	
}
var $ = jQuery.noConflict();
$("#addImage").click(function () {
		
	
	
	//document.getElementById("addrow1").value = '';
		if(document.getElementById("hiddenprice").value == "") {
			imagecounter = 0;
		}
		else{
			imagecounter = parseFloat(document.getElementById("hiddenprice").value) + 1;
		}
		
	 var j = imagecounter+1;
    var dyn_class;
if(j%2)
	dyn_class="even";
else
	dyn_class="odd";
 
	var newImageDiv = $(document.createElement('div'))
	     .attr("id", 'ImageDiv' + imagecounter);
		 
		 
		 
		 /*onchange="return fn_productname(this.value,\'prdname'+imagecounter+'\')"*/
		 
		 var bill_type = document.getElementById('bill_type1').value;
		 var sread;
		 if(bill_type != 'WPV') { sread = 'readonly = "true"'; }
		 else {sread = ''; }
		 
		 var disc_type = document.getElementById('disctype').value;
		 var sread1;
		 if(disc_type == 1) { sread1 = ''; }
		 else { sread1 = 'readonly = "true"'; }
	var hidebar = 	document.getElementById("addrow").value;
	var hidebatch = document.getElementById("addrow1").value;

		var checksd = ""
		
		var sno = "";
		var barco = "";
		var prod = "";
		var uom = "";
		var bat = "";
		var exp = "";
		var qua = "";
		var dis = "";
		var cper = "";
		var camt = "";
		var sper = "";
		var samt = "";
		var mrpp = "";
		var sal = "";
		var vale = "";
		var del = "";
		var hide_single_tax = "display:none";
		var hide_tax = "";
		var single_tax_name = "IGST";
		
	
		
		 var layout ='';
		  layout = '<tr id="ImageDiv'+imagecounter+'" class='+dyn_class+'>'+
		   '<td class="sale_chk"  style="padding-left: 7px;padding-top: 1px;text-align: left;padding-right: 7px;width: 2%;">'+
					'<input type="checkbox" name="prods_rtn[]" id="prods_rtn'+imagecounter+'" />'+
				'</td>'+
						'<td class="sale_sno">'+
						'<input type="text" name="slno'+imagecounter+'"   id="slno'+imagecounter+'" value="'+imagecounter+'" readonly="true" class="text_sno"/><br>'+
						
  

						'<input type="hidden" name="sal_type'+imagecounter+'" id="sal_type'+imagecounter+'" value="S" readonly="true"  />'+
						'</td>'+
/**/					'<td style=";" class="sal_barcode">'+

						'<input type="text" style="padding-right:2px;" name="barcode'+imagecounter+'" class="maxtxt text_barcode"  id="barcode'+imagecounter+'"  onchange="return fn_productname(this.value,'+imagecounter+')" />'+
						'</td>'+
					'<td  class="sal_product"  style="    padding: 0px 0px 0px 0px;" >'+ 
					'<input style="padding-right:2px;" type="hidden" class="maxtxt text_barcode" name="hidbar" id="hidbar"   value="0"  />'+
						'<input type="hidden" name="PCode'+imagecounter+'" style="width:60px" id="PCode'+imagecounter+'" class="text_itemdesc" />'+'<input type="hidden" name="Pro_type'+imagecounter+'" id="Pro_type'+imagecounter+'" class="text_itemdesc" />'+                 
						'<input type="text" name="prdname'+imagecounter+'" class="maxtxt text_itemdesc" id="prdname'+imagecounter+'" onchange="return fn_productname(this.value,'+imagecounter+')" style="width:100%!important;"/><span id="cgstspan'+imagecounter+'" style=""></span><span id="sgstspan'+imagecounter+'" style=""></span><span id="igstspan'+imagecounter+'"></span><span id="cessspan'+imagecounter+'"></span>'+
						'<a  href="" class="notessalesbutton"  style="" data-toggle="modal" data-target="#myModalnotes'+imagecounter+'" onclick="notesdialog('+imagecounter+')"><img src="http://demo.elixrlite.com/portal/Theme1/images/notes.png" style="width:25px;"></a>'+
						 <!-- Modal -->
'<div class="modal fade" id="myModalnotes'+imagecounter+'" role="dialog">'+
'<div class="modal-dialog notesdialog">'+
'<div class="modal-content">'+
'<div class="modal-header notesheader">'+
'<button type="button" class="close closebuttonnotes" data-dismiss="modal" style="margin-top:8px!important;">&times;</button>'+
'<h4 class="popover-title notestitle">ITEM DESCRIPTION</h4>'+
'</div>'+
'<div class="modal-body">'+
'<textarea rows="4" class="notesdes" name="item_note'+imagecounter+'" autofocus id="item_note'+imagecounter+'" value=""  cols="50" Placeholder="Enter Descritption">'+
'</textarea>'+
'</div>'+
'</div>'+
'</div>'+
'</div>'+
						
						
						
						
						'</td>'+
					
						'<input type="hidden" name="uom'+imagecounter+'" id="uom'+imagecounter+'" class="maxtxt text_uom" readonly="true"/>'+
						'<input type="hidden" name="hdnuom'+imagecounter+'" id="hdnuom'+imagecounter+'" />'+
					
						
						'<td style=";" class="sal_batch">'+
						//'<select name="batch'+imagecounter+'" id="batch'+imagecounter+'" class="select_batch" onchange="return fn_batchno(this.value,'+imagecounter+')" style="width:  100%;"><option value="">Batch</option><select>'+
						'<input type="text" class="maxtxt text_batch" name="batch'+imagecounter+'" id="batch'+imagecounter+'" readonly="true" style="width:60px" />'+
						'<input type="hidden" class="maxtxt" name="expiry'+imagecounter+'" id="expiry'+imagecounter+'"  readonly="true" />'+
						'<input type="hidden" class="maxtxt" name="godown'+imagecounter+'" id="godown'+imagecounter+'" readonly="true"  />'+
						'<input type="hidden" class="maxtxt" name="ismulti'+imagecounter+'" id="ismulti'+imagecounter+'" readonly="true" />'+
						'</td>'+
						
						//'<td class="td_prod_date">'+
						'<input type="hidden" readonly="true" name="prod_dt'+imagecounter+'" id="prod_dt'+imagecounter+'" class="text_production_date"/>'+
						//'</td>'+
						'<td class="sal_qty"  >'+
					'<input type="text" class="minitext1 txtright text_qty" name="qty'+imagecounter+'" id="qty'+imagecounter+'" onchange="return fn_qty(this.value,'+imagecounter+');" style="padding-right:3px;"   onkeypress="validate(event)" />'+
						'<input type="hidden" class="minitext1 txtright" name="hidqty'+imagecounter+'" id="hidqty'+imagecounter+'"  readonly="true" />'+
						'<input type="hidden" class="minitext1 txtright" name="hidqtytemp'+imagecounter+'" id="hidqtytemp'+imagecounter+'" readonly="true" />'+
						'</td>'+

						'<td style=";" class="sal_disc" >'+
						'<input type="hidden"  class="minitext1 txtright" name="free'+imagecounter+'" id="free'+imagecounter+'" readonly="true" maxlength="10" onchange="return fn_free(this.value,'+imagecounter+')" onkeypress="validate(event)" />'+
						'<input type="hidden" class="minitext1 txtright" name="total'+imagecounter+'" id="total'+imagecounter+'"  maxlength="10" readonly="true" />'+
						'<input type="text" style="padding-right:3px;"  class="minitext1 txtright text_disc" name="disc'+imagecounter+'" id="disc'+imagecounter+'" onchange="return fn_discper(this.value,'+imagecounter+')" '+sread1+' onkeypress="validate(event)"/>'+
						'<input type="hidden" class="minitext1 txtright" name="discamt'+imagecounter+'" id="discamt'+imagecounter+'"  /><input type="hidden" class="minitext1 txtright" name="hid_discamt'+imagecounter+'" id="hid_discamt'+imagecounter+'"  />'+
						'</td>'+
						
						'<input type="hidden" class="minitext2 txtright" name="p_price'+imagecounter+'" id="p_price'+imagecounter+'" style="width:55px;" onchange="return fn_purprice(this.value,'+imagecounter+')" />'+
						'<input type="hidden" name="margin'+imagecounter+'" id="margin'+imagecounter+'"  />'+
						//'</td>'+
						//'<td>'+
						'<input type="hidden" class="minitext2 txtright" name="costrate'+imagecounter+'" id="costrate'+imagecounter+'" />'+
						//'</td>'+
						
						
				
                    '<input type="hidden" name="taxtypedesc'+imagecounter+'" id="taxtypedesc'+imagecounter+'" readonly="readonly" />' +
            
                  
					'<input type="hidden" name="taxtypedesc'+imagecounter+'" id="taxtypedesc'+imagecounter+'"  class="minitext2 txtright"  class="select_tax" readonly="readonly" />'+
					'<input type="hidden" name="taxtype'+imagecounter+'" id="taxtype'+imagecounter+'"  class="minitext2 txtright"  />'	+
			
				'<input type="hidden" class="minitext2 txtright" name="p_price'+imagecounter+'" id="p_price'+imagecounter+'"  onchange="return fn_purprice(this.value,'+imagecounter+')" />' +
					'<input type="hidden" name="margin'+imagecounter+'" id="margin'+imagecounter+'"  style="width:35px;" />	' +		
					'<input type="hidden" class="minitext2 txtright" name="costrate'+imagecounter+'" id="costrate'+imagecounter+'"    />' +		
				
					'<input type="hidden" name="cgst_per'+imagecounter+'" id="cgst_per'+imagecounter+'"  class="text_tax_per" readonly="true" />'+				
				
					

					'<input type="hidden" style="padding-right:2px;"  name="cgst_amt'+imagecounter+'" id="cgst_amt'+imagecounter+'"  class="text_tax_per" readonly="true" />' +
				

           '<input type="hidden" name="tax_typ'+imagecounter+'" id="tax_typ'+imagecounter+'"   readonly="true" />' +	


		
								
					'<input type="hidden" name="sgst_per'+imagecounter+'" id="sgst_per'+imagecounter+'"  class="text_tax_per" readonly="true" />'		+		
								
					'<input type="hidden" style="padding-right:6px;"  name="sgst_amt'+imagecounter+'" id="sgst_amt'+imagecounter+'"  class="text_tax_per" readonly="true" />	' +
					
          ' <input type="hidden" name="tax_typ'+imagecounter+'" id="tax_typ'+imagecounter+'" readonly="true" /><input type="hidden" class="minitext1 txtright" name="taxdes'+imagecounter+'" id="taxdes'+imagecounter+'" tabindex="'+imagecounter+'"  value="" style="width:35px;" />'+
       
         	
		 	' <input type="hidden" name="igst_per'+imagecounter+'" id="igst_per'+imagecounter+'" class="text_tax_per" readonly="true" />'	+
				
						'<input type="hidden" name="igst_amt'+imagecounter+'" id="igst_amt'+imagecounter+'" class="text_tax_per" readonly="true" />'+
						
					

         	
		 	' <input type="hidden" name="cess_per'+imagecounter+'" id="cess_per'+imagecounter+'" class="text_tax_per" readonly="true" />'	+
				
						'<input type="hidden" name="cess_amt'+imagecounter+'" id="cess_amt'+imagecounter+'" class="text_tax_per" readonly="true" />'+
						
				
					
						'<td  class="sal_mrp" style="display:none;" >'+
						'<input type="text" class="minitext1 txtright text_pprice" name="mrpo'+imagecounter+'" id="mrpo'+imagecounter+'"  onkeypress="validate(event)" />'+
						'</td>'+
						
						'<td  style="display:none" class="sal_ptr">'+
						'<input type="text" class="text_expiry_date"  name="ptr'+imagecounter+'" id="ptr'+imagecounter+'" />'+
						'<input type="hidden" class="text_expiry_date" readonly="true" name="exp_dt'+imagecounter+'" id="exp_dt'+imagecounter+'" />'+
						'</td>'+
						'<td  class="sal_sal" >'+
						'<input type="hidden" class="minitext2 txtright" name="s_price'+imagecounter+'" id="s_price'+imagecounter+'" '+sread+' onchange="return fn_salprice(this.value,'+imagecounter+')" onkeypress="validate(event)" /> '+
						'<input type="hidden" class="minitext2 txtright" name="mop'+imagecounter+'" id="mop'+imagecounter+'" />' +
						'<input type="hidden" class="minitext2 txtright" name="msp'+imagecounter+'" id="msp'+imagecounter+'" />'+
						'<input type="text" class="minitext1 txtright text_pprice" name="mrp'+imagecounter+'" id="mrp'+imagecounter+'"   onblur="return fn_mrp(this.value,'+imagecounter+')" onkeypress="validate(event)"  />'+

						'<input type="hidden" class="minitext1 txtright text_pprice" name="marginper'+imagecounter+'" id="marginper'+imagecounter+'" readonly="true" onkeypress="validate(event)" />'+
						'<input type="hidden" class="minitext1 txtright text_pprice" name="saving'+imagecounter+'" id="saving'+imagecounter+'" readonly="true" onkeypress="validate(event)" />'+
						'<input type="hidden" id="TotPV'+imagecounter+'" name="TotPV'+imagecounter+'" />'+
						'</td>'+

						'<td>'+
							'<select id="choose_tax'+imagecounter+'" name="choose_tax'+imagecounter+'" disabled class="minitext1 txtright text_qty" onchange="fn_changetax('+imagecounter+',this.value);"></select>'+
						'</td>'+

						'<td class="sale_total" >'+
						'<input type="text"  class="minitext2 txtright text_val_with_tax" name="valwithtax'+imagecounter+'" id="valwithtax'+imagecounter+'" readonly="true" />'+
						'</td>'+
						'<td  class="sal_del" style="text-align:center;vertical-align:middle">'+
							'<a onclick="change('+imagecounter+')"><i class="glyphicon glyphicon-trash" style="padding-top:0px;"></i></a>'+
					
					'</td>'+
						
						'<input type="hidden" class="minitext1 txtright" name="tot_price'+imagecounter+'" id="tot_price'+imagecounter+'"   style="width:70px;" readonly="true" />'+
						
						'<input type="hidden" class="minitext1 txtright" name="netvalue'+imagecounter+'" id="netvalue'+imagecounter+'" readonly="true" />'+
						
						'<input type="hidden" class="minitext1 txtright" name="dcno'+imagecounter+'" id="dcno'+imagecounter+'" readonly="true" />'+
						
						'<input type="hidden" class="minitext1 txtright" name="dcdt'+imagecounter+'" id="dcdt'+imagecounter+'" readonly="true" />'+
						
						'<input type="hidden" class="minitext1 txtright" name="dcsno'+imagecounter+'" id="dcsno'+imagecounter+'" readonly="true" />'+
						
						
						'<input type="hidden" class="minitext1 txtright" name="batchrecno'+imagecounter+'" id="batchrecno'+imagecounter+'"  readonly="true" />'+
						'</tr>';
 
 	$("#sal_tab tbody tr:first").after(layout);//append(layout);
	//newImageDiv.after().html(layout);
		  
	//newImageDiv.appendTo("#ImagesGroup");
 
 	document.getElementById("hiddenprice").value = imagecounter;	
	imagecounter++;
	j++;
    item_mrnentry();
	//item_sales();	
	
});

item_mrnentry();
//  <!----------------------------- Productname function Textbox AutoComplete Starts Here -------------------------------->

 
     $("#removeButton").click(function () {
	if(imagecounter==2){
          //alert("No more Image to remove");
          alert_popup("No more Image to remove","RED",'');
          return false;
       }   
 
	imagecounter--;
 	/*document.getElementById("hiddenimagecount").value = imagecounter-1;====>Bkup*/
	document.getElementById("hiddenprice").value = imagecounter-1;
   $("#ImageDiv" + imagecounter).remove();
	 });
 
     $("#getButtonValue").click(function () {
 

	
	var msg = '';
	for(i=1; i<imagecounter; i++){
   	  msg += "\n Textbox #" + i + " : " + $('#textbox' + i).val();
	}
    	//alert(msg);
    	alert_popup(msg,"RED",'');
     });
	 
	 
	var sizecounter = 2;
 
    //$("#addSize").click(function () {});
 
     $("#removeButton1").click(function () {
	if(sizecounter==2){
          //alert("No more Size to remove");
          alert_popup("No more Size to remove","RED",'');
          return false;
       }   
 
	sizecounter--;
 	document.getElementById("hiddensize").value = sizecounter-1;
   $("#SizeDiv" + sizecounter).remove();
	 });
// <!----------------------------- Productname function Textbox AutoComplete Starts Here -------------------------------->
// <!------------------------------  Area Line function Textbox AutoComplete Starts Here ---------------------------------------------------------------------->

function area_line(){
jQuery("input[name^=sel_area_name]").combogrid({
		debug:true,
		width:300,
		colModel: [{'columnName':'code','width':'15','label':'Code'}, {'columnName':'name','width':'40','label':'Area Line'}, {'columnName':'salesrep','width':'40','label':'Sales Rep'},{'columnName':'salcode','hidden':true,'width':'40','label':'Sales Code'}],
		url: 'auto_arealine.php',
		//"select item" event handler to set input fields
		select: function( event, ui ) {
		
			var id = jQuery(this).attr('id');
			var subst = id.substr(13);
			var prd = "sel_area_name"+subst;
			var code = "sel_area"+subst;
			var salcode = "sel_salesrep"+subst;
					
			jQuery("#"+prd).val( ui.item.name );
			jQuery("#"+code).val( ui.item.code );
			jQuery("#"+salcode).val( ui.item.salcode );
			//document.getElementById("batch"+subst).focus();
			return false;
		}
	});
}	

// <!------------------------------  Area Line function Textbox AutoComplete Ends Here ---------------------------------------------------------------------->
     $("#removeButton").click(function () {
	if(imagecounter==2){
          //alert("No more Image to remove");
          alert_popup("No more Image to remove","RED",'');
          return false;
       }   
 
	imagecounter--;
 	/*document.getElementById("hiddenimagecount").value = imagecounter-1;====>Bkup*/
	document.getElementById("hiddenprice").value = imagecounter-1;
   $("#ImageDiv" + imagecounter).remove();
	 });
 
     $("#getButtonValue").click(function () {
 

	
	var msg = '';
	for(i=1; i<imagecounter; i++){
   	  msg += "\n Textbox #" + i + " : " + $('#textbox' + i).val();
	}
    	  alert(msg);
     });
	 
	 
	var sizecounter = 2;
 
    //$("#addSize").click(function () {});
 
     $("#removeButton1").click(function () {
	if(sizecounter==2){
          alert("No more Size to remove");
          return false;
       }   
 
	sizecounter--;
 	document.getElementById("hiddensize").value = sizecounter-1;
   $("#SizeDiv" + sizecounter).remove();
	 });
	 

  
/*function fn_suppchk(supp) {
	if(supp == "") {
		alert("Select the Supplier");
		document.getElementById("sel_supplier").focus();
		return false;
	} else {
		fn_supllier();
	}	
}*/

function fn_invoicechk(inv) {
	//var invoice = document.getElementById("invoiceno").value;
	if(inv == "") {
		//alert("Enter the Invoice Number");
		alert_popup("Enter the Invoice Number","RED",'invoiceno');
		document.getElementById("invoiceno").focus();
		return false;
	}
}

function fn_invdatechk(invdate) {

	var mrn_date = document.getElementById("mrnDate").value;
	
	/*if(invdate == "") {
		alert("Select the Invoice Date");
		document.getElementById("invoicedate").focus();
		return false;
	}*/
	if(invdate != "" && mrn_date != "") {
		if(invdate > mrn_date) {	
			//alert("Invoice Date Should be Less than MRN Date");
			alert_popup("Enter the Invoice Number","RED",'invoiceno');
			document.getElementById("invoicedate").value = "";
			document.getElementById("invoicedate").focus();
			return false;
		}
	}
}



function fn_dctable(source) {
 /* checkboxes = document.getElementsByName('chk_dc[]');
  for each(var checkbox in checkboxes)
  {
    checkbox.checked = source.checked;
  }*/
}

function fn_creditdays () {

	/* REPLACE THE SPECIAL CHARACTERS AND STRINGS 
	var temp = new String('This is a te!!!!st st>ring... So??? What...');
	temp =  temp.replace(/[^a-zA-Z 0-9]+/g,'');
	alert(temp);*/
	
	/* CHANGE THE DATE FORMAT
	dy = 2012	// Get full year (as opposed to last two digits only)
	dm = 5	// Get month and correct it (getMonth() returns 0 to 11)
	dd = 22	// Get date within month
	if ( dy < 1970 ) dy = dy + 100;	// We still have to fix the millennium bug
	ys = new String(dy)	// Convert year, month and date to strings
	ms = new String(dm)	 
	ds = new String(dd)	 
	if ( ms.length == 1 ) ms = "0" + ms;	// Add leading zeros to month and date if required
	if ( ds.length == 1 ) ds = "0" + ds;	 
	ys = ys + "," + ms + "," + ds
	alert(ys);*/
	
	var invoice_date = document.getElementById("invoicedate").value;
	var due_date = document.getElementById("duedate").value;
	if(invoice_date != "") {
		if(invoice_date > due_date) {	
				//alert("Due Date Should be Greater than Invoive Date");
				alert_popup("Due Date Should be Greater than Invoive Date","RED",'duedate');
				document.getElementById("duedate").value = "";
				document.getElementById("duedate").focus();
				return false;
		} else {
	
/********************** SPLIT THE INVOICE DATE PROCESS STARTS HERE *************************/
	invoice_date = invoice_date.split("-");
	var inv_date = invoice_date[0];
	var inv_mon = invoice_date[1];
	var inv_year = invoice_date[2];
/********************** SPLIT THE INVOICE DATE PROCESS ENDDS HERE *************************/

/********************** SPLIT THE DUE DATE PROCESS STARTS HERE *************************/	
	due_date = due_date.split("-");
	var due_dt = due_date[0];
	var due_mon = due_date[1];
	var due_year = due_date[2];
/********************** SPLIT THE DUE DATE PROCESS ENDS HERE *************************/
	
/******************* CHANGE THE INVOICE DATE FORMAT PROCESS STARTS HERE *********************/		
	if ( inv_year < 1970 ) inv_year = inv_year + 100;	
	yr = new String(inv_year);	
	mon = new String(inv_mon);	 
	dat = new String(inv_date);	 
	if ( mon.length == 1 ) mon = "0" + mon;	
	if ( dat.length == 1 ) dat = "0" + dat;	 
	yr = yr + "," + mon + "," + dat;
/******************* CHANGE THE INVOICE DATE FORMAT PROCESS ENDS HERE *********************/	
	
/******************* CHANGE THE DUE DATE FORMAT PROCESS STARTS HERE *********************/
	if ( due_year < 1970 ) due_year = due_year + 100;	
	dueyr = new String(due_year);	
	duemon = new String(due_mon);	 
	duedat = new String(due_dt);	 
	if ( duemon.length == 1 ) duemon = "0" + duemon;	
	if ( duedat.length == 1 ) duedat = "0" + duedat;	 
	dueyr = dueyr + "," + duemon + "," + duedat;
/******************* CHANGE THE DUE DATE FORMAT PROCESS ENDS HERE *********************/
	
/******************* DIFFERNCE BETWEEN DATES PROCESS STARTS HERE *********************/
	var oneDay = 24*60*60*1000; // hours*minutes*seconds*milliseconds
	var firstDate = new Date(yr);
	var secondDate = new Date(dueyr);
	var diffDays = Math.abs((firstDate.getTime() - secondDate.getTime())/(oneDay))+1;
/******************* DIFFERNCE BETWEEN DATES PROCESS ENDS HERE *********************/
	
	document.getElementById("credit_days").value = diffDays;
	}
	} else {
		//alert("Select the Due Date");
		alert_popup("Select the Due Date","RED",'invoicedate');
		document.getElementById("invoicedate").focus();
		return false;
	}
}

function fn_duedate(credays) {

var invoice_date = document.getElementById("invoicedate").value;

/********************** SPLIT THE INVOICE DATE PROCESS STARTS HERE *************************/
	invoice_date = invoice_date.split("-");
	var inv_date = invoice_date[0];
	var inv_mon = invoice_date[1];
	var inv_year = invoice_date[2];
/********************** SPLIT THE INVOICE DATE PROCESS ENDDS HERE *************************/

/******************* CHANGE THE INVOICE DATE FORMAT PROCESS STARTS HERE *********************/		
	if ( inv_year < 1970 ) inv_year = inv_year + 100;	
	yr = new String(inv_year);	
	mon = new String(inv_mon);	 
	dat = new String(inv_date);	 
	if ( mon.length == 1 ) mon = "0" + mon;	
	if ( dat.length == 1 ) dat = "0" + dat;	 
	yr = mon + "/" + dat + "/" +  yr;
/******************* CHANGE THE INVOICE DATE FORMAT PROCESS ENDS HERE *********************/

/******************* ADD NUMBER OF DAYS IN GIVEN DATE PROCESS STARTS HERE *********************/
	var d = new Date(yr); 
	d.setDate(d.getDate() + parseInt(credays));
	
    var diffdat = d.getDate();
	var diffmon = (d.getMonth()+1);
	var diffyr = d.getFullYear();
	
	if(diffdat < 10) {
		diffdat = "0"+diffdat; 
	}
	if(diffmon < 10) {
		diffmon = "0"+diffmon; 
	}
	var nexdate = diffdat+"-"+diffmon+"-"+diffyr;
	document.getElementById("duedate").value = nexdate;
	if(credays == "") {
		document.getElementById("duedate").value = "";
	}
	
/******************* ADD NUMBER OF DAYS IN GIVEN DATE PROCESS ENDS HERE *********************/
}


</script>

<!--<script type="text/javascript">
    var d = new Date("04/08/2015");
	d.setDate(d.getDate()+10);
    alert((d.getMonth()+1)+"/"+d.getDate()+"/"+d.getFullYear());
	//alert(d);
</script>-->

<style>
.text_customer {
    width: 98.2%;
}
.span_sal_terms {
    padding-left: 4.5%;
}
.span_staff {
    padding-left: 2.6%;
}
.span_billno {
    padding-left: 4.3%;
}
#calendarDiv{
	z-index: 99999999 !important;
}
table.blueTable th
{
	font-weight:bold!important;
}
</style>
<style>
.headingpopupwarning

{
    background: linear-gradient(135deg, #da5c5766 0%, #bd5f5ce0 100%);
    padding: 10px;
    text-transform: uppercase;
    font-weight: bold;
}
.modal-header
{
	    padding: 0px!important;
 
}
#mod_body {
    padding: 15px 0px 0px 0px;
    padding: 30px!important;

    font-size: 15px!important;
}
.modal .modal-content .modal-footer {
    border: 0;
    border-top: 1px solid #e5e5e5!important;
}
</style>
<script>
function fn_nexttab(nxt){
	$("#"+nxt).focus();
}
function received_amount()
{
	$("#rec_amount").focus();
}
function selcash()
{
		$("#cardfield").hide();
	$('#card_name').val('');
	$('#cardno').val('');
	$('#card_amt').val('');
	$('#card_name').attr('readOnly',true);
	$('#cardno').attr('readOnly',true);
	$('#card_amt').attr('readOnly',true);
	$("#sel_terms").val("cash");
	$('#cash_option1').css({"background-color": "#05a8df","border":"1px solid #3476ae","color":"#FFF"});
	$('#card_option').css({"background-color": "#FFF","border":"1px solid #3476ae","color":"#000"});
	$('#credit_option').css({"background-color": "#FFF","border":"1px solid #3476ae","color":"#000"});
	$('#rec_amount').val('0');
	fn_balamt();
}
function selterms()
{
	//alert(435);
		$('#card_option').css({"background-color": "#05a8df","border":"1px solid #3476ae","color":"#FFF"});
	$('#cash_option1').css({"background-color": "#FFF","border":"1px solid #3476ae","color":"#000"});
	
	$('#credit_option').css({"background-color": "#FFF","border":"1px solid #3476ae","color":"#000"});
	$("#cardfield").show();
	$('#enable_warning1').val(1);
	setTimeout(function(){
		$('#card_name').focus();
	}, 200);
	//alert(3243);
	//
	$('#rec_amount').val('0');
	fn_balamt();
	$('#card_name').attr('readOnly',false);
	$('#cardno').attr('readOnly',false);
	$('#card_amt').attr('readOnly',false);
	$("#sel_terms").val("card");
	
	//alert(435);

}
function selcredit()
{
	//alert(3243);
	$("#cardfield").hide();
	$('#card_name').val('');
	$('#cardno').val('');
	$('#card_amt').val('');
	$('#card_name').attr('readOnly',false);
	$('#cardno').attr('readOnly',false);
	$('#card_amt').attr('readOnly',false);
	$('#rec_amount').val('0');
	$("#sel_terms").val("credit");
	fn_balamt();
	if($("#slcode_no").val() == ''){
		$("#aoe_customer").click();
	}
	$('#credit_option').css({"background-color": "#05a8df","border":"1px solid #3476ae","color":"#FFF"});
	$('#cash_option1').css({"background-color": "#FFF","border":"1px solid #3476ae","color":"#000"});
	$('#card_option').css({"background-color": "#FFF","border":"1px solid #3476ae","color":"#000"});
}

function focus_next_forward(get_next_tab){
	$('#enable_warning2').val(1);
	var barcode_en = $('#hidbar').val();
	if(barcode_en == 1){
		var next_tab = "prdname_sing";
	}else{
		var next_tab = "barcode_sing";
	}
	$('#next_focus2').val(next_tab);
	setTimeout(function(){
		$('#sel_supplier_sel').focus();
	}, 200);
}


function focus_next_prod(){
	//alert(34535);
	fn_prodcode();
	$('#enable_warning_prod').val(1);
	var barcode_en = $('#hidbar').val();
	if(barcode_en == 1){
		var next_tab = "prdname_sing";
	}else{
		var next_tab = "barcode_sing";
	}
	$('#next_focus_prod').val(next_tab);
	setTimeout(function(){
		$('#Commodity').focus();
	}, 200);
}

</script>
 <script>
function fn_incl(a)
{
	var hiddenprice = $('#hiddenprice').val();
	fn_recal(hiddenprice);
	/*var inc = document.getElementById("inclfn").value;
	//alert(inc);
	if(parseFloat(inc)==1)
	{
		if(a==0){
			window.location.href="sales.php?act=add";
		}
	
		}*/
	
}

</script>		
		<div id="myModal123" class="modal fade" role="dialog" style="margin:10px;"> 

	<input type='hidden' name="enable_warning2" id="enable_warning2" value="0">
	<input type='hidden' name="next_focus2" id="next_focus2" value="">
  <div class="modal-dialog">
 <style>
         .error {color: #FF0000;}
      </style>
    
<div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- Modal content-->
   
  </div>
  </div>  
  
  <style>
body {
    background-color: #ededed!important;
}
#dashboard
{
	background-color: #ededed!important;
}
  </style>
  <script>
  
  function notesdialog(val)
  {
	  	
	   
	  var delayInMilliseconds = 200; //1 second
	  setTimeout(function() {
		  //alert(4355);
	  $("#item_note"+val).focus();
}, delayInMilliseconds);
  }
 
  
function termsfocus()
{
	  var delayInMilliseconds = 200; //1 second
	  setTimeout(function() {
		  //alert(4355);
	  $("#rec_amount").select();
}, delayInMilliseconds);
}
  </script>
  <br/><br/>
<style>
.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #3b434c;
    color: white;
    text-align: left;
    padding: 10px;
	z-index:99999;
	font-size:12px;
}
</style>


<div class="footer" >
 <span style="color:#fff;">Your IP is : 110.224.84.18</span> 2024 &copy; Elixr Finsys Retail - CUSTOMER CARE : +91 73052 29527 | +91 73052 29528 
                  <span  class="poweredby"> <a style="color:#fff; float:right;" href="https://www.elixrfinsys.com"  target="_blank"> Powered by : Elixr Finsys  </a></span>
</div>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/595d0604e9c6d324a4738f2b/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!doctype html>

<html lang="en">
  
    <meta charset="utf-8" />
        <title>cancha UCAB</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{URL::asset('assets/app/images/logo-ucab-icono.png')}}">

        <!-- plugin css -->
        <link href="{{URL::asset('assets/app/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{URL::asset('assets/app/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{URL::asset('assets/app/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/app/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/navbars/">


   


<style>
    /*Main CSS*/


/*Login Signup Page*/
a:focus,a:hover,a{
    outline:none;
    text-decoration: none;
}
li,ul{
    list-style: none;
    padding: 0;
    margin: 0;
}
.header-top i {
    font-size: 18px;
}
.bg-image {
    background: url(../images/background-login.jpg) no-repeat 0 0 / cover;
    position: relative;
    width: 100%;
    height: 100vh;
    display: table;
}

.login-header {
    display: inline-block;
    width: 100%;
    background: #0e1a35;
}

.login-signup {
    display: table-cell;
    vertical-align: middle;
    width: 100%;
}

.login-logo img {
    cursor: pointer;
    max-width: 171px;
    padding: 23px 15px 22px;
    width: 100%;
}

.login-header .navbar-right {
    margin-right: 0px;
}

.login-header .nav-tabs > li.active > a,
.login-header .nav-tabs > li.active > a:focus,
.login-header .nav-tabs > li.active > a:hover {
    background-color: transparent;
    border: none;
    color: #fff;
}

.login-header .nav-tabs > li > a {
    border: medium none;
    border-radius: 0;
    font-size: 14px;
    font-weight: 500;
    line-height: 48px;
    padding: 15px 30px;
    color: #fff;
}

.login-header .nav-tabs {
    border-bottom: none;
}

.login-header .nav-tabs > li {
    margin-bottom: 0px;
}

.login-header .nav > li > a:focus,
.login-header .nav > li > a:hover {
    background: none;
    text-decoration: none;
}

.login-header .nav-tabs > li.active {
    border-bottom: 6px solid #5584ff;
}

.login-inner h1 {
    color: #8492af;
    font-size: 48px;
    font-weight: 300;
    text-align: center;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-inner h1 span {
    color: #5584ff;
}

.login-form {
    text-align: center;
}

.login-form input {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border-color: -moz-use-text-color -moz-use-text-color #d4d9e3;
    border-image: none;
    border-style: none none solid;
    border-width: medium medium 1px;
    font-size: 13px;
    font-weight: 300;
    width: 100%;
    color: #8492af;
    padding: 15px 50px;
    font-size: 17px;
    max-width: 550px;
}

.login-form label {
    margin-bottom: 30px;
    width: 100%;
}

.user input {
    background: rgba(0, 0, 0, 0) url("../images/user.png") no-repeat scroll 7px 12px;
}

.pass input {
    background: rgba(0, 0, 0, 0) url("../images/password.png") no-repeat scroll 7px 12px;
}

.mail input {
    background: rgba(0, 0, 0, 0) url("../images/mail.png") no-repeat scroll 4px 12px;
}

.login-signup .tab-content {
    background: #ffffff none repeat scroll 0 0;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.176);
    display: inline-block;
    margin-top: -8px;
    width: 100%;
}

.form-btn {
    background: #5584ff none repeat scroll 0 0;
    border: medium none;
    border-radius: 100px;
    color: #ffffff;
    font-weight: 400;
    max-width: 250px;
    padding: 10px 0;
    position: relative;
    width: 100%;
    margin: 40px 0;
    box-shadow: 0 2px 8px #d2d2d2;
    -moz-box-shadow: 0 2px 8px #d2d2d2;
    -webkit-box-shadow: 0 2px 8px #d2d2d2;
}

.form-btn::before {
    content: "";
    font-family: FontAwesome;
    position: absolute;
    right: 17px;
    top: 9px;
}

.form-details {
    padding: 35px 0;
}

.tab-content .tab-pane {
    padding: 70px 0;
}


/*Login Signup Page*/


/*Home Page*/

.home {
    background: #f6f7fa;
}

#navigation {
    background: #0e1a35;
}

#navigation {
    padding: 0;
}

.display-table {
    display: table;
    padding: 0;
    height: 100%;
    width: 100%;
}

.display-table-row {
    display: table-row;
    height: 100%;
}

.display-table-cell {
    display: table-cell;
    float: none;
    height: 100%;
}

.v-align {
    vertical-align: top;
}
.logo img {
    max-width: 180px;
    padding: 16px 0 17px;
    width: 100%;
}

.header-top {
    margin: 0;
    padding-top: 2px;
}

.header-top img {
    border-radius: 50%;
    max-width: 48px !important;
    width: 100%;
}

.add-project {
    background: #5584ff none repeat scroll 0 0;
    border-radius: 100px;
    color: #ffffff;
    font-size: 14px;
    font-weight: 600;
    padding: 10px 27px 10px 45px;
    position: relative;
}

.header-rightside .nav > li > a:focus,
.header-rightside .nav > li > a:hover {
    background: none;
    text-decoration: none;
}

.add-project::before {
    background: rgba(0, 0, 0, 0) url("../images/plus.png") no-repeat scroll 0 0;
    content: "";
    ;
    height: 12px;
    left: 17px;
    position: absolute;
    top: 12px;
    width: 12px;
}

.add-project:hover {
    color: #ffffff;
}

.header-top i {
    color: #0e1a35;
}

.icon-info {
    position: relative;
}
.navi i {
    font-size: 20px;
}
.label.label-primary {
    border-radius: 50%;
    font-size: 9px;
    left: 8px;
    position: absolute;
    top: -9px;
}

.icon-info .label {
    border: 2px solid #ffffff;
    font-weight: 500;
    padding: 3px 5px;
    text-align: center;
}

.header-top li {
    display: inline-block;
    text-align: center;
}

.header-top .dropdown-toggle {
    color: #0e1a35;
}

.header-top .dropdown-menu {
    border: medium none;
    left: -85px;
    padding: 17px;
}
.view {
    background: #5584ff none repeat scroll 0 0;
    border-radius: 100px;
    color: #ffffff;
    display: inline-block;
    font-size: 14px;
    font-weight: 600;
    margin-top: 10px;
    padding: 10px 15px;
}

.navbar-content > span {
    font-size: 13px;
    font-weight: 700;
}

.img-responsive {
    width: 100%;
}
#navigation{
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
.search input {
    border: none;
    font-size: 15px;
    padding: 15px 9px;
    width: 100%;
    background: rgba(0, 0, 0, 0) url("../images/search.png") no-repeat scroll 99% 12px;
    color: #8492af;
}

header {
    background: #ffffff none repeat scroll 0 0;
    box-shadow: 0 1px 12px rgba(0, 0, 0, 0.04);
    display: inline-block !important;
    line-height: 23px;
    padding: 15px;
    transition: all 0.5s ease 0s;
    width: 100%;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

.logo {
    text-align: center;
}

.navi a {
    border-bottom: 1px solid #0d172e;
    border-top: 1px solid #0d172e;
    color: #ffffff;
    display: block;
    font-size: 17px;
    font-weight: 500;
    padding: 28px 20px;
    text-decoration: none;
}

.navi i {
    margin-right: 15px;
    color: #5584ff;
}

.navi .active a {
    background: #122143;
    border-left: 5px solid #5584ff;
    padding-left: 15px;
}

.navi a:hover {
    background: #122143 none repeat scroll 0 0;
    border-left: 5px solid #5584ff;
    display: block;
    padding-left: 15px;
}

.navbar-default {
    background-color: #ffffff;
    border-color: #ffffff;
}

.navbar-toggle {
    border: none;
}

.navbar-default .navbar-toggle:focus,
.navbar-default .navbar-toggle:hover {
    background-color: rgba(0, 0, 0, 0);
}

.navbar-default .navbar-toggle .icon-bar {
    background-color: #0e1a35;
}

.circle-logo {
    margin: 0 auto;
    max-width: 30px !important;
    text-align: center;
}
.hidden-xs{
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}


*, *:  before, *:after {
    -webkit-box-sizing: border-box !important;
    -moz-box-sizing: border-box !important;
    box-sizing: border-box !important;
}
body {
    width: 100%;
    height: 100%;
    font-family: "Source Sans Pro",  "Helvetica Neue",  Helvetica,  Arial,  sans-serif;
    overflow-x: hidden;
}
html {
    width: 100%;
    height: 100%;
}

a:hover{
    text-decoration:none;
}


#sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    right: 0;
    width: 320px;
    height: 100%;
    margin-right: -320px;
    overflow-y: auto;
    background: #222;
    -webkit-transition: all 0.4s ease-in-out 0s;
    -moz-transition: all 0.4s ease-in-out 0s;
    -ms-transition: all 0.4s ease-in-out 0s;
    -o-transition: all 0.4s ease-in-out 0s;
    transition: all 0.4s ease-in-out 0s;
}
.sidebar-nav {
    position: absolute;
    top: 8.2%;
    width: 320px;
    margin: 0;
    padding: 0;
    list-style: none;
}
.sidebar-nav li {
    position: relative;
    line-height: 20px;
    display: inline-block;
    width: 100%;
    font-size: 110%;
    font-weight: 800;
    text-transform: uppercase;
    outline: none;
}
.sidebar-nav li:before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    z-index: -1;
    height: 100%;
    width: 3px;
    background-color: #1c1c1c;
    -webkit-transition: width .4s ease-in-out;
    -moz-transition: width .4s ease-in-out;
    -ms-transition: width .4s ease-in-out;
    transition: width .4s ease-in-out;
}
.sidebar-nav li:first-child a {
    color: #fff;
    background-color: #1a1a1a;
}
.sidebar-nav li:nth-child(2):before {
    color: #fff;
    background-color: #1a1a1a;
}
.sidebar-nav li:nth-child(3):before {
    background-color: #ec1b5a;
}
.sidebar-nav li:nth-child(4):before {
    background-color: #79aefe;
}
.sidebar-nav li:nth-child(5):before {
    background-color: #314190;
}
.sidebar-nav li:nth-child(6):before {
    background-color: #279636;
}
.sidebar-nav li:nth-child(7):before {
    background-color: #7d5d81;
}
.sidebar-nav li:nth-child(8):before {
    background-color: #ead24c;
}
.sidebar-nav li:nth-child(9):before {
    background-color: #2d2366;
}
.sidebar-nav li:nth-child(10):before {
    background-color: #35acdf;
}
.sidebar-nav li:hover:before, .sidebar-nav li.open:hover:before {
    width: 100%;
    -webkit-transition: width .4s ease-in-out;
    -moz-transition: width .4s ease-in-out;
    -ms-transition: width .4s ease-in-out;
    transition: width .4s ease-in-out;
}
.sidebar-nav li a {
    display: block;
    color: #ddd;
    text-decoration: none;
    padding: 10px 15px 10px 30px;
}
.sidebar-nav li a:hover, .sidebar-nav li a:active, .sidebar-nav li a:focus, .sidebar-nav li.open a:hover, .sidebar-nav li.open a:active, .sidebar-nav li.open a:focus {
    color: #fff;
    text-decoration: none;
    background-color: transparent;
}
.sidebar-nav > .sidebar-brand {
    height: 44px;
    font-size: 18px;
    line-height: 1.43;
}
.sidebar-nav .dropdown-menu {
    position: relative;
    width: 100%;
    padding: 0;
    margin: 0;
    border-radius: 0;
    border: none;
    background-color: #222;
    box-shadow: none;
}
#menu-toggle {
    z-index: 801;
    position: fixed;
    top: 0;
    right: .5%;
}
#sidebar-wrapper.active {
    right: 320px;
    width: 320px;
    -webkit-transition: all 0.4s ease 0s;
    -moz-transition: all 0.4s ease 0s;
    -ms-transition: all 0.4s ease 0s;
    -o-transition: all 0.4s ease 0s;
    transition: all 0.4s ease 0s;
}
.toggle {
    margin: 0;
}
#to-top {
    position: fixed;
    right: .2%;
    bottom: .2%;
    z-index: 799;
}
.btn-dark {
    border-radius: 0;
    color: #fff;
    background-color: rgba(0,  0,  0,  0.4);
}
.btn-dark:hover, .btn-dark:focus, .btn-dark:active {
    color: #fff;
    background-color: rgba(0,  0,  0,  0.7);
}
.btn-light {
    border-radius: 0;
    color: #333;
    background-color: rgb(255,  255,  255);
}
.btn-light:hover, .btn-light:focus, .btn-light:active {
    color: #333;
    background-color: rgba(255,  255,  255,  0.8);
}
.btn {
    border-radius: 0px;
    overflow: hidden;
	border:none;
}
.btn-success:hover, .btn-success:focus, .btn-success.focus, .btn-success:active, .btn-success.active, .open > .dropdown-toggle.btn-success {
    color: #fff;
    background-color: #449d44;
    border-color: #398439;
    box-shadow: inset 0 0 0 2px #398439;
}
.btn-danger:hover, .btn-danger:focus, .btn-danger.focus, .btn-danger:active, .btn-danger.active, .open > .dropdown-toggle.btn-danger {
    color: #fff;
    background-color: #c9302c;
    border-color: #ac2925;
    box-shadow: inset 0 0 0 2px #ac2925;
}
.btn-primary:hover, .btn-primary:focus, .btn-primary.focus, .btn-primary:active, .btn-primary.active, .open > .dropdown-toggle.btn-primary {
    color: #fff;
    background-color: #286090;
    border-color: #204d74;
    box-shadow: inset 0 0 0 2px #204d74;
}
.btn-default {
    color: #333;
    background-color: #efefef;
    border-color: #ccc;
}
.btn-default:hover, .btn-default:focus, .btn-default.focus, .btn-default:active, .btn-default.active, .open > .dropdown-toggle.btn-default {
    color: #333;
    background-color: #e6e6e6;
    border-color: #adadad;
    box-shadow: inset 0 0 0 5px #adadad;
}
.btn-inverse {
    background-color: #222;
    border-color: #080808;
    color: #9d9d9d;
}
.btn-inverse:hover, .btn-inverse:focus, .btn-inverse.focus, .btn-inverse:active, .btn-inverse.active, .open > .dropdown-toggle.btn-inverse {
    color: #fff;
    background-color: #080808;
    border-color: #333;
    box-shadow: inset 0 0 0 2px #333;
}
.btn-danger:hover, .btn-danger:focus, .btn-danger.focus, .btn-danger:active, .btn-danger.active, .open > .dropdown-toggle.btn-danger {
    color: #fff;
    background-color: #c9302c;
    border-color: #ac2925;
    box-shadow: inset 0 0 0 2px #ac2925;
}
.btn-danger.active, .btn-danger.focus, .btn-danger:active, .btn-danger:focus, .btn-danger:hover, .open>.dropdown-toggle.btn-danger {
    color: #c9302c;
    background-color: #fff;
    box-shadow: inset 0 0 0 2px #c9302c;
    border-color: #ac2925;
}
.panel {
    border-radius: 0;
    margin-top: 0;
}

.accordion-toggle{
	z-index: 801;
    position: fixed;
    top: 0;
    left: .5%;
}

.accordion-toggle:hover, .accordion-toggle:focus{
	cursor:pointer;
}

.nav-btn{
	display:block;
	top: 0px;
	padding-top: 10px;
	padding-bottom: 15px;
	text-align:center;
}

.contact-panel{
	border-radius:0;
	background-color: #d9534f;
	border-color: #d43f3a;
	margin-bottom:0;
	position:fixed;
	bottom:0;
	width:100%;
}

.accordion label{
	color:#fff;
}
.accordion input{
	border-radius:0;
}

.panel-heading,
.panel-heading:hover,
.panel-heading:focus,
.panel-heading.focus,
.panel-heading:active,
.panel-heading.active{
	cursor:pointer;
	background-color: #c9302c;
	border-color: #ac2925;
	outline:none;
}

.accordion-toggle{
	text-align:center;
	width:2.7%;
	min-width: 50px;
}

.accordion-toggle span:after{
    /* symbol for "opening" panels */
	font-family: 'FontAwesome';
	/* essential for enabling glyphicon */
	content:"\f078";
    position:absolute;
    top:0;
    bottom:0;
    right:5%;
	color: white;
	text-align:right;
	float:right;
	vertical-align:middle;
	margin-top:0;
	font-weight:700;
	font-size:120%;
	text-decoration:none;
}

.collapsed span:after{
	/* symbol for "collapsed" panels */
	content:"\f077";
}

.contact-panel{
	border-radius:0;
	background-color: #d9534f;
	border-color: #d43f3a;
    margin-bottom:0;
    position:fixed;
    bottom:0;
    width:100%;
    vertical-align:middle;
}

.btn-dark{
	border-radius: 0;
	color: #fff;
	background-color: rgba(0,0,0,0.4);
}

.btn-dark:hover,
.btn-dark:focus,
.btn-dark:active,
.btn-dark.active{
	color: #fff;
	background-color: rgba(0,0,0,0.7);
}

@media(min-width: 768px){
	.contact-panel{
		width:50%;
	}
}

.social {
	z-index: 801;
	position: fixed;
	top: 10%;
	left: .5%;
	padding: 0;
	margin: 0;
	font-size: 100%;
	width:2.7%;
}
.social ul {
    background: #222;
}
.social ul li {
    list-style: none outside none;
    display: block;
    background: #222;
    padding: 0;
    margin: 0;
}

.nav>li>a:focus, .nav>li>a:hover {
    text-decoration: none;
    background-color: #222;
}
.social i {
	width:100%;
	min-width: 50px;
	height: 100%;
	min-height: 50px;
	color: #FFF;
	background-color: #222;
    font-size: 22px;
    text-align: center;
    padding-top: 12px;
    -webkit-transition: all ease 0.3s;
    -moz-transition: all ease 0.3s;
    -ms-transition: all ease 0.3s;
    -o-transition: all ease 0.3s;
    transition: all ease 0.3s;
}
.social .fa-facebook:hover {
    background: #4060A5;
    border: 1px solid #4060A5;
}
.social .fa-twitter:hover {
    background: #00ABE3;
    border: 1px solid #00ABE3;
}
.social .fa-google-plus:hover {
    background: #e64522;
    border: 1px solid #e64522;
}
.social .fa-github:hover {
    background: #343434;
    border: 1px solid #343434;
}
.social .fa-linkedin:hover {
    background: #0094BC;
    border: 1px solid #0094BC;
}
.social .fa-stack-overflow:hover {
    background: #FEA501;
    border: 1px solid #FEA501;
}
.social .fa-skype:hover {
    background: #00C6FF;
    border: 1px solid #00C6FF;
}
.social .fa-stack-exchange:hover {
    background: #4D86C9;
    border: 1px solid #4D86C9;
}
.social .fa-rss:hover {
    background: #e88845;
    border: 1px solid #e88845;
}
#social-collapse:after {
    font-family: 'FontAwesome';
    content: "\f068";
    float: none;
    position: relative;
    color: white;
}
#social-collapse.collapsed:after {
    content: "\f067";
}
ol.linenums{
    counter-reset:linenumber;
}
ol.linenums li{
    list-style-type:none;
    counter-increment:linenumber;
}
ol.linenums li:before{
    content: counter(linenumber);
    float:left;
    margin-left:-4em;
    text-align:right;
    width:3em;
}

.mt {
    margin-top: 2%;
}

.masthead{
	display: table;
	position: relative;
	min-width: 100%;
	min-height: 100%;
	width: 100%;
	height: 100%;
	background: transparent url("../img/bg.jpg") no-repeat fixed 0px 0px / cover;
	z-index: 800;
	background-color:#000;
}

.text-white{
	color:#fff;
}

.text-vertical-center {
	display: table-cell;
	text-align: center;
	vertical-align: middle;
}
.text-vertical-center h1 {
	margin: 0;
	padding: 0;
	font-size: 4.5em;
	font-weight: 700;
}
section {
	padding-bottom: 5%;
}
.bg-inverse {
	color: #FFF;
	background-color: #333;
}
.centered {
	text-align: center;
}
.mt {
	margin-top: 2%;
}
.text-vertical-center {
	display: table-cell;
	text-align: center;
	vertical-align: middle;
}
.text-vertical-center h1 {
    margin: 0;
    padding: 0;
    font-size: 4.5em;
    font-weight: 700;
}
hr.small {
	max-width: 100px;
}

small{
	color:#eee!important;
}

.page-header{
	text-align: center;    
}

/*page styling*/
.bs-callout {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: #eee;
    border-image: none;
    border-radius: 3px;
    border-style: solid;
    border-width: 1px 1px 1px 5px;
    margin-bottom: 5px;
    padding: 20px;
}
.bs-right-panel{
	padding: 10px;
	width:100%;
	float:none;
	text-align:center;
	margin:0 auto;
}
.bs-right-panel img{
	width:100%;
	margin:0;
	padding:0;
	
}
.bs-callout:last-child {
    margin-bottom: 0px;
}
.bs-callout h4,
.bs-callout h5 {
    margin-bottom: 10px;
    margin-top: 5px;
    font-weight: 600;
}

.bs-callout-danger {
    border-left-color: #d9534f;
}

.bs-callout-danger h4,
.bs-callout-danger h5{
    color: #d9534f;
}

.header-title {
    color: #fff;
}
.title-thin {
	font-weight: 300;
}
.service-item {
	margin-bottom: 30px;
}

/* 
========================
Social Accordion Styling
========================
*/
.nav-stacked > li > a {
    position: relative;
	display: block;
	padding: 0!important;
	margin: 0!important;
}
.nav-stacked > li > a:focus, .nav-stacked > li > a:hover {
	text-decoration: none;
	background-color: #222;
}

.nav-tabs.nav-justified {
    border-bottom: 0 none;
    width: 100%;
}

.nav-tabs.nav-justified > li {
    display: table-cell;
    width: 1%;
    float: none;
}

.container-form .nav-tabs.nav-justified > li > a, .container-form .nav-tabs.nav-justified > li > a:hover, .container-form .nav-tabs.nav-justified > li > a:focus {
    background: #333333;
    border: 0 none;
    color: #ffffff;
    margin-bottom: 0;
    margin-right: 0;
    border-radius: 0;
    padding: 6% 3%;
    line-height: 1.5;
    font-weight: 600;
    font-size: 100%;
    outline: 0 none;
}

.form-control {
    background-color: #090909 !important;
    background-image: none;
    border: none;
    border-radius: 0;
    box-shadow: 0 1px 1px rgba(0,  0,  0,  0.075) inset;
    display: block;
    font-size: 14px;
    height: 34px;
    line-height: 1.42857;
    padding: 6px 12px;
    transition: border-color 0.15s ease-in-out 0s,  box-shadow 0.15s ease-in-out 0s;
    width: 100%;
    color: #inherit !important;
    -webkit-transition: all .8s ease-in-out;
    -moz-transition: all .8s ease-in-out;
    -ms-transition: all .8s ease-in-out;
    transition: all .8s ease-in-out;
    outline: none;
}

.form-control:hover {
    border-color: rgba(100,  00,  00,  0.50);
    background-color: #222222 !important;
    background-image: none;
    color: #inherit !important;
    color: #fff;
    -webkit-box-shadow: 0 0 10px rgba(09,  09,  09,  0.8);
    -moz-box-shadow: 0 0 10px rgba(09,  09,  09,  0.8);
    box-shadow: 0 0 10px rgba(09,  09,  09,  0.8);
}
.form-control:focus {
    border-color: rgba(22,  22,  22,  .75);
    outline: 0;
    outline: thin dotted 9;
    background: #fff !important;
    color: #333 !important;
    -webkit-box-shadow: 0 0 8px rgba(22,  22,  22,  .6);
    -moz-box-shadow: 0 0 8px rgba(22,  22,  22,  .6);
    box-shadow: 0 0 8px rgba(22,  22,  22,  .6);
}

.nocode{
    font-weight:700;
    color:#c7254e;
	font-family: Menlo, Monaco, Consolas, "Courier New", monospace;
}

pre, .nocode{
	font-family: Menlo, Monaco, Consolas, "Courier New", monospace;
}

.prettyprint  code > .atv,
.prettyprint code > .atn,
.prettyprint code > .pun {
	background:#c7254e!important;
	color:#fff!important;
}

blockquote
{
    font-size: 80% !important;
    page-break-inside: avoid;
    border: 3px solid #fff;
    width: 80%;
     -webkit-box-shadow: inset 5px 0px 0px 0px #f60, 8px 8px 8px 2px #888;
        -mox-box-shadow: inset 5px 0px 0px 0px #f60, 8px 8px 8px 2px #888;
         -ms-box-shadow: inset 5px 0px 0px 0px #f60, 8px 8px 8px 2px #888;
             box-shadow: inset 5px 0px 0px 0px #f60, 8px 8px 8px 2px #888;
    
    padding: 10px 20px;
    margin: 0 0 20px;
    font-size: 17.5px;
    border-left: none;
}

.updated{
	display:block;
	position:relative;
	width:100%;
	margin:0;
	padding:.5%;
	text-align:center;
	background:#ededed;
	color:#222222;
}

ins{
	background:#c9302c;
	border-color:#ac2925;
}

.addthis_recommended_vertical{
	background:#c9302c;
	border-color:#ac2925;
}

.mega-dropdown {
  position: static !important;
}
.mega-dropdown-menu {
    padding: 20px 0px;
    width: 100%;
    box-shadow: none;
    -webkit-box-shadow: none;
}
.mega-dropdown-menu > li > ul {
  padding: 0;
  margin: 0;
}
.mega-dropdown-menu > li > ul > li {
  list-style: none;
}
.mega-dropdown-menu > li > ul > li > a {
  display: block;
  color: #222;
  padding: 3px 5px;
}
.mega-dropdown-menu > li ul > li > a:hover,
.mega-dropdown-menu > li ul > li > a:focus {
  text-decoration: none;
}
.mega-dropdown-menu .dropdown-header {
  font-size: 18px;
  color: #ff3546;
  padding: 5px 60px 5px 5px;
  line-height: 30px;
}

.carousel-control {
  width: 30px;
  height: 30px;
  top: -35px;

}
.left.carousel-control {
  right: 30px;
  left: inherit;
}
.carousel-control .glyphicon-chevron-left, 
.carousel-control .glyphicon-chevron-right {
  font-size: 12px;
  background-color: #fff;
  line-height: 30px;
  text-shadow: none;
  color: #333;
  border: 1px solid #ddd;
}

/*
Fade content bs-carousel with hero headers
Code snippet by maridlcrmn (Follow me on Twitter @maridlcrmn) for Bootsnipp.com
Image credits: unsplash.com
*/

/********************************/
/*       Fade Bs-carousel       */
/********************************/
.fade-carousel {
    position: relative;
    height: 100vh;
}
.fade-carousel .carousel-inner .item {
    height: 100vh;
}
.fade-carousel .carousel-indicators > li {
    margin: 0 2px;
    background-color: #f39c12;
    border-color: #f39c12;
    opacity: .7;
}
.fade-carousel .carousel-indicators > li.active {
  width: 10px;
  height: 10px;
  opacity: 1;
}

/********************************/
/*          Hero Headers        */
/********************************/
.hero {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 3;
    color: #fff;
    text-align: center;
    text-transform: uppercase;
    text-shadow: 1px 1px 0 rgba(0,0,0,.75);
      -webkit-transform: translate3d(-50%,-50%,0);
         -moz-transform: translate3d(-50%,-50%,0);
          -ms-transform: translate3d(-50%,-50%,0);
           -o-transform: translate3d(-50%,-50%,0);
              transform: translate3d(-50%,-50%,0);
}
.hero h1 {
    font-size: 6em;    
    font-weight: bold;
    margin: 0;
    padding: 0;
}

.fade-carousel .carousel-inner .item .hero {
    opacity: 0;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s; 
}
.fade-carousel .carousel-inner .item.active .hero {
    opacity: 1;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s;    
}

/********************************/
/*            Overlay           */
/********************************/
.overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: 2;
    background-color: #080d15;
    opacity: .7;
}

/********************************/
/*          Custom Buttons      */
/********************************/
.btn.btn-lg {padding: 10px 40px;}
.btn.btn-hero,
.btn.btn-hero:hover,
.btn.btn-hero:focus {
    color: #f5f5f5;
    background-color: #1abc9c;
    border-color: #1abc9c;
    outline: none;
    margin: 20px auto;
}

/********************************/
/*       Slides backgrounds     */
/********************************/
.fade-carousel .slides .slide-1, 
.fade-carousel .slides .slide-2,
.fade-carousel .slides .slide-3 {
  height: 100vh;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
}
.fade-carousel .slides .slide-1 {
  background-image: url(https://prensaguayanes.files.wordpress.com/2017/05/canchassi.jpg?w=760); 
}
.fade-carousel .slides .slide-2 {
  background-image: url(http://elucabista.com/wp-content/uploads/2019/01/WhatsApp-Image-2019-01-24-at-21.45.37-848x478.jpeg);
}
.fade-carousel .slides .slide-3 {
  background-image: url(http://elucabista.com/wp-content/uploads/2016/10/08_06_deportes_grupo001web-800x478.jpg);
}

/********************************/
/*          Media Queries       */
/********************************/
@media screen and (min-width: 980px){
    .hero { width: 980px; }    
}
@media screen and (max-width: 640px){
    .hero h1 { font-size: 4em; }    
}

/*******************************/
/*         Footer Queries      */
/*******************************/
footer,.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  background:#0c1a1e; min-height:350px; font-family: 'Open Sans', sans-serif;
}
.footerleft { margin-top:50px; padding:0 36px; }
.logofooter { margin-bottom:10px; font-size:25px; color:#fff; font-weight:700;}

.footerleft p { color:#fff; font-size:12px !important; font-family: 'Open Sans', sans-serif; margin-bottom:15px;}
.footerleft p i { width:20px; color:#999;}


.paddingtop-bottom {  margin-top:50px;}
.footer-ul { list-style-type:none;  padding-left:0px; margin-left:2px;}
.footer-ul li { line-height:29px; font-size:12px;}
.footer-ul li a { color:#a0a3a4; transition: color 0.2s linear 0s, background 0.2s linear 0s; }
.footer-ul i { margin-right:10px;}
.footer-ul li a:hover {transition: color 0.2s linear 0s, background 0.2s linear 0s; color:#ff670f; }

.social:hover {
     -webkit-transform: scale(1.1);
     -moz-transform: scale(1.1);
     -o-transform: scale(1.1);
 }
 
 .icon-ul { list-style-type:none !important; margin:0px; padding:0px;}
 .icon-ul li { line-height:75px; width:100%; float:left;}
 .icon { float:left; margin-right:5px;}
 
 
 .copyright { min-height:40px; background-color:#000000;}
 .copyright p { text-align:left; color:#FFF; padding:10px 0; margin-bottom:0px;}
 .heading7 { font-size:21px; font-weight:700; color:#d9d6d6; margin-bottom:22px;}
 .post p { font-size:12px; color:#FFF; line-height:20px;}
 .post p span { display:block; color:#8f8f8f;}
 .bottom_ul { list-style-type:none; float:right; margin-bottom:0px;}
 .bottom_ul li { float:left; line-height:40px;}
 .bottom_ul li:after { content:"/"; color:#FFF; margin-right:8px; margin-left:8px;}
 .bottom_ul li a { color:#FFF;  font-size:12px;}
 
.navbar-brand{
	
}

.navbar-brand>img{
	margin: auto 0px auto 15px !important;
	padding: auto;
}

.navbar-header{
	margin-left:-4%!important;
}

.navbar-left{
	margin-left:38.7px;
}

.navbar-right{
	margin-right:21px;
}

.navbar-inverse{
	border:none;
}

.navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
    border:none;
}
     .navbar{
     border:none;
     border-radius: 0px;
 }
 
 .navbar-footer{
     margin-bottom:0px !important;
     position: static;
     bottom: 0px;
 }
 
 .navbar-footer:after{
     content:"";
     margin:0px auto;
     padding:0px;
 }
</style>
     
     
<body id="page-top" name="page-top" class="active">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
     
    	<nav class="navbar navbar-inverse navbar-fixed-top">



                <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    <li class="hidden-xs"><a href="#" class="add-project" data-toggle="modal" data-target="#add_project">Add Project</a></li>
                                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                    <li>
                                        <a href="#" class="icon-info">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                            <span class="label label-primary">3</span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhUREhIWFhUWGBcVFxgVGBgVFxUYGBUWFxYWFRcYHSggGBolGxgYITEiJSorLi4uFx8zODMsNygtLisBCgoKDg0OGhAQGjAgICUtKy0rNTUtLTUtLTItMy4tLy0tLSsuKy0tLTYtLS0rLS0tLS8tLS0tLSstLS0tLS0rL//AABEIAOcA2gMBIgACEQEDEQH/xAAcAAABBAMBAAAAAAAAAAAAAAADAAECBAUHCAb/xABKEAABAgMEBgcFAwkGBgMAAAABAAIDESEEEjFRBRMUQWFxBgciMoGRoVKxwdHwFkJUIzNDU2KCk6LSFUSSsuLxJGNys8Phc6PT/8QAGAEBAQEBAQAAAAAAAAAAAAAAAAMCAQT/xAAeEQEBAQEAAgMBAQAAAAAAAAAAAQIREzESQVEDIf/aAAwDAQACEQMRAD8A26rNkNCn2YcUzzq6DfmgPEHZPI+5Y9HEcmhlI080XZBmUErJ3U9q7p8PeguiFhujDik2KXm6cDl5oKyyEDujkh7IMyhmMW9kSkKIJ2w0HP4FVFZY7WUO6tFPZRmUB24Ktbd3j8FDancFNg1mO7LigrsxHMLJKubMBWZpVC2p3D68UCtne8PmoWfvD63IzId/tHlRO6CG9oGozQWVj7R3ip7W7h9eKI2CHC8ZzOSAdj73h8ldVV7LnaHKqhtTuH14oBPxPMo9jOPh8VIWYGszWqZ41eG/PggsuwKxiPtLsKIuyDMoFY8Dz+ARI/dPJAe65Qc6phHLuyZSNEFdJXDZRmfRNs7eKCYtDc/ehRhfq2svD3qsrdiwKATYLgQSKCpwVjaG5+inG7p5H3LHILERhcZtEwmhsLTeIkAjWbup7R3TP6qgW0tz9FXfCJJIFDyQVkIHdHJACCCwzdQYZ+5F2lufoo23Ac/gVTQF1DsvUIsE3J3qTw3+5WW4KrbcR4oCOjtIkN9FX2d2XqFCHiOY96ySCtBeGCTqHFPEihwkMShWvveHzULP3h9bkD7O7L1CPDihounEKwsfaO8UB4zw8SbU4oOzuy9Qnsc73gfgryADY7QJTwUIxvyu1lju96rvxPMqxYt/h8UAhAdl7lZ2hufoiuwKxiCxFBeZtruyTMhFpBIoEWx908/gFON3SgbaG5+ibXs+pqkkgyWrGQ8lWtVCJU5UTbWcgpNGsqaSQBhuMxXeFduDIeSAbPdrPCvko7WcggjaKOkKckoBm4T+qIgh3+1OSRhXO1Ocv9kB7gyHkqUUkEyO9F2s5BOIF7tTxqgjZamtab6q1qxkPJVy3V1FZ0XkulfWNZrFOH+ejD9Gw90/8x+DOVTwXZOuW8elLjmVWtWnbJZ57TaIUM7g97Q48mmp8AtFae6fW61TGt1LD9yDNlP2n953mBwXl+O81PE5lbn8/wBYu/xv219aOi2zDYj3n9iE8eReGrEu63LGD+atR4hsL4xVphJa+Ec+db2sXWto0jt65nF8Iu/yFyz9i6X6OtAlBtUIuODSdW88mvk70XNSRCeOHzrqa+cyrkBoLQSFzJoXpPa7JLUR3Bo+47tw+Vx1G+Eito9FetqDElCtbBBfhrASYTuc6w/GY4rFxY1NytkWpoApSu5VL5zKPDi60CREiLwIqCN0sxVT2TisNisYJCgwQbWJSlTHCijtJFJYUTg6zGkvigAHHMq/cGQ8lXNn4phajkgVqoaUpuohwjNwmUYM1lTTckYF3tTwqgPcGQ8k+rGQ8lW2s5BNtRyQD1LsiiwDdxorSq23EckBXxWkEA1IVXUuyKaF3hzHvWRQV4Dw0SNClGiBwIBmUG1d7yTWXvDx9yBtS7IqwI7Wt7RAkKzoBLGZR3FaO60emxjPfY7M8iE1xEV7f0pFCwEHuAzB9ojIV7J1y3i51g9ZRiX7NYnOa0G66MKF/tCEZzaN17E1lKhOrUkleTiNvSSSW3upzoey6NIR2zcT+QacGio1svaJBlkK76LeQk6850d6rbZaGiJHOzsMjJzS6KRmYcxdp7RnwXrGdT9ilW12ifDVAeRhn3rZ8TA8isao3dVmI1VpjqgiN7Vkj60D7kQXHHMB4oTzAHFa40hY4kGI6FFhuhvbRzXiRB+IO44HcuqbH3fFea6w+iUO32ckAC0QwTCfhX9W4+w70Nees7/Wbj8c5pKT2EEggggkEGhBFCDxBUVVN6roT05j6PcG1i2c96ET3Z4uhE9075YHhOY37ofTkC1Qmx4MQOY7zB3tcPuuG8FcsLP9DulESwRr7ZuhOkIsP2h7Tcnjcd+B4Y1nredcdFOhOnOSnA7M50mn0da2R4TIsJwcx7Q5rhgQR7+G5PbBh4/BRVE1rZYqrqXZFQGKyaCtZ3Bok6lZqUSKCCAalCtmI5fEocDvDmgWpdkUtS7IrIJkGP1rsz5o9mF6d6vNNsnH0Th2rpjOuSAkSEACQKgFVNa7M+aPtF7syxpjmm2Tj6IJ2docJkTPFPHYAJgSP/tD1lzsynxwSMa8LppxJwlVB4PrS6VOstn1EN5EaOCJgmbIeD3jImd0cydy0aAsz0t00bZa4ton2SbsPhCbMM5T73NxWHV8zkR1e0kkklplOBBL3Nhtxe4MHAuIaPUrqVtnbBYyFDF1rGhgApRoAb6LlyyR9XEZElO49r5Z3XB0vRdTAiMA5pkJTBxmDUHy96l/RT+aDYhJAmVc1LcggbNKs8Kp9r/Z9f8A0pqIWg3TIUEtyaE4kgEkhEuX+1huzTam72pzkg5+609HiBpOOGiTYl2MAN19ovebw4+K8ovXdbNtEXScWX6NsOH4ht4+RfLwXkF6J6QvsklIupKXiorrjY3VD0odCi7DEcdXFJMKvciYlvAOH8w/aW57N2p3qyliuVIby0hzSQ5pDmkYggzBHEEArpXolpoWmyQbSJTiN7YFLr2ktiDleB8JKW59q4v0zroTcgqWtdmfNH2qdJeqbZOPoptpWZt4TdWu9TiwwASBVCvXOzjOs8OCQjXuzLHfNAHWuzKWtdmfNG2Tj6JbJx9EFjWt9oear2ntESryqqytWM0KAMNhBBIOIVzXN9oeaaLUHkfcqCA9oEzMVHCq8t1i6QdZtHx3iYc9upburFNwkcQ0uPgvYWTurWXX1apQbLB9qI+J/DZd/wDKtZn+ua9NNJJJ1dAySSSBLeHU90qZGgbHFcBGggBsz+chCjSMy3ungGnetHolmtD4b2xIbi17Tea5pkWnMFZ1Ox2XldXviNINRhmqVw5HyWrOjnWxINZbYRJEvysECvF8MkSPFp8AvaM6z9FET2kjgYMef/bUrmqzUepszgBImVd9FiemPSSDYrM+M9wLu7DZOsR+5o4bydwBK8Z0g62rK2ezMfGdKhcDCYOd7tHldHNa50vpGNaYjbVa4szUNbIhsP7wY1oJlOhrUyqaV7Mfrl1+MRaBFi3475kucXucaXi4kucBlM+EwqqsWu1F5oJNyEhynLH4KurJEkkkgS2x1JaRJZaLKZm65sZu+jhceBwBaw/vFanXt+py1XNJw2z/ADsOLD/lEX/xrOvTWfbeAYcj5K9rW+0PMJ3YFY1QWWLSJmlabqqEJpBBIICPYsDz+ARI/dPJAta32h5p9c32h5hY5JBeMBuXqUCN2TSk/repC0jIpOGsqKSzQDZFcSATQ0KtbO3L1KBs5FaUr5Ke1jIoBxXlpk0yC1D15RSYtkBODI3q6FP3BbgdDL+0Kc1qXr1sha6yP3SjN8ZwiPitY9s79NWJJJK6KTnkiSiklNAkexWKLGdcgwnxXezDY55HMNBkFsToH1YOtDW2m2TbDNWQplrnjc6IRVjTuAqcxv23YLHDsrBDhw2sZubDAaB4ZrF3I3Mdc+s6AaUImLFElxdCb6OeCl9gtJ/g3f44P/6Los2kGkjWihsp4eqz5K1440NYOgekWAxDZIhdKga+DTHffMzQbpV31CwOnNGWuFI2mzxIQAkC5jgzweZtJwGO4LplsS52TXfRNEiB4LJY0rUeKeQ+DlJJbt6YdVcOM10WyBsKNU3BSFE4S/Ru4imY3rS1ps74b3Q4jSx7CWua4SLSMQVualTs4GkkktOEvSdXMUt0lZZe24f/AFvHxXm16fqys5fpSzAbjEceQgxPjJcvp2e3QQjuz9ytbO3L1KBspzCntYyK866Ec3TJtBj9TUYcQkgE0Km5usqKbqphALe0ZUqgPs7cvUpbO3L1KGbWMio7QMigryVqxmQM1ZVO24jkgsRXC6a7j7lQkpQu8OY96yKCvZnANqV4LrusessDIo/QxmOP/S8Ohn+ZzPJe2tY7XksdpjRYtVni2Y01sN7QfZcQbrvB0j4LsvK5Z2OZ0lKJDc0lrhJzSWuBxa4GTgeIIIUV6ECXtOq/o0LXaDFiNnBgScQcHxD3GnMCV4jg0YFeLXQvVFo8QdGQnS7UYvjO43nEN/kaxZ3eRrM7XsQ4ZqtbDh4quVZsQx8PioLK7BUcwsjeGYTRMDyKxqA9qq7w+ajA7w+tysWPu+Klae6fregJeGYWquuTo2IjDbobe3DkIsvvw6AO5tJFfZJyC2ErEaytjQHQXibIjHMcM2uBBHkV2Xlcs7HKkkynGhFjnQ3YsJYebTI+oUF6ECWxeo6xXrbFjHCFBI/eiOAb/Kx610t4dUuiNTYBGcJOtDzE/cb2YfgZFw/61nd/xrM/1sZzhLFY6STcVk1BZWshkDz+ARIzgWmRVe2d4cviUOB3hzQRklJZNJBR2l2aJCbfq7cobK7gpQ3XKO35IJvgAAkYivkgbQ7NGdHBEqzNB4oeyu4ICQ4YeLxxSiQg0XhiEocQMF048EnxQ4XRic/NBozrb0EYNq2po/J2iplg2KB2h+8O1zvrwa6a6QdHW2yzvs8TB4oRixwq144g+dRvXOWl9FxbLHfZozZPYZHJw+69pP3SKg+e9WxexLc5VJdGdBI5GjrIB+oh/wCVaFh2QMY50QAndkDSQo4GszupdM8JLcPVRpkWqymFQRIDiC0kk3HkuY6uIqW/u7qLm/Rj298LM3ihxex3d6ILS3ihxO33d2akqgI7jQnGiPsreKCLO4VpSqNtTeKAUR5YZNwxTMilxunAp4jC83hhhVMyEWm8cAgNszeKE6IWm6MAi7U3isR0l0m2y2eLa3yusbMA4udgxg4l0h4oOctOH/irR/8APG/7r1STveXEucZkkknMkzJ80wGVeAqTwA3lel52U6NaFdbLTDs7ZgOM3kfchir3eVBxIXS1igNuiGBJrAGtAoAAJADwAXj+rboY6xwNZEA18YAvn+jbi2HzGJ45yC9nD7E578lHd7VszkTdZ2jNB2l2aLtAOaHsruCw0nCZfE3clJ8ENExiFGG+5Q86KTo4cLonMoA7Q7P0TbS76ClsruCWyu4ILqp23EclXVuxihQVoXeHMe9ZJDjDsnkfcsegNau95JrL3h4+5WLIOyntI7J8PegKSvHdNOjDLYLwutjw56p5/wAj/wBme/d5g55ZCAOyOSS8HK+l4EaHFfDjtLIjT2mmkspSoRLAic0TQOmY1jjttEB0ntpWrXNOLHje0yHkCJEBdB9Neilnt0MCK2T20ZFbIPZjT9pubTTkarRnSfoharCSYjb8LdGYCWcL++GeBpkSrZ1Kjc2NpaB6yLFaGgRXizxN7Yh7E992L3Zc5HgvV2LT9kkTtUDd+lh/1LmJNJcv847N11K/T9jkf+KgYfrYf9Sof23ZfxMD+LD/AKlzSGp5J43fI6gsunrIBW1QMf1sP+pSj6fsl0ytUD+LD/qXLkkpJ4zyOg9K9ONH2dpLrSx53MgkRXE5dmg8SAtR9NemUbSDmgi5AYSYcMGdcL7zvfI8gCQN5PmQr+h9DR7W/V2eGXnfKjWcXuNGjn4TXZmRm6tUFtzq36CGEW2y1tlExhQz+j/bePbyH3d9e7mugPV7BsjhGjSjWgCYMuxCP/LBxd+0a5AVWwZLOt/Uazj7qDXUHJAtgw8UB+J5lHsQx8PipqK7cVk1FwosagsWzvDl8ShwO8OasWPA8/gESOOyUBE01jEkFzZBmVB51dBvzRdpbn6FCjC+ZtrLw96BhHJoZVp5omyDMoLYTgQSKCpwVjaW5+hQBfELDdHqk2KX9k4HLzTRWFxm0TCUOGWm8RIBAXZBmUMxy3siUhRG2lufoq74RJJAoeSCbHX6HnRSdY2kSMyDQgyr6KEEFhm6gwz9yNtLc/QoPAaf6trFaCXQ2mzvzhdw84Z7I/durxGkOqm3MmYJhxwPZOref3X9kf4lu0wHZe5FgG5O9SeG/wBy1N2M3Mrmy2dEdIQu/Yo/7sMxB5w5hUDom0/ho/8ACif0rqV0dpEgcaKvqHZeoWvIz43NVl6NW2J3LHaDx1UQD/E4ALPaP6sNJRKvhMgtzivbOXBsO8fAyW/YLw0SdQ45p4kUOEhiU8ld+Eaw0J1UWeGQ60xHRz7DZwofjI3z5jktjaO0XChwwyExsNgwbDAa0eACls7svUI8OKGiRxCxba1JIg9tyo5VUdqdwRIzw8SbU45IOodl7lx0cWYGszWqi8avDfnwRGx2gSmhxjfldrLHd70ENpdhRF2QZlAEB2XuVnaW5+hQBiO1dBXfX64JmRy7smgNE8ZpeZtru+pqLIRBBIoOSA2yDMpbIMypbS3P0S2lufoUFFW7FgUfVjIeSqWkyNKckFmOaHkfcsepwyZiu8K/qxkPJAOyd1Pau6fD3qtaDJ0hTklZzNwBrz5IArIQO6OSlqxkPJUYriCRPegsW3Ac/gVTR7LU1rTfVW9WMh5IHbgqtt3ePwQC85lWLIJznXDGqCuzEcx71kVB7BI0GCo3zmfNAW197w+ahAPaH1uRrPIitTPfVSisk0mSAwVG0d4qN85nzVyA0FoJCAFj73h8ldVe1CQpSu6iq3zmfNAz8TzVmxb/AA+KMxgkKDyQLXSUqY4UQWn4LGKQccyshqxkPJAGxYHn8AiR+6eSr2qhpSm6ihCcS4TKASSyWrGQ8ktWMh5IKptRyTtbfrhJC1LsijWc3Z3qIEbPd7U8K+SbazkEWJFaQQDUiSq6l2RQGEK/2pySMG52pzl/spQHhokaFKNEBEgZlBDazkE4s97tTxqgal2RVuHFAABNQgEWauuM6fXkm2s5KdodeEm1rNA1LsigNsvH0TH8nxn8EYRm5oNo7UrtZIFtJNJY0SNl4+iE2E4EUVzXNzQV79ymO9Pri/s4TTRxeM21CjCYQQSJBATZOPom1xb2ZTkj69uaqxWEkkCYQTD9Z2cN6fZOPoowBdM3UEkfXtzQA2kiksKJx+U4S+P+yE6E6eCLZ+zO9SaBzZJVn6KO1nII5jNzVPUuyKA4ZrK4bvrzSMC72p4VT2d10SdQzUosUEEA1QD2s5BNtZyCFqXZFPqXZFBkFUtuI5LQOiOk+lbRFEJtue2jnue9zWshsY0ufEe67RoAKyGmrdpSGW6nSEW1BxLQIcN7YkwC6kJzLzmEAkPbMG6cKTDdELvDmPesiuerVpPTkN72F9rJY4tJbDc5puvLJtdcq0uFDvU2aX06WvdrLUAwEuvMLTIBxcRNlZXa76ihQbztnePglZO8PH3FaKtGk9ONDHOiWqcQua1tx1+80TLS25MG7NwG8AnBQi6X04yrn2sSAM7hIkWCJ3g0juGZyrPAoOh1jo3ePNc9fbnSX42L5t+SiemmkfxkXzHyQdGWPE8viFcXNDemukRhbIvmPkn+3GkvxsXzb8kHQZVix7/D4rnL7aaR/GRfMfJO3ptpIYWyL5j5IOlX4HkVjVz79uNJfjYvm35KP2z0j+Mi+Y+SDpGx93xUrT3T9b1za3pvpIYWyL5t+Sc9N9JH++xfNvyQdBK/Z+6FzZ9s9I/jIvmPkpDpvpIf32L5t+SDo21gy4TVRc+/bXSRptkU8KY+Sk7pZpQY2mON+H+lB0kzAclXtu7x+C56+1ul53dptExuu1lXdd4HySd0o0ucY9py7pxO7u8PRBvxuKya5pPTDSQMtqjTpSk64UkjDpfpb8TaPLhP2cgT4IOg7Z3hy+KHA7wXP/2q0sf7xaDL9n/SmPSnSoqbRaBIyq3eMfuoOkklzbE6ZaVaJutUcDMgAerUP7caS/GxfNvyQYrRWkDAeXABzXMfCiMJID4cRhZEZeFWzBoRgQDwWZ0x0udGc10OFq5NEMiK/abzA17bhD2BlyT3TBad1aJJIIu6bW0gTiNMQODhFMOGYjZNe2QN3eIjgTjIkbyo2bpnbGXBfYWMc0hmqhNZJok1gDWiTQKCWEhKRCSSAbultrwvsDZFoZqoWrDS69K5cu4knD7xzTP6W2wznFBLm3HEw4V5zbpbdc65MiRJ5knFJJBg06SSBJJJIEkkkgSSSSBJJJIEkkkgTTKoxCs/2jGulutfdIkReJocRjgd+aSSCJtkWc9Y+dK3nTpOVZ7pnzOacW+MMIsT/G75p0kATGdev3jemHXpm9MYGeM+Ksf2paP18X+I/wCaZJBL+1bRjr4uffd7pqP9px/18XL84/DLFJJAONa4jwA+I9wGAc4uAlOUgTTE+aCkkg//2Q==" alt="user">
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <span>JS Krishna</span>
                                                    <p class="text-muted small">
                                                        me@jskrishna.com
                                                    </p>
                                                    <div class="divider">
                                                    </div>
                                                    <a href="#" class="view btn-sm active">View Profile</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>



			<div class="container-fluid">
            
				<div class="navbar-header">                   
					<a  id="menu-toggle" href="#" class="nav-btn btn-dark btn-lg toggle">
						<i class="fa fa-bars" style="color:#fff;"></i>
                    </a>
                </div>
                
				                     
		</nav>
		<nav id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<a id="menu-close" href="#" class="btn btn-danger pull-right hidden-md hidden-lg toggle"><i class="fa fa-times"></i></a>
				<li class="sidebar-brand">
					<a href="#top">Soldier-up <strong>Designs</strong></a>
				</li>
				<li>
					<a href="/" title="Go to Top">Home</a>
				</li>
				<li>
					<a href="/equipo/eliminar" title="eliminar equipo">eliminar equipo</a>
				</li>
				<li>
					<a href="/equipo/index" title="ver equipos">ver equipo</a>
				</li>
				<li>
					<a href="/equipo/crear" title="registrar equipo">registrar equipo</a>
				</li>
                <li>
                    <a href="/equipo/todos" title="ver todos los equipos en el sistema">ver todos los equipos</a>
                </li>
				<li>
					<a href="/cerrar" title="Our Blog">cerrar sesion</a>
				</li>

				<li>
					<a data-toggle="modal" data-href="#loginModal" data-target="#loginModal" style="cursor:pointer;"> Hosting</a>
				</li>
			</ul>
        </nav>
    </div>


    
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="home.html"><img src="http://jskrishna.com/work/merkury/images/logo.png" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <img src="http://jskrishna.com/work/merkury/images/circle-logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="#"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Workflow</span></a></li>
                        <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Statistics</span></a></li>
                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Calender</span></a></li>
                        <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Users</span></a></li>
                        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Setting</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </nav>
                            <div class="search hidden-xs hidden-sm">
                                <input type="text" placeholder="Search" id="search">
                            </div>
                        </div>

                        
                    </header>
                </div>
                <div class="user-dashboard">
                    <h1>Hello, JS</h1>
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12 gutter">

                            <div class="sales">
                                <h2>Your Sale</h2>

                                <div class="btn-group">
                                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span>Period:</span> Last Year
                                    </button>
                                    <div class="dropdown-menu">
                                        <a href="#">2012</a>
                                        <a href="#">2014</a>
                                        <a href="#">2015</a>
                                        <a href="#">2016</a>

                                          <!--<a href="#">
                <li class="item-menu navbar-m2p">
                    <span class="glyphicon glyphicon-home"></span> 
                    <span class="menu">Trang Chủ</span>
                </li>
            </a> 
            <a href="#">
                <li class="item-menu">
                    <span class="glyphicon glyphicon-book"></span> 
                    <span class="menu">Manga</span>
                </li>
            </a>
            <a href="#">
                <li class="item-menu">
                    <span class="glyphicon glyphicon-pencil"></span> 
                    <span class="menu">Light Novel</span>
                </li>
            </a>    
            <a href="#">
                <li class="item-menu">
                    <span class="glyphicon glyphicon-list"></span> 
                    <span class="menu">Danh Sách</span>
                </li>
            </a> 
            <a href="#">
                <li class="item-menu">
                    <span class="glyphicon glyphicon-envelope"></span> 
                    <span class="menu"> Liên Hệ</span>
                </li>
            </a>
            <a href="#">
                <li class="item-menu">  
                    <span class="glyphicon glyphicon-credit-card"></span> 
                    <span class="menu">Ủng Hộ</span>
                </li>
            </a> 
            <li class="item-menu"> 
                 <span class="glyphicon glyphicon-search"></span> 
                 <input class="t_search" type="text" placeholder="Tìm Kiếm">
            </li>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-12 gutter">

                            <div class="sales report">
                                <h2>Report</h2>
                                <div class="btn-group">
                                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span>Period:</span> Last Year
                                    </button>
                                    <div class="dropdown-menu">
                                        <a href="#">2012</a>
                                        <a href="#">2014</a>
                                        <a href="#">2015</a>
                                        <a href="#">2016</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <!-- Modal -->
    <div id="add_project" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Add Project</h4>
                </div>
                <div class="modal-body">
                            <input type="text" placeholder="Project Title" name="name">
                            <input type="text" placeholder="Post of Post" name="mail">
                            <input type="text" placeholder="Author" name="passsword">
                            <textarea placeholder="Desicrption"></textarea>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="cancel" data-dismiss="modal">Close</button>
                    <button type="button" class="add-project" data-dismiss="modal">Save</button>
                </div>
            </div>

        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>

        
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        
        <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
        <script>
    		$(document).ready(function(){
				$("[rel='tooltip']").tooltip();
			});
        </script>
        <!-- Vendor js -->
        <script src="{{URL::asset('assets/app/js/vendor.min.js')}}"></script>

        <script src="{{URL::asset('js/bootstrap.js')}}"></script>

        <!-- Plugins js-->
        <script src="{{URL::asset('assets/app/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{URL::asset('assets/app/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script src="{{URL::asset('assets/app/libs/jquery-vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

        <!-- Dashboard 2 init -->
        <script src="{{URL::asset('assets/app/js/pages/dashboard-2.init.js')}}"></script>

        <!-- App js-->
        <script src="{{URL::asset('assets/app/js/app.min.js')}}"></script>
        

</html>
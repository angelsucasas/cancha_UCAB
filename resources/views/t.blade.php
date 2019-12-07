<!DOCTYPE html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!-- Based on http://bootsnipp.com/snippets/featured/responsive-sidebar-menu -->

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<!------ Include the above in your HEAD tag ---------->
<style>
body,html{
    height: 100%;
}

/* remove outer padding */
.container-main .row{
    padding: 0px;
    margin: 0px;
}

/*Remove rounded coners*/

nav.sidebar.navbar {
    border-radius: 0px;
}

nav.sidebar, .container-main{
    -webkit-transition: margin 200ms ease-out;
    -moz-transition: margin 200ms ease-out;
    -o-transition: margin 200ms ease-out;
    transition: margin 200ms ease-out;
}

/* Icons */
.menu-icon {
    font-size: 20px;
}

/* Add gap to nav and right windows.*/
/*.container-main{
    padding: 10px 10px 0 10px;
}*/

/* Colors */
.navbar-m2p {
    background-color: #00464f;
    border-color: #00464f;
}
.navbar-m2p span, .navbar-m2p a {
    color: #FFFFFF;
}
.active .dropdown-toggle {
    background-color: rgba(126, 169, 39, 0.3);
    border-color: rgba(126, 169, 39, 0.3);
}
.nav .open > a {
    background-color: rgba(126, 169, 39, 0.3);
    border-color: rgba(126, 169, 39, 0.3);
}
.nav li > a:hover, .nav .open > a:hover,
.nav li > a:focus, .nav .open > a:focus,
.nav li > a:active, .nav .open > a:active {
    background-color: rgba(126, 169, 39, 0.3);
}
.nav .open ul > li {
    background-color: rgba(126, 169, 39, 0.4)
}
.navbar-m2p .navbar-nav .open .dropdown-menu>li>a {
    color: #FFFFFF;
    padding: 10px;
}
/* borda menu active */
.navbar-m2p .navbar-nav .active a {
    margin-left: -1px;
    border-left: 5px solid #7ea927;
}
/* Hamburger */
.navbar-toggle {
    background-color: transparent;
    border: 1px solid rgba(126, 169, 39, 0.4);
}
.navbar-toggle .icon-bar,
.navbar-toggle .icon-bar + .icon-bar {
    background-color: #7ea927;
}

nav:hover .forAnimate{
    opacity: 1;
}

.navbar-m2p .dropdown-menu {
    padding: 0px;
}

.nav li.separator {
    padding: 10px 15px;
    text-transform: uppercase;
    background-color: rgba(0, 0, 39, 0.2);
    color: rgba(208, 208, 207, 0.4);
}

/* .....NavBar: Icon only with coloring/layout.....*/

/*small/medium side display*/
@media (min-width: 768px) {

    /*Allow main to be next to Nav*/
    .container-main{
        position: absolute;
        width: calc(100% - 40px); /*keeps 100% minus nav size*/
        margin-left: 40px;
        float: right;
    }

    /*lets nav bar to be showed on mouseover*/
    nav.sidebar:hover + .container-main{
        margin-left: 300px;
    }

    /*Center Brand*/
    nav.sidebar.navbar.sidebar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
        margin-left: 0px;
    }
    /*Center Brand*/
    nav.sidebar .navbar-brand, nav.sidebar .navbar-header{
        text-align: center;
        width: 100%;
        margin-left: 0px;
        font-size: 25px;
        line-height: 27px;
    }

    /*Center Icons*/
    nav.sidebar a{
        padding-right: 13px;
    }

    /* Colors/style dropdown box*/
    nav.sidebar .navbar-nav .open .dropdown-menu {
        position: static;
        float: none;
        width: auto;
        margin-top: 0;
        background-color: transparent;
        border: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    /*allows nav box to use 100% width*/
    nav.sidebar .navbar-collapse, nav.sidebar .container-fluid{
        padding: 0 0px 0 0px;
    }

    /*gives sidebar width/height*/
    nav.sidebar{
        width: 300px;
        height: 100%;
        margin-left: -260px;
        float: left;
        z-index: 8000;
        margin-bottom: 0px;
    }

    /*give sidebar 100% width;*/
    nav.sidebar li {
        width: 100%;
    }

    /* Move nav to full on mouse over*/
    nav.sidebar:hover{
        margin-left: 0px;
    }
    /*for hiden things when navbar hidden*/
    .forAnimate{
        opacity: 0;
    }
}

/* .....NavBar: Fully showing nav bar..... */

@media (min-width: 1330px) {

    /*Allow main to be next to Nav*/
    .container-main{
        width: calc(100% - 300px); /*keeps 100% minus nav size*/
        margin-left: 300px;
    }

    /*Show all nav*/
    nav.sidebar{
        margin-left: 0px;
        float: left;
    }
    /*Show hidden items on nav*/
    nav.sidebar .forAnimate{
        opacity: 1;
    }
}
</style>
  
<nav class="navbar navbar-m2p sidebar" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                Foobar<b>Company</b>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <!-- Dashboard -->
                <li class="active open">
                  <a href="#">
                      <span class="pull-right hidden-xs showopacity glyphicon material-icons">av_timer</span> Dashboard
                  </a>
                </li>
                <!-- Banner -->
                <li class="">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons">burst_mode</span>
                        Banners <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li><a href="#"><i class="material-icons">add</i> Add</a></li>
                        <li><a href="#"><i class="material-icons">sort</i> List</a></li>
                    </ul>
                </li>
                <li class="separator">Content</li>
                <!-- Page -->
                <li class="">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons">description</span>
                        Pages <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li><a href="#"><i class="material-icons">add</i> Add</a></li>
                        <li><a href="#"><i class="material-icons">sort</i> List</a></li>
                    </ul>
                </li>
                <!-- Blog -->
                <li class="">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons">chat_bubble_outline</span>
                        Blog <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li><a href="#"><i class="material-icons">add</i> Add</a></li>
                        <li><a href="#"><i class="material-icons">sort</i> List</a></li>
                    </ul>
                </li>
                <!-- Tags -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon material-icons">label</span>
                        Tags <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li><a href="#"> <i class="material-icons">add</i> Add</a></li>
                        <li><a href="#"> <i class="material-icons">sort</i> List</a></li>
                    </ul>
                </li>
                <li class="separator">System</li>
                <!-- Users -->
                <li class="#">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons">group</span>
                        Users <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li><a href="#"><i class="material-icons">add</i> Add</a></li>
                        <li><a href="#"><i class="material-icons">sort</i> List</a></li>
                    </ul>
                </li>
                <!-- Exit -->
                <li>
                    <a href="#">
                        <span class="menu-icon pull-right hidden-xs showopacity glyphicon material-icons">exit_to_app</span> Exit
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    function htmlbodyHeightUpdate() {
    var height3 = $(window).height();
    var height1 = $('.nav').height() + 50;
    height2 = $('.container-main').height();
    if (height2 > height3) {
        $('html').height(Math.max(height1, height3, height2) + 10);
        $('body').height(Math.max(height1, height3, height2) + 10);
    } else
    {
        $('html').height(Math.max(height1, height3, height2));
        $('body').height(Math.max(height1, height3, height2));
    }

}
$(document).ready(function () {
    htmlbodyHeightUpdate();
    $(window).resize(function () {
        htmlbodyHeightUpdate();
    });
    $(window).scroll(function () {
        height2 = $('.container-main').height();
        htmlbodyHeightUpdate();
    });
});
</script>
 </html>
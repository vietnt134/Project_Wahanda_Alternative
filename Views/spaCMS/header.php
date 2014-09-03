<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />

        <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
        Remove this if you use the .htaccess -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>WA Connect</title>
        <meta name="description" content="" />
        <meta name="author" content="TrongLoi" />

        <meta name="viewport" content="width=device-width; initial-scale=1.0" />

        <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
        <link rel="shortcut icon" href="" />
        <link rel="apple-touch-icon" href="../img/ico/Cat-Brown-icon-72px.png" />

        <!-- Chèn link CSS -->
        <style type="text/css">
            @font-face {
                font-family: 'OpenSans';
                src: url("https://www.google.com/fonts#UsePlace:use/Collection:Open+Sans+Condensed:300,300italic,700");
            }

            * {
                font-family: "OpenSans";
            }
        </style>
        <link rel="stylesheet" href="<?php echo ASSETS ?>plugins/bootstrap/css/bootstrap.min.css" type="text/css"  />

        <link rel="stylesheet" href="<?php echo ASSETS ?>plugins/font-awesome/css/font-awesome.min.css" type="text/css"  />

        <link rel="stylesheet" href="<?php echo ASSETS ?>css/spaCMS/spaCMS.css" type="text/css"  />

        <!-- <link rel="stylesheet" href="<?php echo URL ?>public/assets/css/spaCMS/tooltip.css" type="text/css"  /> -->

        <?php
            if(isset($this->style)){
                foreach ($this->style as $style) {
                    echo '<link rel="stylesheet" type="text/css" href="'. $style .'" />';
                }
            }
        ?>
    </head>

    <body id="dashboard-module">
        <!-------------------------------------------------- Navbar -------------------------------------------------->
        <div class="clearfix" id="header">
            <div id="venues">
                <div class="current">
                    <div class="icons-arrow-bottom"></div>
                    <div class="name" style="position: absolute; height: 15px; top: 50%; margin-top: -7.5px;">
                        <div>
                            Sunspa Resort
                        </div>
                    </div>
                </div>
                <ul class="hidden"></ul>
            </div>
            <ul id="nav1">
                <li class="" id="nav-notifications">
                    <span class="notification-badge"> <span class="icons-notification"></span> <span class="notification-count">1</span> </span>
                    <div class="notification-list hidden">
                        <ul class="ddown radius-bottom">
                            <li class="ddown-title">
                                Items need action:
                            </li>

                            <li>
                                <a href="./settings?prevalidate=fulfillment#venue/285925/notifications-settings/fulfillment"> <span class="notification-item">Fulfillment address not set</span> </a>
                            </li>
                        </ul>
                        <div class="notification-badge-wrapper">
                            <span class="notification-badge"> <span class="icons-notification"></span> <span class="notification-count">1</span> </span>
                        </div>
                    </div>

                </li>
                <li id="nav-home">
                    <a title="Home" href="./home"> <div class="icons-nav-home"></div>
                    <div class="title">
                        Home
                    </div> </a>
                </li>
                <li id="nav-calendar">
                    <a title="Calendar" href="./calendar"> <div class="icons-nav-calendar"></div>
                    <div class="title">
                        Calendar
                    </div> </a>
                </li>
                <li id="nav-menu">
                    <a title="Menu" href="./menu"> <div class="icons-nav-menu"></div>
                    <div class="title">
                        Menu
                    </div> </a>
                </li>
                <li id="nav-reports">
                    <a title="Reports" href="./reports"> <div class="icons-nav-reports"></div>
                    <div class="title">
                        Reports
                    </div> </a>
                </li>
                <li id="nav-settings">
                    <a title="Settings" href="./settings"> <div class="icons-nav-settings"></div>
                    <div class="title">
                        Settings
                    </div> </a>
                </li>
            </ul>
            <div class="ddown-menu" id="user">
                <div class="user-wrapper">
                    <a class="current" href="javascript:;" data-toggle="dropdown">
                    <div class="person-pic-small">
                    </div> <div class="icons-arrow-bottom"></div>
                    <div class="name">
                        <div>
                            <?php
                                echo Session::get('user_email');
                            ?>
                        </div>
                    </div> </a>
                    <ul id="logout" class="ddown" role="menu" style="display:none;">
                        <li>
                            <a href="<?php echo URL . 'spaCMS/logout' ?>"> <div class="icons-logout"></div> Logout </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
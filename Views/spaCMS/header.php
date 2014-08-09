<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />

        <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
        Remove this if you use the .htaccess -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>Quản lý vé máy bay</title>
        <meta name="description" content="" />
        <meta name="author" content="TrongLoi" />

        <meta name="viewport" content="width=device-width; initial-scale=1.0" />

        <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
        <link rel="shortcut icon" href="" />
        <link rel="apple-touch-icon" href="../img/ico/Cat-Brown-icon-72px.png" />

        <!-- Chèn link CSS -->
        <link rel="stylesheet" href="<?php echo URL ?>public/css/fontawesome/css/font-awesome.css" />

        <link rel="stylesheet" href="<?php echo URL ?>public/css/bootstrap.min.css" type="text/css"  />

        <link rel="stylesheet" href="<?php echo URL ?>public/plugins/select2/select2.css" type="text/css"  />
        <link rel="stylesheet" href="<?php echo URL ?>public/plugins/select2/select2-metronic.css" type="text/css"  />

        <link rel="stylesheet" href="<?php echo URL ?>public/plugins/data-tables/DT_bootstrap.css" type="text/css"  />

        <link rel="stylesheet" href="<?php echo URL ?>public/css/style-metronic.css"/>
        <link rel="stylesheet" href="<?php echo URL ?>public/css/plugins.css"/>

        <link rel="stylesheet" href="<?php echo URL ?>public/css/admincp/style.css"/>
        <link rel="stylesheet" href="<?php echo URL ?>public/css/admincp/customize-bootstrap.css"/>

        <?php
            if(isset($this->style)){
                foreach ($this->style as $style) {
                    echo '<link rel="stylesheet" type="text/css" href="'. $style .'" />';
                }
            }
        ?>

        <!-- Chèn link JavaScript-->
        <script src="<?php echo URL ?>public/js/jquery.min.js" type="text/javascript"></script>

        <script src="<?php echo URL ?>public/js/bootstrap.min.js" type="text/javascript"></script>

        <script src="<?php echo URL ?>public/js/jquery.validate.min.js" type="text/javascript" ></script>

        <script src="<?php echo URL ?>public/plugins/select2/select2.min.js" type="text/javascript" ></script>

        <script src="<?php echo URL ?>public/plugins/data-tables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo URL ?>public/plugins/data-tables/DT_bootstrap.js" type="text/javascript" ></script>

        <script src="<?php echo URL ?>public/js/admincp/core/app.js" type="text/javascript"></script>
        
        <?php
            if(isset($this->script)){
                foreach ($this->script as $script) {
                    echo '<script type="text/javascript" src="'. $script .'" ></script>';
                }
            }
        ?>

        <script type="text/javascript">
            var URL = "<?php echo URL ?>";
        </script>
    </head>

    <body>
        <header>
            <!-------------------------------------------------- Navbar -------------------------------------------------->
            <div class="clearfix" id="header">
              <div id="venues">
                <div class="current">
                  <div class="icons-arrow-bottom"></div>
                  <div class="name" style="position: absolute; height: 15px; top: 50%; margin-top: -7.5px;"><div>Sunspa Resort</div></div>
                </div>
                <ul class="hidden">
                </ul>
              </div>
              <ul id="nav1">
                <li class="" id="nav-notifications">
                    <span class="notification-badge">
                <span class="icons-notification"></span>
                <span class="notification-count">1</span>
            </span>
            <div class="notification-list hidden">
                <ul class="ddown radius-bottom">
                <li class="ddown-title">
                    Items need action:
                </li>

                <li>
                    <a href="/settings?prevalidate=fulfillment#venue/285925/notifications-settings/fulfillment">
                        <span class="notification-item">Fulfillment address not set</span>
                        
                    </a>
                </li>
            </ul>
                <div class="notification-badge-wrapper">
                    <span class="notification-badge">
                        <span class="icons-notification"></span>
                        <span class="notification-count">1</span>
                    </span>
                </div>
            </div>

            <script id="notifications-list-start" type="text/template">
                &lt;li class="ddown-title"&gt;
                    Items need action:
                &lt;/li&gt;
            </script>

            <script id="notifications-list-item" type="text/template">
                &lt;li&gt;
                    &lt;a href="{{link}}"&gt;
                        &lt;span class="notification-item"&gt;{{title}}&lt;/span&gt;
                        {{#count}}&lt;span class="count"&gt;{{count}}&lt;/span&gt;{{/count}}
                    &lt;/a&gt;
                &lt;/li&gt;
            </script>

                </li>
                <li id="nav-home" class="on">
                  <a title="Home" href="/home">
                    <div class="icons-nav-home"></div>
                    <div class="title">Home</div>
                  </a>
                </li>
                <li id="nav-calendar">
                  <a title="Calendar" href="/calendar">
                    <div class="icons-nav-calendar"></div>
                    <div class="title">Calendar</div>
                  </a>
                </li>
                <li id="nav-menu">
                  <a title="Menu" href="/menu">
                    <div class="icons-nav-menu"></div>
                    <div class="title">Menu</div>
                  </a>
                </li>
                <li id="nav-clients">
                  <a title="Clients" href="/clients">
                    <div class="icons-nav-clients"></div>
                    <div class="title">Clients</div>
                  </a>
                </li>
                <li id="nav-reports">
                  <a title="Reports" href="/reports">
                    <div class="icons-nav-reports"></div>
                    <div class="title">Reports</div>
                  </a>
                </li>
                <li id="nav-settings">
                  <a title="Settings" href="/settings">
                    <div class="icons-nav-settings"></div>
                    <div class="title">Settings</div>
                  </a>
                </li>
              </ul>
              <div class="ddown-menu" id="user">
                <div class="user-wrapper">
                    <a class="current" href="javascript:;">
                      <div class="person-pic-small"><img width="32" height="32" src="https://connect.wahanda.com/api/v2.0.0/media/venue/285925/employee/26156/image?width=32&amp;height=32"></div>
                      <div class="icons-arrow-bottom"></div>
                      <div class="name" style="position: absolute; height: 15px; top: 50%; margin-top: -7.5px;"><div>Nhat Bui Vo Minh</div></div>
                    </a>
                    <ul class="ddown hidden">
                      <li id="logout">
                        <a href="#logout">
                          <div class="icons-logout"></div>
                          Logout
                        </a>
                      </li>
                    </ul>
                </div>
              </div>
            </div>
        </header>
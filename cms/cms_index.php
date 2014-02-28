<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Dashboard | J.Jones Butchers</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta content='text/html;charset=utf-8' http-equiv='content-type'>
    <meta content='Flat administration template for Twitter Bootstrap. Twitter Bootstrap 3 template with Ruby on Rails support.' name='description'>
    <link href='../assets/images/meta_icons/favicon.ico' rel='shortcut icon' type='image/x-icon'>
    <link href='../assets/images/meta_icons/apple-touch-icon.png' rel='apple-touch-icon-precomposed'>
    <link href='../assets/images/meta_icons/apple-touch-icon-57x57.png' rel='apple-touch-icon-precomposed' sizes='57x57'>
    <link href='../assets/images/meta_icons/apple-touch-icon-72x72.png' rel='apple-touch-icon-precomposed' sizes='72x72'>
    <link href='../assets/images/meta_icons/apple-touch-icon-114x114.png' rel='apple-touch-icon-precomposed' sizes='114x114'>
    <link href='../assets/images/meta_icons/apple-touch-icon-144x144.png' rel='apple-touch-icon-precomposed' sizes='144x144'>
    <!-- / START - page related stylesheets [optional] -->
    <link href="../assets/stylesheets/plugins/bootstrap_daterangepicker/bootstrap-daterangepicker.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../assets/stylesheets/plugins/fullcalendar/fullcalendar.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../assets/stylesheets/plugins/common/bootstrap-wysihtml5.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / END - page related stylesheets [optional] -->
    <!-- / bootstrap [required] -->
    <link href="../assets/stylesheets/bootstrap/bootstrap.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / theme file [required] -->
    <link href="../assets/stylesheets/light-theme.css" media="all" id="color-settings-body-color" rel="stylesheet" type="text/css" />
    <!-- / coloring file [optional] (if you are going to use custom contrast color) -->
    <link href="../assets/stylesheets/theme-colors.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / demo file [not required!] -->
    <link href="../assets/stylesheets/demo.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../assets/stylesheets/jones.css" media="all" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]>
      <script src="../assets/javascripts/ie/html5shiv.js" type="text/javascript"></script>
      <script src="../assets/javascripts/ie/respond.min.js" type="text/javascript"></script>
    <![endif]-->
  </head>
  <body class='contrast-sea-blue '>
    <div id="outer-container">
      
    <?php

    include('cms_header.php');

    ?>

    <div id='wrapper'>
      <div id='main-nav-bg'></div>
  
      <?php

      include('cms_nav.php');

      ?>

      <section id='content'>
        <div class='container'>
          <div class='row' id='content-wrapper'>
            <div class='col-xs-12'>
              
              <div class='page-header page-header-with-buttons'>
                <h1 class='pull-left'>
                  <i class='icon-dashboard'></i>
                  <span>J. Jones Dashboard</span>
                </h1>
                <div class='pull-right'>
                  <div class='btn-group'>
                    <a class="btn btn-white hidden-xs" href="#">Last month</a>
                    <a class="btn btn-white" href="#">Last week</a>
                    <a class="btn btn-white " href="#">Today</a>
                          <a class="btn btn-white" id="daterange" href="#"><i class='icon-calendar'></i>
                    <span>Custom</span>
                    <b class='caret'></b>
                    </a>
              
                  </div>
                </div>
              </div>
              <div class='alert alert-info alert-dismissable'>
                <a class='close' data-dismiss='alert' href='#'>&times;</a>
                Welcome to
                <strong>the dashboard (v1.0)</strong>
                - I hope you'll like it. Don't forget - you can change theme color in top right corner
                <i class='icon-cog'></i>
                if you want.
              </div>
              <div class='row box box-transparent'>
                <div class='col-xs-4 col-sm-2'>
                  <div class='box-quick-link blue-background'>
                    <a href='cms_products.php'>
                      <div class='header'>
                        <div class='icon-barcode'></div>
                      </div>
                      <div class='content'>Products</div>
                    </a>
                  </div>
                </div>
                <div class='col-xs-4 col-sm-2'>
                  <div class='box-quick-link green-background'>
                    <a href='cms_orders.php'>
                      <div class='header'>
                        <div class='icon-inbox'></div>
                      </div>
                      <div class='content'>Orders</div>
                    </a>
                  </div>
                </div>
                <div class='col-xs-4 col-sm-2'>
                  <div class='box-quick-link orange-background'>
                    <a href='#'>
                      <div class='header'>
                        <div class='icon-food'></div>
                      </div>
                      <div class='content'>Recipes</div>
                    </a>
                  </div>
                </div>
                <div class='col-xs-4 col-sm-2'>
                  <div class='box-quick-link blue-background'>
                    <a href='cms_customers.php'>
                      <div class='header'>
                        <div class='icon-user'></div>
                      </div>
                      <div class='content'>Customers</div>
                    </a>
                  </div>
                </div>
                <div class='col-xs-4 col-sm-2'>
                  <div class='box-quick-link purple-background'>
                    <a href='#'>
                      <div class='header'>
                        <div class='icon-wrench'></div>
                      </div>
                      <div class='content'>Settings</div>
                    </a>
                  </div>
                </div>
                <div class='col-xs-4 col-sm-2'>
                  <div class='box-quick-link red-background'>
                    <a href='#'>
                      <div class='header'>
                        <div class='icon-lock'></div>
                      </div>
                      <div class='content'>Admin</div>
                    </a>
                  </div>
                </div>
              </div>
              <div class='row'>
                <div class='col-sm-6 box'>
                  <div class='box-header'>
                    <div class='title'>
                      <i class='icon-inbox'></i>
                      Orders
                    </div>
                    <div class='actions'>
                      <a class="btn box-remove btn-xs btn-link" href="#"><i class='icon-remove'></i>
                      </a>
                      
                      <a class="btn box-collapse btn-xs btn-link" href="#"><i></i>
                      </a>
                    </div>
                  </div>
                  <div class='box-content'>
                    <div id='stats-chart1'></div>
                  </div>
                </div>
                <div class='col-sm-6 box'>
                  <div class='box-header'>
                    <div class='title'>
                      <i class='icon-group'></i>
                      Users
                    </div>
                    <div class='actions'>
                      <a class="btn box-remove btn-xs btn-link" href="#"><i class='icon-remove'></i>
                      </a>
                      
                      <a class="btn box-collapse btn-xs btn-link" href="#"><i></i>
                      </a>
                    </div>
                  </div>
                  <div class='box-content'>
                    <div id='stats-chart2'></div>
                  </div>
                </div>
              </div>
              <hr class='hr-drouble'>
              <div class='row'>
                <div class='col-sm-12 col-md-6'>
                  <div class='box'>
                    <div class='box-header'>
                      <div class='title'>
                        <div class='icon-inbox'></div>
                        Orders
                      </div>
                      <div class='actions'>
                        <a class="btn box-remove btn-xs btn-link" href="#"><i class='icon-remove'></i>
                        </a>
                        
                        <a class="btn box-collapse btn-xs btn-link" href="#"><i></i>
                        </a>
                      </div>
                    </div>
                    <div class='row'>
                      <div class='col-sm-6'>
                        <div class='box-content box-statistic'>
                          <h3 class='title text-error'>191</h3>
                          <small>New</small>
                          <div class='text-error icon-inbox align-right'></div>
                        </div>
                        <div class='box-content box-statistic'>
                          <h3 class='title text-warning'>311</h3>
                          <small>In process</small>
                          <div class='text-warning icon-check align-right'></div>
                        </div>
                        <div class='box-content box-statistic'>
                          <h3 class='title text-info'>3</h3>
                          <small>Pending</small>
                          <div class='text-info icon-time align-right'></div>
                        </div>
                      </div>
                      <div class='col-sm-6'>
                        <div class='box-content box-statistic'>
                          <h3 class='title text-primary'>3</h3>
                          <small>Shipped</small>
                          <div class='text-primary icon-truck align-right'></div>
                        </div>
                        <div class='box-content box-statistic'>
                          <h3 class='title text-success'>981</h3>
                          <small>Completed</small>
                          <div class='text-success icon-flag align-right'></div>
                        </div>
                        <div class='box-content box-statistic'>
                          <h3 class='title text-muted'>0</h3>
                          <small>Canceled</small>
                          <div class='text-muted icon-remove align-right'></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class='col-sm-6 col-md-3'>
                  <div class='box'>
                    <div class='box-header'>
                      <div class='title'>
                        <i class='icon-group'></i>
                        Visitors
                      </div>
                    </div>
                    <div class='row'>
                      <div class='col-sm-12'>
                        <div class='box-content box-statistic'>
                          <h3 class='title text-error'>9100</h3>
                          <small>Unique</small>
                          <div class='text-error icon-user align-right'></div>
                        </div>
                        <div class='box-content box-statistic'>
                          <h3 class='title text-warning'>41 000</h3>
                          <small>Pageviews</small>
                          <div class='text-warning icon-book align-right'></div>
                        </div>
                        <div class='box-content box-statistic'>
                          <h3 class='title text-primary'>12:21</h3>
                          <small>Average time</small>
                          <div class='text-primary icon-time align-right'></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class='col-sm-6 col-md-3'>
                  <div class='box'>
                    <div class='box-header'>
                      <div class='title'>
                        <i class='icon-comments'></i>
                        Comments
                      </div>
                    </div>
                    <div class='row'>
                      <div class='col-sm-12'>
                        <div class='box-content box-statistic'>
                          <h3 class='title text-error'>91</h3>
                          <small>New</small>
                          <div class='text-error icon-plus align-right'></div>
                        </div>
                        <div class='box-content box-statistic'>
                          <h3 class='title text-success'>1</h3>
                          <small>Approved</small>
                          <div class='text-success icon-ok align-right'></div>
                        </div>
                        <div class='box-content box-statistic'>
                          <h3 class='title text-info'>123</h3>
                          <small>Pending</small>
                          <div class='text-info icon-time align-right'></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class='group-header'>
                <div class='row'>
                  <div class='col-sm-6 col-sm-offset-3'>
                    <div class='text-center'>
                      <h2>Todo & Recent activity</h2>
                      <small class='text-muted'>Items in todo list can be reordered by drag & drop, you can mark them as important, complete, or you can delete them!</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class='row'>
                <div class='col-sm-12 col-md-6'>
                  <div class='row todo-list'>
                    <div class='col-sm-12'>
                      <div class='box'>
                        <div class='box-header'>
                          <div class='title'>
                            <i class='icon-list-alt'></i>
                            Todo lists
                          </div>
                          <div class='actions'>
                            <a class="btn box-remove btn-xs btn-link" href="#"><i class='icon-remove'></i>
                            </a>
                            
                            <a class="btn box-collapse btn-xs btn-link" href="#"><i></i>
                            </a>
                          </div>
                        </div>
                        <div class='box-content box-no-padding'>
                          <div class='sortable-container'>
                                      <form class="new-todo" method="post" action="#" accept-charset="UTF-8"><input name="authenticity_token" type="hidden" /><input class='form-control' id='todo_name' name='todo[name]' placeholder='Type your new todo here...' type='text'>
                            <button class='btn btn-success' type='submit'>
                              <i class='icon-plus'></i>
                            </button>
                            </form>
                  
                            <div class='date text-contrast'>Today</div>
                            <ul class='list-unstyled sortable' data-sortable-axis='y' data-sortable-connect='.sortable'>
                              <li class='important item'>
                                <label class='check pull-left todo'>
                                  <input type='checkbox'>
                                  <span>Molestias non et</span>
                                </label>
                                <div class='actions pull-right'>
                                  <a class='btn btn-link edit has-tooltip' data-placement='top' href='#' title='Edit todo'>
                                    <i class='icon-pencil'></i>
                                  </a>
                                  <a class='btn btn-link remove has-tooltip' data-placement='top' href='#' title='Remove todo'>
                                    <i class='icon-remove'></i>
                                  </a>
                                  <a class='btn btn-link important has-tooltip' data-placement='top' href='#' title='Mark as important'>
                                    <i class='icon-bookmark-empty'></i>
                                  </a>
                                </div>
                              </li>
                              <li class='item'>
                                <label class='check pull-left todo'>
                                  <input type='checkbox'>
                                  <span>Praesentium quas est</span>
                                </label>
                                <div class='actions pull-right'>
                                  <a class='btn btn-link edit has-tooltip' data-placement='top' href='#' title='Edit todo'>
                                    <i class='icon-pencil'></i>
                                  </a>
                                  <a class='btn btn-link remove has-tooltip' data-placement='top' href='#' title='Remove todo'>
                                    <i class='icon-remove'></i>
                                  </a>
                                  <a class='btn btn-link important has-tooltip' data-placement='top' href='#' title='Mark as important'>
                                    <i class='icon-bookmark-empty'></i>
                                  </a>
                                </div>
                              </li>
                              <li class='done item'>
                                <label class='check pull-left todo'>
                                  <input checked='checked' type='checkbox'>
                                  <span>Dolores sed libero</span>
                                </label>
                                <div class='actions pull-right'>
                                  <a class='btn btn-link edit has-tooltip' data-placement='top' href='#' title='Edit todo'>
                                    <i class='icon-pencil'></i>
                                  </a>
                                  <a class='btn btn-link remove has-tooltip' data-placement='top' href='#' title='Remove todo'>
                                    <i class='icon-remove'></i>
                                  </a>
                                  <a class='btn btn-link important has-tooltip' data-placement='top' href='#' title='Mark as important'>
                                    <i class='icon-bookmark-empty'></i>
                                  </a>
                                </div>
                              </li>
                              <li class='item'>
                                <label class='check pull-left todo'>
                                  <input type='checkbox'>
                                  <i class='icon-envelope-alt'></i>
                                  <span>Ex numquam inventore ut</span>
                                </label>
                                <div class='actions pull-right'>
                                  <a class='btn btn-link edit has-tooltip' data-placement='top' href='#' title='Edit todo'>
                                    <i class='icon-pencil'></i>
                                  </a>
                                  <a class='btn btn-link remove has-tooltip' data-placement='top' href='#' title='Remove todo'>
                                    <i class='icon-remove'></i>
                                  </a>
                                  <a class='btn btn-link important has-tooltip' data-placement='top' href='#' title='Mark as important'>
                                    <i class='icon-bookmark-empty'></i>
                                  </a>
                                </div>
                              </li>
                            </ul>
                            <div class='date text-contrast'>Due Wed, Sep 19, 2013</div>
                            <ul class='list-unstyled sortable' data-sortable-axis='y' data-sortable-connect='.sortable'>
                              <li class='item'>
                                <label class='check pull-left todo'>
                                  <input type='checkbox'>
                                  <span>Libero provident consequatur vitae ut</span>
                                </label>
                                <div class='actions pull-right'>
                                  <a class='btn btn-link edit has-tooltip' data-placement='top' href='#' title='Edit todo'>
                                    <i class='icon-pencil'></i>
                                  </a>
                                  <a class='btn btn-link remove has-tooltip' data-placement='top' href='#' title='Remove todo'>
                                    <i class='icon-remove'></i>
                                  </a>
                                  <a class='btn btn-link important has-tooltip' data-placement='top' href='#' title='Mark as important'>
                                    <i class='icon-bookmark-empty'></i>
                                  </a>
                                </div>
                              </li>
                              <li class='important item'>
                                <label class='check pull-left todo'>
                                  <input type='checkbox'>
                                  <span>Omnis dolorem aperiam deleniti et</span>
                                </label>
                                <div class='actions pull-right'>
                                  <a class='btn btn-link edit has-tooltip' data-placement='top' href='#' title='Edit todo'>
                                    <i class='icon-pencil'></i>
                                  </a>
                                  <a class='btn btn-link remove has-tooltip' data-placement='top' href='#' title='Remove todo'>
                                    <i class='icon-remove'></i>
                                  </a>
                                  <a class='btn btn-link important has-tooltip' data-placement='top' href='#' title='Mark as important'>
                                    <i class='icon-bookmark-empty'></i>
                                  </a>
                                </div>
                              </li>
                              <li class='item'>
                                <label class='check pull-left todo'>
                                  <input type='checkbox'>
                                  <span>Sed voluptates consequuntur esse accusamus</span>
                                </label>
                                <div class='actions pull-right'>
                                  <a class='btn btn-link edit has-tooltip' data-placement='top' href='#' title='Edit todo'>
                                    <i class='icon-pencil'></i>
                                  </a>
                                  <a class='btn btn-link remove has-tooltip' data-placement='top' href='#' title='Remove todo'>
                                    <i class='icon-remove'></i>
                                  </a>
                                  <a class='btn btn-link important has-tooltip' data-placement='top' href='#' title='Mark as important'>
                                    <i class='icon-bookmark-empty'></i>
                                  </a>
                                </div>
                              </li>
                              <li class='item'>
                                <label class='check pull-left todo'>
                                  <input type='checkbox'>
                                  <span>Dolor illum assumenda ut possimus</span>
                                </label>
                                <div class='actions pull-right'>
                                  <a class='btn btn-link edit has-tooltip' data-placement='top' href='#' title='Edit todo'>
                                    <i class='icon-pencil'></i>
                                  </a>
                                  <a class='btn btn-link remove has-tooltip' data-placement='top' href='#' title='Remove todo'>
                                    <i class='icon-remove'></i>
                                  </a>
                                  <a class='btn btn-link important has-tooltip' data-placement='top' href='#' title='Mark as important'>
                                    <i class='icon-bookmark-empty'></i>
                                  </a>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class='col-sm-12 col-md-6'>
                  <div class='row recent-activity'>
                    <div class='col-sm-12'>
                      <div class='box'>
                        <div class='box-header'>
                          <div class='title'>
                            <i class='icon-refresh'></i>
                            Recent activity
                          </div>
                          <div class='actions'>
                            <a class="btn box-remove btn-xs btn-link" href="#"><i class='icon-remove'></i>
                            </a>
                            
                            <a class="btn box-collapse btn-xs btn-link" href="#"><i></i>
                            </a>
                          </div>
                        </div>
                        <div class='box-content box-no-padding'>
                          <ul class='nav nav-tabs nav-tabs-simple'>
                            <li class='active'>
                                          <a data-toggle="tab" class="green-border" href="#users"><i class='icon-user text-green'></i>
                              Users
                              </a>
                  
                            </li>
                            <li>
                                          <a data-toggle="tab" class="purple-border" href="#comments"><i class='icon-comments text-purple'></i>
                              Comments
                              </a>
                  
                            </li>
                            <li class='dropdown'>
                                          <a data-toggle="dropdown" class="dropdown-toggle orange-border" href="#">Dropdown
                              <i class='icon-caret-down text-contrast'></i>
                              </a>
                  
                              <ul class='dropdown-menu'>
                                <li><a href="#">Hi there!</a></li>
                              </ul>
                            </li>
                          </ul>
                          <div class='tab-content'>
                            <div class='tab-pane fade in active' id='users'>
                              <ul class='list-unstyled users list-hover list-striped'>
                                <li>
                                  <div class='avatar pull-left'>
                                    <div class='icon-user'></div>
                                  </div>
                                  <div class='action pull-left'>
                                    <a class="text-contrast" href="#">Jean</a>
                                    signed in
                                  </div>
                                  <small class='date pull-right text-muted'>
                                    <span class='timeago fade has-tooltip' data-placement='top' title='2013-09-15 17:34:37 +0200'>September 15, 2013 - 17:34</span>
                                    <i class='icon-time'></i>
                                  </small>
                                </li>
                                <li>
                                  <div class='avatar pull-left'>
                                    <img alt='Avatar' height='23' src='assets/images/avatar.jpg' width='23'>
                                  </div>
                                  <div class='action pull-left'>
                                    <a class="text-contrast" href="#">Kendrick</a>
                                    uploaded photo
                                  </div>
                                  <small class='date pull-right text-muted'>
                                    <span class='timeago fade has-tooltip' data-placement='top' title='2013-09-15 17:35:37 +0200'>September 15, 2013 - 17:35</span>
                                    <i class='icon-time'></i>
                                  </small>
                                </li>
                                <li>
                                  <div class='avatar pull-left'>
                                    <div class='icon-user'></div>
                                  </div>
                                  <div class='action pull-left'>
                                    <a class="text-contrast" href="#">Jason</a>
                                    signed in
                                  </div>
                                  <small class='date pull-right text-muted'>
                                    <span class='timeago fade has-tooltip' data-placement='top' title='2013-09-15 17:36:37 +0200'>September 15, 2013 - 17:36</span>
                                    <i class='icon-time'></i>
                                  </small>
                                </li>
                                <li>
                                  <div class='avatar pull-left'>
                                    <img alt='Avatar' height='23' src='assets/images/avatar.jpg' width='23'>
                                  </div>
                                  <div class='action pull-left'>
                                    <a class="text-contrast" href="#">inley</a>
                                    signed up
                                  </div>
                                  <small class='date pull-right text-muted'>
                                    <span class='timeago fade has-tooltip' data-placement='top' title='2013-09-15 17:37:37 +0200'>September 15, 2013 - 17:37</span>
                                    <i class='icon-time'></i>
                                  </small>
                                </li>
                                <li>
                                  <div class='avatar pull-left'>
                                    <img alt='Avatar' height='23' src='assets/images/avatar.jpg' width='23'>
                                  </div>
                                  <div class='action pull-left'>
                                    <a class="text-contrast" href="#">Allen</a>
                                    signed in
                                  </div>
                                  <small class='date pull-right text-muted'>
                                    <span class='timeago fade has-tooltip' data-placement='top' title='2013-09-15 17:38:37 +0200'>September 15, 2013 - 17:38</span>
                                    <i class='icon-time'></i>
                                  </small>
                                </li>
                                <li>
                                  <div class='avatar pull-left'>
                                    <img alt='Avatar' height='23' src='assets/images/avatar.jpg' width='23'>
                                  </div>
                                  <div class='action pull-left'>
                                    <a class="text-contrast" href="#">Alexis</a>
                                    signed in
                                  </div>
                                  <small class='date pull-right text-muted'>
                                    <span class='timeago fade has-tooltip' data-placement='top' title='2013-09-15 17:39:37 +0200'>September 15, 2013 - 17:39</span>
                                    <i class='icon-time'></i>
                                  </small>
                                </li>
                                <li>
                                  <div class='avatar pull-left'>
                                    <div class='icon-user'></div>
                                  </div>
                                  <div class='action pull-left'>
                                    <a class="text-contrast" href="#">Johnnie</a>
                                    commented
                                  </div>
                                  <small class='date pull-right text-muted'>
                                    <span class='timeago fade has-tooltip' data-placement='top' title='2013-09-15 17:40:37 +0200'>September 15, 2013 - 17:40</span>
                                    <i class='icon-time'></i>
                                  </small>
                                </li>
                                <li>
                                  <div class='avatar pull-left'>
                                    <div class='icon-user'></div>
                                  </div>
                                  <div class='action pull-left'>
                                    <a class="text-contrast" href="#">Alma</a>
                                    commented
                                  </div>
                                  <small class='date pull-right text-muted'>
                                    <span class='timeago fade has-tooltip' data-placement='top' title='2013-09-15 17:41:37 +0200'>September 15, 2013 - 17:41</span>
                                    <i class='icon-time'></i>
                                  </small>
                                </li>
                                <li>
                                  <div class='avatar pull-left'>
                                    <div class='icon-user'></div>
                                  </div>
                                  <div class='action pull-left'>
                                    <a class="text-contrast" href="#">Brock</a>
                                    uploaded photo
                                  </div>
                                  <small class='date pull-right text-muted'>
                                    <span class='timeago fade has-tooltip' data-placement='top' title='2013-09-15 17:42:37 +0200'>September 15, 2013 - 17:42</span>
                                    <i class='icon-time'></i>
                                  </small>
                                </li>
                              </ul>
                              <div class='load-more'>
                                              <a id="users-more-activity" class="btn btn-block" data-loading-text="&lt;i class='icon-spinner icon-spin'&gt;&lt;/i&gt; Loading more..." href="#"><i class='icon-circle-arrow-down'></i>
                                Load more
                                </a>
                  
                              </div>
                            </div>
                            <div class='tab-pane fade' id='comments'>
                              <ul class='list-unstyled comments list-hover list-striped'>
                                <li>
                                  <div class='avatar pull-left'>
                                    <div class='icon-user'></div>
                                  </div>
                                  <div class='body'>
                                    <div class='name'><a class="text-contrast" href="#">Kellie</a></div>
                                    <div class='actions'>
                                                          <a class="btn btn-link ok has-tooltip" title="Approve" href="#"><i class='icon-thumbs-up'></i>
                                      </a>
                  
                                                          <a class="btn btn-link remove has-tooltip" title="Remove" href="#"><i class='icon-thumbs-down'></i>
                                      </a>
                  
                                    </div>
                                    <div class='text'>Qui vel omnis quia ea quasi voluptate rerum cum sit. Corporis qui ducimus quidem</div>
                                  </div>
                                  <div class='text-right'>
                                    <small class='date text-muted'>
                                      <span class='timeago fade has-tooltip' data-placement='top' title='2013-09-15 18:33:37 +0200'>September 15, 2013 - 18:33</span>
                                      <i class='icon-time'></i>
                                    </small>
                                  </div>
                                </li>
                                <li>
                                  <div class='avatar pull-left'>
                                    <div class='icon-user'></div>
                                  </div>
                                  <div class='body'>
                                    <div class='name'><a class="text-contrast" href="#">Jerald</a></div>
                                    <div class='actions'>
                                                          <a class="btn btn-link ok has-tooltip" title="Approve" href="#"><i class='icon-thumbs-up'></i>
                                      </a>
                  
                                                          <a class="btn btn-link remove has-tooltip" title="Remove" href="#"><i class='icon-thumbs-down'></i>
                                      </a>
                  
                                    </div>
                                    <div class='text'>Hic aut earum blanditiis sit culpa in saepe reiciendis. Alias expedita officia magnam possimus et possimus culpa assumenda consequatur qui aut vel</div>
                                  </div>
                                  <div class='text-right'>
                                    <small class='date text-muted'>
                                      <span class='timeago fade has-tooltip' data-placement='top' title='2013-09-15 19:33:37 +0200'>September 15, 2013 - 19:33</span>
                                      <i class='icon-time'></i>
                                    </small>
                                  </div>
                                </li>
                                <li>
                                  <div class='avatar pull-left'>
                                    <div class='icon-user'></div>
                                  </div>
                                  <div class='body'>
                                    <div class='name'><a class="text-contrast" href="#">Cathleen</a></div>
                                    <div class='actions'>
                                                          <a class="btn btn-link ok has-tooltip" title="Approve" href="#"><i class='icon-thumbs-up'></i>
                                      </a>
                  
                                                          <a class="btn btn-link remove has-tooltip" title="Remove" href="#"><i class='icon-thumbs-down'></i>
                                      </a>
                  
                                    </div>
                                    <div class='text'>Eum pariatur quod sapiente nulla. Minima modi cumque necessitatibus quam dolor corrupti fugiat impedit voluptas nobis nisi consequatur aut</div>
                                  </div>
                                  <div class='text-right'>
                                    <small class='date text-muted'>
                                      <span class='timeago fade has-tooltip' data-placement='top' title='2013-09-15 20:33:37 +0200'>September 15, 2013 - 20:33</span>
                                      <i class='icon-time'></i>
                                    </small>
                                  </div>
                                </li>
                                <li>
                                  <div class='avatar pull-left'>
                                    <div class='icon-user'></div>
                                  </div>
                                  <div class='body'>
                                    <div class='name'><a class="text-contrast" href="#">Zoe</a></div>
                                    <div class='actions'>
                                                          <a class="btn btn-link ok has-tooltip" title="Approve" href="#"><i class='icon-thumbs-up'></i>
                                      </a>
                  
                                                          <a class="btn btn-link remove has-tooltip" title="Remove" href="#"><i class='icon-thumbs-down'></i>
                                      </a>
                  
                                    </div>
                                    <div class='text'>Ut quibusdam debitis eaque et quis sapiente eos tempore distinctio quia et deleniti. Quae libero ullam harum mollitia non sunt placeat temporibus consequatur</div>
                                  </div>
                                  <div class='text-right'>
                                    <small class='date text-muted'>
                                      <span class='timeago fade has-tooltip' data-placement='top' title='2013-09-15 21:33:37 +0200'>September 15, 2013 - 21:33</span>
                                      <i class='icon-time'></i>
                                    </small>
                                  </div>
                                </li>
                                <li>
                                  <div class='avatar pull-left'>
                                    <div class='icon-user'></div>
                                  </div>
                                  <div class='body'>
                                    <div class='name'><a class="text-contrast" href="#">Toby</a></div>
                                    <div class='actions'>
                                                          <a class="btn btn-link ok has-tooltip" title="Approve" href="#"><i class='icon-thumbs-up'></i>
                                      </a>
                  
                                                          <a class="btn btn-link remove has-tooltip" title="Remove" href="#"><i class='icon-thumbs-down'></i>
                                      </a>
                  
                                    </div>
                                    <div class='text'>Dolorem id consequatur quod dolor natus. Optio fugiat qui qui debitis</div>
                                  </div>
                                  <div class='text-right'>
                                    <small class='date text-muted'>
                                      <span class='timeago fade has-tooltip' data-placement='top' title='2013-09-15 22:33:37 +0200'>September 15, 2013 - 22:33</span>
                                      <i class='icon-time'></i>
                                    </small>
                                  </div>
                                </li>
                                <li>
                                  <div class='avatar pull-left'>
                                    <img alt='Avatar' height='23' src='assets/images/avatar.jpg' width='23'>
                                  </div>
                                  <div class='body'>
                                    <div class='name'><a class="text-contrast" href="#">Lynette</a></div>
                                    <div class='actions'>
                                                          <a class="btn btn-link ok has-tooltip" title="Approve" href="#"><i class='icon-thumbs-up'></i>
                                      </a>
                  
                                                          <a class="btn btn-link remove has-tooltip" title="Remove" href="#"><i class='icon-thumbs-down'></i>
                                      </a>
                  
                                    </div>
                                    <div class='text'>Et aliquam et et. Nemo natus est sint modi occaecati</div>
                                  </div>
                                  <div class='text-right'>
                                    <small class='date text-muted'>
                                      <span class='timeago fade has-tooltip' data-placement='top' title='2013-09-15 23:33:37 +0200'>September 15, 2013 - 23:33</span>
                                      <i class='icon-time'></i>
                                    </small>
                                  </div>
                                </li>
                              </ul>
                              <div class='load-more'>
                                              <a id="comments-more-activity" class="btn btn-block" data-loading-text="&lt;i class='icon-spinner icon-spin'&gt;&lt;/i&gt; Loading more..." href="#"><i class='icon-circle-arrow-down'></i>
                                Load more
                                </a>
                  
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class='group-header'>
                <div class='row'>
                  <div class='col-sm-6 col-sm-offset-3'>
                    <div class='text-center'>
                      <h2>Chat & Quick e-mail</h2>
                      <small class='text-muted'>You can send some message in chat below!</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class='row'>
                <div class='col-sm-6'>
                  <div class='row'>
                    <div class='chat'>
                      <div class='col-sm-12'>
                        <div class='box'>
                          <div class='box-header orange-background'>
                            <div class='title'>
                              <i class='icon-comments-alt'></i>
                              Chat
                            </div>
                            <div class='actions'>
                              <a class="btn box-remove btn-xs btn-link" href="#"><i class='icon-remove'></i>
                              </a>
                              
                              <a class="btn box-collapse btn-xs btn-link" href="#"><i></i>
                              </a>
                            </div>
                          </div>
                          <div class='box-content box-no-padding'>
                            <div class='scrollable' data-scrollable-height='300' data-scrollable-start='bottom'>
                              <ul class='list-unstyled list-hover list-striped'>
                                <li class='message'>
                                  <div class='avatar'>
                                    <img alt='Avatar' height='23' src='assets/images/avatar.jpg' width='23'>
                                  </div>
                                  <div class='name-and-time'>
                                    <div class='name pull-left'>
                                      <small>
                                        <a class="text-contrast" href="#">Tomas</a>
                                      </small>
                                    </div>
                                    <div class='time pull-right'>
                                      <small class='date pull-right text-muted'>
                                        <span class='timeago fade has-tooltip' data-placement='top' title='2013-09-15 17:42:37 +0200'>September 15, 2013 - 17:42</span>
                                        <i class='icon-time'></i>
                                      </small>
                                    </div>
                                  </div>
                                  <div class='body'>
                                    Vel recusandae aspernatur atque repudiandae asperiores aut commodi recusandae voluptas ab vel dignissimos necessitatibus ipsam
                                  </div>
                                </li>
                                <li class='message'>
                                  <div class='avatar'>
                                    <img alt='Avatar' height='23' src='assets/images/avatar.jpg' width='23'>
                                  </div>
                                  <div class='name-and-time'>
                                    <div class='name pull-left'>
                                      <small>
                                        <a class="text-contrast" href="#">Moses</a>
                                      </small>
                                    </div>
                                    <div class='time pull-right'>
                                      <small class='date pull-right text-muted'>
                                        <span class='timeago fade has-tooltip' data-placement='top' title='2013-09-15 17:41:37 +0200'>September 15, 2013 - 17:41</span>
                                        <i class='icon-time'></i>
                                      </small>
                                    </div>
                                  </div>
                                  <div class='body'>
                                    Sint illo aut illo nostrum omnis et dolorem et dignissimos
                                  </div>
                                </li>
                                <li class='message'>
                                  <div class='avatar'>
                                    <img alt='Avatar' height='23' src='assets/images/avatar.jpg' width='23'>
                                  </div>
                                  <div class='name-and-time'>
                                    <div class='name pull-left'>
                                      <small>
                                        <a class="text-contrast" href="#">Moses</a>
                                      </small>
                                    </div>
                                    <div class='time pull-right'>
                                      <small class='date pull-right text-muted'>
                                        <span class='timeago fade has-tooltip' data-placement='top' title='2013-09-15 17:40:37 +0200'>September 15, 2013 - 17:40</span>
                                        <i class='icon-time'></i>
                                      </small>
                                    </div>
                                  </div>
                                  <div class='body'>
                                    Culpa aut quasi vitae sunt modi laboriosam a
                                  </div>
                                </li>
                                <li class='message'>
                                  <div class='avatar'>
                                    <img alt='Avatar' height='23' src='assets/images/avatar.jpg' width='23'>
                                  </div>
                                  <div class='name-and-time'>
                                    <div class='name pull-left'>
                                      <small>
                                        <a class="text-contrast" href="#">Moses</a>
                                      </small>
                                    </div>
                                    <div class='time pull-right'>
                                      <small class='date pull-right text-muted'>
                                        <span class='timeago fade has-tooltip' data-placement='top' title='2013-09-15 17:39:37 +0200'>September 15, 2013 - 17:39</span>
                                        <i class='icon-time'></i>
                                      </small>
                                    </div>
                                  </div>
                                  <div class='body'>
                                    Doloribus neque qui eius laborum est nemo impedit aliquid et
                                  </div>
                                </li>
                                <li class='message'>
                                  <div class='avatar'>
                                    <img alt='Avatar' height='23' src='assets/images/avatar.jpg' width='23'>
                                  </div>
                                  <div class='name-and-time'>
                                    <div class='name pull-left'>
                                      <small>
                                        <a class="text-contrast" href="#">Tomas</a>
                                      </small>
                                    </div>
                                    <div class='time pull-right'>
                                      <small class='date pull-right text-muted'>
                                        <span class='timeago fade has-tooltip' data-placement='top' title='2013-09-15 17:38:37 +0200'>September 15, 2013 - 17:38</span>
                                        <i class='icon-time'></i>
                                      </small>
                                    </div>
                                  </div>
                                  <div class='body'>
                                    Ut et nam ut eos aut est id quo veniam corrupti itaque voluptatem repellat rerum
                                  </div>
                                </li>
                                <li class='message'>
                                  <div class='avatar'>
                                    <img alt='Avatar' height='23' src='assets/images/avatar.jpg' width='23'>
                                  </div>
                                  <div class='name-and-time'>
                                    <div class='name pull-left'>
                                      <small>
                                        <a class="text-contrast" href="#">Tomas</a>
                                      </small>
                                    </div>
                                    <div class='time pull-right'>
                                      <small class='date pull-right text-muted'>
                                        <span class='timeago fade has-tooltip' data-placement='top' title='2013-09-15 17:37:37 +0200'>September 15, 2013 - 17:37</span>
                                        <i class='icon-time'></i>
                                      </small>
                                    </div>
                                  </div>
                                  <div class='body'>
                                    Quo voluptas necessitatibus sint molestias
                                  </div>
                                </li>
                                <li class='message'>
                                  <div class='avatar'>
                                    <img alt='Avatar' height='23' src='assets/images/avatar.jpg' width='23'>
                                  </div>
                                  <div class='name-and-time'>
                                    <div class='name pull-left'>
                                      <small>
                                        <a class="text-contrast" href="#">Tomas</a>
                                      </small>
                                    </div>
                                    <div class='time pull-right'>
                                      <small class='date pull-right text-muted'>
                                        <span class='timeago fade has-tooltip' data-placement='top' title='2013-09-15 17:36:37 +0200'>September 15, 2013 - 17:36</span>
                                        <i class='icon-time'></i>
                                      </small>
                                    </div>
                                  </div>
                                  <div class='body'>
                                    Sed quo voluptatem illo quam qui itaque ad
                                  </div>
                                </li>
                                <li class='message'>
                                  <div class='avatar'>
                                    <img alt='Avatar' height='23' src='assets/images/avatar.jpg' width='23'>
                                  </div>
                                  <div class='name-and-time'>
                                    <div class='name pull-left'>
                                      <small>
                                        <a class="text-contrast" href="#">Moses</a>
                                      </small>
                                    </div>
                                    <div class='time pull-right'>
                                      <small class='date pull-right text-muted'>
                                        <span class='timeago fade has-tooltip' data-placement='top' title='2013-09-15 17:35:37 +0200'>September 15, 2013 - 17:35</span>
                                        <i class='icon-time'></i>
                                      </small>
                                    </div>
                                  </div>
                                  <div class='body'>
                                    Ea optio quod vel eligendi est voluptates repellat est aliquam quia nihil beatae sit
                                  </div>
                                </li>
                                <li class='message'>
                                  <div class='avatar'>
                                    <img alt='Avatar' height='23' src='assets/images/avatar.jpg' width='23'>
                                  </div>
                                  <div class='name-and-time'>
                                    <div class='name pull-left'>
                                      <small>
                                        <a class="text-contrast" href="#">Tomas</a>
                                      </small>
                                    </div>
                                    <div class='time pull-right'>
                                      <small class='date pull-right text-muted'>
                                        <span class='timeago fade has-tooltip' data-placement='top' title='2013-09-15 17:34:37 +0200'>September 15, 2013 - 17:34</span>
                                        <i class='icon-time'></i>
                                      </small>
                                    </div>
                                  </div>
                                  <div class='body'>
                                    Qui in ratione reiciendis possimus ipsum voluptatem quidem aut unde excepturi ut harum minus dolorum
                                  </div>
                                </li>
                                <li class='message'>
                                  <div class='avatar'>
                                    <img alt='Avatar' height='23' src='assets/images/avatar.jpg' width='23'>
                                  </div>
                                  <div class='name-and-time'>
                                    <div class='name pull-left'>
                                      <small>
                                        <a class="text-contrast" href="#">Tomas</a>
                                      </small>
                                    </div>
                                    <div class='time pull-right'>
                                      <small class='date pull-right text-muted'>
                                        <span class='timeago fade has-tooltip' data-placement='top' title='2013-09-15 17:33:37 +0200'>September 15, 2013 - 17:33</span>
                                        <i class='icon-time'></i>
                                      </small>
                                    </div>
                                  </div>
                                  <div class='body'>
                                    Ea cum illum eum occaecati qui culpa et consequatur ut aspernatur distinctio
                                  </div>
                                </li>
                              </ul>
                            </div>
                                      <form class="new-message" method="post" action="#" accept-charset="UTF-8"><input name="authenticity_token" type="hidden" /><input class='form-control' id='message_body' name='message[body]' placeholder='Type your message here...' type='text'>
                            <button class='btn btn-success' type='submit'>
                              <i class='icon-plus'></i>
                            </button>
                            </form>
                  
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class='col-sm-6'>
                  <div class='row'>
                    <div class='col-sm-12'>
                      <div class='box'>
                        <div class='box-header blue-background'>
                          <div class='title'>
                            <div class='icon-envelope-alt'></div>
                            Quick e-mail
                          </div>
                          <div class='actions'>
                            <a class="btn box-remove btn-xs btn-link" href="#"><i class='icon-remove'></i>
                            </a>
                            
                            <a class="btn box-collapse btn-xs btn-link" href="#"><i></i>
                            </a>
                          </div>
                        </div>
                        <div class='box-content'>
                          <div class='form-group'>
                            <input value="" placeholder="E-mail" class="form-control" name="email" type="text" />
                          </div>
                          <div class='form-group'>
                            <textarea class='form-control wysihtml5' id='body' placeholder='Your message...' rows='5'></textarea>
                          </div>
                          <div class='text-right'>
                            <a class="btn btn-primary" href="#">Send</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class='group-header'>
                <div class='row'>
                  <div class='col-sm-6 col-sm-offset-3'>
                    <div class='text-center'>
                      <h2>Calendar & Tasks</h2>
                      <small class='text-muted'>Events in calendar can be dragged from day to another day, or you can extend event on more days!</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class='row'>
                <div class='col-sm-6'>
                  <div class='row'>
                    <div class='col-sm-12'>
                      <div class='box box-bordered purple-border'>
                        <div class='box-header purple-background'>
                          <div class='title'>
                            <i class='icon-calendar'></i>
                            Calendar
                          </div>
                        </div>
                        <div class='box-content'>
                          <div class='full-calendar-demo'></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class='col-sm-6'>
                  <div class='row'>
                    <div class='col-sm-12'>
                      <div class='box'>
                        <div class='box-header green-background'>
                          <div class='title'>
                            <div class='icon-tasks'></div>
                            Tasks
                          </div>
                          <div class='actions'>
                            <a class="btn box-remove btn-xs btn-link" href="#"><i class='icon-remove'></i>
                            </a>
                            
                            <a class="btn box-collapse btn-xs btn-link" href="#"><i></i>
                            </a>
                          </div>
                        </div>
                        <div class='box-content'>
                          <ul class='list-unstyled tasks'>
                            <li>
                              <div class='task'>
                                <span class='pull-left'>
                                  <a href='#'>Cras sed tellus velit</a>
                                </span>
                                <small class='pull-right'>40%</small>
                              </div>
                              <div class='progress progress-small'>
                                <div class='progress-bar' style='width: 40%'></div>
                              </div>
                            </li>
                            <li>
                              <div class='task'>
                                <span class='pull-left'>
                                  <a href='#'>Quis posuere tortor - maecenas in risus</a>
                                </span>
                                <small class='pull-right'>80%</small>
                              </div>
                              <div class='progress progress-small'>
                                <div class='progress-bar progress-bar-danger' style='width: 80%'></div>
                              </div>
                            </li>
                            <li>
                              <div class='task'>
                                <span class='pull-left'>
                                  <a href='#'>Donec sodales justo in lacus sagittis</a>
                                </span>
                                <small class='pull-right'>58%</small>
                              </div>
                              <div class='progress progress-small'>
                                <div class='progress-bar-success progress-bar' style='width: 68%'></div>
                              </div>
                            </li>
                            <li>
                              <div class='task'>
                                <span class='pull-left'>
                                  <a href='#'>Etiam condimentum sem nec</a>
                                </span>
                                <small class='pull-right'>100%</small>
                              </div>
                              <div class='progress progress-small'>
                                <div class='progress-bar progress-bar-warning' style='width: 100%'></div>
                              </div>
                            </li>
                            <li>
                              <div class='task'>
                                <span class='pull-left'>
                                  <a href='#'>Etiam condimentum sem nec</a>
                                </span>
                                <small class='pull-right'>24%</small>
                              </div>
                              <div class='progress progress-small'>
                                <div class='progress-bar progress-bar-info' style='width: 24%'></div>
                              </div>
                            </li>
                            <li>
                              <div class='task'>
                                <span class='pull-left'>
                                  <a href='#'>Id mi placerat</a>
                                </span>
                                <small class='pull-right'>10%</small>
                              </div>
                              <div class='progress progress-small'>
                                <div class='progress-bar progress-bar-success' style='width: 10%'></div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <footer id='footer'>
            <div class='footer-wrapper'>
              <div class='row'>
                <div class='col-sm-6 text'>
                  Copyright © 2013 Your Project Name
                </div>
                <div class='col-sm-6 buttons'>
                  <a class="btn btn-link" href="http://www.bublinastudio.com/flatty">Preview</a>
                  <a class="btn btn-link" href="https://wrapbootstrap.com/theme/flatty-flat-administration-template-WB0P6NR1N">Purchase</a>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </section>
    </div>
  </div>
    <!-- / jquery [required] -->
    <script src="../assets/javascripts/jquery/jquery.min.js" type="text/javascript"></script>
    <!-- / jquery mobile (for touch events) -->
    <script src="../assets/javascripts/jquery/jquery.mobile.custom.min.js" type="text/javascript"></script>
    <!-- / jquery migrate (for compatibility with new jquery) [required] -->
    <script src="../assets/javascripts/jquery/jquery-migrate.min.js" type="text/javascript"></script>
    <!-- / jquery ui -->
    <script src="../assets/javascripts/jquery/jquery-ui.min.js" type="text/javascript"></script>
    <!-- / jQuery UI Touch Punch -->
    <script src="../assets/javascripts/plugins/jquery_ui_touch_punch/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
    <!-- / bootstrap [required] -->
    <script src="../assets/javascripts/bootstrap/bootstrap.js" type="text/javascript"></script>
    <!-- / modernizr -->
    <script src="../assets/javascripts/plugins/modernizr/modernizr.min.js" type="text/javascript"></script>
    <!-- / retina -->
    <script src="../assets/javascripts/plugins/retina/retina.js" type="text/javascript"></script>
    <!-- / theme file [required] -->
    <script src="../assets/javascripts/theme.js" type="text/javascript"></script>
    <!-- / demo file [not required!] -->
    <script src="../assets/javascripts/demo.js" type="text/javascript"></script>
    <!-- / START - page related files and scripts [optional] -->
    <script src="../assets/javascripts/plugins/flot/excanvas.js" type="text/javascript"></script>
    <script src="../assets/javascripts/plugins/flot/flot.min.js" type="text/javascript"></script>
    <script src="../assets/javascripts/plugins/flot/flot.resize.js" type="text/javascript"></script>
    <script>
      var data, dataset, gd, options, previousLabel, previousPoint, showTooltip, ticks;
      var blue, data, datareal, getRandomData, green, i, newOrders, options, orange, orders, placeholder, plot, purple, randNumber, randSmallerNumber, red, series, totalPoints, update, updateInterval;
      var red = "#f34541";
      var orange = "#f8a326";
      var blue = "#00acec";
      var purple = "#9564e2";
      var green = "#49bf67";
      randNumber = function() {
        return ((Math.floor(Math.random() * (1 + 50 - 20))) + 20) * 800;
      };
      randSmallerNumber = function() {
        return ((Math.floor(Math.random() * (1 + 40 - 20))) + 10) * 200;
      };
      if ($("#stats-chart1").length !== 0) {
        orders = [[1, randNumber() - 10], [2, randNumber() - 10], [3, randNumber() - 10], [4, randNumber()], [5, randNumber()], [6, 4 + randNumber()], [7, 5 + randNumber()], [8, 6 + randNumber()], [9, 6 + randNumber()], [10, 8 + randNumber()], [11, 9 + randNumber()], [12, 10 + randNumber()], [13, 11 + randNumber()], [14, 12 + randNumber()], [15, 13 + randNumber()], [16, 14 + randNumber()], [17, 15 + randNumber()], [18, 15 + randNumber()], [19, 16 + randNumber()], [20, 17 + randNumber()], [21, 18 + randNumber()], [22, 19 + randNumber()], [23, 20 + randNumber()], [24, 21 + randNumber()], [25, 14 + randNumber()], [26, 24 + randNumber()], [27, 25 + randNumber()], [28, 26 + randNumber()], [29, 27 + randNumber()], [30, 31 + randNumber()]];
        newOrders = [[1, randSmallerNumber() - 10], [2, randSmallerNumber() - 10], [3, randSmallerNumber() - 10], [4, randSmallerNumber()], [5, randSmallerNumber()], [6, 4 + randSmallerNumber()], [7, 5 + randSmallerNumber()], [8, 6 + randSmallerNumber()], [9, 6 + randSmallerNumber()], [10, 8 + randSmallerNumber()], [11, 9 + randSmallerNumber()], [12, 10 + randSmallerNumber()], [13, 11 + randSmallerNumber()], [14, 12 + randSmallerNumber()], [15, 13 + randSmallerNumber()], [16, 14 + randSmallerNumber()], [17, 15 + randSmallerNumber()], [18, 15 + randSmallerNumber()], [19, 16 + randSmallerNumber()], [20, 17 + randSmallerNumber()], [21, 18 + randSmallerNumber()], [22, 19 + randSmallerNumber()], [23, 20 + randSmallerNumber()], [24, 21 + randSmallerNumber()], [25, 14 + randSmallerNumber()], [26, 24 + randSmallerNumber()], [27, 25 + randSmallerNumber()], [28, 26 + randSmallerNumber()], [29, 27 + randSmallerNumber()], [30, 31 + randSmallerNumber()]];
        plot = $.plot($("#stats-chart1"), [
          {
            data: orders,
            label: "Orders"
          }, {
            data: newOrders,
            label: "New rders"
          }
        ], {
          series: {
            lines: {
              show: true,
              lineWidth: 3
            },
            shadowSize: 0
          },
          legend: {
            show: false
          },
          grid: {
            clickable: true,
            hoverable: true,
            borderWidth: 0,
            tickColor: "#f4f7f9"
          },
          colors: ["#00acec", "#f8a326"]
        });
      }
      if ($("#stats-chart2").length !== 0) {
        orders = [[1, randNumber() - 5], [2, randNumber() - 6], [3, randNumber() - 10], [4, randNumber()], [5, randNumber()], [6, 4 + randNumber()], [7, 10 + randNumber()], [8, 12 + randNumber()], [9, 6 + randNumber()], [10, 8 + randNumber()], [11, 9 + randNumber()], [12, 10 + randNumber()], [13, 11 + randNumber()], [14, 12 + randNumber()], [15, 3 + randNumber()], [16, 14 + randNumber()], [17, 14 + randNumber()], [18, 15 + randNumber()], [19, 16 + randNumber()], [20, 17 + randNumber()], [21, 18 + randNumber()], [22, 19 + randNumber()], [23, 20 + randNumber()], [24, 21 + randNumber()], [25, 14 + randNumber()], [26, 24 + randNumber()], [27, 25 + randNumber()], [28, 26 + randNumber()], [29, 27 + randNumber()], [30, 31 + randNumber()]];
        newOrders = [[1, randSmallerNumber() - 10], [2, randSmallerNumber() - 10], [3, randSmallerNumber() - 10], [4, randSmallerNumber()], [5, randSmallerNumber()], [6, 4 + randSmallerNumber()], [7, 5 + randSmallerNumber()], [8, 6 + randSmallerNumber()], [9, 6 + randSmallerNumber()], [10, 8 + randSmallerNumber()], [11, 9 + randSmallerNumber()], [12, 10 + randSmallerNumber()], [13, 11 + randSmallerNumber()], [14, 12 + randSmallerNumber()], [15, 13 + randSmallerNumber()], [16, 14 + randSmallerNumber()], [17, 15 + randSmallerNumber()], [18, 15 + randSmallerNumber()], [19, 16 + randSmallerNumber()], [20, 17 + randSmallerNumber()], [21, 18 + randSmallerNumber()], [22, 19 + randSmallerNumber()], [23, 20 + randSmallerNumber()], [24, 21 + randSmallerNumber()], [25, 14 + randSmallerNumber()], [26, 24 + randSmallerNumber()], [27, 25 + randSmallerNumber()], [28, 26 + randSmallerNumber()], [29, 27 + randSmallerNumber()], [30, 31 + randSmallerNumber()]];
        plot = $.plot($("#stats-chart2"), [
          {
            data: orders,
            label: "Orders"
          }, {
            data: newOrders,
            label: "New orders"
          }
        ], {
          series: {
            lines: {
              show: true,
              lineWidth: 3
            },
            shadowSize: 0
          },
          legend: {
            show: false
          },
          grid: {
            clickable: true,
            hoverable: true,
            borderWidth: 0,
            tickColor: "#f4f7f9"
          },
          colors: ["#f34541", "#49bf67"]
        });
        $("#stats-chart2").bind("plotclick", function(event, pos, item) {
          if (item) {
            return alert("Yeah! You just clicked on point " + item.dataIndex + " in " + item.series.label + ".");
          }
        });
      }
    </script>
    <script src="../assets/javascripts/plugins/bootstrap_daterangepicker/bootstrap-daterangepicker.js" type="text/javascript"></script>
    <script src="../assets/javascripts/plugins/common/moment.min.js" type="text/javascript"></script>
    <script src="../assets/javascripts/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>
    <script src="../assets/javascripts/plugins/slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="../assets/javascripts/plugins/timeago/jquery.timeago.js" type="text/javascript"></script>
    <script src="../assets/javascripts/plugins/common/wysihtml5.min.js" type="text/javascript"></script>
    <script src="../assets/javascripts/plugins/common/bootstrap-wysihtml5.js" type="text/javascript"></script>
    <script src="../assets/javascripts/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
    <script src="../assets/javascripts/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>
    <script>
      (function() {
        var cal, calendarDate, d, m, y;
      
        this.setDraggableEvents = function() {
          return $("#events .external-event").each(function() {
            var eventObject;
            eventObject = {
              title: $.trim($(this).text())
            };
            $(this).data("eventObject", eventObject);
            return $(this).draggable({
              zIndex: 999,
              revert: true,
              revertDuration: 0
            });
          });
        };
      
        setDraggableEvents();
      
        calendarDate = new Date();
      
        d = calendarDate.getDate();
      
        m = calendarDate.getMonth();
      
        y = calendarDate.getFullYear();
      
        cal = $(".full-calendar-demo").fullCalendar({
          header: {
            center: "title",
            left: "basicDay,basicWeek,month",
            right: "prev,today,next"
          },
          buttonText: {
            prev: "<span class=\"icon-chevron-left\"></span>",
            next: "<span class=\"icon-chevron-right\"></span>",
            today: "Today",
            basicDay: "Day",
            basicWeek: "Week",
            month: "Month"
          },
          droppable: true,
          editable: true,
          selectable: true,
          select: function(start, end, allDay) {
            return bootbox.prompt("Event title", function(title) {
              if (title !== null) {
                cal.fullCalendar("renderEvent", {
                  title: title,
                  start: start,
                  end: end,
                  allDay: allDay
                }, true);
                return cal.fullCalendar('unselect');
              }
            });
          },
          eventClick: function(calEvent, jsEvent, view) {
            return bootbox.dialog({
              message: $("<form class='form'><label>Change event name</label></form><input id='new-event-title' class='form-control' type='text' value='" + calEvent.title + "' /> "),
              buttons: {
                "delete": {
                  label: "<i class='icon-trash'></i> Delete Event",
                  className: "pull-left",
                  callback: function() {
                    return cal.fullCalendar("removeEvents", function(ev) {
                      return ev._id === calEvent._id;
                    });
                  }
                },
                success: {
                  label: "<i class='icon-save'></i> Save",
                  className: "btn-success",
                  callback: function() {
                    calEvent.title = $("#new-event-title").val();
                    return cal.fullCalendar('updateEvent', calEvent);
                  }
                }
              }
            });
          },
          drop: function(date, allDay) {
            var copiedEventObject, eventClass, originalEventObject;
            originalEventObject = $(this).data("eventObject");
            originalEventObject.id = Math.floor(Math.random() * 99999);
            eventClass = $(this).attr('data-event-class');
            console.log(originalEventObject);
            copiedEventObject = $.extend({}, originalEventObject);
            copiedEventObject.start = date;
            copiedEventObject.allDay = allDay;
            if (eventClass) {
              copiedEventObject["className"] = [eventClass];
            }
            $(".full-calendar-demo").fullCalendar("renderEvent", copiedEventObject, true);
            if ($("#calendar-remove-after-drop").is(":checked")) {
              return $(this).remove();
            }
          },
          events: [
            {
              id: "event1",
              title: "All Day Event",
              start: new Date(y, m, 1),
              className: 'event-orange'
            }, {
              id: "event2",
              title: "Long Event",
              start: new Date(y, m, d - 5),
              end: new Date(y, m, d - 2),
              className: "event-red"
            }, {
              id: 999,
              id: "event3",
              title: "Repeating Event",
              start: new Date(y, m, d - 3, 16, 0),
              allDay: false,
              className: "event-blue"
            }, {
              id: 999,
              id: "event3",
              title: "Repeating Event",
              start: new Date(y, m, d + 4, 16, 0),
              allDay: false,
              className: "event-green"
            }, {
              id: "event4",
              title: "Meeting",
              start: new Date(y, m, d, 10, 30),
              allDay: false,
              className: "event-orange"
            }, {
              id: "event5",
              title: "Lunch",
              start: new Date(y, m, d, 12, 0),
              end: new Date(y, m, d, 14, 0),
              allDay: false,
              className: "event-red"
            }, {
              id: "event6",
              title: "Birthday Party",
              start: new Date(y, m, d + 1, 19, 0),
              end: new Date(y, m, d + 1, 22, 30),
              allDay: false,
              className: "event-purple"
            }
          ]
        });
      
      }).call(this);
    </script>
    <script>
      $(".chat .new-message").live('submit', function(e) {
        var chat, date, li, message, months, reply, scrollable, sender, timeago;
        date = new Date();
        months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        chat = $(this).parents(".chat");
        message = $(this).find("#message_body").val();
        $(this).find("#message_body").val("");
        if (message.length !== 0) {
          li = chat.find("li.message").first().clone();
          li.find(".body").text(message);
          timeago = li.find(".timeago");
          timeago.removeClass("in");
          var month = (date.getMonth() + 1);
          var date_day = (date.getDate());
          timeago.attr("title", "" + (date.getFullYear()) + "-" + (month<10 ? '0' : '') + month + "-" + (date_day<10 ? '0' : '' ) + date_day + " " + (date.getHours()) + ":" + (date.getMinutes()) + ":" + (date.getSeconds()) + " +0200");
          timeago.text("" + months[date.getMonth()] + " " + (date.getDate()) + ", " + (date.getFullYear()) + " " + (date.getHours()) + ":" + (date.getMinutes()));
          setTimeAgo(timeago);
          sender = li.find(".name").text().trim();
          chat.find("ul").append(li);
          scrollable = li.parents(".scrollable");
          $(scrollable).slimScroll({
            scrollTo: scrollable.prop('scrollHeight') + "px"
          });
          li.effect("highlight", {}, 500);
          reply = scrollable.find("li").not(":contains('" + sender + "')").first().clone();
          setTimeout((function() {
            date = new Date();
            timeago = reply.find(".timeago");
            timeago.attr("title", "" + (date.getFullYear()) + "-" + (month<10 ? '0' : '') + month + "-" + (date_day<10 ? '0' : '' ) + date_day + " " + (date.getHours()) + ":" + (date.getMinutes()) + ":" + (date.getSeconds()) + " +0200");
            timeago.text("" + months[date.getMonth()] + " " + (date.getDate()) + ", " + (date.getFullYear()) + " " + (date.getHours()) + ":" + (date.getMinutes()));
            setTimeAgo(timeago);
            scrollable.find("ul").append(reply);
            $(scrollable).slimScroll({
              scrollTo: scrollable.prop('scrollHeight') + "px"
            });
            return reply.effect("highlight", {}, 500);
          }), 1000);
        }
        return e.preventDefault();
      });
    </script>
    <script>
      $(".recent-activity .ok").live("click", function(e) {
        $(this).tooltip("hide");
        $(this).parents("li").fadeOut(500, function() {
          return $(this).remove();
        });
        return e.preventDefault();
      });
      $(".recent-activity .remove").live("click", function(e) {
        $(this).tooltip("hide");
        $(this).parents("li").fadeOut(500, function() {
          return $(this).remove();
        });
        return e.preventDefault();
      });
      $("#comments-more-activity").live("click", function(e) {
        $(this).button("loading");
        setTimeout((function() {
          var list;
          list = $("#comments-more-activity").parent().parent().find("ul");
          list.append(list.find("li:not(:first)").clone().effect("highlight", {}, 500));
          return $("#comments-more-activity").button("reset");
        }), 1000);
        e.preventDefault();
        return false;
      });
      $("#users-more-activity").live("click", function(e) {
        $(this).button("loading");
        setTimeout((function() {
          var list;
          list = $("#users-more-activity").parent().parent().find("ul");
          list.append(list.find("li:not(:first)").clone().effect("highlight", {}, 500));
          return $("#users-more-activity").button("reset");
        }), 1000);
        e.preventDefault();
        return false;
      });
    </script>
    <script>
      (function() {
        $("#daterange").daterangepicker({
          ranges: {
            Yesterday: [moment().subtract("days", 1), moment().subtract("days", 1)],
            "Last 30 Days": [moment().subtract("days", 29), moment()],
            "This Month": [moment().startOf("month"), moment().endOf("month")]
          },
          startDate: moment().subtract("days", 29),
          endDate: moment(),
          opens: "left",
          cancelClass: "btn-danger",
          buttonClasses: ['btn', 'btn-sm']
        }, function(start, end) {
          return $("#daterange span").html(start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY"));
        });
      
      }).call(this);
    </script>
    <script>
      $(".todo-list .new-todo").live('submit', function(e) {
        var li, todo_name;
        todo_name = $(this).find("#todo_name").val();
        $(this).find("#todo_name").val("");
        if (todo_name.length !== 0) {
          li = $(this).parents(".todo-list").find("li.item").first().clone();
          li.find("input[type='checkbox']").attr("checked", false);
          li.removeClass("important").removeClass("done");
          li.find("label.todo span").text(todo_name);
          $(".todo-list ul").first().prepend(li);
          li.effect("highlight", {}, 500);
        }
        return e.preventDefault();
      });
      
      $(".todo-list .actions .remove").live("click", function(e) {
        $(this).tooltip("hide");
        $(this).parents("li").fadeOut(500, function() {
          return $(this).remove();
        });
        e.stopPropagation();
        e.preventDefault();
        return false;
      });
      
      $(".todo-list .actions .important").live("click", function(e) {
        $(this).parents("li").toggleClass("important");
        e.stopPropagation();
        e.preventDefault();
        return false;
      });
      
      $(".todo-list .check").live("click", function() {
        var checkbox;
        checkbox = $(this).find("input[type='checkbox']");
        if (checkbox.is(":checked")) {
          return $(this).parents("li").addClass("done");
        } else {
          return $(this).parents("li").removeClass("done");
        }
      });
    </script>
    <!-- / END - page related files and scripts [optional] -->
  </body>
</html>

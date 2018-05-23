<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css">
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <!--<link rel="stylesheet" href="/assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">-->
    
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">WPCustomRepository</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Plugin
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/plugin/list">Plugin List <i class="fa fa-list pull-right" style="line-height: 24px;"></i></a>
                        <a class="dropdown-item" href="/plugin/add">Add Plugin <i class="fa fa-plug pull-right" style="line-height: 24px;"></i></a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        License
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/license/list">License List <i class="fa fa-list pull-right" style="line-height: 24px;"></i></a>
                        <a class="dropdown-item" href="/license/add">Add License <i class="fa fa-plug pull-right" style="line-height: 24px;"></i></a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Language
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/language?locale=de"><img src="/assets/images/country_flags/de.png" height="14">&nbsp; German</a>
                        <a class="dropdown-item" href="/language?locale=en"><img src="/assets/images/country_flags/en.png" height="14">&nbsp; English</a>
                    </div>
                </li>
                <?php if (AuthHelper::isLoggedIn() && AuthHelper::isAdmin($_SESSION['user'])) { ?>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admin                        </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: 250px;">
                        <a class="dropdown-item" href="/admin/dashboard">
                            Dashboard<i class="fa fa-dashboard pull-right" style="line-height: 24px;"></i>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/admin/user/list">
                            User Overview<i class="fa fa-list pull-right" style="line-height: 24px;"></i>
                        </a>
                        <a class="dropdown-item" href="/admin/user/add">
                            Add User<i class="fa fa-plus-circle pull-right" style="line-height: 24px;"></i>
                        </a>
                        <?php if ((bool)getenv('LICENSE_SYSTEM_ENABLED') === true) { ?>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/admin/license/list">
                            License Overview<i class="fa fa-list pull-right" style="line-height: 24px;"></i>
                        </a>
                        <a class="dropdown-item" href="/admin/license/add">
                            Add License<i class="fa fa-plus-circle pull-right" style="line-height: 24px;"></i>
                        </a>
                        <?php } ?>
                        <?php if ((bool)getenv('EMAIL_TRACKING_ENABLED') === true) { ?>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/admin/tracking_mail/list">
                            Tracking E-Mails<i class="fa fa-envelope pull-right" style="line-height: 24px;"></i>
                        </a>
                        <?php } ?>
                    </div>
                </li>
                <?php } ?>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-cog"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: 250px;">
                        <?php if (AuthHelper::isLoggedIn()) { ?>
                            <a class="dropdown-item" href="/user/settings"><i class="fa fa-cogs pull-right"></i> Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/logout" data-tooltip="" data-placement="bottom" title="" data-original-title="Logged in as: <?php echo AuthHelper::getUsername(); ?>">
                                <i class="fa fa-sign-out pull-right"></i> Logout
                            </a>
                        <?php } else { ?>
                            <a class="dropdown-item" href="/login"><i class="fa fa-sign-in"></i> Login</a>
                        <?php } ?>
                    
                </li>

            </ul>
        </div>
    </div>
</nav>

<!--<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">WPCustomRepository</a>
        </div>
        
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
                <li><a href="#">Home</a></li>
                <?php if (AuthHelper::isLoggedIn() && AuthHelper::isAdmin($_SESSION['user'])) { ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown03">
                            <ul class="nav">
                                <li><a class="dropdown-item" href="/admin/dashboard">Dashboard</a></li>
                                <li class="nav-divider"></li>
                                <li><a class="dropdown-item" href="/admin/user/list">User List</a></li>
                                <li><a class="dropdown-item" href="/admin/user/add">Add User</a></li>
                                <?php if (getenv('LICENSE_SYSTEM_ENABLED') === 'true') { ?>
                                    <li class="nav-divider"></li>
                                    <li><a class="dropdown-item" href="/admin/license/list">License Overview</a></li>
                                    <li><a class="dropdown-item" href="/admin/license/add">Add License</a></li>
                                <?php } ?>
                                <?php if (getenv('EMAIL_TRACKING_ENABLED') === 'true') { ?>
                                    <li class="nav-divider"></li>
                                    <li><a class="dropdown-item" href="/admin/tracking_mail/list">Tracking Mail List</a></li>
                                    
                                <?php } ?>
                                
                            </ul>
                        </div>
                    </li>
                    
                <?php } ?>
                <li><a href="/plugin/list">Plugins</a></li>
                <?php if (!AuthHelper::isLoggedIn()) { ?> <li><a href="/login">Login</a></li> <?php } ?>
                
                
                <?php if (AuthHelper::isLoggedIn()) { ?> <li><a title="Logged in as " href="/logout">Logout</a></li> <?php } ?>
            </ul>
        </div>
        
    </div>
</nav>-->


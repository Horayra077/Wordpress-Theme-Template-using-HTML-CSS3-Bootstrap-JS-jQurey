<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
	  <meta name="Meta Title" content="M2SYS eGov Platform | Law Enforcement Management System" />
  <meta name="Meta Description" content="M2SYS eGov's Law Enforcement Management System for efficiently and effectively managing aspects of law enforcement operations." />
  <meta name="Meta Keyword" content="law enforcement management system" />
</head>

<body>
    <!-- Header Section Begin -->
    <header class="header-section">
        <nav class="navbar fixed-top navbar-expand-lg bg-white header-separator">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img class="logo-dark" src="<?php echo get_theme_file_uri('assets/image/site-logo.png') ?>" alt="Site Logo" width="40" height="40">
                    <img class="logo-white" src="<?php echo get_theme_file_uri('assets/image/product-logo.png') ?>" alt="Site Logo" width="100" height="40">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item pe-lg-5"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item pe-lg-5"><a class="nav-link" href="#">About Us</a></li>
                        <li class="nav-item pe-lg-5"><a class="nav-link" href="#">Lawyers</a></li>
                        <li class="nav-item pe-lg-5"><a class="nav-link" href="#">Blog</a></li>
                        <li class="nav-item pe-lg-5"><a class="nav-link" href="#">Contuct</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Dropdown right </a>
                            <ul class="dropdown-menu dropdown-menu-end fade-down">
                                <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
                                <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <!-- Header End -->
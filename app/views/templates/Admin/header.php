<?php  
    // session_start();
    if (!isset($_SESSION['login'] )) {
        Flasher::setFlash('Silakan Login Terlebih Dahulu', 'danger');
        header('Location: '.BASEURL.'/Admin/pg_login');
        exit;
    }    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <!-- Custon CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/admin.css">
    <!-- Google Fonts -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Quattrocento'>
    <!-- Favicon -->
    <link rel="icon" type="image/gif" href="<?= BASEURL; ?>/image/favicon.png">

    <title>ADMIN | TEAM VALIANT</title>
  </head>
<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header text-center py-3">
                <a href="<?= BASEURL; ?>/admin"><h3>VALIANT</h3></a>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="<?= BASEURL; ?>/admin">Home</a>
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/admin/pg_news">News</a>
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/admin/pg_team">Team</a>
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/admin/pg_partner">Partner</a>
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/admin/pg_admin">Admin</a>
                </li>
            </ul>
        </nav>

        
        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand navbar-light bg-light static-top">

                <button type="button" id="sidebarCollapse" class="btn btn-secondary">
                    Menu
                </button>
                <!-- Navbar -->
                <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                    <div class="btn-group dropleft">
                      <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Kim Bora
                      </button>
                      <div class="dropdown-menu">
                            <a href="<?= BASEURL; ?>/Admin/Profile"><button class="dropdown-item" type="button">Profile</button></a>
                            <a href="<?= BASEURL; ?>/Admin/Logout"><button class="dropdown-item" type="button">Log Out</button></a>
                      </div>
                    </div>
                </ul>

            </nav>
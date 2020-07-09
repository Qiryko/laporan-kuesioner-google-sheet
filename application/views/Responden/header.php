<?php
/**
 * Created by PhpStorm.
 * User: Shinta
 * Date: 5/31/2018
 * Time: 11:16 PM
 */ ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi Pengukuran Analisis GAP</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Icon -->
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>assets/css/business-casual.css" rel="stylesheet">

</head>

<body>
<div class="background">
    <h1 class="site-heading text-center text-white d-none d-lg-block">
        <span class="site-heading-upper text-primary mb-3">Aplikasi Pengukuran</span>
        <span class="site-heading-lower">Analisis GAP</span>
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
        <div class="container">
            <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-lg-4">
                        <a class="btn nav-link text-uppercase text-expanded" href="<?=site_url('Responden/index')?>"><i class="fa fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item px-lg-4">
                        <a class="btn nav-link text-uppercase text-expanded" href="<?=site_url('Responden/penelitian')?>"><i class="fa fa-bar-chart"></i> Penelitian</a>
                    </li>
                    <li class="nav-item px-lg-4">
                        <a class="btn nav-link text-uppercase text-expanded" href="<?=site_url('Responden/variabel')?>"><i class="fa fa-list"></i> Variabel</a>
                    </li>
                    <li class="nav-item px-lg-4">
                        <div class="dropdown">
                            <a class="btn dropdown-toggle nav-link text-uppercase text-expanded" data-toggle="dropdown" id="menu1"><i class="fa fa-user"></i> <?php $username = $this->session->userdata('username'); echo $username ?></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                <li role="presentation">
                                    <a role="menuitem" class="nav-link text-uppercase text-expanded" href="<?=site_url('Responden/editakun')?>"><i class="fa fa-pencil"></i> Ubah Akun</a>
                                </li>
                                <li role="presentation">
                                    <a role="menuitem" class="nav-link text-uppercase text-expanded" href="<?=site_url('Login/logout')?>"><i class="fa fa-sign-out"></i> Logout</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<?php
// Copyright (c) 2016 - 2017, Eduardo Fernández
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="<?=base_url()?>assets/js/pace.min.js" type="text/javascript"></script>
        <link href="<?=base_url()?>assets/css/pace.css" rel="stylesheet" type="text/css"/>
        <meta charset="ISO-8859-15">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Procrastinator</title>
        <meta name="description" content="Procrastinator - Stop wasting time">
        <meta name="author" content="Eduardo Fernandez">
        <link rel="icon" href="<?=base_url()?>assets/img/procrastinator-favicon.png">

        <link href="<?=base_url()?>assets/css/scss/main.css" rel="stylesheet" type="text/css"/>
<!--
        <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?=base_url()?>assets/css/main.css" rel="stylesheet" type="text/css"/>
-->
    </head>
    <body>
        <div class="container-fluid" id="header">
            <nav class="navbar navbar-default no-selec">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#pr-navbar">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                    <a class="navbar-brand" href="<?=base_url()?>">
                        <div class="titulo">PROCRASTINATOR</div>
                        <div class="subtitulo">STOP WASTING TIME</div>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="pr-navbar">
                  <ul class="nav navbar-nav">
                    <li class="<?php if (current_url() == base_url()) { echo 'active'; } ?>"><a href="<?=base_url()?>"><span class="glyphicon glyphicon-tasks"></span>&nbsp;Tasks</a></li>
                    <li class="<?php if (current_url() == base_url('calendar')) { echo 'active'; } ?>"><a href="<?=base_url('calendar')?>"><span class="glyphicon glyphicon-calendar"></span>&nbsp;Calendar</a></li>
                    <li class="<?php if (current_url() == base_url('diary')) { echo 'active'; } ?>"><a href="<?=base_url('diary')?>"><span class="glyphicon glyphicon-book"></span>&nbsp;Diary</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">More&nbsp;<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="<?=base_url('mail')?>"><span class="glyphicon glyphicon-envelope"></span>&nbsp;Mail</a></li>
                        <li><a href="<?=base_url('latifr')?>"><span class="glyphicon glyphicon-scissors"></span>&nbsp;Url Shortener</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="http://hyperion.latiendafriki.es/rc"><span class="glyphicon glyphicon-envelope"></span>&nbsp;Roundcube</a></li>
                        <li><a href="https://wiki.latiendafriki.es"><span class="glyphicon glyphicon-education"></span>&nbsp;Wiki</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="https://twitter.com/LaTiendaFriki"><span class="glyphicon glyphicon-link"></span>&nbsp;Twitter</a></li>
                        <li><a href="https://facebook.com/LaTiendaFriki.es"><span class="glyphicon glyphicon-link"></span>&nbsp;Facebook</a></li>
                        <li class="disabled"><a href="https://instagram.com/LaTiendaFriki"><span class="glyphicon glyphicon-link"></span>&nbsp;Instagram</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="http://lati.fr/"><span class="glyphicon glyphicon-scissors"></span>&nbsp;lati.fr</a></li>
                        <li><a href="https://latiendafriki.es"><span class="glyphicon glyphicon-link"></span>&nbsp;latiendafriki.es</a></li>
                      </ul>
                    </li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                      <li class="<?php if (current_url() == base_url('admin')) { echo 'active'; } ?>"><a href="<?=base_url('admin')?>"><span class="glyphicon glyphicon-sunglasses"></span>&nbsp;Admin</a></li>
                      <li class="hidden-xs raton-normal"><a>|</a></li>
                      <li><a href="<?=base_url('auth/logout')?>"><span class="glyphicon glyphicon-off"></span>&nbsp;Logout</a></li>
                  </ul>
                </div>
              </div>
            </nav>
        </div>
<?php
// Copyright (c) 2016 - 2017, Eduardo Fernández


$login_url = 'auth/login';
$form_attrib = array(
    'class'   => 'form-signin white',
    'method'  => 'post'
);
array_push($identity,
    'class' => 'form-control',
    'name'  => 'identity',
    'placeholder' => 'User Name'
);
array_push($password,
    'class'       => 'form-control',
    'name'        => 'password',
    'placeholder' => 'Password'
);
$btn = array(
    'class' => 'btn-login-form',
    'type'  => 'submit',
    'name'  => 'get_form',
    'id'    => 'get_form',
    'value' => lang('login_submit_btn')
);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="ISO-8859-15">
      <title>Procrastinator - Login</title>
      <meta name="description" content="Procrastinator - Stop wasting time">
      <meta name="author" content="Eduardo Fernandez">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="<?=base_url()?>assets/img/procrastinator-favicon.png">
      <link href="<?=base_url()?>assets/css/scss/main.css" rel="stylesheet" type="text/css"/>
<!--    <link href="<?=base_url()?>assets/css/main.css" rel="stylesheet" type="text/css"/> -->
  </head>
  <body class="bodylog no-selec">
    <div class="container">
      </div>
      <div id="infoMessage">

        <?php 
          if(isset($message)) {
              echo $message;
          }
        ?>

      <div class="container-fluid raton-senala" id="logo">
        <a href="#" class="nounderline">
          <div id="titulo-login">PROCRASTINATOR</div>
          <div id="subtitulo-login">STOP WASTING TIME</div>
        </a>
      </div>

      <?=form_open($login_url, $form_attrib);?>

        <p>
          <?=lang('login_identity_label', 'identity');?>
          <?=form_input($identity);?>
        </p>
        <p>
          <?=lang('login_password_label', 'password');?>
          <?=form_input($password);?>
        </p>
        <p>
          <?=lang('login_remember_label', 'remember');?>
          <?=form_checkbox('remember', '1', FALSE, 'id="remember"');?>
        </p>
        <p><?=form_submit($btn);?></p>

      <?=form_close();?>

      <p id="forgot">
        <a href="forgot_password" class="nounderline">
          <?=lang('login_forgot_password');?>
        </a>
      </p>
    </div>
      <div class="inner">
        <p>Made by <a target="blank" href="https://twitter.com/EduFdezSoy" class="nounderline">Eduardo Fern&aacute;ndez</a></p>   
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>assets/js/main.js" type="text/javascript"></script>
  </body>
</html>
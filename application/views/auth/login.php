<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* 
 * The MIT License
 *
 * Copyright 2016 EduFdezSoy, (Eduardo Fernandez).
 *
 * @link https://twitter.com/EduFdezSoy
 * @mail edufdezsoy@gmail.com
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

$login_url = 'auth/login';
$form_attrib = array(
    'class' => 'form-signin white',
    'method' => 'post'
);
$user_attrib = array(
    'class' => 'form-control',
    'type' => 'text',
    'name' => 'identity',
    'placeholder' => 'User Name'
);
$pass_attrib = array(
    'class' => 'form-control',
    'name' => 'password',
    'placeholder' => 'Password',
    'type' => 'password'

);
$check_attrib = array(
    'name' => 'remember',
    'value' => '1',
    'checked' => 'FALSE',
    'id' => 'remember',
    'checked' => ''
);
$btn_attrib = array(
    'class' => 'btn btn-lg btn-primary btn-block',
    'type' => 'submit',
    'name' => 'get_form',
    'id' => 'get_form',
    'value' => 'Submit'
);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="ISO-8859-15">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Procrastinator - Login</title>
        <meta name="description" content="Procrastinator - Stop wasting time">
        <meta name="author" content="Eduardo Fernandez">
        <link rel="icon" href="<?=base_url()?>assets/img/procrastinator-favicon.png">
        <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?=base_url()?>assets/css/main.css" rel="stylesheet" type="text/css"/>
		<script src="<?=base_url()?>assets/js/pace.min.js" type="text/javascript"></script>
    </head>
    <body class="bodylog no-selec">
        <div class="container">
            
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
                <?=form_open($login_url, $form_attrib)?>
                   <?=form_input($user_attrib)?>
                   <?=form_input($pass_attrib)?>
                   <div>
                       <?=form_checkbox($check_attrib)?>
                       &nbsp;Remember Me
                   </div>
                   <?=form_input($btn_attrib)?>
            <p id="forgot"><a href="forgot_password" class="nounderline">Forgot your password?</a></p>
               <?=form_close()?>
        </div> <!-- /container -->
        <div class="mastfoot raton-normal">
            <div class="inner">
                <p>Made by <a target="blank" href="https://twitter.com/EduFdezSoy" class="nounderline">Eduardo Fern&aacute;ndez</a></p>
                
                <?php if(ENVIRONMENT !== 'production'){ ?>
                    <d>Rendered in <strong>{elapsed_time}</strong> sec</p>
                <?php } ?>
                
            </div>
        </div>
    <!-- JavaScripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/js/main.js" type="text/javascript"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>

<?php
/* End of file login.php */
/* Location: /views/login.php */ 
?>
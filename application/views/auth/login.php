<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="container">
    <h1>PROCRASTINATOR</h1>
    <h2>STOP WASTING TIME</h2>
    <?php
    echo form_open();
    echo form_label('Email:','email').'<br />';
    echo form_error('email');
    echo form_input('email').'<br />';
    echo form_label('Password:', 'password').'<br />';
    echo form_error('password');
    echo form_password('password').'<br />';
    echo form_checkbox('remember','1',FALSE).' Remember me<br />';
    echo form_submit('submit','Log In');
    echo form_close();
    ?>
</div>
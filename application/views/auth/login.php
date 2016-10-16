<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="container">

    <?php
    $this->form_validation->set_rules('email', 'Email', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');
    ?>

</div>
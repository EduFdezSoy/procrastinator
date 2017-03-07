<h1><?=lang('login_heading');?></h1>
<p><?=lang('login_subheading');?></p>

<div id="infoMessage"><?=$message;?></div>

<?=form_open("auth/login");?>

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


  <p><?=form_submit('submit', lang('login_submit_btn'));?></p>

<?=form_close();?>

<p><a href="forgot_password"><?=lang('login_forgot_password');?></a></p>
<!-- 管理画面ログイン -->
<div class="login_admin_form text-center" id = "login_admin" >
  <div class="row login_logo">
    <img src="<?php echo base_url('/images/common/logo_hanamigawaswim.svg')?>" alt="logo hanamigawaswin">
  </div>
  <form class = "form-horizontal" id = "admin_log">
    <div class="form-group row">
      <div class="col-sm-4 log-height-label">
        <label class = 'control-label' for="username">ログインID</label>
      </div>
      <div class="col-sm-7">
        <input type="username" maxlength = "60" minlength = "3" class="form-control" id="username" placeholder="ログインID" name="username">
        <?php echo form_error('username'); ?>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-4 log-height-label">
        <label  class = 'control-label' for="pwd">パスワード</label>
      </div>
      <div class="col-sm-7">
        <input type="password" class="form-control" id="pwd" placeholder="パスワード" name="pwd">
        <?php echo form_error('pwd'); ?>
        <!-- <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_token_name(); ?>"> -->
      </div>
    </div>
    <div class="row bg-danger err_msg"></div>
    <div class="row log-center-btn">
      <div class="col-sm-4"></div>
      <div class="col-sm-7">
        <button type="button" class="btn btn-default" id = "login_btn">ログイン</button>
      </div>
    </div>
    
  </form>
</div>


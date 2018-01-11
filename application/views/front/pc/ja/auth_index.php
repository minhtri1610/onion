<main class="frame-main">
  <article class="frame-article">
    <!-- content01 -->
    <!--==================================================-->

    <section class="content01 mt-xs-50 mt-md-100 mb-xs-50 mb-md-100">
      <div class="container">
        <div class="content01-main">
          <h1 class="content01-title">Login</h1>

          <form class="content01-form" action="" method="" id = "login_customer">
            <div class="content01-form-text content01-form-text-1">
              <p class="content01-text-1">会員番号またはメールアドレス</p>
              <input type="text" name="users" value="" id = "users">
            </div>
            <div class="content01-form-text content01-form-text-2">
              <p class="content01-text-1">パスワード</p>
              <input type="password" name="pass" value="" id = "pass">
            </div>
            <div class="content01-form-checkbox content01-form-checkbox-2">
              <span class="content01-text-2">
                <input type="checkbox" name="checkbox_save" value="" id = "checkbox_save">
                会員番号を記録する
              </span>
              <div class="err_msg"><!-- message -->
              </div>
            </div>
            <div class="content01-form-submit mb-xs-30">
              <input class="alpha" type="button" value="送信" id = "login_btn" >
            </div>
            <a class="content01-forget-pass" href="<?php echo base_url('auth/forgot-password')?>">パスワードを忘れたら？</a>
          </form>

        </div>
      </div>
    </section><!-- .content01 -->



  </article>
</main>

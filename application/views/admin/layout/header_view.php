<!-- header01 -->
<!--==================================================-->
<header class="header01">
    <div class="container">
        <div class="header01-main">
            <div class="header01-main-cell header01-main-1">
                <a href="<?php echo site_url('admin') ?>">
                <img class="header01-logo" src="/images/common/logo_hanamigawaswim.svg">
                </a>
            </div>
            <div class="header01-main-cell header01-main-2">
                <span class="header01-text-2">運営管理画面</span>
            </div>
            <div class="header01-main-cell header01-main-3">
                <?php 
                    if(isset($admin_account) && ($admin_account['logged_in'] == 1)){
                        
                        echo '<p class="header01-text-3" id = "logout_admin"><a href="#">ログアウト</a></p>';
                        echo '<p class="header01-text-4">'.$admin_account['email'].'</p>';
                    }
                ?>
                
            </div>
        </div>
    </div>
</header><!-- .header01 -->
<?php
    if (
            strpos(uri_string(), '/bus-route') || strpos(uri_string(), '/bus-stop')
            || strpos(uri_string(), '/item') || strpos(uri_string(), '/subject')
            || strpos(uri_string(), '/level') || strpos(uri_string(), '/event')
            || strpos(uri_string(), '/distance') || strpos(uri_string(), '/course')
            || strpos(uri_string(), '/classes')
    ) {
        ?>
        <div class="common-bg-1">

            <main class="frame-main pt-xs-50">
                <article class="frame-article">

                    <!-- content03 -->
                    <!--==================================================-->

                    <section class="content03 mb-xs-50 mb-md-70">
                        <div class="container">
                            <div class="content03-main">
                                <div class="row mb-xs-30">
                                    <p class="content03-text-3 mb-xs-30">
                                        マスター設定
                                        <button class="btn btn-danger">CSV出力</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="content03 mb-xs-50 mb-md-1000 hidden-xs">
                            <div class="container">
                                <div class="">
                                    <ul class="main-menu">
                                        <a href="<?php echo site_url('admin/course') ?>"><li style="<?php if (strpos(uri_string(), '/course')) echo "background-color: #E98582;" ?>" class="tab-menu">練習コース</li></a>
                                        <a href="<?php echo site_url('admin/classes') ?>"><li style="<?php if (strpos(uri_string(), '/classes')) echo "background-color: #E98582;" ?>" class="tab-menu">クラス</li></a>
                                        <a href="<?php echo site_url('admin/bus-stop') ?>"><li style="<?php if (strpos(uri_string(), '/bus-stop')) echo "background-color: #E98582;" ?>" class="tab-menu">バス停</li></a>
                                        <a href="<?php echo site_url('admin/bus-routes') ?>"><li style="<?php if (strpos(uri_string(), '/bus-routes')) echo "background-color: #E98582;" ?>" class="tab-menu">バスコース</li></a>
                                        <a href="<?php echo site_url('admin/item') ?>"><li style="<?php if (strpos(uri_string(), '/item')) echo "background-color: #E98582;" ?>" class="tab-menu">品目</li></a>
                                        <a href="<?php echo site_url('admin/subject') ?>"><li style="<?php if (strpos(uri_string(), '/subject')) echo "background-color: #E98582;" ?>" class="tab-menu">科目</li></a>
                                        <a href="<?php echo site_url('admin/level') ?>"><li style="<?php if (strpos(uri_string(), '/level')) echo "background-color: #E98582;" ?>" class="tab-menu">級</li></a>
                                        <a href="#"><li style="<?php if (strpos(uri_string(), '/xyz')) echo "background-color: #E98582;" ?>" class="tab-menu">種目</li></a>
                                        <a href="<?php echo site_url('admin/distance') ?>"><li style="<?php if (strpos(uri_string(), '/distance')) echo "background-color: #E98582;" ?>" class="tab-menu">距離</li></a>
                                        <a href="#"><li style="<?php if (strpos(uri_string(), '/abc')) echo "background-color: #E98582;" ?>" class="tab-menu">銀行・支店</li></a>
                                        <a href="#"><li style="<?php if (strpos(uri_string(), '/def')) echo "background-color: #E98582;" ?>" class="tab-menu">ゆうちょ銀行</li></a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="content03 mb-xs-50 mb-md-1000 visible-xs">
                            <div id="container">
                                <div class="wrapper-mobile">
                                    <div class="content-header-mobile">
                                        <ul>
                                            <a href="<?php echo site_url('admin/course') ?>"><li>練習コース</li></a>
                                            <a href="<?php echo site_url('admin/classes') ?>"><li>クラス</li></a>
                                            <a href="<?php echo site_url('admin/bus-stop') ?>"><li>バス停</li></a>
                                            <a href="<?php echo site_url('admin/bus-routes') ?>"><li>バスコース</li></a>
                                            <a href="<?php echo site_url('admin/item') ?>"><li>品目</li></a>
                                            <a href="<?php echo site_url('admin/subject') ?>"><li>科目</li></a>
                                            <a href="<?php echo site_url('admin/level') ?>"><li>級</li></a>
                                            <a href="#"><li>種目</li></a>
                                            <a href="<?php echo site_url('admin/distance') ?>"><li>距離</li></a>
                                            <a href="#"><li>銀行・支店</li></a>
                                            <a href="#"><li>ゆうちょ銀行</li></a>
                                        </ul>
                                    </div>
                                    <div class="parent">Tab Menu</div>
                                </div>
                            </div>
                        <!-- .content04 -->
                    </section><!-- .content03 -->
                    <!--==================================================-->   　
                </article>
            </main>
        </div><!-- .common-bg-1 -->
        <?php
    }
    if (strpos(uri_string(), 'edit-') ||strpos(uri_string(), 'create-'))
    {
    ?>
        <div class="common-bg-1">

            <main class="frame-main pt-xs-50">
                <article class="frame-article">

                    <!-- content03 -->
                    <!--==================================================-->

                    <section class="content03 mb-xs-50 mb-md-70">
                        <div class="container">
                            <div class="content03-main">
                                <div class="row mb-xs-30">
                                    <p class="content03-text-3 mb-xs-30">
                                        <?php
                                        echo $title;
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section><!-- .content03 -->
                    <!--==================================================-->   　
                </article>
            </main>
        </div><!-- .common-bg-1 -->

    <?php
    }
?>
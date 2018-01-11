
<div class="common-bg-2">

    <main class="frame-main pt-xs-50">
        <article class="frame-article">

            <section class="content05 mb-xs-50 mb-md-70 mb-xl-100">
                <div class="container">
                    <p class="box-msg">
                        <?php
                        if($this->session->flashdata('message')){
                            echo $this->session->flashdata('message');
                        }
                        ?>
                    </p>
                    <div class="content05-main">
                        <div class="content05-main-inner">
                            <div>
                                <form action="<?php echo site_url('admin/create-level')?>" method="post">
                                    <div class="form-group">
                                        <label class="col-md-2 col-xs-7">
                                            級コード
                                        </label>
                                        <input class="form-control col-md-2" type="text" name="grade_code" required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label class="col-md-2 col-xs-7">
                                            級名
                                        </label>
                                        <input class="form-control col-md-4" type="text" name="grade_name" required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <div class="col-md-2 col-xs-3">
                                        </div>
                                        <button class="submit">更新</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- .content05 -->

            　

        </article>
    </main>

</div><!-- .common-bg-1 -->


<!-- pagetop170 -->
<!--==================================================-->

<button class="pagetop170">
    <img src="/images/common/icon-16.svg">
</button>
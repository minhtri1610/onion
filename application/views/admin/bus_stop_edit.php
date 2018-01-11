
<div class="common-bg-2">

    <main class="frame-main pt-xs-50">
        <article class="frame-article">

            <section class="content05 mb-xs-50 mb-md-70 mb-xl-100">
                <div class="container">
                    <div class="content05-main">
                        <div class="content05-main-inner">
                            <div>
                                <form action="<?php echo site_url('admin/edit-bus-stop/'.$get_bus_stop['id'])?>" method="post">
                                    <div class="form-group">
                                        <label class="col-md-2 col-xs-7">
                                            乗車場所コード
                                        </label>
                                        <input class="form-control col-md-2" type="text" name="bus_stop_code" value="<?php echo $get_bus_stop['bus_stop_code'] ?>" required>
                                    </div>
                                    <br/>
                                    <br/>
                                    <div class="form-group">
                                        <label class="col-md-2 col-xs-7">
                                            乗車場所
                                        </label>
                                        <input class="form-control col-md-4" type="text" name="bus_stop_name" value="<?php echo $get_bus_stop['bus_stop_name'] ?>" required>
                                    </div>
                                    <br/>
                                    <br/>
                                    <div class="form-group">
                                        <label class="col-md-1 col-xs-3"></label>
                                        <button class="submit">新規登録</button>
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
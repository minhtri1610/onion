
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
                                <form action="<?php echo site_url('admin/create-item/')?>" method="post">
                                    <div class="form-group">
                                        <label class="col-md-2 col-xs-6">
                                            品目コード
                                        </label>
                                        <input class="form-control col-md-2 col-xs-6" type="text" name="item_code" required>
                                    </div>
                                    <br/>
                                    <div class="form-group">
                                        <label class="col-md-2 col-xs-6">
                                            科目
                                        </label>
                                        <select class="form-control col-md-4 col-xs-6" name="subject_id">
                                            <?php
                                            foreach ($subject_list as $row) {
                                                ?>
                                                <option value="<?php echo $row['id'] ?>"><?php echo $row['subject_name']?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label class="col-md-2 col-xs-6">
                                            品名
                                        </label>
                                        <input class="form-control col-md-4 col-xs-6" type="text" name="item_name" required>
                                    </div>
                                    <br/>
                                    <div class="form-group">
                                        <label class="col-md-2 col-xs-6">
                                            売単価
                                        </label>
                                        <input class="form-control col-md-2 col-xs-6" type="number" name="sell_price" required>
                                    </div>
                                    <br/>
                                    <div class="form-group">
                                        <label class="col-md-2 col-xs-6">
                                            仕入単価
                                        </label>
                                        <input class="form-control col-md-2 col-xs-6" type="number" name="buy_price" required>
                                    </div>
                                    <br/>
                                    <div class="form-group">
                                        <label class="col-md-2 col-xs-5">
                                            税計算
                                        </label>
                                        <input class="radio" name="tax" type="radio" value="1" checked><label>する</label>
                                        <input class="radio" name="tax" type="radio" value="0" ><label>しない</label>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 col-xs-5">
                                            在庫管理
                                        </label>
                                        <input class="radio" name="manage" type="radio" value="1" checked ><label>する</label>
                                        <input class="radio" name="manage" type="radio" value="0" ><label>しない</label>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 col-xs-6">
                                            在庫数
                                        </label>
                                        <input class="form-control col-md-2 col-xs-6" type="number" name="left_num" required>
                                    </div>
                                    <br/>
                                    <div class="form-group">
                                        <label class="col-md-2 col-xs-6">
                                            分類
                                        </label>
                                        <input class="form-control col-md-2 col-xs-6" type="text" name="type"  >
                                    </div>
                                    <br/>
                                    <div class="form-group">
                                        <label class="col-md-2 col-xs-5">
                                            画面表示
                                        </label>
                                        <input class="radio" name="disp_flg" type="radio" value="1" checked ><label>する</label>
                                        <input class="radio" name="disp_flg" type="radio" value="0" ><label>しない</label>
                                        </label>
                                    </div>
                                    <br/>
                                    <div class="form-group">
                                        <div class="col-md-1 col-xs-3">
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
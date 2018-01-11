<p class="login-box-msg">
    <?php
    if($this->session->flashdata('message')){
        echo $this->session->flashdata('message');
    }
    ?>
</p>

<div class="common-bg-2">
    <main class="frame-main pt-xs-50">
        <article class="frame-article">
            <section class="content05 mb-xs-50 mb-md-70 mb-xl-100">
                <div class="container">
                    <div class="container">
                        <div class="content05-main">
                            <div class="content05-main-inner">
                                <div>
                                    <form action="<?php echo site_url('admin/edit-classes/'.$get_class['id']) ?>" method="post">
                                        <div class="form-group">
                                            <div class="col-md-2">
                                                <label>
                                                    品目コード
                                                </label>
                                            </div>
                                            <div class="col-md-2">
                                                <select class="form-control" name="class_sign">
                                                    <option value="M" <?php if($get_class['base_class_sign']=='M'){ echo 'selected';}?>>M</option>
                                                    <option value="A" <?php if($get_class['base_class_sign']=='A'){ echo 'selected';}?>>A</option>
                                                    <option value="B" <?php if($get_class['base_class_sign']=='B'){ echo 'selected';}?>>B</option>
                                                    <option value="C" <?php if($get_class['base_class_sign']=='C'){ echo 'selected';}?>>C</option>
                                                    <option value="D" <?php if($get_class['base_class_sign']=='D'){ echo 'selected';}?>>D</option>
                                                    <option value="E" <?php if($get_class['base_class_sign']=='E'){ echo 'selected';}?>>E</option>
                                                    <option value="F" <?php if($get_class['base_class_sign']=='F'){ echo 'selected';}?>>F</option>
                                                </select>
                                            </div>
                                            <br class="visible-xs visible-sm">
                                            <div class="col-md-2">
                                                <input class="form-control" type="text" name="class_code" value="<?php echo $get_class['class_code'] ?>" required>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-group">
                                            <div class="col-md-2">
                                                <label>
                                                    品目コード
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <input class="form-control col-md-12" type="text" name="class_name" value="<?php echo $get_class['class_name']?>" required>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <div class="col-md-2">
                                                <label>
                                                    級管理
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>
                                                    <input class="radio" name="grade_manage" type="radio" value="1" <?php if($get_class['grade_manage_flg']=='1'){ echo 'checked';}?>>する
                                                </label>
                                                <label>
                                                    <input class="radio" name="grade_manage" type="radio" value="0" <?php if($get_class['grade_manage_flg']=='0'){ echo 'checked';}?>>しない
                                                </label>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <div class="col-md-2">
                                                <label>
                                                    バス利用
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>
                                                    <input class="radio" name="use_bus" type="radio"  value="1" <?php if($get_class['use_bus_flg']=='1'){ echo 'checked';}?>>あり
                                                </label>
                                                <label>
                                                    <input class="radio" name="use_bus" type="radio" value="0" <?php if($get_class['use_bus_flg']=='0'){ echo 'checked';}?>>なし
                                                </label>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <div class="col-md-2">
                                                <label>
                                                    授業曜日
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <?php
                                                $week =explode(',',$get_class['week'])
                                                ?>
                                                <label>
                                                    <input class="form-control" type="checkbox" value="2" name="week" <?php if(in_array(2,$week)){ echo 'checked';}?>>
                                                    火
                                                </label>
                                                <label>
                                                    <input class="form-control" type="checkbox" value="3" name="week" <?php if(in_array(3,$week)){ echo 'checked';}?>>
                                                    水
                                                </label>
                                                <label>
                                                    <input class="form-control" type="checkbox" value="4" name="week" <?php if(in_array(4,$week)){ echo 'checked';}?>>
                                                    木
                                                </label>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <div class="col-md-2">
                                                <label>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <label>
                                                    <input class="form-control" type="checkbox" name="week" value="5" <?php if(in_array(5,$week)){ echo 'checked';}?>>
                                                    金
                                                </label>
                                                <label>
                                                    <input class="form-control" type="checkbox" value="6" name="week" <?php if(in_array(6,$week)){ echo 'checked';}?>>
                                                    土
                                                </label>
                                                <label>
                                                    <input class="form-control" type="checkbox" value="0" name="week" <?php if(in_array(0,$week)){ echo 'checked';}?>>
                                                    日
                                                </label>
                                                <label>
                                                    <input class="form-control" type="checkbox" value="1" name="week" <?php if(in_array(1,$week)){ echo 'checked';}?>>
                                                    月
                                                </label>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <div class="col-md-2">
                                                <label>
                                                    定員
                                                </label>
                                            </div>
                                            <div class="col-md-2">
                                                <input class="form-control col-md-12" type="text" name="capacity" value="<?php echo $get_class['class_name']?>" required>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="form-group">
                                            <div class="col-md-2">
                                                <label>
                                                    有効/無効
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <input class="radio" name="invalid" type="radio" value="0" <?php if($get_class['invalid_flg']=='0'){ echo 'checked';}?> >有効
                                                <input class="radio" name="invalid" type="radio" value="1" <?php if($get_class['invalid_flg']=='1'){ echo 'checked';}?>>無効
                                            </div>
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
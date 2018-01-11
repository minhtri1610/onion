
<div class="common-bg-2">

    <main class="frame-main pt-xs-50">
        <article class="frame-article">

            <section class="content05 mb-xs-50 mb-md-70 mb-xl-100">
                <div class="container">
                    <div class="container">
                        <div class="content05-main">
                            <div class="content05-main-inner">
                                <div>
                                    <form  method="post">
                                        <div class="form-group">
                                            <label class="col-md-2 col-xs-6">
                                                バスコースコード
                                            </label>
                                            <input class="form-control col-md-2 col-xs-6" type="text" name="bus_course_code" value="<?php echo $get_bus_course['bus_course_code']?>" required>
                                        </div>
                                        <br class="visible-lg">
                                        <br class="visible-xs visible-md"/>
                                        <br/>
                                        <div class="form-group">
                                            <label class="col-md-2 col-xs-6">
                                                バスコース名
                                            </label>
                                            <input class="form-control col-md-4 col-xs-6" type="text" name="bus_course_name" value="<?php echo $get_bus_course['bus_course_name']?>" required>
                                        </div>
                                        <br>
                                        <br class="visible-xs visible-md"/>
                                        <div class="form-group">
                                            <label class="col-md-2 col-xs-6">
                                                クラス
                                            </label>
                                            <select class="form-control col-md-3 col-xs-6" name="class_id">
                                                <?php
                                                foreach ($class_list as $row_class) {
                                                    ?>
                                                    <option value="<?php echo $row_class['id']?>" <?php if ($row_class['id']==$get_bus_course['class_id']) echo "selected"?>><?php echo $row_class['class_name']?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <br/>
                                        <div class="form-group">
                                            <label class="col-md-2 col-xs-6">
                                                定員
                                            </label>
                                            <input class="form-control col-md-2 col-xs-6" type="number" name="max" value="<?php echo $get_bus_course['max']?>" required>
                                        </div>
                                        <br/>
                                        <br/>
                                        <hr>
                                        <br>
                                        <h3 class="body01-text-1">バスルート設定</h3>
                                        <table id="mytable" class="table content07-table">
                                            <thead>
                                            <tr>
                                                <th>クラスコード</th>
                                                <th>乗車場所名</th>
                                                <th>行き（時間)</th>
                                                <th>帰り（時間)</th>
                                                <th style="display: none">dsd</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            if (count($bus_route_list)==0)
                                            {
                                                ?>
                                                <tr>
                                                    <td><input type="number" class="form-control" name="route_order" required></td>
                                                    <td class="">
                                                        <select class="form-control" name="bus_stop_id">
                                                            <?php
                                                            foreach ($bus_stop_list as $row_stop) {
                                                                ?>
                                                                <option value="<?php echo $row_stop['id'] ?>"><?php echo $row_stop['bus_stop_name'] ?></option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </td>
                                                    <td class=""><input type="asia-time" class="form-control" name="go_time" value="00:00"  required></td>
                                                    <td class=""><input type="asia-time" class="form-control" name="ret_time" value="00:00" required></td>
                                                    <td style="border: none; background-color: white;" class="border-action hidden-xs"><input type="button" class="edit-table btnDelete1" value="削除" id="<?php echo site_url('admin/edit-bus-routes/'.$get_bus_course['id'])?>"</td>
                                                </tr>
                                                <?php
                                            }
                                            else {
                                                foreach ($bus_route_list as $row_route) {
                                                    ?>
                                                    <tr>
                                                        <td><input type="number" class="form-control" name="route_order"
                                                                   value="<?php echo $row_route['route_order'] ?>"
                                                                   required></td>
                                                        <td class="">
                                                            <select class="form-control" name="bus_stop_id">
                                                                <?php
                                                                foreach ($bus_stop_list as $row_stop) {
                                                                    ?>
                                                                    <option value="<?php echo $row_stop['id'] ?>" <?php if ($row_stop['id'] == $row_route['bus_stop_id']) echo "selected" ?>><?php echo $row_stop['bus_stop_name'] ?></option>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </td>
                                                        <?php
                                                        // go_time
                                                        $duration = $row_route['go_time'];
                                                        $hours = floor($duration / 60);
                                                        $mins = $duration % 60;
                                                        $go_time = str_pad($hours, 2, '0', STR_PAD_LEFT) . ':' . str_pad($mins, 2, '0', STR_PAD_LEFT);
                                                        // ret_time
                                                        $duration = $row_route['ret_time'];
                                                        $hours = floor($duration / 60);
                                                        $mins = $duration % 60;
                                                        $ret_time = str_pad($hours, 2, '0', STR_PAD_LEFT) . ':' . str_pad($mins, 2, '0', STR_PAD_LEFT);
                                                        ?>
                                                        <td class=""><input type="asia-time" class="form-control"
                                                                            name="go_time"
                                                                            value="<?php echo $go_time ?>" required>
                                                        </td>
                                                        <td class=""><input type="asia-time" class="form-control"
                                                                            name="ret_time"
                                                                            value="<?php echo $ret_time ?>" required>
                                                        </td>
                                                        <td style="border: none; background-color: white;"
                                                            class="border-action hidden-xs"><input type="button"
                                                                                                   class="edit-table btnDelete"
                                                                                                   value="削除"
                                                                                                   href="<?php echo site_url('admin/bus_route/delete_bus_route/' . $row_route['id']) ?>"
                                                                                                   id="<?php echo site_url('admin/edit-bus-routes/' . $get_bus_course['id']) ?>">
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                        <div class="register-button">
                                            <input type="button" id="insert-more" class="register-button-1" value="乗車場所を追加">
                                        </div>
                                        <div class="register-button">
                                            <button class="submit register-button-1">更新</button>
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
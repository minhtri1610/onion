
<div class="common-bg-3">

    <main class="frame-main pt-xs-50">
        <article class="frame-article">

            <section class="content07 mb-xs-50 mb-md-70 mb-xl-100">
                <div class="container">
                    <div class="content07-main">
                        <div class="content07-main-inner">
                            <table class="table content07-table hidden-xs" style="width:100%;  background-color: #fff;overflow-x: auto;">
                                <thead>
                                <tr>
                                    <th>クラスコード</th>
                                    <th>クラス名</th>
                                    <th>級管理</th>
                                    <th>授業曜日</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($bus_course_list as $row) {
                                    foreach ($class_list as $row_class) {
                                        if ($row['class_id'] == $row_class['id']) {
                                            ?>
                                            <tr>
                                                <td class=""><?php echo $row['bus_course_code'] ?></td>
                                                <td class=""><?php echo $row['bus_course_name'] ?></td>
                                                <td class=""><?php echo $row_class['class_name'] ?></td>
                                                <td class=""><?php echo $row['max'] ?></td>
                                                <td style="border: none; background-color: white;"
                                                    class="border-action">
                                                    <a href="<?php echo site_url('admin/edit-bus-routes/'.$row['id'])?>">
                                                        <button class="edit-table">編集</button>
                                                    </a>
                                                </td>
                                                <td style="border: none; background-color: white;"
                                                    class="border-action">
                                                    <a href="<?php echo site_url('admin/route/delete/'.$row['id'])?>">
                                                        <button class="edit-table">削除</button>
                                                    </a>
                                                </td>
                                                <td style="border: none; background-color: white;"
                                                    class="border-action">
                                                    <button class="edit-table">コピー作成</button>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                }
                                ?>
                                </tbody>
                            </table>
                            <div class="register-button hidden-xs">
                                <button class="register-button-1">新規登録</button>
                            </div>
                            <ul class="content05-table-2">
                                <li>
                                    <table class="table visible-xs">
                                        <tbody>
                                        <?php
                                        for($i=1;$i<=5;$i++) {
                                            ?>
                                            <tr>
                                                <td width="50%" class="">バスコースコード</td>
                                                <td width="50%" class=""><?php echo $i ?></td>
                                            </tr>
                                            <tr>
                                                <td class="">バスコース名</td>
                                                <td class=""><?php echo $i+10 ?></td>
                                            </tr>
                                            <tr>
                                                <td class="">クラス</td>
                                                <td class=""><?php echo $i+10 ?></td>
                                            </tr>
                                            <tr>
                                                <td class="">定員</td>
                                                <td class=""><?php echo $i+10 ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="">
                                                    <button class="submit-mobile">編集</button>
                                                    <button class="submit-mobile">削除</button>
                                                    <br>
                                                    <br>
                                                    <button class="submit">コピー作成</button>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                    <div class="register-button visible-xs">
                                        <button class="register-button-1">新規登録</button>
                                    </div>
                                </li>
                            </ul>
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

<div class="common-bg-3">

    <main class="frame-main pt-xs-50">
        <article class="frame-article">

            <section class="content07 mb-xs-50 mb-md-70 mb-xl-100">
                <div class="container">
                    <div class="content07-main">
                        <div class="content07-main-inner">
                            <table class="table content07-table hidden-xs">
                                <thead>
                                <tr>
                                    <th>クラスコード</th>
                                    <th>クラス名</th>
                                    <th>級管理</th>
                                    <th>授業曜日</th>
                                    <th>定員</th>
                                    <th>バス利用</th>
                                    <th>有効/無効</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($class_list as $row) {
                                    ?>
                                    <tr>
                                        <td class=""><?php echo $row['class_code'] ?></td>
                                        <td class=""><?php echo $row['class_name']?></td>
                                        <td class=""><?php
                                            if ($row['grade_manage_flg']==1)
                                            {
                                                echo "級管理する";
                                            }
                                            else if ($row['grade_manage_flg']== 0)
                                            {
                                                echo "級管理しない";
                                            }
                                            ?></td>
                                        <td class=""><?php
                                            $row['week']=explode(',',$row['week']);
                                            if (in_array('0',$row['week']))
                                                echo "日";
                                            if (in_array('1',$row['week']))
                                                echo "月";
                                            if (in_array('2',$row['week']))
                                                echo "火";
                                            if (in_array('3',$row['week']))
                                                echo "水";
                                            if (in_array('4',$row['week']))
                                                echo "木";
                                            if (in_array('5',$row['week']))
                                                echo "金";
                                            if (in_array('6',$row['week']))
                                                echo "土";
                                            ?></td>
                                        <td class="">データがありません</td>
                                        <td class=""><?php
                                            if ($row['use_bus_flg']==1)
                                            {
                                                echo "バス利用しない";
                                            }
                                            else if ($row["use_bus_flg"]==0)
                                            {
                                                echo "バス利用する";
                                            }
                                            ?></td>
                                        <td class="">
                                            <?php
                                            if ($row['invalid_flg']==0)
                                            {
                                                echo "有効";
                                            }
                                            else if ($row['invalid_flg']==1)
                                            {
                                                echo "無効";
                                            }
                                            ?>
                                        </td>
                                        <td style="border: none; background-color: white;" class="border-action"><a href="<?php echo site_url('admin/edit-classes/'.$row['id'])?>"><button class="edit-table">編集</button></a></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                            <div class="register-button">
                                <a href="<?php echo site_url('admin/create-classes') ?>">
                                    <button class="register-button-1 hidden-xs">新規登録</button>
                                </a>
                            </div>
                            <ul class="content05-table-2">
                                <li>
                                    <table class="table visible-xs">
                                        <tbody>
                                        <?php
                                        foreach ($class_list as $row) {
                                            ?>
                                            <tr>
                                                <td width="50%" class="">クラスコード</td>
                                                <td width="50%" class=""><?php echo $row['class_code'] ?></td>
                                            </tr>
                                            <tr>
                                                <td class="">クラス名</td>
                                                <td class=""><?php echo $row['class_name']?></td>
                                            </tr>
                                            <tr>
                                                <td width="50%" class="">級管理</td>
                                                <td width="50%" class="">
                                                    <?php
                                                    if ($row['grade_manage_flg']==1)
                                                    {
                                                        echo "級管理する";
                                                    }
                                                    else if ($row['grade_manage_flg']== 0)
                                                    {
                                                        echo "級管理しない";
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="50%" class="">授業曜日</td>
                                                <td width="50%" class="">
                                                    <?php echo $row['week'] ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="50%" class="">定員</td>
                                                <td width="50%" class="">データがありません</td>
                                            </tr>
                                            <tr>
                                                <td width="50%" class="">バス利用</td>
                                                <td width="50%" class="">
                                                    <?php
                                                    if ($row['use_bus_flg']==1)
                                                    {
                                                        echo "バス利用しない";
                                                    }
                                                    else if ($row["use_bus_flg"]==0)
                                                    {
                                                        echo "バス利用する";
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="50%" class="">有効/無効</td>
                                                <td width="50%" class="">
                                                    <?php
                                                    if ($row['invalid_flg']==0)
                                                    {
                                                        echo "有効";
                                                    }
                                                    else if ($row['invalid_flg']==1)
                                                    {
                                                        echo "無効";
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="">
                                                    <a href="<?php echo site_url('admin/edit-classes/1')?>">
                                                        <button class="submit-mobile">編集</button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                    <div class="register-button visible-xs">
                                        <a href="<?php echo site_url('admin/create-classes')?>"></a>
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
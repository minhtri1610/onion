<div class="common-bg-3">

    <main class="frame-main pt-xs-50">
        <article class="frame-article">

            <section class="content07 mb-xs-50 mb-md-70 mb-xl-100">
                <div class="container">
                    <div class="content07-main">
                        <div class="content07-main-inner">
                            <table class="table content07-table hidden-xs hidden-sm hidden-md">
                                <thead>
                                <tr>
                                    <th>クコースコード</th>
                                    <th>練習コース名  </th>
                                    <th>会費</th>
                                    <th>休会費</th>
                                    <th>バス管理費</th>
                                    <th>記号</th>
                                    <th>回数</th>
                                    <th>振替</th>
                                    <th>短期</th>
                                    <th>開催日</th>
                                    <th>定員</th>
                                    <th>申込開始</th>
                                    <th>申込終了</th>
                                    <th>参加条件</th>
                                    <th>有効/無効</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                for ($i =1;$i<=5;$i++) {
                                    ?>
                                    <tr>
                                        <td class=""><?php echo $i ?></td>
                                        <td class="">退館　<?php echo $i?></td>
                                        <td class="">退館　<?php echo $i?></td>
                                        <td class="">退館　<?php echo $i?></td>
                                        <td class="">退館　<?php echo $i?></td>
                                        <td class="">退館　<?php echo $i?></td>
                                        <td class="">退館　<?php echo $i?></td>
                                        <td class="">退館　<?php echo $i?></td>
                                        <td class="">退館　<?php echo $i?></td>
                                        <td class="">退館　<?php echo $i?></td>
                                        <td class="">退館　<?php echo $i?></td>
                                        <td class="">退館　<?php echo $i?></td>
                                        <td class="">退館　<?php echo $i?></td>
                                        <td class="">退館　<?php echo $i?></td>
                                        <td class="">退館　<?php echo $i?></td>
                                        <td style="border: none; background-color: white;" class="border-action"><a href="<?php echo site_url('admin/edit-course/1') ?>"><button class="edit-table">編集</button></a></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                            <div class="register-button hidden-xs">
                                <a href="<?php echo site_url('admin/create-course') ?>">
                                <button class="register-button-1">新規登録</button>
                                </a>
                            </div>
                            <ul class="content05-table-2">
                                <li>
                                    <table class="table visible-xs visible-sm visible-md">
                                        <tbody>
                                        <?php
                                        for($i=1;$i<=5;$i++) {
                                            ?>
                                            <tr>
                                                <td width="50%" class="">コースコード</td>
                                                <td width="50%" class=""><?php echo $i ?></td>
                                            </tr>
                                            <tr>
                                                <td class="">練習コース名</td>
                                                <td class=""><?php echo $i+10 ?></td>
                                            </tr>
                                            <tr>
                                                <td width="50%" class="">会費</td>
                                                <td width="50%" class=""><?php echo $i ?></td>
                                            </tr>
                                            <tr>
                                                <td width="50%" class="">休会費</td>
                                                <td width="50%" class=""><?php echo $i ?></td>
                                            </tr>
                                            <tr>
                                                <td width="50%" class="">ス管理費</td>
                                                <td width="50%" class=""><?php echo $i ?></td>
                                            </tr>
                                            <tr>
                                                <td width="50%" class="">記号</td>
                                                <td width="50%" class=""><?php echo $i ?></td>
                                            </tr>
                                            <tr>
                                                <td width="50%" class="">回数</td>
                                                <td width="50%" class=""><?php echo $i ?></td>
                                            </tr>
                                            <tr>
                                                <td width="50%" class="">振替</td>
                                                <td width="50%" class=""><?php echo $i ?></td>
                                            </tr>
                                            <tr>
                                                <td width="50%" class="">短期</td>
                                                <td width="50%" class=""><?php echo $i ?></td>
                                            </tr>
                                            <tr>
                                                <td width="50%" class="">開催日</td>
                                                <td width="50%" class=""><?php echo $i ?></td>
                                            </tr>
                                            <tr>
                                                <td width="50%" class="">定員</td>
                                                <td width="50%" class=""><?php echo $i ?></td>
                                            </tr>
                                            <tr>
                                                <td width="50%" class="">申込開始</td>
                                                <td width="50%" class=""><?php echo $i ?></td>
                                            </tr><tr>
                                                <td width="50%" class="">申込終了</td>
                                                <td width="50%" class=""><?php echo $i ?></td>
                                            </tr>
                                            <tr>
                                                <td width="50%" class="">参加条件</td>
                                                <td width="50%" class=""><?php echo $i ?></td>
                                            </tr>
                                            <tr>
                                                <td width="50%" class="">有効/無効</td>
                                                <td width="50%" class=""><?php echo $i ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="">
                                                    <a href="<?php echo site_url('admin/edit-course/1') ?>">
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
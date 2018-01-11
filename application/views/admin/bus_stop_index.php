
<div class="common-bg-3">

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
                            <table class="table content05-table hidden-xs">
                                <thead>
                                <tr>
                                    <th>乗車場所コード</th>
                                    <th>乗車場所</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($bus_stop as $row) {
                                    ?>
                                    <tr>
                                        <td class=""><?php echo $row['bus_stop_code']; ?></td>
                                        <td class=""><?php echo $row['bus_stop_name']; ?></td>
                                        <td style="border: none; background-color: white;" class="border-action"><a href="<?php echo site_url('admin/edit-bus-stop/'.$row['id']) ?>"><button class="edit-table" href="">編集</button></a></td>
                                        <td style="border: none; background-color: white;" class="border-action"><a href="<?php echo site_url('admin/bus_stop/delete/'.$row['id']) ?>"><button class="edit-table" href="">編集</button></a></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                            <div class="register-button hidden-xs">
                                <a href="<?php echo site_url('admin/create-bus-stop') ?>">
                            <button class="register-button-1">新規登録</button>
                                </a>
                            </div>

                            <ul class="content05-table-2">
                                <li>
                                    <table class="table visible-xs">
                                        <tbody>
                                        <?php
                                        for($i=1;$i<=5;$i++) {
                                            ?>
                                            <tr>
                                                <td width="50%" class="">乗車場所コード</td>
                                                <td width="50%" class=""><?php echo $i ?></td>
                                            </tr>
                                            <tr>
                                                <td class="">乗車場所</td>
                                                <td class=""><?php echo $i+10 ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="">
                                                 <button class="submit-mobile">編集</button>
                                                 <button class="submit-mobile">削除</button>
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

<style>

</style>
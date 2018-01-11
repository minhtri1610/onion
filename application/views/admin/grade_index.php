
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
                                    <th>級コード</th>
                                    <th>級名</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($grade_list as $row) {
                                    ?>
                                    <tr>
                                        <td class=""><?php echo $row['grade_code']?></td>
                                        <td class=""><?php echo $row['grade_name']?></td>
                                        <td style="border: none; background-color: white;" class="border-action"><a href="<?php echo site_url('admin/edit-level/'.$row['id'])?>"><button class="edit-table">編集</button></a></td>
                                        <td style="border: none; background-color: white;" class="border-action"><button onclick="document.getElementById('id01').style.display='block'" class="edit-table">削除</button></td>
                                        <div class="w3-container">
                                            <div id="id01" class="w3-modal">
                                                <div class="w3-modal-content w3-animate-top w3-card-4">
                                                    <header class="w3-col- w3-blue">
                                                        <h2>Confirm Delete</h2>
                                                    </header>
                                                    <div class="w3-container">
                                                        <p>Are you sure delete?</p>
                                                    </div>
                                                    <br/>
                                                    <div class="w3-container">
                                                        <div class="w3-right">
                                                            <p>
                                                                <span onclick="document.getElementById('id01').style.display='none'" class="w3-btn w3-white w3-border w3-border-blue">Close</span>
                                                                <a href="<?php echo site_url('admin/grade/delete/'.$row['id'])?>"><button class="w3-btn w3-red w3-border">Delete</button></a>
                                                        </div>
                                                        </p>
                                                    </div>
                                                    <br/>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                            <div class="register-button hidden-xs">
                                <a href="<?php echo site_url('admin/create-level') ?>">
                                <button class="register-button-1">新規登録</button>
                                </a>
                            </div>
                            <ul class="content05-table-2">
                                <li>
                                    <table class="table visible-xs">
                                        <tbody>
                                        <?php
                                        foreach ($grade_list as $row) {
                                            ?>
                                            <tr>
                                                <td width="50%" class="">科目コード</td>
                                                <td width="50%" class=""><?php echo $row['grade_code']?></td>
                                            </tr>
                                            <tr>
                                                <td class="">科目名</td>
                                                <td class=""><?php echo $row['grade_name']?><</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="">
                                                    <a href="<?php echo site_url('admin/edit-level/'.$row['id'])?>">
                                                    <button class="submit-mobile">編集</button>
                                                    </a>
                                                    <button onclick="document.getElementById('id01').style.display='block'" class="submit-mobile">削除</button>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                    <div class="register-button visible-xs">
                                        <a href="<?php echo site_url('admin/create-level') ?>">
                                        <button class="register-button-1">新規登録</button>
                                        </a>
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
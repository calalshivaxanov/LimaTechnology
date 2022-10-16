<?php require admin_view('static/header') ?>

    <div class="box-">
        <h1>
            <?=$row['reference_title']?> -
            Rəsm Düzənlə #<?=$row['image_id']?>
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="box-" tab>

        <div class="admin-tab">
            <ul tab-list>
                <li>
                    <a href="#">Ümumi</a>
                </li>
            </ul>
        </div>

        <form action="" method="post" class="form label" enctype="multipart/form-data">
            <div class="tab-container">
                <div tab-content>
                    <ul>
                        <li>
                            <label>Rəsm Başlığı</label>
                            <div class="form-content">
                                <input type="text" name="image_content[title]" value="<?=isset($content['title']) ? $content['title'] : null?>">
                            </div>
                        </li>
                        <li>
                            <label>Rəsm Açıqlaması</label>
                            <div class="form-content">
                                <textarea name="image_content[description]" cols="30" rows="10"><?=isset($content['description']) ? $content['description'] : null?></textarea>
                            </div>
                        </li>
                        <li>
                            <label>Rəsmi Dəyişdir</label>
                            <div class="form-content">
                                <input type="file" name="image">
                                <div style="padding-top: 10px">
                                    <img src="<?= site_url('upload/reference/' . $row['reference_url'] . '/' . $row['image_url']) ?>"
                                         alt="" width="400">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul>
                    <li class="submit">
                        <input type="hidden" name="submit" value="upload">
                        <button type="submit">Göndər</button>
                    </li>
                </ul>
            </div>
        </form>
    </div>

<?php require admin_view('static/footer') ?>
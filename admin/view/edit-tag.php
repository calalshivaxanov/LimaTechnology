<?php require admin_view('static/header') ?>

    <div class="box-">
        <h1>
            Etiket Düzənlə (#<?=$id?>)
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="box-" tab>

        <div class="admin-tab">
            <ul tab-list>
                <li>
                    <a href="#">Ümumi</a>
                </li>
                <li>
                    <a href="#">CEO</a>
                </li>
            </ul>
        </div>

        <form action="" method="post" class="form label">
            <div class="tab-container">
                <div tab-content>
                    <ul>
                        <li>
                            <label>Etiket Adı</label>
                            <div class="form-content">
                                <input type="text" name="tag_name" value="<?= post('tag_name') ? post('tag_name') : $row['tag_name'] ?>">
                            </div>
                        </li>
                    </ul>
                </div>
                <div tab-content>
                    <ul>
                        <li>
                            <label>CEO Url</label>
                            <div class="form-content">
                                <input type="text" name="tag_url" value="<?=post('tag_url') ? post('tag_url') : $row['tag_url']?>">
                                <pƏgər boş buraxsınız, avtomatik olaraq Səhifə adından istifadə ediləcək</p>
                            </div>
                        </li>
                        <li>
                            <label>CEO Title</label>
                            <div class="form-content">
                                <input type="text" name="tag_seo[title]" value="<?=$seo['title']?>">
                            </div>
                        </li>
                        <li>
                            <label>CEO Description</label>
                            <div class="form-content">
                                <textarea name="tag_seo[description]" cols="30" rows="5"><?=$seo['description']?></textarea>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul>
                    <li class="submit">
                        <input type="hidden" name="submit" value="1">
                        <button type="submit">Güncəllə</button>
                    </li>
                </ul>
            </div>
        </form>
    </div>

<?php require admin_view('static/footer') ?>
<?php require admin_view('static/header') ?>

    <div class="box-">
        <h1>
            Referans Kateqoriyası Düzənlə
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
                            <label>Kategoriya Adı</label>
                            <div class="form-content">
                                <input type="text" name="category_name" value="<?= post('category_name') ? post('category_name') : $row['category_name'] ?>">
                            </div>
                        </li>
                    </ul>
                </div>
                <div tab-content>
                    <ul>
                        <li>
                            <label>CEO Url</label>
                            <div class="form-content">
                                <input type="text" name="category_url" value="<?=post('category_url') ? post('category_url') : $row['category_url'] ?>">
                                <p>Əgər boş buraxsınız, avtomatik olaraq Kateqoriya adından istifadə ediləcək</p>
                            </div>
                        </li>
                        <li>
                            <label>CEO Title</label>
                            <div class="form-content">
                                <input type="text" name="category_seo[title]" value="<?=$category_seo['title']?>">
                            </div>
                        </li>
                        <li>
                            <label>CEO Description</label>
                            <div class="form-content">
                                <textarea name="category_seo[description]" cols="30" rows="5"><?=$category_seo['description']?></textarea>
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
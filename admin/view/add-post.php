<?php require admin_view('static/header') ?>

    <div class="box-">
        <h1>
            Mövzu Əlavə et
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
                            <label>Mövzu Başlığı</label>
                            <div class="form-content">
                                <input type="text" name="post_title" value="<?= post('post_title') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Mövzu (Qısa) Daxili</label>
                            <div class="form-content">
                                <textarea name="post_short_content"
                                          class="editor-short"><?= post('post_short_content') ?></textarea>
                            </div>
                        </li>
                        <li>
                            <label>Mövzu Daxili</label>
                            <div class="form-content">
                                <textarea name="post_content" class="editor" cols="30"
                                          rows="10"><?= post('post_content') ?></textarea>
                            </div>
                        </li>
                        <li>
                            <label>Mövzu Kateqoriyası</label>
                            <div class="form-content">
                                <select name="post_categories[]" multiple size="6">
                                    <?php foreach ($categories as $category): ?>
                                        <option value="<?= $category['category_id'] ?>"><?= $category['category_name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </li>
                        <li>
                            <label>Mövzu Statusu</label>
                            <div class="form-content">
                                <select name="post_status">
                                    <option value="1"<?= post('post_status') == 1 ? ' selected' : null ?>>Yayında
                                    </option>
                                    <option value="2"<?= post('post_status') == 2 ? ' selected' : null ?>>Taslak
                                    </option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <label>Mövzu Etiketləri</label>
                            <div class="form-content">
                                <input type="text" name="post_tags" value="<?= post('post_tags') ?>" class="tagsinput">
                                <p>
                                    Birdən çox etiketi alt-alta yazın
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div tab-content>
                    <ul>
                        <li>
                            <label>CEO Url</label>
                            <div class="form-content">
                                <input type="text" name="post_url" value="<?= post('post_url') ?>">
                                <p>Əgər boş buraxsınız, avtomatik olaraq Səhifə adından istifadə ediləcək</p>
                            </div>
                        </li>
                        <li>
                            <label>CEO Title</label>
                            <div class="form-content">
                                <input type="text" name="post_seo[title]">
                            </div>
                        </li>
                        <li>
                            <label>CEO Description</label>
                            <div class="form-content">
                                <textarea name="post_seo[description]" cols="30" rows="5"></textarea>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul>
                    <li class="submit">
                        <input type="hidden" name="submit" value="1">
                        <button type="submit">Göndər</button>
                    </li>
                </ul>
            </div>
        </form>
    </div>

    <script>
        var tags = ['<?=implode("','", $tagsArr)?>'];
    </script>

<?php require admin_view('static/footer') ?>
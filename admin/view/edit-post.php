<?php require admin_view('static/header') ?>

    <div class="box-">
        <h1>
            Post Düzənlə (#<?= $id ?>)
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
                            <label>Mövzu Məzmunu</label>
                            <div class="form-content">
                                <input type="text" name="post_title"
                                       value="<?= post('post_title') ? post('post_title') : $row['post_title'] ?>">
                            </div>
                        </li>
                        <li>
                            <label>Mövzu (Qısa) Məzmunu</label>
                            <div class="form-content">
                                <textarea name="post_short_content"
                                          class="editor-short"><?= post('post_short_content') ? post('post_short_content') : $row['post_short_content'] ?></textarea>
                            </div>
                        </li>
                        <li>
                            <label>Mövzu Məzmunu</label>
                            <div class="form-content">
                                <textarea name="post_content" class="editor" cols="30"
                                          rows="10"><?= post('post_content') ? post('post_content') : $row['post_content'] ?></textarea>
                            </div>
                        </li>
                        <li>
                            <label>Məzmunu Kategoriyası</label>
                            <div class="form-content">
                                <select name="post_categories[]" multiple size="6">
                                    <?php foreach ($categories as $category): ?>
                                        <option <?= in_array($category['category_id'], explode(',', $row['post_categories'])) ? ' selected ' : null ?>
                                                value="<?= $category['category_id'] ?>"><?= $category['category_name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </li>
                        <li>
                            <label>Mövzu Statusu</label>
                            <div class="form-content">
                                <select name="post_status">
                                    <option value="1"<?= (post('post_status') ? post('post_status') : $row['post_status']) == 1 ? ' selected' : null ?>>
                                        Yayımda
                                    </option>
                                    <option value="2"<?= (post('post_status') ? post('post_status') : $row['post_status']) == 2 ? ' selected' : null ?>>
                                        Keş
                                    </option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <label>Mövzu Etiketləri</label>
                            <div class="form-content">
                                <input type="text" name="post_tags" value="<?=post('post_tags') ? post('post_tags') : implode(',', $postTags)?>" class="tagsinput">
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
                            <label>SEO Url</label>
                            <div class="form-content">
                                <input type="text" name="post_url"
                                       value="<?= post('post_url') ? post('post_url') : $row['post_url'] ?>">
                                <p>Əgər boş buraxsınız, avtomatik olaraq Səhifə adından istifadə ediləcək</p>
                            </div>
                        </li>
                        <li>
                            <label>CEO Title</label>
                            <div class="form-content">
                                <input type="text" name="post_seo[title]" value="<?= $seo['title'] ?>">
                            </div>
                        </li>
                        <li>
                            <label>CEO Description</label>
                            <div class="form-content">
                                <textarea name="post_seo[description]" cols="30"
                                          rows="5"><?= $seo['description'] ?></textarea>
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
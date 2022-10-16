<?php require admin_view('static/header') ?>

    <div class="box-">
        <h1>
            Referans Əlavə et
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

        <form action="" method="post" class="form label" enctype="multipart/form-data">
            <div class="tab-container">
                <div tab-content>
                    <ul>
                        <li>
                            <label>Referans Başlığı</label>
                            <div class="form-content">
                                <input type="text" name="reference_title" value="<?= post('reference_title') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Referans Açıqlaması</label>
                            <div class="form-content">
                                <textarea name="reference_content"
                                          class="editor-short"><?= post('reference_content') ?></textarea>
                            </div>
                        </li>
                        <li>
                            <label>Referans Kateqoriyası</label>
                            <div class="form-content">
                                <select name="reference_categories[]" multiple size="6">
                                    <?php foreach ($categories as $category): ?>
                                        <option <?=post('reference_categories') && in_array($category['category_id'], post('reference_categories')) ? 'selected' : null?> value="<?= $category['category_id'] ?>"><?= $category['category_name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </li>
                        <li>
                            <label>İstifadə olunan Texnologiyalar</label>
                            <div class="form-content">
                                <input type="text" name="reference_tags" value="<?= post('reference_tags') ?>" class="tagsinput">
                            </div>
                        </li>
                        <li>
                            <label>Referans Linki</label>
                            <div class="form-content">
                                <input type="text" name="reference_demo" value="<?= post('reference_demo') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Referans Şəkli</label>
                            <div class="form-content">
                                <input type="file" name="reference_image">
                            </div>
                        </li>
                    </ul>
                </div>
                <div tab-content>
                    <ul>
                        <li>
                            <label>CEO Url</label>
                            <div class="form-content">
                                <input type="text" name="reference_url" value="<?= post('reference_url') ?>">
                                <p>Əgər boş buraxsınız, avtomatik olaraq Referans adından istifadə ediləcək</p>
                            </div>
                        </li>
                        <li>
                            <label>CEO Title</label>
                            <div class="form-content">
                                <input type="text" name="reference_seo[title]">
                            </div>
                        </li>
                        <li>
                            <label>CEO Description</label>
                            <div class="form-content">
                                <textarea name="reference_seo[description]" cols="30" rows="5"></textarea>
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

    <script>
        var tags = [];
    </script>

<?php require admin_view('static/footer') ?>
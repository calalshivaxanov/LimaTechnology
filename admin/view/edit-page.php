<?php require admin_view('static/header') ?>

    <div class="box-">
        <h1>
            Səhifə düzənlə (#<?=$id?>)
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
                            <label>Səhifə Başlığı</label>
                            <div class="form-content">
                                <input type="text" name="page_title" value="<?= post('page_title') ? post('page_title') : $row['page_title'] ?>">
                            </div>
                        </li>
                        <li>
                            <label>Səhifə Məzmunu</label>
                            <div class="form-content">
                                <textarea name="page_content" class="editor" cols="30" rows="10"><?=post('page_content') ? post('page_content') : $row['page_content']?></textarea>
                            </div>
                        </li>
                    </ul>
                </div>
                <div tab-content>
                    <ul>
                        <li>
                            <label>CEO Url</label>
                            <div class="form-content">
                                <input type="text" name="page_url" value="<?=post('page_url') ? post('page_url') : $row['page_url']?>">
                                <p>Əgər boş buraxsanız avtomatik olaraq səhifə adından istifadə ediləcək.</p>
                            </div>
                        </li>
                        <li>
                            <label>CEO Title</label>
                            <div class="form-content">
                                <input type="text" name="page_seo[title]" value="<?=$seo['title']?>">
                            </div>
                        </li>
                        <li>
                            <label>CEO Description</label>
                            <div class="form-content">
                                <textarea name="page_seo[description]" cols="30" rows="5"><?=$seo['description']?></textarea>
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
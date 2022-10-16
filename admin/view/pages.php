<?php require admin_view('static/header') ?>

    <div class="box-">
        <h1>
            Səhifələr
            <?php if (permission('pages', 'add')): ?>
                <a href="<?= admin_url('add-page') ?>">Yenisini əlavə edin</a>
            <?php endif; ?>
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="table">
        <table>
            <thead>
            <tr>
                <th>Başlıq</th>
                <th class="hide">Yayım Tarixi</th>
                <th>İşləmlər</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($query as $row): ?>
                <tr>
                    <td>
                        <?= $row['page_title'] ?>
                    </td>
                    <td class="hide" title="<?=$row['page_date']?>">
                        <?= timeConvert($row['page_date']) ?>
                    </td>
                    <td>
                        <a href="<?= site_url('sayfa/' . $row['page_url']) ?>" class="btn" target="_blank">Görüntülə</a>
                        <?php if (permission('pages', 'edit')): ?>
                            <a href="<?= admin_url('edit-page?id=' . $row['page_id']) ?>"
                               class="btn">Düzəlt</a>
                        <?php endif; ?>
                        <?php if (permission('pages', 'delete')): ?>
                            <a onclick="return confirm('Silmə işləminə davam edirsiniz?')"
                               href="<?= admin_url('delete?table=pages&column=page_id&id=' . $row['page_id']) ?>"
                               class="btn">Sil</a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

<?php if ($totalRecord > $pageLimit): ?>
    <div class="pagination">
        <ul>
            <?= $db->showPagination(admin_url(route(1) . '?' . $pageParam . '=[page]')) ?>
        </ul>
    </div>
<?php endif; ?>

<?php require admin_view('static/footer') ?>
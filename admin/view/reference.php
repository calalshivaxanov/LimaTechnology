<?php require admin_view('static/header') ?>

    <div class="box-">
        <h1>
            Referanslar
            <?php if (permission('reference', 'add')): ?>
                <a href="<?= admin_url('add-reference') ?>">Yenisini Əlavə et</a>
            <?php endif; ?>
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="table">
        <table>
            <thead>
            <tr>
                <th>&nbsp;</th>
                <th>Referans</th>
                <th>Kateqoriyalar</th>
                <th class="hide">Əlavə olunma Tarixi</th>
                <th>İşləmlər</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($query as $row): ?>
                <tr>
                    <td width="80">
                        <img src="<?= site_url('upload/reference/' . $row['reference_url'] . '/' . $row['reference_image']) ?>"
                             alt="" height="80">
                    </td>
                    <td>
                        <?= $row['reference_title'] ?>
                    </td>
                    <td>
                        <?= $row['categories'] ?>
                    </td>
                    <td class="hide" title="<?=$row['reference_date']?>">
                        <?= timeConvert($row['reference_date']) ?>
                    </td>
                    <td>
                        <?php if (permission('reference', 'edit')): ?>
                            <a href="<?= admin_url('reference-images?id=' . $row['reference_id']) ?>"
                               class="btn">Rəsmlər</a>
                            <a href="<?= admin_url('edit-reference?id=' . $row['reference_id'] ) ?>"
                               class="btn">Düzəlt</a>
                        <?php endif; ?>
                        <?php if (permission('reference', 'delete')): ?>
                            <a onclick="return confirm('Silmə işləminə Davam edirsiniz?')"
                               href="<?= admin_url('delete?table=reference&column=reference_id&id=' . $row['reference_id']) ?>"
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
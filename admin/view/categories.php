<?php require admin_view('static/header') ?>

    <div class="box-">
        <h1>
            Kateqoriyalar
            <?php if (permission('categories', 'add')): ?>
                <a href="<?= admin_url('add-category') ?>">Yeni Əlavə et</a>
            <?php endif; ?>
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="table">
        <table>
            <thead>
            <tr>
                <th>Kateqoriya Adı</th>
                <th class="hide">Əlavə olunma tarixi</th>
                <th>İşləmlər</th>
            </tr>
            </thead>
            <tbody class="table-sortable" data-table="categories" data-where="category_id" data-column="category_order">
            <?php foreach ($query as $row): ?>
                <tr id="id_<?=$row['category_id']?>">
                    <td>
                        <a href="<?= admin_url('edit-category?id=' . $row['category_id']) ?>" class="title">
                            <?= $row['category_name'] ?>
                        </a>
                    </td>
                    <td class="hide">
                        <?= timeConvert($row['category_date']) ?>
                    </td>
                    <td>
                        <?php if (permission('categories', 'edit')): ?>
                            <a href="<?= admin_url('edit-category?id=' . $row['category_id']) ?>" class="btn">Düzəlt</a>
                        <?php endif; ?>
                        <?php if (permission('categories', 'delete')): ?>
                            <a onclick="return confirm('Silmək istəyirsiniz ?')"
                               href="<?= admin_url('delete?table=categories&column=category_id&id=' . $row['category_id']) ?>"
                               class="btn">Sil</a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

<?php require admin_view('static/footer') ?>
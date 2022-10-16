<?php require admin_view('static/header') ?>

    <div class="box-">
        <h1>
            İstifadəçilər
            <!--            <a href="#">Add New</a>-->
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="table">
        <table>
            <thead>
            <tr>
                <th>İstifadəçi Adı</th>
                <th class="hide">E-mail</th>
                <th class="hide">Qeydiyyat Tarixi</th>
                <th class="hide">Rütbə</th>
                <th>İşləmlər</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($query as $row): ?>
                <tr>
                    <td>
                        <a href="<?= admin_url('edit-user?id=' . $row['user_id']) ?>" class="title">
                            <?= $row['user_name'] ?>
                        </a>
                    </td>
                    <td class="hide">
                        <?= $row['user_email'] ?>
                    </td>
                    <td class="hide">
                        <?= $row['user_date'] ?>
                    </td>
                    <td class="hide">
                        <?= user_ranks($row['user_rank']) ?>
                    </td>
                    <td>
                        <?php if (permission('users', 'edit')): ?>
                            <a href="<?= admin_url('edit-user?id=' . $row['user_id']) ?>" class="btn">Düzəlt</a>
                        <?php endif; ?>
                        <?php if (permission('users', 'delete')): ?>
                            <a onclick="return confirm('Silmə işləminə davam edirsiniz ?')"
                               href="<?= admin_url('delete?table=users&column=user_id&id=' . $row['user_id']) ?>"
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
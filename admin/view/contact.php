<?php require admin_view('static/header') ?>

    <div class="box-">
        <h1>
            Mesajlar
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="table">
        <table>
            <thead>
            <tr>
                <th width="10">&nbsp;</th>
                <th>Göndərən</th>
                <th class="hide">Mövzu</th>
                <th class="hide">Mesaj Tarixi</th>
                <th>İşləmlər</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($query as $row): ?>
                <tr>
                    <td>
                        <?php if ($row['contact_read'] == 1): ?>
                            <div style="background: green; text-align: center; color: #fff; padding: 3px 6px; border-radius: 3px">
                                Oxundu
                            </div>
                        <?php else: ?>
                            <div style="background: darkred; text-align: center; color: #fff; padding: 3px 6px; border-radius: 3px">
                                Oxunmadı
                            </div>
                        <?php endif; ?>
                    </td>
                    <td>
                        <p>
                            <?= $row['contact_name'] ?> (<?= $row['contact_email'] ?>)
                        </p>
                        <?= $row['contact_phone'] ?>
                    </td>
                    <td class="hide">
                        <?= $row['contact_subject'] ?>
                    </td>
                    <td class="hide">
                        <?= timeConvert($row['contact_date']) ?>
                        <?php if ($row['contact_read_date']): ?>
                            <div style="color: #999; font-size: 12px;">
                                <?=timeConvert($row['contact_read_date'])?> Oxundu
                                <br>
                                <strong>Oxuyan:</strong> <?=$row['user_name']?>
                            </div>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if (permission('contact', 'edit')): ?>
                            <a href="<?= admin_url('edit-contact?id=' . $row['contact_id']) ?>"
                               class="btn">Görüntülə</a>
                        <?php endif; ?>
                        <?php if (permission('contact', 'delete')): ?>
                            <a onclick="return confirm('Silmək istəyirsiniz ?')"
                               href="<?= admin_url('delete?table=contact&column=contact_id&id=' . $row['contact_id']) ?>"
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
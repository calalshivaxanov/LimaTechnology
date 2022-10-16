<?php require admin_view('static/header') ?>

    <div class="box-">
        <h1>
            Rəylər
        </h1>
    </div>

    <div class="filter">
        <ul>
            <li class="<?=!get('status') ? 'active' : null?>">
                <a href="<?=admin_url('comments')?>">
                    Hamısı
                </a>
            </li>
            <li class="<?=get('status') == 1 ? 'active' : null?>">
                <a href="<?=admin_url('comments?status=1')?>">
                    Təsdiqlənənlər
                </a>
            </li>
            <li class="<?=get('status') == 2 ? 'active' : null?>">
                <a href="<?=admin_url('comments?status=2')?>">
                    Təsdiq gözləyənlər
                </a>
            </li>
        </ul>
    </div>

    <div class="table">
        <table>
            <thead>
            <tr>
                <th width="10"></th>
                <th>Rəy</th>
                <th>Mövzu</th>
                <th class="hide">Yazıldığı Tarix</th>
                <th>İşləmlər</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($query as $row): ?>
                <tr>
                    <td>
                        <img src="<?= get_gravatar($row['comment_email']) ?>" alt="" height="40"
                             style="border-radius: 50%">
                    </td>
                    <td>
                        <p style="font-size: 12px; color: #666;">
                            <?= $row['comment_name'] ?> (<?= $row['comment_email'] ?>)
                            <?php if ($row['comment_status'] == 0): ?>
                                <span style="background: #999; margin-left: 10px; border-radius: 3px; color:#fff; padding: 2px 5px;">Təsdiq gözləyir</span>
                            <?php endif; ?>
                        </p>
                        <p>
                            <?= $row['comment_content'] ?>
                        </p>
                    </td>
                    <td>
                        <a href="<?= site_url('blog/' . $row['post_url']) ?>"
                           target="_blank"><?= $row['post_title'] ?></a>
                    </td>
                    <td class="hide" title="<?= $row['comment_date'] ?>">
                        <?= timeConvert($row['comment_date']) ?>
                    </td>
                    <td>
                        <?php if (permission('comments', 'edit')): ?>
                            <a href="<?= admin_url('edit-comment?id=' . $row['comment_id']) ?>"
                               class="btn">Düzəlt</a>
                        <?php endif; ?>
                        <?php if (permission('comments', 'delete')): ?>
                            <a onclick="return confirm('Silmək istəyirsiniz ?')"
                               href="<?= admin_url('delete?table=comments&column=comment_id&id=' . $row['comment_id']) ?>"
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
            <?= $db->showPagination(admin_url(route(1) . '?' . $pageParam . '=[page]&status=' . get('status'))) ?>
        </ul>
    </div>
<?php endif; ?>

<?php require admin_view('static/footer') ?>
<?php require admin_view('static/header') ?>

    <div class="box-">
        <h1>
            <?= $row['reference_title'] ?> - Rəsmlər
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="box-" tab>

        <div class="admin-tab">
            <ul tab-list>
                <li>
                    <a href="#">Ümumi</a>
                </li>
            </ul>
        </div>

        <form action="" method="post" class="form label" enctype="multipart/form-data">
            <div class="tab-container">
                <div tab-content>
                    <ul>
                        <li>
                            <label>Rəsm Yüklə</label>
                            <div class="form-content">
                                <input type="file" name="images[]" multiple>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul>
                    <li class="submit">
                        <input type="hidden" name="submit" value="1">
                        <button type="submit">Yüklə</button>
                    </li>
                </ul>
            </div>
        </form>
    </div>

    <div class="box-">
        <div class="table">
            <table>
                <thead>
                <tr>
                    <th>Rəsm</th>
                    <th>İşləmlər</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($query as $image): ?>
                    <tr>
                        <td>
                            <img src="<?= site_url('upload/reference/' . $row['reference_url'] . '/' . $image['image_url']) ?>"
                                 alt="" width="100">
                        </td>
                        <td>
                            <?php if (permission('reference', 'edit')): ?>
                                <a href="<?= admin_url('edit-reference-image?id=' . $image['image_id']) ?>"
                                   class="btn">Düzəlt</a>
                            <?php endif; ?>
                            <?php if (permission('reference', 'delete')): ?>
                                <a onclick="return confirm('Silmə işləminə Davam edirsiniz?')"
                                   href="<?= admin_url('delete?table=reference_images&column=image_id&id=' . $image['image_id']) ?>"
                                   class="btn">Sil</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

<?php require admin_view('static/footer') ?>
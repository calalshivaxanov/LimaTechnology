<?php require view('static/header'); ?>

<section id="first-section" class="blog">
    <div class="background">
    </div>
    <div class="content">
        <form class="searchform cf">
            <input type="text" placeholder="Axtaris">
            <button type="submit">Search</button>
        </form>

        <h1>BLOG</h1>
    </div>

</section>



<?php if ($query): ?>
<section id="cards" class="for-mobile from-left-animation">
    <?php foreach ($query as $row): ?>

        <div class="card1">
        <div class="imgbx">
            <img src="https://i.pinimg.com/originals/33/b8/69/33b869f90619e81763dbf1fccc896d8d.jpg" alt="">
        </div>
        <div class="text">
             <h2><?= $row['post_title'] ?></h2>
            <p>
                <?= htmlspecialchars_decode($row['post_short_content']) ?>
            </p>
        </div>
        <a href="<?= site_url('blog/' . $row['post_url']) ?>" class="btn btn-dark">Göstər</a>
    </div>

    <?php endforeach; ?>

</section>



    <section id="cards" class="for-mobile from-left-animation">
    <?php if ($totalRecord > $pageLimit): ?>
        <div class="pagination p12">
            <ul>
                <a href="<?= site_url('blog?' . $pageParam . '=' . $db->prevPage()) ?>"><li>Öncə</li></a>
                <?= $db->showPagination(site_url('blog?' . $pageParam . '=[page]'), 'active', true) ?>
                <a href="<?= site_url('blog?' . $pageParam . '=' . $db->nextPage()) ?>"><li>Sonra</li></a>
            </ul>
        </div>
    <?php endif; ?>
    </section>
<?php endif; ?>








<div id="top-btn">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
         x="0px" y="0px" viewBox="0 0 512.008 512.008" style="enable-background:new 0 0 512.008 512.008;"
         xml:space="preserve">
            <path style="fill:white"
                  d="M263.556,3.123c-4.165-4.164-10.917-4.164-15.083,0L45.807,205.79  c-21.838,21.838-21.838,57.245,0,79.083s57.245,21.838,79.083,0l77.781-77.781v251.584c0,29.455,23.878,53.333,53.333,53.333  c29.455,0,53.333-23.878,53.333-53.333V207.091l77.781,77.781c21.838,21.838,57.245,21.838,79.083,0s21.838-57.245,0-79.083  L263.556,3.123z" />

        </svg>
</div>

<?php require view('static/footer'); ?>
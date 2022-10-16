
<!-- service -->
<section class="blog section-padding" id="services">
    <div class="container">
        <div class="main-heading mx-auto">
            <h2 class="main-head-animation">Services</h2>
            <span>Xidmətlər</span>
        </div>
        <div class="blog-field pt-4 row">



            <?php  foreach ($query_blog as $row):?>


            <div class="wow fadeInDown blog-box mb-4 col-12 col-md-6 col-lg-4">
                <div class="blog-content" >
                    <a href="/" data-bs-toggle="modal" data-bs-target="#serviceModal<?= $row['post_id']?>" data-popup="first-pop" class="show-pop image d-block position-relative overflow-hidden">
                        <span class="blog-title"><?= $row['post_title'] ?></span>
                    </a>
                    <h3 class="blog-head my-2 px-2"><?= $row['category_name'] ?></h3>
                    <p class="blog-text mb-3 px-2"><?= htmlspecialchars_decode($row['post_short_content']) ?></p>
                    <hr class="my-0">
                    <div class="blog-links d-flex justify-content-between align-items-center p-2">
                        <div class="more">
                            <a class="show-pop" href="#" data-bs-toggle="modal" data-bs-target="#serviceModal<?= $row['post_id']?>">Ətraflı Məlumat</a>
                        </div>
                    </div>
                </div>
            </div>

            <?php  endforeach;  ?>










        </div>

    </div>
</section>

<!-- service modal -->



<?php  foreach ($query_blog as $row):?>



<div class="modal fade" id="serviceModal<?= $row['post_id']?>" tabindex="-1">
    <div class="modal-dialog">
        <div class="container">
            <div class="modal-content">
                <div class="modal-header position-relative">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="far fa-times-circle"></i>
                    </button>
                </div>
                <span class="pop-info">Xidmətlər
                        <a href="#"><?= $row['category_name'] ?></a>
                    </span>
                <div class="modal-body">
                    <h3 class="blog-title"><?= $row['post_title'] ?></h3>


                  <p style="color: white"> <?= htmlspecialchars_decode($row['post_content']) ?></p>
                </div>
                    <!--
                    <div class="blog-quote">
                        <q>The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV
                            quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for
                            quick jigs vex! Fox nymphs grab</q>
                    </div>
                    -->

                </div>
            </div>
        </div>
    </div>
</div>

<?php endforeach;?>


<section class="portfolio section-padding" id="portfolio">
    <div class="container">
        <div class="main-heading mx-auto">
            <h2 class="main-head-animation">Portfolio</h2>
            <span>Our Projects</span>
        </div>
        <div class="prog-filter wow fadeIn">
            <ul class="ps-0">



                <li class="cursor-pointer-hover <?= !route(1) ? 'active' : null ?>" data-filter="all">All</li>
                <?php foreach ($categories as $category): ?>




                <li class="cursor-pointer-hover" data-filter="<?=$category['category_id']?>"><?=$category['category_name']?></li>



                <?php endforeach; ?>









                <!-- Pagination -->
<!--
                <li class="cursor-pointer-hover" data-filter=".development">Development</li>
                <li class="cursor-pointer-hover" data-filter=".marketing">Marketing</li>
                -->




            </ul>
        </div>


        <div class="port-field row" id="portfolio-shuffle">






            <?php foreach ($query_reference as $row): ?>

                <?php

                print_r($category['category_id']);
                print_r($row['reference_categories']);


                ?>


            <div class="mix <?= $row['reference_categories'] ?> prog-box col-12 col-md-6 col-lg-4 mb-4" data-order="<?= $category['category_id'] ?>">
                <a data-fancybox="gallery" data-caption="Development: Project Title" class="d-block position-relative" href="<?= site_url('upload/reference/' . $row['reference_url']. '/' . $row['reference_image']) ?>">
                    <img class="img-fluid w-100 d-block" src="<?= site_url('upload/reference/' . $row['reference_url'] . '/' . $row['reference_image']) ?>" alt="portfolio">
                    <div class="port-disc">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <i class="fas fa-search-plus"></i>
                        <h4>Project Title</h4>
                        <p class="type mb-0">Development</p>
                    </div>
                </a>
            </div>
            <?php endforeach;?>




            <!--
            <div class="mix development prog-box col-12 col-md-6 col-lg-4 mb-4" data-order="2">
                <a data-fancybox="gallery" data-caption="Development: Project Title" class="d-block position-relative" href="<?=public_url('images/portfolio/portfolio2.jpg')?>">
                    <img class="img-fluid w-100 d-block" src="<?=public_url('images/portfolio/portfolio2.jpg')?>" alt="portfolio">
                    <div class="port-disc">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <i class="fas fa-search-plus"></i>
                        <h4>Project Title</h4>
                        <p class="type mb-0">Development</p>
                    </div>
                </a>
            </div>
            <div class="mix design prog-box col-12 col-md-6 col-lg-4 mb-4" data-order="3">
                <a data-fancybox="gallery" data-caption="Design: Project Title" class="d-block position-relative" href="<?=public_url('images/portfolio/portfolio3.jpg')?>">
                    <img class="img-fluid w-100 d-block" src="<?=public_url('images/portfolio/portfolio3.jpg')?>" alt="portfolio">
                    <div class="port-disc">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <i class="fas fa-search-plus"></i>
                        <h4>Project Title</h4>
                        <p class="type mb-0">Design</p>
                    </div>
                </a>
            </div>
            <div class="mix marketing prog-box col-12 col-md-6 col-lg-4 mb-4" data-order="4">
                <a data-fancybox="gallery" data-caption="Marketing: Project Title" class="d-block position-relative" href="<?=public_url('images/portfolio/portfolio4.jpg')?>">
                    <img class="img-fluid w-100 d-block" src="<?=public_url('images/portfolio/portfolio4.jpg')?>" alt="portfolio">
                    <div class="port-disc">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <i class="fas fa-search-plus"></i>
                        <h4>Project Title</h4>
                        <p class="type mb-0">Marketing</p>
                    </div>
                </a>
            </div>
            <div class="mix development prog-box col-12 col-md-6 col-lg-4 mb-4" data-order="5">
                <a data-fancybox="gallery" data-caption="Development: Project Title" class="d-block position-relative" href="<?=public_url('images/portfolio/portfolio5.jpg')?>">
                    <img class="img-fluid w-100 d-block" src="<?=public_url('images/portfolio/portfolio5.jpg')?>" alt="portfolio">
                    <div class="port-disc">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <i class="fas fa-search-plus"></i>
                        <h4>Project Title</h4>
                        <p class="type mb-0">Development</p>
                    </div>
                </a>
            </div>
            <div class="mix marketing prog-box col-12 col-md-6 col-lg-4 mb-4" data-order="6">
                <a data-fancybox="gallery" data-caption="Marketing: Project Title" class="d-block position-relative" href="<?=public_url('images/portfolio/portfolio6.jpg')?>">
                    <img class="img-fluid w-100 d-block" src="<?=public_url('images/portfolio/portfolio6.jpg')?>" alt="portfolio">
                    <div class="port-disc">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <i class="fas fa-search-plus"></i>
                        <h4>Project Title</h4>
                        <p class="type mb-0">Marketing</p>
                    </div>
                </a>
            </div>

            -->


        </div>
        <div class="more-projects text-center mt-4 pt-2">
            <a href="#" class="main-btn">More Projects</a>
        </div>
    </div>
</section>

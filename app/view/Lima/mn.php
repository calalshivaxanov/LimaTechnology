<li class="cursor-pointer-hover <?= !route(1) ? 'active' : null ?>" data-filter="all">All</li>
<?php foreach ($categories as $category): ?>


    <li class="cursor-pointer-hover" data-filter="<?=$category['category_id']?>"><?=$category['category_name']?></li>
<?php endforeach; ?>



sql emrleri
$query_reference = $db
->from('reference')
->select('reference.*,GROUP_CONCAT(reference_categories.category_name SEPARATOR \' | \') as categories,reference_categories.category_id')
->join('reference_categories', 'FIND_IN_SET(%s.category_id, %s.reference_categories)', 'inner')

// ->select('reference.*, GROUP_CONCAT(reference_categories.category_name SEPARATOR \' | \') as categories')
// ->join('reference_categories', 'FIND_IN_SET(%s.category_id, %s.reference_categories)')
->findInSetReverse('reference_categories', 'category_id')
// ->orderby('reference_categories.reference_id', 'DESC')
// ->groupBy('reference_categories.reference_id')
->all();
















<?php foreach ($query_reference as $row): ?>


    <div class="mix <?=($row['reference_categories'] == $category['category_id']) ? $row['reference_categories'] :  'beraberdeyil' ; ?> prog-box col-12 col-md-6 col-lg-4 mb-4" data-order="<?= $row['reference_categories'] ?>">
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

<?php

$categories = $db->from('reference_categories')
    ->orderBy('category_order', 'ASC')
    ->all();

if (route(1)){

    $curr_category = null;
    foreach ($categories as $category){
        if ($category['category_url'] == route(1)){
            $curr_category = $category;
        }
    }
    if (!$curr_category){
        header('Location:' . site_url('portfolio'));
        exit;
    }
    require controller('_referans-kategori');

} else {

    $meta = [
        'title' => setting('references_title'),
        'description' => setting('references_description')
    ];


    if (isset($curr_category['category_seo'])) {
        $seo = json_decode($curr_category['category_seo'], true);
    }





    $query_reference = $db->from('reference')
        ->select('reference.*, GROUP_CONCAT(reference_categories.category_name SEPARATOR \' | \') as categories')
        ->join('reference_categories', 'FIND_IN_SET(%s.category_id, %s.reference_categories)')
        ->orderby('reference_id', 'DESC')
        ->groupBy('reference_id')
        ->all();





    //  require view('portfolio');

}
<?php

if (!permission('reference-categories', 'add')){
    permission_page();
}

if (post('submit')){

    $category_name = post('category_name');
    $category_url = permalink(post('category_url'));
    if (!post('category_url')) {
        $category_url = permalink($category_name);
    }
    $category_seo = json_encode(post('category_seo'));

    if (!$category_name || !$category_url){
        $error = 'Kateqoriya adını seçin';
    } else {

        // kategoriya var mı yoxla
        $query = $db->from('reference_categories')
            ->where('category_url', $category_url)
            ->first();

        if ($query){
            $error = '<strong>' . $category_name . '</strong> adında bir kateqoriya var, zəhmət olmasa başqasını daxil edin!';
        } else {

            $query = $db->insert('reference_categories')
                ->set([
                    'category_name' => $category_name,
                    'category_url' => $category_url,
                    'category_seo' => $category_seo
                ]);

            if ($query){
                header('Location:' . admin_url('reference-categories'));
            } else {
                $error = 'Xəta baş verdi';
            }

        }

    }

}

require admin_view('add-reference-category');
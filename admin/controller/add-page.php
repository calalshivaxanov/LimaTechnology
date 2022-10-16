<?php

if (!permission('pages', 'add')){
    permission_page();
}

if (post('submit')){

    $page_title = post('page_title');
    $page_url = permalink(post('page_url'));
    if (!post('page_url')) {
        $page_url = permalink($page_title);
    }
    $page_content = post('page_content');
    $page_seo = json_encode(post('page_seo'));

    if (!$page_url || !$page_content){
        $error = 'Zəhmət olmasa bütün məlumatları doldurun';
    } else {

        // Səhifə var mı yoxla
        $query = $db->from('pages')
            ->where('page_url', $page_url)
            ->first();

        if ($query){
            $error = '<strong>' . $page_title . '</strong> adında bir səhifə var, zəhmət olmasa başqasını daxil edin!';
        } else {

            $query = $db->insert('pages')
                ->set([
                    'page_title' => $page_title,
                    'page_url' => $page_url,
                    'page_content' => $page_content,
                    'page_seo' => $page_seo
                ]);

            if ($query){
                header('Location:' . admin_url('pages'));
            } else {
                $error = 'Xəta baş verdi!';
            }

        }

    }

}

require admin_view('add-page');
<?php

if (!permission('pages', 'edit')){
    permission_page();
}

$id = get('id');
if (!$id){
    header('Location:' . admin_url('pages'));
    exit;
}

$row = $db->from('pages')
    ->where('page_id', $id)
    ->first();

if (!$row){
    header('Location:' . admin_url('pages'));
    exit;
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
        $error = 'Zəhmət olmasa bütün yerləri doldurun';
    } else {

        // səhifə var mı yoxla
        $query = $db->from('pages')
            ->where('page_url', $page_url)
            ->where('page_id', $id, '!=')
            ->first();

        if ($query){
            $error = '<strong>' . $page_title . '</strong> adında bir səhifə var, zəhmət olmasa başqasını yoxlayın';
        } else {

            $query = $db->update('pages')
                ->where('page_id', $id)
                ->set([
                    'page_title' => $page_title,
                    'page_url' => $page_url,
                    'page_content' => $page_content,
                    'page_seo' => $page_seo
                ]);

            if ($query){
                header('Location:' . admin_url('pages'));
            } else {
                $error = 'Xəta baş verdi';
            }

        }

    }

}

$seo = json_decode($row['page_seo'], true);

require admin_view('edit-page');
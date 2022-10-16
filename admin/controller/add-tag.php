<?php

if (!permission('tags', 'add')){
    permission_page();
}

if (post('submit')){

    $tag_name = post('tag_name');
    $tag_url = permalink(post('tag_url'));
    if (!post('tag_url')) {
        $tag_url = permalink($tag_name);
    }
    $tag_seo = json_encode(post('tag_seo'));

    if (!$tag_url){
        $error = 'Zəhmət olmasa bütün məlumatları doldurun';
    } else {

        // etiket var mı yoxla
        $query = $db->from('tags')
            ->where('tag_url', $tag_url)
            ->first();

        if ($query){
            $error = '<strong>' . $tag_name . '</strong> adında bir etiket var, zəhmət olmasa başqasını daxil edin!';
        } else {

            $query = $db->insert('tags')
                ->set([
                    'tag_name' => $tag_name,
                    'tag_url' => $tag_url,
                    'tag_seo' => $tag_seo
                ]);

            if ($query){
                header('Location:' . admin_url('tags'));
            } else {
                $error = 'Bir xəta baş verdi';
            }

        }

    }

}

require admin_view('add-tag');
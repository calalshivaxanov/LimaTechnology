<?php

if (!permission('reference', 'add')) {
    permission_page();
}

$categories = $db->from('reference_categories')
    ->orderby('category_name', 'ASC')
    ->all();

if (post('submit')) {

    if ($data = form_control('reference_url', 'reference_demo')) {

        $data['reference_demo'] = post('reference_demo');
        $data['reference_url'] = permalink(post('reference_url') ? post('reference_url') : $data['reference_title']);
        $data['reference_seo'] = json_encode($data['reference_seo']);
        $data['reference_categories'] = implode(',', $data['reference_categories']);

        // Bu referans varmı yoxla
        $query = $db->from('reference')
            ->where('reference_url', $data['reference_url'])
            ->first();

        if ($query) {
            $error = 'Bu adda bir referans var, zəhmət olmasa başqasını daxil edin!';
        } else {
            $referenceurl = $data['reference_url'] ;

            if (mkdir(PATH . '/upload/reference/' . $referenceurl, 0777,true)) {


                $handle = new \Verot\Upload\Upload($_FILES['reference_image']);
                if ($handle->uploaded) {
                    $handle->file_new_name_body = $data['reference_url'] . '_' . rand(1, 9999);
                    $handle->image_ratio_crop = true;
//                    $handle->image_ratio_fill = true;
                    $handle->image_resize = true;
                    $handle->image_x = 1024;
                    $handle->image_y = 960;
                    $handle->allowed = ['image/*'];
                    $handle->process(PATH . '/upload/reference/' . $data['reference_url']);
                    if ($handle->processed){
                        $data['reference_image'] = $handle->file_dst_name_body . '.' . $handle->file_dst_name_ext;
                    } else {
                        $error = $handle->error;
                    }
                } else {
                    $error = 'Zəhmət olmasa referans üçün şəkil yükləyin';
                }

            } else {
                $error = PATH . '/upload/reference/' . $data['reference_url'] . ' Düzüm yaradılmadı!';
            }

            if (!isset($error)){

                $insert = $db->insert('reference')
                    ->set($data);

                if ($insert){
                    header('Location:' . admin_url('reference'));
                } else {
                    $error = 'Bir xəta baş verdi və Referans əlavə olunmadı';
                }

            }

        }

    } else {
        $error = 'Zəhmət olmasa bütün məlumatları doldurub təkrar yoxlayın';
    }

}

require admin_view('add-reference');
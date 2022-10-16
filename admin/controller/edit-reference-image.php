<?php

if (!permission('reference', 'edit')){
    permission_page();
}

$id = get('id');
if (!$id){
    header('Location:' . admin_url('reference'));
    exit;
}

$row = $db->from('reference_images')
    ->join('reference', '%s.reference_id = %s.image_reference_id')
    ->where('image_id', $id)
    ->first();
if (!$row){
    header('Location:' . admin_url('reference'));
    exit;
}

if (post('submit')){

    $image_content = post('image_content');
    $data['image_content'] = json_encode($image_content);

    if ($_FILES['image']['name']){
        $handle = new \Verot\Upload\Upload($_FILES['reference_image']);
        if ($handle->uploaded) {
            $handle->file_new_name_body = $row['reference_url'] . '_' . rand(1, 9999);
            $handle->image_resize = true;
            $handle->image_x = 1024;
            $handle->image_y = 960;
            $handle->image_ratio_y = true;
            $handle->allowed = ['image/*'];
            $handle->process(PATH . '/upload/reference/' . $row['reference_url']);
            if ($handle->processed) {
                unlink(PATH . '/upload/reference/' . $row['reference_url'] . '/' . $row['image_url']);
                $data['image_url'] = $handle->file_dst_name_body . '.' . $handle->file_dst_name_ext;
            } else {
                $error = $handle->error;
            }
        }
    }

    $update = $db->update('reference_images')
        ->where('image_id', $id)
        ->set($data);

    if ($update){
        header('Location:' . admin_url('reference-images?id=' . $row['reference_id']));
        exit;
    } else {
        $error = 'Rəsm güncəlləmə uğursuz oldu!';
    }

}

$content = json_decode(($row['image_content'] ? $row['image_content'] : '{}'), true);

require admin_view('edit-reference-image');
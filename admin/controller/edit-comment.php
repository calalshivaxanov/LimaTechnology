<?php

if (!permission('comments', 'edit')){
    permission_page();
}

$id = get('id');
if (!$id){
    header('Location:' . admin_url('comments'));
    exit;
}

$row = $db->from('comments')
    ->join('posts', '%s.post_id = %s.comment_post_id')
    ->join('users', '%s.user_id = %s.comment_user_id', 'left')
    ->where('comment_id', $id)
    ->first();
if (!$row){
    header('Location:' . admin_url('comments'));
    exit;
}

if (post('submit')){

    if ($data = form_control('comment_status')){

        $data['comment_status'] = post('comment_status');

        $query = $db->update('comments')
            ->where('comment_id', $id)
            ->set($data);

        if ($query){
            header('Location:' . admin_url('comments'));
        } else {
            $error = 'Xəta baş veri';
        }

    } else {
        $error = 'Tamamlanmamış yerlər var, zəhmət olmasa yoxlayın';
    }

}

require admin_view('edit-comment');
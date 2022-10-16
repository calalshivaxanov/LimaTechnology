<?php

if (post('submit')){
    if ($data = form_control()){

        $row = $db->from('users')
            ->where('user_url', permalink($data['user_name']))
            ->where('user_rank', 3, '!=')
            ->first();

        if (!$row){
            $error = 'Daxil etdiyiniz məlumatlar yanlışdır, Zəhmət olmasa bir daha sınayın!';
        } else {

            $password_verify = password_verify($data['user_password'], $row['user_password']);
            if ($password_verify){
                if ($row['user_rank'] == 3){
                    $error = 'Bu bölməyə daxil olmaq üçün icazəniz yoxdur';
                } else {
                    User::Login($row);
                    header('Location:' . admin_url());
                }
            } else {
                $error = 'Daxil etdiyiniz şifrə yanlışdır, Zəhmət olmasa bir daha sınayın';
            }

        }

    } else {
        $error = 'Zəhmət olmasa məlumatlarınızı daxil edin';
    }
}

require admin_view('login');
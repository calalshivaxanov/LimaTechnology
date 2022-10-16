<?php

$meta = [
    'title' => 'Daxil ol'
];

if (post('submit')){

    $username = post('username');
    $password = post('password');

    if (!$username){
        $error = 'Zəhmət olmasa istifadəçi adınızı yazın.';
    } elseif (!$password){
        $error = 'Zəhmət olmasa şifrənizi daxil edin.';
    } else {

        // istifadəçi var mı yoxla
        $row = User::userExist($username);

        if ($row){

            // şifrə yoxla
            $password_verify = password_verify($password, $row['user_password']);

            if ($password_verify){

                $success = 'Uğurla daxil oldunuz, yönləndirilirsiniz.';
                User::Login($row);

                header('Refresh:2;url=' . site_url());

            } else {
                $error = 'Şifrəniz xətalı, Zəhmət olmasa bir daha yoxlayın!';
            }

        } else {
            $error = 'Belə bir istifadəçi qeydiyyatdan keçməyib';
        }

    }

}

require view('login');
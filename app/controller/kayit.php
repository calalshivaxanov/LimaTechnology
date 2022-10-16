<?php

$meta = [
    'title' => 'Qeydiyyatdan Keç'
];

if (post('submit')){

    $username = post('username');
    $email = post('email');
    $password = post('password');
    $password_again = post('password_again');

    if (!$username){
        $error = 'Zəhmət olmasa istifadəçi adınızı yazın.';
    } elseif (!$email){
        $error = 'Zəhmət olmasa e-mail adresinizi yazın.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = 'Zəhmət olmasa keçərli bir e-mail adresi yazın.';
    } elseif (!$password || !$password_again){
        $error = 'Zəhmət olmasa şifrenizi daxil edin.';
    } elseif ($password != $password_again){
        $error = 'Daxil etdiyiniz şifrələr eyni deyil';
    } else {

        // istifadəçi var mı yoxla
        $row = User::userExist($username, $email);

        if ($row){
            $error = 'Bu istifadəçi adı ya da e-mail istifadə olunub. Zəhmət olmasa başqasını sınayın';
        } else {

            // istifadəçi əlavə et
            $result = User::Register([
                'username' => $username,
                'url' => permalink($username),
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT)
            ]);

            if ($result){
                $success = 'Uğurla qeydiyyatdan keçdiniz, Yönləndirilirsiniz';
                User::Login([
                    'user_id' => $db->lastInsertId(),
                    'user_name' => $username
                ]);
                header('Refresh:2;url=' . site_url());
            } else {
                $error = 'Xəta baş verdi, Zəhmət olmasa bir daha yoxlayın';
            }

        }

    }

}

require view('register');
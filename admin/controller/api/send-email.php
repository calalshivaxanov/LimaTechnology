<?php

if ($data = form_control()) {

    $send = send_email($data['email'], $data['name'], $data['subject'], nl2br($data['message']));
    if ($send) {
        $json['success'] = 'Mesajınız müvəffəqiyyətlə göndərildi!';
    } else {
        $json['error'] = 'Mesaj göndərilərkən bir xəta baş verdi!';
    }

} else {
    $json['error'] = 'Zəhmət olmasa bütün məlumatları daxil edin!';
}
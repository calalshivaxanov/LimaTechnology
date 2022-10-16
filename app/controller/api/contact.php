<?php

if ($data = form_control('phone')){

    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
        $json['error'] = 'Zəhmət olmasa keçerli bir e-mail adresi daxil edin.';
    } else {

        $query = $db->insert('contact')
            ->set([
                'contact_name' => $data['name'],
                'contact_email' => $data['email'],
                'contact_phone' => $data['phone'],
                'contact_subject' => $data['subject'],
                'contact_message' => $data['message']
            ]);

        if ($query) {
            $json['success'] = 'Mesajınız uğurla göndərildi, təşəkkür edirik.';
        } else {
            $json['error'] = 'Xəta baş verdi ve mesajınız göndərilmədi!';
        }

    }

} else {
    $json['error'] = 'Zəhmət olmasa bütün məlumatları doldurub təkrar yoxlayın';
}
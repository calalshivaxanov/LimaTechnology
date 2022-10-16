<?php require view('static/header'); ?>



<section id="first-section">
    <div style="height:400px!important;" class="background">
    </div>
    <div style="height:400px!important;" class="content">

</section>
<section id="contact">
    <h1 class="oneh1">Bizimlə Əlaqə Qurun</h1>
    <div id="contact-line">
        <div class="altxett"></div>
    </div>
    <div class="contact-word"><?=setting('contact_text')?>
    </div>
    <div id="umumielaqe">
        <div class="elaqe">
            <div class="icons"><i class="fas fa-map-marker-alt"></i></div>
            <div class="text1">Ünvan</div>
            <div class="text2">
                <address><?=setting('contact_adress')?></address>
            </div>
        </div>
        <div class="elaqe after">
            <div class="icons"><i class="fas fa-phone-alt"></i></div>
            <div class="text1">Əlaqə Nömrəsi</div>
            <div class="text2"><?=setting('contact_number')?></div>
        </div>
        <div class="elaqe">
            <div class="icons"><i class="far fa-envelope"></i></div>
            <div class="text1">E-mail</div>
            <div class="text2"><?=setting('contact_mail')?></div>
        </div>

    </div>

    <form action="" id="contact-form" onsubmit="return false;">
        <div class="alert alert-danger" style="display: none" id="contact-error-msg" role="alert"></div>
        <div class="alert alert-success" style="display: none" id="contact-success-msg" role="alert"></div>
        <div class="tree-line">
        </div>
        <div class="tree-line">
            <div class="field-container">
                <input class="field-input" name="name" type="text" placeholder=" ">
                <label class="field-placeholder" for="name">Ad-Soyad</label>
            </div>
        </div>
        <div class="tree-line">
            <div class="field-container">
                <input class="field-input" name="email" type="email" placeholder=" ">
                <label class="field-placeholder" for="email">Mail Adresiniz</label>
            </div>
            <div class="field-container">
                <input class="field-input" name="phone" type="text" placeholder=" ">
                <label class="field-placeholder" for="phone">Telefon Nömrəniz</label>
            </div>
        </div>
        <div class="field-container">
            <input class="field-input" name="subject" type="text" placeholder=" ">
            <label class="field-placeholder" for="subject">Müraciət Səbəbi</label>
        </div>
        <div class="tree-line">
            <div class="field-container area-container">
                    <textarea class="field-input " name="message" rows="4" cols="50" type="text"
                              placeholder=" "></textarea>
                <label class="field-placeholder" for="message">Mesaj</label>
            </div>
        </div>
        <div class="tree-line">
            <div style="border: none;" class="field-container">
                <input class="submit" onclick="contact('#contact-form')" name="submit" type="submit" value="Göndər">
            </div>
        </div>
    </form>

    <div id="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d97236.43465759905!2d49.78491998266335!3d40.39470211181718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d6bd6211cf9%3A0x343f6b5e7ae56c6b!2sBak%C3%BC%2C%20Azerbaycan!5e0!3m2!1str!2s!4v1598531366418!5m2!1str!2s"
            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</section>
<div id="top-btn">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
         x="0px" y="0px" viewBox="0 0 512.008 512.008" style="enable-background:new 0 0 512.008 512.008;"
         xml:space="preserve">
            <path style="fill:white"
                  d="M263.556,3.123c-4.165-4.164-10.917-4.164-15.083,0L45.807,205.79  c-21.838,21.838-21.838,57.245,0,79.083s57.245,21.838,79.083,0l77.781-77.781v251.584c0,29.455,23.878,53.333,53.333,53.333  c29.455,0,53.333-23.878,53.333-53.333V207.091l77.781,77.781c21.838,21.838,57.245,21.838,79.083,0s21.838-57.245,0-79.083  L263.556,3.123z" />

        </svg>
</div>



<?php require view('static/footer'); ?>

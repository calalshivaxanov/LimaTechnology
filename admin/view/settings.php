<?php require admin_view('static/header') ?>

    <div class="box-">
        <h1>
            Parametrlər
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="box-" tab>

        <div class="admin-tab">
            <ul tab-list>
                <li>
                    <a href="#">Ümumi</a>
                </li>
                <li>
                    <a href="#">Referans</a>
                </li>

                <li>
                    <a href="#">Texniki baxış</a>
                </li>
                <li>
                    <a href="#">SMTP Mail</a>
                </li>
                <li>
                    <a href="#">Rəy</a>
                </li>
                <li>
                    <a href="#">Tema</a>
                </li>
                <li>
                    <a href="#">Səhifələmə</a>
                </li>
                <li>
                    <a href="#">BLOG</a>
                </li>
                <li>
                    <a href="#">Service</a>
                </li>
                <li>
                    <a href="#">Footer</a>
                </li>
            </ul>
        </div>

        <form action="" method="post" class="form label">
            <div class="tab-container">

                <!-- ÜMUMİ -->
                <div tab-content>
                    <ul>
                        <li>
                            <label>Site Title</label>
                            <div class="form-content">
                                <input type="text" name="settings[title]" value="<?= setting('title') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Site Description</label>
                            <div class="form-content">
                                <input type="text" name="settings[description]" value="<?= setting('description') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Site Keywords</label>
                            <div class="form-content">
                                <input type="text" name="settings[keywords]" value="<?= setting('keywords') ?>">
                            </div>
                        </li>

                        <li>
                        <li>
                            <label>Site Theme</label>
                            <div class="form-content">
                                <select name="settings[theme]">
                                    <option value="">- Tema seç -</option>
                                    <?php foreach ($themes as $theme): ?>
                                        <option <?=setting('theme') == $theme ? ' selected ' : null?> value="<?= $theme ?>"><?=$theme?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- ÜMUMİ -->





<!-- REFERANSLAR -->
                        <div tab-content>
                            <ul>
                        <li>
                            <label>Referanslar Title</label>
                            <div class="form-content">
                                <input type="text" name="settings[references_title]" value="<?= setting('references_title') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Referanslar Description</label>
                            <div class="form-content">
                                <input type="text" name="settings[references_description]" value="<?= setting('references_description') ?>">
                            </div>
                        </li>
                    </ul>
                </div>
 <!-- REFERANSLAR -->




                <!-- TEXNİKİ BAXIŞ -->
                <div tab-content>
                    <ul>
                        <li>
                            <label>Texniki Baxış açıqdırmı ?</label>
                            <div class="form-content">
                                <select name="settings[maintenance_mode]">
                                    <option <?=setting('maintenance_mode') == 1 ? ' selected ' : null?> value="1">Bəli</option>
                                    <option <?=setting('maintenance_mode') == 2 ? ' selected ' : null?> value="2">Xeyr</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <label>Texniki Baxış Title</label>
                            <div class="form-content">
                                <input type="text" name="settings[maintenance_mode_title]" value="<?= setting('maintenance_mode_title') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Texniki Baxış Əsas</label>
                            <div class="form-content">
                                <input type="text" name="settings[maintenance_mode_esas]" value="<?= setting('maintenance_mode_esas') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Texniki Baxış Açıqlama</label>
                            <div class="form-content">
                                <textarea name="settings[maintenance_mode_description]" cols="30" rows="5"><?= setting('maintenance_mode_description') ?></textarea>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- TEXNİKİ BAXIŞ -->




                <!-- SMTP MAİL -->
                <div tab-content>
                    <ul>
                        <li>
                            <label>SMTP Host</label>
                            <div class="form-content">
                                <input type="text" name="settings[smtp_host]" value="<?= setting('smtp_host') ?>">
                            </div>
                        </li>
                        <li>
                            <label>SMTP E-mail Adresi</label>
                            <div class="form-content">
                                <input type="text" name="settings[smtp_email]" value="<?= setting('smtp_email') ?>">
                            </div>
                        </li>
                        <li>
                            <label>SMTP E-mail Şifrəsi</label>
                            <div class="form-content">
                                <input type="text" name="settings[smtp_password]" value="<?= setting('smtp_password') ?>">
                            </div>
                        </li>
                        <li>
                            <label>SMTP Post</label>
                            <div class="form-content">
                                <input type="text" name="settings[smtp_port]" value="<?= setting('smtp_port') ?>">
                            </div>
                        </li>
                        <li>
                            <label>SMTP Secure</label>
                            <div class="form-content">
                                <select name="settings[smtp_secure]">
                                    <option <?= setting('smtp_secure') == 'ssl' ? ' selected' : null ?> value="ssl">SSL</option>
                                    <option <?= setting('smtp_secure') == 'tls' ? ' selected' : null ?> value="tls">TLS</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <label>SMTP Göndərən <br> E-mail Adresi</label>
                            <div class="form-content">
                                <input type="text" name="settings[smtp_send_email]" value="<?= setting('smtp_send_email') ?>">
                            </div>
                        </li>
                        <li>
                            <label>SMTP Göndərən <br> Ad-Soyad</label>
                            <div class="form-content">
                                <input type="text" name="settings[smtp_send_name]" value="<?= setting('smtp_send_name') ?>">
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- SMTP MAİL -->





                <!-- RƏY -->
                <div tab-content>
                    <ul>
                        <li>
                            <label>Ziyarətçi Rəyi</label>
                            <div class="form-content">
                                <select name="settings[visitor_comment]">
                                    <option value="1" <?=setting('visitor_comment') == 1 ? ' selected' : null?>>Təsdiqli</option>
                                    <option value="2" <?=setting('visitor_comment') == 2 ? ' selected' : null?>>Təsdiqli Deyil</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <label>İstifadəçi Rəyi</label>
                            <div class="form-content">
                                <select name="settings[user_comment]">
                                    <option value="1" <?=setting('user_comment') == 1 ? ' selected' : null?>>Təsdiqli</option>
                                    <option value="2" <?=setting('user_comment') == 2 ? ' selected' : null?>>Təsdiqli Deyil</option>
                                </select>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- RƏY -->




                <!-- TEMA -->
                <div tab-content>
                    <ul>
                        <li>
                            <label>Logo Başlığı</label>
                            <div class="form-content">
                                <input type="text" name="settings[logo]" value="<?= setting('logo') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Axtarış Input Placeholder</label>
                            <div class="form-content">
                                <input type="text" name="settings[search_placeholder]" value="<?= setting('search_placeholder') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Footer Haqqımda Yazısı</label>
                            <div class="form-content">
                                <textarea name="settings[about]" cols="30" rows="5"><?= setting('about') ?></textarea>
                            </div>
                        </li>
                        <li>
                            <label>Facebook URL</label>
                            <div class="form-content">
                                <input type="text" name="settings[facebook]" value="<?= setting('facebook') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Twitter URL</label>
                            <div class="form-content">
                                <input type="text" name="settings[twitter]" value="<?= setting('twitter') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Instagram URL</label>
                            <div class="form-content">
                                <input type="text" name="settings[instagram]" value="<?= setting('instagram') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Linkedin URL</label>
                            <div class="form-content">
                                <input type="text" name="settings[linkedin]" value="<?= setting('linkedin') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Xoşgəldin Başlığı</label>
                            <div class="form-content">
                                <input type="text" name="settings[welcome_title]" value="<?= setting('welcome_title') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Xidmət Başlığı (1)</label>
                            <div class="form-content">
                                <input type="text" name="settings[service_title_1]" value="<?= setting('service_title_1') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Xidmət Başlığı (2)</label>
                            <div class="form-content">
                                <input type="text" name="settings[service_title_2]" value="<?= setting('service_title_2') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Xoşgeldin Məzmunu</label>
                            <div class="form-content">
                                <textarea name="settings[welcome_text]" cols="30" rows="5"><?= setting('welcome_text') ?></textarea>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- TEMA -->





                <!-- SƏHİFƏLƏMƏ -->
                <div tab-content>
                    <ul>
                        <li>
                            <label>Blog Səhifələmə</label>
                            <div class="form-content">
                                <input type="text" name="settings[blog_pagination]" value="<?= setting('blog_pagination') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Blog Kategoriya Səhifələmə</label>
                            <div class="form-content">
                                <input type="text" name="settings[blog_category_pagination]" value="<?= setting('blog_category_pagination') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Blog Axtarış Səhifələmə</label>
                            <div class="form-content">
                                <input type="text" name="settings[blog_search_pagination]" value="<?= setting('blog_search_pagination') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Blog Etiket Səhifələmə</label>
                            <div class="form-content">
                                <input type="text" name="settings[blog_tag_pagination]" value="<?= setting('blog_tag_pagination') ?>">
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- SƏHİFƏLƏMƏ -->







                <!-- BLOG -->
                <div tab-content>
                    <ul>
                <li>
                    <label>Blog Title</label>
                    <div class="form-content">
                        <input type="text" name="settings[blog_title]" value="<?= setting('blog_title') ?>">
                    </div>
                </li>
                <li>
                    <label>Blog Description</label>
                    <div class="form-content">
                        <input type="text" name="settings[blog_description]" value="<?= setting('blog_description') ?>">
                    </div>
                </li>
                <li>
                    <label>Blog Axtarış Title</label>
                    <div class="form-content">
                        <input type="text" name="settings[blog_search_title]" value="<?= setting('blog_search_title') ?>">
                    </div>
                </li>
                <li>
                    <label>Blog Axtarış Description</label>
                    <div class="form-content">
                        <input type="text" name="settings[blog_search_description]" value="<?= setting('blog_search_description') ?>">
                    </div>
                </li>
                    </ul>
                </div>
                <!-- BLOG -->





                <!-- SERVİCE -->
                <div tab-content>
                    <ul>

                        <li>
                            <label>Servis Adı 1</label>
                            <div class="form-content">
                                <input type="text" name="settings[service_name_1]" value="<?= setting('service_name_1') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Servis Məzmunu 1</label>
                            <div class="form-content">
                                <input type="text" name="settings[service_content_1]" value="<?= setting('service_content_1') ?>">
                            </div>
                        </li>


                        <li>
                            <label>Servis Adı 2</label>
                            <div class="form-content">
                                <input type="text" name="settings[service_name_2]" value="<?= setting('service_name_2') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Servis Məzmunu 2</label>
                            <div class="form-content">
                                <input type="text" name="settings[service_content_2]" value="<?= setting('service_content_2') ?>">
                            </div>
                        </li>



                        <li>
                            <label>Servis Adı 3</label>
                            <div class="form-content">
                                <input type="text" name="settings[service_name_3]" value="<?= setting('service_name_3') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Servis Məzmunu 3</label>
                            <div class="form-content">
                                <input type="text" name="settings[service_content_3]" value="<?= setting('service_content_3') ?>">
                            </div>
                        </li>

                    </ul>
                </div>
                <!-- SERVİCE -->




                <!-- FOOTER -->
                <div tab-content>
                    <ul>



                        <li>
                            <label>Site Copyright</label>
                            <div class="form-content">
                                <input type="text" name="settings[copyright]" value="<?= setting('copyright') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Site BY</label>
                            <div class="form-content">
                                <input type="text" name="settings[site_by]" value="<?= setting('site_by') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Phone Number</label>
                            <div class="form-content">
                                <input type="text" name="settings[phone_number]" value="<?= setting('phone_number') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Email Adress</label>
                            <div class="form-content">
                                <input type="text" name="settings[email_adress]" value="<?= setting('email_adress') ?>">
                            </div>
                        </li>
                        <li>
                            <label>Location</label>
                            <div class="form-content">
                                <input type="text" name="settings[location]" value="<?= setting('location') ?>">
                            </div>
                        </li>




                    </ul>
                </div>
                <!-- FOOTER -->






                <ul>
                    <li class="submit">
                        <input type="hidden" name="submit" value="1">
                        <button type="submit">Parametləri Yaddaşa yaz</button>
                    </li>
                </ul>
            </div>
        </form>
    </div>

<?php require admin_view('static/footer') ?>
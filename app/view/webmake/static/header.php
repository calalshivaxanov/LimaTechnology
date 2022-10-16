<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <script src="<?=public_url('scripts/loader.js')?>">
    </script>
    <script type="text/javascript">
        window.$crisp = [];
        window.CRISP_WEBSITE_ID = "d0d8ef23-003b-42f0-a14f-b463673e16c7";
        (function () {
            d = document;
            s = d.createElement("script");
            s.src = "https://client.crisp.chat/l.js";
            s.async = 1;
            d.getElementsByTagName("head")[0].appendChild(s);
        })();
    </script>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
          integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <script src="<?=public_url('scripts/core.js')?>"></script>
    <link rel="stylesheet" href="<?=public_url('style/style.css')?>">
    <meta charset="UTF-8">
    <script src="<?=public_url('scripts/scroll-out.js')?>"></script>
    <script>
        var api_url = '<?=site_url('api')?>';

    </script>

    <script src="<?=public_url('scripts/api.js')?>"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$meta['title']?></title>


    <?php if(isset($meta['description'])): ?>
    <meta name="description" content = "<?=$meta['description']?>">
    <?php endif; ?>

    <?php if(isset($meta['keywords'])): ?>
        <meta name="keywords" content = "<?=$meta['keywords']?>">
    <?php endif; ?>

</head>

<body>
<header class="slide-in-blurred-top">
    <nav>
        <div class="container">
            <div class="divlogo">
                <a href="<?=site_url()?>" class="logo">
                    <img src="<?=public_url('images/logo.svg')?>" alt="">
                </a>
            </div>
            <label id="menu-list" for="menu"> <i class="fas fa-bars"></i></label>
            <ul class="menuList">

                <?php foreach (menu(1) as $key => $menu): ?>

                    <li>
                        <a href="<?=$menu['url']?>"><?=$menu['title']?></a>
                    </li>

                <?php endforeach; ?>


                <?php if (session('user_id')): ?>

                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?=session('user_name')?>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="<?=site_url('profile')?>">Profil</a>
                            <a class="dropdown-item" href="<?=site_url('logout')?>">Çıx</a>
                        </div>
                    </div>

                <?php else: ?>


                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Giriş Yap
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="<?=site_url('login')?>">Daxil Ol</a>
                        <a class="dropdown-item" href="<?=site_url('register')?>">Qeydiyyat</a>
                    </div>
                </div>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</header>
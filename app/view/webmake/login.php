<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$meta['title']?></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/styles/main.css">

</head>
<body>

<div class="container">
    <div class="row justify-content-md-center mt-4">

        <div class="col-md-4">
            <form action="" method="post">
                <h3 class="mb-3">Daxil Ol </h3>
                <?php if($err = error()): ?>

                    <div class="alert alert-danger" role="alert">
                    <?=$err?>
                    </div>

                <?php endif; ?>

                <?php if($suc = success()): ?>

                    <div class="alert alert-success" role="alert">
                        <?=$suc?>
                    </div>

                <?php endif; ?>
                <!--


                -->
                <div class="form-group">
                    <label for="username">İstifadəçi Adınız</label>
                    <input type="text" value="<?=post('username')?>" class="form-control" id="username" name="username" placeholder="Kullanıcı adınızı yazın..">
                </div>
                <div class="form-group">
                    <label for="password">Şifrəniz</label>
                    <input type="password" value="<?=post('password')?>" class="form-control" id="password" name="password" placeholder="*******">
                </div>
                <input type="hidden" name="submit" value="1">
                <button type="submit" class="btn btn-primary">Daxil Ol</button>
            </form>
        </div>

    </div>
</div>

</body>
</html>
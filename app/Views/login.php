<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>POS Lite - KS </title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="<?= base_url('/css/mdb.min.css') ?> " />

    <link rel="stylesheet" href="<?= base_url('/css/styles.css') ?>">

</head>

<body class="bg-gradient-success">
    <!--Main layout-->
    <div class="login">
        <div class="container">
            <div class="card">
                <div class="logotipo">
                    <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="50" alt="" loading="lazy" />
                </div>

                <form method="POST" action="<?= base_url('users/validauser') ?>" class="p-4">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="username" name="username" class="form-control" />
                        <label class="form-label" for="username">Username</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="password" name="password" class="form-control" />
                        <label class="form-label" for="password">Password</label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-success btn-block mb-4">Ingresar</button>


                </form>
            </div>
        </div>
    </div>
    <!-- MDB -->
    <script type="text/javascript" src="<?= base_url('/js/mdb.min.js') ?> "></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>

</html>
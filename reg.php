<!DOCTYPE html>
<html lang="ua">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My blog</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>

<body>
  <?php include_once "./blocks/header.php"; ?>


  <?php if (!empty($_COOKIE['log'])) : ?>
    <?php header('location: /'); ?>
  <?php endif; ?>


  <main class="mt5 container">
    <h1 class="text-center">
      Реєстрація
    </h1>
    <form class="mt-3" method="POST" action="/code/reg.php">
      <input type="text" name="login" placeholder="Ваш логін" class="form-control mt-3" required>
      <input type="password" name="password" placeholder="Ваш пароль" class="form-control mt-3" required>
      <button class="btn btn-outline-primary mt-3">
        Зареєструватись
      </button>
    </form>
  </main>
</body>

</html>
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

  <main class="mt5 container">
    <h1 class="text-center mt-3 ">
      Додати
    </h1>
    <form class="mt-4" action="/code/add.php" method="POST">
      <input type="text" name="title" placeholder="Введіть заголовок" class="form-control mt-2">
      <input type="text" name="intro" placeholder="Введіть інтро" class="form-control mt-2">
      <textarea name="text" id="name" class="form-control mt-2" placeholder="Введіть текст"></textarea>
      <button class="btn btn-outline-primary mt-3">
        Додати
      </button>
    </form>
  </main>
</body>

</html>
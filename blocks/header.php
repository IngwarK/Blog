<header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal"><a href="/">My blog</a></h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="/">Головна</a>
        <?php if (empty($_COOKIE['log'])) : ?>
            <a class="p-2 text-dark" href="/auth.php">Увійти</a>
            <a class="p-2 text-dark" href="/reg.php">Реєстрація</a>

        <?php else : ?>
            <a class="p-2 text-dark" href="/add.php">Додати</a>
            <a class="p-2 text-dark" href="/code/exit.php">Вийти</a>
        <?php endif; ?>
    </nav>
    <form class="d-flex" method="GET" action="/search.php">
        <input type="text" name="text" class="form-control" placeholder="Введіть запит ">
        <button class="btn btn-outline-succes ml2">
            Пошук
        </button>
    </form>
</header>
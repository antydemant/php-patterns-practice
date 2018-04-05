<header>
    <a href='/?controller=pages&action=home'>Home page</a>
    <a href='/?controller=pages&action=posts'>Posts page</a>
    <a href='/?controller=pages&action=error'>Error page</a>
</header>

<p>Hello there <?php echo $params['first_name'] . ' ' . $params['last_name']; ?>!<p>

<p>You successfully landed on the home page. Congrats! . <?=$params['hello'] ?></p>
<header>
    <a href='/?controller=pages&action=home'>Home page</a>
    <a href='/?controller=pages&action=posts'>Posts page</a>
    <a href='/?controller=pages&action=error'>Error page</a>
</header>

<h1>Full post</h1>
<h1>
    Post Author:<?=$params['post']->author ?>
</h1>
<p>
    <?=$params['post']->content ?>
</p>
<p>You successfully landed on the post page. Congrats!</p>
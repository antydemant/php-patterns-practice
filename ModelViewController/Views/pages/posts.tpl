<header>
    <a href='/?controller=pages&action=home'>Home page</a>
    <a href='/?controller=pages&action=posts'>Posts page</a>
    <a href='/?controller=pages&action=error'>Error page</a>
</header>

<?php foreach($params['posts'] as $key => $post) { ?>
    <h1>
        <a href="/?controller=pages&action=post&id=<?=$post->id ?>">Post Author:<?=$post->author ?></a>
    </h1>
    <h2>Post #:<?=$key ?></h2>
    <p>
        <?=$post->content ?>
    </p>
<?php } ?>
<p>You successfully landed on the posts page. Congrats!</p>
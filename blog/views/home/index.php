<?php $this->title = 'Welcome to My Blog Practical Project  - Blog System, SoftTech\'2016!'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<!-- TODO: display the posts here -->

<?php
/*var_dump($this->posts);
    */?>

<aside>
    <h2><u>Recent Posts</u></h2>
    <?php foreach ($this->sidebarPosts as $post) { ?>
        <a href="<?=APP_ROOT?>/home/view/<?=$post['id']?>">
            <?= htmlentities($post['title']) ?>
        </a>
        <hr>
    <?php } ?>
</aside>

<main id="posts">
    <article>
        <?php foreach ($this->posts as $post) {?>
        <h2 class="title"><?=htmlentities($post['title']) ?></h2>
            <div class="date"><i>Posted on</i>
                <?=(new DateTime($post['date']))->format('d-M-Y') ?>
                <i>by</i> <?=htmlentities($post['full_name'])?>
            </div>
            <p class="content"><?=$post['content']?></p>
        <?php } ?>
    </article>
</main>


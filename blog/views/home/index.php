<?php $this->title = 'Welcome to My Blog Practical Project  - Blog System, SoftTech\'2016!'; ?>


<!-- display the posts here -->

<?php
// var_dump($this->posts);
?>

<aside class="sidebar">
    <h2 class="recent-posts-title"><u>Recent Posts</u></h2>
    <?php foreach ($this->sidebarPosts as $post) { ?>
        <a class="single-menu-element" href="<?=APP_ROOT?>/home/view/<?=$post['id']?>">
            <?= htmlentities($post['title']) ?>
        </a>
        <hr>
    <?php } ?>
</aside>

<div id="posts">
    <h1 class="blog-title-index"><?=htmlspecialchars($this->title)?></h1>

    <article>
        <ul class="articles">
        <?php foreach ($this->posts as $post) {?>
            <li class="single-post">
                <div class="dot">&nbsp;</div>
                <a href="<?=APP_ROOT?>/home/view/<?=$post['id']?>">
                <h2 class="title"><?=htmlentities($post['title'])?></h2>
                    </a>
                <div class="subtitle"><i>Posted on</i>
                    <?=(new DateTime($post['date']))->format('d-M-Y')?>
                    <i>by</i> <?=htmlentities($post['full_name'])?>
                </div>
                <div class="content"><?=$post['content']?></div>
            </li>
        <?php } ?>
        </ul>
    </article>
</div>


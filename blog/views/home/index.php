<?php $this->title = 'Welcome to My Blog Practical Project  - Blog System, SoftTech\'2016!'; ?>


<!-- display the posts here -->

<?php
// var_dump($this->posts);
?>
<!-- RIGHTbar - recent posts -->

<aside class="sidebar">
    <h2 class="recent-posts-title"><u>Recent Posts</u></h2>
    <?php foreach ($this->sidebarPosts as $post) { ?>
        <a class="single-menu-element" href="<?=APP_ROOT?>/home/view/<?=$post['id']?>">
            <?= htmlentities($post['title']) ?>
        </a>
        <hr>
    <?php } ?>
</aside>


<!-- Display first posts -->
<div id="posts">
    <h1 class="blog-title-index"><?=htmlspecialchars($this->title)?></h1>

    <article>
        <ul class="articles">
        <?php foreach ($this->posts as $post) {?>
            <li class="single-post">
                <div class="dot">&nbsp;</div>
                <a class="post-title-link" href="<?=APP_ROOT?>/home/view/<?=$post['id']?>">
                <h2 class="title"><?=htmlentities($post['title'])?></h2>
                    </a>
                <div class="subtitle"><i>Posted on</i>
                    <?=(new DateTime($post['date']))->format('d-M-Y')?>
                    <i>by</i> <?=htmlentities($post['full_name'])?>
                </div>
                <div class="content"><?= cutLongText($post['content'],500) ?></div>
                <!-- <div class="content"><?=$post['content']?></div> -->
            </li>
        <?php } ?>
        </ul>
    </article>
</div>

<script type="text/javascript" id="clustrmaps" src="//cdn.clustrmaps.com/map_v2.js?u=Q4O9&d=ZMepne-cmB5bWyMCBMhouQwqDnNwiSZcvMUc8B6AOtc"></script>
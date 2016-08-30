<?php $this->title = $this->post['title'] ?>

<!-- display a SINGLE post here -->

<div id="posts">
    <header class="blog-title"></header>
    <ul class="single-article">
        <li class="single-post">
            <article>
                <div class="dot">&nbsp;</div>
                    <!-- Escapes special symbols-code VS html Injection -->
                    <h1 class="title"><?=htmlspecialchars($this->title)?></h1>
                <div class="subtitle"><i>Posted on</i>
                    <?=(new DateTime($this->post['date']))->format('d-M-Y') ?>
                    <i>by</i> <?=htmlentities($this->post['full_name'])?>
                </div>
                <div class="content"><?=$this->post['content']?></div>
            </article>
        </li>
    </ul>
</div>

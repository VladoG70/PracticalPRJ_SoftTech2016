<?php $this->title = 'Delete Post'; ?>

<h1 class="delete-post-title"><?=htmlspecialchars($this->title)?></h1>

<div class="new-post-block">
    <h1 id="delete-title">Are you shure you want to delete this post?</h1>
    <form id="post-form" method="post">
        <ul>
            <li class="single-element-form-titlepost-author">
                <div class="title-form">Title:</div>
                <input type="text" value="<?=
                    htmlspecialchars($this->post['title'])?>" disabled />
            </li>
            <li class="single-element-form-titlepost-author">
                <div class="title-form">Content:</div>
                <textarea class="content-field" rows="10" disabled ><?=
                    htmlspecialchars($this->post['content'])?></textarea>
            </li>
            <li class="single-element-form-titlepost-author">
                <div class="title-form">Date:</div>
                <input type="text" value="<?=
                    htmlspecialchars($this->post['date'])?>" disabled />
            </li>
            <li class="single-element-form-titlepost-author">
                <div class="title-form">Author ID:</div>
                <input type="text" value="<?=
                    htmlspecialchars($this->post['user_id'])?>" disabled />
            </li>
            <li class="single-element-form-titlepost-author">
                <div>
                    <input class="form-submit" type="submit" value="Yes, I want to Delete" /> <br>
                    <a class="form-link" href="<?=APP_ROOT?>/posts">[Cancel]</a>
                </div>
            </li>
        </ul>
    </form>
</div>
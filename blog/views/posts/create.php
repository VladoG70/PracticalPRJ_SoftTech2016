<?php $this->title = 'New Post' ?>

<h1 class="new-post-title"><?=htmlspecialchars($this->title)?></h1>

<div class="new-post-block">
    <h2 id="editor-title">Create new post</h2>
        <form id="post-form" method="post">
            <ul class="title-author">
                <li class="single-element-form-titlepost-author">
                    <h1 class="title-form">Blog Post Title:</h1>
                    <input type="text" placeholder="Enter Post Title" name="post_title" id="title" />
                </li>

                <li class="single-element-form-titlepost-author">
                    <h1 class="title-form">Content:</h1>
                    <textarea class="content-field" rows="10" placeholder="Enter Content" name="post_content" id="content"></textarea>
                    <br>
                    <input class="form-submit" type="submit" value="Create Post" id="create-request-new-post"/><br>
                        <a class="form-link" href="<?=APP_ROOT?>/posts">[Cancel]</a>

                </li>
            </ul>
        </form>
</div>
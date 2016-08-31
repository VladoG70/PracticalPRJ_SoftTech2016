<?php $this->title = 'Edit Existing Post' ?>

<h1 class="edit-post-title"><?=htmlspecialchars($this->title)?></h1>


<div class="new-post-block">
    <h2 id="editor-title">Edit post</h2>
        <form id="post-form" method="post">
            <ul class="title-author">
                <li class="single-element-form-titlepost-author">
                    <div class="title-form">Title:</div>
                    <input id="title" type="text" name="post_title" value="<?=
                        htmlspecialchars($this->post['title'])?>" />
                </li>
                <li class="single-element-form-titlepost-author">
                    <div class="title-form">Content:</div>
                    <textarea class="content-field" rows="10" name="post_content"><?=
                        htmlspecialchars($this->post['content'])?></textarea>
                </li>
                <li class="single-element-form-titlepost-author">
                    <div class="title-form">Date (yyyy-MM-dd hh:mm:ss):</div>
                    <?php if ($_SESSION['user_id'] == 9){ ?>
                        <input type="text" name="post_date" value="<?=
                            htmlspecialchars($this->post['date'])?>" />
                    <?php } else { ?>
                        <div class="disabled-field"> <?php echo htmlspecialchars($this->post['date']) ?> </div>
                            <input type="hidden" name="post_date" value="<?=
                                htmlspecialchars($this->post['date'])?>" />
                    <?php } ?>
                </li>
                <li class="single-element-form-titlepost-author">
                    <div class="title-form">Author ID:</div>

                    <?php if ($_SESSION['user_id'] == 9){ ?>
                        <input type="text" name="user_id" value="<?=
                            htmlspecialchars($this->post['user_id'])?>" />
                    <?php } else { ?>
                        <div class="disabled-field"> <?php echo htmlspecialchars($this->post['user_id'])?> </div>
                        <input type="hidden" name="user_id" value="<?=
                        htmlspecialchars($this->post['user_id'])?>" />
                    <?php } ?>
                </li>
                <li class="single-element-form-titlepost-author">
                    <div class="title-form">Genuine Post's Author Name:</div>
                    <input type="text" name="user_id" value="<?=
                    htmlspecialchars($this->userAuth['full_name'])?>" disabled />
                </li>
                <li class="single-element-form-titlepost-author">
                    <input class="form-submit" type="submit" value="Edit" /> <br>
                        <a class="form-link" href="<?=APP_ROOT?>/posts">[Cancel]</a>
                </li>
            </ul>
        </form>
</div>
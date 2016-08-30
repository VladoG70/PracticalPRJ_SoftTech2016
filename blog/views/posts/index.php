<?php $this->title = 'All Posts'; ?>

<h1 class="post-title"><?=htmlspecialchars($this->title) ?></h1>

<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
        <th>Date</th>
        <th>Author ID</th>
        <th>Action</th>
    </tr>
    <?php foreach ($this->posts as $post) { ?>
        <tr>
            <td align="right"><?= $post['id'] ?></td>
            <td><?= htmlspecialchars($post['title']) ?></td>
            <td><?= cutLongText($post['content']) ?></td>
            <td><?= htmlspecialchars($post['date']) ?></td>
            <td align="center"><?= $post['user_id'] ?></td>
            <td><a href="<?=APP_ROOT?>/posts/edit/<?=$post['id']?>">[Edit]</a>
                <a href="<?=APP_ROOT?>/posts/delete/<?=$post['id']?>">[Delete]</a></td>
        </tr>
    <?php }?>
</table>

<br>
<br>
<a class="form-link" href="<?=APP_ROOT?>/posts/create">[Create NEW Post ...]</a>
<h1>comments</h>
<ul>
<?php foreach ($comments as $comment) { ?>
<li><b><?=$comment->name?>:</b> <?$comment->text?></li>
<?php } ?>
</ul>
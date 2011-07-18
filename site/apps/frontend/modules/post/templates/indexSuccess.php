<?php foreach ($posts as $post): ?>
<div class="post">
  <div class="post-title"><a href="<?php echo url_for('post/show?id='.$post->getId()) ?>"><?php echo $post->getTitle() ?></a></div>
  <div class="post-date"><?php echo $post->getCreatedAt() ?></div>
	<div class="post-body" id="body"><?php echo html_entity_decode($post->getBody()); ?> </div>
</div>
<br/>
<br/>
<?php endforeach; ?>

<br/>
<?php if( !$user->isAuthenticated() ): ?>
<div class="box-login">
	<form id="login" action="<?php echo url_for('user/login') ?>" method="post">
		<label>User</label><input type="text" name="user"/>
		<label>Pass</label><input type="password" name="password"/>
		<input type="submit" value="login" />
	</form>
</div>
<?php else: ?>
<div class="box-login">
	<a href="<?php echo url_for('post/new') ?>" >New post</a>
</div>
<?php endif; ?>


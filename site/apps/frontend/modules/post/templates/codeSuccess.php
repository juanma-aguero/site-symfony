<h1>Code</h1>

<?php foreach ($posts as $post): ?>
<div class="post">
  <div><a href="<?php echo url_for('post/show?id='.$post->getId()) ?>"><?php echo $post->getTitle() ?></a></div>
  <div>5/8/1780</div>
  <div><?php echo $post->getBody() ?></div>
</div>
<br/>
<?php endforeach; ?>

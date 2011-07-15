<script type="text/javascript">
$(document).ready(function(){
	$("#body").html($("#bodyValue").val());
});
</script>

<br/>

<?php foreach ($posts as $post): ?>
<div class="post">
  <div class="post-title"><a href="<?php echo url_for('post/show?id='.$post->getId()) ?>"><?php echo $post->getTitle() ?></a></div>
  <div class="post-date">5/8/1780</div>
  <input id="bodyValue" type="hidden" value="<?php echo esc_raw( $post->getBody() ) ?>"/>
	<div class="post-body" id="body"></div>
</div>
<br/>
<br/>
<?php endforeach; ?>

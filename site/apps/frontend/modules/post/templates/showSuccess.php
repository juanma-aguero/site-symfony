<script type="text/javascript">
$(document).ready(function(){
 $("#body").html($("#bodyValue").val());
});
</script>
<div>
<div class="post-title"><a><?php echo $post->getTitle() ?></a></div>
<br/>
<input id="bodyValue" type="hidden" value="<?php echo esc_raw( $post->getBody() ) ?>"/>
<div class="post-body" id="body"></div>

<br/>
<a href="<?php echo url_for('post/index') ?>">Home</a>
<a href="<?php echo url_for('post/edit?id='.$post->getId()) ?>">Edit</a>

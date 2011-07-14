<td colspan="4">
  <?php echo __('%%id%% - %%category_id%% - %%title%% - %%body%%', array('%%id%%' => link_to($post->getId(), 'post_edit', $post), '%%category_id%%' => $post->getCategoryId(), '%%title%%' => $post->getTitle(), '%%body%%' => $post->getBody()), 'messages') ?>
</td>

<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($post->getId(), 'post_edit', $post) ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_category_id">
  <?php echo $post->getCategoryId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_title">
  <?php echo $post->getTitle() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_body">
  <?php echo $post->getBody() ?>
</td>

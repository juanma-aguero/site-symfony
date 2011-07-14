<h1>Post categorys List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($post_categorys as $post_category): ?>
    <tr>
      <td><a href="<?php echo url_for('postCategory/show?id='.$post_category->getId()) ?>"><?php echo $post_category->getId() ?></a></td>
      <td><?php echo $post_category->getName() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('postCategory/new') ?>">New</a>

<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $post_category->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $post_category->getName() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('postCategory/edit?id='.$post_category->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('postCategory/index') ?>">List</a>

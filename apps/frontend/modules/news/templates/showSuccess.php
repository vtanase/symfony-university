<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $news->getId() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $news->getTitle() ?></td>
    </tr>
    <tr>
      <th>Body:</th>
      <td><?php echo $news->getBody() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $news->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $news->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('news/edit?id='.$news->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('news/index') ?>">List</a>

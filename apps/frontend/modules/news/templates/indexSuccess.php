<h1>Newss List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Body</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($newss as $news): ?>
    <tr>
      <td><a href="<?php echo url_for('news/show?id='.$news->getId()) ?>"><?php echo $news->getId() ?></a></td>
      <td><?php echo $news->getTitle() ?></td>
      <td><?php echo $news->getBody() ?></td>
      <td><?php echo $news->getCreatedAt() ?></td>
      <td><?php echo $news->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('news/new') ?>">New</a>

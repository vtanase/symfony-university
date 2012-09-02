<h1>Teachers List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Degree</th>
      <th>Interests</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($teachers as $teacher): ?>
    <tr>
      <td><a href="<?php echo url_for('teacher/show?id='.$teacher->getId()) ?>"><?php echo $teacher->getId() ?></a></td>
      <td><?php echo $teacher->getName() ?></td>
      <td><?php echo $teacher->getDegree() ?></td>
      <td><?php echo $teacher->getInterests() ?></td>
      <td><?php echo $teacher->getCreatedAt() ?></td>
      <td><?php echo $teacher->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('teacher/new') ?>">New</a>

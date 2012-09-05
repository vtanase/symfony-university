<?php use_stylesheet('teacher.css') ?>

<h1><?php echo $teacher->getName() ?></h1>
<div id="teacher-interests">
  <span class="bold">Interese profesionale: </span> <?php echo $teacher->getInterests()?>
</div>
<div id="teacher-publications">
  <span class="bold">Publications: </span>
  <ul>
    <?php foreach ($teacher->getTeacherPublication() as $publication): ?>
      <li><?php echo $publication->getPublicationYear()?> -> <?php echo $publication->getName() ?> -- <?php echo $publication->getAuthors() ?></li>
    <?php endforeach; ?>
  </ul>
</div>

<!--<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $teacher->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $teacher->getName() ?></td>
    </tr>
    <tr>
      <th>Degree:</th>
      <td><?php echo $teacher->getDegree() ?></td>
    </tr>
    <tr>
      <th>Interests:</th>
      <td><?php echo $teacher->getInterests() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $teacher->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $teacher->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>-->


<a href="<?php echo url_for('teacher/edit?id='.$teacher->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('teacher/index') ?>">List</a>

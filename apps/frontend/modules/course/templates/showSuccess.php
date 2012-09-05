<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $course->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $course->getName() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $course->getDescription() ?></td>
    </tr>
    <tr>
      <th>Teacher:</th>
      <td><?php echo $course->getTeacherId() ?></td>
    </tr>
    <tr>
      <th>Semester:</th>
      <td><?php echo $course->getSemester() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $course->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $course->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('course/edit?id='.$course->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('course/index') ?>">List</a>

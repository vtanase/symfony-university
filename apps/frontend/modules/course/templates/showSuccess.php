<?php use_stylesheet('course.css') ?>

<h1><?php echo $course->getName() ?></h1>

<h3 id = "course-teacher"> Profesor titular: <?php echo $course->getTeacher()->getDegree()." ".$course->getTeacher()->getName() ?></h3>

<div id = "course-description">
   <b>Descriere curs:</b>
   <?php echo $course->getDescription() ?>
</div>


<!--<table>
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

<hr />-->
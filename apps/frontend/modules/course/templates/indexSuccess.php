<?php use_stylesheet('course.css') ?>

<h1>Cursuri</h1>


  <?php foreach ($courses as $course): ?>
    <h2 id = "course-name">
      <a href="<?php echo url_for('course/show?id='.$course->getId()) ?>">
        <?php echo $course->getName() ?>
      </a>
      <span id = "course-teacher"><?php echo $course->getTeacher()->getDegree().$course->getTeacher()->getName()?></span>
    </h2>
  <?php endforeach; ?>
<br/>


<!--<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Description</th>
      <th>Teacher</th>
      <th>Semester</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($courses as $course): ?>
    <tr>
      <td><a href="<?php echo url_for('course/show?id='.$course->getId()) ?>"><?php echo $course->getId() ?></a></td>
      <td><?php echo $course->getName() ?></td>
      <td><?php echo $course->getDescription() ?></td>
      <td><?php echo $course->getTeacherId() ?></td>
      <td><?php echo $course->getSemester() ?></td>
      <td><?php echo $course->getCreatedAt() ?></td>
      <td><?php echo $course->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>-->

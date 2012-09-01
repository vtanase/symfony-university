<?php use_stylesheet('news.css') ?>

<h1>Stiri despre facultate</h1>

<?php foreach ($newss as $news): ?>
  <h2 id = "news-title">
    <a href="<?php echo url_for('news/show?id='.$news->getId()) ?>">
      <?php echo $news->getTitle() ?>
    </a>
  </h2>
  <div id = "news-posted-at">posted on: <?php echo $news->getCreatedAt()?></div>
  <div id = "news-body"><?php echo $news->getBody()?></div>
<?php endforeach; ?>

<!--<table>
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
</table>-->

  <a href="<?php echo url_for('news/new') ?>">New</a>

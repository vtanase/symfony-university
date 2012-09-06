<?php use_stylesheet('news.css')?>


<h1><?php echo $news->getTitle()?></h1>
<div id = "news-posted-at">
  posted at: <?php echo $news->getCreatedAt()?>
</div>
<div id = "spacer-20"/>
<div id = "news-body">
  <?php echo $news->getBody() ?>
</div>


<!--<table>
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
</table>-->

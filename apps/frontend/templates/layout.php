<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <div id = "right">&nbsp;</div>
    <div id = "left">&nbsp;</div>
    <div id = "content">
      <div id = "header">
        <br/>
        <span class = "title">Universitatea Transilvania</span><br/>
        <span class = "subtitle">Facultatea de Matematica - Informatica</span>
      </div>
      <div id = "sidebar">
        <ul>
          <li><a href = "<?php echo url_for('homepage')?>">Stiri</a></li>
          <li><a href = "<?php echo url_for('teacher') ?>">Profesori</a></li>
          <li><a href = "#">Oferta cursuri</a></li>
          <li><a href = "#">Contact</a></li>
        </ul>
      </div>
      <div id = "main-content">
        <?php echo $sf_content ?>
      </div>
    </div>
  </body>
</html>

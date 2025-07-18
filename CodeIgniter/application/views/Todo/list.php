<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <title>list</title>
</head>
<body>
  <div id="main">
    <header id="header" data-role="header" data-position="fixed">
    </header>
    <!-- Header End -->

    <article id="board_area">
      <header>
        <h1>board list</h1>
      </header>

      <table cellspacing="0" cellpadding="0" class="table table-striped">
        <thead>
          <tr>
            <th scope="col">NO&nbsp;&nbsp;</th>
            <th scope="col">CONTENT&nbsp;&nbsp;</th>
            <th scope="col">CREATED_AT&nbsp;&nbsp;</th>
            <th scope="col">UPDATED_AT&nbsp;&nbsp;</th>
          </tr>
        </thead>
        <tbody>


    <?php 
        foreach($lists as $list)
        {
    ?>
 <tr>
        <td><?php echo $list -> id ?></td>
        <td><a href='/todo/get/<?php echo $list -> id; ?>'><?php echo $list -> content; ?></a></td>
        <td><?php echo $list -> created_at; ?></td>
        <td><?php echo $list -> updated_at; ?></td>
        </tr>
        <?php } ?>
        
        </tbody>
        <tfoot>
        <tr>
        <th colspan="4">
        <a href="/todo/list" class = "btn btnprimary">LIST</a> 
        <a href="/todo/write" class="btn btn-success">WRITE</a></th>
        </tr>
        </tfoot>
    </table>
    
    </body>
</html>
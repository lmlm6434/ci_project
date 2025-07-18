<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="viewport" content="width=device-width,initial—scale=1, user-scalable=no" />
<title>GET</title>

</head>
<body>
<div id="main">
<header id="header" data-role="header" data-position="fixed">
<header>
<h1>GET BOARD NUMBER : <?php echo $this->uri->segment(3) ?></h1>
</header>
<table cellspacing="0" cellpadding="0" class="table table-striped">
<thead>

 <?php foreach($gets as $get) { ?>    
<tr>
<th scope="cor">NO : <?php echo $get-> id;?></th>
</tr>
<tr>
<th scope="col">CREATED_AT : <?php echo $get->created_at;?></th>
</tr>
<tr>
<th scope="col">UPDATED_AT : <?php echo $get->updated_at;?></th>
</tr>
<tr>
<th scope="col">CONTENT : <?php echo $get->content;?></th>
</tr>
</tr>
</thead>
<tbody>
<?php } ?>
</tbody>
<tfoot>
<tr>
<th colspan="4">
    <a href="/todo/list" class = "btn btnprimary">LIST</a> 
    <a href="/todo/delete/<?php echo $this->uri->segment(3);?>" class="btn btn-danger">DELETE</a>
    <a href="/todo/write" class="btn btn-success">WRITE</a></th>
</tr>
</tfoot>
</table>
</article>
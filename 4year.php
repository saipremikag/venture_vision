<?php include 'filelogic2.php'; ?>

<!doctype html>
<html>
  <head>
    <title>4TH YEAR PROJECTS</title>
    <link rel="stylesheet" href="styl.css"/>
</head>
<body>
  <div class="container">
    <div class="row">
      <form action="4year.php" method="post" enctype="multipart/form-data">
      <h3>Upload Files</h3>  
      <input type="file" name="myfile"><br>
        <button type="submit" name="save">Upload</button>
</form>
</div>
<div class="row">
  <table>
    <thead>
      <th>SNO</th>
      <th>FileName</th>
      <th>Size (in mb)</th>
      <th>Action</th>
</thead>
<tbody>
  <?php foreach($files as $file): ?>
    <tr>
       <td><?php echo $file['id'];?></td>
       <td><?php echo $file['name'];?></td>
       <td><?php echo $file['size']/1000 . "KB";?></td>
       <td>
        <a href="4year.php?file_id=<?php echo
        $file['id']?>">Download</a>
       </td>
  </tr>
  <?php endforeach ;?>
  </tbody>
  </table>
</div>
</body>
</html>
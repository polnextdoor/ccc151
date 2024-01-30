<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <title>PHP Mysql OOP CRUD (Create, Read, Update and Delete)</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center">PHP Mysql OOP CRUD (Create, Read, Update and Delete)</h1>
          <hr style="height: 1px;color: black;background-color: black;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mx-auto">
          <?php
              include 'model.php';
              $model = new Model();
              $id = $_REQUEST['id'];
              $row = $model->fetch_single($id);
              if(!empty($row)){
          ?>
          <div class="card">
            <div class="card-header">
              Single Record
            </div>
            <div class="card-body">
              <p>Name = <?php echo $row['name']; ?></p>
              <p>Email = <?php echo $row['email']; ?></p>
              <p>Mobile No. = <?php echo $row['mobile']; ?></p>
              <p>Address = <?php echo $row['address']; ?></p>
            </div>
          </div>
          <?php
            }else{
            echo "no data";
          }
          ?>
        </div>
      </div>
    </div>
</body>
</html>
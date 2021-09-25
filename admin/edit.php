<?php
require 'db.php';
$ID = $_GET['ID'];
$sql = 'SELECT * FROM clients WHERE ID=:ID';
$statement = $connection->prepare($sql);
$statement->execute([':ID' => $ID ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['first'])  && isset($_POST['last']) && isset($_POST['email']) && isset($_POST['country']) && ($_POST['code']) && ($_POST['phone'])) {
  $first = $_POST['first'];
  $last = $_POST['last'];
  $email = $_POST['email'];
  $country = $_POST['country'];
   $code = $_POST['code'];
    $phone = $_POST['phone'];
  $sql = 'UPDATE clients SET first=:first, last=:last, email=:email, country=:country, code=:code, phone=:phone WHERE ID=:ID';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':first' => $first, ':last' => $last, ':email' => $email, ':country' => $country, ':code' => $code, ':phone' => $phone,  ':ID' => $ID])) {
    header("Location: main.php");
  }

else {echo "error occured";
}

}


 ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>

    
input[type=text], select {
  text-align:centre;
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  margin-left:80px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 70%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

  </style>
</head>
<body>

  <div class="card mt-5">
    <div class="card-header">
      <h2>Update the members who have signed ap </h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="first">first</label>
          <input value="<?= $person->first; ?>" type="text" name="first" ID="first" class="form-control">
        </div>
        <div class="form-group">
          <label for="last">last</label>
          <input type="text" value="<?= $person->last; ?>" name="l" ID="last" class="form-control">
        </div>
        <div class="form-group">
          <label for="last">email</label>
          <input type="text" value="<?= $person->email; ?>" name="email" ID="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="last">country</label>
          <input type="text" value="<?= $person->country; ?>" name="country" ID="country" class="form-control">
        </div>

<div class="form-group">
          <label for="last">country code</label>
          <input type="text" value="<?= $person->code; ?>" name="code" ID="code" class="form-control">
        </div>

        <div class="form-group">
          <label for="last">phone</label>
          <input type="text" value="<?= $person->phone; ?>" name="phone" ID="phone" class="form-control">
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-info"></button>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>

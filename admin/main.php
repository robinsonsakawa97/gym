
<!DOCTYPE html>
<html>
<head>
  <title></title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
  </head>
<body style="background-color:white">


   <?php
require 'db.php';
$sql = 'SELECT * FROM clients';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>

<div class="container">



  <div class="card mt-5">
    <div class="card-header">
      <h2 style="text-align: center">Client signup report</h2>
    </div>
    <div class="card-body" >
      <table id="customers" >
        <tr>
          <th>ID</th>
          <th>first</th>
          <th>last</th>
          <th>email</th>
          <th>country</th>
          <th>code</th>
          <th>phone</th>
          <th>Action</th>
          <th>Delete</th>
        </tr>
        <?php foreach($people as $person): ?>
          <tr>
             <td><?= $person->ID; ?></td>
             <td><?= $person->first; ?></td>
             <td><?= $person->last; ?></td>
             <td><?= $person->email; ?></td>
             <td><?= $person->country; ?></td>
             <td><?= $person->code; ?></td>
             <td><?= $person->phone; ?></td>
            <td style="">
        <!--      <a href="edit.php?ID=<?= $person->ID ?>" class="btn">Edit</a>-->
                               </td>
           <td style="background-color: red; color: white;"><a href="delete.php?ID=<?= $person->ID ?>" class="btn">Delete</a></td>
                    </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
</div>
  </div>
</div> 
     
</div> 
</div>
</body>
</html>


















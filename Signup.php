<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="robin.css">
     <link rel="stylesheet" type="text/css" href="but.css">
</head>
<style>
  
</style>
<body>

<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="signup.php">Signup</a></li>
  <li><a href="gyme.php">Gyme</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="images.php">Images</a>
<li style="float:right"> <a class="active" href="Admin/index.php">Admin</a></li>
</ul>


<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "gimenes");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
 if($_SERVER["REQUEST_METHOD"] == "POST"){
// Prepare an insert statement
$sql = "INSERT INTO clients(first, last, email, country, code, phone) VALUES (?, ?, ?, ?, ?, ?)";
 
if($stmt = mysqli_prepare($link, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "ssssss", $first, $last, $email, $country, $code, $phone);
    
    // Set parameters
    $first= $_REQUEST['first'];
    $last= $_REQUEST['last'];
    $email = $_REQUEST['email'];
    $country = $_REQUEST['country'];
    $code = $_REQUEST['code'];
    $phone = $_REQUEST['phone'];
    
    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not execute query: $sql. " . mysqli_error($link);
    }
} else{
    echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
}
 
// Close statement
mysqli_stmt_close($stmt);
 
// Close connection
mysqli_close($link);
}
?>
<div class="container">
<h1 style="margin-left: 400px;">Welcome to the Signup page</h1>
 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <p>
        <label for="firstName">First Name:</label><br>
        <input type="text" name="first" id="firstName">
    </p>
    <p>
        <label for="lastName">Last Name:</label><br>
        <input type="text" name="last" id="lastName">
    </p>
    <p>
        <label for="emailAddress">Email Address:</label><br>
        <input type="text" name="email" id="emailAddress">
    </p>
     <p>
        <label for="Country">Country:</label><br>
        <input type="text" name="country" id="country">
    </p>
     <p>
        <label for="Zip code">Zip code:</label><br>
        <input type="text" name="code" id="code">
    </p>
     <p>
        <label for="Phone">Phone:</label><br>
        <input type="text" name="phone" id="phone">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>
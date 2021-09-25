<head>
<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
 <link rel="stylesheet" type="text/css" href="robin.css">
     <link rel="stylesheet" type="text/css" href="but.css">
</head>
<body>

<ul>
 <li><a href="index.php">Home</a></li>
  <li><a href="signup.php">Signup</a></li>
  <li><a href="gyme.php">Gyme</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="images.php">Images</a>
<li style="float:right"> <a class="active" href="admin/index.php">Admin</a></li>
</ul>
<h2>Images Side by Side</h2>


<div class="row">
  <div class="column">
    <img src="images/im.jpg" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="images/down.jpg" alt="Forest" style="width:100%">
  </div>
  <div class="column">
    <img src="images/zak.jpg" alt="Mountains" style="width:100%">
  </div>
</div>


<div class="row">
  <div class="column">
    <img src="images/im.jpg" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="images/tt.png" alt="Forest" style="width:100%">
  </div>
  <div class="column">
    <img src="images/vv.png" alt="Mountains" style="width:100%">
  </div>
</div>
</body>
</html>

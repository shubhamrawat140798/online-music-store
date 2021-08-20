
<?php
session_start();

include ("./dbconfig/config.php");
include ("./dbconfig/functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>My website</title>
	<style>
#create{
 	display: flex;
	justify-content: center;	
	text-decoration: none;
	color: blue;
}
#login{
	text-decoration: none;
	color: white;
}
body{
	background-image: url("img/login.jpg");
	background-color: #c8f745;
	background-repeat: no-repeat;
	background-size:cover;
}
h1{
	text-align: center;
}
input{
	margin-left: 55%;
    margin-top: 7px;
    padding-top: 7px;
    padding-left: 9px;
    padding-right: 26px;
    padding-bottom: 6px;
    border-radius: 25px;
}

input:focus{
	outline: none;
}
label{
	display: flex;
	justify-content: center;	
}

.btn{
	border-radius: 25px;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-right: 20px;
    padding-left: 20px;
    background-color: lightgreen;
}

.btn:focus{
	outline: none;
}

#pass{
	margin-top: 5%;
}
.topnav {
  background-color: #333;
  overflow: hidden;
}

.container{
	margin-left: 65px;
    	margin-right: 20px;
    	margin-top: 50px;
	color: white;
	padding: 5px;
	background: black;
 	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  	transition: 0.3s;
	opacity: 0.8;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
.header {
  
  text-align: center;
}
.about{
	display: inline-block;
	justify-content: center;
	text-align: center;
	opacity:0.9;
	background-color: #f1f1f1;
	border: 3px solid #f1f1f1;
	width: 30%;
	margin: 10% 0% 5% 35%;
	
}
#name {
	float: right;

}

</style>
</head>
<body>
<div class="topnav">
  	<a class="active" href="index.php">Home</a>
	<a href="logout.php">Logout</a> 
    <a id="name" href="#"> Hello, <?php echo $user_data['user_name']; ?></a>
	<form action="index.php" method="post">
		<input type="text" placeholder="Search for song name or artists name" name="search">
		<button class="btn" type="button">Search</button>
  	</form>
</div>

<?php
if(isset($_POST['search'])){
@$search=$_POST['search'];
$res=mysqli_query($con,"select * from music_details where name like '%$search%' OR text like '%$search%'");
if(mysqli_num_rows($res)>0)
  {
  echo "<div class='music'>"; 
   while($row=mysqli_fetch_array($res))
   {
   echo "<div class='container'>";
   echo "<h2>"; echo $row["name"];   echo "</h2>";
   echo "<p>By - "; echo $row["text"]; echo "</p>";
   echo "<audio controls='preload'><source src="; echo $row["link"]; echo " ></audio>";
   echo "<p>";?>
   <?php echo "</p>";
   echo "</div>";
   }
echo "</div>";
    }
else {
  echo "<script>alert('Not Found')</script>";
    }
  }
  ?>
	
</body>
</html>
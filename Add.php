<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<body translate="no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
<div class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="navbar-header" id="div1">
                        <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                        <a href="#" class="navbar-brand">Student Management System</a>
                    </div>

                    <div class="navbar-collapse collapse" id="mobile_menu">
                        <ul class="nav navbar-nav">
                            
                            <li><a href="index.php" class="dropdown-toggle">Home</a>
                               
                            </li>
                           
                           
                           
                        </ul>
                        

                       
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<div class="container">
<center>
	<?php
    $con=mysqli_connect("fdb1034.awardspace.net","4428573_stud","student123(*)","4428573_stud");
  if (isset($_POST['search'])) {

    $searchinput=$_POST['fname'];
    $search=mysqli_query($con,"SELECT * FROM stu where fname LIKE '%$searchinput%'");
    if ($search==true) {
        if ($search->num_rows > 0) {
       while($row=mysqli_fetch_assoc($search)){
?>

<form method="post"  action="addstudent.php">
<div class="searchcontainer"><br>

	<h4>Edit Student info</h4>
	<p>search results!</p>
    <input type="text" class="s" value="<?php echo $row['fname']; ?>" name="fname">
     <input type="text" class="s" value="<?php echo $row['lname']; ?>" name="lname">
    <input type="text" class="s" value="<?php echo $row['mname']; ?>" name="mname">
  <input type="text" class="s" value="<?php echo $row['age']; ?>" name="age">
    <input type="text" class="s" value="<?php echo $row['course']; ?>" name="course">
    <input type="text" class="s" value="<?php echo $row['section']; ?>" name="section">
    <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
   <br>
    <button name="update">Save changes</button>
    <button name="drop" style="color: red;
    background-color:white;border: red solid 1px">Drop</button>
</div>
</form>
<?php
}


    }}
  }
        ?>

</center>







 <div class="div1"><br>
 	<center>
    <h2>Add Students</h2>
    <form action="addstudent.php" method="post">
    <input class="input2" type="text" placeholder="First Name" name="fname">
    <input  class="input2" type="text"  placeholder="Last Name"  name="lname">
    <input  class="input2" type="text"  placeholder="Middle Name"  name="mname">
    <input  class="input2" type="text"  placeholder="Age" name="age">
    <input  class="input2" type="text"  placeholder="course"  name="course">
    <input  class="input2" type="text"  placeholder="Section"  name="section">
    <input  class="input2" type="hidden" value="1"  name="num"><br><br>
    <input  class="input3" type="submit" name="add" style="background-color: green;border:none;color: white;width: 200px;height: 30px;">
</form></center>
</div>    

</div>


  





</body>
</html>


<style type="text/css">

	.container{
		display: flex;
width: 100%;
	}
	.s{
    width: 50%;
    height: 30px;
    margin-bottom: 5px;
}
	.searchcontainer{
    width: 50%;
    margin-bottom: 5px;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
    position: relative;
height: 350px;
}
	.div1{
		width: 50%;
		height: 500px;
		box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
	}
	.input2{
		width: 80%;
		height: 35px;
		margin-bottom: 20px;
	}
</style>
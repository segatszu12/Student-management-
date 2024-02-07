<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo '<script>window.location.href="index1.php";</script>';# code...
}


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
 <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">
<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
<link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" />
<body>



</head>

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
                            <li class="active"><a href="#div1">Home</a></li>
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                   
                                <a href="about.html"><p  style="text-align: center;">About us</p></a>
                                </ul>
                            </li>
                           
                           
                           
                            <li><a href="#div4">Contact Us</a></li>
                        </ul>
                        

                        <ul class="nav navbar-nav navbar-right">
                            <li><a>

                            <form method="post">
                                  <input type="submit" value="logout" name="logout" style="height: 30px;">
                              </form>
                            </a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  


<?php
if (isset($_POST['logout'])) {
   session_destroy();

   echo '<script>window.location.href="index1.php";</script>';
}



?>

<form action="Add.php">
    <button style="left: 85px;position: relative;width: 300px;">Add new student</button>
</form>


<center><h1 style="font-family: Courier, Times, serif">Welcome to our Student<br>Management System</h1></center>
<br><br>
<center>
    
<form method="post" action="Add.php">
    <input required="required" class="search" placeholder=" Search student" type="" name="fname"  style="color: black">
    <button name="search">Search</button>
</form>

</center><br><br>
<h3 style="text-indent: 80px;" >Student List</h3>
<center>

<br>




        
      
   

<table border="1">
<th>First Name
<th>Last Name
<th>Middle Name
<th>Age
<th>Course
<th>section



<?php
$con=mysqli_connect("fdb1034.awardspace.net","4428573_stud","student123(*)","4428573_stud");
$query=mysqli_query($con,"SELECT * FROM stu");
while($row=mysqli_fetch_assoc($query)){


?>



<div class="list">
    <form action="addstudent.php" method="post">
     

        <tr>
    <td><?php echo $row['fname']; ?>
	<td><?php echo $row['lname']; ?>
	<td><?php echo $row['mname']; ?>
	<td><?php echo $row['age']; ?>
	<td><?php echo $row['course']; ?>
	<td><?php echo $row['section']; ?>
	<input type="hidden" value="<?php echo $row['id']; ?>" name="">
	<input class="input1" type="hidden" value="1"  name="num">
	
          </tr>
	</form>
</div> 



  <?php
}

  ?>

</table>
<br><br><br>

</body>
</html>

<style type="text/css">



button:hover{
transform: scale(1.1);


    }
    button{
transition: 0.1s ease;
border: none;
        width: 100px;
        height: 40px;
        background-color: blue;
        color: white;
    }

    .search{
        border-radius: 10px;
        font-size: 15px;
     width: 300px;
        height: 40px;
        background-color: whitesmoke;
        color: white;  
        border:none;  
    }
    .list{
        width: 50%;
    }
th{
    text-align: center;
    color: white;
    background-color: blue;
}
td{
    text-align: center;
}
.input1{
    text-align: center;
}
.div1{
	  box-shadow: 0 4px 4px 4px rgba(0,0,0,0.3);
	  height: 200px;
 width: 400px;
}
table{
  width: 90%;
height: 100px;
    }


.div1{
    width: 50%;
    height: 450px;
    border-radius: 10px;
}
.input2{
    width: 70%;
    margin-bottom: 20px;
    height: 32px;
}
.input3{
    transition: 0.1s ease;
}
.input3:hover{
    transform: scale(1.1);
}
</style>
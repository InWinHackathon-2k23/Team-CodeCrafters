<?php
$host='localhost';
$user='root';
$password='';
$db_name='SVU';
$conn=mysqli_connect($host,$user,$password,$db_name);
if(!$conn)
{
    echo "could not connect with the database";
}
$sql = "SELECT * FROM student WHERE Roll = '$val'";
$res = mysqli_query($conn, $sql);
$user=mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html>
<head>
  
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Project</title>

<style> 
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid blue;
}

#myform
{
  font-weight: 150 ;
}

hr{
      padding: 12px solid;
    }
</style>
</head>
<body id="myform">
     <!-- <center><h2>GOVERNMENT OF <img src="SVLOGO.jpg" height="100" width="100"> ANDHRA PRADESH <BR> DEPARTMENT OF TECHNICAL EDUCATION </h2></center> -->
     <center> <h1> SVU COLLEGE OF ENGINEERING</h1> </center>
      <hr> </hr>
      <hr>  </hr>
     
     <td>
     <center> <h1> <u> Student details Form </u> </h1> </center>
     </td>
     <tr>

    </tr>
	<form>
	<table align="Center">
    <tr>
      <td><label for="student_name">Name:</label></td>
      <td><?php  echo $user["Name"] ?></td>
    </tr>
    <tr>
      <td><label for="rollno">Roll number:</label></td>
      <td><?php  echo $user["Roll"] ?></td>
    <tr>
        <td><label for="Year">Year :</label></td>
        <td><?php  echo $user["Year"] ?></td>
    </tr>
    </tr>
    <tr>
      <td><label for="Sem">sem :</label></td>
      <td><?php  echo $user["Sem"] ?></td>
    </tr>
    <tr>
      <td><label for="Branch">Branch:</label></td>
      <td><?php  echo $user["Branch"] ?></td>
    </tr>
    <tr>
      <td><label for="fee">Fee:</label></td>
      <td><?php  echo $user["Fee"] ?></td>
    </tr>
    <tr>
      <td><label for="Scholarsip">Scholarship</label></td>
      <td><?php  echo $user["Scholarship"] ?></td>
    </tr>
    <tr>
      <td><label for="Hostel">Hostel:</label></td>
      <td><?php  echo $user["Hostel"] ?></td>
    </tr>
    <tr>
      <td><label for="Attendance">Attendance :</label></td>
      <td><?php  echo $user["Attendence"] ?></td>
    </tr>
    <tr>
      <td><label for="Library">Library:</label></td>
      <td><?php  echo $user["Library"] ?></td>
    </tr>
    <tr>
      <td><label for="roomno">Roomno:</label></td>
      <td><?php  echo $user["Roomno"] ?></td>
    </tr>
    <tr>
      <td><label for="Messbill">Messbill:</label></td>
      <td><?php  echo $user["Messbill"] ?></td>
    </tr>
    
   
    
  </table>
  
	</form>
       
       
</body>
</html>
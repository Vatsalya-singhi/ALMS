
<?php
session_start();
$dept = $_SESSION['department'];
//connect to db		
define("DB_HOST","localhost");
define("DB_NAME","$dept");
define("DB_USERNAME","root");
define("DB_PASSWORD","");
$conn=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME) or die("DB not found!!");
echo '
 <table cellspacing=2 cellpadding=5  id="dataTable" class="table table-hover">
   
	<tr>
<th></th>	    
        <th>Department</th>
		<th>Course ID</th>
        <th>Course name</th>
        <th>Course Type</th>
		<th><input type="submit" name="delete" value="Delete"  class="btn btn-danger" ></th>
		<th><input type="submit" name="enroll" value="Enroll" class="btn btn-info" ></th>
      </tr>';
	
$select='';
//$check="SELECT courseid from overallfaculty where role='coordinator'";
$check="SELECT table_name FROM information_schema.tables WHERE table_schema='public'";

$result =mysqli_query($conn,$check);

$query = sprintf("SELECT courseid,coursename,coursetype,department FROM course WHERE courseid NOT IN ($check)");
$result =mysqli_query($conn,$query); 
if($result){
//$select.='<table  class="table table-hover">';
while($row=mysqli_fetch_array($result)){
$select.='<tr id="row1">';
$select.='<td><input type="checkbox" onclick="selectRow(this)"  name="checkbox[]" value="'.$row[3].'"></td>';
$select.='<td id="name_row1"><input type="hidden" value="'.$row[3].'" name="dept[]">'.$row[3].'</td><td><input type="hidden" value="'.$row[0].'" name="courseid[]">'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td>';
$select.='<td><select class="form-control" name="staffid[]">';
$query = sprintf("SELECT firstname,lastname,staffid FROM overallfaculty where role='faculty'");
$result1 =mysqli_query($conn,$query); 

while($rows=mysqli_fetch_array($result1)){
$select.='<option value="'.$rows[2].'">'.$rows[2].'-'.$rows[0].' '.$rows[1].'</option>';
}
$select.='</select></td>';

$select.='</tr>';
}
$select.='</table>';

echo $select;

}else{
echo 'try again';
}
?>

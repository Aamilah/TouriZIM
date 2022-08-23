<?php

include('data.php'); 
if (isset($_GET['name']))    
{    
    $sql .="SELECT * FROM `destination` WHERE name LIKE '%".$searchTerm."%'";  
}
$searchTerm = $_GET['name'];
$sql = "SELECT * FROM `destination` WHERE name LIKE '%".$searchTerm."%'"; 
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
  $tutorialData = array(); 
  while($row = $result->fetch_assoc()) {

   $data['id']    = $row['id']; 
   $data['value'] = $row['name'];
   array_push($tutorialData, $data);
} 
}
 echo json_encode($tutorialData);
?>
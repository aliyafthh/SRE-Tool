<?php   
     $connection = mysqli_connect("localhost","root","");
     $db = mysqli_select_db($connection, 'sretool');

if(isset($_POST['delete']))
{
    $id = $_POST['id'];
    $query = "DELETE FROM rvp1 WHERE id = '$id' ";
    $query_run = mysqli_query($connection,$query);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
  }
    if($query_run)
    {
        echo '<script> alert("Data deleted"); </script>';
        header("location:p1t.php");
    }
    else
    {
        echo '<script> alert("Data not deleted"); </script>';
    }
}

?>

<!-- ############################################################################# -->

<?php
if(isset($_POST['insert']))
{
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection, 'sretool');
    $name = $_POST['name'];
    $pos = $_POST['position'];
   
    $query = "INSERT INTO rvp1(name,position) VALUES ('".$_POST["name"]."','".$_POST["position"]."')";
    
    $query_run = mysqli_query($connection, $query);

    if(!$query_run)
    {
      echo '<script> alert("Data Not Saved"); </script>';
    }
    if($name !=''&& $pos !='')
{
//  To redirect form on a particular page
header("Location:p1t.php");
}
else{
?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
  }
}
?>

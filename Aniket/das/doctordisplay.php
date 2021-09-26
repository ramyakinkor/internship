<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin home</title>
    
    <?php include 'links.php'; ?>
<style>
    /* table-------------------------------- */
h1{
    font-size: 18px;
    color: #000;
    text-align: center;
    margin-top: 20px;
    margin-bottom: 20px;
}
table{
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
    border-radius: 10px;
    margin: auto;
}
th,td{
    border: 1px solid #f2f2f2;
    padding: 8px 30px;
    text-align: center;
    color: grey;

}
th{
    text-transform: uppercase;
    font-weight: 500;
}
td{font: size 13px;}

/* table-------------------------------- */
</style>
    
</head>
<body>
    
    <div class="main-div">
        <h1>Doctors information table</h1>
        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Speciality</th>
                            <th>Schedule Day 1</th>
                            <th>Schedule Day 2</th>
                            <th>Schedule Day 3</th>
                            <th colspan="2">operation</th>
                        </tr>
                    </thead>
                    <tbody>
<?php
//connection part//
$host="localhost";
$user="root";
$password="";
$db="Doctors appointment system database";

//session start
session_start();

//datalink connection variable
$data=mysqli_connect($host,$user,$password,$db);

//show errot if database not connected properly
if($data===false){
    die("Error connecting");
}

$sql="select * from doctors";
$result=mysqli_query($data,$sql);



while($view = mysqli_fetch_array($result)){

?>
                        <tr>
                            <td><?php echo $view['id']; ?></td>
                            <td><?php echo $view['Name']; ?></td>
                            <td><?php echo $view['Specialty']; ?></td>
                            <td><?php echo $view['Day 1']; ?></td>
                            <td><?php echo $view['Day 2']; ?></td>
                            <td><?php echo $view['Day 3']; ?></td>
                            <td><a href="updatedoctor.php?id=<?php echo $view['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="Update!"><i class="fa fa-edit"aria-hidden="true"></i></a></td>

                            <td><a href="deletedoctor.php?id=<?php echo $view['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="Delete!"><i class="fa fa-trash"aria-hidden="true"></i></a></td>
                        </tr>
<?php
}
?>
                    </tbody>

                </table>

            </div>
        </div>
    </div>

    <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

</body>
</html>
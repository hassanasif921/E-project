<?php
include 'header.php';
include 'admin/connection.php';
$query="select * from doctor";
$result=mysqli_query($conn,$query);
?>
<div class="row">
<?php while($row=mysqli_fetch_array($result))
        {
            ?>
<div class="col-sm-3">
<div class="card card-block">
  <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22318%22%20height%3D%22180%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3C!--%0ASource%20URL%3A%20holder.js%2F100px180%2F%0ACreated%20with%20Holder.js%202.8.2.%0ALearn%20more%20at%20http%3A%2F%2Fholderjs.com%0A(c)%202012-2015%20Ivan%20Malopinsky%20-%20http%3A%2F%2Fimsky.co%0A--%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%3C!%5BCDATA%5B%23holder_153cdb63a13%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%5D%5D%3E%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_153cdb63a13%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%2F%3E%3Cg%3E%3Ctext%20x%3D%22118.0859375%22%20y%3D%2297.35%22%3E318x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
  <div class="card-block">
    <h5 class="card-title" >Name : <?php echo $row['d_name']?></h5>
    <p class="card-text" >City : <?php 
    
    $query1="select * from city where C_id =".$row['city'];
    $result1=mysqli_query($conn,$query1);
    $row1=mysqli_fetch_row($result1);
  echo $row1[1];
    ?>
    <br>
    Education : <?php echo $row['education']?>
    <br>
    Specialist :
    <?php 
    
    $query1="select * from specialist where id =".$row['specialization'];
    $result1=mysqli_query($conn,$query1);
    $row1=mysqli_fetch_row($result1);
  echo $row1[1];
    ?>
    <br>
    </p>
    <?php 
    if(isset($_SESSION['pat']))
    {

    ?>
    <a href='appoinment.php?id=<?php echo $row ['d_id'] ?>' class="btn btn-primary">Book Appoinment</a>
    <?php
  }
    ?>
  </div>
  </div>
</div>
<?php
        }
             
         ?>   
          </div>



  
 
  
  
  
<?php
include 'footer.php';

?>
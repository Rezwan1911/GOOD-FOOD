<?php
include('partial/menu.php');
?>
        <!-- content start -->
        <div class="menu_content">
        <div class="wrapper">
                <h1>DASHBOARD</h1>

                <?php
          if(isset($_SESSION['login'])){
            echo $_SESSION['login'];
            unset($_SESSION['login']);
          }


?>
            <div class="col-4 text-center">
               <?php 
                    $sql = "SELECT * FROM users";
                    $res=mysqli_query($conn,$sql);
                    $count = mysqli_num_rows($res);
               ?>
                   <h1><?php echo $count;?></h1>
                   <br>
                   Total Users
               </div>
               <div class="col-4 text-center">
               <?php 
                    $sql = "SELECT * FROM tbl_category";
                    $res=mysqli_query($conn,$sql);
                    $count = mysqli_num_rows($res);
               ?>
                   <h1><?php echo $count;?></h1>
                   <br>
                   category
               </div>
               <div class="col-4 text-center">

               <?php 
                    $sql2 = "SELECT * FROM tbl_food";
                    $res2=mysqli_query($conn,$sql2);
                    $count2 = mysqli_num_rows($res2);
               ?>

                   <h1><?php echo $count2;?></h1>
                   <br>
                   Foods
               </div>
               <div class="col-4 text-center">
               
               <?php 
                    $sql3 = "SELECT * FROM tbl_order ";
                    $res3=mysqli_query($conn,$sql3);
                    $count3 = mysqli_num_rows($res3);
               ?>
                   <h1><?php echo $count3;?></h1>
                   <br>
                 Total Orders
               </div>
               <div class="col-4 text-center">
               <?php 
                    $sql4 = "SELECT SUM(local) AS Total FROM tbl_order WHERE status ='Delivered'";
                    $res4=mysqli_query($conn,$sql4);
                    $count4 = mysqli_num_rows($res4);
                    $row4 = mysqli_fetch_assoc($res4);

                    $total_revenue = $row4['Total'];
               ?>
                   <h1>TK <?php echo $total_revenue;?></h1>
                   <br>
                   Reveneu Generated
               </div>
               
               <div class="clrfix"></div>
            </div>
            </div>
        <!-- content end -->
       <?php
       include('partial/footer.php')
       ?>
       
    </body>
</html>

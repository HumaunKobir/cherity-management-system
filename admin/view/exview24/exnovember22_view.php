<?php
  $conn=mysqli_connect("localhost","kobir","#n2eLJn%TFr-zhv","charity");
?>


    <div class="container nx-4 py-4 shadow text-center">
   
<?php
    $sqli="SELECT * FROM expension_tb Where yearss='2024' AND months='November'";
    $result=mysqli_query($conn, $sqli);
    $query ="SELECT SUM(money_ex) AS total_ex FROM expension_tb Where yearss='2024' AND months='November'";
    $query_result = mysqli_query($conn,$query);
    
  
?>
 
 <div class="card-body">
 <h3>নভেম্বার ২০২৪ ব্যায় সমূহ</h3>
 <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <th>নং</th>
        <th>তারিখ</th>
        <th>সময়</th>
        <th>নাম/বিবরণ</th>
        <th>টাকা</th>
        
    </thead>
      
 <?php while($row=mysqli_fetch_assoc($result)):?>
   
    <tr>
        <td><?php echo $row["id"]?></td>
        <td><?php echo $row["date_ex"]?></td>
        <td><?php echo $row["time_ex"]?></td>
        <td><?php echo $row["name_ex"]?></td>
        <td><?php echo $row["money_ex"]?></td>
    </tr>
   
<?php endwhile;?>

<tfoot>
    <?php while($roq = mysqli_fetch_assoc($query_result)):?>
    <tr>
        <th>নং</th>
        <th>আয়ের তারিখ</th>
        <th>সময়</th>
        <th>মোট আয়</th>
        <th><?php echo $roq['total_ex'] ?></th>
      
                                            
    </tr>
     <?php endwhile;?>
</tfoot>
</table>
</div>
</div>



<?php
  $conn=mysqli_connect("localhost","kobir","#n2eLJn%TFr-zhv","charity");
?>




    
<?php
    $sqli="SELECT * FROM found_tb Where years='2022' AND month_n='July'";
    $result=mysqli_query($conn, $sqli);
    $query ="SELECT SUM(money_d) AS total_add FROM found_tb Where years='2022' AND month_n='July'";
    $query_result = mysqli_query($conn,$query);
  
?>
 
 <div class="card-body">
 <h3>জুলাই ২০২২ আয় সমূহ</h3>
    <div class="table-responsive">
     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <th>নং</th>
        <th>তারিখ</th>
        <th>সময়</th>
        <th>নাম/বিবরণ</th>
        <th>টাকা</th>
        <th>ফোন নাম্বার</th>
    </thead>
      
 <?php  while($row=mysqli_fetch_assoc($result)):?>
    <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["date_m"]; ?></td>
            <td><?php echo $row["time_t"]; ?></td>
            <td><?php echo $row["name_dita"]; ?></td>
            <td><?php echo $row["money_d"]; ?></td>
            <td><?php echo $row["contact_phone"]; ?></td>
    </tr>

<?php endwhile; ?>
<tfoot>
    <?php while($roq = mysqli_fetch_assoc($query_result)):?>
    <tr>
        <th>নং</th>
        <th>আয়ের তারিখ</th>
        <th>সময়</th>
        <th>মোট আয়</th>
        <th><?php echo $roq['total_add'] ?></th>
        <th>টাকা</th>                                  
    </tr>
     <?php endwhile;?>
</tfoot>
</table>
</div>
</div>


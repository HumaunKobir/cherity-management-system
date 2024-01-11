

<?php

$conn=mysqli_connect("localhost","kobir","#n2eLJn%TFr-zhv","charity");

$sql="SELECT YEAR(date_ex) as yname, SUM(money_ex) as total FROM expension_tb GROUP BY YEAR(date_ex)";

$result = $conn->query($sql);

?>

<div class="card-body">
    <div class="table-responsive">
     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
   
    
    <h2>প্রত্যেক বছরের মোট ব্যায় সমূহ</h2>
    <thead>
    <tr>
        <th>বছর</th>
        <th>মোট ব্যায়ের টাকা</th>
    </tr>
    </thead>
    <?php while($row = mysqli_fetch_assoc($result)):?>
        <tbody>
        <tr>
            <td><?php echo $row['yname']; ?></td>
            
            <td><?php echo $row['total']; ?></td>
        </tr>
        </tbody>
        <?php endwhile; ?>
       
    </table>

    </div>
    </div>






<?php



$results=$obj->display_expen_month();

?>


    
   
   
    <div class="card-body">
    <div class="table-responsive">
     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <h2>প্রত্যেক মাসের ব্যায় সমূহ</h2>
   <thead>
   <tr>
        <th>বছর</th>
        <th>মাস</th>
        <th>মোট ব্যায়ের টাকা</th>
    </tr>
   </thead>
    

    <?php while($rows = mysqli_fetch_assoc($results)):?>

       <tbody>
       <tr>
            <td><?php echo $rows['ynames']; ?></td>
            <td><?php echo $rows['mnames']; ?></td>
            <td><?php echo $rows['total_ex']; ?></td>
            
        </tr>
       </tbody>
       
        <?php endwhile; ?>

        </table>

    </div>
    </div>




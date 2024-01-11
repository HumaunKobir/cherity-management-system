

<?php


$result=$obj->display_income_month();

?>

<div class="card-body">
    <div class="table-responsive">
     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
   
    <h2>প্রত্যেক মাসের মোট আয় সমূহ</h2>
    <thead>
    <tr>
        <th>বছর</th>
        <th>মাস</th>
        <th>মোট আয়ের টাকা</th>
    </tr>
    </thead>
    <?php while($row = mysqli_fetch_assoc($result)):?>
        <tbody>
        <tr>
            <td><?php echo $row['yname']; ?></td>
            <td><?php echo $row['mname']; ?></td>
            <td><?php echo $row['total']; ?></td>
        </tr>
        </tbody>
        <?php endwhile; ?>
       
</table>

    </div>
    </div>




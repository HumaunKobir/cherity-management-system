<?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $result=$obj->display_income_month(); 
 ?>  
 <!DOCTYPE html>  
 <html> 

      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
      <body> 
      <style>
          .link a{
               text-decoration:none;
          }
     </style> 
           <br /><br />  
           <div class="container">  
           <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর প্রত্যেক মাসের  আয় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
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
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> 
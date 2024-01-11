 
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
           <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                     <thead>
                            <tr>
                                <th>নং</th>
                                <th>তারিখ</th>
                                <th>সময়</th>
                                <th>নাম/বিবরণ</th>
                                <th>টাকা</th>
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require 'admin/dbcon.php';

                            $query = "SELECT * FROM expension_tb";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $student)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $student['id'] ?></td>
                                        <td><?= $student['date_ex'] ?></td>
                                        <td><?= $student['time_ex'] ?></td>
                                        <td><?= $student['name_ex'] ?></td>
                                        <td><?= $student['money_ex'] ?></td>
                                        
                                       
                                    </tr>
                                    <?php
                                }
                            }
                            $query ="SELECT SUM(money_ex) AS total_add FROM expension_tb";
                            $query_result = mysqli_query($con,$query);
                            ?>
                            
                        </tbody>

                        <tfoot>
                            <?php while($roq = mysqli_fetch_assoc($query_result)):?>
                            <tr>
                                <th>নং</th>
                                <th>তারিখ</th>
                                <th>সময়</th>
                                <th>মোট ব্যায়</th>
                                <th><?php echo $roq['total_add'] ?></th>
                                                                 
                            </tr>
                            <?php endwhile;?>
                        </tfoot>               
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
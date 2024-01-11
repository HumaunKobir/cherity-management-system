<?php 

    class adminLog{
        private $conn;

        public function __construct()
        {
            $dbhost = 'localhost';
            $dbuser = 'kobir';
            $dbpass = '#n2eLJn%TFr-zhv';
            $dbname = 'charity';

            $this->conn= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);


        }
        public function admin_login($data){
            $admin_email=$data['admin_emails'];
            $admin_pass=md5($data['admin_passs']);

            $query = "SELECT * FROM loging_tb WHERE admin_emails='$admin_email' && admin_passs='$admin_pass'";

            if(mysqli_query($this->conn,$query)){
                $admin_info = mysqli_query($this->conn,$query);

                if($admin_info){
                    header("location:tamplate.php");
                    $admin_data= mysqli_fetch_assoc($admin_info);
                    session_start();
                    $_SESSION['adminID']= $admin_data['id'];
                    $_SESSION['admin_name']= $admin_data['name'];
                }
            }
        }
        public function adminlogout(){
            unset($_SESSION['adminID']);
            unset($_SESSION['admin_name']);
            header("location:../index.php");
        }

        public function InsertRecord(){
            global $con;
            $add_man =$_POST['UName'];
            $add_address =$_POST['Uaddres'];
            $add_mobali =$_POST['Umobali'];

            $query_man ="INSERT INTO total_man(name_man,address_man,mobali) VALUE('$add_man','$add_address','$add_mobali')";
            $result=mysqli_query($this->conn,$query_man);
            if($result)
                {
                    echo ' Your Record Has Been Saved in the Database';
                }
                else
                {
                    echo ' Please Check Your Query ';
                }
            }
                
            
    
        

        public function add_man_display(){
            $mn_query="SELECT * FROM total_man";
            if(mysqli_query($this->conn,$mn_query)){
                $ad_query=mysqli_query($this->conn,$mn_query);
                return $ad_query;
            }
        }

        public function add_money($add_data){
            $add_year=$add_data['years'];
            $add_month=$add_data['month'];
            $add_date=$add_data['date'];
            $add_time=$add_data['time'];
            $add_nam=$add_data['name_dita'];
            $add_money=$add_data['money_d'];
            $add_phone=$add_data['contact_phone'];
            

            $query="INSERT INTO found_tb(years,month_n,date_m,time_t,name_dita,money_d,contact_phone) VALUE('$add_year','$add_month','$add_date','$add_time','$add_nam','$add_money','$add_phone')";

            if(mysqli_query($this->conn,$query)){
                return "Succesfuly Added";
            }

        }

       

    
   


        public function expensive($add_dat){
            $add_years=$add_dat['years'];
            $add_months=$add_dat['months'];
            $add_datex=$add_dat['datex'];
            $add_timex=$add_dat['timex'];
            $add_name=$add_dat['expension'];
            $add_moneye=$add_dat['expension_m'];
            
            

            $query="INSERT INTO expension_tb(yearss,months,date_ex,time_ex,name_ex,money_ex) VALUE('$add_years','$add_months','$add_datex','$add_timex','$add_name','$add_moneye')";

            if(mysqli_query($this->conn,$query)){
                return "Succesfuly Added";
            }
        }

        public function display_income(){
            $sq="SELECT * FROM found_tb";
            if(mysqli_query($this->conn, $sq)){
                $sq_result=mysqli_query($this->conn, $sq);
                return $sq_result;
            }
             
            
            }
        public function display_totalincome(){
            $query ="SELECT SUM(money_d) AS total_add FROM found_tb";
            if(mysqli_query($this->conn, $query)){
                $query_result = mysqli_query($this->conn,$query);
                return $query_result;
            }
            
        }
        public function display_expenses(){
            $sqs="SELECT * FROM expension_tb ORDER BY id DESC";
            if(mysqli_query($this->conn, $sqs)){
                $sq_results=mysqli_query($this->conn, $sqs);
                return $sq_results;
            }
             
            
            }
        public function display_totalexpenses(){
            $querys ="SELECT SUM(money_ex) AS total_ex FROM expension_tb";
            if(mysqli_query($this->conn, $querys)){
                $query_results = mysqli_query($this->conn,$querys);
                return $query_results;
            }
            
        }

        public function display_income_month(){
            $sql="SELECT YEAR(date_m) as yname, MONTHNAME(date_m) as mname, SUM(money_d) as total FROM found_tb GROUP BY YEAR(date_m), MONTH(date_m)";
            if(mysqli_query($this->conn, $sql)){
                $resultes = mysqli_query($this->conn,$sql);
                return $resultes;
            }

             
        }

        public function display_expen_month(){
            $sqli="SELECT YEAR(date_ex) as ynames, MONTHNAME(date_ex) as mnames, SUM(money_ex) as total_ex  FROM  expension_tb GROUP BY YEAR(date_ex), MONTH(date_ex)";
            if(mysqli_query($this->conn, $sqli)){
                $results = mysqli_query($this->conn,$sqli);
                return $results;
            }

             
        }

        public function add_p_post($addp_post){

            $add_ptitel=$addp_post['post_tittle'];
            $post_con=$addp_post['post_content'];
            $std_img = $_FILES['std_img'] ['name'];
            $tmp_name = $_FILES['std_img'] ['tmp_name'];
            $add_summar=$addp_post['post_summary'];
            $add_tag=$addp_post['post_tag'];
            $add_status=$addp_post['post_status'];

            $post_query="INSERT INTO post_etc(post_tittle,post_content,post_p,pauthor,p_date,p_coment_count,post_summary,post_tag,post_status) VALUE('$add_ptitel','$post_con','$std_img','Admin',now(),10,'$add_summar','$add_tag','$add_status')";

            if(mysqli_query($this->conn,$post_query)){
                move_uploaded_file($tmp_name,'../upload/'.$std_img);
                return "Post Added Successfully";
            }

        }

        public function display_post(){
            $dis_post="SELECT * FROM post_etc";
            if(mysqli_query($this->conn,$dis_post)){
               $dis_query= mysqli_query($this->conn,$dis_post);
               return $dis_query;
            }
        }

        public function display_post_public(){
            $dis_posts="SELECT * FROM post_etc Where post_status=1";
            if(mysqli_query($this->conn,$dis_posts)){
               $dis_querys= mysqli_query($this->conn,$dis_posts);
               return $dis_querys;
            }
        }
       
        public function edit_img($data){
            $img_id=$data['get_id'];
            $img_data=$_FILES['pic']['name'];
            $img_tmp=$_FILES['pic']['tmp_name'];

            $dis_post = "UPDATE post_etc SET post_p='$img_data' Where id='$img_id'";

            if(mysqli_query($this->conn,$dis_post)){
                move_uploaded_file($img_tmp,'../upload/'.$img_data);
                return"Update Successfully";
            }

        }
       

        public function edit_post_view($pdata){
            $post_id=$pdata['post_id'];
            $post_tittle=$pdata['post_tittle'];
            $post_content=$pdata['post_content'];
            $post_summary=$pdata['post_summary'];
             
            $pquery = "UPDATE post_etc SET post_tittle='$post_tittle',post_content='$post_content',post_summary='$post_summary' Where id=$post_id";

            if(mysqli_query($this->conn,$pquery)){
               $p_result=mysqli_query($this->conn,$pquery);
               return "Post Update successfully"; 
            }
        }

        public function delete_post($id){
            $query="DELETE FROM post_etc WHERE id=$id";
           if( mysqli_query($this->conn, $query)){
          
                return "Deleted Successfully!";
             
           }
        }
        public function edit_addmoney($mdata){
           $money_id=$mdata['money_id'];
           $years=$mdata['years'];
           $month_n=$mdata['month'];
           $date=$mdata['date'];
           $time=$mdata['time'];
           $name_dita=$mdata['name_dita'];
           $money_d=$mdata['money_d'];
           $contact_phone=$mdata['contact_phone'];
             
            $mquery = "UPDATE found_tb SET years='$years',month_n='$month_n',date_m='$date',time_t='$time',name_dita='$name_dita',money_d='$money_d',contact_phone='$contact_phone' Where id=$money_id";

            if(mysqli_query($this->conn,$mquery)){
               $p_result=mysqli_query($this->conn,$mquery);
               return "Update successfully"; 
            }
        }

        public function delete_addmoney($ids){
            $query="DELETE FROM found_tb WHERE id=$ids";
           if( mysqli_query($this->conn, $query)){
          
                return "Deleted Successfully!";
             
           }
        }


        public function delete_expenses_money($ide){
            $query="DELETE FROM expension_tb WHERE id=$ide";
           if( mysqli_query($this->conn, $query)){
          
                return "Deleted Successfully!";
             
           }
        }
        public function delete_newman($ides){
            $query="DELETE FROM total_man WHERE id=$ides";
           if( mysqli_query($this->conn, $query)){
          
                return "Deleted Successfully!";
             
           }
        }
        
      

    }
?>
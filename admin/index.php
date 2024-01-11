<?php 

    include("class/fonction.php");
    $obj = new adminLog();

    if(isset($_POST['admin_logins'])){
        $obj->admin_login($_POST);

    }
    session_start();
    if(isset($_SESSION['adminID']))
       $id=$_SESSION['adminID'];
  if(isset($id)){
    header("location:viewman.php");
  }
  


?>


<?php include_once("include/header.php"); ?>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form action="" method="POST">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input name="admin_emails"  class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Enter email address"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input name="admin_passs"  class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" />
                                            </div>
                                              <input class="btn btn-primary bottom mt-4" name="admin_logins" type="submit" value="login">
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small">Need an account? Sign up!</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            
        </div>
       <?php include_once("include/footer.php") ?>
    
    </body>
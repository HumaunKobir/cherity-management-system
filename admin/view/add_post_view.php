
   
<?php
$sq_result=$obj->display_post();

if(isset($_GET['status'])){
  if($_GET['status']='delete'){
      $delete_id = $_GET['id'];
    $dms=$obj->delete_post($delete_id);
  }
}
  
?>

 <h1 class="mt-4">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  পোস্ট সমূহ </h1>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">পোস্ট</li>
  </ol>
                        
<div class="card mb-4">
 <div class="card-header">
    <i class="fas fa-table mr-1"></i>
    তালিকা 
  </div>
  <?php if(isset($dms)){echo $dms;}?>
 <div class="card-body">
 <div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
   <thead>
        <tr>
         <th>ID</th>
         <th>Titel</th>
         <th>Content</th>
         <th>Image</th>
         <th>Author</th>
         <th>Date</th>
         <th>Status</th>
         <th>Action</th>
        </tr>
    </thead>
                                        
        <?php while($row_t=mysqli_fetch_assoc($sq_result)):?>
   
        <tr>
                                                
            <td><?php echo $row_t["id"];?></td>
            <td><?php echo $row_t["post_tittle"];?></td>
            <td><?php echo $row_t["post_content"];?></td>
            <td><img height="50px" src="../upload/<?php echo $row_t["post_p"];?>"><br>
             <a href="edit_img.php?status=editimg&&id=<?php echo $row_t["id"];?>">Change</a>
            </td>
            <td><?php echo $row_t["pauthor"];?></td>
            <td><?php echo $row_t["p_date"];?></td>
            <td><?php echo $row_t["post_status"];?></td>
            <td>
            <button type="button" value="<?php echo $row_t["id"];?>" class="editStudentBtn btn btn-success btn-sm">Edit</button>
                <a class="btn btn-danger" href="?status=delete&&id=<?php echo $row_t['id']; ?>">Delete</a>
            </td>
        </tr>
                                            
            <?php endwhile;?>

   
</table>
  </div>
  </div>
  </div>
                    
 

<!-- Edit Student Modal -->
<div class="modal fade" id="studentEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Post</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="updateStudent">
            <div class="modal-body">

                <div id="errorMessageUpdate" class="alert alert-warning d-none"></div>

                <input type="hidden" name="student_id" id="student_id" >
               
                <div class="mb-3">
                
                <label  class="mb-2" for="post_tittle">Post Tittle</label>
                  <input class="form-control" type="text" name="month" id="month">
               
                </div>
                <div class="mb-3">
                <label for="post_content">Post Content</label>
                  <textarea class="form-control" name="date" id="date"cols="30" rows="10"></textarea>
                
                
                <div class="mb-3">
                <label for="name">Post Summary</label>
        
                    <textarea type="text" name="name" id="name" class="form-control"cols="30" rows="10"></textarea>
                    
                </div>
                <div class="mb-3">
                <label for="email">Post Tags</label>
                    <input type="text"  name="email" id="email" class="form-control">
                    
                </div>
                <div class="mb-3">
                <label  for="phone">Select Post Status</label>
                    <select name="phone" id="phone" class="form-control" >
                        <option value="1">Published</option>
                        <option value="0">Unpublished</option>
                    </select>
                    
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update post</button>
            </div>
        </form>
        </div>
    </div>
</div>





    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <script>
    

        $(document).on('click', '.editStudentBtn', function () {

            var student_id = $(this).val();
            
            $.ajax({
                type: "GET",
                url: "codedasp.php?student_id=" + student_id,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    if(res.status == 404) {

                        alert(res.message);
                    }else if(res.status == 200){

                        $('#student_id').val(res.data.id);
                        
                        $('#month').val(res.data.post_tittle);
                        $('#date').val(res.data.post_content);
                        $('#name').val(res.data.post_summary);
                        $('#email').val(res.data.post_tag);
                        
                        $('#phone').val(res.data.post_status);
                        

                        $('#studentEditModal').modal('show');
                    }

                }
            });

        });

        $(document).on('submit', '#updateStudent', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("update_student", true);

            $.ajax({
                type: "POST",
                url: "codedasp.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessageUpdate').removeClass('d-none');
                        $('#errorMessageUpdate').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessageUpdate').addClass('d-none');

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);
                        
                        $('#studentEditModal').modal('hide');
                        $('#updateStudent')[0].reset();

                        $('#dataTable').load(location.href + " #dataTable");

                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

      

        
    </script>

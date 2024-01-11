<?php 

    

    if(isset($_POST['posbtn'])){
        $ms=$obj->add_p_post($_POST);
    }
?>

<h2>Add Post</h2>

<form action="" method="POST" enctype="multipart/form-data">
   <?php if(isset($ms)){echo $ms;}?>
   <div class="form-group">
        <label class="mb-2" for="post_tittle">Post Tittle</label>
        <input type="text" class="form-control py-4" name="post_tittle" id="post_tittle">
    </div>
    <div class="form-group">
        <label class="mb-2" for="post_content">Post Content</label>
        <textarea class="form-control" name="post_content" id="post_content" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label class="mb-2" for="image">Uplode Image</label><br>
        <input class="PY-4"  type="file" id="file_post" name="std_img">
    </div>
   
  
   
    <div class="form-group">
        <label class="mb-2" for="post_summary">Post Summary</label>
        
        <textarea type="text" class="form-control py-4" name="post_summary" id="post_summary" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label class="mb-2" for="post_tag">Post Tags</label>
        <input type="text" class="form-control py-4" name="post_tag" id="post_tag">
    </div>
    <div class="form-group">
        <label class="mb-2" for="post_status">Select Post Status</label>
        <select class="form-control" name="post_status" id="post_status">
            <option value="1">Published</option>
            <option value="0">Unpublished</option>
        </select>
    </div>
    <input type="submit" name="posbtn" class="form-control btn-block btn-primary" value="Add Post Page">
</form>

<?php
if(isset($_GET['status'])){
if($_GET['status']='editimg'){
    $img_edit=$_GET['id'];
}
}
if(isset($_POST['edit_pimg'])){
    $img_ms=$obj->edit_img($_POST);
 }
?>

<div class="shadow m-5 p-5">
    <?php if(isset($img_ms)){ echo $img_ms;}?>
    <form action="" method="POST" enctype="multipart/form-data" class="form">
        <input type="hidden" name="get_id" value="<?php echo $img_edit;?>">
    <div class="form-group">
        <label class="mb-2" for="image">Uplode Image</label><br>
        <input class="PY-4"  type="file" id="file_post" name="pic">
    </div>
    <input type="submit" value="Update Image" name="edit_pimg" class="btn btn-primary">
    </form>
</div>
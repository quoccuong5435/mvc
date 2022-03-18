<h3 style="text-align: center;">Sửa danh mục bài viết</h3>
<?php 
    if(!empty($_GET['msg']))
    {
        $msg  = unserialize(urldecode($_GET['msg']));
        foreach($msg as $key => $value)
        {
          echo '<span style="color:red;font-weight:bold">'.$value.'</span>';
        }
    }
?>
<?php 
 foreach ($category as $key => $value) {
     ?>
<form action="<?php echo BASE_URL?>category/update_category/<?php echo $value['id'] ?>" method="POST">
<div class="col-md-12">
    <div class="form-group">
        <label for="">Title</label>
        <input type="text" class="form-control" value="<?php echo $value['title']; ?>"  name="title" placeholder="Input field">
    </div>
    <div class="form-group">
        <label for="">Description</label>
        <textarea id="editor" type="text" class="form-control" value="<?php echo $value['description'] ?>"  name="description" placeholder="Input field"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
<?php
 }?>
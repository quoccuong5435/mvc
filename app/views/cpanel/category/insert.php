
<form action="<?php echo BASE_URL?>category/insert_category" method="POST">
    <?php
       if(!empty($_GET['msg']))
       {
           $msg = unserialize(urldecode($_GET['msg']));
           foreach($msg as $key => $value)
           {
              echo   '<span style="color:blue; font-weight:bold">'.$value.'</span>';
           }
       }  
    ?>
    <div class="col-md-12">
    <div class="form-group">
        <label for="">Title</label>
        <input type="text" class="form-control"  name="title" placeholder="Input field">
    </div>
    <div class="form-group">
        <label for="">Description</label>
        <textarea id="editor" type="text" class="form-control"  name="description" placeholder="Input field"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

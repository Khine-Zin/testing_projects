<?php require_once "core/auth.php" ?>
<?php include "template/header.php" ?>

<div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-white mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo $url ?>dashboard.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo $url ?>post_list.php">Post</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> Post Add</li>
                        </ol>
                    </nav>
                </div>
</div>
        <?php

            if(isset($_POST['addpost'])){
                            
                postAdd();

                            }
            ?>
                            
    <form class="row" method="post">
        <div class="col-12 col-xl-8">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">
                            <i class="feather-layers text-primary"></i> Create New Post
                        </h4>
                        <a href="<?php echo $url ?>post_list.php" class="btn btn-outline-primary">
                            <i class="feather-list"></i>
                        </a>
                    </div>
                            <hr>
                        
                            
                                <div class=form-group>
                                    <label>Post Title</label>
                                    <input type="text" name="title" class="form-control" required>
                                </div>
                                
                                <div class=form-group>
                                    <label>Description</label>
                                    <textarea type="text" name="description" id="description" class="form-control" rows="10" required></textarea>
                                   
                                </div>
                           
                          
                </div> <lable>
            </div>
        </div>
        <div class="col-12 col-xl-4">
            <div class="card">
                <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">
                            <i class="feather-layers text-primary"></i>Select Category
                        </h4>
                    </div>
                            <hr>
                    <div class=form-group>
                        <label>Select Category</label>
                        <select name="category_id" class="custom-select">
                            <?php 
                                        
                                foreach(categories() as $c){?>

                                    <option value="<?php echo $c['id'] ?>"><?php echo $c['title'] ?></option>

                            <?php } ?>
                        </select>
                    </div>
                    <button name="addpost" class="btn btn-primary ml-2">add Post</button> 
                </div>
            </div> 
        </div>
    </div>

<?php include "template/footer.php" ?>
<script>
    $("#description").summernote({
        placeholder : "hello",
        tabsize:2,
        height:500,
    });
</script>
    

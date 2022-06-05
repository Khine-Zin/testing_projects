
<?php require_once "core/auth.php" ?>
<?php include "template/header.php" ?>

<div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-white mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo $url ?>dashboard.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo $url ?>post_add.php">Post Add</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Post Update</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-xl-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="mb-0">
                                    <i class="feather-layers text-primary"></i> Category Manager
                                </h4>
                                <a href="item_list.html" class="btn btn-outline-primary">
                                    <i class="feather-list"></i>
                                </a>
                            </div>
                            <hr>
                                <?php

                                $id=$_GET['id'];

                                $current=post($id);

                                if(isset($_POST['updatepost'])){

                                   if(postUpdate()){
                                       linkTo("post_list.php");
                                   }
                                    
                                   }

                                ?>
                
                            <form method="post">
                                <div class=form-group>
                                <input type="hidden" name="id" value="<?php echo $id ?>" >
                                    <label>Post Title</label>
                                <input type="text" name="title" class="form-control" value="<?php echo $current['title'] ?>" required>
                                </div>
                                <div class=form-group>
                                    <label>Select Category</label>
                                <select name="category_id" class="custom-select">
                                    <?php 
                                    
                                    foreach(categories() as $c){?>

                                        <option value="<?php echo $c['id'] ?>" <?php echo $c['id']==$current['category_id']?"selected":"" ?>><?php echo $c['title'] ?></option>

                                    <?php } ?>
                                </select>
                                </div>
                                <div class=form-group>
                                    <label>Description</label>
                                <textarea type="text" name="description" class="form-control" rows="10" required><?php echo $current['description'] ?></textarea>
                                <hr>
                                <button name="updatepost" class="btn btn-primary ml-2">Update</button>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>

<?php include "template/footer.php" ?>
    
    

<?php include "template/header.php" ?>

<div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-white mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo $url ?>dashboard.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo $url ?>category_add.php">Category Add</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Category Update</li>
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

                                $current=category($id);

                                if(isset($_POST['updatecat'])){

                                   if(categoryUpdate()){
                                       linkTo("category_add.php");
                                   }
                                    
                                   }

                                ?>
                            <form method="post">
                                <div class=form-inline>
                                <input type="hidden" name="id" value="<?php echo $id ?>" >
                                <input type="text" name="title" class="form-control" value="<?php echo $current['title'] ?>" required>
                                <button name="updatecat" class="btn btn-primary ml-2">Update</button>
                                </div>
                            </form>
                            <?php include "category_list.php" ?>
                        </div>
                    </div>
                </div>
            </div>

<?php include "template/footer.php" ?>
    
    

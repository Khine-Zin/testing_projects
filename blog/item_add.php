<?php include "template/header.php" ?>

<div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-white mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="item_list.php">Item</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Item</li>
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
                                    <i class="feather-plus-circle text-primary"></i> Add Item
                                </h4>
                                <a href="item_list.html" class="btn btn-outline-primary">
                                    <i class="feather-list"></i>
                                </a>
                            </div>
                            <hr>
                                <?php

                            if(isset($_GET['addbtn'])){
                                
                            $title=$_GET['title'];
                            $sql="INSERT INTO news(title) VALUES('$title')";
                            if(mysqli_query($conn,$sql)){
                                header("location:item_add.php");
                            }else{
                                echo "fail";
                            }
                           
                            }



                            ?>
                            <form action="" method="get">
                                <div class=form-inline>
                                <input type="text" name="title" class="form-control" required>
                                <button name="addbtn" class="btn btn-primary ml-2">add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

<?php include "template/footer.php" ?>
    

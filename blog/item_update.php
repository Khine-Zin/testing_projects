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

                                $id=$_GET['id'];

                                $sql="SELECT * FROM news WHERE id=$id";
                                $query=mysqli_query($conn,$sql);
                                $row=mysqli_fetch_assoc($query);
                                if(isset($_GET['updateBtn'])){
                                    
                                    $title=$_GET['title'];
                                    $id=$_GET['id'];
                                    $sql="UPDATE news SET title='$title' WHERE id=$id";
                                    if(mysqli_query($conn,$sql)){
                                        echo "<script>location.href='item_list.php'</script>";
                                    }else{
                                        echo "fail";
                                    }
                                    }
    



                            ?>
                            <form action="" method="get">
                                <div class=form-inline>
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>" >
                                <input type="text" name="title" class="form-control" value="<?php echo $row['title'] ?>" required>
                                <button name="updateBtn" class="btn btn-primary ml-2">update</button>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>

<?php include "template/footer.php" ?>
    
    

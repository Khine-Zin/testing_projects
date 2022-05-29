<?php include "template/header.php" ?>
<div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-white mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Item List</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="mb-0">
                                    <i class="feather-list text-primary"></i> Item List
                                </h4>
                                <div class="">
                                    <a href="#" class="btn btn-outline-secondary full-screen-btn">
                                        <i class="feather-maximize-2"></i>
                                    </a>
                                    <a href="item_add.php" class="btn btn-outline-primary">
                                        <i class="feather-plus-circle"></i>
                                    </a>
                                </div>
                            </div>
                            <hr>
                            <table id="list" class="table table-striped table-hover" style="width:100%">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Control</th>
                                    <th>Created</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                    
                                    $sql="SELECT * FROM news ORDER BY id DESC";
                                    $query=mysqli_query($conn,$sql);
                                    // print_r($query);
                                    while($row=mysqli_fetch_assoc($query)){
                                ?>

                                <tr>
                                    <td><?php echo $row['id'] ?></td>
                                    <td><?php echo $row['title'] ?></td>
                                    <td>
                                    <a href='item_delete.php?id=<?php echo $row['id'] ?>'>Delete</a>
                                    <a href='item_update.php?id=<?php echo $row['id'] ?>'>Update</a>
                                    </td>
                                    <td><?php echo $row['created_at'] ?></td>
                                </tr>

                                <?php
                                    }
                                ?>
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>

                
<?php include "template/footer.php" ?>
    

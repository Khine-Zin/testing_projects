<?php require_once "core/auth.php" ?>
<?php include "template/header.php" ?>
<div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-white mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo $url ?>dashboard.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Post</li>
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
                                    <i class="feather-list text-primary"></i> Post List
                                </h4>
                                <div class="">
                                   
                                    <a href="<?php echo $url ?>post_add.php" class="btn btn-outline-primary">
                                        <i class="feather-plus-circle"></i>
                                    </a>
                                </div>
                            </div>
                            <hr>
                            <table class="table table-hover mt-3">

                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <?php if($_SESSION['user']['role'] == 0){ ?>
                                        <th>User</th>
                                        <?php } ?>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>control</th>
                                        <th>Created</th>
                                        
                                    </tr>
                                    </thead>

                                    <tbody>

                                    <?php

                                        foreach(posts() as $c){

                                    ?>

                                        <tr>
                                        <td><?php echo $c['id'] ?></td>
                                        <td><?php echo short($c['title']) ?></td>
                                        <?php if($_SESSION['user']['role'] == 0){ ?>
                                        <td><?php print_r(user($c['user_id'])['name'])?></td>
                                        <?php } ?>
                                        <td><?php echo short(strip_tags(html_entity_decode($c['description']))) ?></td>
                                        <td><?php echo category($c['category_id'])['title'] ?></td>
                                        <td>
                                            <a href='post_delete.php?id=<?php echo $c['id'] ?>'>Delete</a>
                                            <a href='post_update.php?id=<?php echo $c['id'] ?>'>Update</a>
                                        </td>
                                        <td><?php echo $c['created_at'] ?></td>
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
    

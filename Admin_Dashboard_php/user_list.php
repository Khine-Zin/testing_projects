<?php require_once "core/auth.php" ?>
<?php include "core/isAdmin.php" ?>
<?php include "template/header.php" ?>
<div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-white mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo $url ?>dashboard.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User</li>
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
                                    <i class="feather-users text-primary"></i> User List
                                </h4>
                            
                            </div>
                            <hr>
                            <table class="table table-hover mt-3">

                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>control</th>
                                        <th>Created</th>
                                        
                                    </tr>
                                    </thead>

                                    <tbody>

                                    <?php

                                        foreach(users() as $c){

                                    ?>

                                        <tr>
                                        <td><?php echo $c['id'] ?></td>
                                        <td><?php echo $c['name'] ?></td>
                                        <td><?php echo $c['email'] ?></td>
                                        <td><?php echo $role[$c['role']] ?></td>
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
    

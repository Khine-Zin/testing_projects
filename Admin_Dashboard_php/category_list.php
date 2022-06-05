<?php require_once "core/auth.php" ?>
<?php include "core/isEditor.php" ?>
<?php include "template/header.php" ?>

<div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-white mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo $url ?>dashboard.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Category Add</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-xl-10">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="mb-0">
                                    <i class="feather-layers text-primary"></i> Category Manager
                                </h4>
                            </div>
                            <hr>
                                <?php

                            if(isset($_POST['addcat'])){
                            
                                categoryAdd();

                            }
                            ?>
                            
                            <table class="table table-hover mt-3">

<thead>
    <tr>
        <th>#</th>
        <th>Title</th>
        <th>User</th>
        <th>control</th>
        <th>Created</th>
        
    </tr>
    </thead>

    <tbody>

    <?php

        foreach(categories() as $c){

    ?>

        <tr class="<?php echo $c['ordering']==1? 'table-primary':''?>">
        <td><?php echo $c['id'] ?></td>
        <td><?php echo $c['title'] ?></td>
        <td><?php print_r(user($c['user_id'])['name'])?></td>
        <td>
            <a href='category_delete.php?id=<?php echo $c['id'] ?>'>Delete</a>
            <a href='category_update.php?id=<?php echo $c['id'] ?>'>Update</a>

            <?php if($c['ordering'] != 1){ ?>

            <a href='category_pin.php?id=<?php echo $c['id'] ?>'>Pin to top</a>

            <?php }else { ?>

            <a href='category_removePin.php?id=<?php echo $c['id'] ?>'>Remove pin</a>

            <?php } ?>

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
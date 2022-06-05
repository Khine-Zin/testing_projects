<div class="col-12 col-md-4">
       <div class="front-panel-sidebar">
            <h4>Category List</h4>
                <div class="list-group">
                <a href="index.php" class="list-group-item list-group-item-action <?php echo isset($_GET['category_id'])?'':'active' ?>">
                           All Categories
                        </a>
                       
                    <?php foreach(categories() as $c){ ?>

                        <a href="<?php echo $url ?>category_base.php?category_id=<?php echo $c['id']?>" class="list-group-item list-group-item-action 
                            <?php echo isset($_GET['category_id'])?$_GET['category_id']==$c['id']?'active':'':'' ?>" >
                            <?php if($c['ordering']=='1'){ ?>
                                <i class="feather-paperclip"></i>
                            <?php } ?>
                            <?php echo $c['title'] ?>
                        </a>

                    <?php } ?>
                   
                </div>
           
        </div>
        </div>
        
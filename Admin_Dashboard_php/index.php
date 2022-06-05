<?php

require_once "front_panel/head.php";
require_once "front_panel/side_header.php";
require_once "front_panel/footer.php";

?>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-8">
            <h4>Post</h4>
            <div class="">
            <?php foreach(posts() as $p){ ?>

                <div class="card mb-3 post">
                    <div class="card-body">
                    
                        <a href="detail.php?id=<?php echo $p['id']; ?>">
                            <h4 class="text-primary"><?php echo $p['title']; ?></h4>
                        </a>
                        
                      <small>
                        <i class="feather-users text-danger"></i>
                        <?php echo user($p['user_id'])['name'] ?> &nbsp;
                        <i class="feather-airplay text-info"></i>
                        <?php echo category($p['category_id'])['title'] ?>   
                        </small>
                       
                        <p class="text-black-50"><?php echo short(strip_tags(html_entity_decode($p['description']))) ;?></p>
                       
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
       <?php include "right_sidebar.php" ?>
        
    </div>
</div>







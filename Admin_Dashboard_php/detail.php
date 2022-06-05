<?php

require_once "front_panel/head.php";
require_once "front_panel/side_header.php";
require_once "front_panel/footer.php";

?>
<?php

$id=$_GET['id'];
$current=post($id);
$currentCat=$current['category_id']

?>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white mb-4">
                    <li class="breadcrumb-item"><a href="<?php echo $url ?>index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Post Details</li>
                </ol>         
            </nav>
            <div class="">
                <div class="card mb-3 post">
                    <div class="card-body">
                    
                       <h4 class="text-primary"><?php echo $current['title']; ?></h4>
                      
                      <small>
                            <i class="feather-users text-danger"></i>
                            <?php echo user($current['user_id'])['name'] ?>
                            <i class="feather-airplay text-info"></i>
                            <?php echo category($current['category_id'])['title'] ?> 
                        </small>
                       
                        <p class="text-black-50"><?php echo html_entity_decode($current['description']);?></p>
                       
                    </div>
                </div>
            <div class="row ">
                <?php foreach(fpostByCat($currentCat,2,$id) as $p){ ?>
                    
                    <div class="col-12 col-md-6">
                         <div class="card mb-3 post">
                                <div class="card-body">

                                    <a href="detail.php?id=<?php echo $p['id']; ?>">
                                        <h4 class="text-primary"><?php echo $p['title']; ?></h4>
                                    </a>

                                        <small>
                                            <i class="feather-layers text-danger"></i>
                                                <?php echo user($p['user_id'])['name'] ?> 
                                                <i class="feather-airplay text-info"></i>
                                             <?php echo category($p['category_id'])['title'] ?>   
                                        </small>
                                        <p class="text-black-50"><?php echo short(strip_tags(html_entity_decode($p['description']))) ;?></p>
                       
                                </div>
                            </div>
                    </div>
                           
                <?php } ?>
                    
            </div>
        </div>
        
                
    </div>
    <div class="col-12 col-md-4">
            <div class="front-panel-sidebar">
                <h4>Category List</h4>
                    <div class="list-group">
                        <a class="list-group-item list-group-item-action active">
                           All Categories
                        </a>
                        <?php foreach(categories() as $c){ ?>

                        <a class="list-group-item list-group-item-action">
                            <?php echo $c['title'] ?>
                        </a>

                        <?php } ?>
                   
            </div>
            <h4 class="mt-4">Advertisement</h4>
        </div>
    </div>
 </div>
        
   





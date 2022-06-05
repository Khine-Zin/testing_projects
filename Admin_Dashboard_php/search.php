<?php

require_once "front_panel/head.php";
require_once "front_panel/side_header.php";
require_once "front_panel/footer.php";

?>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-8">
        <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white mb-4">
                    <li class="breadcrumb-item"><a href="<?php echo $url ?>index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Search By "<?php echo $_POST['search_key'] ?>"
                        </li>
                </ol>         
            </nav>
            <div class="">

                <?php

                    $result=fsearch($_POST['search_key']);
                    if(count($result)==0){
                        echo alert("There is no result","warning");
                    }
                
                ?>

            <?php foreach($result as $p){ ?>

                <div class="card mb-3 post">
                    <div class="card-body">
                    
                        <a href="detail.php?id=<?php echo $p['id']; ?>">
                            <h4 class="text-primary"><?php echo $p['title']; ?></h4>
                        </a>
                        
                      <small>
                        <i class="feather-layers"></i>
                            <?php echo user($p['user_id'])['name'] ?>
                        </small>
                       
                        <p class="text-black-50"><?php echo $p['description'];?></p>
                       
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php include "right_sidebar.php" ?>
    </div>
</div>







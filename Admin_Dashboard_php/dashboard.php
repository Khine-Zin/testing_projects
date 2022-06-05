<?php require_once "core/auth.php" ?>

<?php include "template/header.php" ?>

<div class="row">
                <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="card mb-4 status-card" onclick="go('<?php echo $url ?>/post_add.php')">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <i class="feather-shopping-bag h1 text-primary"></i>
                                </div>
                                <div class="col-9">
                                    <p class="mb-1 h4 font-weight-bolder">
                                        <span class="counter-up"><?php echo countTotal('posts') ?></span>
                                    </p>
                                    <p class="mb-0 text-black-50">Total Post</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="card mb-4 status-card" onclick="go('<?php echo $url ?>/user_list.php')">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <i class="feather-users h1 text-primary"></i>
                                </div>
                                <div class="col-9">
                                    <p class="mb-1 h4 font-weight-bolder">
                                        <span class="counter-up"><?php echo countTotal('users') ?></span>
                                    </p>
                                    <p class="mb-0 text-black-50">Total User</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="card mb-4 status-card" onclick="go('<?php echo $url ?>/category_list.php')">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <i class="feather-layers h1 text-primary"></i>
                                </div>
                                <div class="col-9">
                                    <p class="mb-1 h4 font-weight-bolder">
                                        <span class="counter-up"><?php echo countTotal('Category') ?></span>
                                    </p>
                                    <p class="mb-0 text-black-50">Total Category</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

            </div>
            <div class="row align-items-end">
               
                
                <div class="col-12 col-md-6 col-xl-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center p-3">
                                <h4 class="mb-0">Order & Place</h4>
                                <div class="">
                                    <i class="feather-pie-chart h4 mb-0 text-primary"></i>
                                </div>
                            </div>
                           
                            <canvas id="op" height="200"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-6">
                    <div class="card mb-4 item-carousel-card">
                        <div class="card-body">
                            <div id="carouselExampleIndicators" class="carousel item-carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators" style="bottom: -30px">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="bg-secondary active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="bg-secondary"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class="bg-secondary"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3" class="bg-secondary"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="item-card">
                                            <div class="d-flex justify-content-between align-items-end">
                                                <div class="w-50">

                                                    <h4 class="">Coffee Cup</h4>
                                                    <p class="font-weight-bolder text-black-50 mb-3">500 MMk</p>
                                                    <div class="progress mb-4">
                                                        <div class="progress-bar " role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <img src="<?php echo $url ?>assets/img/item/item1.png" class="item-card-img" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="item-card">
                                            <div class="d-flex justify-content-between align-items-end">
                                                <div class="w-50">

                                                    <h4 class="">Stick</h4>
                                                    <p class="font-weight-bolder text-black-50 mb-3">1500 MMk</p>
                                                    <div class="progress mb-4">
                                                        <div class="progress-bar " role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <img src="<?php echo $url ?>assets/img/item/item2.png" class="item-card-img" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="item-card">
                                            <div class="d-flex justify-content-between align-items-end">
                                                <div class="w-50">
                                                    <h4 class="">Book</h4>
                                                    <p class="font-weight-bolder text-black-50 mb-3">520 MMk</p>
                                                    <div class="progress mb-4">
                                                        <div class="progress-bar " role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <img src="<?php echo $url ?>assets/img/item/item3.png" class="item-card-img" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="item-card">
                                            <div class="d-flex justify-content-between align-items-end">
                                                <div class="w-50">

                                                    <h4 class="">Name Card</h4>
                                                    <p class="font-weight-bolder text-black-50 mb-3">500 MMk</p>
                                                    <div class="progress mb-4">
                                                        <div class="progress-bar " role="progressbar" style="width: 35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <img src="<?php echo $url ?>assets/img/item/item4.png" class="item-card-img" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-12">
                    <div class="card overflow-hidden mb-4">

                        <div class="">
                            <div class="d-flex justify-content-between align-items-center p-3">
                                <p class="mb-0 text-bolder">Subscriber List</p>
                                <div class="">
                                    <i class="feather-more-vertical h4 mb-0 text-primary"></i>
                                </div>
                            </div>
                            <table class="table table-hover table-striped sub-list mb-0" id="list" style="width:100%">
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
                                        <td><?php echo short($c['title'],'20') ?></td>
                                        <?php if($_SESSION['user']['role'] == 0){ ?>
                                        <td class="text-nowrap"><?php print_r(user($c['user_id'])['name'])?></td>
                                        <?php } ?>
                                        <td><?php echo short(strip_tags(html_entity_decode($c['description']))) ?></td>
                                        <td class="text-nowrap"><?php echo category($c['category_id'])['title'] ?></td>
                                        <td class="text-nowrap">
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



<script>
    $('.counter-up').counterUp({
    delay: 10,
    time: 1000
});

            <?php 
                $catname=[];
                $countPostByCat=[];
                foreach(categories() as $c){
                array_push($catname,$c['title']);
                array_push($countPostByCat,countTotal('posts',"category_id={$c['id']}"));
                }
                
                
            ?>

let orderFromPlace = <?php echo json_encode($countPostByCat) ?>;
let places = <?php echo json_encode($catname)?>;

let op = document.getElementById('op').getContext('2d');
let opChart = new Chart(op, {
    type: 'doughnut',
    data: {
        labels:places,
        datasets: [{
            label: '# of Votes',
            data:orderFromPlace,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                display:false,
                ticks: {
                    beginAtZero: true
                }
            }],
            xAxes: [
                {
                    display:false
                }
            ]
        },
        legend:{
            display: true,
            position: 'bottom',
            labels: {
                fontColor: '#333',
                usePointStyle:true
            }
        }
    }
});

    $("#list").dataTable();
</script>

    

</head>
<body class="bg-light">
<div class="container">
    <div class="row">
        <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary rounded my-3">
            <div class="container-fluid">
            <div class="">
              <a class="navbar-brand" href="<?php echo $url ?>index.php">Sample blog</a>
            </div>
        <div class="">
     <form class="d-flex" role="search" method="post" action="<?php echo $url ?>search.php" >
        <input class="form-control me-2" name="search_key" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-light ml-1" type="submit">Search</button>
      </form>
    </div>
    </div>
  </div>
</nav>
    </div>
    <div class="col-12">
      <?php foreach(ads() as $ad) { ?>
        <a href="<?php echo $ad['link'] ?>" target="_blank">
          <img src="<?php echo $ad['photo'] ?>" class="w-100 mb-4 rounded">
        </a>
      <?php } ?>
    </div>
    </div>
</div>
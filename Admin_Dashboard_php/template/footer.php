</div>
    </div>
</section>

<script src="<?php echo $url ?>assets/vendor/jquery.min.js"></script>
<script src="<?php echo $url ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $url ?>assets/vendor/way_point/jquery.waypoints.js"></script>
<script src="<?php echo $url ?>assets/vendor/counter_up/counter_up.js"></script>
<script src="<?php echo $url ?>assets/vendor/data_table/jquery.dataTables.min.js"></script>
<script src="<?php echo $url ?>assets/vendor/data_table/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="<?php echo $url ?>assets/vendor/chart_js/chart.min.js"></script> 
<script src="<?php echo $url ?>assets/js/app.js">


<script>
let current=location.href;
$(".menu-item-link").each(
    function () {
      let links=$(this).attr("href"); 
      if (current==links) {
        //   console.log(current);
        $(this).addClass('active');
      }
    }
);

</script>
</body>
</html>
      	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="<?=Url::base()?>js/jquery-1.11.1.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="<?=Url::base()?>js/bootstrap.min.js"></script>
	    <script src="<?=Url::base()?>js/script.js"></script>

	    

    	<?php
    		if(!empty($page)){
    			if($page == 'admin') {
    				?>
    	<script src="<?=Url::base()?>js/plugins/dataTables/jquery.dataTables.js"></script>
    	<script src="<?=Url::base()?>js/plugins/dataTables/dataTables.bootstrap.js"></script>

	    <script src="<?=Url::base()?>js/sb-admin.js"></script>
	    <script src="<?=Url::base()?>js/plugins/metisMenu/jquery.metisMenu.js"></script>

	    <script>
   			 $(document).ready(function() {
        	$('#dataTables-example').dataTable();
	    });
	    </script>
	    <!-- chart -->
	    <script src="<?=Url::base()?>js/chart/dashboard-demo.js"></script>
	    <script src="<?=Url::base()?>js/plugins/morris/raphael-2.1.0.min.js"></script>
    	<script src="<?=Url::base()?>js/plugins/morris/morris.js"></script>
    	<script src="<?=Url::base()?>js/plugins/morris/morris.js"></script>

    	<script src="<?=Url::base()?>js/source/canvasjs.min.js"></script>
    	<script src="<?=Url::base()?>js/chart/dynamic.js"></script>

    				<?php
    			}
    		}
    	?>

    	    

  </body>
</html>
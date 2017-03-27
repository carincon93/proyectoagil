	</div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="<?php echo $base_url; ?>/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo $base_url; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo $base_url; ?>/js/master.js"></script>
	<script src="<?php echo $base_url; ?>/js/jquery.form-validator.min.js"></script>
	<script src="<?php echo $base_url; ?>/js/jquery.form_validator.es.js"></script>
	<script>
		$(document).ready(function() {
			$.validate({
	          form: '#add',
	          language: es
	        });
		});
	</script>
  </body>
</html>
	<script src="<?= base_url('assets/js/jquery-1.11.1.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/chart.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/chart-data.js') ?>"></script>
	<script src="<?= base_url('assets/js/easypiechart.js') ?>"></script>
	<script src="<?= base_url('assets/js/easypiechart-data.js') ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap-datepicker.js') ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap-table.js') ?>"></script>
	<script src="<?= base_url('assets/js/sweetalert2.min.js') ?>"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

	<script>
		! function($) {
			$(document).on("click", "ul.nav li.parent > a > span.icon", function() {
				$(this).find('em:first').toggleClass("glyphicon-minus");
			});
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function() {
			if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function() {
			if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
	<?php if (session()->getFlashdata('success')) : ?>
		<script type="text/javascript">
			$(document).ready(function() {
				swal("Success!", "<?php echo $_SESSION['success'] ?>", "success");
			});
		</script>
		</script>
	<?php endif; ?>

	<?php if (session()->getFlashdata('error')) : ?>
		<script type="text/javascript">
			$(document).ready(function() {
				swal("Sorry!", "<?php echo $_SESSION['error'] ?>", "error");
			});
		</script>
	<?php endif; ?>

	<?php if (session()->getFlashdata('warning')) : ?>
		<script type="text/javascript">
			$(document).ready(function() {
				swal("Warning!", "<?php echo $_SESSION['warning'] ?>", "warning");
			});
		</script>
	<?php endif; ?>

	<?php if (session()->getFlashdata('info')) : ?>
		<script type="text/javascript">
			$(document).ready(function() {
				swal("Info!", "<?php echo $_SESSION['info'] ?>", "info");
			});
		</script>
	<?php endif; ?>


	</body>

	</html>
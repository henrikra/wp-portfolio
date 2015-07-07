<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Portfolio CV
 */

?>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.viewportchecker.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.hc-sticky.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.knob.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

<div class="row">
	<div class="col-sm-12"><hr/></div>
</div>
<div class="row">
	<div class="col-sm-12">
		<footer>Copyright &copy <?php echo date(Y) . ' '; the_author(); ?></footer>
	</div>
</div>
<?php wp_footer(); ?>

</body>
</html>

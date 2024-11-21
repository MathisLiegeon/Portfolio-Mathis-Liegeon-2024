<style>
.button:hover {
	background-image: url('<?php echo get_template_directory_uri();?>/assets/img/img_hover.webp');
}
</style>
<a
class="button"
href="<?php echo esc_url($args['url']); ?>">
<?php echo esc_html($args['text']); ?>
</a>

<style>
.button:hover {
	background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/img_hover.webp');
}
</style>
<a
class="button hidden-to-grow <?php echo isset($args['class']) ? esc_html($args['class']) : ''; ?>" href="<?php echo isset($args['url']) ? esc_url($args['url']) : '#'; ?>">
<?php echo isset($args['text']) ? esc_html($args['text']) : ''; ?>
</a>

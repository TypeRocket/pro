<div class="builder-content">
    <h2><?php echo esc_html($data['headline']); ?></h2>
    <?php echo wp_get_attachment_image($data['featured_image']); ?>
    <?php echo wpautop( $data['content'] ); ?>
</div>
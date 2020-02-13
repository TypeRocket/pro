<?php
/**
 * Content - Visual
 *
 * @var array $data component fields
 * @var bool $frist_item is first component
 * @var bool $last_item is last component
 * @var mixed|\TypeRocket\Models\Model $model model used by the component
 */
?>
<div class="builder-content">
    <h2><?php echo esc_html($data['headline']); ?></h2>
    <?php echo wp_get_attachment_image($data['featured_image']); ?>
    <?php echo wpautop( $data['content'] ); ?>
</div>
<?php

/**
 * @file
 * Paragraphs item simple bootstrap template.
 */

$icon = '';
$body = '';
$image = '';
$title = '';

if (!empty($content['field_icon'])) {
    $icon = render($content['field_icon']);
}
if (!empty($content['field_card_body'])) {
    $body = render($content['field_card_body']);
}
if (!empty($content['field_card_image'])) {
    $image = render($content['field_card_image']);
}
if (!empty($content['field_card_title'])) {
    $title = render($content['field_card_title']);
}

?>

<div class="card">
    <?php if ($icon || $title): ?>
        <div class="card-header"><?php if ($icon) : ?><?php print $icon; ?><?php endif; ?><?php if ($title) : ?><h5 class="card-title"><?php print $title; ?></h5><?php endif; ?></div><?php endif; ?>
    <?php if ($image) : ?>
        <div><?php print $image; ?></div>
    <?php endif; ?>
    <div class="card-body">
        <div class="card-text">
            <?php print $body; ?>
        </div>
    </div>
</div>

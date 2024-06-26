<?php

/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

use Bespoke\Template;

$accordion_id = wp_unique_id();
?>
<div <?php echo get_block_wrapper_attributes() ?>>
    <?php if ($t = Template::getAttribute($attributes, 'title')) : ?>
        <h3 class="accordion-header">
            <button id="accordion-<?php echo $accordion_id ?>-title" type="button" class="accordion-toggle" aria-expanded="false" aria-controls="accordion-<?php echo $accordion_id ?>-body">
                <?php echo esc_html($t) ?>
                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="10" height="16" fill="none">
                    <use href="#navigate-right" />
                </svg>
            </button>
        </h3>
        <div class="accordion-body" role="region" aria-labelledby="accordion-<?php echo $accordion_id ?>-title" id="accordion-<?php echo $accordion_id ?>-body" hidden>
            <?php echo wp_kses_post($content) ?>
        </div>
    <?php endif; ?>
</div>

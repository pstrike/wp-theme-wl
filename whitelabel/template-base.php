<?php
// =============================================================================
// TEMPLATE NAME: Base
// -----------------------------------------------------------------------------
// Base template.
// =============================================================================


get_header();
if (is_home()) { ?>
<div class="header-base header-default-blog">
    <div class="container">
        <div class="title-base text-center">
            <h1>
                <?php esc_attr_e("Blog","whitelabel") ?>
            </h1>
            <p><?php esc_attr_e("Latest news from our staff","whitelabel") ?></p>
        </div>
    </div>
</div>
<div class="container content">
    <?php whitelabel_default_blog() ?>
</div>
<?php
} else {
   whitelabel_the_content();
}
get_footer();
?>

<?php
// =============================================================================
// INDEX.PHP
// =============================================================================

global $query;
if (is_search()) include_once(WHITELABEL_PATH . "/inc/search.php");
else include_once(WHITELABEL_PATH . "/template-base.php");

?>

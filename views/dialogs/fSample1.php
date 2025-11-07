<?php
/**
 * Purpose: Composite sample that assembles base fragments into a classic form.
 * Usage: Rendered by dialogs to present a stacked field layout using shared partials.
 */
?>
<?=$mwLoad->view('dialogs/fBase1', ['size' => $size, 'rich' => $rich])?>
<?=$mwLoad->view('dialogs/fBase2')?>

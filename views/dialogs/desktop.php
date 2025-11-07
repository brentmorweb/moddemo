<?php
/**
 * Purpose: Establishes the desktop shell used to preview dialog windows.
 * Usage: Loaded by the dialog demo routes to provide controls and include supporting assets.
 */
	$mwLoad->Window('wDialog', 'dialogs/wCombo');

/*/
	$mwLoad
		->js('sample.js')
		->css('sample.css')
	; //$mwLoad
/**/
?>

<style>

</style>

<div class="mwDskTools">

	<h1><span>Dialogs</span> Demo</h1>

</div>

<div class="mwDesktop">

	<?=$dialogsIndex?>

</div>

<script type="text/javascript">

	jQuery( function () {
	}); //jQuery

</script>

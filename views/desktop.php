<?php
/**
 * Purpose: Provides the desktop chrome for the skins demo including asset loading.
 * Usage: Loaded by the Skins controller to wrap the index markup in the Morweb desktop layout.
 */
	$mwLoad->Window('wDialog', 'dialogs/wCombo');

	$mwLoad
		->js('sample.js')
		->css('sample.css')
	; //$mwLoad

?>

<style>

</style>

<div class="mwDskTools">

	<h1><span>Index</span> Demo</h1>

	<a class="Add" onclick="mwWindow('wDialog').show();">Dialog</a>

</div>

<div class="mwDesktop">

	<?=$demoIndex?>

</div>

<script type="text/javascript">

	jQuery( function () {
	}); //jQuery

</script>

<?php
/**
 * Purpose: Defines the desktop wrapper for the vanilla UI showcase.
 * Usage: Called by the Skins controller for the vanilla subsection to load assets and embed the index view.
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

	<h1><span>UI</span> Demo</h1>

	<a class="Add" onclick="mwWindow('wDialog').show();">Dialog</a>
</div>

<div class="mwDesktop">

	<?=$vanilaIndex?>

</div>

<script type="text/javascript">

	jQuery( function () {

		setTimeout( function () {
		//	mwWindow('wDialog').show();
		}, 500);

	}); //jQuery

</script>

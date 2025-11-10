<?php
	$mwLoad->Window('wDialog', 'bpages/index');

	$mwLoad
		->js('sample.js')
		->css('sample.css')
	; //$mwLoad

?>

<style>

</style>

<div class="mwDskTools">

	<h1><span>B</span> Pages</h1>

	<a class="Add" onclick="mwWindow('wDialog').show();">New Page</a>
</div>

<div class="mwDesktop">

	<?=$bpagesIndex?>

</div>

<script type="text/javascript">

	jQuery( function () {

		setTimeout( function () {
		//	mwWindow('wDialog').show();
		}, 500);

	}); //jQuery

</script>

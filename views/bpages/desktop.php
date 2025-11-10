<?php
        $mwLoad->Window('wPages', 'bpages/index');

	$mwLoad
		->js('sample.js')
		->css('sample.css')
	; //$mwLoad

?>

<style>

</style>

<div class="mwDskTools">

	<h1><span>B</span> Pages</h1>

        <a class="Add" onclick="mwWindow('wPages').show();">Browse Library</a>
</div>

<div class="mwDesktop">

	<?=$bpagesIndex?>

</div>

<script type="text/javascript">

	jQuery( function () {

		setTimeout( function () {
		//	mwWindow('wPages').show();
		}, 500);

	}); //jQuery

</script>

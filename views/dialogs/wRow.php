<?php
/**
 * Purpose: Renders a single-row dialog that places sample forms side by side.
 * Usage: Use the wRow window to visualize two-column editor layouts within a constrained width.
 */
	// Loading direct helper to read skins data
	CI()->load->helper(['direct']);
	mwSkin()->loadSheet('', 'mw.windows');
	mwSkin()->loadSheet('', 'mw.forms');
?>

<div class="winHeader">Single Row</div>

<div class="winRow flex" style="width: 600px;">

	<div class="winContent" style="width: 50%;">

		<dl class="mwDialog">
			<?=$mwLoad->view('dialogs/fSample1')?>
		</dl>
	</div>

	<div class="winContent" style="width: 50%;">

		<dl class="mwDialog">
			<?=$mwLoad->view('dialogs/fSample2')?>
		</dl>

	</div>

</div>

<div class="winFooter">
	<a class="close winCloseClick"></a>
	<a class="apply"></a>
</div>

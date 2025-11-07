<?php
/**
 * Purpose: Presents a dialog configured for form entry using the demo skin styles.
 * Usage: Use the wForm window to inspect spacing, validation messaging, and action areas.
 */
	// Loading direct helper to read skins data
	CI()->load->helper(['direct']);
	mwSkin()->loadSheet('', 'mw.windows');
	mwSkin()->loadSheet('', 'mw.forms');
?>
<div class="winHeader">Single Form</div>

<form>
	<input type="hidden" />

	<div class="winContent" style="width: 600px;">

		<dl class="mwDialog">
			<?=$mwLoad->view('dialogs/fBase1')?>
		</dl>

	</div>

</form>

<div class="winFooter">
	<a class="close winCloseClick"></a>
	<a class="apply"></a>
</div>

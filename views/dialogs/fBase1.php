<?php
/**
 * Purpose: Base fragment featuring text inputs and textarea variations.
 * Usage: Include this partial with optional $size and $rich parameters to demonstrate input sizing and rich editor toggles.
 */
?>

	<dt>Sample Input:</dt>
	<dd><input type="text" /></dd>

	<dt>Sample Text:</dt>
	<dd><textarea<?=!empty($size)? ' size="'.$size.'"' : ''?><?=!empty($rich)? ' class="richEdit compact"' : ''?>></textarea></dd>

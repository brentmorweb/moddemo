<?php
/**
 * Purpose: Wraps the Pages prototype in the standard desktop chrome.
 * Usage: Injects the rendered index view so it matches the vanilla demo folder structure.
 */
        $mwLoad->Window('wDialog', 'dialogs/wCombo');

        $mwLoad
                ->js('sample.js')
                ->css('sample.css')
        ; //$mwLoad

?>

<div class="mwDskTools">

        <h1><span>Pages</span> Prototype</h1>

        <a class="Add" onclick="mwWindow('wDialog').show();">Dialog</a>
</div>

<div class="mwDesktop">

        <?=$bpagesIndex?>

</div>

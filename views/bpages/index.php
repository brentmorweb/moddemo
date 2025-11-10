<?php
/**
 * Purpose: Lists available page manager demos and registers their windows.
 * Usage: Embedded inside the desktop to launch the Pages Manager sample.
 */

// ---- List ----

// Listing available windows inside the bpages folder
$files  = [];
foreach ( [$mwLoad->GlobalPath, $mwLoad->LocalPath] as $path ) {

        if ( !$path ) {
                continue;
        }

        $path   = compilePath($path, MOD_VIEWS, 'bpages');

        $files  += listFiles($path, 'w*.php');
}

// ---- Views ----

$views  = [];
foreach ( $files as $file ) {
        $name   = FileName($file);
        $title  = substr($name, 1);
        $title  = strConvertCase($title, STRCASE_TITLE);

        $views[]        = [
                'file'          => $file,
                'name'          => $name,
                'title'         => $title,
        ];
}

// ---- Windows ----

foreach ( $views as $view ) {
        $mwLoad->Window($view['name'], 'bpages/'.$view['name']);
}

?>

<style type="text/css">

.mwIndexTable .handler.sortable {
        display : none;
}

.mwIndexTable li.head .handler.nestable {
        display : none;
}

.mwIndexTable dl:hover>.handler.sortable {
        display : block;
}

.mwIndexTable dl:hover>.handler.nestable {
        display : none;
}

</style>

<ul id="mwDemoIndex" class="mwIndexTable">

        <li class="head">
                <dl>
                        <dt data-sort="title">Pages Manager</dt>
                        <dd class="small">Status</dd>
                </dl>
        </li>

<?php   foreach ( $views as $view ) { ?>

        <li data-id="item-1" class="no-children collapsed">
                <dl>
                        <dt>
                                <a href="#" onclick="mwWindow('<?=$view['name']?>').show(); return false;">
                                        <?=$view['title']?>
                                </a>
                        </dt>

                        <dd><a class="button ok" href="#" onclick="return false;"></a></dd>
                </dl>
        </li>

<?php   } //FOR each view ?>

</ul>

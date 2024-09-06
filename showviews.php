<?php

/**
 * ShowViews plugin for Adminer Editor.
 *
 * @link https://github.com/vlgalik/adminer-showviews
 * @author Ladislav Galik, https://galik.it
 */

class AdminerShowViews
{
    function tablesPrint(&$tables)
    {
        if (!preg_match("/editor/i", (new Adminer)->name())) return;

        foreach ($tables as $table => $status) {
            $tables[$table]['Engine'] = '';
        }
    }
}

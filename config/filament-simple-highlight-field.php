<?php

return [

    /*
    |-----------------------------------------------------------------------------
    | Syntax Highlighting Theme
    |-----------------------------------------------------------------------------
    |
    | This sets the Highlight.js theme to use. The default theme is 'default'.
    | You can use any theme as it will be loaded from the Highlight.js CDN.
    | See https://highlightjs.org/static/demo for a list of the themes.
    |
    */

    // 'theme' => 'nord',

    /*
    |-----------------------------------------------------------------------------
    | Should minified files be highlighted?
    |-----------------------------------------------------------------------------
    |
    | To save on the client's resources, files with a very long line length, ie
    | files that are likely to be minified, are not highlighted by default.
    | You can change this behaviour here, and you can also change the
    | threshold for what is considered to be a "very long" line.
    |
    */

    'disable_highlighting_for_compact_files' => true,
    'compact_file_line_threshold' => 256,

];

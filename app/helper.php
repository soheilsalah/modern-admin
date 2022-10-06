<?php

function view_path($path = null)
{
    return $path == null ? base_path('resources/views') : base_path('resources/views/'.$path); 
}

function controller_path($path = null)
{
    return $path == null ? base_path('app/Http/Controllers') : base_path('app/Http/Controllers/'.$path); 
}

function fileCreator($filename, $content)
{
    $myfile = fopen($filename, "w") or die("Unable to open file!");
    fwrite($myfile, $content);
    fclose($myfile);
}


function mkdirAndCreateFile($dir, $filename = null, $content = null)
{
    !file_exists($dir) ? mkdir($dir, 0777, true) : true;

    fileCreator($filename, $content);
}

function error($msg)
{
    return throw new Exception($msg);
}

function redirectToURL($route)
{
    echo <<<HTML
    <script>
        window.location.href = '$route';
    </script>
    HTML;
}

function _404($layout = null, $title = null, $content = null)
{
    echo view('errors.404', compact('layout', 'title', 'content'));
}
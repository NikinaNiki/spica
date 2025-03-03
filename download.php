<?php
if(isset($_GET['file']))
{
    $file=basename($_GET['file']);
    $filepath='image/'.$file;
    if(file_exists($filepath))
    {
        header('content-Description:File Transfer');
        header('content-Type:application/octet-stream');
        header('content-Disposition: attachment;filename="'.$file. '"');
        header(('Expires:0'));
        header('Cache-Control:must-revalidate');
        header('Pragma:public');
        header('Content-Length:' .filesize($filepath));
        readfile($filepath);
        exit;
    }
    else{
        echo "file is not found";
    }
}
?>
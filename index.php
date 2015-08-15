<?php
    header('Content-Type: text/html; charset=utf-8;');
    $file = fopen('file1.txt', 'r');

    
    if(is_readable('file1.txt')){
        //$fcontent = fread($file, filesize('file1.txt'));
        $fcontent = fgets($file);
        $fposition = ftell($file);
        echo 'Файл можно прочитать <br>';
        echo $fcontent,'<br>';
        echo 'Позиция курсора '.$fposition.'<br>';
    }else{
        echo 'Файл нельзя прочитать!';
    }
    fclose($file);
    
    $file = fopen('file1.txt', 'r+');
    
    if(is_readable('file1.txt')){
        $content = "\nLINE eight";
        fseek($file, 0, SEEK_END);
        fwrite($file, $content);
        $size = filesize('file1.txt');
        rewind($file);
        //readfile('file1.txt');
        $fcontent = file('file1.txt');
        echo '<pre>';
            print_r($fcontent);
        echo '</pre>';
        
        copy('file1.txt', 'file2.txt');
        
        unlink('file2.txt');
    }else{
        
    }
?>
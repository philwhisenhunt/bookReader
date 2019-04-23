<?php

//open a text file
//for each line, spit out the contents

$handle = fopen("dracula.txt", 'r');
if($handle){
    while(($line = fgets($handle)) !== false){
        //do something with the line
        echo $line;
    }
    fclose($handle);
} else{
    echo "There was an error";
}
echo "\n";
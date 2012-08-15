<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
<?php
    $row = 1;
    if (($handle = fopen("bin/pricelist.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);
            echo "<p> $num fields in line $row: <br /></p>\n";
            $row++;
            $col = 1;
            for ($c=0; $c < $num; $c++) {
                
                if($data[$c]){
                    echo "col " . $col . "   " . $data[$c] . "<br />\n";
                    
                }
                $col++;
            }
           
            echo "-------------------------------------------------------";
        }
        fclose($handle);
        }
?>
    </body>
</html>

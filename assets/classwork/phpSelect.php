<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-db simple select</title>
</head>
<body>
    <?php
        include('../../../../dbCon.php');
        $sql = 'select * from `petshop` where type="dog"';
        if($results = $mysqli->query($sql)){
            printf("select return %d rows<br/><br/>", $results->num_rows);
        } else {
            echo 'issue with query';
        }
        print var_dump($results);
        print('<br/><br/>');

        //results holds a pointer
        //turn it into something useful!

        if($results){
            while($rowHolder = mysqli_fetch_array($results,MYSQLI_ASSOC)){
                $records[] = $rowHolder;
            }
        }

        var_dump($records);
        print('<br/><br/>');
        // HTML OUTPUT!
        $output = '<table border="1">';
        $th = array();
        foreach($records as $currRecord){
            if(empty($th)){
                $th = array_keys($currRecord);
                $output .= '<tr><th>'.implode('</th><th>',$th).'</th></tr>';
            }
            $output.='<tr>';
            foreach($currRecord as $name=>$value){
                $output.='<td>'.$value.'</td>';
            }
            $output.='</tr>';
        }
        echo $output;
    ?>
</body>
</html>
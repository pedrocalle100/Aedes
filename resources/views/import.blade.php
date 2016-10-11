<?php

$link = mysqli_connect("127.0.0.1","cl49-aedes","Bm9W-sc4e","cl49-aedes");

if (mysqli_connect_error()){

    die("There was an error connecting to the database");

}

if (isset($_POST['submit'])){

    $fname = $_FILES['file']['name'];
    echo 'upload filename: '.$fname.' ';
    $chk_ext = explode(".",$fname);

        if(strtolower(end($chk_ext)) == "csv"){

            $filename = $_FILES['file']['tmp_name'];
            $handle = fopen($filename, "r");

            while($data = fgetcsv($handle)){


              /*
              cada item representa cada columna del archivo CSV (Excel) para la
              base de datos
              */

                $item1 = mysqli_real_escape_string($link, $data[0]);
                $item2 = mysqli_real_escape_string($link, $data[1]);

                /*
                $item3 = mysqli_real_escape_string($link, $data[2]);
                $item4 = mysqli_real_escape_string($link, $data[3]);
                $item5 = mysqli_real_escape_string($link, $data[4]);
                $item6 = mysqli_real_escape_string($link, $data[5]);
                $item7 = mysqli_real_escape_string($link, $data[6]);
                $item8 = mysqli_real_escape_string($link, $data[7]);
                $item9 = mysqli_real_escape_string($link, $data[8]);
                $item10 = mysqli_real_escape_string($link, $data[9]);
                $item11 = mysqli_real_escape_string($link, $data[10]);
                $item12 = mysqli_real_escape_string($link, $data[11]);
                $item13 = mysqli_real_escape_string($link, $data[12]);
                $item14 = mysqli_real_escape_string($link, $data[13]);
                $item15 = mysqli_real_escape_string($link, $data[14]);
                $item16 = mysqli_real_escape_string($link, $data[15]);
                $item17 = mysqli_real_escape_string($link, $data[16]);
                $item18 = mysqli_real_escape_string($link, $data[17]);
                $item19 = mysqli_real_escape_string($link, $data[18]);
                $item20 = mysqli_real_escape_string($link, $data[19]);
                $item21 = mysqli_real_escape_string($link, $data[20]);
                $item22 = mysqli_real_escape_string($link, $data[21]);
                $item23 = mysqli_real_escape_string($link, $data[22]);
                $item24 = mysqli_real_escape_string($link, $data[23]);
                $item25 = mysqli_real_escape_string($link, $data[24]);
                $item26 = mysqli_real_escape_string($link, $data[25]);
                $item27 = mysqli_real_escape_string($link, $data[26]);
                $item28 = mysqli_real_escape_string($link, $data[27]);
                $item29 = mysqli_real_escape_string($link, $data[28]);
                $item30 = mysqli_real_escape_string($link, $data[29]);
                $item31 = mysqli_real_escape_string($link, $data[30]);
                $item32 = mysqli_real_escape_string($link, $data[31]);
                $item33 = mysqli_real_escape_string($link, $data[32]);
                $item34 = mysqli_real_escape_string($link, $data[33]);
                $item35 = mysqli_real_escape_string($link, $data[34]);
                $item36 = mysqli_real_escape_string($link, $data[35]);
                $item37 = mysqli_real_escape_string($link, $data[36]);
                $item38 = mysqli_real_escape_string($link, $data[37]);
                $item39 = mysqli_real_escape_string($link, $data[38]);
                $item40 = mysqli_real_escape_string($link, $data[39]);
                $item41 = mysqli_real_escape_string($link, $data[40]);
                $item42 = mysqli_real_escape_string($link, $data[41]);
                $item43 = mysqli_real_escape_string($link, $data[42]);
                $item44 = mysqli_real_escape_string($link, $data[43]);
                $item45 = mysqli_real_escape_string($link, $data[44]);
                $item46 = mysqli_real_escape_string($link, $data[45]);
                $item47 = mysqli_real_escape_string($link, $data[46]);
                $item48 = mysqli_real_escape_string($link, $data[47]);
                */

                $sql = "INSERT INTO `test`(nombre, email) VALUES ('$item1','$item2')";

                mysqli_query($link, $sql);
            }
            fclose($handle);
            echo "Succesfuly Imported";

        }else{
            echo "Invalid File";
        }
}

?>

<!DOCTYPE html>

<html>
    <head>
        <title>asdfgbdas</title>
    </head>

    <body>

        <form method="post" enctype="multipart/form-data">
            <p>Upload CSV: <input type="file" name="file"></p>
            <p><input type="submit" name="submit" value="import"></p>

        </form>

    </body>
</html>

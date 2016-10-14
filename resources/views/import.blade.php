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

            $i = 2;
            $filename = $_FILES['file']['tmp_name'];
            $handle = fopen($filename, "r");
            fgets($handle);

            while($data = fgetcsv($handle)){


              /*
              cada item representa cada columna del archivo CSV (Excel) para la
              base de datos
              */

                $item1 = mysqli_real_escape_string($link, $data[0]);
                $item2 = mysqli_real_escape_string($link, $data[1]);
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
                $item49 = mysqli_real_escape_string($link, $data[48]);
                $item50 = mysqli_real_escape_string($link, $data[49]);
                $item51 = mysqli_real_escape_string($link, $data[50]);
                $item52 = mysqli_real_escape_string($link, $data[51]);

                /*
                  los datos correspondientes a $data[1], $data[2], $data[6], $data[8], $data[16] , corresponden a los datos en excel:
                  fecha, semana, edad, sexo y barrio respectivamente
                */

                if ($data[1] == NULL or $data[2] == NULL or $data[6] == NULL or $data[8] == NULL or $data[16] IN ('LOS SAUCES', 'LA PRADERA', 'PARIS CENTRAL', 'JOSE ANTONIO GALAN', 'CAMPO GRANDE', 'TIERRA VERDE', 'EL CAFETAL', 'LA ESMERALDA', 'LA MARUCHENGA', 'SALVADOR ALLENDE', 'BARRIO NUEVO', 'CABANITAS', 'LA CABANA', 'LA MADERA', 'LA FLORIDA', 'GRAN AVENIDA', 'SAN JOSE OBRERO', 'AMAZONIA', 'VILLAS DE OCCIDENTE', 'MOLINARES', 'SAN SIMON', 'SANTA ANA', 'LOS BUCAROS', 'SALENTO', 'SERRAMONTE','PALMAR DE SERRAMONTE', 'SAN SILVESTRE', 'SUAREZ', 'PUERTO BELLO', 'RINCON SANTON', 'CENTRAL', 'ESPIRITU SANTO', 'ZONA CENTRO', 'PEREZ', 'NAZARET', 'EL ROSARIO', 'ANDA LUCIA', 'LOPEZ DE MESA', 'EL CAIRO', 'LA MILAGROSA', 'EL CONGOLO', 'LAS GRANJAS', 'PRADO', 'MANCHESTER', 'LA ESTACION', 'LA CUMBRE', 'ALTAVISTA', 'EL CARMELO', 'HATO VIEJO', 'EL PORVENIR', 'BRICENO', 'BUENOS AIRES', 'EL PARAISO', 'VALADARES', 'EL TRAPICHE', 'ARALIAS', 'URAPANES', 'LA PRIMAVERA', 'VILLA MARIA', 'VILLAS DE COMFENALCO', 'RIACHUELOS', 'BELLAVISTA', 'PLAYA RICA', 'SAN GABRIEL', 'SAN MARTIN', 'VILLAS DEL SOL', 'TIERRADENTRO', 'VILLA LINDA', 'GIRASOLES', 'LA SONORA', 'VILLA LUNA', 'PACHELLY', 'LOS ALPES', 'EL DUCADO', 'LA ALDEA', 'LA SELVA', 'ALTOS DE NIQUIA', 'NIQUIA BIFAMILARES', 'EL MIRADOR QUITASOL', 'TERRANOVA', 'NIQUIA PANAMERICANO', 'CIUDAD DEL NORTE', 'HERMOSA PROVINCIA', 'LA NAVARRA', 'EL TREVOL', 'GUASIMALITO', 'LA VIRGINIA', 'FORTIDUENO', 'LA MINA', 'ALCALA', 'LOS CIRUELOS', 'ESTACION PRIMERA', 'LAS VEGAS', 'LA CAMILA', 'CINCO ESTRELLAS', 'JARDIN DE LOS SUEÑOS', 'MARCO FIDEL SUARESZ', 'LA GABRIELA','BELVEDERE', 'ACEVEDO', 'ZAMORA', 'ALPES DEL NORTE', 'MIRADOR DE SAN NICOLAS', 'SANTA RITA', 'EL PINAR', 'ADOLFO PAZ', 'REGALO DE DIOS',
                 'EL 7')){
                     echo "<br>No se pudo importar la linea ".$i." con los datos: ".$item1." ".$item2." ".$item3." ".$item4." ".$item5" ".$item6." ".$item7." ".$item8." ".$item9." ".$item10." ".$item11." ".$item12." ".$item13." ".$item14." ".$item15." ".$item16." ".$item17." ".$item18." ".$item19." ".$item20." ".$item21." ".$item22." ".$item23." ".$item24." ".$item25." ".$item26." ".$item27." ".$item28." ".$item29." ".$item30." ".$item31." ".$item32." ".$item33." ".$item34." ".$item35." ".$item36." ".$item37." ".$item38." ".$item39." ".$item40." ".$item41." ".$item42." ".$item43." ".$item44." ".$item45." ".$item46." ".$item47." ".$item48" ".$item49" ".$item50" ".$item51" ".$item52;
                    
                    $i++;
                    
                    continue;
                }

                $sql = "INSERT INTO `Casos`(cod_eve, fec_not, semana, ano, cod_pre, cod_sub, edad_, uni_med_, sexo_, cod_pais_o, cod_dpto_o, cod_mun_o, area_, localidad_, cen_pobla_, vereda_, bar_ver_, dir_res_, ocupacion_, tip_ss_, cod_ase_, per_etn_, gp_discapa,
                  gp_desplaz, gp_migrant, gp_carcela, gp_gestan, gp_indigen, gp_pobicbf, gp_mad_com, gp_desmovi, gp_psiquia, gp_vic_vio, gp_otros, cod_dpto_r, cod_mun_r, fec_con_, ini_sin_, tip_cas_, pac_hos_, fec_hos_, con_fin_, fec_def_, ajuste_, telefono_, fecha_nto_, cer_def_, cbmte_, uni_modif, Dir. STD, X, Y)
                VALUES ('$item1','$item2','$item3', '$item4', '$item5', '$item5', '$item6', '$item7', '$item8', '$item9', '$item10', '$item11', '$item12', '$item13', '$item14', '$item15', '$item16', '$item17', '$item18','$item19','$item20', '$item21', '$item22', '$item23', '$item24', '$item25', '$item26', '$item27', '$item28', '$item29', '$item30', '$item31', '$item32', '$item33', '$item34', '$item35', '$item36', '$item37', '$item38', '$item39', '$item40', '$item41', '$item42', '$item43', '$item44', '$item45', '$item46', '$item47', '$item48', '$item49', '$item50', '$item51', '$item52')";

                mysqli_query($link, $sql);

                $i++;
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
        <title>Importar archivo Excel</title>
    </head>

    <body>

        <form method="post" enctype="multipart/form-data">
            <p>Cargar Archivo CSV: <input type="file" name="file"></p>
            <p><input type="submit" name="submit" value="import"></p>

        </form>

    </body>
</html>

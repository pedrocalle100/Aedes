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
            
                $paris = array('PARIS','LOS SAUCES', 'LA PRADERA', 'PARIS CENTRAL', 'JOSE ANTONIO GALAN', 'CAMPO GRANDE','TIERRA VERDE', 'EL CAFETAL', 'LA ESMERALDA', 'LA MARUCHENGA', 'SALVADOR ALLENDE');

                $madera = array('MADERA','BARRIO NUEVO', 'CABANITAS', 'LA CABANA', 'LA MADERA', 'LA FLORIDA', 'GRAN AVENIDA', 'SAN JOSE OBRERO', 'AMAZONIA');

                $santaAna = array('VILLAS DE OCCIDENTE', 'MOLINARES', 'SAN SIMON', 'SANTA ANA', 'LOS BUCAROS', 'SALENTO', 'SERRAMONTE',
                'PALMAR DE SERRAMONTE', 'SAN SILVESTRE');

                $centro = array('SUAREZ', 'PUERTO BELLO', 'RINCON SANTON', 'CENTRAL',
                'ESPIRITU SANTO', 'ZONA CENTRO', 'PEREZ', 'NAZARET', 'EL ROSARIO', 'ANDA LUCIA', 'LOPEZ DE MESA','EL CAIRO', 'LA MILAGROSA', 'EL CONGOLO', 'LAS GRANJAS', 'PRADO', 'MANCHESTER', 'LA ESTACION');

                $cumbre = array('LA CUMBRE', 'ALTAVISTA', 'EL CARMELO', 'HATO VIEJO', 'EL PORVENIR', 'BRICENO', 'BUENOS AIRES',
                'EL PARAISO', 'VALADARES', 'EL TRAPICHE', 'ARALIAS', 'URAPANES', 'LA PRIMAVERA', 'VILLA MARIA', 'VILLAS DE COMFENALCO', 'RIACHUELOS');

                $bellaVista = array('BELLAVISTA', 'PLAYA RICA', 'SAN GABRIEL', 'SAN MARTIN',
                'VILLAS DEL SOL', 'TIERRADENTRO', 'VILLA LINDA', 'GIRASOLES', 'LA SONORA', 'VILLA LUNA', 'PACHELLY', 'LOS ALPES', 'EL DUCADO', 'LA ALDEA', 'LA SELVA');

                $alNiquia = array('ALTOS DE NIQUIA', 'NIQUIA BIFAMILARES',
                'EL MIRADOR QUITASOL');

                $niquia = array('NIQUIA','TERRANOVA', 'NIQUIA PANAMERICANO', 'CIUDAD DEL NORTE', 'HERMOSA PROVINCIA',
                'LA NAVARRA', 'EL TREVOL', 'GUASIMALITO');

                $fontidueno = array('FONTIDUENO','LA VIRGINIA', 'FONTIDUENO', 'LA MINA', 'ALCALA',
                'LOS CIRUELOS', 'ESTACION PRIMERA', 'LAS VEGAS', 'LA CAMILA', 'CINCO ESTRELLAS', 'JARDIN DE LOS SUEÑOS',
                'MARCO FIDEL SUARESZ');

                $acevedo = array('LA GABRIELA','BELVEDERE', 'ACEVEDO', 'ZAMORA', 'ALPES DEL NORTE',
                'MIRADOR DE SAN NICOLAS', 'SANTA RITA');

                $croacia = array('EL PINAR', 'ADOLFO PAZ','REGALO DE DIOS','EL SIETE');

            while($data = fgetcsv($handle)){
                
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
                $item53 = mysqli_real_escape_string($link, $data[52]);
                $item54 = mysqli_real_escape_string($link, $data[53]);
                $item55 = mysqli_real_escape_string($link, $data[54]);
                $item56 = mysqli_real_escape_string($link, $data[55]);
                $item57 = mysqli_real_escape_string($link, $data[56]);
                $item58 = mysqli_real_escape_string($link, $data[57]);
                $item59 = mysqli_real_escape_string($link, $data[58]);
                $item60 = mysqli_real_escape_string($link, $data[59]);
                $item61 = mysqli_real_escape_string($link, $data[60]);
                $item62 = mysqli_real_escape_string($link, $data[61]);
                $item63 = mysqli_real_escape_string($link, $data[62]);
                $item64 = mysqli_real_escape_string($link, $data[63]);
                $item65 = mysqli_real_escape_string($link, $data[64]);
                $item66 = mysqli_real_escape_string($link, $data[65]);
                $item67 = mysqli_real_escape_string($link, $data[66]);
                $item68 = mysqli_real_escape_string($link, $data[67]);
                $item69 = mysqli_real_escape_string($link, $data[68]);
                $item70 = mysqli_real_escape_string($link, $data[69]);
                $item71 = mysqli_real_escape_string($link, $data[70]);
                $item72 = mysqli_real_escape_string($link, $data[71]);
                $item73 = mysqli_real_escape_string($link, $data[72]);
                $item74 = mysqli_real_escape_string($link, $data[73]);
                $item75 = mysqli_real_escape_string($link, $data[74]);
                $item76 = mysqli_real_escape_string($link, $data[75]);
                $item77 = mysqli_real_escape_string($link, $data[76]);
                $item78 = mysqli_real_escape_string($link, $data[77]);
                $item79 = mysqli_real_escape_string($link, $data[78]);
                $item80 = mysqli_real_escape_string($link, $data[79]);
                $item81 = mysqli_real_escape_string($link, $data[80]);
                $item82 = mysqli_real_escape_string($link, $data[81]);
                $item83 = mysqli_real_escape_string($link, $data[82]);
                $item84 = mysqli_real_escape_string($link, $data[83]);
                $item85 = mysqli_real_escape_string($link, $data[84]);
                $item86 = mysqli_real_escape_string($link, $data[85]);
                $item87 = mysqli_real_escape_string($link, $data[86]);
                $item88 = mysqli_real_escape_string($link, $data[87]);
                $item89 = mysqli_real_escape_string($link, $data[88]);
                $item90 = mysqli_real_escape_string($link, $data[89]);
                $item91 = mysqli_real_escape_string($link, $data[90]);
                $item92 = mysqli_real_escape_string($link, $data[91]);
                $item93 = mysqli_real_escape_string($link, $data[92]);
                $item94 = mysqli_real_escape_string($link, $data[93]);
                $item95 = mysqli_real_escape_string($link, $data[94]);
                $item96 = mysqli_real_escape_string($link, $data[95]);
                $item97 = mysqli_real_escape_string($link, $data[96]);
                $item98 = mysqli_real_escape_string($link, $data[97]);
                $item99 = mysqli_real_escape_string($link, $data[98]);
                $item100 = mysqli_real_escape_string($link, $data[99]);
                $item101 = mysqli_real_escape_string($link, $data[100]);
                $item102 = mysqli_real_escape_string($link, $data[101]);
                $item103 = mysqli_real_escape_string($link, $data[102]);
                $item104 = mysqli_real_escape_string($link, $data[103]);
                $item105 = mysqli_real_escape_string($link, $data[104]);
                $item106 = mysqli_real_escape_string($link, $data[105]);
                $item107 = mysqli_real_escape_string($link, $data[106]);
                $item108 = mysqli_real_escape_string($link, $data[107]);
                $item109 = mysqli_real_escape_string($link, $data[108]);
                $item110 = mysqli_real_escape_string($link, $data[109]);
                $item111 = mysqli_real_escape_string($link, $data[110]);
                $item112 = mysqli_real_escape_string($link, $data[111]);
                
                /*
                //Tabla mapa
                $item2 = mysqli_real_escape_string($link, $data[1]);
                $item3 = mysqli_real_escape_string($link, $data[2]);
                $item4 = mysqli_real_escape_string($link, $data[3]);
                $item13 = mysqli_real_escape_string($link, $data[12]);
                $item15 = mysqli_real_escape_string($link, $data[14]);
                $item23 = mysqli_real_escape_string($link, $data[22]);
                
            
                //Tabla detalle_casos
                $item43 = mysqli_real_escape_string($link, $data[42]);
                $item44 = mysqli_real_escape_string($link, $data[43]);
                $item45 = mysqli_real_escape_string($link, $data[44]);
                $item46 = mysqli_real_escape_string($link, $data[45]);
                $item47 = mysqli_real_escape_string($link, $data[46]);
                $item56 = mysqli_real_escape_string($link, $data[55]);
                $item58 = mysqli_real_escape_string($link, $data[57]);
                $item59 = mysqli_real_escape_string($link, $data[58]);
                $item60 = mysqli_real_escape_string($link, $data[59]);
                $item61 = mysqli_real_escape_string($link, $data[60]);
                $item70 = mysqli_real_escape_string($link, $data[69]);
                $item71 = mysqli_real_escape_string($link, $data[70]);
                $item72 = mysqli_real_escape_string($link, $data[71]);
                $item73 = mysqli_real_escape_string($link, $data[72]);
                $item74 = mysqli_real_escape_string($link, $data[73]);
                $item75 = mysqli_real_escape_string($link, $data[74]);
                $item76 = mysqli_real_escape_string($link, $data[75]);
                $item77 = mysqli_real_escape_string($link, $data[76]);
                $item78 = mysqli_real_escape_string($link, $data[77]);
                $item79 = mysqli_real_escape_string($link, $data[78]);
                $item80 = mysqli_real_escape_string($link, $data[79]);
                $item81 = mysqli_real_escape_string($link, $data[80]);
                $item82 = mysqli_real_escape_string($link, $data[81]);
                $item83 = mysqli_real_escape_string($link, $data[82]);
                $item84 = mysqli_real_escape_string($link, $data[83]);
                $item85 = mysqli_real_escape_string($link, $data[84]);
                $item86 = mysqli_real_escape_string($link, $data[85]);
                $item87 = mysqli_real_escape_string($link, $data[86]);
                $item88 = mysqli_real_escape_string($link, $data[87]);
                $item89 = mysqli_real_escape_string($link, $data[88]);
                $item101 = mysqli_real_escape_string($link, $data[100]);
                $item102 = mysqli_real_escape_string($link, $data[101]);
                $item109 = mysqli_real_escape_string($link, $data[108]);
                
                
                //Tabla Paciente
                $item7 = mysqli_real_escape_string($link, $data[6]);
                $item8 = mysqli_real_escape_string($link, $data[7]);
                $item9 = mysqli_real_escape_string($link, $data[8]);
                $item10 = mysqli_real_escape_string($link, $data[9]);
                $item11 = mysqli_real_escape_string($link, $data[10]);
                $item12 = mysqli_real_escape_string($link, $data[11]);
                $item13 = mysqli_real_escape_string($link, $data[12]);
                $item15 = mysqli_real_escape_string($link, $data[14]);
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
                $item49 = mysqli_real_escape_string($link, $data[48]);
                $item51 = mysqli_real_escape_string($link, $data[50]);
                $item52 = mysqli_real_escape_string($link, $data[51]);
                $item53 = mysqli_real_escape_string($link, $data[52]);
                $item69 = mysqli_real_escape_string($link, $data[68]);

                //Tabla Georef
                $item16 = mysqli_real_escape_string($link, $data[15]);
                $item17 = mysqli_real_escape_string($link, $data[16]);
                $item18 = mysqli_real_escape_string($link, $data[17]);
                $item19 = mysqli_real_escape_string($link, $data[18]);
                $item20 = mysqli_real_escape_string($link, $data[19]);
                $item21 = mysqli_real_escape_string($link, $data[20]);
                $item22 = mysqli_real_escape_string($link, $data[21]);
                $item67 = mysqli_real_escape_string($link, $data[66]);
                $item103 = mysqli_real_escape_string($link, $data[102]);
                $item104 = mysqli_real_escape_string($link, $data[103]);
                $item105 = mysqli_real_escape_string($link, $data[104]);
                $item106 = mysqli_real_escape_string($link, $data[105]);
                $item107 = mysqli_real_escape_string($link, $data[106]);
                $item108 = mysqli_real_escape_string($link, $data[107]);
                $item110 = mysqli_real_escape_string($link, $data[109]);
                $item111 = mysqli_real_escape_string($link, $data[110]);
                $item112 = mysqli_real_escape_string($link, $data[111]);

                
                //Tabla Otros
                $item1 = mysqli_real_escape_string($link, $data[0]);
                $item5 = mysqli_real_escape_string($link, $data[4]);
                $item6 = mysqli_real_escape_string($link, $data[5]);
                $item14 = mysqli_real_escape_string($link, $data[13]);
                $item41 = mysqli_real_escape_string($link, $data[40]);
                $item42 = mysqli_real_escape_string($link, $data[41]);
                $item48 = mysqli_real_escape_string($link, $data[47]);
                $item50 = mysqli_real_escape_string($link, $data[49]);
                $item54 = mysqli_real_escape_string($link, $data[53]);
                $item55 = mysqli_real_escape_string($link, $data[54]);
                $item57 = mysqli_real_escape_string($link, $data[56]);
                $item62 = mysqli_real_escape_string($link, $data[61]);
                $item63 = mysqli_real_escape_string($link, $data[62]);
                $item64 = mysqli_real_escape_string($link, $data[63]);
                $item65 = mysqli_real_escape_string($link, $data[64]);
                $item66 = mysqli_real_escape_string($link, $data[65]);
                $item68 = mysqli_real_escape_string($link, $data[67]);
                $item90 = mysqli_real_escape_string($link, $data[89]);
                $item91 = mysqli_real_escape_string($link, $data[90]);
                $item92 = mysqli_real_escape_string($link, $data[91]);
                $item93 = mysqli_real_escape_string($link, $data[92]);
                $item94 = mysqli_real_escape_string($link, $data[93]);
                $item95 = mysqli_real_escape_string($link, $data[94]);
                $item96 = mysqli_real_escape_string($link, $data[95]);
                $item97 = mysqli_real_escape_string($link, $data[96]);
                $item98 = mysqli_real_escape_string($link, $data[97]);
                $item99 = mysqli_real_escape_string($link, $data[98]);
                $item100 = mysqli_real_escape_string($link, $data[99]);
                
*/
                if(in_array($data[22], $paris)){
                    $comuna = "PARIS";
                  }else {

                      if(in_array($data[22], $madera)){
                        $comuna = "MADERA";
                      }else {

                        if(in_array($data[22], $santaAna)){
                          $comuna = "SANTA ANA";
                        }else {

                          if(in_array($data[22], $centro)){
                            $comuna = "CENTRO";
                          }else {

                            if(in_array($data[22], $cumbre)){
                              $comuna = "LA CUMBRE";
                            }else {

                              if(in_array($data[22], $bellaVista)){
                                $comuna = "BELLAVISTA";
                              }else {

                                if(in_array($data[22], $alNiquia)){
                                  $comuna = "ALTOS DE NIQUIA";
                                }else {

                                  if(in_array($data[22], $niquia)){
                                    $comuna = "NIQUIA";
                                  }else {

                                    if(in_array($data[22], $fontidueno)){
                                      $comuna = "FORTIDUENO";
                                    }else {

                                      if(in_array($data[22], $acevedo)){
                                        $comuna = "ACEVEDO";
                                      }else {

                                        if(in_array($data[22], $croacia)){
                                          $comuna = "CROACIA";
                                        }else {
                                          $comuna = "BELLO";
                                        }
                                      }
                                    }
                                  }
                                }
                              }
                            }
                          }
                        }
                      }
                    }


                /*
                if ($data[13] == !in_array($data[16], array('LOS SAUCES', 'LA PRADERA', 'PARIS CENTRAL', 'JOSE ANTONIO GALAN', 'CAMPO GRANDE', 'TIERRA VERDE',
                        'EL CAFETAL', 'LA ESMERALDA', 'LA MARUCHENGA', 'SALVADOR ALLENDE')){

                     echo "<br>No se pudo importar la linea ".$i." con los datos: ".$item1." ".$item2." ".$item3." ".$item4;
                    $i++;
                    continue;

                }
                */
                $sql = "INSERT INTO `casos`(cod_eve, fec_not, semana, ano, cod_pre,	cod_sub, pri_nom_, seg_nom_, pri_ape_,	seg_ape_, tip_ide_,	num_ide_, edad_, uni_med_, sexo_, cod_pais_o,	cod_dpto_o,	cod_mun_o,	area_, localidad_, cen_pobla_, vereda_,	bar_ver_, dir_res_,	ocupacion_,	tip_ss_, cod_ase_, per_etn_, gp_discapa, gp_desplaz, gp_migrant, gp_carcela, gp_gestan, gp_indigen, gp_pobicbf,	gp_mad_com,	gp_desmovi,	gp_psiquia, gp_vic_vio, gp_otros, cod_dpto_r, cod_mun_r, fec_con_, ini_sin_, tip_cas_, pac_hos_, fec_hos_, con_fin_, fec_def_, ajuste_,	telefono_, fecha_nto_, cer_def_, cbmte_, uni_modif, nuni_modif,	fec_arc_xl,	nom_dil_f_,	tel_dil_f_,	fec_aju_, nit_upgd,	fm_fuerza, fm_unidad, fm_grado,	version, desplazami, cod_mun_d,	famantdngu,	direclabor,	fiebre,	cefalea, dolrretroo, malgias, artralgia, erupcionr,	dolor_abdo,	vomito,	diarrea, somnolenci, hipotensio, hepatomeg,	hem_mucosa,	hipotermia,	caida_plaq,	acum_liqui,	aum_hemato, extravasac,	hemorr_hem,	choque,	dano_organ,	muesttejid,	mueshigado,	muesbazo, muespulmon, muescerebr, muesmiocar, muesmedula, muesrinon, clasfinal,	conducta, nom_eve, nom_upgd, ndep_proce, nmun_proce, ndep_resi,	nmun_resi, nmun_notif, ndep_notif, nreg, `Dir. STD`, X, Y, comuna) VALUES ('$item1', '$item2', '$item3', '$item4', '$item5', '$item6', '$item7', '$item8', '$item9', '$item10', '$item11', '$item12', '$item13', '$item14', '$item15', '$item16', '$item17', '$item18', '$item19', '$item20', '$item21', '$item22', '$item23', '$item24', '$item25', '$item26', '$item27', '$item28', '$item29', '$item30', '$item31', '$item32', '$item33', '$item34', '$item35', '$item36', '$item37', '$item38', '$item39', '$item40', '$item41', '$item42', '$item43', '$item44', '$item45', '$item46', '$item47', '$item48', '$item49', '$item50', '$item51', '$item52', '$item53', '$item54', '$item55', '$item56', '$item57', '$item58', '$item59', '$item60', '$item61', '$item62', '$item63', '$item64', '$item65', '$item66', '$item67', '$item68', '$item69', '$item70', '$item71', '$item72', '$item73', '$item74', '$item75', '$item76', '$item77', '$item78', '$item79', '$item80', '$item81', '$item82', '$item83', '$item84', '$item85', '$item86', '$item87', '$item88', '$item89', '$item90', '$item91', '$item92', '$item93', '$item94', '$item95', '$item96', '$item97', '$item98', '$item99', '$item100', '$item101', '$item102', '$item103', '$item104', '$item105', '$item106', '$item107', '$item108', '$item109', '$item110', '$item111', '$item112', '$comuna')";
                
                $sql1 = "INSERT INTO `mapa`(fec_not, semana, ano, edad_, sexo_, bar_ver_, comuna) VALUES ('$item2', '$item3', '$item4', '$item13', '$item15', '$item23','$comuna')";

                $sql2 = "INSERT INTO `detalle_casos`(fec_con_, ini_sin_, tip_cas_, pac_hos_, fec_hos_, nuni_modif, nom_dil_f_, tel_dil_f_, fec_aju_, nit_upgd, fiebre, cefalea, dolrretroo, malgias, artralgia, erupcionr, dolor_abdo, vomito, diarrea, somnolenci, hipotensio, hepatomeg, hem_mucosa, hipotermia, caida_plaq, acum_liqui, aum_hemato, extravasac, hemorr_hem, choque, nom_eve, nom_upgd, nreg) VALUES ('$item43', '$item44', '$item45', '$item46', '$item47', '$item56', '$item58', '$item59', '$item60 ', '$item61', '$item70', '$item71 ', '$item72', '$item73', '$item74', '$item75', '$item76', '$item77', '$item78', '$item79', '$item80', '$item81', '$item82', '$item83', '$item84', '$item85', '$item86', '$item87', '$item88', '$item89', '$item101', '$item102', '$item109')";

                $sql3 = "INSERT INTO `paciente`(pri_nom_, seg_nom_, pri_ape_, seg_ape_, tip_ide_, edad_, sexo_, num_ide_, dir_res_, ocupacion_, tip_ss_, cod_ase_, per_etn_, gp_discapa, gp_desplaz, gp_migrant, gp_carcela, gp_gestan, gp_indigen, gp_pobicbf, gp_mad_com, gp_desmovi, gp_psiquia, gp_vic_vio, gp_otros, fec_def_, telefono_, fecha_nto_, cer_def_, direclabor) VALUES ('$item7', '$item8', '$item9', '$item10', '$item11', '$item12', '$item13', '$item15', '$item24', '$item25', '$item26', '$item27', '$item28', '$item29', '$item30', '$item31', '$item32', '$item33', '$item34', '$item35', '$item36', '$item37', '$item38', '$item39', '$item40', '$item49', '$item51', '$item52', '$item53', '$item69')";             

                $sql4 = "INSERT INTO `georef`(cod_pais_o, cod_dpto_o, cod_mun_o, area_, localidad_, cen_pobla_, vereda_, cod_mun_d, ndep_proce, nmun_proce, ndep_resi, nmun_resi, nmun_notif, ndep_notif, `Dir. STD`, X, Y) VALUES ('$item16','$item17', '$item18', '$item19', '$item20', '$item21', '$item22', '$item67', '$item103', '$item104', '$item105', '$item106', '$item107', '$item108', '$item110', '$item111', '$item112')";

                $sql5 = "INSERT INTO `otros`(cod_eve, cod_pre, cod_sub, uni_med_, cod_dpto_r, cod_mun_r, con_fin_, ajuste_, cbmte_, uni_modif, fec_arc_xl, fm_fuerza, fm_unidad, fm_grado, version, desplazami, famantdngu, dano_organ, muesttejid, mueshigado, muesbazo, muespulmon, muescerebr, muesmiocar, muesmedula, muesrinon, clasfinal, conducta ) VALUES ( '$item1', '$item5', '$item6', '$item14', '$item41', '$item42', '$item48', '$item50', '$item54', '$item55', '$item57', '$item62', '$item63', '$item64', '$item65', '$item66', '$item68', '$item90', '$item91', '$item92', '$item93', '$item94', '$item95', '$item96', '$item97', '$item98', '$item99', '$item100')";

                
                mysqli_query($link, $sql);
                mysqli_query($link, $sql1);
                mysqli_query($link, $sql2);
                mysqli_query($link, $sql3);
                mysqli_query($link, $sql4);
                mysqli_query($link, $sql5);
                

                $i++;

            }
            fclose($handle);
            echo "<br>Satisfactoriamente se importó el archivo";

        }else{
            echo "<br>Archivo inválido";
        }
}

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Import</title>
    </head>

    <body>

        <form method="post" enctype="multipart/form-data">
            <p>Upload CSV: <input type="file" name="file"></p>
            <p><input type="submit" name="submit" value="import"></p>

        </form>

    </body>
</html>

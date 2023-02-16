<?php

if(isset($_POST['btn'])) {

    if(isset($_POST['cedula']) && !empty($_POST['cedula']) && isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['notam1']) && !empty($_POST['notam1']) && isset($_POST['notam2']) && !empty($_POST['notam2']) && isset($_POST['notam3']) && !empty($_POST['notam3']) && isset($_POST['notaf1']) && !empty($_POST['notaf1']) && isset($_POST['notaf2']) && !empty($_POST['notaf2']) && isset($_POST['notaf3']) && !empty($_POST['notaf3']) && isset($_POST['notap1']) && !empty($_POST['notap1']) && isset($_POST['notap2']) && !empty($_POST['notap2']) && isset($_POST['notap3']) && !empty($_POST['notap3'])) {

        session_start();

        $Cedula = $_POST['cedula'];
        $Nombre = $_POST['nombre'];
        $NotaM1 = $_POST['notam1'];
        $NotaM2 = $_POST['notam2'];
        $NotaM3 = $_POST['notam3'];
        $NotaF1 = $_POST['notaf1'];
        $NotaF2 = $_POST['notaf2'];
        $NotaF3 = $_POST['notaf3'];
        $NotaP1 = $_POST['notap1'];
        $NotaP2 = $_POST['notap2'];
        $NotaP3 = $_POST['notap3'];
        $Cortes = 3;

        $_SESSION['MatAprobado'] = 0;
        $_SESSION['FisAprobado'] = 0;
        $_SESSION['ProgAprobado'] = 0;

        $_SESSION['MatReprobado'] = 0;
        $_SESSION['FisReprobado'] = 0;
        $_SESSION['ProgReprobado'] = 0;

        $_SESSION['AlumAprobadoT'] = 0;
        $_SESSION['AlumAprobado1'] = 0;
        $_SESSION['AlumAprobado2'] = 0;

        $_SESSION['NotaMaxMat'] = 0;
        $_SESSION['NotaMaxFis'] = 0;
        $_SESSION['NotaMaxProg'] = 0;

        $_SESSION['Mprom'] = ($NotaM1 + $NotaM2 + $NotaM3) / $Cortes;
        $_SESSION['Fprom'] = ($NotaF1 + $NotaF2 + $NotaF3) / $Cortes;
        $_SESSION['Pprom'] = ($NotaP1 + $NotaP2 + $NotaP3) / $Cortes;

        if($_SESSION['Mprom'] >= 10) {
            $_SESSION['MatAprobado']++;
        }

        if($_SESSION['Fprom'] >= 10) {
            $_SESSION['FisAprobado']++;
        }

        if($_SESSION['Pprom'] >= 10) {
            $_SESSION['ProgAprobado']++;
        }

        if($_SESSION['Mprom'] < 10) {
            $_SESSION['MatReprobado']++;
        }

        if($_SESSION['Fprom'] < 10) {
            $_SESSION['FisReprobado']++;
        }

        if($_SESSION['Pprom'] < 10) {
            $_SESSION['ProgReprobado']++;
        }

        if($_SESSION['Mprom'] >= 10 && $_SESSION['Fprom'] >= 10 && $_SESSION['Pprom'] >= 10) {
            $_SESSION['AlumAprobadoT']++;
        }

        if($_SESSION['Mprom'] >= 10 && $_SESSION['Fprom'] < 10 && $_SESSION['Pprom'] < 10) {
            $_SESSION['AlumAprobado1']++;
        } elseif ($_SESSION['Mprom'] < 10 && $_SESSION['Fprom'] >= 10 && $_SESSION['Pprom'] < 10) {
            $_SESSION['AlumAprobado1']++;
        } elseif ($_SESSION['Mprom'] < 10 && $_SESSION['Fprom'] < 10 && $_SESSION['Pprom'] >= 10) {
            $_SESSION['AlumAprobado1']++;
        }

        if($_SESSION['Mprom'] >= 10 && $_SESSION['Fprom'] >= 10 && $_SESSION['Pprom'] < 10) {
            $_SESSION['AlumAprobado2']++;
        } elseif($_SESSION['Mprom'] >= 10 && $_SESSION['Pprom'] >= 10 && $_SESSION['Fprom'] < 10) {
            $_SESSION['AlumAprobado2']++;
        } elseif($_SESSION['Fprom'] >= 10 && $_SESSION['Pprom'] >= 10 && $_SESSION['Mprom'] < 10) {
            $_SESSION['AlumAprobado2']++;
        }

        if($NotaM1 > $_SESSION['NotaMaxMat']) {
            $_SESSION['NotaMaxMat'] = $NotaM1;
        }

        if($NotaM2 > $_SESSION['NotaMaxMat']) {
            $_SESSION['NotaMaxMat'] = $NotaM2;
        }

        if($NotaM3 > $_SESSION['NotaMaxMat']) {
            $_SESSION['NotaMaxMat'] = $NotaM3;
        }

        if($NotaF1 > $_SESSION['NotaMaxFis']) {
            $_SESSION['NotaMaxFis'] = $NotaF1;
        }

        if($NotaF2 > $_SESSION['NotaMaxFis']) {
            $_SESSION['NotaMaxFis'] = $NotaF2;
        }

        if($NotaF3 > $_SESSION['NotaMaxFis']) {
            $_SESSION['NotaMaxFis'] = $NotaF3;
        }

        if($NotaP1 > $_SESSION['NotaMaxProg']) {
            $_SESSION['NotaMaxProg'] = $NotaP1;
        }

        if($NotaP2 > $_SESSION['NotaMaxProg']) {
            $_SESSION['NotaMaxProg'] = $NotaP2;
        }

        if($NotaP3 > $_SESSION['NotaMaxProg']) {
            $_SESSION['NotaMaxProg'] = $NotaP3;
        }

        echo "<h2>Datos</h2>" .
        "El promedio en Matemáticas es: " . $_SESSION['Mprom'] .
        "<br>" . "El promedio en Física es: " . $_SESSION['Fprom'] .
        "<br>" . "El promedio en Programación es: " . $_SESSION['Pprom'] .
        "<br>" .
        "<br>" . "En Matemáticas aprobaron: " . $_SESSION['MatAprobado'] .
        "<br>" . "En Física aprobaron: " . $_SESSION['FisAprobado'] .
        "<br>" . "En Programación aprobaron: " . $_SESSION['ProgAprobado'] .
        "<br>" .
        "<br>" . "En Matemáticas reprobaron: " . $_SESSION['MatReprobado'] .
        "<br>" . "En Física reprobaron: " . $_SESSION['FisReprobado'] .
        "<br>" . "En Programación reprobaron: " . $_SESSION['ProgReprobado'] .
        "<br>" .
        "<br>" . "Alumnos que aprobaron todas las materias: " . $_SESSION['AlumAprobadoT'] .
        "<br>" . "Alumnos que aprobaron 1 materia: " . $_SESSION['AlumAprobado1'] .
        "<br>" . "Alumnos que aprobaron 2 materias: " . $_SESSION['AlumAprobado2'] .
        "<br>" .
        "<br>" . "La nota más alta en Matemáticas: " . $_SESSION['NotaMaxMat'] .
        "<br>" . "La nota más alta en Física: " . $_SESSION['NotaMaxFis'] .
        "<br>" . "La nota más alta en Programación: " . $_SESSION['NotaMaxProg'];

        echo "<br>" . "<br>" . "<br>" . '<a href="index.php">Volver a ingresar datos</a>';

    } else {
        echo "Por favor, rellene todos los campos." . '<br><br>';
        echo '<a href="index.php">Volver a la pestaña anterior</a>';
    }
}

?>
<?php
    session_start();

    if(!isset($_SESSION['empleados'])){
        $_SESSION['empleados'] = [];
    }

    if(isset($_POST['btn']) && $_POST['btn'] == 'Registro'){

        $nombre = $_POST['txtNombre'];
        $apellido = $_POST['txtApellido'];
        $edad = $_POST['txtEdad'];
        $estadoCivil = $_POST['txtEstadoCivil'];
        $sexo = $_POST['txtSexo'];
        $sueldo = $_POST['txtSueldo'];

        $empleado = [$nombre, $apellido, $edad, $estadoCivil, $sexo, $sueldo];
        $_SESSION['empleados'][] = $empleado;

    }

    if(isset($_POST['B1']) && $_POST['B1'] == 'Total de empleados femeninos'){
        $TOT1 = 0;
        foreach($_SESSION['empleados'] as $empleado){
            if($empleado[4] == 'F'){
                $TOT1++;
            }
        }
        echo "hola";
    }
        

    if(isset($_POST['B2']) && $_POST['B2'] == 'Total de hombres casados que ganan más de 2500Bs'){
        $TOT2 = 0;
        foreach($_SESSION['empleados'] as $empleado){
            if($empleado[3] == 'C' && $empleado[4] == 'M' && $empleado[5] > 2500){
                $TOT2++;
            }
        }
    }

    if(isset($_POST['B3']) && $_POST['B3'] == 'Total de mujeres viudas que ganan más de 1000Bs'){
        $TOT3 = 0;
        foreach($_SESSION['empleados'] as $empleado){
            if($empleado[3] == 'V' && $empleado[4] == 'F' && $empleado[5] > 1000){
                $TOT3++;
            }
        }
    }

    if(isset($_POST['B4']) && $_POST['B4'] == 'Edad promedio de los hombres'){
        $TOT4 = 0;
        $R = 0;
        foreach($_SESSION['empleados'] as $empleado){
            if($empleado[4] == 'M'){
                $TOT4+=$empleado[2];
                $R++;
            }
        }
        if($TOT4 != 0){
            $TOT4=$TOT4/$R;
        }
    }
?>
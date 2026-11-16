<?php
include_once "numeros.php";

if (!isset($_SESSION['saldo'])) {
    $_SESSION['saldo'] = 1000;
}

$mensaje = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $apuesta = $_POST['monto'];
    $numeroElegido = $_POST['Numero'] ?? "";
    $numerosElegidos = $_POST['numeros'] ?? "";
    $tipoElegido = $_POST['tipo_apuesta'];
    $colorElegido = $_POST['color'] ?? "";

    $totalApostado = 0;

    if ($numeroElegido != "") {
        $totalApostado += $apuesta;
    }

    if ($tipoElegido == "par" || $tipoElegido == "impar") {
        $totalApostado += $apuesta;
    }

    if ($tipoElegido == "rojo" || $tipoElegido == "negro") {
        $totalApostado += $apuesta;
    }

    if ($tipoElegido == "caballo" ||
        $tipoElegido == "primeros18" ||
        $tipoElegido == "ultimos18" ||
        $tipoElegido == "primeros12" ||
        $tipoElegido == "segundos12" ||
        $tipoElegido == "ultimos12") {
        $totalApostado += $apuesta;
    }

    if ($apuesta > 0 && $totalApostado <= $_SESSION['saldo']) {

        $rand = array_rand($_SESSION['numeros']);
        $numeroGanador = $_SESSION['numeros'][$rand]['num'];

        if ($numeroElegido != "") {

            if ($numeroElegido == $numeroGanador) {
                $ganancia = $apuesta * 35;
                $_SESSION['saldo'] += $ganancia;

                $mensaje .= "Has acertado el número. Salió $numeroGanador. Ganaste $$ganancia.";

            } else {
                $_SESSION['saldo'] -= $apuesta;

                $mensaje .= "Fallaste el número. Salió $numeroGanador. Perdiste $$apuesta.";
            }
        }


        if ($tipoElegido == "par" || $tipoElegido == "impar") {

            if ($numeroGanador % 2 == 0) {
                $tipoGanador = "par";
            } else {
                $tipoGanador = "impar";
            }

            if ($tipoElegido == $tipoGanador) {
                $ganancia = $apuesta * 2;
                $_SESSION['saldo'] += $ganancia;

                $mensaje .= " Has acertado la apuesta de $tipoElegido. Ganaste $$ganancia.";

            } else {
                $_SESSION['saldo'] -= $apuesta;

                $mensaje .= " Fallaste la apuesta de par/impar. Salió $tipoGanador. Perdiste $$apuesta.";
            }
        }


        if ($tipoElegido == "rojo" || $tipoElegido == "negro") {

            $colorGanador = $_SESSION['numeros'][$rand]['color'] ?? "verde";

            if ($tipoElegido == $colorGanador) {
                $ganancia = $apuesta * 2;
                $_SESSION['saldo'] += $ganancia;

                $mensaje .= " Has acertado el color. Salió $numeroGanador. Ganaste $$ganancia.";

            } else {
                $_SESSION['saldo'] -= $apuesta;

                $mensaje .= " Fallaste el color. Salió $colorGanador. Perdiste $$apuesta.";
            }
        }


        if ($tipoElegido == "caballo") {

            $numeros = explode(",", $numerosElegidos);

            if (in_array($numeroGanador, $numeros)) {
                $ganancia = $apuesta * 17;
                $_SESSION['saldo'] += $ganancia;

                $mensaje .= " Has acertado el caballo. Salió $numeroGanador. Ganaste $$ganancia.";

            } else {
                $_SESSION['saldo'] -= $apuesta;

                $mensaje .= " Fallaste el caballo. Salió $numeroGanador. Perdiste $$apuesta.";
            }
        }

        if ($tipoElegido == "primeros18") {

            if (in_array($numeroGanador, $_SESSION['primeros18'])) {
                $ganancia = $apuesta * 1;
                $_SESSION['saldo'] += $ganancia;

                $mensaje .= " Has acertado el número del 1 al 18. Salió $numeroGanador. Ganaste $$ganancia.";

            } else {
                $_SESSION['saldo'] -= $apuesta;

                $mensaje .= " Fallaste entre los primeros 18. Salió $numeroGanador. Perdiste $$apuesta.";
            }
        }


        if ($tipoElegido == "ultimos18") {

            if (in_array($numeroGanador, $_SESSION['ultimos18'])) {
                $ganancia = $apuesta * 1;
                $_SESSION['saldo'] += $ganancia;

                $mensaje .= " Has acertado el número entre los últimos 18. Salió $numeroGanador. Ganaste $$ganancia.";

            } else {
                $_SESSION['saldo'] -= $apuesta;

                $mensaje .= " Fallaste entre los últimos 18. Salió $numeroGanador. Perdiste $$apuesta.";
            }
        }


        if ($tipoElegido == "primeros12") {

            if ($numeroGanador > 0 && $numeroGanador <= 12) {
                $ganancia = $apuesta * 2;
                $_SESSION['saldo'] += $ganancia;

                $mensaje .= " Has acertado entre los primeros 12. Salió $numeroGanador. Ganaste $$ganancia.";

            } else {
                $_SESSION['saldo'] -= $apuesta;

                $mensaje .= " Fallaste entre los primeros 12. Salió $numeroGanador. Perdiste $$apuesta.";
            }
        }

        if ($tipoElegido == "segundos12") {

            if ($numeroGanador > 12 && $numeroGanador <= 24) {
                $ganancia = $apuesta * 2;
                $_SESSION['saldo'] += $ganancia;

                $mensaje .= " Has acertado entre la segunda docena. Salió $numeroGanador. Ganaste $$ganancia.";

            } else {
                $_SESSION['saldo'] -= $apuesta;

                $mensaje .= " Fallaste entre la segunda docena. Salió $numeroGanador. Perdiste $$apuesta.";
            }
        }


        if ($tipoElegido == "ultimos12") {

            if ($numeroGanador > 24 && $numeroGanador <= 36) {
                $ganancia = $apuesta * 2;
                $_SESSION['saldo'] += $ganancia;

                $mensaje .= " Has acertado entre la última docena. Salió $numeroGanador. Ganaste $$ganancia.";

            } else {
                $_SESSION['saldo'] -= $apuesta;

                $mensaje .= " Fallaste entre la última docena. Salió $numeroGanador. Perdiste $$apuesta.";
            }
        }

    } else {

        $mensaje = "No tienes saldo suficiente o la apuesta no es válida.";
    }

     if ($tipoElegido == "primeracolumna") {

            if (in_array($numeroGanador, $_SESSION['primeracolumna'])) {
                $ganancia = $apuesta * 2;
                $_SESSION['saldo'] += $ganancia;

                $mensaje .= " Has acertado en la primera columna. Salió $numeroGanador. Ganaste $$ganancia.";

            } else {
                $_SESSION['saldo'] -= $apuesta;

                $mensaje .= " Fallaste en la primera columna. Salió $numeroGanador. Perdiste $$apuesta.";
            }
        }

         if ($tipoElegido == "segundacolumna") {

            if (in_array($numeroGanador, $_SESSION['segundacolumna'])) {
                $ganancia = $apuesta * 2;
                $_SESSION['saldo'] += $ganancia;

                $mensaje .= " Has acertado en la segunda columna. Salió $numeroGanador. Ganaste $$ganancia.";

            } else {
                $_SESSION['saldo'] -= $apuesta;

                $mensaje .= " Fallaste en la segunda columna. Salió $numeroGanador. Perdiste $$apuesta.";
            }
        }

         if ($tipoElegido == "terceracolumna") {

            if (in_array($numeroGanador, $_SESSION['terceracolumna'])) {
                $ganancia = $apuesta * 2;
                $_SESSION['saldo'] += $ganancia;

                $mensaje .= " Has acertado en la tercera columna. Salió $numeroGanador. Ganaste $$ganancia.";

            } else {
                $_SESSION['saldo'] -= $apuesta;

                $mensaje .= " Fallaste en la tercera columna. Salió $numeroGanador. Perdiste $$apuesta.";
            }
        }
}

$saldo = $_SESSION['saldo'];

?>
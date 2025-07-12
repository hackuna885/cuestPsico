<?php

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");
date_default_timezone_set('America/Mexico_City');

$id = (isset($_GET['id'])) ? $_GET['id'] : '';

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Citas Atención Psicológica - UTFV</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/animate.min.css" />
    <link rel="stylesheet" href="css/hover.css" />
    <link rel="icon" href="favicon.ico?v=2" type="image/x-icon" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <link href="css/sb-admin-2.css" rel="stylesheet" />
</head>

<body>
    <div class="container" id="app">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <!-- contenido -->

                <!-- contenido -->

                <!-- menu php -->
                <?php
                        switch ($id) {
                            case 'home':
                                include 'assets/inc/home.inc';
                                break;

                            case 'estudiantes':
                                include 'assets/inc/estudiantes.inc';
                                break;

                            case 'docentes':
                                include 'assets/inc/docentes.inc';
                                break;

                            case 'registro':
                                include 'assets/inc/registro.inc';
                                break;
                            
                            default:
                                include 'assets/inc/home.inc';
                                break;
                        }
                    ?>
                <!-- menu php -->

            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/vue.js"></script>
    <script>
        // solo numeros
        // Selecciona todos los elementos que tienen el atributo 'data-input-type' con valor 'numeric'
        const numericInputsData = document.querySelectorAll('[data-input-type="numeric"]');

        numericInputsData.forEach(input => {
            input.addEventListener('input', function (e) {
                this.value = this.value.replace(/[^0-9]/g, '');
            });
        });

        // solo letras
        const textOnlyInputs = document.querySelectorAll('input[data-input-type="texto"]');

        textOnlyInputs.forEach(input => {
            input.addEventListener('input', function (e) {
                this.value = this.value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚñÑüÜ\s]/g, '');
            });
        });

        // solo correo
        // Selecciona todos los elementos <input> que tienen el atributo 'data-input-type' con el valor 'correo'
        const emailInputs = document.querySelectorAll('input[data-input-type="correo"]');
        emailInputs.forEach(input => {
            input.addEventListener('input', function (e) {
                let value = this.value;

                // ates de la @
                value = value.replace(/[^a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/, '');
                // despues de la @
                value = value.replace(/[^a-zA-Z0-9._@\-]/g, '');

                this.value = value;
            });
        });

    </script>

    <script>
        new Vue({
            el: '#app',
            data: {
                selectedDivision: '',
                selectedSpecialty: '',
                divisions: [
                    { value: 'División Académica de Administración', text: 'División Académica de Administración' },
                    { value: 'División Académica de Ciencias de la Salud', text: 'División Académica de Ciencias de la Salud' },
                    { value: 'División Académica de Contabilidad Corporativa', text: 'División Académica de Contabilidad Corporativa' },
                    { value: 'División Académica de Informática', text: 'División Académica de Informática' },
                    { value: 'División Académica de Mantenimiento Industrial y Mecatrónica', text: 'División Académica de Mantenimiento Industrial y Mecatrónica' },
                    { value: 'División Académica de Procesos de Producción', text: 'División Académica de Procesos de Producción' },
                    { value: 'División Académica de Tecnología Ambiental', text: 'División Académica de Tecnología Ambiental' },
                    { value: 'División Académica de Telemática', text: 'División Académica de Telemática' }
                ],
                allSpecialties: {
                    'División Académica de Telemática': [
                        { value: 'Infraestructura de Redes', text: 'Infraestructura de Redes' },
                        { value: 'Redes Inteligentes', text: 'Redes Inteligentes' }
                    ],
                    Tics: [
                        { value: 'Desarrollo de Software', text: 'Desarrollo de Software' }
                    ]
                }
            },
            computed: {
                filteredSpecialties() {
                    return this.allSpecialties[this.selectedDivision] || [];
                }
            },
            watch: {
                // Opcional: Reiniciar la especialidad cuando la división cambia
                selectedDivision(newVal, oldVal) {
                    if (newVal !== oldVal) {
                        this.selectedSpecialty = ''; // Limpia la especialidad cuando cambia la división
                    }
                }
            }
        });
    </script>
</body>

</html>
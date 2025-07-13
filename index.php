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
                    { value: 'División Académica de Tecnología Ambiental', text: 'División Académica de Tecnología Ambiental' },
                    { value: 'División Académica de Telemática', text: 'División Académica de Telemática' }
                ],
                allSpecialties: {
                    'División Académica de Administración': [                        
                        { value: 'T.S.U. en Contaduría', text: 'T.S.U. en Contaduría' },
                        { value: 'T.S.U. en Contaduría, área Finanzas', text: 'T.S.U. en Contaduría, área Finanzas' },
                        { value: 'T.S.U. en Emprendimiento, Formulación y Evaluación de Proyectos', text: 'T.S.U. en Emprendimiento, Formulación y Evaluación de Proyectos' },
                        { value: 'T.S.U. en Gestión de Capital Humano', text: 'T.S.U. en Gestión de Capital Humano' },
                        { value: 'T.S.U. en Administración Área Capital Humano', text: 'T.S.U. en Administración Área Capital Humano' },
                        { value: 'Licenciatura en Gestión de Capital Humano', text: 'Licenciatura en Gestión de Capital Humano' }
                    ],
                    'División Académica de Ciencias de la Salud': [
                        { value: 'T.S.U. en Enfermería', text: 'T.S.U. en Enfermería' },
                        { value: 'T.S.U. en Terapia Física área Rehabilitación', text: 'T.S.U. en Terapia Física área Rehabilitación' },
                        { value: 'Licenciatura en Enfermería', text: 'Licenciatura en Enfermería' },
                        { value: 'Licenciatura en Terapia Física', text: 'Licenciatura en Terapia Física' }
                    ],
                    'División Académica de Contabilidad Corporativa': [
                        { value: 'T.S.U. en Transporte y Movilidad', text: 'T.S.U. en Transporte y Movilidad' },
                        { value: 'T.S.U. en Mercadotecnia', text: 'T.S.U. en Mercadotecnia' },
                        { value: 'T.S.U. en Logística Área Transporte Terrestre', text: 'T.S.U. en Logística Área Transporte Terrestre' },                        
                        { value: 'T.S.U. en Cadena de Suministro', text: 'T.S.U. en Cadena de Suministro' },
                        { value: 'Licenciatura en Contaduría', text: 'Licenciatura en Contaduría' },
                        { value: 'Licenciatura en Innovación de Negocios y Mercadotecnia', text: 'Licenciatura en Innovación de Negocios y Mercadotecnia' }
                    ],
                    'División Académica de Informática': [
                        { value: 'T.S.U. en T.I. Área Desarrollo de Software Multiplataforma', text: 'T.S.U. en T.I. Área Desarrollo de Software Multiplataforma' },
                        { value: 'T.S.U. en Desarrollo de Software Multiplataforma', text: 'T.S.U. en Desarrollo de Software Multiplataforma' },
                        { value: 'Ingeniería en Desarrollo y Gestión de Software', text: 'Ingeniería en Desarrollo y Gestión de Software' }
                    ],
                    'División Académica de Mantenimiento Industrial y Mecatrónica': [
                        { value: 'T.S.U. en Procesos Industriales área Tecnología Gráfica', text: 'T.S.U. en Procesos Industriales área Tecnología Gráfica' },
                        { value: 'T.S.U. en Procesos Industriales Área Automotriz', text: 'T.S.U. en Procesos Industriales Área Automotriz' },
                        { value: 'T.S.U. en Mecatrónica Área Sistemas de Manufactura Flexible', text: 'T.S.U. en Mecatrónica Área Sistemas de Manufactura Flexible' },
                        { value: 'T.S.U. en Mecatrónica', text: 'T.S.U. en Mecatrónica' },
                        { value: 'T.S.U. en Mantenimiento Industrial', text: 'T.S.U. en Mantenimiento Industrial' },
                        { value: 'T.S.U. en Mantenimiento área Industrial', text: 'T.S.U. en Mantenimiento área Industrial' },
                        { value: 'T.S.U. en Automotriz', text: 'T.S.U. en Automotriz' },
                        { value: 'T.S.U. en Desarrollo de Negocios Área Mercadotecnia', text: 'T.S.U. en Desarrollo de Negocios Área Mercadotecnia' },
                        { value: 'Ingeniería en Mantenimiento Industrial', text: 'Ingeniería en Mantenimiento Industrial' },
                        { value: 'Ingeniería en Mecatrónica', text: 'Ingeniería en Mecatrónica' },
                        { value: 'Ingeniería en Sistemas Productivos', text: 'Ingeniería en Sistemas Productivos' }
                    ],
                    'División Académica de Tecnología Ambiental': [
                        { value: 'T.S.U. en Química Área Tecnología Ambiental', text: 'T.S.U. en Química Área Tecnología Ambiental' },
                        { value: 'T.S.U. en Nanotecnología Área Materiales', text: 'T.S.U. en Nanotecnología Área Materiales' },
                        { value: 'T.S.U. en Nanotecnología', text: 'T.S.U. en Nanotecnología' },
                        { value: 'T.S.U. en Gestión Ambiental', text: 'T.S.U. en Gestión Ambiental' },
                        { value: 'T.S.U. en Energías Renovables Área Energía Solar', text: 'T.S.U. en Energías Renovables Área Energía Solar' },
                        { value: 'T.S.U. en Biotecnología', text: 'T.S.U. en Biotecnología' },
                        { value: 'Ingeniería en Energías Renovables', text: 'Ingeniería en Energías Renovables' },
                        { value: 'Ingeniería en Nanotecnología', text: 'Ingeniería en Nanotecnología' },
                        { value: 'Ingeniería en Tecnología Ambiental', text: 'Ingeniería en Tecnología Ambiental' }
                    ],
                    'División Académica de Telemática': [
                        { value: 'T.S.U. en T.I. Área Infraestructura de Redes Digitales', text: 'T.S.U. en T.I. Área Infraestructura de Redes Digitales' },
                        { value: 'T.S.U. en Infraestructura de Redes Digitales', text: 'T.S.U. en Infraestructura de Redes Digitales' },
                        { value: 'T.S.U. en Diseño y Animación Digital', text: 'T.S.U. en Diseño y Animación Digital' },
                        { value: 'T.S.U. en Diseño Digital Área Animación', text: 'T.S.U. en Diseño Digital Área Animación' },
                        { value: 'Licenciatura en Diseño Digital y Producción Audiovisual', text: 'Licenciatura en Diseño Digital y Producción Audiovisual' },
                        { value: 'Ingeniería en Redes Inteligentes y Ciberseguridad', text: 'Ingeniería en Redes Inteligentes y Ciberseguridad' }
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
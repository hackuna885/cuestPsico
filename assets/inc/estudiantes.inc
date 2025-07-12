<div class="card border-0 shadow-lg">
    <div class="card-body p-0">
        <div class="row">

            <div class="col-md-12 d-md-block animate__animated animate__fadeIn">
                <div class="col-md-8 mx-auto">
                    <div class="my-3">
                        <div class="my-3">
                            <div class="mx-auto text-center">
                                <img src="img/estudiante.jpg" class="img-fluid" style="width: 350px;">
                            </div>
                            <h1 class="text-center h2">
                                Estudiantes
                            </h1>
                            <br>
                            <p class="text-justify">
                                Los paciente de primera vez, deberán registrarse en
                                la plataforma con los siguientes datos, para crear una
                                cuenta en la plataforma, y de esta manera estar
                                gestionando sus citas de seguimiento con su terapeuta
                                asignado.
                            </p>
                            <br>
                            <!-- formulario -->
                            <h3>Datos del estudiante</h3>
                            <br>
                            <form action="" class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="matricula"
                                            placeholder="Matrícula" pattern="[0-9]{10}" maxlength="12" data-input-type="numeric" required>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <input type="email" class="form-control form-control-user" id="correo"
                                            placeholder="Correo Institucional (@utfv.edu.mx)" data-input-type="correo" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-3">
                                        <input type="text" class="form-control form-control-user" id="nombre" placeholder="Nombre" data-input-type="texto" required>
                                    </div>
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-6 mb-3">
                                        <input type="text" class="form-control form-control-user" id="aPaterno" placeholder="Apellido Paterno" data-input-type="texto" required>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <input type="text" class="form-control form-control-user" id="aMaterno"
                                            placeholder="Apellido Materno" data-input-type="texto" required>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Fecha de nacimiento:</label>
                                        <input type="date" class="form-control form-control-user" id="fecha"
                                            placeholder="Fecha de nacimiento" maxlength="10" required>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Teléfono personal:</label>
                                        <input type="text" class="form-control form-control-user" id="telefono"
                                            placeholder="Teléfono" pattern="[0-9]{10}" data-input-type="numeric" maxlength="10"required>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">División Académica:</label>
                                        <!-- <select class="form-control custom-select">
                                            <option value="Redes">Redes</option>
                                            <option value="Tics">Tics</option>
                                        </select> -->
                                        <select class="form-control custom-select" v-model="selectedDivision">
                                            <option value="">Selecciona una división</option>
                                            <option v-for="division in divisions" :key="division.value" :value="division.value">
                                                {{ division.text }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-12 mb-3">
                                        <label class="form-label">Programa Educativo:</label>
                                        <select class="form-control custom-select" v-model="selectedSpecialty" :disabled="!selectedDivision">
                                            <option value="">Selecciona una especialidad</option>
                                            <option v-for="specialty in filteredSpecialties" :key="specialty.value" :value="specialty.value">
                                                {{ specialty.text }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                            <!-- formulario -->
                            <br>
                            <div class="row justify-content-center">
                                <div class="col-md-6 my-3">
                                    <a href="menu.aspx?id=registro" class="btn btn-secondary btn-lg btn-block">
                                        <span class="icon">
                                            <i class="fas fas fa-arrow-left"></i> Regresar
                                        </span>
                                    </a>
                                </div>
                                <div class="col-md-6 my-3">
                                    <a href="#" class="btn btn-success btn-lg btn-block">
                                        <span class="icon">
                                            <i class="fas fas fa-arrow-right"></i> Continuar
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
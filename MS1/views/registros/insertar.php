<link rel="stylesheet" href="../../public/assets/vendors/feather/feather.css">
<link rel="stylesheet" href="../../public/assets/vendors/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="../../public/assets/vendors/ti-icons/css/themify-icons.css">
<link rel="stylesheet" href="../../public/assets/vendors/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../../public/assets/vendors/typicons/typicons.css">
<link rel="stylesheet" href="../../public/assets/vendors/simple-line-icons/css/simple-line-icons.css">
<link rel="stylesheet" href="../../public/assets/vendors/css/vendor.bundle.base.css">
<link rel="stylesheet" href="../../public/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
<!-- endinject -->
<!-- Plugin css for this page -->
<link rel="stylesheet" href="../../public/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
<link rel="stylesheet" type="text/css" href="../../public/assets/js/select.dataTables.min.css">
<!-- End plugin css for this page -->
<!-- inject:css -->
<link rel="stylesheet" href="../../public/assets/css/style.css">
<!-- endinject -->
<link rel="shortcut icon" href="../../public/assets/images/favicon.png" />



<div class="card-body">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Nuevo Registro</h4>
                <p class="card-description"> Registro </p>
                <form class="forms-sample">
                    <input type="hidden" name="RegistrId" id="RegistrId">
                    <div class="form-group">
                        <label for="TipoDocumento">Tipo de Documento</label>
                        <select class="form-control" id="TipoDocumento" name="TipoDocumento">
                            <option>Seleccionar</option>
                            <option>Cedula</option>
                            <option>Pasaporte</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Cedula">Cedula o Pasaporte</label>
                        <input type="text" class="form-control" id="Cedula" name="Cedula" placeholder="Ingrese su documento de identidad">
                    </div>
                    <div class="form-group">
                        <label for="Nombres">Nombres</label>
                        <input type="text" class="form-control" id="Nombres" name="Nombres" placeholder="Telefono">
                    </div>
                    <div class="form-group">
                        <label for="Apellidos">Apellidos</label>
                        <input type="text" class="form-control" id="Apellidos" name="Apellidos" placeholder="Telefono">
                    </div>

                    <div class="form-group">
                        <label for="PaisId">Pais</label>
                        <select class="form-control" id="PaisId" name="PaisId" onchange="ciudad()">
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="CiudadId">Ciudad</label>
                        <select class="form-control" id="CiudadId" name="CiudadId">

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Telefono">Telefono</label>
                        <input type="text" class="form-control" id="Telefono" name="Telefono" placeholder="Telefono">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Guardar</button>
                    <a class="btn btn-light" href="./resgistros.php">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</div>






<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script src="./registro.js"></script>
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


<div class="row flex-grow">
    <a type="button" class="btn btn-primary" href="./insertar.php">Nuevo</a>
</div>
<div class="card-body">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Pais</th>
                <th>Ciudad</th>
                <th>Telefono</th>s
                <th></th>
            </tr>
        </thead>
        <tbody id="registros"></tbody>
    </table>
</div>






<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script src="./registro.js"></script>
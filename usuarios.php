<?php
include("include/header.php");

?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?php echo $paginaActual ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"> <?= $paginaActual ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="content ">
        <table class="table table-striped py-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Id</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Pasword</th>
                    <th scope="col">Fecha Alta</th>
                    <th scope="col">Fecha Accion</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>
                        <a href="" class="btn btn-warning"><i classs="fas fa-edit"></i>Editar</a>
                        <a href="" class="btn btn-danger"><i classs="fas fa-edit">Eliminar</i></a>
                    </td>
                   
                </tr>
             
            </tbody>
        </table>


    </div>
    <!-- /.content -->
</div>

<?php
include("include/footer.php") ?>

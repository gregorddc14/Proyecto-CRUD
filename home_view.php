<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Trabajadores</title>
</head>
<body>
    <h1 class="bg-dark text-white text-center">Listados de Trabajadores</h1>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="bg-primary d-flex justify-content-between align-itens-center py-2 px-3">
                        <h4 class="card-title text-white m-0"> Crear Trabajador</h4>
                        <button type="button" class="btn-close d-none" aria-label="Close"></button>
                    </div>

                    <div class="card-body insert-alert">
                        <form id="frmEmployee">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
                            </div>
                            <div class="mb-3">
                                <label for="lastname" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="lastname" lastname="lastname" placeholder="Apellido">
                            </div>
                            <div class="mb-3">
                                <label for="position" class="form-label">Cargo</label>
                                <input type="text" class="form-control" id="position" position="position" placeholder="Cargo">
                            </div>
                            <div class="mb-3">
                                <label for="salary" class="form-label">Salario</label>
                                <input type="number" class="form-control" id="salary" salary="salary" min= "0" placeholder="Salario">
                            </div>
                            <button class="btn btn-primary w-100 fw-bold text-uppercase">Crear Trabajador</button>
                        </form>  
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <h4 class="card-title bg-primary text-center m-0 py-2 text-white ">Listado de Trabajador</h4>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped align-middle">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Cargo</th>
                                        <th>Salario</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Carlos</td>
                                        <td>Gonzales</td>
                                        <td>Programador</td>
                                        <td>20.000</td>
                                        <td>
                                            <button class="btn btn-info btn-sm " type="button">Editar</i></button>
                                            <button class="btn btn-danger btn-sm" type="button">Eliminar</i></button>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                     </div>
                </div>
            </div>
           
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="/assets/js/app.js"></script>
</body>
</html>
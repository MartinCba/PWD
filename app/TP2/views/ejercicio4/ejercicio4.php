<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PWD</title>
</head>

<body>
    <?php
    include_once("../assets/structure/header.php");
    ?>
    <div class="container card-container d-flex justify-content-center align-items-center" style="height: 80vh">
        <div class="card text-start bg-dark text-light" style="width: 64rem;">
            <div class="card-header">
                <h3 class="text-warning">Cinem@s</h3>
            </div>
            <div class="card-body">
                <form name="ejercicio4" method="post" action="action.php" class="row g-3 needs-validation" novalidate>
                    <div class="col-md-6">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título..." required>
                        <div class="invalid-feedback">
                            Por favor, ingresá el título.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="actores" class="form-label">Actores</label>
                        <input type="text" class="form-control" name="actores" id="actores" placeholder="Actores..." required>
                        <div class="invalid-feedback">
                            Por favor, ingresá los actores.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="director" class="form-label">Director</label>
                        <input type="text" class="form-control" name="director" id="director" placeholder="Director..." required>
                        <div class="invalid-feedback">
                            Por favor, ingresá el director.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="guion" class="form-label">Guion</label>
                        <input type="text" class="form-control" name="guion" id="guion" placeholder="Guion..." required>
                        <div class="invalid-feedback">
                            Por favor, ingresá el guion.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="produccion" class="form-label">Producción</label>
                        <input type="text" class="form-control" name="produccion" id="produccion" placeholder="Producción..." required>
                        <div class="invalid-feedback">
                            Por favor, ingresá la producción.
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="anio" class="form-label">Año</label>
                        <input type="number" class="form-control" name="anio" id="anio" placeholder="Año..." required>
                        <div class="invalid-feedback">
                            Por favor, ingresá el año.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="nacionalidad" class="form-label">Nacionalidad</label>
                        <input type="text" class="form-control" name="nacionalidad" id="nacionalidad" placeholder="Nacionalidad..." required>
                        <div class="invalid-feedback">
                            Por favor, ingresá la nacionalidad.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="genero" class="form-label">Seleccioná el genero:</label>
                        <select class="form-select form-control" id="genero" name="genero" aria-label="Default select example">
                            <option value="comedia" selected>Comedia</option>
                            <option value="drama">Drama</option>
                            <option value="terror">Terror</option>
                            <option value="romance">Romance</option>
                            <option value="suspenso">Suspenso</option>
                            <option value="otro">otro</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="duracion" class="form-label">Duración</label>
                        <input type="number" class="form-control" name="duracion" id="duracion" placeholder="Minutos..." required>
                        <div class="invalid-feedback">
                            Por favor, ingresá la duración.
                        </div>
                    </div>
                    <div class="col-8">
                        <p>Restrincciones de edad</p>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="edad" id="edad1" value="todo publico">
                            <label class="form-check-label" for="edad1">
                                Todo público
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="edad" id="edad2" value="menores">
                            <label class="form-check-label" for="edad2">
                                Mayores de 7 años
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="edad" id="edad3" value="mayores">
                            <label class="form-check-label" for="edad3">
                                Mayores de 18 años
                            </label>
                        </div>
                        <div class="invalid-feedback">
                            Por favor, seleccioná la edad.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="sinopsis" class="form-label">Sinopsis</label>
                        <textarea class="form-control" name="sinopsis" id="sinopsis" rows="4" placeholder="Escribe la sinopsis aquí..." required></textarea>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-warning me-2">Enviar</button>
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    include_once("../assets/structure/footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/jqueryE4.js"></script>
</body>

</html>
<!-- 
    tp2 ejercicio 4
    Diseñar un formulario que permita cargar las películas de la empresa Cinem@s. La lista géneros
    tiene los siguientes datos: Comedia, Drama, Terror, Románticas, Suspenso, Otras. 
-->
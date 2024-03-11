<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHAREBITES</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="../resources/css/register.css">
    <style>
        /* Estilos personalizados adicionales si es necesario */
    </style>
</head>
<body>

    <!-- HEADER -->
    <div class="header text-center mt-5">
        <h1 class="title">SHARE<span class="amarillo">BITES</span></h1>
        <img src="../resources/img/icon_white.svg" alt="Logo" class="logo">
    </div>
    <!-- HEADER -->

    <!-- LOGIN DIV -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- LOGIN FORM -->
                <form class="login_div">
                    <!-- INPUTS -->
                    <div class="inputs">

                        <!-- INPUT TIENDA -->
                        <div class="input-wrapper mb-3">
                            <div class="input-label">
                                <img class="icons_login" src="../resources/img/tienda.png" alt="user_icon">
                                <h2 class="subtitle">NOMBRE DE LA TIENDA</h2>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                        <!-- INPUT TIENDA -->

                        <!-- INPUT CATEGORIA -->
                        <div class="input-wrapper mb-3">
                            <div class="input-label">
                                <!-- <img class="icons_login" src="../resources/img/tienda.png" alt="lock_icon"> -->
                                <h2 class="subtitle">CATEGORIA</h2>
                            </div>
                        <select id="categoria" name="categoria" class="form-control"  placeholder="Selecciona una categoría">
                            <option value="restaurante">Restaurante</option>
                            <option value="panaderia">Panadería</option>
                            <option value="supermercado">Supermercado</option>
                        </select>
                        </div>
                        <!-- INPUT CATEGORIA -->


                        <!-- INPUT DIRECCIÓN -->
                            <div class="input-wrapper mb-3">
                            <div class="input-label">
                                <img class="icons_login" src="../resources/img/ubicacion.png" alt="lock_icon">
                                <h2 class="subtitle">DIRECCIÓN</h2>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                        <!-- INPUT DIRECCIÓN -->

                        <!-- INPUT HORARIO -->
                            <div class="input-wrapper mb-3">
                            <div class="input-label">
                                <img class="icons_login" src="../resources/img/horarios.png" alt="lock_icon">
                                <h2 class="subtitle">HORARIO</h2>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                        <!-- INPUT HORARIO -->

                    </div>
                    <!-- INPUTS -->

                    <!-- BOTONES -->
                    <div class="mb-3">
                        <button type="button" class="btn btn-secondary btn-block" id="register_btn">REGISTER</button>
                        <button type="submit" class="btn btn-primary btn-block" id="login_btn">LOGIN</button>
                    </div>
                    <!-- BOTONES -->

                </form>
                <!-- LOGIN FORM -->
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
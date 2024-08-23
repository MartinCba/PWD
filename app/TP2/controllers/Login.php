<?php

class Login
{
    /**
     * Recibe datos, verifica si el usuario y contraseña coinciden con
     * una cuenta real
     */
    public function verificar($usuario, $password)
    {
        $usuarios = [];
        $usuarios["user"] = ["pedro", "juan", "martin"];
        $usuarios["clave"] = ["Pedro1234", "Juan1234", "Martin1234"];

        $login_exitoso = false;

        // Verificar si el usuario y la contraseña son correctos
        foreach ($usuarios["user"] as $key => $user) {
            if ($user === $usuario && $usuarios["clave"][$key] === $password) {
                $login_exitoso = true;
                break;
            }
        }

        // Mostrar mensaje de acuerdo al resultado de la verificación
        if ($login_exitoso) {
            $msj = "Login exitoso. Bienvenido, " . $usuario . "!!";
        } else {
            $msj = "Usuario o contraseña incorrectos.";
        }

        return $msj;
    }
}

<?php 
class Usuario
{
    private $_nombre;
    private $_clave;
    private $_mail;

    function getNombre(){
        return $this->_nombre;
    }

    function getClave(){
        return $this->_clave;
    }

    function getMail(){
        return $this->_mail;
    }

    public function __construct($nombre, $clave, $mail)
    {
        if (is_string($nombre)){
            $this->_nombre = $nombre;
        }
        $this->_clave = $clave;
        $this->_mail = $mail;
    }

    public static function AltaUsuario($usuario){
        $alta = false;
        $archivo = fopen("usuarios.csv", "a");
        if (is_a($usuario, "Usuario")){            
            $datos = fputcsv($archivo, get_object_vars($usuario));
            if ($datos){
                $alta = true;
            }
        }
        fclose($archivo);
        return $alta;
    }

    public static function LecturaUsuarios(){
        try{
            $arrayDeUsuarios = array();
            if (file_exists("usuarios.csv")){
                $archivo = fopen("usuarios.csv", "r");
                while(!feof($archivo)){
                    $datos = fgetcsv($archivo, filesize("usuarios.csv"));
                    if ($datos != false && $datos != null){
                        array_push($arrayDeUsuarios, implode('-', $datos));
                    }
                }
                fclose($archivo);                
            }
        }catch(Exception $e){
        }finally{
            return $arrayDeUsuarios;
        }
    }

    public static function EsUnUsuarioRegistrado($mail, $clave)
    {
        $arrayDeUsuarios = Usuario::LecturaUsuarios();
        $retorno = "";
        foreach($arrayDeUsuarios as $usuario)
        {
            if($usuario->getMail() == $mail)
            {
                $retorno = "Error en los datos";
                if($usuario->getClave() == $clave)
                {
                    $retorno = "Verificado";
                }
            }
            else
            {
                $retorno = "Usuario no registrado";
            }
            return $retorno;
        }
    }

    public static function MostrarUsuario($usuario){
        if (is_a($usuario, "Usuario")){
            return "Nombre " . $usuario->_nombre 
            . ", Clave " . $usuario->_clave
            . ", Mail" . $usuario->_mail;
        }
    }

    //valido que sea un usuario y el mismo mail.
    public function Equals($usuario)
    {
        return is_a($usuario, "Usuario") && $this->_mail = $usuario->mail;
    }
}

?>
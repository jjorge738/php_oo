<?php namespace Controllers;

    use Models\Estudiante as Estudiante;
    use Models\Seccion as Seccion;

    class estudiantesController{

        private $estudiante;
        private $seccion;

        public function __construct(){
            $this->estudiante = new Estudiante();
            $this->seccion = new Seccion();

        }
        public function index(){
            //print "Hola soy el Index de Estudiantes";
             $datos = $this->estudiante->Listar();
             return $datos;
        }
        public function agregar(){
            if(!$_POST){
                $datos = $this->seccion ->Listar();
                return $datos;
            }else{
                $est_img_validas = array("image/jpeg","image/png","image/gif","image/jpg");
                $est_img_limite = 700;
                if(in_array($_FILES['est_imagen']['type'],$est_img_validas) && $_FILES['est_imagen']['size'] <= $est_img_limite * 1024){
                    
                    $est_img_ruta = ROOT."Views".DS."template".DS."images".DS."avatars";
                    $est_img_rut_http = URL."Views".DS."template".DS."images".DS."avatars";
                    $est_imagen = date('is').$_FILES['est_imagen']['name'];
                    
                    // Importar la imagen
                    move_uploaded_file($_FILES['est_imagen']['tmp_name'],$est_img_ruta.DS.$est_imagen);
                    
                    $this->estudiante->set("nombre",$_POST['est_nombre']);
                    $this->estudiante->set("edad",$_POST['est_edad']);
                    $this->estudiante->set("promedio",$_POST['est_promedio']);
                    $this->estudiante->set("imagen",$est_img_rut_http.DS.$est_imagen);
                    $this->estudiante->set("id_seccion",$_POST['est_id_seccion']);
                    $this->estudiante->add();
                    header("Location:" . URL);
                }
            }
        }

    }

    //$estudiantes = new estudiantesController();
?>
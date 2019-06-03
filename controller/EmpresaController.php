 <?php
 require_once "./model/EmpresaModel.php";
 require_once "./view/EmpresaView.php";
 //require_once  "SecuredController.php";

 class EmpresaController //extends SecuredController
 {
   private $view;
   private $model;
   private $Titulo;

   function __construct()
   {
     //parent::__construct();

     $this->model = new EmpresaModel();
     $this->view = new EmpresaView();
   }

   function Home(){
     $datos = $this->model->GetEstanteria();
     //$denuncias = $this->model->GetDenuncias(1);
     $this->view->MostrarHome($datos);
   }

   function GetPosLibres(){
     $fecha = $_POST["FechaForm"];
     $datos = $this->model->GetPosLibres($fecha);
     //$denuncias = $this->model->GetDenuncias(1);
     $this->view->MostrarPosLibres($datos);
   }
   function Get10Clientes(){
     $datos = $this->model->Get10Clientes();
     $this->view->Mostrar10Clientes($datos);
   }
   function GetAlquileresEnVencimiento(){
     $fecha = $_POST["FechaForm"];
     $datos = $this->model->GetAlquileresEnVencimiento($fecha);
     //$denuncias = $this->model->GetDenuncias(1);
     $this->view->MostrarAlquileresEnVencimiento($datos);
   }



   function InsertarDenuncia(){ // Esta funcion toma los datos del formulario y se las envia al model
     $longitud = $_POST["longitudForm"];
     $latitud = $_POST["latitudForm"];
     $descripcion = $_POST["descripcionForm"];
     $estado = 0;
     //$imagen = $_POST["imagenForm"];
     $id_usuario = 1;
     $this->model->GuardarDenuncia($longitud,$latitud,$descripcion,$estado,$id_usuario);
    header(formulario);
    }


  //todo esto de insertar la imagen lo saque para poder porbar que esto ande, en un futuro se implementara





 // //como subir la imagen --->   func
 // //tion postImagen($param){
 //  //    $id_producto= $_POST['idForm'];
 //    //  $name= uniqid();
 //    //  $ruta =$_FILES['imagen']['tmp_name'];
 //      //$type = $_FILES['imagen']['type'];
 //      //$arrayType= explode("/",$type);
 //    //  $destino ='images/'.$name.".".$arrayType[1];
 //
 //    //  move_uploaded_file($ruta,$destino);
 //    //  $this->model->postImagen($name,$destino,$param[0]);
 //
 ////*    }
 //  $this->model->GuardarDenuncia($ubicacion,$descripcion,$estado,$imagen,$id_usuario);




 function mostrarFormulario(){ //lleva al usuario al formulario para crear una nueva denuncia
   $this->view->MostrarFormulario($this->Titulo);
 }




 }

 ?>

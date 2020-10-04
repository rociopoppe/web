controler

function EditarMarca($param){
            $id_marca = $param[0];
            $Marca = $this->model->GetMarca($id_marca);
            $this->view->MostrarEditarMarca("Editar Marca", $Marca);
        }


        function GuardarEditarMarca(){
    $id_marca = $_POST["idForm"];
    $nombre = $_POST["nombreForm"];
    $site_url = $_POST["site_urlForm"];
    $email = $_POST["emailForm"];
    $this->model->GuardarEditarMarca($id_marca,$nombre,$site_url,$email);

    header(ADMIN);
  }

modelo

function GetMarca($id){

$sentencia = $this->db->prepare( "select * from marca where id_marca=?");
$sentencia->execute(array($id));
return $sentencia->fetch(PDO::FETCH_ASSOC);
}
function GuardarEditarMarca($id,$nombre,$site_url,$email){
    $sentencia = $this->db->prepare( "update marca set nombre = ?, site_url = ?, email = ? where id_marca=?");
    $sentencia->execute(array($nombre,$site_url,$email,$id));
  }

template EditarMarca

<h1>{$Titulo}</h1>


<div class="container">
  <h2>Formulario</h2>
  <form method="post" action="{$Home}/guardarEditarMarca">
    <input type="hidden" class="form-control" id="idForm" name="idForm" value="{$Marca["id_marca"]}">
    <div class="form-group">
      <label for="nombreForm">Nombre</label>
      <input type="text" class="form-control" id="nombreForm" name="nombreForm" value="{$Marca["nombre"]}">
    </div>
    <div class="form-group">
      <label for="site_urlForm">siteurl</label>
      <input type="text" class="form-control" id="site_urlForm" name="site_urlForm" value="{$Marca["site_url"]}">
    </div>
    <div class="form-group">
      <label for="emailForm">Email</label>
      <input type="text" class="form-control" id="emailForm" name="emailForm" value="{$Marca["email"]}">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
</div>

vista

function MostrarEditarMarca($Titulo, $Marca){

$this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
$this->Smarty->assign('Marca',$Marca);
$this->Smarty->assign('Home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

//$smarty->debugging = true;
$this->Smarty->display('templates/MostrarEditarMarca.tpl');
}









  mostrar en datalle
  <h1>{$Titulo}</h1>


<div class="container">
  <h2>Detalle</h2>
  <form>
    <div class="form-group">
      <label for="nombreForm">Nombre</label>
      <input type="text" class="form-control" id="nombreForm" name="nombreForm" value="{$Marca["nombre"]}" readonly="readonly">
    </div>
    <div class="form-group">
      <label for="site_urlForm">siteurl</label>
      <input type="text" class="form-control" id="site_urlForm" name="site_urlForm" value="{$Marca["site_url"]}" readonly="readonly">
    </div>
    <div class="form-group">
      <label for="emailForm">Email</label>
      <input type="text" class="form-control" id="emailForm" name="emailForm" value="{$Marca["email"]}" readonly="readonly">
    </div>
  </form>
</div>
{include file="footer.tpl"}
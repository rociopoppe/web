{include file="header.tpl"}


 {foreach from=$productos item=producto}
            <li class="list-group-item list-group-item-primary formprod">{$producto->nombre}</li>
            <div class="btnsXprod">
                <button type="button" class="btn btn-outline-info"><a href="productos/vermas/{$producto->nombre}">Ver descripción</a></button>
                <button type="button" class="btn btn-outline-dark" id="{$producto->id}"><a href="productos/editar/{$producto->id}">Editar</a></button>
                <button type="button" class="btn btn-outline-danger"><a href="productos/borrar/{$producto->id}">Borrar</a></button> 
            </div>
        {/foreach}


<form  action="editar" method="POST">
  <div class="form-column align-items-center">
  {foreach from=$productos item=producto}
      <div class="col-auto">
        <label for="nombre">Nombre del producto</label>
        <input type="text" class="form-control" id="nombre" name="nombre">{$producto->nombre}
      </div>
      <div class="col-auto">
        <label for="descripcion">Descripción</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" >
      </div>
      <div class="col-auto">
        <label for="precio">Precio</label>
        <input type="number" class="form-control" id="precio" name="precio" >
      </div>
      <div class="col-auto">
        <label for="cantidad">Cantidad</label>
        <input type="number" class="form-control" id="cantidad"  name="cantidad">
      </div>
      <div class="col-auto">
        <label for="categorias">Categoria</label>
           <select class="form-control" name="id_categoria">
            <option value="">Elegi...</option>
            <option  value="{$producto->id_categoria}">Helados</option>
            <option  value="{$producto->id_categoria}">Postres</option>
            <option value="{$producto->id_categoria}">Cafe</option>
          </select>
      </div>
      {/foreach}
  <div class="col-auto">
        <button type="submit" class="form-control btn btn-primary">Guardar cambios</button>
    </div>
    </div>  

  </form>

  {include file="footer.tpl"} 
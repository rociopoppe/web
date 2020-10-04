{include file="header.tpl"}
  

<form  action="/tpeweb/productos/update/{$producto->id}" method="POST">
  <div class="form-column align-items-center">
      <div class="col-auto">
        <label for="nombre">Nombre del producto</label>             
        <input type="text" class="form-control" id="nombre" name="nombreedit"  value="{$producto->nombre}">
      </div>
      <div class="col-auto">
        <label for="descripcion">Descripción</label>
        <input type="text" class="form-control" id="descripcion" name="descripcionedit" value="{$producto->descripcion}">
      </div>
      <div class="col-auto">
        <label for="precio">Precio</label>
        <input type="number" class="form-control" id="precio" name="precioedit" value="{$producto->precio}">
      </div>
      <div class="col-auto">
        <label for="cantidad">Cantidad</label>
        <input type="number" class="form-control" id="cantidad"  name="cantidadedit" value="{$producto->cantidad}">
      </div>
      <div class="col-auto">
        <label for="categorias">Categoria</label>
        
            <select class="form-control" name="id_categoriaedit" value="{$producto->id_categoria}">
              {foreach from=$categorias item=categoria}
               <option value="{$categoria->id_categoria}">{$categoria->descripcion}</option>
              {/foreach}
            
          </select>
          
      </div>
  <div class="col-auto">
        <button type="submit" class="form-control btn btn-primary">Guardar cambios</button>
    </div>
    </div>  

  </form>

  {include file="footer.tpl"} 
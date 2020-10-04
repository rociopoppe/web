
<h1>Buscá nuestros productos por categoría</h1>

<form  action="buscarXCategoria" method="POST">
  <div class="form-column align-items-center">
      <div class="col-auto">
        <label for="categorias">Categoria</label>
            <select class="form-control" name="categoriaABuscar" >
              {foreach from=$categorias item=categoria}
               <option value="{$categoria->id_categoria}">{$categoria->descripcion}</option>
              {/foreach}
                  {foreach from=$marks item=mark}
            <option value="{$mark->id_marca}">{$mark->marca}</option>
        {/foreach}
          </select>
          
      </div>
  <div class="col-auto">
        <button type="submit" class="form-control btn btn-primary">Buscar</button>
    </div>
    </div>  

</form>
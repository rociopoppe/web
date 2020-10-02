{include file="header.tpl"}
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modificar Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">-->
                     <form  action="editar/id" method="POST">
                        <div class="form-column align-items-center">
                          <div class="col-auto">
                            <label for="nombre">Nombre del producto</label>
                            <input type="text" class="form-control" id="nombremod" name="nombre" value="{$producto->nombre}">
                          </div>
                        <div class="col-auto">
                          <label for="descripcion">Descripción</label>
                          <input type="text" class="form-control" id="descripcionmod" name="descripcio" value={$producto->descripcion}>
                        </div>
                        <div class="col-auto">
                          <label for="precio">Precio</label>
                          <input type="number" class="form-control" id="preciomod" name="precio" value={$producto->precio}>
                        </div>
                        <div class="col-auto">
                          <label for="cantidad">Cantidad</label>
                          <input type="number" class="form-control" id="cantidadmod"  name="cantidad" value="{$producto->cantidad}">
                        </div>
                        <div class="col-auto">
                          <label for="categorias">Categoria</label>
                            <select class="form-control" name="id_categoria" value={$producto->categoria}>
                              <option value=""></option>
                              <option  value="9">Helados</option>
                              <option  value="2">Postres</option>
                              <option value="3">Cafe</option>
                            </select>
                        </div>
                   
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button id="button-modificar" type="button">Cargar datos</button> 
                </div> </form>
                <!--
            </div>
            </div>
        </div>-->

        {include file="footer.tpl"} 
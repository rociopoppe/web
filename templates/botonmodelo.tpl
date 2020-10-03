

<!-- Modal -->
<div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Contact Form</h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form  action="productos/editar" method="POST">
                  <div class="form-column align-items-center">
                      <div class="col-auto">
                        <label for="nombre">Nombre del producto</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder={$producto->nombre}>
                      </div>
                      <div class="col-auto">
                        <label for="descripcion">Descripción</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder={$producto->descripcion}>
                      </div>
                      <div class="col-auto">
                        <label for="precio">Precio</label>
                        <input type="number" class="form-control" id="precio" name="precio" placeholder={$producto->precio}>
                      </div>
                      <div class="col-auto">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" class="form-control" id="cantidad"  name="cantidad" placeholder={$producto->cantidad}>
                      </div>
                      <div class="col-auto">
                        <label for="categorias">Categoria</label>
                          <select class="form-control" name="id_categoria">
                            <option value="">{$producto->id_categoria}</option>
                            <option  value="1">Helados</option>
                            <option  value="2">Postres</option>
                            <option value="3">Cafe</option>
                          </select>
                      </div>
                  <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="submitContactForm()">SUBMIT</button>
            </div>
                    </div>  

                  </form>
            </div>
            
            <!-- Modal Footer -->
            
        </div>
    </div>
</div>
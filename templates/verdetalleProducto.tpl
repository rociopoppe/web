 {include 'header.tpl'}
<table class="table table-dark" >
  <thead>
    <tr>
      <th scope="col">PRODUCTO</th>
      <th scope="col">DESCRIPCION</th>
      <th scope="col">PRECIO</th>
      <th scope="col">CANTIDAD</th>
      <th scope="col">CATEGORIA</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{$producto->nombre}</td>
      <td>{$producto->descripcion}</td>
      <td>{$producto->precio}</td>
      <td>{$producto->cantidad}</td>
      <td>{$categoria->descripcion}</td>
    </tr>
  </tbody>
</table>

        <h1>LA RUTA ESTA HARDCODEADA</h1>
        <a href="/tpeweb/productos">volver</a>

  

    {include file='footer.tpl'}

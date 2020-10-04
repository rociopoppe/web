{include file="header.tpl"
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
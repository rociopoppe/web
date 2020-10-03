{include file="header.tpl"}

<h1>Lista categorias</h1>
<div class="container">
    <ul class="list-group">

        {foreach from=$categorias item=categoria}
            <li class="list-group-item list-group-item-primary formprod">{$categoria->descripcion}</li>
            <div class="btnsXprod">
                <button type="button" class="btn btn-outline-info"><a href="categorias/vermas/{$categoria->id_categoria}">Ver productos de esta categoria</a></button>    
                <button type="button" class="btn btn-outline-dark" id={$categoria->id_categoria}><a href="categorias/editar/{$categoria->id_categoria}">Editar</a></button>
                <button type="button" class="btn btn-outline-danger"><a href="categorias/borrar/{$categoria->id_categoria}">Borrar</a></button> 
            </div>
        {/foreach}
</ul>
</div>
{include file="crearCategoria.tpl"}

{include file="footer.tpl"}
  

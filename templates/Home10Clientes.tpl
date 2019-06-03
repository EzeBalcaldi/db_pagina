{include file="templates/header.tpl"}
{include file="templates/NavBar.tpl"}
<div class="jumbotron">
  <div class="container">
    <h1 class="display-3">Bienvenido a WMS Tandil</h1>
    <p>Debajo podrás ver nuestros mejores clientes.</p>
  </div>
  <div class="imagennet">
  </div>
</div>
      <div class="container-fluid">
        <table class="table table-hover">
          <thead class="bg-primary" style="color:white;" >
              <tr>
                      <th scope="col">Cuit/cuil</th>
                      <th scope="col">Cantidad gastada</th>
                </tr>
              </thead>
            <tbody class="contenedor-tabla" >
              {foreach from=$datos item=dato}
                <tr>
                      <th scope="col">{$dato['id_cliente']}</th>
                      <th scope="col">{$dato['cantidad gastada']}</th>
                </tr>
            {/foreach}
          </tbody>
        </table>
      </div>
</section>
{include file="templates/footer.tpl"}

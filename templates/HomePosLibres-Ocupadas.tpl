{include file="templates/header.tpl"}
{include file="templates/NavBar.tpl"}
<div class="jumbotron">
  <div class="container">
    <h1 class="display-3">Bienvenido a WMS Tandil</h1>
    <p>A continuacion podras ingresar una fecha para saber cuales son las posiciones libres.</p>
  </div>

</div>

<input type="date" value="{$fecha}" class="hidden" id="FechaFormAux" name="FechaFormAux" >

<section>
    <div class="container">
      <div class="row cont ">
        <div class="col-6 roles">
        <form method="post" action="GetPosLibresuOcupadas">
          <div class="form-group">
            <label >Ingresar fecha</label>
            <input type="date" value="{$fecha}"  class="FechaForm" id="FechaForm" name="FechaForm" >
            <date-input date="date" timezone="timezone"></date-input>
          </div>
        </div>

          <div class="col-6 roles">

          <label >Ingresar ID del cliente</label>
          <input type="text"   value="0" class="IDclienteForm" id="IDclienteForm" name="IDclienteForm" >
        </div>

          <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
      </div>


      <div class="row cont ">


      <div class="col-6 roles">

        <table class="table table-hover">
          <thead class="bg-primary" style="color:white;" >
              <tr>
                      <th scope="col">Numero Posicion</th>
                      <th scope="col">Numero Estanteria</th>
                      <th scope="col">Numero Fila </th>
                </tr>
              </thead>
            <tbody class="contenedor-tabla" >
              {foreach from=$posLibres item=posLibre}
                <tr>
                      <th scope="col">{$posLibre['nro_posicion']}</th>
                      <th scope="col">{$posLibre['nro_estanteria']}</th>
                      <th scope="col">{$posLibre['nro_fila']}</th>

                </tr>
            {/foreach}
          </tbody>
        </table>
      </div>




      <div class="col-6 roles">

        <table class="table table-hover">
          <thead class="bg-info" style="color:white;" >
              <tr>
                      <th scope="col">Numero Posicion</th>
                      <th scope="col">Numero Estanteria</th>
                      <th scope="col">Numero Fila </th>
                </tr>
              </thead>
            <tbody class="contenedor-tabla" >
              {foreach from=$posOcupadas item=posOcupada}
                <tr>
                      <th scope="col">{$posOcupada['nro_posicion']}</th>
                      <th scope="col">{$posOcupada['nro_estanteria']}</th>
                      <th scope="col">{$posOcupada['nro_fila']}</th>

                </tr>
            {/foreach}
          </tbody>
        </table>
      </div>
  </div>


</div>

      </div>






</section>
{include file="templates/footer.tpl"}

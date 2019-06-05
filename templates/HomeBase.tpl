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


      </div>






</section>
{include file="templates/footer.tpl"}

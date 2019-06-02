{include file="templates/header.tpl"}
{include file="templates/NavBar.tpl"}
<div class="jumbotron">
  <div class="container">
    <h1 class="display-3">Bienvenido a WMS Tandil</h1>
    <p>A continuacion podras ingresar una fecha para saber cuales son las posiciones libres.</p>
  </div>
  <div class="imagennet">

  </div>
</div>
<section>
    <div class="container">
      <div class="row cont ">
        <div class="col-3 roles">
        <form method="post" action="GetPosLibres">
          <div class="form-group">
            <label >Ingresar fecha</label>
            <input type="date"  class="FechaForm" id="FechaForm" name="FechaForm" >
            <date-input date="date" timezone="timezone"></date-input>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>

      <div class="col-9 roles">
      <div class="card icono2" style="width: 18rem;">
        <a class="nav-link active home" href="ciudadano">
        <img class="card-img-top" src="imagenes/usuario.png" alt="Card image cap">
              </a>
        <div class="card-body">

            <p class="card-text">Ciudadano</p>
                </div>
        </div>
      </div>
      </div>
    </div>
    </div>

    <tbody>
      <tr>
        {foreach from=$datos item=dato}
        <input type="text" name="" value="{$dato['nro_posicion']}">
        <td id="{$dato['nro_posicion']}">numero de posicion {$dato['nro_posicion']}</td>
        {/foreach}
      </tr>
    </tbody>



</section>
{include file="templates/footer.tpl"}

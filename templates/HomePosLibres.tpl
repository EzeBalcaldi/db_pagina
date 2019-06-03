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




      <div class="container-fluid">
        <table class="table table-hover">
          <thead class="bg-primary" style="color:white;" >
              <tr>
                      <th scope="col">Numero Posicion</th>
                      <th scope="col">Numero Estanteria</th>
                      <th scope="col">Numero Fila </th>
                </tr>
              </thead>
            <tbody class="contenedor-tabla" >
              {foreach from=$datos item=dato}
                <tr>
                      <th scope="col">{$dato['nro_posicion']}</th>
                      <th scope="col">{$dato['nro_estanteria']}</th>
                      <th scope="col">{$dato['nro_fila']}</th>

                </tr>
            {/foreach}
          </tbody>
        </table>
      </div>






</section>
{include file="templates/footer.tpl"}

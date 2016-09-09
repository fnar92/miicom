
<div class="banner">
    <h2>
    <a href="index">Home</a>
    <i class="fa fa-angle-right"></i>
    <span>Clientes</span>
    </h2>
</div>

<div ng-controller="clientesController">
<div class="grid-system">
<div class="horz-grid">
        <div class="grid-hor">
        <h3 id="grid-example-mixed">Clientes</h3>
        <p>Listado de clientes</p>
        </div>
    
    
    <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th># Cliente</th>
        <th>Nombre</th>
        <th>Fecha corte</th>
        <th>Ver detalles</th>
      </tr>
    </thead>
    <tbody>
        <tr ng-repeat="cliente in clientes">
            <td>{{cliente.cid}}</td>
            <td>{{cliente.cnombre}}</td>
            <td>{{cliente.cfecha_corte}}</td>
            <td><button type="button" class="btn btn-info" ng-click="viewCliente(cliente)">Info</button></td>
        </tr>
    </tbody>
  </table>
</div>
</div>
</div>


<div id="modalDetalle" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridModalLabel">Detalle cliente <span id="cliente_id"></span></h4>
      </div>
      <div class="modal-body">
          <form class="form-horizontal">
            <div class="form-group">
              <label class="col-sm-2 control-label hor-form">Nombre: </label>
              <div class="col-sm-10">
                  <input id="cnombre" type="text" class="form-control" >
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label hor-form">Email: </label>
              <div class="col-sm-10">
                  <input id="cemail" type="text" class="form-control">
              </div>
            </div>
              
            <div class="form-group">
              <label class="col-sm-2 control-label hor-form">Teléfono: </label>
              <div class="col-sm-10">
                  <input id="ctelefono" type="text" class="form-control">
              </div>
            </div>
              
            <div class="form-group">
              <label class="col-sm-2 control-label hor-form">Dirección: </label>
              <div class="col-sm-10">
                  <input id="cdireccion" type="text" class="form-control">
              </div>
            </div>
              
              <div class="form-group">
              <label class="col-sm-2 control-label hor-form">Cuidad: </label>
              <div class="col-sm-10">
                  <input id="cciudad" type="text" class="form-control">
              </div>
            </div>
              
              <div class="form-group">
              <label class="col-sm-2 control-label hor-form">Fecha de corte: </label>
              <div class="col-sm-10">
                  <input id="cfecha_corte" type="date" class="form-control">
              </div>
            </div>
              
              <div class="form-group">
              <label class="col-sm-2 control-label hor-form">Tarifa: </label>
              <div class="col-sm-10">
                  <input id="ctarifa" type="text" class="form-control">
              </div>
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" ng-click="savedCliente()">Actualizar cliente</button>
      </div>
    </div>
  </div>
</div>
    
</div>

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
        <th>Limite pago</th>
        <th>Status</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
        <tr ng-repeat="cliente in clientes">
            <td>{{cliente.cid}}</td>
            <td>{{cliente.cnombre}}</td>
            <td>{{cliente.cfecha_corte}}</td>
            <td>{{cliente.cfecha_corte_fin}}</td>
            <td>
            <div ng-if="cliente.estatus == 1">
                <span id="etiqueta" class="label label-success">Ok</span>
            </div>
                <div ng-if="cliente.estatus == 0">
                <span id="etiqueta" class="label label-warning">Adeudo</span>
            </div>
            </td>
            
            <td>
                <button type="button" class="btn btn-info" ng-click="viewCliente(cliente)">Info</button>
                <button type="button" class="btn btn-warning" ng-click="viewPagos(cliente)">Pagos</button>
            </td>
        </tr>
    </tbody>
  </table>
</div>
</div>
</div>

    
<div id="modalPagos" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridModalLabel">Pagos cliente # <span class="cliente_id"></span> <span class="cliente_name"></span></h4>
        
      </div>
      <div class="modal-body">
          
          
          <div class="row show-grid">
			  <div class="col-md-6">Pagos
                              <hr>
                          <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th># Pago</th>
        <th>Cantidad</th>
        <th>Concepto</th>
        <th>Fecha</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <tr ng-repeat="pagos in pagosCliente">
            <td>{{pagos.pid}}</td>
            <td>{{pagos.cantidad}}</td>
            <td>{{pagos.concepto}}</td>
            <td>{{pagos.fecha}}</td>
        </tr>
    </tbody>
  </table>
</div>
                          
                          </div>
			  <div class="col-md-5">Adeudos</div>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div id="modalDetalle" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridModalLabel">Detalle cliente # <span class="cliente_id"></span></h4>
        
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
                  <label class="col-sm-2 control-label hor-form">Del: </label>
                  <input id="cfecha_corte" type="text" class="form-control controlito" >
                  <label class="col-sm-2 control-label hor-form">al: </label>
                  <input id="cfecha_corte_fin" type="text" class="form-control controlito" >
              </div>
            </div>
              
              <div class="form-group">
              <label class="col-sm-2 control-label hor-form">Tarifa: </label>
              <div class="col-sm-10">
                  <label class="col-sm-2 control-label hor-form">$: </label><input id="ctarifa" type="text" class="form-control controlito">
              </div>
            </div>
              
               <div class="form-group">
              <label class="col-sm-2 control-label hor-form">Fecha de registro: </label>
              <div class="col-sm-10">
                  <input id="ccreated" type="date" class="form-control">
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
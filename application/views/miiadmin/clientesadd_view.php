
<div class="banner">
    <h2>
        <a href="<?= base_url('miiadmin/index')?>">Home</a>
    <i class="fa fa-angle-right"></i>
    <a href="<?= base_url('miiadmin/clientes')?>">Clientes</a>
    <i class="fa fa-angle-right"></i>
    <span>Registro</span>
    </h2>
</div>

<div ng-controller="clientesController">
<div class="grid-system">
<div class="horz-grid">
        <div class="grid-hor">
        <h3 id="grid-example-mixed">Registro cliente</h3>
        <p>Nuevo cliente</p>
        </div>
    
    
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
             
          </form>
    
      <div class="modal-footer">
          <button id="btn_Add" type="button" class="btn btn-primary" ng-click="createCliente(this)">Registrar cliente</button>
      </div>
    
    
</div>
</div>


    
</div>
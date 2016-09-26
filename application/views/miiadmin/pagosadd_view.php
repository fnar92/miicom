
<div class="banner">
    <h2>
    <a href="<?= base_url('miiadmin/index')?>">Home</a>
    <i class="fa fa-angle-right"></i>
    <a href="<?= base_url('miiadmin/pagos')?>">Pagos</a>
    <i class="fa fa-angle-right"></i>
    <span>Registro pago</span>
    </h2>
</div>

<div ng-controller="pagosController">
<div class="grid-system">
<div class="horz-grid">
        <div class="grid-hor">
        <h3 id="grid-example-mixed">Pagos</h3>
        <p>Registrar pago</p>
        </div>
    
    <form class="form-horizontal">
            <div class="form-group">
              <label class="col-sm-2 control-label hor-form">Cliente: </label>
              <div class="col-sm-10">
                  <select id="cid" class="form-control">
                      <option value="">-</option>
                      <option ng-repeat="c in clientes" value="{{c.cid}}"> {{c.cnombre}}</option>
                  </select>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label hor-form">Cantidad: </label>
              <div class="col-sm-10">
                  <input id="pcantidad" type="text" class="form-control">
              </div>
            </div>
              
            <div class="form-group">
              <label class="col-sm-2 control-label hor-form">Concepto/Descripción: </label>
              <div class="col-sm-10">
                  <input id="pconcepto" type="text" class="form-control">
              </div>
            </div>
              
            
             
          </form>
    
      <div class="modal-footer">
          <button id="btn_Add" type="button" class="btn btn-primary" ng-click="createPago(this)">Registrar pago</button>
      </div>
    
    
    
</div>
</div>

</div>
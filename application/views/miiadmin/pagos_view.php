
<div class="banner">
    <h2>
    <a href="<?= base_url('miiadmin/index')?>">Home</a>
    <i class="fa fa-angle-right"></i>
    <span>Pagos</span>
    </h2>
</div>

<div ng-controller="pagosController">
<div class="grid-system">
<div class="horz-grid">
        <div class="grid-hor">
        <h3 id="grid-example-mixed">Pagos</h3>
        <p>Historial de pagos</p>
        </div>
    
    
    <div class="table-responsive">
  <table class="table">
    <thead >
      <tr >
        <th># Cliente</th>
        <th># Pago</th>
        <th>Fecha</th>
        <th>Cantidad</th>
        <th>Concepto</th>
        
      </tr>
    </thead>
    <tbody>
        <tr ng-repeat="pago in pagosCliente" >
            <td>{{pago.cnombre}}</td>
            <td>{{pago.pid}}</td>
            <td>{{pago.pfecha}}</td>
            <td>{{pago.pcantidad}}</td>
            <td>{{pago.pconcepto}}</td>
        </tr>
    </tbody>
  </table>
</div>
</div>
</div>

  
  </div>
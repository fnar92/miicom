/* global route, app */
app.controller('mainController', ['$scope', '$http', function($scope, $http) {    
  
    $http({
        url: route + 'api/getUser',
        method: "GET"
    }).success(function (data) {
        $scope.User=data;
    }).error(function (data) {
        console.log(data);
    });
    
    $scope.guardarPerfil = function() {
        var data=JSON.stringify({
            data:{
                nombre: $("#nombre").val(),
                paterno: $("#paterno").val(),
                materno: $("#materno").val(),
                email: $("#email").val()
            },
            user: $scope.User
        });
        $http({
            url: route + 'api/updateUser',
            method: "POST",
            data: data,
            headers: {'Content-Type': 'application/json'}
        }).success(function (data) {
            $scope.User=data.data;
            flashSuccessMessage("Guardar perfil", "Se actualizaron los datos exitosamente", 2000);
        }).error(function (data) {
            console.log(data);
        });
        
    };
    
}]);

app.controller('clientesController', ['$scope', '$http', 'listaClientes', function($scope, $http, listaClientes) {
   $scope.cliente=[];
   $scope.clientes=[];
   
   listaClientes.query({}, function (data) {
        console.log(data);
        $scope.clientes=data;
    });
            
    $scope.viewCliente=function(cliente){
        $scope.cliente=cliente;
        $("#cliente_id").html($scope.cliente.cid);
        $("#cnombre").val($scope.cliente.cnombre);
        $("#cemail").val($scope.cliente.cemail);
        $("#ctelefono").val($scope.cliente.ctelefono);
        $("#cdireccion").val($scope.cliente.cdireccion);
        $("#cciudad").val($scope.cliente.cciudad);
        $("#cfecha_corte").val($scope.cliente.cfecha_corte);
        $("#ctarifa").val($scope.cliente.ctarifa);
        $("#modalDetalle").modal('show');
        
        
    };
    
    $scope.savedCliente=function(){
        var data=JSON.stringify({
            data:{
                cnombre: $("#nombre").val(),
                cemail: $("#paterno").val(),
                materno: $("#materno").val(),
                email: $("#email").val()
            },
            user: $scope.User
        });
        $http({
            url: route + 'api/updateCliente',
            method: "POST",
            data: data,
            headers: {'Content-Type': 'application/json'}
        }).success(function (data) {
            $scope.User=data.data;
            flashSuccessMessage("Guardar perfil", "Se actualizaron los datos exitosamente", 2000);
        }).error(function (data) {
            console.log(data);
        });
    };
    
   
}]);


app.factory("listaClientes", function ($resource) {
    return $resource(route + "api/getClientes", {isArray: true});
});
app.factory("clienteById", function ($resource) {
    return $resource(route + "api/getClienteById/:idCliente", {idCliente: '@idCliente'});
});

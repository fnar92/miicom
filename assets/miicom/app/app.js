var app = angular.module("myApp", ['ngRoute','ngResource']);
var route="http://localhost:8181/miicomgit/";

app.config(function($routeProvider){
    	  /*$routeProvider
    	   .when ('/index',{
                    controller: "mainController",
                    controllerAs: "vm",
    		    templateUrl:"index"
    	   })
           .when ('/new',{
    		        controller: "mainController",
                    controllerAs: "vm",
    		    templateUrl:"new.html"
    	   })*/
    });
    
     var modalMessage = function(titulo, mensaje){
                $.SmartMessageBox({
                    title : titulo,
                    content : mensaje,
                    buttons : '[Aceptar]'
                });
            };
            
            //modal function with callback
            var modalWithCallback = function(titulo, mensaje, callBack){
                $.SmartMessageBox({
                    title : titulo,
                    content : mensaje,
                    buttons : '[Cancelar][Aceptar]'
                }, function(ButtonPressed) {
                    if(callBack){
                        callBack(ButtonPressed);
                    }
  });
            };           
            
            var flashSuccessMessage =  function(titulo, mensaje, timeMillis){
                $.smallBox({
                    title : titulo,
                    content : "<i class='fa fa-clock-o'></i> <i>"+mensaje+"</i>",
                    color : "#1ABC9C",
                    iconSmall : "fa fa-check fa-2x fadeInRight animated",
                    timeout : timeMillis
                });
            };
            
             var flashErrorMessage =  function(titulo, mensaje, timeMillis){
                $.smallBox({
                    title : titulo,
                    content : "<i class='fa fa-clock-o'></i> <i>"+mensaje+"</i>",
                    color : "#C46A69",
                    iconSmall : "fa fa-times fa-2x fadeInRight animated",
                    timeout : timeMillis
                });
            };

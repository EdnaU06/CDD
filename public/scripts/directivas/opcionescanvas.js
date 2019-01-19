var commentsApp = angular.module('CommentApp', []);

commentsApp.directive('opcionescanvas',function(){
    return {restrict:'E',
            scope:{},
            templateUrl:'opciones_canvas'}
});

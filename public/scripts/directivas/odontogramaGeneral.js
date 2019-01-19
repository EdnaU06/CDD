var commentsApp = angular.module('CommentApp', []);

commentsApp.directive('odontogramageneral',function(){
    return{
        restrict:'E',
        scope:{},
        templateUrl:'odontograma_html'
    };
    
});

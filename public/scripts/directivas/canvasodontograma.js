var commentsApp = angular.module('CommentApp', []);

commentsApp.directive('canvasodontograma', function() { 
  return { 
    restrict: 'E', 
    scope: { 
      info:"=",
    }, 
    templateUrl: 'canvas_odontograma' 
  }; 
});
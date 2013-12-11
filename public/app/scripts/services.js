'use strict';

angular.module('.App')
  .factory('Authenticate', function($resource) {
    return $resource('/service/authenticate');
  })
  .factory('Movies', function($resource) {
    return $resource('/service/movies');
  })
  .factory('someDealie', function($q, $timeout) {
    var getMessages = function() {
      var deferred  = $q.defer();
      $timeout(function() {
        deferred.resolve(['Hello', 'World!']);
      }, 2000);
      return deferred.promise;
    };
    return {
      getMessages: getMessages
    };
  })
  .factory('Flash', function($rootScope) {
    return {
        show: function(message) {
            $rootScope.flash = message;
        },
        clear: function() {
            $rootScope.flash = '';
        }
    };
  })
  .factory('HelloWorld', function($q, $timeout) {
    
    // example of using $q - promise object
    var getMessages = function() {
      var deferred = $q.defer();

      $timeout(function() {
        deferred.resolve(['Hello', 'World!']);
      }, 2000);
      return deferred.promise;
    };
    return {
      getMessages: getMessages
    };
  });
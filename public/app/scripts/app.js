'use strict';

angular.module('.App', [
  'ngCookies',
  'ngResource',
  'ngSanitize'
])
  .config(['$routeProvider', function ($routeProvider) {
    $routeProvider
      .when('/', {
        templateUrl: 'app/views/login.html',
        controller: 'loginController'
      })
      .when('/home', {
        templateUrl: 'app/views/home.html',
        controller: 'homeController'
      })
      .when('/pfjwd', {
        templateUrl: 'app/views/pfjwd.html',
        controller: 'pfjwdController'
      })
      .when('/movies', {
        templateUrl: 'app/views/movies.html',
        controller: 'homeController'
      })
      .otherwise({
        redirectTo: '/'
      });
  }]).config(function($httpProvider){
    var interceptor = function($rootScope, $location, $q, Flash) {
      var success = function(response) {
        return response;
      };
      var error = function(response) {
        if (response.status == 401) {
          delete sessionStorage.authenticated;
          $location.path('/angular');
          Flash.show(response.data.flash);
        }
        return $q.reject(response);
      };
      return function(promise) {
        return promise.then(success, error);
      };
    };
    $httpProvider.responseInterceptors.push(interceptor);
  }).run(function($http, CSRF_TOKEN){
    $http.defaults.headers.common['csrf_token'] = CSRF_TOKEN;
  });

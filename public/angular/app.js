/**
 * Created by mohamed on 5/15/2017.
 */

'use strict';

var commentApp = angular.module('commentApp', ['ngRoute', 'mainCtrl', 'commentService']);

// change angular brackets to {[{ }]} so we still can use Blade {{ }}
commentApp.config(function($interpolateProvider){
    $interpolateProvider.startSymbol('{[{');
    $interpolateProvider.endSymbol('}]}');
});

commentApp.config(function($routeProvider, $locationProvider){
    $routeProvider
        .when('/test',{
            templateUrl : '/views/test.html'
        })
        .otherwise({redirectTo : '/'});

    $locationProvider.html5Mode(true);
});

console.log('app loaded');

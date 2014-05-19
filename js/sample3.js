/**
 * @file
 *  Related JavaScript.
 */

/**
 * Declare the app.
 */
var s3_app = angular.module('s3_app', []);

s3_app.directive('s3directive', function() {
  return {
    restrict: 'E',
    replace: true,
    template: '<span>Directive implemented.</span>'
  };
});


/**
 * We need to bootstrap the app manually to the container by id, since we have
 *  more tha one app on the same page.
 */
angular.element(document).ready(function() {
  angular.bootstrap(document.getElementById("s3_container"),['s3_app']);
});
angular.module('plista', [])
    .controller('deviceDetectorController', function($http) {
        let ctrl = this;
        ctrl.isLoading = false;

        ctrl.detect = function() {
            ctrl.isLoading = true;
            $http({
                method : "GET",
                headers: {
                    'Content-type': 'application/json'
                },
                url : "http://localhost/api/"
            }).then(function successCallback(response) {
                ctrl.details = response.data;
                ctrl.isLoading = false;
            }, function errorCallback(response) {
                ctrl.isLoading = false;
            });
        }
    });
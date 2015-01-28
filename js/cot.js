var app = angular.module('app', []);

app.controller('cotController', function($scope, $http) {
    $scope.devices = [];
    $http.post('./scripts/userDevices.php', { action: "get_userDevice"})
      .success(function(data, status, headers, config) {
        console.log(data);
        $scope.devices = data;
      });
  });

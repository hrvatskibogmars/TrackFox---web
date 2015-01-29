var app = angular.module('app', []);

app.controller('listAccount', function($scope, $http) {
    $scope.devices = [];
    $http.post('./scripts/userDevice.php', { action: "userDevice"})
      .success(function(data, status, headers, config) {
        console.log(data);
        $scope.devices = data;
      });
  });

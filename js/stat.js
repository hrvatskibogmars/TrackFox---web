var app = angular.module('app', []);


app.controller('cotController', function($scope, $http) {
    $scope.devices = [];
    $http.post('./scripts/userStatistics.php', { action: "userStatistics"})
      .success(function(data, status, headers, config) {
        console.log(data);
        $scope.devices = data;
      });


  });

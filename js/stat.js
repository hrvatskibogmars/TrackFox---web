var app = angular.module('app', []);

app.controller('stats_controller', function($scope, $http) {
    $scope.stats = [];
    $http.post('./scripts/statistics.php', { action: "get_statistics"})
      .success(function(data, status, headers, config) {
        console.log(data);
        $scope.stats = data;
      });
  });

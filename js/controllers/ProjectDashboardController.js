/** 
    Project dashboard controller
*/
application.controller('ProjectDashboardController', ['$scope', '$stateParams', 'PathService', function ($scope, $stateParams, PathService) {
	$scope.path = {};

    PathService.path({
        Type: "PROJECT",
        EntityId: $stateParams.projectId
    })
    .success(function (data, status, headers, config) {
        $scope.path = data;
    });
}]);
var madParking = angular.module('madParking', []);



madParking.controller('parkingData', function parkingData ($scope, $http) {
	$http.get('info.php').success(function (data) {
		$scope.parking = data;
	});
});
angular.module('loginApp', []).controller('LoginController', function ($scope) {
    $scope.user = {};
    $scope.submitted = false;

    $scope.submitForm = function () {
        $scope.submitted = true;

        if ($scope.loginForm.$valid) {
            // Form is valid, you can submit it to the server here
            // Add your code to send the login data to the server (login_process.php)
        }
    };
});

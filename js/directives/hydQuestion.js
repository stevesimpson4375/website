app.directive("hydQuestion", function () {
    return {
        restrict: 'E',
        scope: {
            info: '='
        },
        templateUrl: 'js/directives/hydQuestion.html'
    };
});

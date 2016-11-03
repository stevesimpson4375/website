app.directive("backToIndex", function () {
    return {
        restrict: 'E',
        scope: {
            info: '='
        },
        templateUrl: 'js/directives/backToIndex.html'
    };
});

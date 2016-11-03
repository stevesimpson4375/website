var app = angular.module("hydApp", []);
app.controller("hydCtrl", function ($scope) {
    $scope.hydPressure = {
        title: 'Pressure',
        enter1: 'Area in square inches',
        enter2: 'Force in pounds',
        enter3: '',
        input1: '',
        input2: '',
        abbreviation: 'psi',
        calc: function () {
            return this.input2 / this.input1;
        }
    };
    $scope.hydPower = {
        title: 'Power',
        enter1: 'Flow Rate in GPM',
        enter2: 'Pressure in psi',
        enter3: '',
        input1: '',
        input2: '',
        abbreviation: 'hp',
        calc: function () {
            return this.input1 * this.input2 / 1714;
        }
    };
    $scope.fluidVelocity = {
        title: 'Velocity',
        enter1: 'Flow Rate in GPM',
        enter2: 'Diameter in inches',
        enter3: '',
        input1: '',
        input2: '',
        abbreviation: 'feet per second',
        calc: function () {
            return (this.input1 * .3208) / Math.pow(Math.PI * (this.input2 / 2), 2);
        }
    };
    $scope.cylinderForce ={
        title: 'Cyilnder Force',
        enter1: 'Diameter of cylinder (in.)',
        enter2: 'Pressure in the cylinder',
        enter3: '',
        input1: '',
        input2: '',
        abbreviation: 'lbs',
        calc: function () {
            return Math.PI * Math.pow((this.input1/ 2), 2) * this.input2;
        }
    };
    $scope.cylinderSpeed = {
        title: 'Cylinder Speed',
        enter1: 'Cyilnder Diameter',
        enter2: 'Flow Rate',
        enter3: '',
        input1: '',
        input2: '',
        abbreviations: 'inches per second',
        calc: function () {
            return Math.PI * Math.pow(this.input1, 2) * ( 231 * this.input2);
        }      
    };
    $scope.cylinderVolume = {
        title: 'Cylinder Volume',
        enter1: 'Cylinder Diameter',
        enter2: 'Stroke of Cyilnder',
        input1: '',
        input2: '',
        abbreviation: 'Gallons',
        calc: function () {
            return (this.input2 * (Math.PI * (Math.pow((this.input1 / 2), 2)))) / 231;
        }
    };
});
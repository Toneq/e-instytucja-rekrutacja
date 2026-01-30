<!DOCTYPE html>
<html ng-app="bookApp">
    <head>
        <title>e-Instytucja zadanie rekrutacyjne - Tobiasz Tonn</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.3/angular.min.js"></script>
    </head>

    <body ng-controller="BookController" class="container mt-5">
        <h2>Dodaj książkę</h2>
        <form ng-submit="addBook()" class="row g-3">
            <div class="col-md-6">
                <input class="form-control" ng-model="book.title" placeholder="Tytuł" required>
            </div>
            <div class="col-md-6">
                <input class="form-control" ng-model="book.author" placeholder="Autor" required>
            </div>
            <div class="col-md-4">
                <input class="form-control" ng-model="book.country" placeholder="Kraj" required>
            </div>
            <div class="col-md-4">
                <input class="form-control" ng-model="book.language" placeholder="Język" required>
            </div>
            <div class="col-md-4">
                <input type="number" class="form-control" ng-model="book.pages" placeholder="Liczba stron" required>
            </div>
            <div class="col-md-6">
                <input type="number" class="form-control" ng-model="book.year" placeholder="Rok" required>
            </div>
            <div class="col-md-6">
                <input class="form-control" ng-model="book.imageLink" placeholder="Obrazek dla książki">
            </div>
            <div class="col-md-6">
                <input class="form-control" ng-model="book.link" placeholder="Link do książki">
            </div>
            <div class="col-md-6">
                <button class="btn btn-primary w-100">Dodaj</button>
            </div>
        </form>

        <hr>

        <h2>Lista książek</h2>
        <table class="table table-striped">
            <tr>
                <th>Obrazek książki</th>
                <th>Tytuł</th>
                <th>Autor</th>
                <th>Rok</th>
                <th>Liczba stron</th>
                <th>Link do książki</th>
            </tr>
            <tr ng-repeat="b in books">
                <td><img src="{{b.title}}" alt="{{b.title}}"></td>
                <td>{{b.title}}</td>
                <td>{{b.author}}</td>
                <td>{{b.year}}</td>
                <td>{{b.pages}}</td>
                <td><a href="{{b.link}}" target="_blank">{{b.link}}</a></td>
            </tr>
        </table>

        <script>
            angular.module('bookApp', []).controller('BookController', function($scope, $http) {
                $scope.loadBooks = function() {
                    $http.get('/api/books').then(function(response) {
                        $scope.books = response.data;
                    });
                };

                $scope.addBook = function() {
                    $http.post('/api/books', $scope.book).then(function() {
                        $scope.book = {};
                        $scope.loadBooks();
                    });
                };

                $scope.loadBooks();
            });
        </script>
    </body>
</html>
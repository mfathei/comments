/**
 * Created by mohamed on 5/15/2017.
 */

angular.module('mainCtrl', [])
    .controller('mainController', function ($scope, $http, Comment) {

        // object to hold all the data for the new comment form
        $scope.commentData = {};

        // loading variable to show the spinning loading icon
        $scope.loading = true;

        // get all comments first and bind it to the $scope.comments object
        // using function get we created in our service
        // get all comments
        Comment.get()
            .success(function (data) {
                $scope.comments = data;
                $scope.loading = false;
            });


        $scope.submitComment = function () {

            $scope.loading = true;

            Comment.save($scope.commentData)
                .success(function (data) {
                    // if successful, we need to refresh the comments list
                    Comment.get()
                        .success(function (getData) {
                            $scope.comments = getData;
                            $scope.loading = false;
                        });
                })
                .error(function (data) {
                    console.log('Error : ' + data);
                });

        };

        // function to handle deleting a comment
        // delete a comment
        $scope.deleteComment = function (id) {

            $scope.loading = true;

            // use the function we created in our service
            Comment.destroy(id)
                .success(function (data) {

                    // if successful, we need to refresh the comments list
                    Comment.get()
                        .success(function (getData) {
                            $scope.comments = getData;
                            $scope.loading = false;
                        });

                })
                .error(function (data) {
                    console.log(data);
                });
        };

    });

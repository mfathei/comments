/**
 * Created by mohamed on 5/15/2017.
 */

angular.module('commentService', [])
    .factory('Comment', function ($http) {


    return {

        // get all the comments
        get: function () {
            return $http.get('/api/comments');
        },

        // save a comment (pass in comment data)
        save: function (commentData) {
            // console.log(commentData);
            return $http({
                method: 'POST',
                url: '/api/comments',
                // headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                data: commentData
            });
        },

        // delete a comment
        destroy: function (id) {
            return $http.delete('/api/comments/' + id);
        }
    }

});

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel and Angular Comment System</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
    <link rel="stylesheet" href="css/font-awesome.min.css"> <!-- load fontawesome -->
    <style>
        body {
            padding-top: 30px;
        }

        form {
            padding-bottom: 20px;
        }

        .comment {
            padding-bottom: 20px;
        }
    </style>

    <!-- JS -->
    <script src="js/jquery-3.1.1.min.js"></script>

    <!-- load angular -->
    <script src="js/angular.min.js"></script>
    <script src="js/angular-route.min.js"></script>


    <!-- ANGULAR -->
    <!-- all angular resources will be loaded from the /public folder -->
    <script src="angular/controllers/mainCtrl.js"></script> <!-- load our controller -->
    <script src="angular/services/commentService.js"></script> <!-- load our service -->
    <script src="angular/app.js"></script> <!-- load our application -->

</head>
<body class="container" ng-app="commentApp" ng-controller="mainController">
<div class="col-md-8 col-md-offset-2">
    <!-- page title -->
    <div class="page-header">
        <h1>Laravel and Angular Single Page Application</h1>
        <h4>Commenting System</h4>
    </div>

    <!-- NEW COMMENT FORM -->
    <!-- ng-submit will disable default form submit and use our function -->
    <form ng-submit="submitComment()">

        <div class="form-group">

            <!-- AUTHOR -->
            <input type="text" class="form-control input-sm" name="author" ng-model="commentData.author"
                   placeholder="Name"/>
        </div>

        <div class="form-group">

            <!-- COMMENT TEXT -->
            <input type="text" class="form-control input-lg" name="comment" ng-model="commentData.text"
                   placeholder="Say what you have to say"/>
        </div>

        <!-- SUBMIT BUTTON -->
        <div class="form-group text-right">
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>

    </form>

    <!-- LOADING ICON =============================================== -->
    <!-- show loading icon if the loading variable is set to true -->
    <p class="text-center" ng-show="loading">
        <span class="fa fa-meh-o fa-5x fa-spin"></span>
    </p>

    <!-- THE COMMENTS =============================================== -->
    <!-- hide these comments if the loading variable is true -->
    <div class="comment" ng-hide="loading" ng-repeat="comment in comments">
        <h3>Comment #{{ comment.id }}
            <small>by {{ comment.author }}</small>
        </h3>
        <p>{{ comment.text }}</p>

        <p><a href="#" ng-click="deleteComment(comment.id)" class="text-muted">Delete</a></p>
    </div>

</div>
</body>
</html>

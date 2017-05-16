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
<body class="container" ng-app="commentApp">

@yield('content')

<script type="text/javascript">
    // to remove # from routing URLs
    angular.element(document.getElementsByTagName('head')).append(angular.element('<base href="' + window.location.pathname + '" />'));
</script>
</body>
</html>

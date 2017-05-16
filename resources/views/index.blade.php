@extends('layouts.app')

@section('content')
    <div ng-controller="mainController" class="col-md-8 col-md-offset-2">
        <!-- page title -->
        <div class="page-header">
            <h1>Laravel and Angular Single Page Application</h1>
            <h4>Commenting System</h4>
        </div>

        <div ng-view></div>

        <a href="test">Test</a>

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
            <h3>Comment #{[{ comment.id }]}
                <small>by {[{ comment.author }]}</small>
            </h3>
            <p>{[{ comment.text }]}</p>

            <p><a href="#" ng-click="deleteComment(comment.id)" class="text-muted">Delete</a></p>
        </div>

    </div>

@endsection
<?php
//session_start();
require(__DIR__.'/../session.php');


if ( isset( $_GET["essay_id"] ) ) {
	$essay_id = $_GET["essay_id"];
}else {
    $action = 'register-new-essay';
    require 'post.php';
    echo $newRandomId;
    header('Location: essay.php?essay_id='.$newRandomId);
    die();

}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html lang="en" ng-app="myApp" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html lang="en" ng-app="myApp" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html lang="en" ng-app="myApp" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" ng-app="myApp" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My AngularJS App</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="bower_components/html5-boilerplate/dist/css/normalize.css">-->
    <!--<link rel="stylesheet" href="bower_components/html5-boilerplate/dist/css/main.css">-->
    <link rel="stylesheet" href="app.css">
    <script> var essay_id = '<?php echo $essay_id; ?>';</script>
    <!--<script src="bower_components/html5-boilerplate/dist/js/vendor/modernizr-2.8.3.min.js"></script>-->
    <script src="assets/js/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<!--<ul class="main-menu">-->
<!--<!--    <li><a href="#!/view1">view1</a></li>-->
<!--<!--    <li><a href="#!/view2">view2</a></li>-->
<!---->
<!--    <li><a href="../app">All Essays</a></li>-->
<!--    <li><a href="essay.php">New Essay</a></li>-->
<!--</ul>-->

<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<div ng-view></div>

<div>Loading... <span app-version></span></div>

<!-- In production use:
<script src="//ajax.googleapis.com/ajax/libs/angularjs/x.x.x/angular.min.js"></script>
-->
<script src="bower_components/angular/angular.js"></script>
<script src="bower_components/angular-route/angular-route.js"></script>
<script src="bower_components/angular-sanitize/angular-sanitize.js"></script>
<script src="bower_components/xeditable/xeditable.js"></script>
<script src="assets/js/angular-drag-and-drop-lists.js"></script>

<script src="app.js"></script>
<script src="view1/view1.js"></script>
<script src="view2/view2.js"></script>
<script src="components/version/version.js"></script>
<script src="components/version/version-directive.js"></script>
<script src="components/version/interpolate-filter.js"></script>
</body>
</html>

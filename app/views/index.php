<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Laravel 4 AngularJS Authentication &amp; Security</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="app/styles/main.css">
</head>
<body ng-app=".App">
    <div class="container" ng-view></div>

<script src="app/bower_components/angular/angular.js"></script>
<script src="app/bower_components/angular-resource/angular-resource.js"></script>
<script src="app/bower_components/angular-cookies/angular-cookies.js"></script>
<script src="app/bower_components/angular-sanitize/angular-sanitize.js"></script>
<script src="app/scripts/app.js"></script>
<script src="app/scripts/controllers/main.js"></script>
<script src="app/scripts/directives.js"></script>
<script src="app/scripts/filters.js"></script>
<script src="app/scripts/services.js"></script>
<script type="text/javascript">
    angular.module(".App").constant("CSRF_TOKEN", '<?php echo csrf_token(); ?>');
</script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Shoe app - Admin</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{asset('css/app-vue.css')}}">
</head>
<body>
  <div id="appAdmin">
    <v-app>
      <shoe-app-admin></shoe-app-admin>
    </v-app>
  </div>
  <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="zh-cmn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script>window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token()]); ?></script>
    <title>WRD</title>
  </head>
  <body>
    <div id="app"></div>
    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>


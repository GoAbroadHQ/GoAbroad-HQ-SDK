<html>
  <head>
    <script src="http://fb.me/react-with-addons-0.12.0.js"></script>
    <script src="http://fb.me/JSXTransformer-0.12.0.js"></script>
    <script src="papaparse.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="ajaxq.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
    html,body {
      width: 100%;
      height: 100%;
      padding: 0;
      margin: 0;
    }
    table {
        border: 0;
        border-collapse: collapse;
    }

    thead {
        background: #f5f5f5;
    }

    thead > tr > th {
        padding: 5px;
    }

    thead > tr > th:first-child {
        width: 50px;
    }
    tr.row.uploading {
        background: yellow;
    }

    tr.row.uploading > td:nth-child(2n) {
        background: #F5F508;
    }

    tr.row > td:nth-child(2n) {
        background: #f5f5f5;
    }

    tr.row.complete {
        background: #B4FFB4;
    }

    tr.row.complete > td:nth-child(2n) {
        background: #8EED8E;
    }
    td {
      padding: 5px;
      text-align: center;
    }
    </style>
  </head>
  <body>
    <div id="uploader"></div>
    <script type="text/jsx" src="uploader.jsx"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>@yield('title')</title>
    <link rel='stylesheet' type='text/css' href='https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css' >
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.7/css/select.dataTables.min.css">
    <link rel='stylesheet' type='text/css' href='https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.10/css/dataTables.checkboxes.css'>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

    @yield('styles')
    <style>
        body {
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>
<body>
<div class='container'>
    @yield('content')
</div>
<script type='text/javascript' src='https://code.jquery.com/jquery-3.3.1.js'></script>
<script type='text/javascript' src='https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
@routes
@yield('scripts')
<script type="text/javascript" src="https://cdn.datatables.net/select/1.2.6/js/dataTables.select.min.js"></script>
<script type='text/javascript' src='https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.10/js/dataTables.checkboxes.min.js'></script>
<script type='text/javascript' src='https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js'></script>
<script>
    $(function() {
        $('#listUsers').DataTable({
            dom: 'lifrtp',
            processing: true,
            language: {
                processing: "<div style=' border: 16px solid #f3f3f3;\n" +
                    "    border-radius: 50%;\n" +
                    "    border-top: 16px solid #3498db;\n" +
                    "    width: 200px;\n" +
                    "    height: 200px;\n" +
                    "    -webkit-animation: spin 2s linear infinite;\n" +
                    "    animation: spin 2s linear infinite;\n" +
                    "    margin-left: 250px;\n" +
                    "    margin-top: 250px;' id='loader'>Processing</div>"
            },
            serverSide: true,
            ajax: {
                url: route('users.getData'),
            },
            columns: [
                { data: 'id', name: 'users.id' },
                { data: 'name', name: 'users.name' },
                { data: 'email', name: 'users.email' },
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ],

        });
    });
</script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h2 class="text-center mt-5 mb-3">How to Get Current User Location - shouts.dev</h2>
    <div class="card">
        <div class="card-body">
            @if($location)
                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <td>Property</td>
                        <td>Value</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($location as $key => $item)
                        @if($item)
                        <tr>
                            <td class="text-capitalize">{{ $key }}</td>
                            <td>{{ $item }}</td>
                        </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>

</body>
</html>

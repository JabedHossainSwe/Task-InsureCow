<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task@InsureCow</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Welcome</div>

                    <div class="card-body">
                        <p class="mb-0">You can <a href="{{ route('login') }}">Login</a> or <a
                                href="{{ route('register') }}">Register</a> to get started.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

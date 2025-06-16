<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #eee !important;
        }
        .wrapper {
            margin-top: 80px;
            margin-bottom: 80px;
        }
        .form-signin {
            max-width: 380px;
            padding: 15px 35px 45px;
            margin: 0 auto;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, 0.1);
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 30px;
        }
        .form-signin .checkbox {
            font-weight: normal;
        }
        .form-signin .form-control {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
            box-sizing: border-box;
        }
        .form-signin .form-control:focus {
            z-index: 2;
        }
        .form-signin input[type=text] {
            margin-bottom: -1px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }
        .form-signin input[type=password] {
            margin-bottom: 20px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <form class="form-signin" id="loginForm">
        <h2 class="form-signin-heading">Please login</h2>
        <input type="text" class="form-control" name="email" placeholder="Email Address" required autofocus />
        <input type="password" class="form-control" name="password" placeholder="Password" required />
        @csrf
        <button class="w-100 btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <div id="message" class="mt-3"></div>
    </form>
</div>

<script>
    document.getElementById('loginForm').addEventListener('submit', async function (e) {
        e.preventDefault();

        const form = e.target;
        const formData = new FormData(form);
        const csrfToken = document.querySelector('input[name="_token"]').value;
        const messageDiv = document.getElementById('message');

        try {
            const response = await fetch('/login', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json'
                },
                body: formData
            });

            const result = await response.json();

            if (response.ok && result.success) {
                messageDiv.innerHTML = `<div class="alert alert-success">${result.message}</div>`;

                setTimeout(() => {
                    window.location.href = '/admin';
                }, 500);
            } else {
                messageDiv.innerHTML = `<div class="alert alert-danger">${result.message}</div>`;
            }
        } catch (error) {
            messageDiv.innerHTML = `<div class="alert alert-danger">Server error. Try again later.</div>`;
            console.error(error);
        }
    });
</script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <?php require_once __DIR__ . '/../../externals/links.php'; ?>
</head>

<style>
body.light-mode {
    background-color: white;
}


body.dark-mode {
    background-color: black;
    color: white;
}

body.dark-mode .google-btn {
    background-color: black;
    color: white;
    box-shadow: 0 0 3px white;
}

body.dark-mode .google-btn:hover {
    transition: background-color 0.3s ease, color 0.3s ease, border 0.3s ease;
}

body.dark-mode .btn-custom {
    background-color: black;
    color: white;
    box-shadow: 0 0 3px white;

}

body.dark-mode .btn-custom:hover {
    transition: background-color 0.3s ease, color 0.3s ease, border 0.3s ease;

}


body.dark-mode .toggle-btn {
    background-color: black;
    color: white;
    box-shadow: 0 0 3px white;

}

body.dark-mode .toggle-btn:hover {
    transition: background-color 0.3s ease, color 0.3s ease, border 0.3s ease;


}

body.dark-mode input.form-control {
    background-color: black;
    color: white;

}

body.dark-mode input::placeholder {
    background-color: black;
    color: white;

}

.btn-custom {
    background-color: white;
    color: black;
    border: 1px solid black;
}

.btn-custom:hover {
    background-color: blue;
    color: white;
    border: 1px solid white;
    transition: background-color 0.3s ease, color 0.3s ease;

}

.google-btn {
    border: 1px solid black;
    background-color: white;
    color: black;
}

.google-btn:hover {
    background-color: blue;
    color: white;
    border: 1px solid white;
    box-shadow: 0 0 3px white;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.toggle-btn {
    position: fixed;
    bottom: 20px;
    right: 20px;
    cursor: pointer;
    padding: 10px 20px;
    border: 1px solid black;
}

.toggle-btn:hover {
    background-color: blue;
    color: white;
    border: 1px solid white;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.login-nav a {
    color: black;
    transition: color 0.3s ease;
}

.login-nav a:hover {
    color: #6c757d;

}

body.dark-mode nav a {
    background-color: black;
    color: white;

}

nav {
    background-color: white;
    color: black;
}

body.dark-mode nav {
    background-color: black;
    color: white;
}

.form-container {
    background-color: white;
    color: black;

}

body.dark-mode .form-container {
    background-color: black;
    color: white;

}
</style>

<body>
    <nav
        class=" border border-1 shadow d-flex justify-content-center py-4 m-0 login-nav rounded position-sticky top-0 ">
        <a href="patient-login" class="mx-5 text-decoration-none ">Login</a>
        <a href="patient-register" class="text-decoration-none ">Register</a>
    </nav>
    <div class="container container-fluid d-flex justify-content-center align-items-center mt-0 "
        style="min-height: 100vh">
        <div class="border border-1 rounded shadow pb-5" style="width: 50%; height: auto">
            <form method="Post" class=" p-4 " style="width: 100%; height: 100%">
                <div class="mb-3 text-center">
                    <h1 class="fs-4 fs-md-3 fs-lg-2">Registration Form</h1>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="input-name" class="form-label"></label>
                        <input type="text" name="input-name" id="input-name" placeholder="Enter your Name"
                            class="form-control" required>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="input-contactNumber" class="form-label"></label>
                        <input type="text" name="input-contactNumber" id="input-contactNumber"
                            placeholder="Enter your Contact Number" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="input-address" class="form-label"></label>
                        <input type="text" name="input-address" id="input-address" placeholder="Enter your Address"
                            class="form-control" required>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="input-username" class="form-label"></label>
                        <input type="username" name="input-username" id="input-username"
                            placeholder="Enter your Username" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="input-password" class="form-label"></label>
                        <input type="password" name="input-password" id="input-password"
                            placeholder="Enter your Password" class="form-control " required>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="input-confirmation" class="form-label"></label>
                        <input type="password" name="input-confirmation" id="input-confirmation"
                            placeholder="Confirm Password" class="form-control " required>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <button type="submit" name="register-button"
                        class="rounded py-2 px-4 fs-6 fs-md-5 btn-custom">Register</button>
                </div>

            </form>

            <div class=" d-flex  align-items-center mt-0">
                <hr class="flex-grow-1">
                <div class="px-2 small text-muted"> OR LOGIN WITH
                </div>
                <hr class="flex-grow-1">
            </div>
            <div class="d-flex justify-content-center align-content-center mt-4 p-0 ">
                <button type="button" class="d-flex justify-content-between align-items-center p-2 rounded google-btn"
                    style="width: 50%; ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 48 48" class="me-1">
                        <path fill="#4285F4"
                            d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z" />
                        <path fill="#34A853"
                            d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z" />
                        <path fill="#FBBC05"
                            d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z" />
                        <path fill="#EA4335"
                            d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z" />
                    </svg>
                    <span class="text-center ">Google</span>
                    <span></span>
                </button>
            </div>
        </div>
        <button onclick="toggleDarkMode()" class="toggle-btn rounded shadow-dark">DarkMode</button>
    </div>


    <?php require_once __DIR__ . '/../../externals/scripts.php'; ?>
    <script>
    window.onload = function() {
        const theme = localStorage.getItem('theme') || 'light';
        document.body.classList.add(theme + "-mode");


    };

    function toggleDarkMode() {
        const isDark = document.body.classList.contains('dark-mode');
        document.body.classList.remove(isDark ? 'dark-mode' : 'light-mode');
        document.body.classList.add(isDark ? 'light-mode' : 'dark-mode');
        localStorage.setItem('theme', isDark ? 'light' : 'dark');

    }
    </script>
</body>

</html>
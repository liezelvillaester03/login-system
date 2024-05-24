<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Dashboard</title>

    <style>

.sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  z-index: 100;
  padding: 48px 0 0; /* Height of navbar */
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
}

.flex-column{
  background-color: rgba(129, 129, 129, 0.911);
  padding: 30px 0 0;
  height: calc(100vh - 48px);
}

.sidebar-sticky {
  position: relative;
  top: 0;
  height: calc(100vh - 48px);
  padding-top: .5rem;
}

@media (min-width: 768px) {
  .sidebar {
      width: 250px;
  }
}

@media (max-width: 767.98px) {
  .sidebar {
      width: 100%;
  }
}

.nav-link {
    margin: 10px 0;
    font-size: 18px;
}

.welcome-text {
    text-align: center;
    margin-top: 50px;
}
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <form class="form-inline" action="{{ route('admin.logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.add.student') }}">Add Student</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.add.facilitator') }}">Add Facilitator</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <h1 class="mt-5 welcome-text">Welcome to Admin Dashboard</h1>
                <!-- Your dashboard content goes here -->
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

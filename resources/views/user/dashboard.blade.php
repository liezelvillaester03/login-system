<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head content -->
</head>
<body>
    <h1>Welcome to Student Dashboard</h1>
    {{-- <form method="POST" action="{{ route('student.logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form> --}}
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Time Tracking Dashboard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    .container-wrapper {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f8f9fa;
    }
    .container {
      background: white;
      padding: 2rem;
      border-radius: 0.5rem;
      box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    }
    .header {
      text-align: center;
      margin-bottom: 2rem;
    }
    .header i {
      font-size: 3rem;
      color: #007bff;
    }
    .header h1 {
      margin-top: 1rem;
      font-size: 2rem;
      font-weight: 600;
    }
    .time-display {
      display: flex;
      justify-content: space-between;
      margin-bottom: 2rem;
    }
    .time-display div {
      flex: 1;
      text-align: center;
    }
    .time-display label {
      display: block;
      font-weight: 600;
    }
    .buttons {
      text-align: center;
    }
    .buttons button {
      margin: 0.5rem;
    }
  </style>
</head>
<body>
  <div class="container-wrapper">
    <div class="container">
      <div class="header">
        <i class="fas fa-clock"></i>
        <h1>Time Tracking Dashboard</h1>
      </div>
      <div class="time-display">
        <div>
          <label for="time-in">Time In:</label>
          <input type="text" id="time-in" class="form-control" readonly>
        </div>
        <div>
          <label for="time-out">Time Out:</label>
          <input type="text" id="time-out" class="form-control" readonly>
        </div>
      </div>
      <div class="buttons">
        <button class="btn btn-primary" onclick="recordTime('in')">Time In</button>
        <button class="btn btn-secondary" onclick="recordTime('out')">Time Out</button>
        <button class="btn btn-danger" onclick="logout()">Logout</button>
      </div>
    </div>
  </div>
  <script src="script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

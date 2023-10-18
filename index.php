<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Document</title>
  <style>
    .selector-for-some-widget {
      box-sizing: content-box;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row justify-content-md-center">
      <form class="row g-3 needs-validation" novalidate action="reg.php" method="post">
        <div class="col-md-12 position-relative justify-content-md-center">
          <h1>Đăng ký thông tin đăng nhập</h1>
        </div>
        <div class="col-md-12 position-relative">
          <label for="fullname" class="form-label">Họ và tên</label>
          <input type="text" class="form-control" id="validationTooltip01" name="fullname" required>
          <div class="valid-tooltip">
            Looks good!
          </div>
        </div>
        <div class="col-md-12 position-relative">
          <label for="username" class="form-label">Tên đăng nhập</label>
          <input type="text" class="form-control" id="validationTooltip02" name="username" required>
          <div class="valid-tooltip">
            Looks good!
          </div>
        </div>
        <div class="col-md-12 position-relative">
          <label for="password" class="form-label">Mật khẩu</label>
          <input type="password" class="form-control" id="validationTooltip03" name="password" required>
          <div class="invalid-tooltip">
            Please provide a valid city.
          </div>
        </div>
        <div class="col-md-12 position-relative">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control" id="validationTooltip05" name="email" required>
          <div class="invalid-tooltip">
            Please provide a valid zip.
          </div>
        </div>

        <div class="col-md-12 position-relative">
          <label for="address" class="form-label">Địa chỉ</label>
          <input type="text" class="form-control" id="validationTooltip05" name="address" required>
          <div class="invalid-tooltip">
            Please provide a valid zip.
          </div>
        </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit" name="btn-reg">Submit form</button>
        </div>
      </form>
      <div class="col-12">
          <button class="btn btn-primary" id="loginButton">Đăng nhập</button>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script>
        // 2. Sử dụng JavaScript để xử lý sự kiện khi nút button được click
        document.getElementById("loginButton").addEventListener("click", function() {
            // 3. Sử dụng hàm `window.location` để chuyển hướng đến trang login.php
            window.location.href = "login/login.php";
        });
    </script>
</body>

</html>
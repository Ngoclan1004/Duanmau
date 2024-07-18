<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../../assets/css/admin.css" />
  </head>
  <body>
    <div class="container">
      <!-- header -->
      <div class="header bg-success text-light p-4 text-center">
        QUẢN TRỊ SIÊU THỊ TRỰC TUYẾN
      </div>
      <!-- menu -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="../admin.html">Trang chủ</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a
                  class="nav-link active"
                  aria-current="page"
                  href="list-danhmuc.html"
                  >Danh mục</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sản phẩm</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Khách hàng</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Đơn hàng</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Bình luận</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- main -->
      <div class="row mt-5 main-web">
        <div class="col-md-8">
          <h3>Thêm danh mục sản phẩm mới</h3>
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Tên danh mục</label>
              <input
                type="text"
                class="form-control"
                id="name"
                placeholder="Nhập tên danh mục"
              />
            </div>
            <button type="submit" class="btn btn-primary">Thêm mới</button>
          </form>
        </div>
        <div class="col-md-3 offset-md-1">
          <div class="card mt-5" style="width: 18rem">
            <div class="card-header">Top 10 SP có nhiều view nhất</div>
            <div class="list-group">
              <a
                href="#"
                class="list-group-item list-group-item-action list-item-link"
              >
                <img src="../../assets/image/sp1.jpg" alt="" />
                Xiaomi Redmi Note 12 8GB 128GB
              </a>
              <a
                href="#"
                class="list-group-item list-group-item-action list-item-link"
              >
                <img src="../../assets/image/sp2.jpg" alt="" />
                iPhone 13 128GB | Chính hãng VN/A
              </a>
              <a
                href="#"
                class="list-group-item list-group-item-action list-item-link"
              >
                <img src="../../assets/image/sp3.jpg" alt="" />
                Samsung Galaxy Z Flip5 256GB
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- footer -->
      <div class="footer col-md-12">
        <nav class="navbar navbar-dark bg-secondary">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              @Bản quyền thuộc hệ thống siêu thị trực tuyến
            </a>
          </div>
        </nav>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="../../assets/js/admin.js"></script>
  </body>
</html>

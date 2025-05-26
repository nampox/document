<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NAMPOX Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">nampox</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Báo cáo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Người dùng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cài đặt</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="container py-5">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">excel</h5>
                    <p class="card-text text-muted">export/import file excel/csv</p>
                    <a href="{{route('excel')}}" class="btn btn-primary mt-auto">NEXT</a>
                </div>
            </div>
        </div>

{{--        <div class="col-md-4">--}}
{{--            <div class="card h-100 shadow-sm">--}}
{{--                <div class="card-body d-flex flex-column">--}}
{{--                    <h5 class="card-title">Chức năng B</h5>--}}
{{--                    <p class="card-text text-muted">Mô tả ngắn gọn về chức năng B.</p>--}}
{{--                    <a href="#" class="btn btn-primary mt-auto disabled">Đang phát triển</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</main>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

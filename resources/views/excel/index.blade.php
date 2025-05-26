<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang Excel</title>
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

<div class="container py-5">
    <h2 class="mb-4">Test Import / Export Excel / CSV</h2>

    <div class="card mb-4">
        <div class="card-header">Nhập file Excel/CSV</div>
        <div class="card-body">
            <form action="{{ route('excel.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input type="file" name="file" class="form-control" accept=".csv,.xls,.xlsx" required>
                </div>
                <button type="submit" class="btn btn-primary">Import</button>
            </form>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">Xuất dữ liệu</div>
        <div class="card-body">
            <a href="{{ route('excel.export', ['type' => 'csv']) }}" class="btn btn-success me-2">Export CSV</a>
            <a href="{{ route('excel.export', ['type' => 'xlsx']) }}" class="btn btn-info">Export Excel</a>
        </div>
    </div>

    @if(session('imported_data'))
        <div class="card">
            <div class="card-header">Dữ liệu đã nhập</div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        @foreach(array_keys(session('imported_data')[0]) as $key)
                            <th>{{ $key }}</th>
                        @endforeach
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(session('imported_data') as $row)
                        <tr>
                            @foreach($row as $cell)
                                <td>{{ $cell }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

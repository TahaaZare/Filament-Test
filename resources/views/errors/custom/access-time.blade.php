<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>دسترسی غیرمجاز</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">
<div class="card shadow-sm text-center p-4" style="max-width: 450px; width: 90%;">
    <div class="card-body">
        <div class="mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="#ffc107" class="bi bi-exclamation-triangle-fill mx-auto" viewBox="0 0 16 16">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.71c.89 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1-2.002 0 1 1 0 0 1 2.002 0z"/>
            </svg>
        </div>
        <h1 class="card-title mb-3 text-warning">⚠️ {{ $message ?? "دسترسی فقط از ساعت ۹ صبح تا ۵ بعدازظهر مجاز است." }}</h1>
        <p class="card-text text-secondary fs-5">لطفاً بعداً مراجعه کنید.</p>
        <a href="{{ url()->previous() }}" class="btn btn-warning mt-3">بازگشت</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

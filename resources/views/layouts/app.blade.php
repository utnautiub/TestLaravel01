<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Page @yield("title")</title>
		<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
		<script defer src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
		<link rel="stylesheet" href="{{ asset('/fontawesome-free-6.4.2-web/css/all.css') }}">
		<script defer src="{{asset('/fontawesome-free-6.4.2-web/js/fontawesome.min.js')}}"></script>
		<script defer>
			setTimeout(function() {
					document.getElementById('success-alert').style.display = 'none';
			}, 3000); // 3 giây
		</script>
		<style>
    #success-alert {
        display: block; /* Bắt đầu hiển thị thông báo */
    }
		.long-column {
    width: 200px; /* Đặt độ rộng của cột là 200px */
}

</style>
</head>
<body>
		<!-- Header -->
		<header>
				@include('includes/header')
		</header>
		<!-- Main Content -->
		<main class="mx-5">
				@yield('content')
		</main>
		<!-- Footer -->
		<footer>
				@include('includes/footer')
		</footer>
</body>
</html>
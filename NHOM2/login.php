<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script>
        function validateLoginForm() {
            const email = document.forms["loginForm"]["email"].value;
            const password = document.forms["loginForm"]["password"].value;

            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                alert("Vui lòng nhập email hợp lệ.");
                return false;
            }

            if (password === "") {
                alert("Vui lòng nhập mật khẩu.");
                return false;
            }

            return true;
        }
    </script>
</head>
<body class="bg-green-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md mx-auto p-6">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <div class="text-center mb-6">
                <div class="bg-green-600 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <span class="text-white text-3xl font-bold">Hi!</span>
                </div>
                <h1 class="text-2xl font-bold text-gray-800">Nhóm 2</h1>
            </div>
            <p class="text-center text-gray-600 mb-6">Đăng nhập để tiếp tục</p>
            <div class="bg-gray-100 rounded-lg p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4 text-center">Đăng nhập tài khoản</h2>
                <form name="loginForm" action="login.php" method="POST" onsubmit="return validateLoginForm()">
                    <div class="mb-4">
                        <input type="text" name="email" placeholder="Nhập email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500" required>
                    </div>
                    <div class="mb-4 relative">
                        <input type="password" name="password" placeholder="Nhập mật khẩu" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500" required>
                        <i class="fas fa-eye absolute right-3 top-3 text-gray-500"></i>
                    </div>
                    <div class="mb-4 flex items-center">
                        <input type="checkbox" id="remember" name="remember" class="mr-2">
                        <label for="remember" class="text-gray-600">Ghi nhớ đăng nhập</label>
                    </div>
                    <button type="submit" class="w-full bg-green-600 text-white p-3 rounded-lg font-bold hover:bg-green-700 transition duration-300">
                        Đăng nhập
                    </button>
                </form>
            </div>
            <p class="text-center text-gray-600 mt-6">Chưa có tài khoản? <a href="index.php" class="text-green-600">Đăng ký ngay</a></p>
        </div>
    </div>
</body>
</html>

<html lang="en">
<head>
    <!-- Thiết lập bảng mã và khả năng hiển thị tốt trên thiết bị di động -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- Import Tailwind CSS để làm giao diện nhanh chóng và đẹp mắt -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- FontAwesome để dùng các icon như con mắt hiển thị mật khẩu -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- JavaScript kiểm tra dữ liệu trước khi form được gửi -->
    <script>
        function validateForm() {
            // Lấy các giá trị từ các trường trong form
            const email = document.forms["registerForm"]["email"].value;
            const password = document.forms["registerForm"]["password"].value;
            const confirmPassword = document.forms["registerForm"]["confirm_password"].value;
            const captcha = document.forms["registerForm"]["captcha"].value;
            const captchaValue = document.getElementById("captchaValue").value;
            
            // Kiểm tra file ảnh
            const fileInput = document.forms["registerForm"]["profile_image"];
            const file = fileInput.files[0];
            if (file) {
                const fileType = file.type;
                // Nếu không phải file ảnh thì cảnh báo
                if (!fileType.startsWith("image/")) {
                    alert("Chỉ cho phép tải lên tập tin ảnh (JPG, PNG, v.v).");
                    return false;
                }
            }

            // Kiểm tra email có đúng định dạng hay không
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                alert("Vui lòng nhập địa chỉ email hợp lệ.");
                return false;
            }

            // Kiểm tra độ dài mật khẩu tối thiểu 8 ký tự
            if (password.length < 8) {
                alert("Mật khẩu phải có ít nhất 8 ký tự.");
                return false;
            }

            // Kiểm tra mật khẩu có khớp không
            if (password !== confirmPassword) {
                alert("Mật khẩu không khớp.");
                return false;
            }

            // Kiểm tra mã CAPTCHA người dùng nhập có trùng không
            if (captcha !== captchaValue) {
                alert("CAPTCHA không đúng.");
                return false;
            }

            // Nếu mọi thứ hợp lệ, cho phép gửi form
            return true;
        }
    </script>
</head>

<body class="bg-green-100 flex items-center justify-center min-h-screen">
    <!-- Container chính giữa màn hình -->
    <div class="w-full max-w-md mx-auto p-6">
        <!-- Khung trắng chứa form -->
        <div class="bg-white rounded-lg shadow-lg p-8">

            <!-- Logo hình tròn và tiêu đề nhóm -->
            <div class="text-center mb-6">
                <div class="bg-green-600 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <span class="text-white text-3xl font-bold">Hi!</span>
                </div>
                <h1 class="text-2xl font-bold text-gray-800">Nhóm 2</h1>
            </div>

            <!-- Lời nhắc nhập thông tin -->
            <p class="text-center text-gray-600 mb-6">Nhập thông tin để tạo tài khoản </p>

            <!-- Phần nền xám chứa form -->
            <div class="bg-gray-100 rounded-lg p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4 text-center">Đăng ký tài khoản </h2>

                <!-- Form đăng ký -->
                <form name="registerForm" action="login.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">

                    <!-- Nhập email -->
                    <div class="mb-4">
                        <input type="text" name="email" placeholder="Nhập email" 
                               class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500" 
                               required>
                    </div>

                    <!-- Nhập mật khẩu với yêu cầu ít nhất 8 ký tự -->
                    <div class="mb-4 relative">
                        <input type="password" name="password" minlength="8" placeholder="Nhập mật khẩu" 
                               class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500" 
                               required>
                        <i class="fas fa-eye absolute right-3 top-3 text-gray-500"></i> <!-- Icon con mắt -->
                    </div>

                    <!-- Nhập lại mật khẩu để xác nhận -->
                    <div class="mb-4 relative">
                        <input type="password" name="confirm_password" minlength="8" placeholder="Nhập lại mật khẩu" 
                               class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500" 
                               required>
                        <i class="fas fa-eye absolute right-3 top-3 text-gray-500"></i>
                    </div>

                    <!-- Upload ảnh đại diện, chỉ cho phép file ảnh -->
                    <div class="mb-4">
                        <!-- Sửa lỗi thiếu dấu ngoặc kép ở `accept` -->
                        <input type="file" name="profile_image" accept="image/*" 
                               class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500" 
                               required>
                    </div>

                    <!-- Checkbox đồng ý điều khoản -->
                    <div class="mb-4 flex items-center">
                        <input type="checkbox" id="terms" name="terms" class="mr-2" required>
                        <label for="terms" class="text-gray-600">Tôi đồng ý với các điều khoản sử dụng</label>
                    </div>

                    <!-- CAPTCHA -->
                    <div class="mb-4">
                        <?php
                            // Mảng chứa các ảnh CAPTCHA và mã đúng tương ứng
                            $captchas = [
                                ["src" => "uploads/anh1.png", "value" => "3172"],
                                ["src" => "uploads/anh2.png", "value" => "6907"],
                                ["src" => "uploads/anh3.png", "value" => "5849"]
                            ];

                            // Chọn ngẫu nhiên một ảnh CAPTCHA
                            $selectedCaptcha = $captchas[array_rand($captchas)];
                        ?>
                        <!-- Hiển thị ảnh CAPTCHA -->
                        <img src="<?php echo $selectedCaptcha['src']; ?>" alt="CAPTCHA Image" class="mb-2 w-32 h-12">

                        <!-- Lưu giá trị CAPTCHA đúng để kiểm tra bằng JavaScript -->
                        <input type="hidden" id="captchaValue" value="<?php echo $selectedCaptcha['value']; ?>">

                        <!-- Ô nhập CAPTCHA người dùng sẽ nhập -->
                        <input type="text" name="captcha" placeholder="Nhập CAPTCHA" 
                               class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500" 
                               required>
                    </div>

                    <!-- Nút gửi form -->
                    <button type="submit" 
                            class="w-full bg-green-600 text-white p-3 rounded-lg font-bold hover:bg-green-700 transition">
                        Đăng ký
                    </button>
                </form>
            </div>

            <!-- Gợi ý chuyển sang trang đăng nhập nếu đã có tài khoản -->
            <p class="text-center text-gray-600 mt-6">
                Bạn đã có tài khoản? <a href="#" class="text-green-600">Đăng nhập</a>
            </p>
        </div>
    </div>
</body>
</html>

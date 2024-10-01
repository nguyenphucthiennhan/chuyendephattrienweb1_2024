<?php  
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; // Biến để lưu thông tin người dùng
$_id = NULL;  // Biến để lưu ID người dùng
$errors = []; // Biến để lưu lỗi

// Hàm mã hóa user_id
function encodeUserId($id) {
    return base64_encode($id . '*&BUYG');
}

// Hàm giải mã user_id
function decodeUserId($encoded_id) {
    $decoded = base64_decode($encoded_id);
    return str_replace('*&BUYG', '', $decoded);
}

// Kiểm tra nếu có tham số 'id' trong URL và giải mã
if (!empty($_GET['id'])) {
    $_id = decodeUserId($_GET['id']); // Giải mã ID từ URL
    $user = $userModel->findUserById($_id); // Lấy thông tin người dùng từ database
}

// Xử lý khi form được submit
if (!empty($_POST['submit'])) {
    // Lấy dữ liệu từ form
    $name = $_POST['name'];
    $password = $_POST['password'];

    // Validate Name
    if (empty($name)) {
        $errors['name'] = "Name is required.";
    } elseif (!preg_match("/^[a-zA-Z0-9]{5,15}$/", $name)) {
        $errors['name'] = "Name must be alphanumeric and 5-15 characters long.";
    }

    // Validate Password
    if (empty($password)) {
        $errors['password'] = "Password is required.";
    } elseif (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()])[A-Za-z\d~!@#$%^&*()]{5,10}$/", $password)) {
        $errors['password'] = "Password must be 5-10 characters long, and include at least one lowercase letter, one uppercase letter, one number, and one special character.";
    }

    // Nếu không có lỗi, xử lý cập nhật hoặc thêm mới người dùng
    if (empty($errors)) {
        if (!empty($_id)) {
            // Cập nhật người dùng hiện có
            $userModel->updateUser($_POST);
        } else {
            // Thêm người dùng mới
            $userModel->insertUser($_POST);
        }
        header('location: list_users.php'); // Chuyển hướng về danh sách người dùng sau khi xử lý xong
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>
<body>
    <?php include 'views/header.php'?>
    <div class="container">
        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $_id?>">
                
                <!-- Trường nhập tên người dùng -->
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" 
                           value='<?php if (!empty($user[0]['name'])) echo $user[0]['name'] ?>'>
                    <?php if (!empty($errors['name'])): ?>
                        <div class="text-danger"><?php echo $errors['name']; ?></div>
                    <?php endif; ?>
                </div>

                <!-- Trường nhập mật khẩu -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <?php if (!empty($errors['password'])): ?>
                        <div class="text-danger"><?php echo $errors['password']; ?></div>
                    <?php endif; ?>
                </div>

                <!-- Nút submit -->
                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php } else { ?>
            <!-- Thông báo khi không tìm thấy người dùng -->
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
        <?php } ?>
    </div>
</body>
</html>

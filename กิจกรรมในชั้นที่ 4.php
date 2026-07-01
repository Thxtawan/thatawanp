<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ฟอร์มรับสมัคร</title>
</head>
<body>

    <h2>ฟอร์มรับสมัคร</h2>

    <form action="process.php" method="post" target="_blank">

        <label>ชื่อ:</label><br>
        <input type="text" name="firstname" value="ฐตวรรณ"><br><br>

        <label>นามสกุล:</label><br>
        <input type="text" name="lastname" value="พงษ์พยัคฆ์"><br><br>

        <label>ที่อยู่:</label><br>
        <textarea name="address" rows="3" cols="40">2/1 สุขสวัสดิ์ เขตราษฎร์บูรณะ แขวงบางปะกอก</textarea><br><br>

        <label>เลขที่:</label><br>
        <input type="text" name="house_no" value="15"><br><br>

        <label>ถนน:</label><br>
        <input type="text" name="road" value="สุขสวัสดิ์"><br><br>

        <label>ซอย:</label><br>
        <input type="text" name="soi" value="สุขสวัสดิ์20"><br><br>

        <label>ตำบล:</label><br>
        <input type="text" name="subdistrict" value="-"><br><br>

        <label>อำเภอ:</label><br>
        <input type="text" name="district"><br><br>

        <label>จังหวัด:</label><br>
        <input type="text" name="province" value="กรุงเทพ"><br><br>

        <label>รหัสไปรษณีย์:</label><br>
        <input type="text" name="zipcode" value="101440"><br><br>

        <label>เบอร์โทรศัพท์:</label><br>
        <input type="tel" name="phone" value="098-480-6122"><br><br>

        <label>E-mail:</label><br>
        <input type="email" name="email" value="pung242561@gmail.com"><br><br>

        <label>Username:</label><br>
        <input type="text" name="username" value="pungpi"><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" value="122628"><br><br>

        <input type="submit" value="สมัครสมาชิก">
        <input type="reset" value="ล้างข้อมูล">

    </form>

</body>
</html>

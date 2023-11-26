

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/view.css">
    <title>Header</title>
</head>

<body>
    <header>
        <div class="container">
            <img src="img/logo.png" alt="Logo">
            <h1 class="taito"> Bất Động Sản PPC</h1>
        </div>
    </header>
    <div id="sidebar">
        <ul>
            <!-- <li><a href="#">Manage Propety</a></li> -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle">Manage Property</a>
                <ul class="dropdown-menu">
                    <li><a href="#">View list of Property</a></li>
                    <li><a href="#">Search Property</a></li>
                    <li><a href="#">Add Property</a></li>
                    <li><a href="#">Update Property</a></li>
                    <li><a href="#">Delete Property</a></li>
                </ul>
            </li>

            <!-- <li><a href="#">Manage Full Contact</a></li> -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle">Manage Full Contact</a>
                <ul class="dropdown-menu">
                    <li><a href="ViewContract.php">View list of Full Contract</a></li>
                    <li><a href="#">Search Full Contract</a></li>
                    <li><a href="addcontract.php">Add Full Contract </a></li>
                    <li><a href="#">Update Full Contract </a></li>
                    <li><a href="#">Print Full Contract </a></li>
                </ul>
            </li>

        </ul>
    </div>


    <div id="content">
        <div class="banner">
            <p class="aaaa">Home | Manage Full Contract | View List of Full Contract </p>

        </div>

        <h1 class="tittle1">Danh sách hợp đồng:</h1>
        <main>
            <div class="main-section">


            <?php
include 'connect.php';

$sql = "SELECT * FROM Full_Contract";

$result = $conn->query($sql);

// Xử lý kết quả truy vấn...
while($row = $result->fetch_assoc()){
    echo "
    <div class='product'>
        <img src='img/1.png' alt='Sản phẩm 1'>
        <h2>Mã hợp đồng: " . $row['Full_Contract_Code'] . "</h2>
        <p>Ngày ký: " . $row['Date_Of_Contract'] . "<br>
        Loại hợp đồng: Mua Bán<br>
        Bên liên quan: Công ty Bất động sản PPC và Khách hàng A<br>
        Nội dung hợp đồng:Chi tiết nội dung hợp đồng được hiển thị ở đây
        </p>
        <div class='buttons'>
            <button class='view-button'>Xem</button>
            <button class='edit-button'>Sửa</button>
            <button class='delete-button'>Xóa</button>
        </div>
    </div>
    ";
}
?>



                
                
              
             
                <!-- Thêm sản phẩm khác nếu cần -->
            </div>

     
        </main>
        
    </div>



    <footer>
        <div class="column">
            <div class="logo">
                <img class="imgfooter" src="logo.png" alt="Logo">
            </div>
            <div class="hotline2">
                <p></p>
                <p>Home

                </p>
                <p>Manage Full Contract</p>
                <p>Add Full Contract</p>
            </div>
        </div>

        <div class="column1">

            <div class="icon hotline">
                <!-- Icon hotline -->
            </div>
            <div class="hotline">
                <p class="hl">Hotline</p>
                <p>Địa chỉ: 69/68 Đ. Đặng Thuỳ Trâm, Phường 13, Bình Thạnh, Thành phố Hồ Chí Minh 70000

                </p>
                <p>Điện thoại: 028 7105 9999 Máy lẻ 292. Fax: 028 7105 9999

                </p>
                <p>Email: Nhom18@gmail.com| Hotline: 18889999

                </p>
            </div>
        </div>

        <div class="column2">
            <div class="icon hotline">
                <!-- Icon hotline -->
            </div>
            <div class="hotline">
                <p class="hl">Hotline</p>
                <p>Liên hệ

                </p>
                <p>Bán đất

                </p>
                <p>Chi phí đăng tin

                </p>
            </div>
        </div>

        <div class="column3">
            <div class="icon customer-support">
                <!-- Icon hỗ trợ khách hàng -->
            </div>
            <div class="hotline">
                <p class="hl">Hổ trợ khách hàng</p>
                <p>Nhom8@gmail.com</p>
                <input type="text" class="textbox" placeholder="Gửi mail">
                <button class="submit-button">Gửi</button>
            </div>
        </div>
    </footer>


</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var dropdowns = document.querySelectorAll(".dropdown");

        dropdowns.forEach(function (dropdown) {
            dropdown.addEventListener("click", function () {
                this.classList.toggle("active");
            });
        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script>
    const host = "https://provinces.open-api.vn/api/";
var callAPI = (api) => {
    return axios.get(api)
        .then((response) => {
            renderData(response.data, "city");
        });
}
callAPI('https://provinces.open-api.vn/api/?depth=1');
var callApiDistrict = (api) => {
    return axios.get(api)
        .then((response) => {
            renderData(response.data.districts, "district");
        });
}
var callApiWard = (api) => {
    return axios.get(api)
        .then((response) => {
            renderData(response.data.wards, "ward");
        });
}

var renderData = (array, select) => {
    let row = ' <option disable value="">Chọn</option>';
    array.forEach(element => {
        row += `<option data-id="${element.code}" value="${element.name}">${element.name}</option>`
    });
    document.querySelector("#" + select).innerHTML = row
}

$("#city").change(() => {
    callApiDistrict(host + "p/" + $("#city").find(':selected').data('id') + "?depth=2");
    printResult();
});
$("#district").change(() => {
    callApiWard(host + "d/" + $("#district").find(':selected').data('id') + "?depth=2");
    printResult();
});
$("#ward").change(() => {
    printResult();
})

var printResult = () => {
    if ($("#district").find(':selected').data('id') != "" && $("#city").find(':selected').data('id') != "" &&
        $("#ward").find(':selected').data('id') != "") {
        let result = $("#city option:selected").text() +
            " | " + $("#district option:selected").text() + " | " +
            $("#ward option:selected").text();
        $("#result").text(result)
    }

}
	</script>

</html>



<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/add.css">
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
            <p class="aaaa">Home | Manage Full Contract | Add Full Contract </p>

        </div>

        <h1 class="tittle1">Thêm hợp đồng:</h1>
        <form action="add.php" method="POST">
        <div class="function">
            
                <div class="columnn">
                    <h2>Thông tin về bên bán

                    </h2>
                    <input type="text" name="nguoithue" placeholder="Tên người thuê / Tên doanh nghiệp

                    ">
                    <input type="text" name="cancuocBan" placeholder="CMND/CCCD/HỘ CHIẾU

                    ">
                    <input type="text" name="diachiNguoiBan" placeholder="Địa chỉ/ hộ khẩu thường trú

                    ">
                    <input type="text" name="SDTBan" placeholder="Số điện thoại

                    ">
                    <input type="text" name="mailBan" placeholder="Địa chỉ email

                    ">
                    <h2>Thông tin về bất động sản:

                    </h2>
                    <input type="text" name="" placeholder="Tên bất động sản

                    ">
                    <div class="custom-select">
                        <select class="select-box" id="city">
                            <option value="" name="" selected>Chọn tỉnh thành</option>
                        </select>

                        <select class="select-box" id="district">
                            <option value="" name="" selected>Chọn quận huyện</option>
                        </select>

                        <select class="select-box" id="ward">
                            <option value="" name="" selected>Chọn phường xã</option>
                        </select>
                    </div>
                    <input type="text" name="" placeholder="Địa chỉ bất động sản, số nhà đường

                    ">
                    <input type="text" name="" placeholder="Diện tích

                    ">
                    <input type="text" name="" placeholder="Thông tin về số phòng, tiện ích, trạng thái hiện tại, vv.

                    ">
                    <div class="custom-select">
                        <select  name="" class="select-box">
                            <option value="option1" disabled>Loại bất động sản</option>
                            <option value="option2">Căn hộ chung cư</option>
                            <option value="option3">Nhà phố </option>
                            <option value="option3">Đất nền </option>
                            <option value="option3">Biệt thự nghỉ dưỡng </option>
                            <option value="option3">Nhà xưởng.</option>
                        </select>

                    </div>
           <h2>Thông tin thêm (tuỳ chọn):

                    </h2>
                    <input type="text" name="" placeholder="Trạng thái của bất động sản

                    ">
                    <input type="text" name="" placeholder="Điều khoản về bảo trì và sửa chữa

                    ">
                    <input type="text" name="" placeholder="Thông tin về việc giữ lại tiền thuê cho mục đích">


                </div>

                <div class="columnn">
                    <h2>Thông tin về bên mua

                    </h2>
                    <input type="text" name="tenNmua" placeholder="Họ tên người mua

                    ">
                    <input type="text" name="NgaySinh" placeholder="Ngày Sinh                ">
                    <input type="text" name="CCCD" placeholder="CMND/CCCD/HỘ CHIẾU

                    ">
                    <input type="text" name="" placeholder="Địa chỉ email
                    
                    ">
                    <input type="text" name="diachi" placeholder="Địa chỉ/ hộ khẩu thường trú

                    ">
                    <input type="text" name="phone" placeholder="Số điện thoại

                    ">
                    <h2>Thông tin về hợp đồng:

                    </h2>
                    <input type="text" name="DateHD" placeholder="Ngày bắt đầu hợp đồng

                    ">
                    <input type="text" name="" placeholder="Ngày kết thúc hợp đồng

                    ">
                    <input type="text" name="tienmua" placeholder="Mức tiền mua:

                    ">
                    <input type="text" name="tiencoc" placeholder="Mức tiền đặt cọc:

                    ">
                    <input type="text" name="tienconlai" placeholder="Số tiền còn lại:

                    ">
                    <div class="custom-select">
                        <select class="select-box">
                            <option value="option1" disabled>Trạng thái</option>
                            <option value="option2">Chưa thanh toán</option>
                            <option value="option3">Đã thanh toán</option>
                        </select>

                    </div>
                    <h2>Các tài liệu pháp lý:
                    </h2>
                    <div class="textbox111">
                        <label for="tennguoitheu">Hợp đồng thuê (đính kèm file)</label>
                        <input type="file" id="tennguoitheu" />
                    </div>
                    <button class="submit-button1">Gửi</button>

                </div>
            
        </div>
        </form>
        <div class="dk">
            <p>Điều 1: Nội dung thỏa thuận

                Bên A bằng văn bản này cùng với những cam kết sau đây bán cho bên B Bất động sản có địa chỉ như trên và
                đồng ý nhượng quyền sử dụng đất có nhà ở nằm trong khuôn viên được xác định bởi các giấy tờ đã nêu trên.
            </p>

            <p>Điều 2: Trách nhiệm của các bên

                Các thành viên bên B liên đới cùng chịu trách nhiệm về quyền lợi và nghĩa vụ của mình khi được mua. Bên
                B chấp nhận mọi quy định về địa dịch thông hành đã có và sẽ có, các quy định về lộ giới, quy hoạch xây
                dựng, chỉnh trạng đô thị, quy hoạch sử dụng đất vì lợi ích quốc gia cùng toàn bộ những rủi ro hoặc thiệt
                hại sẽ xảy ra, trừ những điều pháp luật cấm mua bán chuyển dịch mà bên A cố tình giấu diếm bên B.

                Bên B sẽ đóng đủ mọi thứ thuế theo quy định đối với Bất động sản đã mua bán chuyển nhượng bởi hợp đồng
                này kể từ ngày thực sự làm chủ sở hữu theo quy định khác nếu có.</p>
            <p>Điều 3: Quyền và nghĩa vụ của Bên A

                Bên A giao nhà đúng tình trạng hiện hữu và đúng thời hạn đã quy định trong hợp đồng, đồng thời giao đủ
                toàn bộ hồ sơ có liên quan đến Bất động sản nói trên cho bên B, cùng với các điều kiện đã nêu ở Điều 3.

                Nhận tiền của bên B theo phương thức đã thỏa thuận trong hợp đồng này.

                Phải bảo quản Bất động sản đã chuyển nhượng trong thời gian chưa giao giao cho bên B, không được thế
                chấp, cho thuê hoặc hứa bán cho người khác.

                Có nghĩa vụ đóng góp các loại thuế theo quy định để tạo điều kiện thuận lợi cho bên B tiến hành đăng ký
                trước bạ sang bên cơ quan có thẩm quyền.</p>
            <p>Điều 4: Quyền và nghĩa vụ của Bên B

                Được nhận bất động sản theo tình trạng đã quy định trong hợp đồng và được nhận toàn bộ hồ sơ về Bất động
                sản.

                Trả đủ tiền chuyển nhượng cho bên A theo thỏa thuận đã ghi trong hợp đồng.

                Đóng thuế trước bạ đầy đủ và đăng bộ theo quy định.</p>
            <p>Điều 5: Cam kết của các bên

                Cam kết của bên A

                - Bên A cam kết về tình trạng sở hữu của bất động sản: Bất động sản nêu trong hợp đồng này là thuộc
                quyền sở hữu hợp pháp của bên A, không phải do bên A đứng tên thay người khác.

                - Bất động sản bên A chuyển nhượng không thuộc diện xử lý theo các chính sách cải tạo của Nhà nước.

                - Nhà và đất trong khuôn viên không bị tranh chấp về quyền sở hữu và quyền sử dụng.

                - Bất động sản không bị xử lý bằng các quyết định của cơ quan Nhà nước có thẩm quyền mà chủ sở hữu chưa
                chấp hành.

                - Bất động sản không bị buộc phải bỏ dở theo quyết định của cơ quan có thẩm quyền.

                - Trong trường hợp bên A đem bán bất động sản mà đang bị vướng một trong những điều đã cam kết trên đây
                do đó đã gây thiệt hại cho bên B, bên A cam kết sẽ hoàn trả đủ ngay lập tức tiền bán cho bên B và sẽ bồi
                thường cho bên B theo thỏa thuận của hai bên. Trong trường hợp hai bên không thỏa thuận được thì bên B
                có quyền khởi kiện ra Tòa án và bên A phải bồi thường cho bên B theo phán quyết của Tòa án.

                Cam kết của bên B

                - Đã xem xét rõ tình trạng hiện hữu của Bất động sản bao gồm cả giấy tờ chủ quyền bất động sản và bằng
                lòng nhận, đồng thời cam kết không khiếu nại gì.

                - Tôn trọng mọi địa dịch thông hành cũ và mới theo quy định của pháp luật(nếu có).</p>
            <p>Điều 6: Điều khoản chung

                - Hai bên cam kết thực hiện đầy đủ các điều khoản đã ghi trong hợp đồng, trường hợp phát sinh tranh
                chấp, hai bên cùng nhau thương lượng giải quyết, nếu hai bên không tự giải quyết được thì được quyền đưa
                đến cơ quan Tòa án để yêu cầu giải quyết theo quy định của pháp luật.

                - Mọi sửa đổi, bổ sung hợp đồng này chỉ có giá trị khi được lập bằng văn bản và do hai bên ký tên.

                - Hợp đồng được lập thành 02 bản, mỗi bên giữ một bản có giá trị pháp lý như nhau.</p>
        </div>
    </div>



    <footer>
        <div class="column">
            <div class="logo">
                <img class="imgfooter" src="img/logo.png" alt="Logo">
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
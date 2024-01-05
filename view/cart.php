<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php include "header.php"; 
            include "../controller/controller.php";
    ?>
    <section id="header">
        <a href="#"><img src="../img/logo.png" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
                <li id="lg-bag"><a class="active" href="cart.php"><i class='bx bx-shopping-bag'></i></a></li>
                <a href="#" id="close"><i class='bx bx-x' ></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class='bx bx-shopping-bag'></i></a>
            <i class='bx bx-log-out' id="bar"></i>
        </div>
    </section>
    <section id="page-header" class="about-header">
        <h2>#Let's_Talk</h2>
        <p>LEAVE A MESSAGE, We love to hear form you!</p>
    </section>

    <section id="cart" class="section-p1">
    <table width="100%">
        <thead>
            <tr>
                <td>Remove</td>
                <td>Image</td>
                <td>Product</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Subtotal</td>
            </tr>
        </thead>
        <tbody>
        <form action="#" method="post">
        <?php 
            $total = 0;
            $pro = new product();
            if(isset($_SESSION['cart'])){                         
                foreach($_SESSION['cart'] as $key => $value){
                    $result = $pro->getProductById($value['productkey']);
                    $set = $result->fetch();
                    
                    
                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                        $quantity = $_POST['qty'.$key];
                    }else{
                        $quantity = 1;
                    }
                    $subtotal = $quantity * $set['p_price']*1.1;
                    $total += $subtotal;
        ?>

        <tr>
            <td><button><i class='bx bx-radio-circle-marked'></i></button></td>
            <td><img src="<?php echo '../img/product/'.$set['p_image']?>" alt=""></td>
            <td><?php echo $set['p_name']?></td>
            <td><?php echo number_format($set['p_price'],0,',','.').' VNĐ'?></td>
            <td><input class="cart-quantity-input" type="number" name="qty<?php echo $key?>" value="<?php echo $quantity?>" onchange="updateTotal(this, <?php echo $set['p_price'];?>, 'total<?php echo $key;?>')"></td>
            <td id="total<?php echo $key;?>" class="subtotal"><?php echo number_format($subtotal, 0, ',', '.')?></td>
        </tr>

        <?php
                }
            }
        ?>
        </form>
        </tbody>
    </table>
</section>
<section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Mã giảm giá</h3>
            <div>
                <input type="text" placeholder="Nhập mã giảm giá của bạn">
                <button class="normal">Áp dụng</button>
            </div>
        </div>
        <div id="subtotal">
            <h3>Tổng giỏ</h3>
            <table>
                <tr>
                    <td>Tổng sản phẩm</td>
                    <td id="total" name='tong'><?php echo number_format($total, 0, ',', '.').' VNĐ'?></td>
                </tr>
                <tr>
                    <td>Phí giao hàng</td>
                    <td>Miễn phí</td>
                </tr>
                <tr>
                    <td><trong>Tổng tiền</trong></td>
                    <td id="totalAmount"><strong><?php echo number_format($total,0,',','.').' VNĐ'?></strong></td>
                </tr>
                <tr>
                    <td>
                        <form action="" method="post">
                            <button name="pay" class="normal">Thanh toán</button></td>
                            <?php 
                                if(isset($_POST['pay'])){
                                    echo "<script>
                                    alert('Bạn đã thanh toán thành công');
                                    </script>";     
                                }
                             ?>
                        </form>
                        
                </tr>
            </table>
        </div>
    </section>
<script>
    function updateTotal(input, price, elementId) {
    var quantity = parseFloat(input.value);
    var total = quantity * price * 1.1;

    // Kiểm tra nếu quantity = 1 thì total = price
    if (quantity == 1) {
        total = price;
    }

    document.getElementById(elementId).innerHTML = total.toLocaleString();
    updateGrandTotal();
}
    
    function updateGrandTotal() {
        var subtotals = document.getElementsByClassName("subtotal");
        var grandTotal = 0;
        for(var i = 0; i < subtotals.length; i++) {
            grandTotal += parseFloat(subtotals[i].innerHTML.replace(/[^0-9.]/g, ''));
        }
        document.getElementById("total").innerHTML = grandTotal.toLocaleString();
        document.getElementById("totalAmount").innerHTML = grandTotal.toLocaleString();
    }
    var quantity_input = document.getElementsByClassName("cart-quantity-input");
    for (var i = 0; i < quantity_input.length; i++) {
    var input = quantity_input[i];
    input.addEventListener("change", function (event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 1) {
      input.value = 1;
    }
    
  })
}

var deleteButtons = document.querySelectorAll('td a i.bx-radio-circle-marked');

// Duyệt qua từng phần tử để thêm sự kiện click
deleteButtons.forEach(function(button) {
    button.addEventListener('click', function() {
        // Lấy hàng (tr) chứa phần tử bị nhấn
        var row = this.closest('tr');

        // Xác định index (stt) của hàng
        var rowIndex = Array.from(row.parentNode.children).indexOf(row);

        // Xóa sản phẩm khỏi giỏ hàng (tại vị trí rowIndex)
        // Thêm mã xử lý xóa sản phẩm tại đây, ví dụ:
        removeFromCart(rowIndex);

        // Xóa hàng (tr) khỏi bảng (tbody)
        row.remove();

        // Cập nhật tổng giá trị và subtotal
        updateGrandTotal();
    });
});

function removeFromCart(rowIndex) {
    // Lấy thông tin về sản phẩm từ các thẻ td trong hàng được xóa
    var row = document.querySelector('table#cart tbody').rows[rowIndex];
    var productName = row.cells[2].textContent;
    var productPrice = parseFloat(row.cells[3].textContent.replace(/[^0-9.]/g, ''));
    var quantity = parseInt(row.cells[4].querySelector('input').value);

    // Tính toán subtotal của sản phẩm được xóa
    var subtotal = productPrice * quantity;

    // Xóa sản phẩm khỏi giỏ hàng (thực hiện xử lý tùy theo nhu cầu của bạn)
    // Ở ví dụ này, chúng tôi xóa sản phẩm bằng cách loại bỏ nó khỏi mảng session
    <?php 
        unset($_SESSION['cart'][$key]);
    ?>

    // Cập nhật tổng giá trị và subtotal
    updateGrandTotal();

    // Hiển thị thông báo xóa sản phẩm thành công (tùy theo nhu cầu của bạn)
    alert("Đã xóa sản phẩm " + productName + " khỏi giỏ hàng.");

    // Gửi yêu cầu cập nhật lại trang (tùy chọn)
    location.reload();
}
</script>

    <?php include "footer.php"; ?>

</body>
</html>
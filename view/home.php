<main class="catalog  mb ">
    <div class="boxleft">
        <div class="banner">
            <img id="banner" src="./img/anh0.jpg" alt="">
            <button class="pre" onclick="pre()">&#10094;</button>
            <button class="next" onclick="next()">&#10095;</button>
        </div>

        <div class="items">
            <?php
            $i = 0;
            foreach ($sanpham as $sp) :
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                $hinh = $img_path . $img;
                if (($i == 2) || ($i == 5) || ($i == 8)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
            ?>
                <div class="box_items <?php echo $mr ?>">
                    <div class="row img">
                        <a href="<?php echo $linksp ?>" style="display:block;margin:0 auto;"><img src="<?php echo $hinh ?>" alt=""></a>
                    </div>
                    <a href="<?php echo $linksp ?>">
                        <b><?php echo $name ?></b>
                    </a>
                    <p style="color: red;">
                        <b><?php echo number_format($price) ?> ₫</b>
                    </p>
                    <div>
                        <button data-id="<?= $id ?>" class="btnCart" onclick="addToCart(<?= $id ?>, '<?= $name ?>', <?= $price ?>)">Thêm vào giỏ hàng</button>
                    </div>
                </div>
            <?php
                $i += 1;
                endforeach;
            ?>

        </div>
    </div>
    <div class="boxright">
        <?php
        include "boxright.php";
        ?>
    </div>
</main>
<script src="main.js"></script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    let totalProduct = document.getElementById('totalProduct');
    function addToCart(productId, productName, productPrice) {
        // console.log(productId, productName, productPrice);
        // Sử dụng jQuery
        $.ajax({
            type: 'POST',
            // Đường dẫ tới tệp PHP xử lý dữ liệu
            url: './view/addToCart.php',
            data: {
                id: productId,
                name: productName,
                price: productPrice
            },
            success: function(response) {
                totalProduct.innerText = response;
                alert('Bạn đã thêm sản phẩm vào giỏ hàng thành công!')
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website bán hàng</title>
    <link rel="stylesheet" href="./css/css.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <style>
     
    </style>
</head>
<body>
    <div class="boxcenter">
    <div class="row2">
         <div class="row2 font_title">
          <h1>THÊM MỚI SẢN PHẨM<Menu:c></Menu:c></h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
           <div class="row2 mb10 form_content_container">
           <label> Danh mục </label> <br>
           <select name="iddm" id="">
            <?php
               foreach($listdanhmuc as $danhmuc){
                extract($danhmuc);
               echo '<option value="'.$id.'">'.$name.'</option>' ;
              }
            ?>
           </select>
           </div>
           <div class="row2 mb10">
            <label>Tên sản phẩm: </label> <br>
            <input type="text" name="tensp" >
           </div>
           <div class="row2 mb10">
            <label>Giá: </label> <br>
            <input type="text" name="giasp" >
           </div>
           <div class="row2 mb10">
            <label>Hình ảnh: </label> <br>
            <input type="file" name="hinh" >
            <!-- trả về mảng -->
           </div>
           <div class="row2 mb10">
            <label>Mô tả: </label> <br>
           <textarea name="mota" id="" cols="30" rows="10"></textarea>
           </div>
         
           <div class="row mb10 ">
         <input class="mr20" name="themmoi" type="submit" value="THÊM MỚI">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=listsp">  <input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
           <?php
           if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
           
            ?>
          </form>
         </div>
        </div>
        </div>
       
</body>
</html>
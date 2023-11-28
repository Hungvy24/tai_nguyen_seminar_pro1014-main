     <!-- END HEADER -->
     <main class="catalog  mb ">

         <div class="boxleft">
             <div class="  mb">
                 <?php
                    extract($onesp);
                    ?>
                 <div class="box_title">CHI TIẾT SẢN PHẨM</div>
                 <div class="box_content">
                     <?php
                        extract($onesp);
                        //                    print_r($onesp);
                        $img = $img_path . $img;
                        echo '<img src="' . $img . '"><br>';
                        echo $mota;
                        ?>
                 </div>
             </div>
             <script>
                 $(document).ready(function() {
                     $("#binhluan").load("view/binhluan/binhluanform.php", {
                         idpro: <?= $id ?>
                     });

                 });
             </script>
             <div class=" " id="binhluan">
             </div>
             <div class=" mb">
                 <div class="box_title">SẢN PHẨM CÙNG LOẠI</div>
                 <div class="box_content">
                     <?php
                        foreach ($sp_cung_loai as $sp_cung_loai) {
                            extract($sp_cung_loai);
                            $linksp = "index.php?act=sanphamct&idsp=" . $id;
                            echo '<li><a href="' . $linksp . '">' . $name . '</a></li>';
                        }
                        ?>
                 </div>
             </div>
         </div>
         <div class="boxright">
             <?php
                include "boxright.php";
                ?>
         </div>
     </main>
<?php include('inc/header.php') ?>
<?php include('inc/nav.php') ?>
<?php
session_start();
if (isset($_SESSION['register'])){
    header("Location: login.php");
}
 ?>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <h1>Go Green For A<br>Sustainable Future</h1>
                <p>You cannot get through a single day without having an impact on the world<br> around you. What you do makes a difference and you have to<br> decide what kind of a difference you want to make. </p>
                <a href="product.php" class="button">Explore Now &#8594;</a>
            </div>
            <div class="col-2">
                <img src="images/e.jpg">   
            </div>         
        </div>  
    </div>
</div>    
<!-- Featured Products -->
<div class="categories">
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-3">
                <a href="productDetails.html"><img src="images/c1.jpg"></a>
                <a href=""><h4>Airtight Glass Storage Jars</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>N$170.00</p>
            </div>
            <div class="col-3">
                <img src="images/c2.jpg">
                <h4>Stacking Glass Storage Jars</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>N$200.00</p>
            </div>
            <div class="col-3">
                <img src="images/c3.webp">
                <h4>Copper Container</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>N$350.00</p>
            </div>
            <div class="col-3">
                <img src="images/c4.webp">
                <h4>2pcs Glass Containers</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>N$250.00</p>
            </div>
        </div>

        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="col-3">
                <img src="images/u1.jpg">
                <h4>Wooden 5-pcs Utensils</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>N$100.00</p>
            </div>
            <div class="col-3">
                <img src="images/u2.webp">
                <h4>Wooden 7-pcs Utensils</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>N$120.00</p>
            </div>
            <div class="col-3">
                <img src="images/u3.webp">
                <h4>kitchen gadgets</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>N$150.00</p>
            </div>
            <div class="col-3">
                <img src="images/u4.jpg">
                <h4>Wooden 4-pcs Utensils</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>N$180.00</p>
            </div>
            <div class="row">
                <div class="col-3">
                    <img src="images/p1.webp">
                    <h4>Non-Stick Aluminum</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>N$200.00</p>
                </div>
                <div class="col-3">
                    <img src="images/p2.webp">
                    <h4>Cookware Sets Non-Stick</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>N$500.00</p>
                </div>
                <div class="col-3">
                    <img src="images/p3.avif">
                    <h4>Nonstick 16 Piece Cookware</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>N$1500.00</p>
                </div>
                <div class="col-3">
                    <img src="images/0.webp">
                    <h4>Nonstick 12PCS Stainless Steel</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>N$1300.00</p>
                </div>

    </div>
</div>

<?php include('inc/footer.php') ?>

<!-- js toggle menu -->
<script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px"

    function menutoggle(){
       if(MenuItems.style.maxHeight == "0px") {
            MenuItems.style.maxHeight = "200px"
       }
       else{
            MenuItems.style.maxHeight = "0px"
       }
    }
</script>
</body>
</html>
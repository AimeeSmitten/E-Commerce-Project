<?php include('inc/header.php') ?>
<?php include('inc/nav.php') ?>

<!--Cart Items  -->
<div class="small-container cart-page">
    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="images/u4.jpg">
                    <div>
                        <p>Wooden Utensils</p>
                        <small>Price: N$180.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>N$180.00</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="images/p1.webp">
                    <div>
                        <p>Non-Stick Aluminums</p>
                        <small>Price: N$200.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>N$200.00</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="images/c2.jpg">
                    <div>
                        <p>Stacking Glass Storage Jars</p>
                        <small>Price: N$200.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>N$200.00</td>
        </tr>
    </table>
    <div class="total-price">
        <table>
            <tr>
                <td>Subtotal</td>
                <td>N$580.00</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>N$87.00</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>N$493.00</td>
            </tr>
        </table>
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
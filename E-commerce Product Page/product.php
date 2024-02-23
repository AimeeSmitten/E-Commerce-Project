<?php include('inc/header.php') ?>
<?php include('inc/nav.php') ?>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopping_cart";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>

<?php
session_start();

if(isset($_POST['cart_id'])){
    if($_POST['action'] == 'add'){
        $outputTable = "";
        $total = 0;
        if(isset($_SESSION['cart'])){
            $isalreadyExist = 0;
            foreach($_SESSION['cart'] as $key => $value){
                if($_SESSION['cart'][$key]['p_id'] == $_POST['cart_id']){
                    $isalreadyExist++;
                    $_SESSION['cart'][$key]['p_quantity'] == $_SESSION['cart'][$key]['p_quantity'] + $_POST['cart_quantity'];
                }
            }
            if($isalreadyExist < 1){
                $itemArray = array(
                    'p_id' => $_POST['cart_id'],
                    'p_name' => $_POST['cart_name'],
                    'p_price' => $_POST['cart_price'],
                    'p_quantity' => $_POST['cart_quantity'],
                );
                $_SESSION['cart'][] = $itemArray;
            }
        }else{
            $itemArray = array(
                'p_id' => $_POST['cart_id'],
                'p_name' => $_POST['cart_name'],
                'p_price' => $_POST['cart_price'],
                'p_quantity' => $_POST['cart_quantity'],
            );
            $_SESSION['cart'][] = $itemArray;
        }
        if(!empty($_SESSION['cart'])){
            $outputTable .= "<div class='small-container cart-page'><table><th><tr><td>Name</td><td>Price</td><td>Quantity</td><td>Action</td></tr></th>";
            foreach($_SESSION['cart'] as $key => $value){
                $outputTable .= "<tr><td>".$value['p_name']."</td><td>".($value['p_price'] * $value['p_quantity'])."</td><td>".$value['p_quantity']."</td></tr>";
                $total = $total +($value['p_price'] * $value['p_quantity']);
            }
            $outputTable .= "</table></div>";
            $outputTable .= "<b>Total: ".$total."</b>";
        }
    }
    echo json_encode($outputTable);
}
?>

    <div class="small-container">
        <div class="row row-2">
            <h2>All Products</h2>
            <select>
                <option>Default Sorting</option>
                <option>Sort by Price</option>
                <option>Sort by Popularity</option>
                <option>Sort by Sale</option>
            </select>
        </div>
        <div class="small-container single-product">
                    
    </div>


        <div class="row">

        <?php 
        $sql = "SELECT * FROM products";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($result)){
            // echo $row['id'] ."". $row['name'] ."". $row['image'] ."". $row['price']."<br>";

        ?>
        <div class="col-3">
                <img src="images/<?php echo $row['image']?>">
                <h4><?php echo $row['name']?></h4>
                <p>Price: N$<?php echo $row['price']?></p>

                <div>
                <p>Quantity</p>
                <select id="quantity<?php echo $row['id']?>">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                </div>

                <input type="hidden" id="name<?php echo $row['id']?>" value="<?php echo $row['name']?>">
                <input type="hidden" id="price<?php echo $row['id']?>" value="<?php echo $row['price']?>">

                <a href="productDetails.php"><button class="button" data-id="<?php echo $row['id']?>">Add To Cart</button></a>
                
            </div>

        <?php
        }
        ?>

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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('button').click(function(){
            id = $(this).data('id');
            name = $('#name' + id).val()
            price = $('#price' + id).val()
            quantity = $('#quantity' + id).val()
            
            $.ajax({
                url:'productDetails.php',
                method: 'POST',
                dataType: 'json',
                data:{
                    cart_id: id,
                    cart_name: name,
                    cart_price: price,
                    cart_quantity: quantity,
                    acttion: 'add'
                },
                
                success: function(data){
                        alert(data)
                    }
            }).fail(function(xhr, textStatus, errorThrown){
                alert(xhr.responseText);
            })
        })
    })
</script>
</body>
</html>

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

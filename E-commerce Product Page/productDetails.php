<?php include('inc/header.php') ?>
<?php include('inc/nav.php') ?>
<?php
session_start();
?>

    <!-- Single Product Details -->

    <div class="small-container single-product">
        <form action="cart.php">
        <div class="row">
            <div class="col-2">
                <img src="images/c1.jpg" width="100%" id="ProductImg" >
                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="images/c1.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/co1.webp" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/co2.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/co1.jpg" width="100%" class="small-img">
                    </div>
                </div>

            </div>
            <div class="col-2">
                <p>Home / Storage Jars</p>
                <h1>Airtight Glass Storage Jar </h1>
                <h4>N$170.00</h4>

                <input type="number" value="1">

                <h3>Product Details <i class="fa fa-indent"></i></h3>
                <br>
                <p>High quality natural bamboo, food-grade native environmentally friendly glass, 
                    non-toxic, odor-free, safe, harmless to the human body;Come with inner liners and 
                    screw bamboo lids,which is good sealing and leak-proof,You do not have to worry 
                    about the contents will be spilling out
                </p>
                <a href="cart.php" class="button">Add To Cart</a>
                <br>
                <br>
                <br>
            </div>
        </div>
    </form>
    </div>

<!-- Title -->
<div class="small-container">
        <div class="row row-2">
            <h2>Ratings</h2>
        </div>
    </div> 
    
<!-- Rating System -->
<div class="small-container">
        <div class="col-2">
            <!-- tri table-flex -->
            <div class="tri table-flex">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <div class="rnb rvl">
                                    <h3>1.5/5.0</h3>
                                </div>
                                <div class="pdt-rate">
                                    <div class="pro-rating">
                                        <div class="clear rating mart8">
                                            <div class="rating-stars">
                                                <div class="grey-stars"></div>
                                                <div class="filled-stars" style="width: 60%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rnrn">
                                    <p class="rars">No Reviews</p>
                                </div>
                            </td>
                            <td>
                                <div class="rpb">
                                    <div class="rnpb">
                                        <label>5 <i class="fa fa-star"></i></label>
                                        <div class="ropb">
                                            <div class="ripb" style="width: 20%;"></div>
                                        </div>
                                        <div class="lable">(1)</div>
                                    </div>
                                    <div class="rnpb">
                                        <label>4 <i class="fa fa-star"></i></label>
                                        <div class="ropb">
                                            <div class="ripb" style="width: 50%;"></div>
                                        </div>
                                        <div class="lable">(1)</div>
                                    </div>
                                    <div class="rnpb">
                                        <label>3 <i class="fa fa-star"></i></label>
                                        <div class="ropb">
                                            <div class="ripb" style="width: 80%;"></div>
                                        </div>
                                        <div class="lable">(15)</div>
                                    </div>
                                    <div class="rnpb">
                                        <label>2 <i class="fa fa-star"></i></label>
                                        <div class="ropb">
                                            <div class="ripb" style="width: 30%;"></div>
                                        </div>
                                        <div class="lable">(11)</div>
                                    </div>
                                    <div class="rnpb">
                                        <label>1 <i class="fa fa-star"></i></label>
                                        <div class="ropb">
                                            <div class="ripb" style="width: 40%;"></div>
                                        </div>
                                        <div class="lable">(1)</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="rrb">
                                    <p>Please Review Our Products!</p>
                                    <button class="button rbtn opmd">Add Review</button>
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="review-modal" style="display: none">
                    <div class="review-bg">
                        <div class="rmp">
                            <div class="rpc">
                                <span><i class="fa fa-times"></i></span>
                            </div>
                            <div class="rps" style="align-items: center">
                                <i class="fa fa-star" data-index="0" style="display: none"></i>
                                <i class="fa fa-star" data-index="1"></i>
                                <i class="fa fa-star" data-index="2"></i>
                                <i class="fa fa-star" data-index="3"></i>
                                <i class="fa fa-star" data-index="4"></i>
                                <i class="fa fa-star" data-index="5"></i>
                            </div>
                            <input type="hidden" value="" class="starRateV">
                            <input type="hidden" value="" class="rateDate">
                            <div class="rptf" style="align-items: center;">
                                <input type="text" class="raterName" placeholder="Enter Your Name...">
                            </div>
                            <div class="rptf" style="align-items: center;">
                                <textarea class="rateMsg" placeholder="Describe Your Experience"></textarea>
                            </div>
                            <div class="rate-error" style="align-items: center;">
                                <button class="button">Post Review</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bri">
                <div class="uscm">
                    <div class="uscm-secs">
                        <div class="us-img">
                            <p>B</p>
                        </div>
                        <div class="uscms">
                            <div class="us-rate">
                                <div class="pdt-rate">
                                    <div class="pro-rating">
                                        <div class="grey-star"></div>
                                        <div class="filled-star" style="width: 60%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="us-cmt">
                        <p>User's Comment Here</p>
                    </div>
                    <div class="us-nm">
                        <p><i>By <span class="cmnm">Bright</span>on <span class="cmdt">23 February 2024</span></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <!-- Title -->
 <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <p>View More</p>
        </div>
    </div>               
  
<!-- Product Items -->
    <div class="small-container">
       
        <div class="row">
            <div class="col-3">
                <a href="productDetails.html"><img src="images/j.jpg"></a>
                <h4>2 Pack Large Glass Storage </h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>N$110.00</p>
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

    <?php include('inc/footer.php') ?>

<script src="main.js"></script>

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
<!-- js for product gallery -->
<script>
    var ProductImg = document.getElementById("ProductImg");
    var SmallImg = document.getElementsByClassName("small-img");

    SmallImg[0].onclick = function(){
        ProductImg.src = SmallImg[0].src;
    }
    SmallImg[1].onclick = function(){
        ProductImg.src = SmallImg[1].src;
    }
    SmallImg[2].onclick = function(){
        ProductImg.src = SmallImg[2].src;
    }
    SmallImg[3].onclick = function(){
        ProductImg.src = SmallImg[3].src;
    }

    function zoomIn() {
    var ProductImg = document.getElementById("ProductImg");
    var width = ProductImg.clientWidth;
    ProductImg.style.width = width + 100 + "px";
    }

    function zoomOut() {
    var ProductImg = document.getElementById("ProductImg");
    var width = ProductImg.clientWidth;
    ProductImg.style.width = width - 100 + "px";
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
                        $('#displayCheckout').html(data)
                    }
            }).fail(function(xhr, textStatus, errorThrown){
                alert(xhr.responseText);
            })
        })
    })
</script>
</body>
</html>
<!-- Shopping cart section  -->
<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['delete-cart-submit'])){
            $deletedrecord = $Cart->deleteCart($_POST['service_id']);
        }

        // save for later
        if (isset($_POST['wishlist-submit'])){
            $Cart->saveForLater($_POST['service_id']);
        }
    }

    

?>

<div class="pageSpacer" style="height: 10vh; width: 100%"></div>
<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Shopping Cart</h5>
        

        <!--  shopping cart services   -->
        <div class="row">
            <div class="col-sm-9">
                <?php
                    foreach ($product->getData('cart') as $service) :
                        $cart = $product->getProduct($service['service_id']);
                        $subTotal[] = array_map(function ($service){
                ?>
                <!-- cart service -->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-2">

                        <img src="<?php echo $service['service_image'] ?? "./assets/products/1.png" ?>" style="height: 120px; width: 100%">

                    </div>
                    
                    <div class="col-sm-8">

                        <h5 class="font-baloo font-size-20"><?php echo $service['service_name'] ?? "Unknown"; ?></h5>
                        <small>by <?php echo $service['service_type'] ?? "Category"; ?></small>
                        
                        

                        
                        

                        <!-- product rating -->
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-rale font-size-14">20,534 ratings</a>
                        </div>
                        <!--  !product rating-->

                        <!-- product qty -->
                        <div class="d-flex pt-2">
                            <div class="qty d-flex font-rale w-25">
                                <button class="qty-up border bg-light" data-id="<?php echo $service['service_id'] ?? '0'; ?>"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="<?php echo $service['service_id'] ?? '0'; ?>" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                <button data-id="<?php echo $service['service_id'] ?? '0'; ?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>

                            <form method="get" action="book-services2.php?bookid=1">                     
                            <button type="submit" class="btn btn-warning mt-3 ml-3">Book Appointment</button>
                            </form>

                            <form method="post">
                                <input type="hidden" value="<?php echo $service['service_id'] ?? 0; ?>" name="service_id">
                                <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger px-3 border-right">Remove</button>
                            </form>

                            <form method="post">
                                <input type="hidden" value="<?php echo $service['service_id'] ?? 0; ?>" name="service_id">
                                <button type="submit" name="wishlist-submit" class="btn font-baloo text-danger">Save for Later</button>
                            </form>


                        </div>
                        <!-- !product qty -->

                    </div>

                    <div class="col-sm-2 text-right">
                        <div class="font-size-20 text-danger font-baloo">
                            P<span class="product_price" data-id="<?php echo $service['service_id'] ?? '0'; ?>"><?php echo $service['service_price'] ?? 0; ?></span>
                        </div>
                    </div>
                </div>
                <!-- !cart service -->
                <?php
                            return $service['service_price'];
                        }, $cart); // closing array_map function
                    endforeach;
                ?>
            </div>
            <!-- subtotal section-->
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-9 font-rale text-success py-1 pl-4 text-center"><i class="fas fa-check"></i> 7 Days Service Warranty</h6>
                    <h6 class="font-size-9 font-rale text-success py-1 pl-4 text-center"><i class="fas fa-check"></i> On-time Completion</h6>
                    <h6 class="font-size-9 font-rale text-success py-1 pl-4 text-center"><i class="fas fa-check"></i> Satisfaction Guaranteed</h6>
                    <div class="border-top py-4">

                        <h5 class="font-baloo font-size-20">Subtotal ( <?php echo isset($subTotal) ? count($subTotal) : 0; ?> item):&nbsp; <span class="text-danger">P<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span> </span> </h5>
                        <form method="get" action="thank-you.php">
                        <button type="submit" class="btn btn-warning mt-3">Confirm Bookings</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- !subtotal section-->
        </div>
        <!--  !shopping cart services   -->
    </div>
</section>
<!-- !Shopping cart section  -->
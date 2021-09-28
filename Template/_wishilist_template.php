<!-- Shopping cart section  -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['delete-cart-submit'])){
        $deletedrecord = $Cart->deleteCart($_POST['service_id']);
    }

    if(isset($_POST['cart-submit'])){
        $Cart->saveForLater($_POST['service_id'], 'cart', 'wishlist');
    }
}
?>

<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Wishlist</h5>

        <!--  shopping cart services   -->
        <div class="row">
            <div class="col-sm-9">
                <?php
                foreach ($product->getData('wishlist') as $service) :
                    $cart = $product->getProduct($service['service_id']);
                    $subTotal[] = array_map(function ($service){
                        ?>
                        <!-- cart service -->
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="<?php echo $service['service_image'] ?? "./assets/products/1.png" ?>" style="height: 120px;" alt="cart1" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20"><?php echo $service['service_name'] ?? "Unknown"; ?></h5>
                                <small>by <?php echo $service['service_brand'] ?? "Brand"; ?></small>
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
                                <div class="qty d-flex pt-2">

                                    <form method="post">
                                        <input type="hidden" value="<?php echo $service['service_id'] ?? 0; ?>" name="service_id">
                                        <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger pl-0 pr-3 border-right">Delete</button>
                                    </form>

                                    <form method="post">
                                        <input type="hidden" value="<?php echo $service['service_id'] ?? 0; ?>" name="service_id">
                                        <button type="submit" name="cart-submit" class="btn font-baloo text-danger">Add to Cart</button>
                                    </form>


                                </div>
                                <!-- !product qty -->

                            </div>

                            <div class="col-sm-2 text-right">
                                <div class="font-size-20 text-danger font-baloo">
                                    $<span class="product_price" data-id="<?php echo $service['service_id'] ?? '0'; ?>"><?php echo $service['service_price'] ?? 0; ?></span>
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
        </div>
        <!--  !shopping cart services   -->
    </div>
</section>
<!-- !Shopping cart section  -->
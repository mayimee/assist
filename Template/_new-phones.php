<!-- New Phones -->
<?php
shuffle($product_shuffle);

// request method post
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['new_phones_submit'])){
        // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['service_id']);
    }
}
?>
<section id="new-phones">
    <div class="container pt-3">
        <h4 class="font-rubik font-size-20">New Services</h4>
        <hr>

        <!-- owl carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach ($product_shuffle as $service) { ?>
                <div class="item bg-light mx-2" style="border: 1px solid #E4E5E8">
                    <div class="product font-rale pb-3">
                        <a href="<?php printf('%s?service_id=%s', 'product.php',  $service['service_id']); ?>"><img src="<?php echo $service['service_image'] ?? "./assets/products/1.png"; ?>" style="height: 150px" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6><?php echo  $service['service_name'] ?? "Unknown";  ?></h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>P<?php echo $service['service_price'] ?? '0' ; ?></span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="service_id" value="<?php echo $service['service_id'] ?? '1'; ?>">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                if (in_array($service['service_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                    echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                                }else{
                                    echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } // closing foreach function ?>
        </div>
        <!-- !owl carousel -->

    </div>
</section>
<!-- !New Phones -->
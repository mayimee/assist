<!-- Popular Service -->
<?php

    shuffle($service_shuffle);

    // request method post
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['popularServiceSubmit'])){
            // call method addToCart
            $Cart->addToCart($_POST['user_id'], $_POST['service_id']);
        }
    }
?>
<section id="popularService">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Popular Services</h4>
        <hr>
        <!-- owl carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach ($service_shuffle as $service) { ?>
            <div class="service py-2">
                <div class="service font-rale">
                    <a href="<?php printf('%s?service_id=%s', './pages/service.php',  $service['service_id']); ?>"><img src="<?php echo $service['service_image'] ?? "./assets/services/1.png"; ?>" alt="service1" class="img-fluid"></a>
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
                            <span>$<?php echo $service['service_price'] ?? '0' ; ?></span>
                        </div>
                        <form method="post">
                            <input type="hidden" name="service_id" value="<?php echo $service['service_id'] ?? '1'; ?>">
                            <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                            <?php
                            if (in_array($service['service_id'], $Cart->getCartId($service->getData('cart')) ?? [])){
                                echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                            }else{
                                echo '<button type="submit" name="popularServiceSubmit" class="btn btn-warning font-size-12">Add to Cart</button>';
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
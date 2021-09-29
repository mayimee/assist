<!-- Special Price -->
<?php
    $category = array_map(function ($pro){ return $pro['service_type']; }, $product_shuffle);
    $unique = array_unique($category);
    sort($unique);
    shuffle($product_shuffle);

// request method post
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['special_price_submit'])){
        // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['service_id']);
    }
}

$in_cart = $Cart->getCartId($product->getData('cart'));

?>
<section id="special-price">
    <div class="container">
        <h4 class="font-rubik font-size-20">Explore other services</h4>
        <div id="filters" class="button-group text-right font-baloo font-size-16">
            <button class="btn is-checked" data-filter="*">All Categories</button>
            <?php
                array_map(function ($category){
                    printf('<button class="btn" data-filter=".%s">%s</button>', $category, $category);
                }, $unique);
            ?>
        </div>

        <div class="grid">
            <?php array_map(function ($service) use($in_cart){ ?>
            <div class="grid-item <?php echo $service['service_type'] ?? "Category" ; ?>" >
            <div class="item mb-4" style="border: 1px solid #E4E5E8">    
                    <div class="product font-rale pb-3 mx-2 bg-light">
                        <a href="<?php printf('%s?service_id=%s', 'product.php',  $service['service_id']); ?>"><img src="<?php echo $service['service_image'] ?? "./assets/products/13.png"; ?>" style="height: 150px; width: 204px" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6><?php echo $service['service_name'] ?? "Unknown"; ?></h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>P<?php echo $service['service_price'] ?? 0 ?></span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="service_id" value="<?php echo $service['service_id'] ?? '1'; ?>">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                if (in_array($service['service_id'], $in_cart ?? [])){
                                    echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                                }else{
                                    echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php }, $product_shuffle) ?>
        </div>
    </div>
</section>
<!-- !Special Price -->

<!--   product  -->
<?php
    $service_id = $_GET['service_id'] ?? 1;
    foreach ($product->getData() as $service) :
        if ($service['service_id'] == $service_id) :
    
?>
<div class="pageSpacer" style="height: 12vh; width: 100%"></div>
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="pageSpacer" style="height: 6vh; width: 100%"></div>
                <img src="<?php echo $service['service_image'] ?? "./assets/products/1.png" ?>" alt="product" class="img-fluid">
                
            </div>
            <div class="col-sm-6 py-5 pl-4">
                <h5 class="font-baloo font-size-20"><?php echo $service['service_name'] ?? "Unknown"; ?></h5>
                <small>by <?php echo $service['service_companyName'] ?? "Company Name"; ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-rale font-size-14">20,534 ratings | 1000+ answered questions</a>
                </div>
                <hr class="m-0">

                <!---    product price       -->
                <table class="my-3">
                    
                    <tr class="font-rale font-size-14">
                        <td>Introductory Offer:&nbsp;</td>
                        <td class="font-size-20 text-danger">P<span><?php echo $service['service_price'] ?? 0;?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                    </tr>
                    
                </table>
                <!---    !product price       -->

                <!--    #policy -->
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">7 Days <br> Service Warranty</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-truck  border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">On-time <br>Completion</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">Satisfaction <br>Guaranteed</a>
                        </div>
                    </div>
                </div>
                <!--    !policy -->
                <hr>

                <div class="row d-flex flex-row">
                   
                    <!-- order-details -->
                    <div id="order-details" class="font-rale d-flex flex-row text-dark mr-5">
                        

                    
                        <!--<h6   h6 class="font-baloo">Service Date : </h6>  -->
                        
                        
                        <!-- Book Appointment Button
                            <form method="get" action="book-services2.php?bookid=1">
                            <button type="submit" class="btn btn-warning mt-3">Book Appointment</button>
                            </form>
                        -->
                   
                    </div>
                    <!-- !order-details -->

                        <!-- product qty section -->
                        <div class="qty d-flex">
                            <!-- old increment/decrement
                            <div class="d-flex">
                                <h6 class="font-baloo">Qty</h6>
                                <div class="ml-1 d-flex font-rale">
                                    <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                    <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                    <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down r-5"></i></button>
                                </div>
                            </div>
                        -->
                        <div style="display: flex">
                            <div class="d-flex">
                                <h6 class="font-baloo mr-2">Qty</h6>
                                <div class="cart-product-quantity" width="130px">
                                    <div class="input-group quantity">
                                        <div class="input-group-prepend decrement-btn" data-id="<?php echo $item['service_id'] ?? '0'; ?>">
                                            <span class="input-group-text">-</span>
                                        </div>
                                        <input type="text" class="qty-input form-control" style="width: 60px" maxlength="2" max="10" value="1" data-id="<?php echo $item['service_id'] ?? '0'; ?>">
                                        <div class="input-group-append increment-btn" data-id="<?php echo $item['service_id'] ?? '0'; ?>">
                                            <span class="input-group-text">+</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row pt-4 font-size-16 font-baloo">
                                <div class="col">
                                    <button type="submit" class="btn btn-danger form-control px-2" style="width: 100px">Checkout</button>
                                </div>
                                <div class="col">
                                    <?php
                                    if (in_array($service['service_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                        echo '<button type="submit" disabled class="btn btn-success font-size-16 form-control px-2">In the Cart</button>';
                                    }else{
                                        echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-16 form-control px-2">Add to Cart</button>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>                        
                        
                        <!-- !product qty section -->
                    </div>
                </div>

              
            </div>

            <div class="col-12 pt-5">
                <h6 class="font-rubik">Product Description</h6>
                <hr>
                <p class="font-rale font-size-14"><?php echo $service['service_description'] ?? "Service Description"; ?></p>
            </div>
        </div>
    </div>
</section>
<!--   !product  -->
<?php
        endif;
        endforeach;
?>
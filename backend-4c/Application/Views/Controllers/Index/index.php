<!-- Start slider -->
<section id="aa-slider">
    <div class="aa-slider-area">
        <div id="sequence" class="seq">
            <ul class="seq-canvas">
                <!-- single slide item -->
                <?php foreach ($events as $e): ?>
                    <li>
                        <div class="seq-model">
                            <img style="max-height: 400px" data-seq src="<?= UPLOAD_DIR . '/event/' . $e->image ?>"
                                 alt="<?= $e->description ?>"/>
                        </div>
                        <div class="seq-title">
                            <span data-seq>Until <?= date("d/m/Y", strtotime($e->date_end)); ?> </span>
                            <h2 data-seq><?= $e->title ?></h2>
                            <p data-seq><?= substr($e->description, 0, 30) ?>...</p>
                            <a data-seq href="event/<?= $e->params ?>.html" class="aa-shop-now-btn aa-secondary-btn">ENTER
                                NOW</a>
                        </div>
                    </li>
                <?php endforeach; ?>
                <!-- single slide item -->
                <li>
                    <div class="seq-model">
                        <img data-seq src="img/slider/1.jpg" alt="Women Jeans slide img"/>
                    </div>
                    <div class="seq-title">
                        <span data-seq>Save Up to 75% Off</span>
                        <h2 data-seq>Hello world!!!</h2>
                        <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                        <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- / slider -->
<!-- Start Promo section -->
<section id="aa-promo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-promo-area">
                    <div class="row">
                        <!-- promo left -->
                        <div class="col-md-5 no-padding">
                            <div class="aa-promo-left">
                                <div class="aa-promo-banner">
                                    <img src="img/promo-banner-1.jpg" alt="img">
                                    <div class="aa-prom-content">
                                        <span>75% Off</span>
                                        <h4><a href="#">I Phone 7 Plus</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- promo right -->
                        <div class="col-md-7 no-padding">
                            <div class="aa-promo-right">
                                <div class="aa-single-promo-right">
                                    <div class="aa-promo-banner">
                                        <img src="img/promo-banner-3.jpg" alt="img">
                                        <div class="aa-prom-content">
                                            <span>Exclusive Item</span>
                                            <h4><a href="#">SamSung Galaxy Note 7</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="aa-single-promo-right">
                                    <div class="aa-promo-banner">
                                        <img src="img/promo-banner-2.jpg" alt="img">
                                        <div class="aa-prom-content">
                                            <span>Sale Off</span>
                                            <h4><a href="#">Redmi Note 3 Pro</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="aa-single-promo-right">
                                    <div class="aa-promo-banner">
                                        <img src="img/promo-banner-4.jpg" alt="img">
                                        <div class="aa-prom-content">
                                            <span>New Arrivals</span>
                                            <h4><a href="#">LG</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="aa-single-promo-right">
                                    <div class="aa-promo-banner">
                                        <img src="img/promo-banner-5.jpg" alt="img">
                                        <div class="aa-prom-content">
                                            <span>25% Off</span>
                                            <h4><a href="#">Sony</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Promo section -->
<!-- Products section -->
<section id="aa-product">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="aa-product-area">
                        <div class="aa-product-inner">
                            <!-- start prduct navigation -->
                            <ul class="nav nav-tabs aa-products-tab">
                                <li class="active"><a href="#men" data-toggle="tab">Tất cả</a></li>
                                <li><a href="#women" data-toggle="tab">Apple</a></li>
                                <li><a href="#sports" data-toggle="tab">Samsung</a></li>
                                <li><a href="#electronics" data-toggle="tab">Phụ kiện</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Start men product category -->
                                <div class="tab-pane fade in active" id="men">
                                    <ul class="aa-product-catg">
                                        <!-- start single product item -->
                                        <?php foreach ($product as $p) { ?>
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img"
                                                       href="san-pham/<?= $p->params ?>.html"><img
                                                                width="250px" height="300px"
                                                                src="<?= !empty($p->iurl) ? UPLOAD_DIR . $p->iurl : 'img/man/polo-shirt-2.png' ?>"
                                                                alt="<?= $p->ilabel ?>"></a>
                                                    <a data-product-id="<?= $p->id ?>"
                                                       class="aa-add-card-btn" href="javascript:;"><span
                                                                class="fa fa-shopping-cart"></span>Thêm vào giỏ</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a
                                                                    href="san-pham/<?= $p->params ?>.html"><?= $p->title ?></a>
                                                        </h4>
                                                        <span
                                                                class="aa-product-price"><?= !empty($p->sale) ? number_format($p->sale, 0, ",", ".") : number_format($p->price, 0, ",", ".") ?>
                                                            .000 VNĐ</span><br/>
                                                        <?= !empty($p->sale) ? '<span class="aa-product-price"><del>' . number_format($p->price, 0, ",", ".") . '.000 VNĐ</del></span>' : '' ?>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                       title="Thêm vào yêu thích"><span
                                                                class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                       title="So sánh"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                       title="Xem nhanh" data-toggle="modal" data-id="<?= $p->id ?>"
                                                       data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                </div>
                                                <span class="aa-badge aa-hot" href="#">HOT!</span>
                                            </li>
                                        <?php } ?>
                                        <!-- product badge -->
                                        <!--                                            <span class="aa-badge aa-sale" href="#">SALE HEHE!</span>-->
                                        <!--                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>-->

                                    </ul>

                                    <a class="aa-browse-btn" href="#">Browse all Product <span
                                                class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / men product category -->
                                <!-- Start men product category -->
                                <div class="tab-pane fade in active" id="women">
                                    <ul class="aa-product-catg">
                                        <!-- start single product item -->
                                        <?php foreach ($apples as $p) { ?>
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img"
                                                       href="san-pham/<?= $p->params ?>.html"><img
                                                                width="250px" height="300px"
                                                                src="<?= !empty($p->iurl) ? UPLOAD_DIR . $p->iurl : 'img/man/polo-shirt-2.png' ?>"
                                                                alt="<?= $p->ilabel ?>"></a>
                                                    <a data-product-id="<?= $p->id ?>"
                                                       class="aa-add-card-btn" href="javascript:;"><span
                                                                class="fa fa-shopping-cart"></span>Thêm vào giỏ</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a
                                                                    href="san-pham/<?= $p->params ?>.html"><?= $p->title ?></a>
                                                        </h4>
                                                        <span
                                                                class="aa-product-price"><?= !empty($p->sale) ? number_format($p->sale, 0, ",", ".") : number_format($p->price, 0, ",", ".") ?>
                                                            .000 VNĐ</span><br/>
                                                        <?= !empty($p->sale) ? '<span class="aa-product-price"><del>' . number_format($p->price, 0, ",", ".") . '.000 VNĐ</del></span>' : '' ?>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                       title="Thêm vào yêu thích"><span
                                                                class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                       title="So sánh"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                       title="Xem nhanh" data-toggle="modal" data-id="<?= $p->id ?>"
                                                       data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                </div>
                                                <span class="aa-badge aa-hot" href="#">HOT!</span>
                                            </li>
                                        <?php } ?>
                                        <!-- product badge -->
                                        <!--                                            <span class="aa-badge aa-sale" href="#">SALE HEHE!</span>-->
                                        <!--                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>-->

                                    </ul>

                                    <a class="aa-browse-btn" href="#">Browse all Product <span
                                                class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / men product category -->
                                <!-- Start men product category -->
                                <div class="tab-pane fade in active" id="sports">
                                    <ul class="aa-product-catg">
                                        <!-- start single product item -->
                                        <?php foreach ($samsungs as $p) { ?>
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img"
                                                       href="san-pham/<?= $p->params ?>.html"><img
                                                                width="250px" height="300px"
                                                                src="<?= !empty($p->iurl) ? UPLOAD_DIR . $p->iurl : 'img/man/polo-shirt-2.png' ?>"
                                                                alt="<?= $p->ilabel ?>"></a>
                                                    <a data-product-id="<?= $p->id ?>"
                                                       class="aa-add-card-btn" href="javascript:;"><span
                                                                class="fa fa-shopping-cart"></span>Thêm vào giỏ</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a
                                                                    href="san-pham/<?= $p->params ?>.html"><?= $p->title ?></a>
                                                        </h4>
                                                        <span
                                                                class="aa-product-price"><?= !empty($p->sale) ? number_format($p->sale, 0, ",", ".") : number_format($p->price, 0, ",", ".") ?>
                                                            .000 VNĐ</span><br/>
                                                        <?= !empty($p->sale) ? '<span class="aa-product-price"><del>' . number_format($p->price, 0, ",", ".") . '.000 VNĐ</del></span>' : '' ?>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                       title="Thêm vào yêu thích"><span
                                                                class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                       title="So sánh"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                       title="Xem nhanh" data-toggle="modal" data-id="<?= $p->id ?>"
                                                       data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                </div>
                                                <span class="aa-badge aa-hot" href="#">HOT!</span>
                                            </li>
                                        <?php } ?>
                                        <!-- product badge -->
                                        <!--                                            <span class="aa-badge aa-sale" href="#">SALE HEHE!</span>-->
                                        <!--                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>-->

                                    </ul>

                                    <a class="aa-browse-btn" href="#">Browse all Product <span
                                                class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / men product category -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Products section -->
<!-- banner section -->
<section id="aa-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="aa-banner-area">
                        <a href="#"><img src="img/fashion-banner.jpg" alt="fashion banner img"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- popular section -->
<section id="aa-popular-category">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="aa-popular-category-area">
                        <!-- start prduct navigation -->
                        <ul class="nav nav-tabs aa-products-tab">
                            <li class="active"><a href="#popular" data-toggle="tab">Popular</a></li>
                            <li><a href="#featured" data-toggle="tab">Featured</a></li>
                            <li><a href="#latest" data-toggle="tab">Latest</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- Start men popular category -->
                            <div class="tab-pane fade in active" id="popular">
                                <ul class="aa-product-catg aa-popular-slider">
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-2.png"
                                                                                    alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                               title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                               data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                        </div>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-sale" href="#">SALE!</span>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/women/girl-2.png"
                                                                                    alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                <span class="aa-product-price">$45.50</span>
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                               title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                               data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                        </div>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/man/t-shirt-1.png"
                                                                                    alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        </figure>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                                            <span class="aa-product-price">$45.50</span>
                                        </figcaption>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                               title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                               data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                        </div>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/women/girl-3.png"
                                                                                    alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                               title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                               data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                        </div>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-1.png"
                                                                                    alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                               title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                               data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                        </div>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/women/girl-4.png"
                                                                                    alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                               title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                               data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                        </div>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-hot" href="#">HOT!</span>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-4.png"
                                                                                    alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                               title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                               data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                        </div>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-hot" href="#">HOT!</span>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/women/girl-1.png"
                                                                                    alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                               title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                               data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                        </div>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-sale" href="#">SALE!</span>
                                    </li>
                                </ul>
                                <a class="aa-browse-btn" href="#">Browse all Product <span
                                            class="fa fa-long-arrow-right"></span></a>
                            </div>
                            <!-- / popular product category -->

                            <!-- start featured product category -->
                            <div class="tab-pane fade" id="featured">
                                <ul class="aa-product-catg aa-featured-slider">
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-2.png"
                                                                                    alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                               title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                               data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                        </div>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-sale" href="#">SALE!</span>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/women/girl-2.png"
                                                                                    alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                <span class="aa-product-price">$45.50</span>
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                               title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                               data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                        </div>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/man/t-shirt-1.png"
                                                                                    alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        </figure>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                                            <span class="aa-product-price">$45.50</span>
                                        </figcaption>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                               title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                               data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                        </div>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/women/girl-3.png"
                                                                                    alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                               title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                               data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                        </div>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-1.png"
                                                                                    alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                               title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                               data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                        </div>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/women/girl-4.png"
                                                                                    alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                               title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                               data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                        </div>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-hot" href="#">HOT!</span>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-4.png"
                                                                                    alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                               title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                               data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                        </div>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-hot" href="#">HOT!</span>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/women/girl-1.png"
                                                                                    alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                               title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                               data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                        </div>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-sale" href="#">SALE!</span>
                                    </li>
                                </ul>
                                <a class="aa-browse-btn" href="#">Browse all Product <span
                                            class="fa fa-long-arrow-right"></span></a>
                            </div>
                            <!-- / featured product category -->

                            <!-- start latest product category -->
                            <div class="tab-pane fade" id="latest">
                                <ul class="aa-product-catg aa-latest-slider">
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-2.png"
                                                                                    alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                               title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                               data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                        </div>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-sale" href="#">SALE!</span>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/women/girl-2.png"
                                                                                    alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                <span class="aa-product-price">$45.50</span>
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                               title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                               data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                        </div>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/man/t-shirt-1.png"
                                                                                    alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        </figure>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                                            <span class="aa-product-price">$45.50</span>
                                        </figcaption>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                               title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                               data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                        </div>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/women/girl-3.png"
                                                                                    alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                               title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                               data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                        </div>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-1.png"
                                                                                    alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                               title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                               data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                        </div>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/women/girl-4.png"
                                                                                    alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                               title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                               data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                        </div>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-hot" href="#">HOT!</span>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-4.png"
                                                                                    alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                               title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                               data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                        </div>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-hot" href="#">HOT!</span>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/women/girl-1.png"
                                                                                    alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                               title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                        class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                               data-toggle="modal" data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                        </div>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-sale" href="#">SALE!</span>
                                    </li>
                                </ul>
                                <a class="aa-browse-btn" href="#">Browse all Product <span
                                            class="fa fa-long-arrow-right"></span></a>
                            </div>
                            <!-- / latest product category -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / popular section -->
<!-- Support section -->
<section id="aa-support">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-support-area">
                    <!-- single support -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="aa-support-single">
                            <span class="fa fa-truck"></span>
                            <h4>FREE SHIPPING</h4>
                            <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                        </div>
                    </div>
                    <!-- single support -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="aa-support-single">
                            <span class="fa fa-clock-o"></span>
                            <h4>30 DAYS MONEY BACK</h4>
                            <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                        </div>
                    </div>
                    <!-- single support -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="aa-support-single">
                            <span class="fa fa-phone"></span>
                            <h4>SUPPORT 24/7</h4>
                            <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Support section -->
<!-- Testimonial -->
<section id="aa-testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-testimonial-area">
                    <ul class="aa-testimonial-slider">
                        <!-- single slide -->
                        <li>
                            <div class="aa-testimonial-single">
                                <img class="aa-testimonial-img" src="img/testimonial-img-2.jpg" alt="testimonial img">
                                <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis
                                    possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis
                                    possimus, facere, quidem qui.</p>
                                <div class="aa-testimonial-info">
                                    <p>Allison</p>
                                    <span>Designer</span>
                                    <a href="#">Dribble.com</a>
                                </div>
                            </div>
                        </li>
                        <!-- single slide -->
                        <li>
                            <div class="aa-testimonial-single">
                                <img class="aa-testimonial-img" src="img/testimonial-img-1.jpg" alt="testimonial img">
                                <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis
                                    possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis
                                    possimus, facere, quidem qui.</p>
                                <div class="aa-testimonial-info">
                                    <p>KEVIN MEYER</p>
                                    <span>CEO</span>
                                    <a href="#">Alphabet</a>
                                </div>
                            </div>
                        </li>
                        <!-- single slide -->
                        <li>
                            <div class="aa-testimonial-single">
                                <img class="aa-testimonial-img" src="img/testimonial-img-3.jpg" alt="testimonial img">
                                <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis
                                    possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis
                                    possimus, facere, quidem qui.</p>
                                <div class="aa-testimonial-info">
                                    <p>Luner</p>
                                    <span>COO</span>
                                    <a href="#">Kinatic Solution</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Testimonial -->

<!-- Latest Blog -->
<section id="aa-latest-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-latest-blog-area">
                    <h2>LATEST BLOG</h2>
                    <div class="row">
                        <!-- single latest blog -->
                        <div class="col-md-4 col-sm-4">
                            <div class="aa-latest-blog-single">
                                <figure class="aa-blog-img">
                                    <a href="#"><img src="img/promo-banner-1.jpg" alt="img"></a>
                                    <figcaption class="aa-blog-img-caption">
                                        <span href="#"><i class="fa fa-eye"></i>5K</span>
                                        <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                        <a href="#"><i class="fa fa-comment-o"></i>20</a>
                                        <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                                    </figcaption>
                                </figure>
                                <div class="aa-blog-info">
                                    <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad? Autem
                                        quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim repellendus
                                        animi. Expedita quas reprehenderit incidunt, voluptates corporis.</p>
                                    <a href="#" class="aa-read-mor-btn">Read more <span
                                                class="fa fa-long-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- single latest blog -->
                        <div class="col-md-4 col-sm-4">
                            <div class="aa-latest-blog-single">
                                <figure class="aa-blog-img">
                                    <a href="#"><img src="img/promo-banner-3.jpg" alt="img"></a>
                                    <figcaption class="aa-blog-img-caption">
                                        <span href="#"><i class="fa fa-eye"></i>5K</span>
                                        <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                        <a href="#"><i class="fa fa-comment-o"></i>20</a>
                                        <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                                    </figcaption>
                                </figure>
                                <div class="aa-blog-info">
                                    <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad? Autem
                                        quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim repellendus
                                        animi. Expedita quas reprehenderit incidunt, voluptates corporis.</p>
                                    <a href="#" class="aa-read-mor-btn">Read more <span
                                                class="fa fa-long-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- single latest blog -->
                        <div class="col-md-4 col-sm-4">
                            <div class="aa-latest-blog-single">
                                <figure class="aa-blog-img">
                                    <a href="#"><img src="img/promo-banner-1.jpg" alt="img"></a>
                                    <figcaption class="aa-blog-img-caption">
                                        <span href="#"><i class="fa fa-eye"></i>5K</span>
                                        <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                        <a href="#"><i class="fa fa-comment-o"></i>20</a>
                                        <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                                    </figcaption>
                                </figure>
                                <div class="aa-blog-info">
                                    <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad? Autem
                                        quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim repellendus
                                        animi. Expedita quas reprehenderit incidunt, voluptates corporis.</p>
                                    <a href="#" class="aa-read-mor-btn">Read more <span
                                                class="fa fa-long-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Latest Blog -->
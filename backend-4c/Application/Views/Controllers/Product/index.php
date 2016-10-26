<body>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            appId: '340915906262846',
            xfbml: true,
            version: 'v2.8'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<!-- catg header banner section -->
<section id="aa-catg-head-banner">
    <img height="300px"
         src="<?= !empty($product->url) ? UPLOAD_DIR . $product->url : 'img/fashion/fashion-header-bg-8.jpg' ?>"
         alt="fashion img">
    <div class="aa-catg-head-banner-area">
        <div class="container">
            <div class="aa-catg-head-banner-content">
                <h2><?= $product->title ?></h2>
                <ol class="breadcrumb">
                    <li><a href="index.html">Trang chủ</a></li>
                    <li><a href="san-pham.html">Sản Phẩm</a></li>
                    <li class="active"><?= $product->title ?></li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- / catg header banner section -->

<!-- product category -->
<section id="aa-product-details">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-product-details-area">
                    <div class="aa-product-details-content">
                        <div class="row">
                            <!-- Modal view slider -->
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="aa-product-view-slider">
                                    <div id="demo-1" class="simpleLens-gallery-container">
                                        <div class="simpleLens-container">
                                            <div class="simpleLens-big-image-container"><a
                                                    data-lens-image="img/view-slider/large/polo-shirt-1.png"
                                                    class="simpleLens-lens-image"><img
                                                        src="<?= !empty($product->url) ? UPLOAD_DIR . $product->url : 'img/view-slider/medium/polo-shirt-1.png' ?>"
                                                        class="simpleLens-big-image"></a></div>
                                        </div>
                                        <div class="simpleLens-thumbnails-container">
                                            <?php foreach ($images as $i) { ?>
                                                <a data-big-image="<?= UPLOAD_DIR . $i->url ?>"
                                                   data-lens-image="<?= UPLOAD_DIR . $i->url ?>"
                                                   class="simpleLens-thumbnail-wrapper" href="#">
                                                    <img width="30px" src="<?= UPLOAD_DIR . $i->url ?>">
                                                </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal view content -->
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <div class="aa-product-view-content">
                                    <h3><?= $product->title ?></h3>
                                    <div class="aa-price-block">
                                        <span
                                            class="aa-product-price"><?= !empty($product->sale) ? number_format($product->sale, 0, ",", ".") : number_format($product->price, 0, ",", ".") ?>
                                            .000 VNĐ</span><br/>
                                        <?= !empty($product->sale) ? '<span class="aa-product-price"><del>' . number_format($product->price, 0, ",", ".") . '.000 VNĐ</del></span>' : '' ?>
                                        <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                                    </div>
                                    <p><?= $product->detail ?></p>
                                    <!--                                    <h4>Màu sắc</h4>-->
                                    <!--                                    <div class="aa-prod-view-size">-->
                                    <!--                                        <a href="#">Xanh</a>-->
                                    <!--                                        <a href="#">Đỏ</a>-->
                                    <!--                                        <a href="#">Tím</a>-->
                                    <!--                                        <a href="#">Vàng</a>-->
                                    <!--                                    </div>-->
                                    <h4>Màu sắc</h4>
                                    <div class="aa-color-tag">
                                        <a href="#" class="aa-color-green"></a>
                                        <a href="#" class="aa-color-yellow"></a>
                                        <a href="#" class="aa-color-pink"></a>
                                        <a href="#" class="aa-color-black"></a>
                                        <a href="#" class="aa-color-white"></a>
                                        <a class="aa-color-olive"></a>
                                    </div>
                                    <div class="aa-prod-quantity">
                                        <form action="">
                                            <select id="select-quantity" name="">
                                                <option selected value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </form>
                                        <p class="aa-prod-category">
                                            Loại hàng: <?php foreach ($category as $c) { ?><a
                                                href="#"><?= $c->cat_name ?></a> &nbsp;&nbsp; <?php } ?>
                                        </p>
                                    </div>
                                    <div class="aa-prod-view-bottom">
                                        <a class="btn btn-success btn-lg" data-product-id="<?= $product->id ?>"
                                           id="add-to-cart-in" href="javascript:;"><i class="fa fa-cart-plus"></i>
                                            &nbsp;Thêm vào giỏ</a>
                                        <a class="aa-add-to-cart-btn" href="javascript:;">Thêm vào yêu thích</a>
                                        <a class="aa-add-to-cart-btn" href="javascript:;">So sánh</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="aa-product-details-bottom">
                        <ul class="nav nav-tabs" id="myTab2">
                            <li><a href="#description" data-toggle="tab">Thông tin</a></li>
                            <li><a href="#review" data-toggle="tab">Đánh giá</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="description">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum.</p>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, culpa!</li>
                                    <li>Lorem ipsum dolor sit amet.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor qui eius esse!
                                    </li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, modi!</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, iusto earum
                                    voluptates autem esse molestiae ipsam, atque quam amet similique ducimus aliquid
                                    voluptate perferendis, distinctio!</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea, voluptas!
                                    Aliquam facere quas cumque rerum dolore impedit, dicta ducimus repellat dignissimos,
                                    fugiat, minima quaerat necessitatibus? Optio adipisci ab, obcaecati, porro unde
                                    accusantium facilis repudiandae.</p>
                            </div>
                            <div class="col-md-12">
                                <hr>
                            </div>


                            <div class="tab-pane fade " id="review">
                                <div class="col-md-offset-3 col-md-9">
                                    <!--                            FACEBOOK COMMENT-->
                                    <div class="fb-comments"
                                         data-href="http://<?= $_SERVER['HTTP_HOST'] . strtok($_SERVER["REQUEST_URI"], '?') ?>"
                                         data-numposts="5"></div>
                                    <div class="fb-like" data-share="true" data-width="999"
                                         data-show-faces="true"></div>
                                </div>
                                <div class="aa-product-review-area">
                                    <h4>2 Reviews for T-Shirt</h4>
                                    <ul class="aa-review-nav">
                                        <li>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="img/testimonial-img-3.jpg"
                                                             alt="girl image">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><strong>Marla Jobs</strong> - <span>March 26, 2016</span>
                                                    </h4>
                                                    <div class="aa-product-rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star-o"></span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="img/testimonial-img-3.jpg"
                                                             alt="girl image">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><strong>Marla Jobs</strong> - <span>March 26, 2016</span>
                                                    </h4>
                                                    <div class="aa-product-rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star-o"></span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <h4>Add a review</h4>
                                    <div class="aa-your-rating">
                                        <p>Your Rating</p>
                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                    </div>
                                    <!-- review form -->
                                    <form action="../../../Controllers/Feedback.php" method="post" class="aa-review-form">

                                        <div class="form-group">
                                            <label for="title">Tiêu đề</label>
                                            <input class="form-control" name="title" rows="3" id="title" />
                                        </div>

                                        <div class="form-group">
                                            <label for="content">Your Review</label>
                                            <textarea class="form-control" rows="3" name="content" id="content"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                   placeholder="example@gmail.com">
                                        </div>

                                        <button type="submit" class="btn btn-default aa-review-submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Related product -->
                    <div class="aa-product-related-item">
                        <h3>Related Products</h3>
                        <ul class="aa-product-catg aa-related-item-slider">
                            <!-- start single product item -->
                            <li>
                                <figure>
                                    <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-2.png"
                                                                            alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To
                                        Cart</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                        <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                    </figcaption>
                                </figure>
                                <div class="aa-product-hvr-content">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span
                                            class="fa fa-heart-o"></span></a>
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
                                    <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To
                                        Cart</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                        <span class="aa-product-price">$45.50</span>
                                    </figcaption>
                                </figure>
                                <div class="aa-product-hvr-content">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span
                                            class="fa fa-heart-o"></span></a>
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
                                    <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To
                                        Cart</a>
                                </figure>
                                <figcaption>
                                    <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                                    <span class="aa-product-price">$45.50</span>
                                </figcaption>
                                <div class="aa-product-hvr-content">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span
                                            class="fa fa-heart-o"></span></a>
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
                                    <a class="aa-product-img" href="#"><img src="img/women/girl-3.png"
                                                                            alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To
                                        Cart</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                        <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                    </figcaption>
                                </figure>
                                <div class="aa-product-hvr-content">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span
                                            class="fa fa-heart-o"></span></a>
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
                                    <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To
                                        Cart</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                        <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                    </figcaption>
                                </figure>
                                <div class="aa-product-hvr-content">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span
                                            class="fa fa-heart-o"></span></a>
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
                                    <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To
                                        Cart</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                        <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                    </figcaption>
                                </figure>
                                <div class="aa-product-hvr-content">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span
                                            class="fa fa-heart-o"></span></a>
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
                                    <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-4.png"
                                                                            alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To
                                        Cart</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                        <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                    </figcaption>
                                </figure>
                                <div class="aa-product-hvr-content">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span
                                            class="fa fa-heart-o"></span></a>
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
                                    <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To
                                        Cart</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                                        <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                    </figcaption>
                                </figure>
                                <div class="aa-product-hvr-content">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span
                                            class="fa fa-heart-o"></span></a>
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

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / product category -->
</body>
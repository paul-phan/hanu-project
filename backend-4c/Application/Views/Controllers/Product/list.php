<!-- catg header banner section -->
<section id="aa-catg-head-banner">
    <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
        <div class="container">
            <div class="aa-catg-head-banner-content">
                <h2><?= $viewSiteName ?></h2>
                <ol class="breadcrumb">
                    <li><a href="index.html"><?= $viewTitle ?></a></li>
                    <li class="active"><?= $viewSiteName ?></li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- / catg header banner section -->

<!-- product category -->
<section id="aa-product-category">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
                <div class="aa-product-catg-content">
                    <div class="aa-product-catg-head">
                        <div class="aa-product-catg-head-left">
                            <form action="" class="aa-sort-form" method="get">
                                <label for="">Sort by</label>
                                <select onchange="this.form.submit()" name="sort">
                                    <option value="default">Mặc định</option>
                                    <option value="NDESC">Tên ↑</option>
                                    <option value="NASC">Tên ↓</option>
                                    <option value="PDESC">Giá ↑</option>
                                    <option value="PASC">Giá ↓</option>
                                    <option value="DDESC">Ngày cập nhật ↑</option>
                                    <option value="DASC">Ngày cập nhật ↓</option>
                                </select>
                            </form>
                            <form action="" class="aa-show-form" method="get">
                                <label for="">Show</label>
                                <select onchange="this.form.submit()" name="limit">
                                    <option value="1" selected="12">12</option>
                                    <option value="2">24</option>
                                    <option value="3">36</option>
                                </select>
                            </form>
                        </div>
                        <div class="aa-product-catg-head-right">
                            <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                            <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
                        </div>
                    </div>
                    <div class="aa-product-catg-body">
                        <ul class="aa-product-catg">
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
                                        <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente
                                            ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
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
                                        <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente
                                            ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
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
                                    <a class="aa-product-img" href="#"><img src="img/women/girl-3.png"
                                                                            alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To
                                        Cart</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                        <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                        <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente
                                            ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
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
                                        <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente
                                            ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
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
                                    <a class="aa-product-img" href="#"><img src="img/women/girl-5.png"
                                                                            alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To
                                        Cart</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                        <span class="aa-product-price">$45.50</span>
                                        <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente
                                            ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
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
                                    <a class="aa-product-img" href="#"><img src="img/women/girl-6.png"
                                                                            alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To
                                        Cart</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                        <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                        <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente
                                            ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
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
                                    <a class="aa-product-img" href="#"><img src="img/women/girl-7.png"
                                                                            alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To
                                        Cart</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                        <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                        <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente
                                            ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
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
                                    <a class="aa-product-img" href="#"><img src="img/women/girl-1.png"
                                                                            alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To
                                        Cart</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                        <span class="aa-product-price">$45.50</span>
                                        <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente
                                            ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
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
                                    <a class="aa-product-img" href="#"><img src="img/women/girl-1.png"
                                                                            alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To
                                        Cart</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                                        <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                        <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente
                                            ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
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
                                        <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente
                                            ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
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
                                    <a class="aa-product-img" href="#"><img src="img/women/girl-3.png"
                                                                            alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To
                                        Cart</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                        <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                        <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente
                                            ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
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
                                        <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente
                                            ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
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
                                    <a class="aa-product-img" href="#"><img src="img/women/girl-5.png"
                                                                            alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To
                                        Cart</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                        <span class="aa-product-price">$45.50</span>
                                        <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente
                                            ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
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
                                    <a class="aa-product-img" href="#"><img src="img/women/girl-6.png"
                                                                            alt="polo shirt img"></a>
                                    <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To
                                        Cart</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                        <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                        <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente
                                            ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
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
                        </ul>

                    </div>
                    <div class="aa-product-catg-pagination">
                        <nav>
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
                <aside class="aa-sidebar">
                    <!-- single sidebar -->
                    <div class="aa-sidebar-widget">
                        <h3>Category</h3>
                        <ul class="aa-catg-nav">
                            <li><a href="#">Men</a></li>
                            <li><a href="">Women</a></li>
                            <li><a href="">Kids</a></li>
                            <li><a href="">Electornics</a></li>
                            <li><a href="">Sports</a></li>
                        </ul>
                    </div>
                    <!-- single sidebar -->
                    <div class="aa-sidebar-widget">
                        <h3>Tags</h3>
                        <div class="tag-cloud">
                            <a href="#">Fashion</a>
                            <a href="#">Ecommerce</a>
                            <a href="#">Shop</a>
                            <a href="#">Hand Bag</a>
                            <a href="#">Laptop</a>
                            <a href="#">Head Phone</a>
                            <a href="#">Pen Drive</a>
                        </div>
                    </div>
                    <!-- single sidebar -->
                    <div class="aa-sidebar-widget">
                        <h3>Shop By Price</h3>
                        <!-- price range -->
                        <div class="aa-sidebar-price-range">
                            <form action="">
                                <div id="skipstep" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                                </div>
                                <span id="skip-value-lower" class="example-val">30.00</span>
                                <span id="skip-value-upper" class="example-val">100.00</span>
                                <button class="aa-filter-btn" type="submit">Filter</button>
                            </form>
                        </div>

                    </div>
                    <!-- single sidebar -->
                    <div class="aa-sidebar-widget">
                        <h3>Shop By Color</h3>
                        <div class="aa-color-tag">
                            <a class="aa-color-green" href="#"></a>
                            <a class="aa-color-yellow" href="#"></a>
                            <a class="aa-color-pink" href="#"></a>
                            <a class="aa-color-purple" href="#"></a>
                            <a class="aa-color-blue" href="#"></a>
                            <a class="aa-color-orange" href="#"></a>
                            <a class="aa-color-gray" href="#"></a>
                            <a class="aa-color-black" href="#"></a>
                            <a class="aa-color-white" href="#"></a>
                            <a class="aa-color-cyan" href="#"></a>
                            <a class="aa-color-olive" href="#"></a>
                            <a class="aa-color-orchid" href="#"></a>
                        </div>
                    </div>
                    <!-- single sidebar -->
                    <div class="aa-sidebar-widget">
                        <h3>Recently Views</h3>
                        <div class="aa-recently-views">
                            <ul>
                                <li>
                                    <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-2.jpg"></a>
                                    <div class="aa-cartbox-info">
                                        <h4><a href="#">Product Name</a></h4>
                                        <p>1 x $250</p>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-1.jpg"></a>
                                    <div class="aa-cartbox-info">
                                        <h4><a href="#">Product Name</a></h4>
                                        <p>1 x $250</p>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-2.jpg"></a>
                                    <div class="aa-cartbox-info">
                                        <h4><a href="#">Product Name</a></h4>
                                        <p>1 x $250</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- single sidebar -->
                    <div class="aa-sidebar-widget">
                        <h3>Top Rated Products</h3>
                        <div class="aa-recently-views">
                            <ul>
                                <li>
                                    <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-2.jpg"></a>
                                    <div class="aa-cartbox-info">
                                        <h4><a href="#">Product Name</a></h4>
                                        <p>1 x $250</p>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-1.jpg"></a>
                                    <div class="aa-cartbox-info">
                                        <h4><a href="#">Product Name</a></h4>
                                        <p>1 x $250</p>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-2.jpg"></a>
                                    <div class="aa-cartbox-info">
                                        <h4><a href="#">Product Name</a></h4>
                                        <p>1 x $250</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>

        </div>
    </div>
</section>
<!-- / product category -->
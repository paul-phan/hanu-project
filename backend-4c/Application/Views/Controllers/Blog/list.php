<!-- catg header banner section -->
<section id="aa-catg-head-banner">
    <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
        <div class="container">
            <div class="aa-catg-head-banner-content">
                <h2>BÀI VIẾT</h2>
                <ol class="breadcrumb">
                    <li><a href="index.html">Trang chủ</a></li>
                    <li class="active">Bài viết</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- / catg header banner section -->

<!-- Blog Archive -->
<section id="aa-blog-archive">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-blog-archive-area aa-blog-archive-2">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="aa-blog-content">
                                <?php foreach($blogs as $value): ?>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <article class="aa-latest-blog-single">
                                            <figure class="aa-blog-img">
                                                <a href="#"><img alt="img" src="<?= $value->image ?>"></a>
                                                <figcaption class="aa-blog-img-caption">
                                                    <span href="#"><i class="fa fa-eye"></i>5K</span>
                                                    <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                                    <a href="#"><i class="fa fa-comment-o"></i>20</a>
                                                    <span href="#"><i class="fa fa-clock-o"></i><?= $value->created ?></span>
                                                </figcaption>
                                            </figure>

                                            <div class="aa-blog-info">
                                                <h3 class="aa-blog-title"><a href="#"><?= $value->title ?></a>
                                                </h3>
                                                <p><?= $value->body ?></p>
                                                <a class="aa-read-mor-btn" href="blog/view/<?= $value->id ?>">Read more <span
                                                        class="fa fa-long-arrow-right"></span></a>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <!-- Blog Pagination -->
                            <div class="aa-blog-archive-pagination">
                                <nav>
                                    <ul class="pagination">
                                        <li>
                                            <a aria-label="Previous" href="#">
                                                <span aria-hidden="true">«</span>
                                            </a>
                                        </li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li>
                                            <a aria-label="Next" href="#">
                                                <span aria-hidden="true">»</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <aside class="aa-blog-sidebar">
                                <div class="aa-sidebar-widget">

                                </div>
                                <div class="aa-sidebar-widget">

                                </div>
                                <div class="aa-sidebar-widget">

                                </div>
                            </aside>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Blog Archive --><!-- catg header banner section -->

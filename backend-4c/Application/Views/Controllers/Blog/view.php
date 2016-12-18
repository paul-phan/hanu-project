<!-- catg header banner section -->
<section id="aa-catg-head-banner">
    <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
        <div class="container">
            <div class="aa-catg-head-banner-content">
                <h2>Chi tiết bài viết</h2>
                <ol class="breadcrumb">
                    <li><a href="">Trang chủ</a></li>
                    <li class="active"> <a href="blog/list">Bài viết</a></li>
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
                <div class="aa-blog-archive-area">
                    <div class="row">
                        <div class="col-md-9">
                            <!-- Blog details -->
                            <div class="aa-blog-content aa-blog-details">
                                <article class="aa-blog-content-single">
                                    <h2><a href="blog/view/<?= $blog->id ?>"></a></h2>
                                    <div class="aa-article-bottom">
                                        <div class="aa-post-author">
                                            Posted By <a href="#">ADMIN <?= $blog->user_id ?></a>
                                        </div>
                                        <div class="aa-post-date">
                                            <?= $blog->created ?>
                                        </div>
                                    </div>
                                    <figure class="aa-blog-img">
                                        <a href="#"><img src=" <?= $blog->image ?>" alt=" <?= $blog->image ?>"></a>
                                    </figure>
                                        <p>
                                            <?= $blog->body ?>
                                        </p>
                                    <div class="blog-single-bottom">
                                        <div class="row">
                                            <div class="col-md-8 col-sm-6 col-xs-12">
                                                <div class="blog-single-tag">
                                                    <span>Tags:</span>
                                                    <a href="#"> <?= $blog->tags ?></a>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="blog-single-social">
                                                    <a href="https://www.facebook.com/sinhvienIT/?fref=ts"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </article>
                                <!-- blog navigation -->
                                <div class="aa-blog-navigation">
                                    <a class="aa-blog-prev" href="blog/list"><span class="fa fa-arrow-left"></span>QUAY LẠI</a>
                                </div>

                                <!-- Blog Comment threats -->

                                <!-- blog comments form -->
                            </div>
                        </div>

                        <!-- blog sidebar -->
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
<!-- / Blog Archive -->
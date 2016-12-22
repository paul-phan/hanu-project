<!-- catg header banner section -->
<section id="aa-catg-head-banner">
    <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
        <div class="container">
            <div class="aa-catg-head-banner-content">
                <h2>Danh sách bài viết</h2>
                <ol class="breadcrumb">
                    <li><a href="blog/topic">Chủ đề</a></li>
                    <li class="active">Danh sách bài viết</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- / catg header banner section -->

<section id="aa-blog-archive">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-blog-archive-area aa-blog-archive-2">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="aa-blog-content">
                                <div class="row">
                                    <?php
                                        foreach($blogs as $value):
                                    ?>
                                        <div class="col-md-4 col-sm-4">
                                            <article class="aa-latest-blog-single">
                                                <figure class="aa-blog-img">
                                                    <a href="blog/view/<?= $value->id ?>"><img alt="img" src="<?= $value->image ?>"></a>
                                                    <figcaption class="aa-blog-img-caption">
                                                        <a href="https://www.facebook.com/sinhvienIT/?fref=ts"><i class="fa fa-facebook"></i></a>
                                                        <a href="https://www.facebook.com/sinhvienIT/?fref=ts"><i class="fa fa-twitter"></i></a>
                                                        <a href="https://www.facebook.com/sinhvienIT/?fref=ts"><i class="fa fa-linkedin"></i></a>
                                                        <a href="https://www.facebook.com/sinhvienIT/?fref=ts"><i class="fa fa-google-plus"></i></a>
                                                        <span href="https://time.is/"><i class="fa fa-clock-o"></i></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-blog-info">
                                                    <b><a href="blog/view/<?= $value->id ?>"><?= $value->title ?></a></b>

                                                    <p><?= $value->body ?></p>
                                                    <a class="aa-read-mor-btn" href="blog/view/<?= $value->id ?>">Xem thêm <span
                                                            class="fa fa-long-arrow-right"></span></a>
                                                </div>
                                            </article>
                                        </div>
                                    <?php endforeach; ?>

                                </div>
                            </div>

                            <!-- Blog Pagination -->
                            <div class="aa-blog-archive-pagination">
                                <nav>
                                    <ul class="pagination">
                                        <li>
                                            <a aria-label="Previous" href="blog/topic">
                                                <span aria-hidden="true">«</span>
                                            </a>
                                        </li>
                                        <li class="active"><a href="blog/topic">1</a></li>
                                        <li>
                                            <a aria-label="Next" href="blog/topic">
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
                                    <h3>Bài viết</h3>
                                    <?php foreach($blogs as $value): ?>
                                        <ul class="aa-catg-nav">
                                            <li><a href="blog/view/<?= $value->id ?>"><?= $value->title ?></a></li>
                                        </ul>
                                    <?php endforeach; ?>
                                </div>
                                <div class="aa-sidebar-widget">
                                    <h3>Tags</h3>
                                    <?php foreach($blogs as $value): ?>
                                    <div class="tag-cloud">
                                        <a href="blog/topic"><?= $value->tags ?></a>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="aa-sidebar-widget">
                                    <h3>The time now is: </h3>
                                    <?php
                                    echo date("Y-m-d")."<br/>";
                                    echo date("h:i:sa");
                                    ?>
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

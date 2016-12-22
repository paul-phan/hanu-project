<?php
//check
if(empty($_SESSION['product_name'])){
    header('Location: ../../index');
}
?>

<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

<style>

    .panel-shadow {
        box-shadow: rgba(0, 0, 0, 0.3) 7px 7px 7px;
    }
    .panel-white {
        border: 1px solid #dddddd;
    }
    .panel-white  .panel-heading {
        color: #333;
        background-color: #fff;
        border-color: #ddd;
    }
    .panel-white  .panel-footer {
        background-color: #fff;
        border-color: #ddd;
    }

    .post .post-heading {
        height: 95px;
        padding: 20px 15px;
    }
    .post .post-heading .avatar {
        width: 60px;
        height: 60px;
        display: block;
        margin-right: 15px;
    }
    .post .post-heading .meta .title {
        margin-bottom: 0;
    }
    .post .post-heading .meta .title a {
        color: black;
    }
    .post .post-heading .meta .title a:hover {
        color: #aaaaaa;
    }
    .post .post-heading .meta .time {
        margin-top: 8px;
        color: #999;
    }
    .post .post-image .image {
        width: 100%;
        height: auto;
    }
    .post .post-description {
        padding: 15px;
    }
    .post .post-description p {
        font-size: 14px;
    }
    .post .post-description .stats {
        margin-top: 20px;
    }
    .post .post-description .stats .stat-item {
        display: inline-block;
        margin-right: 15px;
    }
    .post .post-description .stats .stat-item .icon {
        margin-right: 8px;
    }
    .post .post-footer {
        border-top: 1px solid #ddd;
        padding: 15px;
    }
    .post .post-footer .input-group-addon a {
        color: #454545;
    }
    .post .post-footer .comment-list {
        padding: 0;
        margin-top: 20px;
        list-style-type: none;
    }
    .post .post-footer .comment-list .comment {
        display: block;
        width: 100%;
        margin: 20px 0;
    }
    .post .post-footer .comment-list .comment .avatar {
        width: 35px;
        height: 35px;
    }
    .post .post-footer .comment-list .comment .comment-heading {
        display: block;
        width: 100%;
    }
    .post .post-footer .comment-list .comment .comment-heading .user {
        font-size: 14px;
        font-weight: bold;
        display: inline;
        margin-top: 0;
        margin-right: 10px;
    }
    .post .post-footer .comment-list .comment .comment-heading .time {
        font-size: 12px;
        color: #aaa;
        margin-top: 0;
        display: inline;
    }
    .post .post-footer .comment-list .comment .comment-body {
        margin-left: 50px;
    }
    .post .post-footer .comment-list .comment > .comment-list {
        margin-left: 50px;
    }
</style>

<div class="container">
    <div class="col-sm-11">
        <div class="jumbotron text-center">
            <h3>Phản hồi cho sản phẩm <b><?= $_SESSION['product_name']; ?></b></h3>
        </div>
        <?php
        if(isset($comment)):
        foreach($comment as $value):
        ?>
        <div class="panel panel-white post panel-shadow">

            <div class="post-heading">
                <div class="pull-left image">
                    <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                </div>


                <div class="pull-left meta">
                    <div class="title h5">
                        <b><?= $value->name ?></b>
                        đã nhận xét.
                    </div>
                    <h6 class="text-muted time"><?= $value->date ?></h6>
                    <h6><?= $value->email ?> </h6>
                </div>
            </div>
            <div class="post-description">
                <p><?= $value->message?></p>
            </div>

            <div class="post-footer">
                <ul class="comment-list">
                    <li class="comment">
                        <ul class="comment-list">
                            <li class="comment">
                                <a class="pull-left" href="#">
                                    <img class="avatar" src="http://bootdey.com/img/Content/user_3.jpg" alt="avatar">
                                </a>

                                <div class="comment-body">
                                    <div class="comment-heading">
                                        <div class="title h5">
                                        <a href="Feedback/list" class="btn btn-danger disabled">Admin</a>
                                           phản hồi lại <b><?= $value->name ?></b>
                                        </div>
                                        <h5 class="time"><?= $value->ngay?></h5>
                                    </div>
                                    <p><?= $value->content?></p>
                                </div>
                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
            <?php
        endforeach;
        endif;
        ?>
    </div>
</div>


<div class="aa-product-review-area">

    <h4><?php echo "Reply cho phản hồi cho comment: "; ?></h4>

        <blockquote>
                <?php echo $phanHoi->message; ?>
        </blockquote>

    <form action="" method="post"">

        <div class="form-group">
            <label for="content">Your reply</label>
            <textarea class="form-control" rows="3" name="message" id="message" placeholder="Nhập phản hồi của bạn ở đây..."></textarea>
        </div>

        <div class="form-group">
            <input type="hidden" class="form-control" name="comment_id" value="<?php echo $phanHoi->id; ?>" >
        </div>
        <button type="submit" class="btn btn-danger">Reply</button>
    </form>
</div>
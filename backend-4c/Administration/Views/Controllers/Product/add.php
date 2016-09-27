<form method="POST">
    <label class="control-label">Tên sản phẩm</label>
        <input class="form-control" type="text" name="title" placeholder="Tên sản phẩm" required> <br/>

    <label class="control-label">Thông tin sản phẩm</label>
        <textarea class="form-control" name="detail" required> </textarea> <br/>

    <label class="control-label">Giá</label>
    <input class="form-control" type="number" min="0" name="price" placeholder="Giá" required> <br/>

    <label class="control-label">Ngày sản xuất</label>
    <input type="date" class="form-control" name="manufactured_date" placeholder="Ngày sản xuất" required /> <br/>

    <label class="control-label">Sale</label>
    <input type="number" class="form-control" name="sale" placeholder="Sale" required /> <br/>

    <label class="control-label">Loại</label>
        <select class="form-control" name="type">
            <option value="1">Smartphone</option>
            <option value="2">Stupidphone</option>
            <option value="3">Cục gạch</option>
            <option value="4">Bombphone</option>
        </select> <br/>

    <label class="control-label">Công ty</label>
    <select class="form-control" name="company">
        <option value="1">FPT</option>
        <option value="2">Hoàng Hà</option>
        <option value="3">Mai Nguyễn</option>
        <option value="4">Cellphone S</option>
    </select> <br/>

    <input class="btn btn-info" type="submit" name="submit" value="ADD">
</form>
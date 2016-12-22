<head>
    <title>Contact admin</title>
</head>

<body>
<div class="col-md-3"></div>
<div class="col-md-6">
    <form method="POST" action="">
        <div class="form-group">
            <label for="title">Tiêu đề</label>
            <input class="form-control" type="text" name="title" placeholder="Nhập tiêu đề vào đây..."/> <br/>
        </div>

        <div class="form-group">
            <label for="message">Nội dung</label>
            <textarea class="form-control" type="text" name="message" placeholder="Nhập nội dung vào đây..."></textarea><br/>
        </div>

        <div class="form-group">
            <label for="name">Tên</label>
            <input class="form-control" type="text" name="name" placeholder="Nhập tên bạn vào đây..."><br/>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" placeholder="Nhập email vào đây..."/> <br/>
        </div>

        <input class="btn btn-danger btn-lg" type="submit" name="submit" value="GỬI"/>

        <input class="btn btn-warning btn-lg" type="button" value="Quay lại" onclick="goBack()"/>

        <script>
            function goBack() {
                window.history.back();
            }
        </script>

    </form>
</div>
<div class="col-md-3"></div>

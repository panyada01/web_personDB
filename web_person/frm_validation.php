<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.1.0/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <br>
        <form id="myform1" name="form1" method="post" action="" novalidate>
            <div class="form-group row">
                <label for="input_name" class="col-sm-3 col-form-label text-right">ชื่อ นามสกุล</label>
                <div class="col">
                    <input type="text" class="form-control" name="input_name" id="input_name" autocomplete="off" value="" required>
                    <div class="invalid-feedback">
                        กรุณากรอกชื่อ นามสกุล
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-3 pt-0 text-right">ความสนใจ</legend>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input required" type="checkbox" name="checkbox_hobby1" id="hobby1" value="การออกกำลังกาย" required>
                        <label class="form-check-label" for="hobby1">
                            การออกกำลังกาย
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input required" type="checkbox" name="checkbox_hobby2" id="hobby2" value="อ่านหนังสือ" required>
                        <label class="form-check-label" for="hobby2">
                            อ่านหนังสือ
                        </label>
                        <div class="invalid-feedback">
                            กรุณาเลือกความสนใจ
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3 offset-sm-3 text-right pt-3">
                    <button type="submit" name="btn_submit" id="btn_submit" value="1" class="btn btn-primary btn-block">ส่งข้อมูล</button>
                </div>
            </div>
        </form>

    </div>

    <script src="https://unpkg.com/jquery@3.3.1/dist/jquery.min.js"></script>
    <script src="https://unpkg.com/bootstrap@4.1.0/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(function() {
            var checkbox_required = false;
            $(":checkbox.required").on("click", function() {
                var is_checked = $(this).prop("checked");
                if (is_checked) {
                    $(":checkbox.required").prop('required', false);
                    checkbox_required = true;
                } else {
                    if ($(":checkbox.required:checked").length == 0) {
                        checkbox_required = false;
                        $(":checkbox.required").prop('required', true);
                    }
                }

            });
            $("#myform1").on("submit", function() {
                var form = $(this)[0];
                if (form.checkValidity() === false || checkbox_required === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            });
        });
    </script>
</body>

</html>
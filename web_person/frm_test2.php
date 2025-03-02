<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("headboot.php") ?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Prompt&display=swap');

        * {
            font-family: 'Prompt', sans-serif;
        }
    </style>
</head>

<body>
    <div class="container mt-3">
        <h2>
            <div class="text-center"> My ฟอร์มบน Web </div>
        </h2>
        <form action="">
        <div class="row g-3">
                <div class="col-md-6">
                    <label for="" class="form-label">เลขประจำตัว </label>
                    <input type="text" class="form-control" placeholder="พิมพ์เลขประจำตัว" name="txtidcard" id="txtidcard" require>

                </div>
            </div>
        </form>

    </div>

    <?php include("footboot.php") ?>
</body>

</html>
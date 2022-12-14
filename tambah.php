<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="utils/style.css">
    <link rel="stylesheet" href="utils/responsive.css">
    <title>Aplikasi CRUD Sederhana</title>
</head>

<body>

    <section id="topHeader" class="my-5 ">
        <div>
            <img src="images/logosi4.png" alt="" srcset="" class="logo">
        </div>
        <div class="header">
            <h1>Data Mahasiswa Sistem Informasi 4</h1>
        </div>
        <div class="navigation ">
            <a href="">Home</a>
            <a href="">About</a>
            <a href="">Journey</a>
            <a href="">Member</a>
            <a href="">Galery</a>
            <a href="">Berita</a>
        </div>
    </section>
    <div class="container">
        <form role="form" method="POST" action="input.php" class="w-50 m-auto">
            <div class="form-check">
                <label>Category Name</label>
                <input class="form-control" name="cat_name">
            </div>
            <div class="form-check">
                <label>Category Text</label>
                <input class="form-control" name="cat_text">
            </div>
            <div class="form-check">
                <button type="submit" class="btn btn-success pull-right mt-3 me-3">Simpan</button>
                <a href="home.php" class="btn btn-danger pull-right mt-3" style="margin-right:1%;">Batal</a>
            </div>

        </form>
    </div>

</body>

</html>
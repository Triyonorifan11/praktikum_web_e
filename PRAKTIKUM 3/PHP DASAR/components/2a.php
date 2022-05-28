<div class="col-xl-6 col-md-6 col-sm-12">
    <div class="card mt-4">
        <div class="card-header bg-primary bg-gradient text-light fw-bold">
            Soal 2 A
        </div>
        <div class="card-body">
            <form action="" method="GET">
                <div class="mb-3">
                    <label for="soal2" class="form-label">Masukkan angka untuk menampilkan Segitiga dengan For</label>
                    <input type="number" class="form-control" id="soal2" aria-describedby="emailHelp" name="segitiga_2a" value="<?= $_GET["segitiga_2a"]; ?>">
                    <div id="emailHelp" class="form-text">
                        <h5><?= isset($_GET["segitiga_2a"]) ? soal2a() : "" ?></h5>
                    </div>
                    <div class="d-grid gap-2 mt-4 d-md-block">
                        <button class="btn btn-primary" type="submit" name="">Check</button>
                        <a href="http://localhost:1109/pemWeb/praktikum3" class="btn btn-danger">Reset</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
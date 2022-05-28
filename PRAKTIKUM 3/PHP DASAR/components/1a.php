<!-- soal 1 a -->
<div class="col-xl-6 col-md-6 col-sm-12">
    <div class="card mt-4">
        <div class="card-header bg-primary bg-gradient text-light fw-bold">
            Soal 1 A
        </div>
        <div class="card-body">
            <form action="" method="GET">
                <div class="mb-3">
                    <label for="soal1" class="form-label">Masukkan angka untuk menampilkan nama hari</label>
                    <input type="number" class="form-control" id="soal1" aria-describedby="emailHelp" name="numberday" value="<?= $_GET["numberday"]; ?>">
                    <div id="emailHelp" class="form-text">
                        <h5>Hari = <?= isset($_GET["numberday"]) ? soal1a() : "" ?></h5>
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
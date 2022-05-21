const hasilPanel = document.getElementById("hasil");
const form = document.getElementById("form_segitiga");
var baris;
var hasil = "";
const enter = "<br/>";
const space = "&nbsp;&nbsp";
const star = "*";

function Atas() {
    hasil = "";
    for (let i = 1; i <= baris; i++) {
        for (let j = 1; j <= baris - i; j++) {
            hasil += space;
        }
        for (let k = 0; k < 2 * i - 1; k++) {
            hasil += star;
        }
        hasil += enter;
    }
}

function Bawah() {
    hasil = "";
    for (let i = 0; i < baris; i++) {
        for (let j = 0; j < i; j++) {
            hasil += space;
        }
        for (let k = 0; k < 2 * (baris - i) - 1; k++) {
            hasil += star;
        }
        hasil += enter;
    }
}

function Kiri() {
    hasil = "";
    for (let i = 1; i <= baris; i++) {
        for (let j = 0; j < baris - i; j++) {
            hasil += space + space;
        }
        for (let k = 0; k < i; k++) {
            hasil += star + space;
        }
        hasil += enter;
    }
    for (let i = 1; i <= baris - 1; i++) {
        for (let j = 0; j < i; j++) {
            hasil += space + space;
        }
        for (let k = 0; k < baris - i; k++) {
            hasil += star + space;
        }
        hasil += enter;
    }
}

function Kanan() {
    hasil = "";
    for (let i = 1; i <= baris; i++) {
        for (let j = 0; j < i; j++) {
            hasil += space + star;
        }
        hasil += enter;
    }
    for (let i = 1; i <= baris - 1; i++) {
        for (let j = 0; j < baris - i; j++) {
            hasil += space + star;
        }
        hasil += enter;
    }
}

form.addEventListener("submit", (e) => {
    e.preventDefault();
    const formData = new FormData(e.target);
    baris = parseInt(formData.get("baris"));
    const arah = formData.get("arah");
    if (isNaN(baris) || baris < 1 || baris > 100) {
        hasilPanel.innerHTML = "Input harus angka";
        alert("Input harus angka");
    } else {
        switch (arah) {
            case "kanan":
                Kanan();
                break;
            case "kiri":
                Kiri();
                break;
            case "atas":
                Atas();
                break;
            case "bawah":
                Bawah();
                break;
        }
        hasilPanel.innerHTML = hasil;
    }
});
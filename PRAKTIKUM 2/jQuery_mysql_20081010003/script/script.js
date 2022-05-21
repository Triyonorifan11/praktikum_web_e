var chartBar, chartPie;
$(document).ready(() => {
  getData();
  $(".btn-refresh").on("click", getData);
});

// Mengambil Data dari Database
const getData = () => {
  $.ajax({
    url: "http://localhost:3000/",
    method: "GET",
    dataType: "json",
    success: function (response) {
      renderData(response);
    },
    error: function (err) {},
  });
};

const renderData = (data) => {
  const dataRekap = {
    fakultas: [],
    jumlah: [],
  };

  // Kosongkan body table
  $(".table-mahasiswa tbody").empty();
  // Lakukan pengisian
  for (let i = 0; i < data.length; i++) {
    // Tambah data setiap row
    $(".table-mahasiswa tbody").append(`<tr>
              <td>${data[i].NPM}</td>
              <td>${data[i].NAMAMAHASISWA}</td>
              <td>${data[i].FAKULTAS}</td>
          </tr>`);

    // Mencari index dari fakultas
    const indexFakultas = dataRekap.fakultas.indexOf(data[i].FAKULTAS);
    // Jika index < 0 maka fakultas tidak ada di array
    if (indexFakultas === -1) {
      // Tambahkan data fakultas
      dataRekap.fakultas.push(data[i].FAKULTAS);
      dataRekap.jumlah.push(1);
    } else {
      // Tambahkan jumlah mahasiswa
      dataRekap.jumlah[indexFakultas]++;
    }
  }
  // Ubah jumlah mahasiswa
  $("#jumlahMahasiswa").text(data.length);
  setDataChart(dataRekap);
};

// Mendapatkan config chart sesuai jenis
const getConfig = (data, type = "pie") => {
  const config = {
    type: type,
    data: data,
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: type === "pie" ? true : false,
        },
      },
    },
  };
  return config;
};

const setDataChart = (value) => {
  const data = {
    labels: value.fakultas,
    datasets: [
      {
        label: value.fakultas,
        backgroundColor: randomColor(value.fakultas.length),
        borderColor: randomColor(value.fakultas.length),
        data: value.jumlah,
      },
    ],
  };

  if (chartBar) chartBar.destroy();
  if (chartPie) chartPie.destroy();

  // Atur data chart
  chartPie = new Chart($("#chartPie"), getConfig(data, "pie"));
  // Ubah legend menjadi jumlah mahasiswa
  data.datasets[0].label = "Jumlah Mahasiswa";
  chartBar = new Chart($("#chartBar"), getConfig(data, "bar"));
};

// Untuk mendapatkan array warna random
const randomColor = (length) => {
  let color = [];
  for (let i = 0; i < length; i++) {
    const colorTemp = `rgba(${Math.floor(Math.random() * 255)}, ${Math.floor(
      Math.random() * 255
    )}, ${Math.floor(Math.random() * 255)})`;

    if (color.indexOf(colorTemp) === -1) {
      color.push(colorTemp);
    } else {
      i--;
    }
  }
  return color;
};

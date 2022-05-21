const mysql = require("mysql");
const http = require("http");
var conn;

const koneksi = () => {
  try {
    conn = mysql.createConnection({
      host: "localhost",
      user: "root",
      password: "",
      database: "datamahasiswa",
    });
    conn.connect();
  } catch (e) { }
};

const closeKoneksi = () => {
  conn.end();
};


const server = http.createServer(async (req, res) => {
  res.setHeader("Access-Control-Allow-Origin", "*");
  koneksi();
  conn.query(
    "select * from mahasiswa M inner join programstudi P on M.KODEPRODI = P.KODEPRODI inner join fakultas F on P.KODEFAKULTAS = F.KODEFAKULTAS;",
    function (error, results) {
      if (error) throw error;
      closeKoneksi();
      res.end(JSON.stringify(results));
    }
  );
});

server.listen(3000, () => {
  console.log(`Server is listening on  http://localhost:3000`);
});

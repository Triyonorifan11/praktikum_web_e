class Database {
  constructor() {
    this.db = openDatabase("DataMahasiswa", "1.0", "DataMahasiswa", 2000);
    this.createTable();
  }

  createTable() {
    this.exc(`create table if not exists Mahasiswa 
    (
       NPM                 TEXT PRIMARY KEY,
       NamaMahasiswa       TEXT,
       Fakultas            TEXT
    );`);
  }

  query(sql, callback = () => {}) {
    this.db.transaction(function (tx) {
      tx.executeSql(sql, [], function (tx, results) {
        callback(results.rows, results.rows.length);
      });
    });
  }

  exc(sql, data = [], callback = () => {}) {
    this.db.transaction(function (tx) {
      tx.executeSql(sql, data, function (tx, results) {
        callback(results);
      });
    });
  }
}

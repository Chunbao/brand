/*
var mysql      = require('mysql');
var connection = mysql.createConnection({
  host     : '127.0.0.1',
  user     : 'mysql',
  password : 'secret',
});

connection.connect(function(err) {
  // connected! (unless `err` is set)
});
*/

//http://www.codediesel.com/nodejs/querying-mysql-with-node-js/

var http = require('http');
http.createServer(function (req, res) {
  res.writeHead(200, {'Content-Type': 'text/plain'});
  res.end('Hello World....\n');
}).listen(1337, '127.0.0.1');
console.log('Server running at http://127.0.0.1:1337/');


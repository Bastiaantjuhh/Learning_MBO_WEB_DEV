var http = require("http");
var module01 = require("./module01");

http
  .createServer(function(req, res) {
    res.writeHead(200, { "Content-Type": "text/html" });
    res.write(module01.funcHalloWereld());
    res.end();
  })
  .listen(8080);

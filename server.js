

//SEND AND RECEIVE DATA USING SOCKET.IO
var socket = require('socket.io');
var express = require('express');
var https = require('https');
var http = require('http');

//LOG EVENTS AND OUTPUT IT TO THE TERMINAL
var logger = require('winston');

var http_server = http.createServer(express());


http_server.listen(3001);



logger.remove(logger.transports.Console);

logger.add( new logger.transports.Console, {colorize: true , timestamp: true});

logger.info('SocketIo > Listening on port');




//CREATE AN EXPRESS APP



 //CREATING A SERVER , USING THE HTTP PACKAGE (PASSING IN THE APP).WE WANT THE SERVER TO LISTEN TO THE PORT 300



//WHEN A REQUEST IS INVOKED , THE SOCKET IS GOING TO LISTEN TO THAT SERVER

function emitNewOrder(http_server) {

     var io = socket(http_server);

     //listen to connection first and run the call back function
     io.sockets.on('connection' , function(socket){



     });

}
 





emitNewOrder(http_server);
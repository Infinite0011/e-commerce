// const mysql = require('mysql');
const mysql = require('mysql');
/****** Connection for Source Table ******/

exports.createConnection = () => {
    let connDB = mysql.createConnection({
        host: 'localhost',
        user: 'root',
        password: 'password',
        database: 'demostore'
    });

    return connDB;
}


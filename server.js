const express = require('express')
const path = require("path");
const mysql = require('mariasql');
const bodyParser = require('body-parser');
const app = express()
const port = 3000


// This inserts a new like into the database when a user send a post request to /like
app.post('/like', (request, response) => {
    let connection = getConnection();

    // Todo : Terminer la requête qui enregistre un like
    connection.query('INSERT INTO likes (student_id, ip) VALUES (XX, XX)', function(err, rows) {
        if (err) {
            console.log(err);
            response.send(err);
        } else {
            response.send("");
        }
    });

    connection.end();
})

// Get the number of likes per student
app.get('/get-likes', (request, response) => {
    let connection = getConnection();

    let results = connection.query(
        'SELECT count(*) as count, s.firstname, s.lastname, l.student_id \
        FROM likes l, students s \
        WHERE l.student_id=s.id \
        GROUP BY l.student_id',
        function(err, rows) {
            if (err)
                throw err;

            response.setHeader('Content-Type', 'application/json');
            response.send(JSON.stringify(rows))
        });


    connection.end();
})

// This code enable POST parameters
app.use(bodyParser.json()); // support json encoded bodies
app.use(bodyParser.urlencoded({ extended: true })); // support encoded bodies

// This code enables a static web server for physical files ( all files in public-html)
app.use(express.static('public-html'));

// Starts web server
app.listen(port, (err) => {
    if (err) {
        return console.log('something bad happened', err)
    }

    console.log(`server is listening on http://localhost:8080`)
})

function getConnection() {
    return connection = new mysql({
        host: 'trombinoscope-mysql',
        user: 'root',
        password: 'p4ssword',
        db: 'simplon'
    });
}
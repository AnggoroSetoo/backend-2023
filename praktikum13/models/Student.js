// import database
const db = require('../config/database');

// membuat class model Student
class Student {

    /**
     * Method untuk menampilkan semua data student
     */
    static all(){
        // return Promise sebagai solusi Asynchronous
        return new Promise((resolve, reject) => {
            const query = `SELECT * FROM students`;
            db.query(query, (err, results) => {
                return resolve(results);
            });
        });
    }

    static async create(data, callback) {
        const sql = "INSERT INTO students SET ?";
        db.query(sql, data, (err, results) => {
            const id = results.insertId;
            const sql = "SELECT * FROM students WHERE id = ?";
            db.query(sql, id, (err, results) => {
                callback(err, results);
            })
        })
    }
}

// export class Student
module.exports = Student;
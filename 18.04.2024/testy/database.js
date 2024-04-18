import mysql from "mysql2";
import dotenv from "dotenv";
dotenv.config();

const pool = mysql
	.createPool({
		host: process.env.MYSQL_HOST,
		user: process.env.MYSQL_USER,
		password: process.env.MYSQL_PASSWORD,
		database: process.env.MYSQL_DATABASE,
	})
	.promise();

async function getEvents() {
	const [rows] = await pool.query("SELECT * FROM kalendarium");
	return rows;
}

async function getEvent(id) {
	const [rows] = await pool.query(
		`
	SELECT *
	FROM kalendarium
	WHERE ID_wydarzenia = ?
	`,
		[id]
	);
	return rows[0];
}

const event = await getEvent(1);
console.log(event);

import mysql from "mysql2";
import dotenv from "dotenv";
dotenv.config();

let date = new Date(),
	currYear = date.getFullYear(),
	currMonth = date.getMonth();

// Initialize MySQL connection pool
const pool = mysql
	.createPool({
		host: process.env.MYSQL_HOST,
		user: process.env.MYSQL_USER,
		password: process.env.MYSQL_PASSWORD,
		database: process.env.MYSQL_DATABASE,
	})
	.promise();

// Function to fetch events from the database
async function getEventsFromDB() {
	try {
		const [rows] = await pool.query("SELECT * FROM kalendarium");
		return rows;
	} catch (error) {
		console.error("Error fetching events from database:", error);
		return [];
	}
}

// Combine the rendering logic with database integration
async function renderCalendarWithEvents() {
	// Fetch events from the database
	const events = await getEventsFromDB();

	// Calendar rendering logic
	let calendarData = [];

	for (let i = 1; i <= 31; i++) {
		// Zmieniono na stałą liczbę dni, można dostosować do rzeczywistej ilości dni w miesiącu
		let eventClasses = "";

		// Check if the current date has an event
		events.forEach((event) => {
			const eventDate = new Date(event.wydarzenie_od);
			if (
				eventDate.getDate() === i &&
				eventDate.getMonth() === currMonth &&
				eventDate.getFullYear() === currYear
			) {
				eventClasses = "event";
			}
		});

		calendarData.push({ day: i, eventClasses });
	}

	return calendarData;
}

// Call the renderCalendarWithEvents function to render the calendar with events
renderCalendarWithEvents().then((calendarData) => {
	console.log(calendarData);
});

const currentDate = document.querySelector(".current_date"),
	daysTag = document.querySelector(".days"),
	prevNextIcon = document.querySelectorAll(".calendar_header span");

let date = new Date(),
	currYear = date.getFullYear(),
	currMonth = date.getMonth();

//lista z polskimi miesiącami
const months = [
	"Styczeń",
	"Luty",
	"Marzec",
	"Kwiecień",
	"Maj",
	"Czerwiec",
	"Lipiec",
	"Sierpień",
	"Wrzesień",
	"Październik",
	"Listopad",
	"Grudzień",
];

const renderCalendar = () => {
	let firsDayofMonth = new Date(currYear, currMonth, 1).getDay(), // wyciaganie pierwszych dni miesiaca
		lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(), // wyciaganie ostatniej daty miesiaca
		lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(), // wyciaganie ostatniego dnia miesiaca
		lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); // wyciaganie ostatniej daty z poprzedniego miesiaca
	let liTag = "";

	let o = 0;

	for (let i = firsDayofMonth; i > 1; i--) {
		liTag += `<li class="inactive">${lastDateofLastMonth - i + 2}</li>`;
		o += 1;
	}

	for (let i = 1; i <= lastDateofMonth; i++) {
		let isToday =
			i === date.getDate() &&
			currMonth === new Date().getMonth() &&
			currYear === new Date().getFullYear()
				? "active"
				: "";

		let isEvent =
			i === 1 ||
			i === 5 ||
			i === 7 ||
			i === 11 ||
			i === 13 ||
			i === 15 ||
			i === 19 ||
			i === 27 ||
			i === 28 ||
			i === 29
				? "event"
				: "";
		let isEventt =
			i === 4 ||
			i === 5 ||
			i === 6 ||
			i === 7 ||
			i === 11 ||
			i === 20 ||
			i === 21 ||
			i === 22 ||
			i === 25
				? "event"
				: "";

		liTag += `<li class="${isToday}">${i}<div class="event_box"><div class="${isEvent}"></div><div class="${isEventt}"></div></div></li>`;
		o = o + 1;
	}

	for (let i = lastDayofMonth; o % 7 !== 0; i++) {
		liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`;
		o = o + 1;
	}

	currentDate.innerHTML = `${months[currMonth]} ${currYear}`;
	daysTag.innerHTML = liTag;
};

renderCalendar();

prevNextIcon.forEach((icon) => {
	icon.addEventListener("click", () => {
		currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;
		if (currMonth < 0 || currMonth > 11) {
			date = new Date(currYear, currMonth);
			currYear = date.getFullYear();
			currMonth = date.getMonth();
		} else {
			date = new Date();
		}
		renderCalendar();
	});
});

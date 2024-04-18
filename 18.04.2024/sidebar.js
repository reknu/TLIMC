const ExpandMoreIcons = document.querySelectorAll(".material-symbols-outlined");
const SubsectionContainers = document.querySelectorAll(".sidebar_subsections");

ExpandMoreIcons.forEach((icon, index) => {
	icon.addEventListener("click", function () {
		const clickedSection = this.closest(".sidebar_section");
		const subsectionContainer = clickedSection.querySelector(
			".sidebar_subsections"
		);

		if (subsectionContainer.style.display === "block") {
			subsectionContainer.style.display = "none";
		} else {
			// Schowaj wszystkie sekcje
			SubsectionContainers.forEach((container) => {
				container.style.display = "none";
			});
			// Pokaż tylko klikniętą sekcję
			subsectionContainer.style.display = "block";
		}
	});
});

const BurgerMenu = document.querySelector(".menu_burger_box"),
	MenuScreen = document.querySelector(".menu_phone"),
	body = document.body;

let isMenuOpen = false;

BurgerMenu.addEventListener("click", function () {
	if (!isMenuOpen) {
		MenuScreen.style.display = "flex";
		
		isMenuOpen = true;
	} else {
		MenuScreen.style.display = "none";
		
		isMenuOpen = false;
	}
});

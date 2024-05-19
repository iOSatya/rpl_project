const backgroundImg = document.getElementById("backgroundImg");
const storyText = document.getElementById("storyText");
const nextBtn = document.getElementById("nextBtn");

const story = [
    "Apple",
    "Banana",
    "Orange",
];

const background = [
    "Prosperous_fantasy_kingdom_landscape.png",
    "Prosperous_fantasy_kingdom_attacked_by_dark_monster.png",
];

backgroundImg.style.backgroundImage = `url(images/${background[0]})`;
storyText.textContent = story[0];

let x = 1;

nextBtn.onclick = function () {
    if (x == 2) {
        backgroundImg.style.backgroundImage = `url(images/${background[1]})`;
    }
    if (x < story.length) {
        storyText.textContent = story[x];
    }
    if (x == story.length) {
        window.location.replace("DELETE_THIS_LATER.php");
    }
    x++;
}
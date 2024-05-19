const backgroundImg = document.getElementById("backgroundImg");
const storyText = document.getElementById("storyText");
const nextBtn = document.getElementById("nextBtn");

const story = [
    "Apple",
    "Banana",
    "Orange",
];

const background = [
    "images/Fantasy_kingdom_enhanced.png",
    "images/Kingdom_attacked.png",
];

backgroundImg.style.backgroundImage = `url(${background[0]})`;
storyText.textContent = story[0];

let x = 1;

nextBtn.onclick = function () {
    if (x == 2) {
        backgroundImg.style.backgroundImage = `url(${background[1]})`;
    }
    if (x < story.length) {
        storyText.textContent = story[x];
    }
    if (x == story.length) {
        window.location.replace("DELETE_THIS_LATER.php");
    }
    x++;
}
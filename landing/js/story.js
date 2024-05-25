const backgroundImg = document.getElementById("backgroundImg");
const storyText = document.getElementById("storyText");
const nextBtn = document.getElementById("nextBtn");

const story = [
    "This is Story 1",
    "This is Story 2",
    "This is Story 3",
];

const background = [
    "images/Fantasy_kingdom.png",
];

backgroundImg.style.backgroundImage = `url(${background[0]})`;
storyText.textContent = story[0];

let x = 1;

nextBtn.addEventListener("click", function (event) {
    // if (x == 2) {
    //     backgroundImg.style.backgroundImage = `url(${background[1]})`;
    // }
    if (x < story.length) {
        storyText.textContent = story[x];
    }
    if (x == story.length) {
        // Change this to the next game mechanic
        window.location.replace("DELETE_THIS_LATER.php");
    }
    x++;
});
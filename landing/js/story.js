const backgroundImg = document.getElementById("backgroundImg");
const storyText = document.getElementById("storyText");
const nextBtn = document.getElementById("nextBtn");

const story = [
    "Di sebuah dunia yang penuh dengan misteri dan keajaiban",
    "Terdapat sebuah kerajaan yang disebut Algoria.",
    "Algoria dikenal sebagai kerajaan yang makmur dan sejahtera",
    "berkat kecerdasan dan kemampuan algoritma yang mereka miliki.",
    'Namun, kedamaian itu terancam ketika kekuatan gelap bernama "Bugmalware" menyerang Algoria.',
];

const background = [
    "images/Fantasy_kingdom.png",
    "images/People.png",
    "images/Kingdom_attacked.png"
];

backgroundImg.style.backgroundImage = `url(${background[0]})`;
storyText.textContent = story[0];

let x = 1;

nextBtn.addEventListener("click", function (event) {
    if (x == 2) {
        backgroundImg.style.backgroundImage = `url(${background[1]})`;
    }
    if (x == 4) {
        backgroundImg.style.backgroundImage = `url(${background[2]})`;
    }
    if (x < story.length) {
        storyText.textContent = story[x];
    }
    if (x == story.length) {
        // Change this to the next game mechanic
        window.location.replace("DELETE_THIS_LATER.php");
    }
    x++;
});
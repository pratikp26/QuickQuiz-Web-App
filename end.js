const latestScore = localStorage.getItem("latestScore");
const finalScore = document.getElementById("finalScore");

finalScore.innerText = latestScore;
document.cookie = "score="+latestScore;
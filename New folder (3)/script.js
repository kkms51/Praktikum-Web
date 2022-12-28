var i = document.getElementById("display");

function computer() {
  if (Math.random() >= 0 && Math.random() <= 0.32) {
    return "Rock";
  } else if (Math.random() >= 0.33 && Math.random() <= 0.65) {
    return "Scissor";
  } else {
    return "Paper";
  }
}
function playRound(player, computer) {
  if (player === "Paper" && computer === "Rock") {
    i.innerHTML = "Player Wins - Paper";} 
  else if (player === "Scissor" && computer === "Paper") {
    i.innerHTML = "Player wins - Scissor";} 
  else if (player === "Rock" && computer === "Scissor") {
    i.innerHTML = "Player Wins - Rock";} 
  else if (computer === "Paper" && player === "Rock") {
    i.innerHTML = "Computer Wins - Paper";} 
  else if (computer === "Scissor" && player === "Paper") {
    i.innerHTML = "Computer Wins - Scissor";} 
  else if (computer === "Rock" && player === "Scissor") {
    i.innerHTML = "Computer Wins - Rock";} 
  else {
    return (i.innerHTML = "Draw");}
}

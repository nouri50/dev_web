// Import du prompt
const prompt = require("prompt-sync")();
// Initialisation
let tab = [];
let tabLength = parseInt(prompt("Saisissez une taile de tableau : "));
// Remplissage tableau
for (let i = 1; i <= tabLength; i++) {
  val = parseInt(prompt(`Valeur  ${i} : `));
  tab[i] = val;
}
// Calcul somme
let sum = tab.reduce((a, b) => a + b);
// affichage somme
console.log(sum);
const superHero = require('superheroes');
const superVillan = require('supervillains');

let superHeroName = superHero.random();
let superVillanName = superVillan.random();

let fight = `Fight: ${superHeroName} vs ${superVillanName}`;

console.log(fight);
# Top Trumps - Readme #

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/unknowncodester/top-trumps/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/unknowncodester/top-trumps/?branch=master)

[![Build Status](https://scrutinizer-ci.com/g/unknowncodester/top-trumps/badges/build.png?b=master)](https://scrutinizer-ci.com/g/unknowncodester/top-trumps/build-status/master)


### What is this repository for? ###
This app is just a project I did to practice TDD, OOP and learn the Continous Integration Tool "scrutinizer-ci" and "travis-ci".

(I thought I'd keep it a bit interesting and code a game, as I believe theres more chance of completing the projecting then)

### Rules of the game ###
* A new game is started.
* The Dealer gets cards from the card deck and shuffles them
* The Dealer then gives the cards one by one to each player
* The round begins and Player 1 goes first and selects a stat of his card that he believes will be higher than his opponents
* Player 2 reveals his cards value for the same stat
* Whoever ever wins get to keep both cards and puts them at the bottom of their deck
* The new round begins with the winner of the last round
* The game ends when a players has no cards left

### Possible Future Features ###
* Different difficulty bots
* Different packs of cards
* 3 player games

### How do I get set up? ###

1. Clone repo;
    * git clone https://github.com/unknowncodester/top-trumps.git

2. Install dependancies for the project;
   * cd top-trumps && composer install

3. Run the game
   * php index.php
   
4. Run the tests
   * ./vendor/bin/phpunit
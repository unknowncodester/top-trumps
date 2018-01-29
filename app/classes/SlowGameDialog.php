<?php

class SlowGameDialog extends GameDialog
{
    public function announceNewGame()
    {
        $this->cli->flank('Dealing cards.');
        sleep(1.5);
    }

    public function announceNewRound()
    {
        $this->cli->flank('Round Begins');
        sleep(1.5);
    }

    public function revealCard(Card $card)
    {
        $cardStats = [
            [
                $card->getName(),
                ''
            ],
            [
                'Strength',
                $card->getRage(),
            ],
            [
                'Stealth',
                $card->getStealth(),
            ],
            [
                'Intelligence',
                $card->getIntelligence(),
            ],
            [
                'Magic',
                $card->getMagic(),
            ],
            [
                'Rage',
                $card->getRage(),
            ],
            [
                'Alchemy',
                $card->getAlchemy()
            ]
        ];

        $this->cli->table($cardStats);
    }

    public function announcePlayersMove(Card $playerOneCard, Card $playerTwoCard, string $stat)
    {
        $playerOneHand = [
            [
                $playerOneCard->getName(),
                ''
            ],
            [
                'Strength',
                $playerOneCard->getRage(),
            ],
            [
                'Stealth',
                $playerOneCard->getStealth(),
            ],
            [
                'Intelligence',
                $playerOneCard->getIntelligence(),
            ],
            [
                'Magic',
                $playerOneCard->getMagic(),
            ],
            [
                'Rage',
                $playerOneCard->getRage(),
            ],
            [
                'Alchemy',
                $playerOneCard->getAlchemy()
            ]
        ];

        $this->cli->flank('Player 1 playing card');
        $this->cli->flank('Stat = '.$stat);
        $this->cli->table($playerOneHand);

        sleep(2);

        $playerTwoHand = [
            [
                $playerTwoCard->getName(),
                ''
            ],
            [
                'Strength',
                $playerTwoCard->getRage(),
            ],
            [
                'Stealth',
                $playerTwoCard->getStealth(),
            ],
            [
                'Intelligence',
                $playerTwoCard->getIntelligence(),
            ],
            [
                'Magic',
                $playerTwoCard->getMagic(),
            ],
            [
                'Rage',
                $playerTwoCard->getRage(),
            ],
            [
                'Alchemy',
                $playerTwoCard->getAlchemy()
            ]
        ];

        $this->cli->flank('Player 2 playing card');
        $this->cli->table($playerTwoHand);
        sleep(2);
    }

    public function announceCardSize(int $playerOneCardAmount, int $playerTwoCardAmount)
    {
        $this->cli->table([
            [
                'Player', 'Cards Remaining'
            ],
            [
                '1', $playerOneCardAmount
            ],
            [
                '2', $playerTwoCardAmount
            ],
        ]);
        sleep(2);
    }

    public function announceRoundWinner(string $playerName)
    {
        sleep(1);
        $this->cli->flank($playerName.' Wins The Round!');
        sleep(1);
    }

    public function announceGameWinner(string $playerName)
    {
        sleep(1);
        $this->cli->flank($playerName.' Wins The Game!');
        sleep(1);
    }

    public function takeTurn()
    {
        $moves = [
            'Alchemy',
            'Intelligence',
            'Magic',
            'Rage',
            'Stealth',
            'Strength'
        ];

        $input = $this->cli->radio('Please select a stat:', $moves);
        return $input->prompt();
    }
}
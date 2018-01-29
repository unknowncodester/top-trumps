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
        $cardDetails = $this->getCardDetails($card);

        $this->cli->table($cardDetails);
    }

    public function announcePlayersMove(Card $playerOneCard, Card $playerTwoCard, string $stat)
    {
        $playerOneHand = $this->getCardDetails($playerOneCard);

        $this->cli->flank('Player 1 playing card');
        $this->cli->flank('Stat = '.$stat);
        $this->cli->table($playerOneHand);

        sleep(2);

        $playerTwoHand = $this->getCardDetails($playerTwoCard);

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

    /**
     * Gets a cards details of name and stats
     *
     * @param Card $card
     * @return array
     */
    private function getCardDetails(Card $card): array
    {
        $cardDetails = [
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

        return $cardDetails;
    }
}
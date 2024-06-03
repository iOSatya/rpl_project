<?php
class Character {
    public $characterId;
    public $playerId;
    public $outfit;

    public function __construct($characterId, $playerId, $hairStyle = 'default', $outfit = 'default', $skinColor = 'default', $eyeColor = 'default') {
        $this->characterId = $characterId;
        $this->playerId = $playerId;
        $this->outfit = $outfit;

    }

    public function updateAppearance($newAppearance) {
        $this->outfit = $newAppearance['outfit'];

    }
}
?>

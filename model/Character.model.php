<?php
class Character {
    public $characterId;
    public $playerId;
    public $hairStyle;
    public $outfit;
    public $skinColor;
    public $eyeColor;

    public function __construct($characterId, $playerId, $hairStyle = 'default', $outfit = 'default', $skinColor = 'default', $eyeColor = 'default') {
        $this->characterId = $characterId;
        $this->playerId = $playerId;
        $this->hairStyle = $hairStyle;
        $this->outfit = $outfit;
        $this->skinColor = $skinColor;
        $this->eyeColor = $eyeColor;
    }

    public function updateAppearance($newAppearance) {
        $this->hairStyle = $newAppearance['hairStyle'];
        $this->outfit = $newAppearance['outfit'];
        $this->skinColor = $newAppearance['skinColor'];
        $this->eyeColor = $newAppearance['eyeColor'];
    }
}
?>

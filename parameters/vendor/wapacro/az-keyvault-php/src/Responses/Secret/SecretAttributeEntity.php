<?php

namespace AzKeyVault\Responses\Secret;

use AzKeyVault\Contracts\AttributeInterface;

class SecretAttributeEntity implements AttributeInterface {
    public $enabled;
    public $created;
    public $updated;
    public $recoveryLevel;
    public $exp;
    public $nbf;

    public function __construct(
        $enabled = null,
        $created = null,
        $updated = null,
        $recoveryLevel = null,
        $exp = null,
        $nbf = null
    ) {
        $this->enabled = $enabled;
        $this->created = $created;
        $this->updated = $updated;
        $this->recoveryLevel = $recoveryLevel;
        $this->exp = $exp;
        $this->nbf = $nbf;
    }

    public function isEnabled() {
        return $this->enabled;
    }
}

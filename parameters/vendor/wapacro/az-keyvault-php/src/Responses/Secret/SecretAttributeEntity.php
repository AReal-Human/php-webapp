<?php

namespace AzKeyVault\Responses\Secret;

use AzKeyVault\Contracts\AttributeInterface;

class SecretAttributeEntity implements AttributeInterface {
    public $enabled;

    public function __construct(array $data = []) {
        $this->enabled = $data['enabled'] ?? null;
    }

    public function isEnabled() {
        return $this->enabled;
    }
}

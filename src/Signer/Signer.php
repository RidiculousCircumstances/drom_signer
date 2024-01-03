<?php

namespace App\Signer;

use App\Signer\DTO\RequestParameterData;
use Ds\Map;

class Signer
{

    private Map|null $parameters = null;

    /**
     * @param string $secret
     */
    public function __construct(#[\SensitiveParameter] private readonly string $secret)
    {
        $this->parameters = new Map();
    }

    public function parameter(string $key, string|array $value): static
    {

        if(is_array($value)) {
            $value = implode(',', $value);

        }
        $this->parameters->put($key, $value);
        return $this;
    }

    private function getParametersSting(): string
    {
        $params = $this->parameters->ksorted()->values();

        $paramsString = implode('', $params->toArray());

        $paramsString .= $this->secret;

        return $paramsString;
    }

    public function getHash(): string
    {
        $string = $this->getParametersSting();
        try {
            $messageDigest = hash("sha256", $string, true);
            $sb9 = "";
            foreach (str_split($messageDigest) as $b12) {
                $hexString = dechex(ord($b12));
                if (strlen($hexString) === 1) {
                    $sb9 .= '0';
                }
                $sb9 .= $hexString;
            }
            $sb8 = $sb9;
        } catch (\Throwable $e12) {
        }
        return $sb8;
    }
}
<?php

declare(strict_types=1);

namespace Brick\Math\Internal\Calculator;

use Brick\Math\Internal\Calculator;

/**
 * Calculator implementation built around the GMP library.
 *
 * @internal
 */
class GmpCalculator extends Calculator
{
    /**
     * {@inheritdoc}
     */
    public function add(string $a, string $b) : string
    {
        return gmp_strval(gmp_add($a, $b));
    }

    /**
     * {@inheritdoc}
     */
    public function sub(string $a, string $b) : string
    {
        return gmp_strval(gmp_sub($a, $b));
    }

    /**
     * {@inheritdoc}
     */
    public function mul(string $a, string $b) : string
    {
        return gmp_strval(gmp_mul($a, $b));
    }

    /**
     * {@inheritdoc}
     */
    public function divQ(string $a, string $b) : string
    {
        return gmp_strval(gmp_div_q($a, $b));
    }

    /**
     * {@inheritdoc}
     */
    public function divR(string $a, string $b) : string
    {
        return gmp_strval(gmp_div_r($a, $b));
    }

    /**
     * {@inheritdoc}
     */
    public function divQR(string $a, string $b) : array
    {
        list ($q, $r) = gmp_div_qr($a, $b);

        return [
            gmp_strval($q),
            gmp_strval($r)
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function pow(string $a, int $e) : string
    {
        return gmp_strval(gmp_pow($a, $e));
    }

    /**
     * {@inheritdoc}
     */
    public function gcd(string $a, string $b) : string
    {
        return gmp_strval(gmp_gcd($a, $b));
    }
}

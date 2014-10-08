<?php

namespace DesignPatterns\Base\Money;

include_once 'Currency.php';

/**
 * @author Mathias Verraes
 */
class Money
{
    /**
     * @var int
     */
    private $amount = 0;

    /** @var Currency */
    private $currency;

    /**
     * @param $amount
     * @param Currency $currency
     */
    public function __construct($amount, Currency $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * @param string $method
     * @param array $arguments
     * @return Money
     */
    public static function __callStatic($method, $arguments)
    {
        return new Money($arguments[0], new Currency($method));
    }

    /**
     * @param Money $other
     * @return bool
     */
    public function isSameCurrency(Money $other)
    {
        return $this->currency->equals($other->currency);
    }

    /**
     * @param Money $other
     * @return bool
     */
    public function equals(Money $other)
    {
        return $this->isSameCurrency($other)
            && $this->amount == $other->amount;
    }

    /**
     * @param Money $other
     * @return int
     */
    public function compare(Money $other)
    {
        if ($this->amount < $other->amount) {
            return -1;
        }
        elseif ($this->amount == $other->amount) {
            return 0;
        }
        else {
            return 1;
        }
    }

    /**
     * @param Money $other
     * @return bool
     */
    public function greaterThan(Money $other)
    {
        return 1 == $this->compare($other);
    }

    /**
     * @param Money $other
     * @return bool
     */
    public function lessThan(Money $other)
    {
        return -1 == $this->compare($other);
    }

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return Currency
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param Money $addend
     * @return Money
     */
    public function add(Money $addend)
    {
        return new self($this->amount + $addend->amount, $this->currency);
    }

    /**
     * @param Money $subtrahend
     * @return Money
     */
    public function subtract(Money $subtrahend)
    {
        return new self($this->amount - $subtrahend->amount, $this->currency);
    }

    /**
     * @param $multiplier
     * @return Money
     */
    public function multiply($multiplier)
    {
        $product = (int) round($this->amount * $multiplier, 0);
        return new self($product, $this->currency);
    }

    /**
     * @param $divisor
     * @return Money
     */
    public function divide($divisor)
    {
        $quotient = (int)round($this->amount / $divisor, 0);
        return new Money($quotient, $this->currency);
    }

    /**
     * @param array $ratios
     * @return array
     */
    public function allocate(array $ratios)
    {
        $remainder = $this->amount;
        $results = [];
        $total = array_sum($ratios);

        foreach ($ratios as $ratio) {
            $share = (int) floor($this->amount * $ratio / $total);
            $results[] = new Money($share, $this->currency);
            $remainder -= $share;
        }
        for ($i = 0; $remainder > 0; $i++) {
            $results[$i]->amount++;
            $remainder--;
        }

        return $results;
    }

    public function __toString()
    {
        return $this->getAmount() . ' ' . $this->getCurrency();
    }
}
<?php

namespace SpameriTests\Data\Entity\Video\Technical;


class Runtime implements \Spameri\Elastic\Entity\IValue
{

	/**
	 * @var int
	 */
	private $value;


	public function __construct(
		?int $value
	)
	{
		if ($value < 0) {
			throw new \InvalidArgumentException();
		}
		if ($value > 1200) {
			throw new \InvalidArgumentException();
		}

		$this->value = $value;
	}


	public function value() : ?int
	{
		return $this->value;
	}
}
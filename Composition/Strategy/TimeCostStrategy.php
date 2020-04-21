<?php


class TimeCostStrategy extends CostStrategy
{
	/**
	 * @param Lesson $lesson
	 * @return int
	 */
	public function cost(Lesson $lesson): int
	{
		return ($lesson->getDuration() * 5);
	}
	/**
	 * @return string
	 */
	public function chargeType(): string
	{
		return 'Почасовая оплата';
	}
}
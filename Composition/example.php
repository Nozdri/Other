<?php


$lessons[] = new Seminar(4, new TimeCostStrategy());
$lessons[] = new Lecture(3, new FixedCostStrategy());

foreach ($lessons as $lesson) {

	echo "Оплата за занятие {$lesson->cost()}";
	echo "Тип оплаты {$lesson->chargeType()}";
}
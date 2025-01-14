<?php
// Interface

interface PaymentInterface {
	public function payNow();
}

class Paypal implements PaymentInterface {
	public function loginFirst() {}
	public function payNow() {}
	public function paymentProcess() {
		$this->loginFirst();
		$this->payNow();
	}
} 

class Visa implements PaymentInterface {
	public function payNow() {}
	public function paymentProcess() {
		$this->payNow();
	}
} 

class Cash implements PaymentInterface {
	public function payNow() {}
	public function paymentProcess() {
		$this->payNow();
	}
} 

class BuyProduct {
	public function pay(PaymentInterface $paymentType) {
		$paymentType->paymentProcess();
	}
} 

$paymentType = new Cash();
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType);
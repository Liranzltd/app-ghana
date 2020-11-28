<?php

namespace AppBundle\Service;
use AppBundle\Entity\Transaction;


Class TransactionService
{
  protected $container;

  public function  __construct($container)
  {
      $this->container = $container;
  }

  public function addTransaction($company,$debit,$credit,$transactionDate,$reference)
  {
    $em = $this->container->get('doctrine');
    $transaction = new Transaction();
    $transaction->setDebit($debit);
    $transaction->setReference($reference);
    $transaction->setCredit($credit);
    $transaction->setTransactionDate($transactionDate);
    $transaction->setCompany($company);

    $em->persist($transaction);
    $em->flush();
  }
}

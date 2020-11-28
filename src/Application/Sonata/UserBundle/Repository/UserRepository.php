<?php

namespace Application\Sonata\UserBundle\Repository;

class UserRepository  extends \Doctrine\ORM\EntityRepository
{
    public function getActive()
    {
        // As may have notice, the delay is redondant, for the sake of the example, i didn't defined its value in my bundle configuration, but it would be better to do so.
        $delay = new \DateTime();
        $delay->setTimestamp(strtotime('2 minutes ago'));

        $u = $this->getEntityManager()
            ->createQuery(
                'SELECT u FROM ApplicationSonataUserBundle:User u JOIN u.groups g WHERE g.id != 2 AND u.lastActivityAt > :delay  ORDER BY u.firstname ASC'
            )->setParameter('delay', $delay)
            ->getResult();
        return $u;
    }

    public function getDisabled()
    {

      $u = $this->getEntityManager()
          ->createQuery(
              'SELECT u FROM ApplicationSonataUserBundle:User u JOIN u.member m WHERE u.enabled > :status  ORDER BY u.firstname ASC'
          )->setParameter('status', false)
          ->getResult();
      return $u;

    }

    public function getRegisteredOn($from = null,$to = null)
    {
      $from = $from == null ? new \DateTime() : $from;
      $to = $to == null ? new \DateTime() : $to;

      $u = $this->getEntityManager()
          ->createQuery(
              'SELECT u FROM ApplicationSonataUserBundle:User u WHERE u.createdAt > :from AND u.createdAt < :to ORDER BY u.firstname ASC'
          )->setParameters(['from' => $from->setTime(00, 00, 00), 'to' => $to->setTime(23, 59, 59)])
          ->getResult();
      return $u;
    }
}

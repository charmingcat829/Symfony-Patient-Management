<?php

namespace Ben\DoctorsBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ConfigRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ConfigRepository extends EntityRepository
{
	public function updateBy($key, $value)
    {
        $qB = $this->getEntityManager()->createQueryBuilder()
        	->update('BenDoctorsBundle:config', 'c')
            ->set('c.theValue', '?1')
            ->where('c.theKey = ?2')
            ->setParameter(1, $value)
            ->setParameter(2, $key);
         
        return $qB->getQuery()->execute();
    }
}

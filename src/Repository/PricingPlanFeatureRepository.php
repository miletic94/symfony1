<?php

namespace App\Repository;

use App\Entity\PricingBenefitFeature;
use App\Entity\PricingPlanFeature;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PricingBenefitFeature>
 *
 * @method PricingBenefitFeature|null find($id, $lockMode = null, $lockVersion = null)
 * @method PricingBenefitFeature|null findOneBy(array $criteria, array $orderBy = null)
 * @method PricingBenefitFeature[]    findAll()
 * @method PricingBenefitFeature[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PricingPlanFeatureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PricingPlanFeature::class);
    }

    //    /**
    //     * @return PricingBenefitFeature[] Returns an array of PricingBenefitFeature objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('p.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?PricingBenefitFeature
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}

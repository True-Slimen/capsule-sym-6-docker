<?php

namespace App\Repository;

use App\Entity\Caps;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Caps>
 *
 * @method Caps|null find($id, $lockMode = null, $lockVersion = null)
 * @method Caps|null findOneBy(array $criteria, array $orderBy = null)
 * @method Caps[]    findAll()
 * @method Caps[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CapsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Caps::class);
    }

    public function save(Caps $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Caps $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
    * @return Cap[] Returns the *number* last created caps
    */
    public function findByCreatedCapsAndOrder($numbers, $order)
    {
        return $this->createQueryBuilder('caps')
            ->orderBy('caps.created_at', $order)
            ->setMaxResults($numbers)
            ->getQuery()
            ->getResult();
    }

//    /**
//     * @return Caps[] Returns an array of Caps objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Caps
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

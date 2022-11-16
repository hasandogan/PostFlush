<?php

namespace App\Repository;

use App\Entity\TagToMessage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TagToMessage>
 *
 * @method TagToMessage|null find($id, $lockMode = null, $lockVersion = null)
 * @method TagToMessage|null findOneBy(array $criteria, array $orderBy = null)
 * @method TagToMessage[]    findAll()
 * @method TagToMessage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TagToMessageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TagToMessage::class);
    }

    public function save(TagToMessage $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TagToMessage $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @return TagToMessage[] Returns an array of TagToMessage objects
     */
    public function findLast24HoursTags(\Datetime $date): array
    {
        $first  = new \DateTime($date->format("Y-m-d")." 00:00:00");
        $second = new \DateTime($date->format("Y-m-d")." 23:59:59");

        return $this->createQueryBuilder('t')
            ->select('t.tagId, count(t.tagId) AS count')
            ->distinct()
            ->andWhere('t.createdAt BETWEEN :first AND :second')
            ->setParameter('first', $first )
            ->setParameter('second', $second)
            ->groupBy('t.tagId')
            ->orderBy('count', 'DESC')
            ->setMaxResults(5)
            ->getQuery()
            ->getResult()
        ;
    }

//    public function findOneBySomeField($value): ?TagToMessage
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

<?php

namespace App\Repository;

use App\Entity\Message;
use DateInterval;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Message>
 *
 * @method Message|null find($id, $lockMode = null, $lockVersion = null)
 * @method Message|null findOneBy(array $criteria, array $orderBy = null)
 * @method Message[]    findAll()
 * @method Message[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MessageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Message::class);
    }

    public function add(Message $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Message $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @return Message[] Returns an array of Message objects
     */
    public function findLast100Message(): array
    {
        return $this->createQueryBuilder('m')
            ->select(array('m.id','m.message','m.username','m.createdAt'))
            ->orderBy('m.id', 'DESC')
            ->setMaxResults(98)
            ->getQuery()
            ->getArrayResult()
        ;
    }

    /**
     * @param string
     * @throws NonUniqueResultException
     */
    public function getLastMessageFromIp()
    {
        $dateTime = new \DateTimeImmutable("now");
        $dateTime = $dateTime->modify("-3 seconds");
        return $this->createQueryBuilder('m')
            ->select(["m"])
            ->where("m.ip = :ip")
            ->andWhere("m.createdAt > :createAt")
            ->setParameter("ip",$_SERVER['REMOTE_ADDR'])
            ->setParameter("createAt",$dateTime)
            ->getQuery()
            ->getOneOrNullResult();
    }

//    public function findOneBySomeField($value): ?Message
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

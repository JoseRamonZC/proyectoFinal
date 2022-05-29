<?php

namespace App\Repository;

use App\Entity\Comentarios;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Comentarios|null find($id, $lockMode = null, $lockVersion = null)
 * @method Comentarios|null findOneBy(array $criteria, array $orderBy = null)
 * @method Comentarios[]    findAll()
 * @method Comentarios[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ComentariosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Comentarios::class);
    }

    //BUscamos los comentarios que han realizado los usuarios en un posts

    public function BuscarComentariosDeUNPost($post_id){
        return $this->getEntityManager()
            ->createQuery('
                SELECT comentario.comentario, user.nombre
                FROM App:Comentarios comentario
                JOIN comentario.user user
                WHERE comentario.posts = :post_id
            ')
            ->setParameter('post_id',$post_id);
    }
}

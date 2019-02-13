<?php
// src/AppBundle/Repository/PostRepository.php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class PostRepository extends EntityRepository
{
   public function postList()
   {
      $qb = $this->createQueryBuilder('p');
      $qb->leftJoin('p.postMetas', 'm')
          ->addSelect('m')
         ->where('p.postStatus = :status')
          ->setParameter('status', 'publish')
         ->andWhere('p.postType = :type')
          ->setParameter('type', 'post')
         ->andWhere('m.metaKey = :key')
          ->setParameter('key', '_thumbnail_id')
         ->orderBy('p.postDate', 'DESC')
          ->setMaxResults(20)
      ;

      return $qb->getQuery()->getResult();
   }

   public function postList2()
   {
       $query = $this->_em->createQuery("SELECT
        p1.postTitle,
        p1.id,
        wm2.metaValue
        FROM 
            AppBundle:Post p1
        LEFT JOIN 
            AppBundle:PostMeta wm1
            WITH (
                wm1.postId = p1.id 
                AND wm1.metaValue IS NOT NULL
                AND wm1.metaKey = :meta_key              
            )
        LEFT JOIN 
            AppBundle:PostMeta wm2
            WITH (
                wm1.metaValue = wm2.postId
                AND wm2.metaKey = :meta_key2
                AND wm2.metaValue IS NOT NULL  
            )
        WHERE
            p1.postStatus= :post_status
            AND p1.postType= :post_type
        ORDER BY 
        p1.postDate DESC");

        $query->setParameter('meta_key' , '_thumbnail_id');
        $query->setParameter('meta_key2' , '_wp_attached_file');
        $query->setParameter('post_status' , 'publish');
        $query->setParameter('post_type' , 'post');
        $query->setMaxResults(10);

        $results  = $query->getResult();
        return $results;
   }

}
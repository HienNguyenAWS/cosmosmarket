<?php 

namespace Plugin\ghtk\Repository;

use Eccube\Repository\AbstractRepository;
use Plugin\ghtk\Entity\GhtkOrderStatus;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * GHtkOrderStatusRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class GhtkOrderStatusRepository extends AbstractRepository
{
    /**
     * ConfigRepository constructor.
     *
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, GhtkOrderStatus::class);
    }

    /**
     * @param int $id
     *
     * @return null|Config
     */
    public function get($id)
    {
        return $this->find($id);
    }
}
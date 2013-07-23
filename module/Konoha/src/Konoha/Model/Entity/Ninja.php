<?php

namespace Konoha\Model\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Ninja
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $nome;

    /**
     * @ORM\Column(type="integer")
     * @var string
     */
    private $chakra;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $vila;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $kunai;

    /**
     * @param string $chakra
     */
    public function setChakra($chakra)
    {
        $this->chakra = $chakra;
    }

    /**
     * @return string
     */
    public function getChakra()
    {
        return $this->chakra;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $kunai
     */
    public function setKunai($kunai)
    {
        $this->kunai = $kunai;
    }

    /**
     * @return int
     */
    public function getKunai()
    {
        return $this->kunai;
    }

    /**
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param string $vila
     */
    public function setVila($vila)
    {
        $this->vila = $vila;
    }

    /**
     * @return string
     */
    public function getVila()
    {
        return $this->vila;
    }


}
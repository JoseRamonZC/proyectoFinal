<?php

namespace App\Entity;

use App\Repository\ComentariosRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ComentariosRepository::class)]
class Comentarios
{

    const COMENTARIO_AGREGADO_EXITOSAMENTE = '¡Comentario agregado!';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $comentario;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: "User")]
    private $user;

    #[ORM\ManyToOne(targetEntity: Posts::class, inversedBy: "Posts")]
    private $posts;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComentario(): ?string
    {
        return $this->comentario;
    }

    public function setComentario(?string $comentario): self
    {
        $this->comentario = $comentario;

        return $this;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user): void
    {
        $this->user = $user;
    }

    public function getPosts()
    {
        return $this->posts;
    }

    public function setPosts($posts): void
    {
        $this->posts = $posts;
    }

    public function __toString()
    {
        return $this->id . " - " . $this->getComentario();
    }
}

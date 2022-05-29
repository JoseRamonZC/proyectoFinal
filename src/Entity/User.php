<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface{
    
    const REGISTRO_EXITOSO = 'Se ha registrado exitosamente';
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;
    
    #[ORM\Column(type: 'string', length: 180, unique: true)]
    private $email;
    
    #[ORM\Column(type: 'json')]
    private $roles = [];
    
    #[ORM\Column(type: 'string')]
    #[Assert\Length(
        min: 5,
        max: 30,
        minMessage: 'Your password must be at least 5 characters long',
        maxMessage: 'Your password cannot be longer than 30 characters',
    )]
    private $password;

    #[ORM\Column(type: 'boolean')]
    private $baneado;

    #[ORM\Column(type: 'string')]
    private $nombre;

    #[ORM\OneToMany(targetEntity: Comentarios::class, mappedBy: "Comentarios")]
    private $comentarios;

    #[ORM\OneToMany(targetEntity: Posts::class, mappedBy: "Posts")]
    private $post;

    public function __construct(){
        $this->baneado = false;
        $this->roles = ['ROLE_USER'];
        
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getBaneado(): bool
    {
        return $this->baneado;
    }

    public function setBaneado(bool $baneado): self
    {
        $this->baneado = $baneado;

        return $this;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }


    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function __toString()
    {
        return $this->id . " - " . $this->getEmail();
    }

}

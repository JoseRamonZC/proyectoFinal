<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220526155310 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE comentarios DROP FOREIGN KEY FK_F54B3FC04B89032C');
        $this->addSql('DROP INDEX IDX_F54B3FC04B89032C ON comentarios');
        $this->addSql('ALTER TABLE comentarios CHANGE post_id posts_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE comentarios ADD CONSTRAINT FK_F54B3FC0D5E258C5 FOREIGN KEY (posts_id) REFERENCES posts (id)');
        $this->addSql('CREATE INDEX IDX_F54B3FC0D5E258C5 ON comentarios (posts_id)');
        $this->addSql('ALTER TABLE posts DROP likes');
        $this->addSql('ALTER TABLE user CHANGE baneado baneado TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE comentarios DROP FOREIGN KEY FK_F54B3FC0D5E258C5');
        $this->addSql('DROP INDEX IDX_F54B3FC0D5E258C5 ON comentarios');
        $this->addSql('ALTER TABLE comentarios CHANGE comentario comentario VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE posts_id post_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE comentarios ADD CONSTRAINT FK_F54B3FC04B89032C FOREIGN KEY (post_id) REFERENCES posts (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_F54B3FC04B89032C ON comentarios (post_id)');
        $this->addSql('ALTER TABLE posts ADD likes VARCHAR(1000) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE titulo titulo VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE foto foto VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE contenido contenido MEDIUMTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE email email VARCHAR(180) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE baneado baneado TINYINT(1) DEFAULT NULL, CHANGE nombre nombre VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}

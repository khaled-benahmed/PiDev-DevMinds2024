<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240221194051 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE activite (id INT AUTO_INCREMENT NOT NULL, nom_activite VARCHAR(255) NOT NULL, duree_activite VARCHAR(255) NOT NULL, difficulte_activite VARCHAR(255) NOT NULL, image_activite VARCHAR(255) NOT NULL, description_activite VARCHAR(255) NOT NULL, urlresources VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE calendar (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, start TIME NOT NULL, end TIME NOT NULL, description VARCHAR(255) NOT NULL, background_color VARCHAR(255) NOT NULL, text_color VARCHAR(255) NOT NULL, border_color VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE planning (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, date_planning DATETIME NOT NULL, jour_planning VARCHAR(255) NOT NULL, start_time TIME NOT NULL, end_time TIME NOT NULL, status VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE planning_activite (planning_id INT NOT NULL, activite_id INT NOT NULL, INDEX IDX_8F7003B83D865311 (planning_id), INDEX IDX_8F7003B89B0F88B1 (activite_id), PRIMARY KEY(planning_id, activite_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE test (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, create_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE planning_activite ADD CONSTRAINT FK_8F7003B83D865311 FOREIGN KEY (planning_id) REFERENCES planning (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE planning_activite ADD CONSTRAINT FK_8F7003B89B0F88B1 FOREIGN KEY (activite_id) REFERENCES activite (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE planning_activite DROP FOREIGN KEY FK_8F7003B83D865311');
        $this->addSql('ALTER TABLE planning_activite DROP FOREIGN KEY FK_8F7003B89B0F88B1');
        $this->addSql('DROP TABLE activite');
        $this->addSql('DROP TABLE calendar');
        $this->addSql('DROP TABLE planning');
        $this->addSql('DROP TABLE planning_activite');
        $this->addSql('DROP TABLE test');
        $this->addSql('DROP TABLE messenger_messages');
    }
}

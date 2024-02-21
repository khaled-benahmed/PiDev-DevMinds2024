<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240221224100 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE abonnement ADD categorie_abonnements_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE abonnement ADD CONSTRAINT FK_351268BBF5344CD0 FOREIGN KEY (categorie_abonnements_id) REFERENCES categorie_abonnements (id)');
        $this->addSql('CREATE INDEX IDX_351268BBF5344CD0 ON abonnement (categorie_abonnements_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE abonnement DROP FOREIGN KEY FK_351268BBF5344CD0');
        $this->addSql('DROP INDEX IDX_351268BBF5344CD0 ON abonnement');
        $this->addSql('ALTER TABLE abonnement DROP categorie_abonnements_id');
    }
}

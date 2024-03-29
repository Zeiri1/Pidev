<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240214181104 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation ADD accommodation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE6064048F3692CD FOREIGN KEY (accommodation_id) REFERENCES accommodation (id)');
        $this->addSql('CREATE INDEX IDX_CE6064048F3692CD ON reclamation (accommodation_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE6064048F3692CD');
        $this->addSql('DROP INDEX IDX_CE6064048F3692CD ON reclamation');
        $this->addSql('ALTER TABLE reclamation DROP accommodation_id');
    }
}

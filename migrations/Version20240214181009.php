<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240214181009 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation ADD client_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE60640419EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('CREATE INDEX IDX_CE60640419EB6921 ON reclamation (client_id)');
        $this->addSql('ALTER TABLE vol ADD client_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE vol ADD CONSTRAINT FK_95C97EB19EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('CREATE INDEX IDX_95C97EB19EB6921 ON vol (client_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE60640419EB6921');
        $this->addSql('DROP INDEX IDX_CE60640419EB6921 ON reclamation');
        $this->addSql('ALTER TABLE reclamation DROP client_id');
        $this->addSql('ALTER TABLE vol DROP FOREIGN KEY FK_95C97EB19EB6921');
        $this->addSql('DROP INDEX IDX_95C97EB19EB6921 ON vol');
        $this->addSql('ALTER TABLE vol DROP client_id');
    }
}

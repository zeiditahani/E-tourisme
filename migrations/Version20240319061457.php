<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240319061457 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hiking RENAME INDEX fk_agence TO IDX_42CE0BD7D725330D');
        $this->addSql('ALTER TABLE region ADD cruise_id INT NOT NULL');
        $this->addSql('ALTER TABLE region ADD CONSTRAINT FK_F62F176D7B31F30 FOREIGN KEY (cruise_id) REFERENCES cruise (id)');
        $this->addSql('CREATE INDEX IDX_F62F176D7B31F30 ON region (cruise_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hiking RENAME INDEX idx_42ce0bd7d725330d TO fk_agence');
        $this->addSql('ALTER TABLE region DROP FOREIGN KEY FK_F62F176D7B31F30');
        $this->addSql('DROP INDEX IDX_F62F176D7B31F30 ON region');
        $this->addSql('ALTER TABLE region DROP cruise_id');
    }
}

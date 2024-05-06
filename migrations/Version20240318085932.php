<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240318085932 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hiking DROP FOREIGN KEY FK_region');
        $this->addSql('DROP INDEX FK_region ON hiking');
        $this->addSql('ALTER TABLE hiking ADD agence_id INT NOT NULL, ADD agency VARCHAR(255) DEFAULT NULL, DROP regions');
        $this->addSql('ALTER TABLE hiking ADD CONSTRAINT FK_42CE0BD7D725330D FOREIGN KEY (agence_id) REFERENCES agency (id)');
        $this->addSql('CREATE INDEX IDX_42CE0BD7D725330D ON hiking (agence_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hiking DROP FOREIGN KEY FK_42CE0BD7D725330D');
        $this->addSql('DROP INDEX IDX_42CE0BD7D725330D ON hiking');
        $this->addSql('ALTER TABLE hiking ADD regions INT DEFAULT NULL, DROP agence_id, DROP agency');
        $this->addSql('ALTER TABLE hiking ADD CONSTRAINT FK_region FOREIGN KEY (regions) REFERENCES region (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX FK_region ON hiking (regions)');
    }
}

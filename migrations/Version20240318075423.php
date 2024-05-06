<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240318075423 extends AbstractMigration
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
        $this->addSql('ALTER TABLE hiking DROP regions');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hiking ADD regions INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hiking ADD CONSTRAINT FK_region FOREIGN KEY (regions) REFERENCES region (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX FK_region ON hiking (regions)');
    }
}

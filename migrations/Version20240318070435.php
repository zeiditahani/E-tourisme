<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240318070435 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE region CHANGE hiking_id hiking_id INT NOT NULL');
        $this->addSql('ALTER TABLE hiking ADD region_id INT NOT NULL');
        $this->addSql('ALTER TABLE hiking ADD CONSTRAINT FK_region FOREIGN KEY (region_id) REFERENCES region (id)');
    }
    

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE region CHANGE hiking_id hiking_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hiking DROP FOREIGN KEY FK_region');
        $this->addSql('ALTER TABLE hiking DROP region_id');
    }
}

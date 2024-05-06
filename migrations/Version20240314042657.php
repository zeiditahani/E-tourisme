<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240314042657 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE imageshiking (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE umrah DROP FOREIGN KEY fk_image_id');
        $this->addSql('DROP INDEX idx_image_id ON umrah');
        $this->addSql('ALTER TABLE umrah DROP image_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE imageshiking');
        $this->addSql('ALTER TABLE umrah ADD image_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE umrah ADD CONSTRAINT fk_image_id FOREIGN KEY (image_id) REFERENCES images (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX idx_image_id ON umrah (image_id)');
    }
}

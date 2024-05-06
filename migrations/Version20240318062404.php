<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240318062404 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE region ADD hik_id INT NOT NULL, CHANGE hiking_id hiking_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE region ADD CONSTRAINT FK_F62F17671AFD0BB FOREIGN KEY (hiking_id) REFERENCES hiking (id)');
        $this->addSql('ALTER TABLE region ADD CONSTRAINT FK_F62F176B4605588 FOREIGN KEY (hik_id) REFERENCES hiking (id)');
        $this->addSql('CREATE INDEX IDX_F62F17671AFD0BB ON region (hiking_id)');
        $this->addSql('CREATE INDEX IDX_F62F176B4605588 ON region (hik_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE region DROP FOREIGN KEY FK_F62F17671AFD0BB');
        $this->addSql('ALTER TABLE region DROP FOREIGN KEY FK_F62F176B4605588');
        $this->addSql('DROP INDEX IDX_F62F17671AFD0BB ON region');
        $this->addSql('DROP INDEX IDX_F62F176B4605588 ON region');
        $this->addSql('ALTER TABLE region DROP hik_id, CHANGE hiking_id hiking_id INT NOT NULL');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240129135025 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cruise (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, detaielddescription LONGTEXT DEFAULT NULL, included LONGTEXT DEFAULT NULL, unincluded LONGTEXT DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, images LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE hotel CHANGE title title VARCHAR(255) NOT NULL, CHANGE adress adress VARCHAR(255) NOT NULL, CHANGE email email VARCHAR(255) NOT NULL, CHANGE phone phone VARCHAR(255) NOT NULL, CHANGE logo logo VARCHAR(255) NOT NULL, CHANGE region region VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE cruise');
        $this->addSql('ALTER TABLE hotel CHANGE title title VARCHAR(255) DEFAULT NULL, CHANGE adress adress VARCHAR(255) DEFAULT NULL, CHANGE email email VARCHAR(255) DEFAULT NULL, CHANGE phone phone VARCHAR(255) DEFAULT NULL, CHANGE logo logo VARCHAR(255) DEFAULT NULL, CHANGE region region VARCHAR(255) DEFAULT NULL');
    }
}

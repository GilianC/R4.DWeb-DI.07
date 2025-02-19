<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250219162449 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lego ADD box_image VARCHAR(255) NOT NULL, ADD lego_image VARCHAR(255) NOT NULL, DROP imagebox, DROP imagebg, CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE name name VARCHAR(255) NOT NULL, CHANGE description description LONGTEXT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lego ADD imagebox VARCHAR(256) NOT NULL, ADD imagebg VARCHAR(256) NOT NULL, DROP box_image, DROP lego_image, CHANGE id id INT NOT NULL, CHANGE name name VARCHAR(256) NOT NULL, CHANGE description description TEXT NOT NULL');
    }
}

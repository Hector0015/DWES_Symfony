<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231018065601 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        // $this->addSql('ALTER TABLE contacto DROP FOREIGN KEY FK_2741493C98260155');
        // $this->addSql('CREATE TABLE provincia (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        // $this->addSql('DROP TABLE region');
        // $this->addSql('DROP INDEX IDX_2741493C98260155 ON contacto');
        // $this->addSql('ALTER TABLE contacto DROP region_id');
        // $this->addSql('ALTER TABLE contacto ADD CONSTRAINT FK_2741493C4E7121AF FOREIGN KEY (provincia_id) REFERENCES provincia (id)');
        // $this->addSql('CREATE INDEX IDX_2741493C4E7121AF ON contacto (provincia_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        // $this->addSql('ALTER TABLE contacto DROP FOREIGN KEY FK_2741493C4E7121AF');
        // $this->addSql('CREATE TABLE region (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        // $this->addSql('DROP TABLE provincia');
        // $this->addSql('DROP INDEX IDX_2741493C4E7121AF ON contacto');
        // $this->addSql('ALTER TABLE contacto ADD region_id INT DEFAULT NULL');
        // $this->addSql('ALTER TABLE contacto ADD CONSTRAINT FK_2741493C98260155 FOREIGN KEY (region_id) REFERENCES region (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        // $this->addSql('CREATE INDEX IDX_2741493C98260155 ON contacto (region_id)');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250525003921 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE service ADD COLUMN is_active BOOLEAN DEFAULT 1 NOT NULL
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TEMPORARY TABLE __temp__service AS SELECT id, name, description, price, duration FROM service
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE service
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE service (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(1000) DEFAULT NULL, price DOUBLE PRECISION NOT NULL, duration INTEGER NOT NULL)
        SQL);
        $this->addSql(<<<'SQL'
            INSERT INTO service (id, name, description, price, duration) SELECT id, name, description, price, duration FROM __temp__service
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE __temp__service
        SQL);
    }
}

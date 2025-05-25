<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250525002706 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE doctor ADD COLUMN is_active BOOLEAN DEFAULT 1 NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TEMPORARY TABLE __temp__user AS SELECT id, email, roles, password, first_name, last_name, phone, notification_preference, created_at, updated_at, is_verified, is_active, is_locked, last_login FROM user
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE user
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles CLOB NOT NULL --(DC2Type:json)
            , password VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, phone VARCHAR(20) DEFAULT NULL, notification_preference VARCHAR(10) NOT NULL, created_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
            , updated_at DATETIME DEFAULT NULL --(DC2Type:datetime_immutable)
            , is_verified BOOLEAN NOT NULL, is_active BOOLEAN DEFAULT NULL, is_locked BOOLEAN DEFAULT NULL, last_login DATETIME DEFAULT NULL --(DC2Type:datetime_immutable)
            )
        SQL);
        $this->addSql(<<<'SQL'
            INSERT INTO user (id, email, roles, password, first_name, last_name, phone, notification_preference, created_at, updated_at, is_verified, is_active, is_locked, last_login) SELECT id, email, roles, password, first_name, last_name, phone, notification_preference, created_at, updated_at, is_verified, is_active, is_locked, last_login FROM __temp__user
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE __temp__user
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TEMPORARY TABLE __temp__doctor AS SELECT id, user_id, specialization, biography FROM doctor
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE doctor
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE doctor (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, user_id INTEGER NOT NULL, specialization VARCHAR(255) NOT NULL, biography VARCHAR(1000) DEFAULT NULL, CONSTRAINT FK_1FC0F36AA76ED395 FOREIGN KEY (user_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE)
        SQL);
        $this->addSql(<<<'SQL'
            INSERT INTO doctor (id, user_id, specialization, biography) SELECT id, user_id, specialization, biography FROM __temp__doctor
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE __temp__doctor
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX UNIQ_1FC0F36AA76ED395 ON doctor (user_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TEMPORARY TABLE __temp__user AS SELECT id, email, roles, password, first_name, last_name, phone, notification_preference, created_at, updated_at, is_verified, is_active, is_locked, last_login FROM "user"
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE "user"
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE "user" (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles CLOB NOT NULL --(DC2Type:json)
            , password VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, phone VARCHAR(20) DEFAULT NULL, notification_preference VARCHAR(10) NOT NULL, created_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
            , updated_at DATETIME DEFAULT NULL --(DC2Type:datetime_immutable)
            , is_verified BOOLEAN NOT NULL, is_active BOOLEAN DEFAULT NULL, is_locked BOOLEAN DEFAULT NULL, last_login DATETIME DEFAULT NULL)
        SQL);
        $this->addSql(<<<'SQL'
            INSERT INTO "user" (id, email, roles, password, first_name, last_name, phone, notification_preference, created_at, updated_at, is_verified, is_active, is_locked, last_login) SELECT id, email, roles, password, first_name, last_name, phone, notification_preference, created_at, updated_at, is_verified, is_active, is_locked, last_login FROM __temp__user
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE __temp__user
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON "user" (email)
        SQL);
    }
}

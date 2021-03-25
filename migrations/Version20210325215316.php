<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210325215316 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE offert_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE "user_id_seq" INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE user_details_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE offert (id INT NOT NULL, event_firm_id INT NOT NULL, event_name VARCHAR(100) NOT NULL, date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_44229184CF8D1CF ON offert (event_firm_id)');
        $this->addSql('CREATE TABLE "user" (id INT NOT NULL, user_details_id_id INT NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, account_type VARCHAR(100) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D64912595E8 ON "user" (user_details_id_id)');
        $this->addSql('CREATE TABLE user_details (id INT NOT NULL, name VARCHAR(255) NOT NULL, surname VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE offert ADD CONSTRAINT FK_44229184CF8D1CF FOREIGN KEY (event_firm_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE "user" ADD CONSTRAINT FK_8D93D64912595E8 FOREIGN KEY (user_details_id_id) REFERENCES user_details (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE offert DROP CONSTRAINT FK_44229184CF8D1CF');
        $this->addSql('ALTER TABLE "user" DROP CONSTRAINT FK_8D93D64912595E8');
        $this->addSql('DROP SEQUENCE offert_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE "user_id_seq" CASCADE');
        $this->addSql('DROP SEQUENCE user_details_id_seq CASCADE');
        $this->addSql('DROP TABLE offert');
        $this->addSql('DROP TABLE "user"');
        $this->addSql('DROP TABLE user_details');
    }
}

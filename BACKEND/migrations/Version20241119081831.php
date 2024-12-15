<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241119081831 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bon_plan_categorie (bon_plan_id INT NOT NULL, categorie_id INT NOT NULL, INDEX IDX_DBA906202E81A751 (bon_plan_id), INDEX IDX_DBA90620BCF5E72D (categorie_id), PRIMARY KEY(bon_plan_id, categorie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bon_plan_categorie ADD CONSTRAINT FK_DBA906202E81A751 FOREIGN KEY (bon_plan_id) REFERENCES bon_plan (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bon_plan_categorie ADD CONSTRAINT FK_DBA90620BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bon_plan_categorie DROP FOREIGN KEY FK_DBA906202E81A751');
        $this->addSql('ALTER TABLE bon_plan_categorie DROP FOREIGN KEY FK_DBA90620BCF5E72D');
        $this->addSql('DROP TABLE bon_plan_categorie');
    }
}

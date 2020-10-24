<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201024115658 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE exam_commandes (id INT AUTO_INCREMENT NOT NULL, panier_id INT NOT NULL, examen_id INT NOT NULL, created_at DATETIME DEFAULT NULL, recieve_at DATETIME DEFAULT NULL, send_at DATETIME DEFAULT NULL, promise_at DATETIME DEFAULT NULL, finish_at DATETIME DEFAULT NULL, call_at DATETIME DEFAULT NULL, reduction DOUBLE PRECISION DEFAULT NULL, quantite INT DEFAULT NULL, statut DOUBLE PRECISION NOT NULL, send_motif VARCHAR(255) DEFAULT NULL, INDEX IDX_8A472D75F77D927C (panier_id), INDEX IDX_8A472D755C8659A (examen_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE exam_factures (id INT AUTO_INCREMENT NOT NULL, panier_id INT NOT NULL, auteur_id INT NOT NULL, montant DOUBLE PRECISION NOT NULL, montant_verser DOUBLE PRECISION NOT NULL, montant_restant DOUBLE PRECISION DEFAULT NULL, echance DATE DEFAULT NULL, reduction DOUBLE PRECISION DEFAULT NULL, INDEX IDX_45231638F77D927C (panier_id), INDEX IDX_4523163860BB6FE6 (auteur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE exam_matricules (id INT AUTO_INCREMENT NOT NULL, panier_id INT NOT NULL, service_id INT NOT NULL, matricule VARCHAR(255) NOT NULL, montant DOUBLE PRECISION NOT NULL, statut INT DEFAULT NULL, renvois INT DEFAULT NULL, eligible INT DEFAULT NULL, nombre_resulat INT DEFAULT NULL, INDEX IDX_F0ADD8EDF77D927C (panier_id), INDEX IDX_F0ADD8EDED5CA9E6 (service_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE exam_paniers (id INT AUTO_INCREMENT NOT NULL, patient_id INT NOT NULL, matricule VARCHAR(255) NOT NULL, montant DOUBLE PRECISION NOT NULL, quote_part DOUBLE PRECISION DEFAULT NULL, redux_clinique DOUBLE PRECISION DEFAULT NULL, INDEX IDX_453FC95E6B899279 (patient_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE exam_patients (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE exam_service (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE examens (id INT AUTO_INCREMENT NOT NULL, service_id INT NOT NULL, nom VARCHAR(255) NOT NULL, INDEX IDX_B2E32DD7ED5CA9E6 (service_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE medicaments (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateurs (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_497B315E6C6E55B5 (nom), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE exam_commandes ADD CONSTRAINT FK_8A472D75F77D927C FOREIGN KEY (panier_id) REFERENCES exam_paniers (id)');
        $this->addSql('ALTER TABLE exam_commandes ADD CONSTRAINT FK_8A472D755C8659A FOREIGN KEY (examen_id) REFERENCES examens (id)');
        $this->addSql('ALTER TABLE exam_factures ADD CONSTRAINT FK_45231638F77D927C FOREIGN KEY (panier_id) REFERENCES exam_paniers (id)');
        $this->addSql('ALTER TABLE exam_factures ADD CONSTRAINT FK_4523163860BB6FE6 FOREIGN KEY (auteur_id) REFERENCES utilisateurs (id)');
        $this->addSql('ALTER TABLE exam_matricules ADD CONSTRAINT FK_F0ADD8EDF77D927C FOREIGN KEY (panier_id) REFERENCES exam_paniers (id)');
        $this->addSql('ALTER TABLE exam_matricules ADD CONSTRAINT FK_F0ADD8EDED5CA9E6 FOREIGN KEY (service_id) REFERENCES exam_service (id)');
        $this->addSql('ALTER TABLE exam_paniers ADD CONSTRAINT FK_453FC95E6B899279 FOREIGN KEY (patient_id) REFERENCES exam_patients (id)');
        $this->addSql('ALTER TABLE examens ADD CONSTRAINT FK_B2E32DD7ED5CA9E6 FOREIGN KEY (service_id) REFERENCES exam_service (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE exam_commandes DROP FOREIGN KEY FK_8A472D75F77D927C');
        $this->addSql('ALTER TABLE exam_factures DROP FOREIGN KEY FK_45231638F77D927C');
        $this->addSql('ALTER TABLE exam_matricules DROP FOREIGN KEY FK_F0ADD8EDF77D927C');
        $this->addSql('ALTER TABLE exam_paniers DROP FOREIGN KEY FK_453FC95E6B899279');
        $this->addSql('ALTER TABLE exam_matricules DROP FOREIGN KEY FK_F0ADD8EDED5CA9E6');
        $this->addSql('ALTER TABLE examens DROP FOREIGN KEY FK_B2E32DD7ED5CA9E6');
        $this->addSql('ALTER TABLE exam_commandes DROP FOREIGN KEY FK_8A472D755C8659A');
        $this->addSql('ALTER TABLE exam_factures DROP FOREIGN KEY FK_4523163860BB6FE6');
        $this->addSql('DROP TABLE exam_commandes');
        $this->addSql('DROP TABLE exam_factures');
        $this->addSql('DROP TABLE exam_matricules');
        $this->addSql('DROP TABLE exam_paniers');
        $this->addSql('DROP TABLE exam_patients');
        $this->addSql('DROP TABLE exam_service');
        $this->addSql('DROP TABLE examens');
        $this->addSql('DROP TABLE medicaments');
        $this->addSql('DROP TABLE utilisateurs');
    }
}

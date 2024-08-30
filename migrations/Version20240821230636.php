<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240821230636 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chambre ADD numéro_chambre INT NOT NULL, ADD type_chambre INT NOT NULL, ADD tarif_chambre INT NOT NULL, ADD id_hotel_chambre INT NOT NULL, ADD réservation_id INT NOT NULL');
        $this->addSql('ALTER TABLE hotel ADD nom_hotel VARCHAR(255) NOT NULL, ADD adresse_hotel VARCHAR(255) NOT NULL, ADD nombre_etoiles_hotel INT NOT NULL, ADD téléphone_hotel INT NOT NULL');
        $this->addSql('ALTER TABLE paiement ADD montant_paiement INT NOT NULL, ADD date_paiement INT NOT NULL, ADD moyen_paiement INT NOT NULL, ADD id_réservation_paiement INT NOT NULL, ADD réservation_id INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chambre DROP numéro_chambre, DROP type_chambre, DROP tarif_chambre, DROP id_hotel_chambre, DROP réservation_id');
        $this->addSql('ALTER TABLE hotel DROP nom_hotel, DROP adresse_hotel, DROP nombre_etoiles_hotel, DROP téléphone_hotel');
        $this->addSql('ALTER TABLE paiement DROP montant_paiement, DROP date_paiement, DROP moyen_paiement, DROP id_réservation_paiement, DROP réservation_id');
    }
}

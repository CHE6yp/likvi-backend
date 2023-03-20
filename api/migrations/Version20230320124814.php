<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230320124814 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE offer_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE offer (id INT NOT NULL, uuid VARCHAR(255) NOT NULL, inner_id VARCHAR(255) NOT NULL, address VARCHAR(255) NOT NULL, body_type VARCHAR(255) NOT NULL, chat_only BOOLEAN NOT NULL, city VARCHAR(255) NOT NULL, color VARCHAR(255) NOT NULL, equipment VARCHAR(255) NOT NULL, condition VARCHAR(255) NOT NULL, configuration VARCHAR(255) NOT NULL, contact_person VARCHAR(255) NOT NULL, custom VARCHAR(255) NOT NULL, damaged BOOLEAN NOT NULL, description VARCHAR(255) NOT NULL, displacement VARCHAR(255) NOT NULL, districts JSON NOT NULL, doors_count VARCHAR(255) NOT NULL, drive_type VARCHAR(255) NOT NULL, engine_type VARCHAR(255) NOT NULL, exchange BOOLEAN NOT NULL, generation VARCHAR(255) NOT NULL, horse_power VARCHAR(255) NOT NULL, images_list JSON NOT NULL, in_stock BOOLEAN NOT NULL, is_redirect_phone BOOLEAN NOT NULL, mileage VARCHAR(255) NOT NULL, mark VARCHAR(255) NOT NULL, underground VARCHAR(255) NOT NULL, model VARCHAR(255) NOT NULL, no_accidents BOOLEAN NOT NULL, options JSON NOT NULL, owners_count VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, prep_body_type VARCHAR(255) NOT NULL, prep_color VARCHAR(255) NOT NULL, prep_condition VARCHAR(255) NOT NULL, prep_custom VARCHAR(255) NOT NULL, prep_drive_type VARCHAR(255) NOT NULL, prep_engine_type VARCHAR(255) NOT NULL, prep_phone VARCHAR(255) NOT NULL, prep_pts VARCHAR(255) NOT NULL, prep_seller_type VARCHAR(255) NOT NULL, prep_transmission VARCHAR(255) NOT NULL, prep_wheel VARCHAR(255) NOT NULL, price VARCHAR(255) NOT NULL, pts VARCHAR(255) NOT NULL, region VARCHAR(255) NOT NULL, section VARCHAR(255) NOT NULL, seller VARCHAR(255) NOT NULL, seller_type VARCHAR(255) NOT NULL, shop BOOLEAN NOT NULL, state_not_beaten BOOLEAN NOT NULL, title VARCHAR(255) NOT NULL, total_views VARCHAR(255) NOT NULL, transmission VARCHAR(255) NOT NULL, url VARCHAR(255) NOT NULL, vin VARCHAR(255) NOT NULL, warranty BOOLEAN NOT NULL, wheel VARCHAR(255) NOT NULL, year VARCHAR(255) NOT NULL, source INT NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_29D6873ED17F50A6 ON offer (uuid)');
        $this->addSql('COMMENT ON COLUMN offer.created_at IS \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE offer_id_seq CASCADE');
        $this->addSql('DROP TABLE offer');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230320192531 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE offer_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE "user_id_seq" INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE offer (id INT,
            uuid UUID NOT NULL,
            inner_id VARCHAR(255) DEFAULT NULL,
            address TEXT DEFAULT NULL,
            body_type VARCHAR(255) DEFAULT NULL,
            chat_only BOOLEAN DEFAULT NULL,
            city VARCHAR(255) DEFAULT NULL,
            color VARCHAR(255) DEFAULT NULL,
            equipment VARCHAR(255) DEFAULT NULL,
            condition VARCHAR(255) DEFAULT NULL,
            configuration VARCHAR(255) DEFAULT NULL,
            contact_person VARCHAR(255) DEFAULT NULL,
            custom VARCHAR(255) DEFAULT NULL,
            damaged BOOLEAN DEFAULT NULL,
            description TEXT DEFAULT NULL,
            displacement VARCHAR(255) DEFAULT NULL,
            districts JSON DEFAULT NULL,
            doors_count VARCHAR(255) DEFAULT NULL,
            drive_type VARCHAR(255) DEFAULT NULL,
            engine_type VARCHAR(255) DEFAULT NULL,
            exchange BOOLEAN DEFAULT NULL,
            generation VARCHAR(255) DEFAULT NULL,
            horse_power VARCHAR(255) DEFAULT NULL,
            images_list JSON DEFAULT NULL,
            in_stock VARCHAR(255) DEFAULT NULL,
            is_redirect_phone BOOLEAN DEFAULT NULL,
            mileage VARCHAR(255) DEFAULT NULL,
            mark VARCHAR(255) DEFAULT NULL,
            underground VARCHAR(255) DEFAULT NULL,
            model VARCHAR(255) DEFAULT NULL,
            no_accidents BOOLEAN DEFAULT NULL,
            options JSON DEFAULT NULL,
            owners_count VARCHAR(255) DEFAULT NULL,
            phone VARCHAR(255) DEFAULT NULL,
            prep_body_type VARCHAR(255) DEFAULT NULL,
            prep_color VARCHAR(255) DEFAULT NULL,
            prep_condition VARCHAR(255) DEFAULT NULL,
            prep_custom VARCHAR(255) DEFAULT NULL,
            prep_drive_type VARCHAR(255) DEFAULT NULL,
            prep_engine_type VARCHAR(255) DEFAULT NULL,
            prep_phone VARCHAR(255) DEFAULT NULL,
            prep_pts VARCHAR(255) DEFAULT NULL,
            prep_seller_type VARCHAR(255) DEFAULT NULL,
            prep_transmission VARCHAR(255) DEFAULT NULL,
            prep_wheel VARCHAR(255) DEFAULT NULL,
            price INT DEFAULT NULL,
            pts VARCHAR(255) DEFAULT NULL,
            region VARCHAR(255) DEFAULT NULL,
            section VARCHAR(255) DEFAULT NULL,
            seller VARCHAR(255) DEFAULT NULL,
            seller_type VARCHAR(255) DEFAULT NULL,
            shop BOOLEAN DEFAULT NULL,
            state_not_beaten BOOLEAN DEFAULT NULL,
            title VARCHAR(255) DEFAULT NULL,
            total_views VARCHAR(255) DEFAULT NULL,
            transmission VARCHAR(255) DEFAULT NULL,
            url TEXT DEFAULT NULL,
            vin VARCHAR(255) DEFAULT NULL,
            warranty BOOLEAN DEFAULT NULL,
            wheel VARCHAR(255) DEFAULT NULL,
            year VARCHAR(255) DEFAULT NULL,
            source INT NOT NULL,
            created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL,
            PRIMARY KEY(uuid))'
        );
        $this->addSql('CREATE UNIQUE INDEX UNIQ_29D6873ED17F50A6 ON offer (uuid)');
        $this->addSql('COMMENT ON COLUMN offer.uuid IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN offer.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE "user" (id INT NOT NULL,
            uuid UUID NOT NULL,
        email VARCHAR(180) NOT NULL,
        password VARCHAR(255) NOT NULL,
        roles JSON NOT NULL,
        PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649D17F50A6 ON "user" (uuid)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON "user" (email)');
        $this->addSql('COMMENT ON COLUMN "user".uuid IS \'(DC2Type:uuid)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE offer_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE "user_id_seq" CASCADE');
        $this->addSql('DROP TABLE offer');
        $this->addSql('DROP TABLE "user"');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230320130205 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE offer ALTER inner_id DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER address DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER body_type DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER chat_only DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER city DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER color DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER equipment DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER condition DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER configuration DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER contact_person DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER custom DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER damaged DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER description DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER displacement DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER districts DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER doors_count DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER drive_type DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER engine_type DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER exchange DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER generation DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER horse_power DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER images_list DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER in_stock DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER is_redirect_phone DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER mileage DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER mark DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER underground DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER model DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER no_accidents DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER options DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER owners_count DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER phone DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER prep_body_type DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER prep_color DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER prep_condition DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER prep_custom DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER prep_drive_type DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER prep_engine_type DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER prep_phone DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER prep_pts DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER prep_seller_type DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER prep_transmission DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER prep_wheel DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER price DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER pts DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER region DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER section DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER seller DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER seller_type DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER shop DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER state_not_beaten DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER title DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER total_views DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER transmission DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER url DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER vin DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER warranty DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER wheel DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER year DROP NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER created_at DROP NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE offer ALTER inner_id SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER address SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER body_type SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER chat_only SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER city SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER color SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER equipment SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER condition SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER configuration SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER contact_person SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER custom SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER damaged SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER description SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER displacement SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER districts SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER doors_count SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER drive_type SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER engine_type SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER exchange SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER generation SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER horse_power SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER images_list SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER in_stock SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER is_redirect_phone SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER mileage SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER mark SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER underground SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER model SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER no_accidents SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER options SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER owners_count SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER phone SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER prep_body_type SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER prep_color SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER prep_condition SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER prep_custom SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER prep_drive_type SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER prep_engine_type SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER prep_phone SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER prep_pts SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER prep_seller_type SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER prep_transmission SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER prep_wheel SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER price SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER pts SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER region SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER section SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER seller SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER seller_type SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER shop SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER state_not_beaten SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER title SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER total_views SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER transmission SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER url SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER vin SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER warranty SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER wheel SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER year SET NOT NULL');
        $this->addSql('ALTER TABLE offer ALTER created_at SET NOT NULL');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210503175218 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, parent_category_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, icon VARCHAR(255) NOT NULL, meta_desc LONGTEXT NOT NULL, description LONGTEXT NOT NULL, icon_title VARCHAR(255) NOT NULL, icon_alt VARCHAR(255) NOT NULL, INDEX IDX_64C19C1796A8F92 (parent_category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE height (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product_component (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, product INT DEFAULT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, image_alt VARCHAR(255) NOT NULL, image_title VARCHAR(255) NOT NULL, meta_desc LONGTEXT NOT NULL, description LONGTEXT NOT NULL, installation_price NUMERIC(10, 2) NOT NULL, delivery_price NUMERIC(10, 2) NOT NULL, brand VARCHAR(255) NOT NULL, reference VARCHAR(255) NOT NULL, discr VARCHAR(255) NOT NULL, length VARCHAR(255) DEFAULT NULL, width VARCHAR(255) DEFAULT NULL, diameter VARCHAR(255) DEFAULT NULL, height VARCHAR(255) DEFAULT NULL, power VARCHAR(255) DEFAULT NULL, capacity VARCHAR(255) DEFAULT NULL, weight VARCHAR(255) DEFAULT NULL, standard VARCHAR(255) DEFAULT NULL, product_cat VARCHAR(255) DEFAULT NULL, product_type VARCHAR(255) DEFAULT NULL, manufacturer_reference VARCHAR(255) DEFAULT NULL, manufacturer_warranty VARCHAR(255) DEFAULT NULL, color VARCHAR(255) DEFAULT NULL, recommended_use VARCHAR(255) DEFAULT NULL, provider_reference VARCHAR(255) DEFAULT NULL, product_category VARCHAR(255) DEFAULT NULL, model VARCHAR(255) DEFAULT NULL, misc VARCHAR(255) DEFAULT NULL, depth VARCHAR(255) DEFAULT NULL, INDEX IDX_275E17DA12469DE2 (category_id), INDEX IDX_275E17DAD34A04AD (product), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE category ADD CONSTRAINT FK_64C19C1796A8F92 FOREIGN KEY (parent_category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE product_component ADD CONSTRAINT FK_275E17DA12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE product_component ADD CONSTRAINT FK_275E17DAD34A04AD FOREIGN KEY (product) REFERENCES product_component (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category DROP FOREIGN KEY FK_64C19C1796A8F92');
        $this->addSql('ALTER TABLE product_component DROP FOREIGN KEY FK_275E17DA12469DE2');
        $this->addSql('ALTER TABLE product_component DROP FOREIGN KEY FK_275E17DAD34A04AD');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE height');
        $this->addSql('DROP TABLE product_component');
    }
}

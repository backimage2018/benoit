<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180403141646 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD3DA5256D');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04ADF77D927C');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F4584665A');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF24584665A');
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C64584665A');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04ADDCD6110');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF2A76ED395');
        $this->addSql('CREATE TABLE ben_Image (id INT AUTO_INCREMENT NOT NULL, product_id INT DEFAULT NULL, lien VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_E818428F4584665A (product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ben_Newsletter (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, deleted DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_57A32394E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ben_Panier (id INT AUTO_INCREMENT NOT NULL, product_id INT DEFAULT NULL, user_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, quantite INT NOT NULL, prixligne DOUBLE PRECISION NOT NULL, INDEX IDX_A232FA604584665A (product_id), INDEX IDX_A232FA60A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ben_Product (id INT AUTO_INCREMENT NOT NULL, image_id INT DEFAULT NULL, panier_id INT DEFAULT NULL, stock_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prix VARCHAR(255) NOT NULL, ancienprix VARCHAR(255) DEFAULT NULL, taille VARCHAR(255) DEFAULT NULL, couleur VARCHAR(255) DEFAULT NULL, collection VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, disponibilite VARCHAR(255) DEFAULT NULL, marque VARCHAR(255) DEFAULT NULL, detail LONGTEXT DEFAULT NULL, categorie VARCHAR(255) NOT NULL, sexe VARCHAR(255) NOT NULL, reduction VARCHAR(10) DEFAULT NULL, new VARCHAR(10) DEFAULT NULL, display VARCHAR(10) DEFAULT NULL, datefinpromo DATETIME DEFAULT NULL, deleted DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_CDCD08323DA5256D (image_id), INDEX IDX_CDCD0832F77D927C (panier_id), UNIQUE INDEX UNIQ_CDCD0832DCD6110 (stock_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ben_Review (id INT AUTO_INCREMENT NOT NULL, product_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, mail VARCHAR(255) NOT NULL, review VARCHAR(255) NOT NULL, note INT NOT NULL, UNIQUE INDEX UNIQ_FFBD7654794381C6 (review), INDEX IDX_FFBD76544584665A (product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ben_Stock (id INT AUTO_INCREMENT NOT NULL, stock_magasin INT DEFAULT 0 NOT NULL, stock_entrepot INT DEFAULT 0 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ben_User (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(64) NOT NULL, email VARCHAR(255) NOT NULL, role LONGTEXT NOT NULL COMMENT \'(DC2Type:simple_array)\', is_active TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_AA3A8BB6F85E0677 (username), UNIQUE INDEX UNIQ_AA3A8BB6E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ben_Image ADD CONSTRAINT FK_E818428F4584665A FOREIGN KEY (product_id) REFERENCES ben_Product (id)');
        $this->addSql('ALTER TABLE ben_Panier ADD CONSTRAINT FK_A232FA604584665A FOREIGN KEY (product_id) REFERENCES ben_Product (id)');
        $this->addSql('ALTER TABLE ben_Panier ADD CONSTRAINT FK_A232FA60A76ED395 FOREIGN KEY (user_id) REFERENCES ben_User (id)');
        $this->addSql('ALTER TABLE ben_Product ADD CONSTRAINT FK_CDCD08323DA5256D FOREIGN KEY (image_id) REFERENCES ben_Image (id)');
        $this->addSql('ALTER TABLE ben_Product ADD CONSTRAINT FK_CDCD0832F77D927C FOREIGN KEY (panier_id) REFERENCES ben_Panier (id)');
        $this->addSql('ALTER TABLE ben_Product ADD CONSTRAINT FK_CDCD0832DCD6110 FOREIGN KEY (stock_id) REFERENCES ben_Stock (id)');
        $this->addSql('ALTER TABLE ben_Review ADD CONSTRAINT FK_FFBD76544584665A FOREIGN KEY (product_id) REFERENCES ben_Product (id)');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE newsletter');
        $this->addSql('DROP TABLE panier');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE review');
        $this->addSql('DROP TABLE stock');
        $this->addSql('DROP TABLE user');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE ben_Product DROP FOREIGN KEY FK_CDCD08323DA5256D');
        $this->addSql('ALTER TABLE ben_Product DROP FOREIGN KEY FK_CDCD0832F77D927C');
        $this->addSql('ALTER TABLE ben_Image DROP FOREIGN KEY FK_E818428F4584665A');
        $this->addSql('ALTER TABLE ben_Panier DROP FOREIGN KEY FK_A232FA604584665A');
        $this->addSql('ALTER TABLE ben_Review DROP FOREIGN KEY FK_FFBD76544584665A');
        $this->addSql('ALTER TABLE ben_Product DROP FOREIGN KEY FK_CDCD0832DCD6110');
        $this->addSql('ALTER TABLE ben_Panier DROP FOREIGN KEY FK_A232FA60A76ED395');
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, product_id INT DEFAULT NULL, lien VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, UNIQUE INDEX UNIQ_C53D045F4584665A (product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE newsletter (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, deleted DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_7E8585C8E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE panier (id INT AUTO_INCREMENT NOT NULL, product_id INT DEFAULT NULL, user_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, quantite INT NOT NULL, prixligne DOUBLE PRECISION NOT NULL, INDEX IDX_24CC0DF24584665A (product_id), INDEX IDX_24CC0DF2A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, image_id INT DEFAULT NULL, panier_id INT DEFAULT NULL, stock_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, prix VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, taille VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, couleur VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, collection VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, description LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci, disponibilite VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, marque VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, detail LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci, categorie VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, sexe VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, reduction VARCHAR(10) DEFAULT NULL COLLATE utf8_unicode_ci, new VARCHAR(10) DEFAULT NULL COLLATE utf8_unicode_ci, display VARCHAR(10) DEFAULT NULL COLLATE utf8_unicode_ci, ancienprix VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, datefinpromo DATETIME DEFAULT NULL, deleted DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_D34A04AD3DA5256D (image_id), UNIQUE INDEX UNIQ_D34A04ADDCD6110 (stock_id), INDEX IDX_D34A04ADF77D927C (panier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE review (id INT AUTO_INCREMENT NOT NULL, product_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, mail VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, review VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, note INT NOT NULL, UNIQUE INDEX UNIQ_794381C6794381C6 (review), INDEX IDX_794381C64584665A (product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stock (id INT AUTO_INCREMENT NOT NULL, stock_magasin INT DEFAULT 0 NOT NULL, stock_entrepot INT DEFAULT 0 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, password VARCHAR(64) NOT NULL COLLATE utf8_unicode_ci, email VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, role TEXT NOT NULL COLLATE utf8_unicode_ci COMMENT \'(DC2Type:simple_array)\', is_active TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F4584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF24584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF2A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD3DA5256D FOREIGN KEY (image_id) REFERENCES image (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04ADDCD6110 FOREIGN KEY (stock_id) REFERENCES stock (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04ADF77D927C FOREIGN KEY (panier_id) REFERENCES panier (id)');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C64584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('DROP TABLE ben_Image');
        $this->addSql('DROP TABLE ben_Newsletter');
        $this->addSql('DROP TABLE ben_Panier');
        $this->addSql('DROP TABLE ben_Product');
        $this->addSql('DROP TABLE ben_Review');
        $this->addSql('DROP TABLE ben_Stock');
        $this->addSql('DROP TABLE ben_User');
    }
}

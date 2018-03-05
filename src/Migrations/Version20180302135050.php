<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180302135050 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE image ADD product_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F4584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C53D045F4584665A ON image (product_id)');
        $this->addSql('ALTER TABLE product CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE prix prix VARCHAR(255) NOT NULL, CHANGE categorie categorie VARCHAR(255) NOT NULL, CHANGE sexe sexe VARCHAR(255) NOT NULL, CHANGE ancienprix ancienprix VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F4584665A');
        $this->addSql('DROP INDEX UNIQ_C53D045F4584665A ON image');
        $this->addSql('ALTER TABLE image DROP product_id');
        $this->addSql('ALTER TABLE product CHANGE nom nom VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE prix prix VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE ancienprix ancienprix VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE categorie categorie VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE sexe sexe VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci');
    }
}

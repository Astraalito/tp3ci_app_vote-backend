<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210226134655 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("INSERT INTO `user` (`username`, `password`, `admin`)
            VALUES ('jean.tractopelle', '123456', false)");
        $this->addSql("INSERT INTO `user` (`username`, `password`, `admin`)
            VALUES ('admin', 'admin', true)");
        $this->addSql("INSERT INTO `user` (`username`, `password`, `admin`)
            VALUES ('test', 'test', false)");
        $this->addSql("INSERT INTO `user` (`username`, `password`, `admin`)
            VALUES ('test2', 'test2', false)");

    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}

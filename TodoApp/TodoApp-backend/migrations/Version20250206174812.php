<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250206174812 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE todo ADD author VARCHAR(255) NOT NULL, ADD status INT DEFAULT 1 NOT NULL, CHANGE text description LONGTEXT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE todo DROP author, DROP status, CHANGE description text LONGTEXT NOT NULL');
    }
}

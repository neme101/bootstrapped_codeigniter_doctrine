<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20130815193051 extends AbstractMigration
{
  public function up(Schema $schema)
  {
    $table = $schema->createTable('ci_sessions');
    $table->addColumn('session_id', 'string');
    $table->addColumn('ip_address', 'string');
    $table->addColumn('user_agent', 'string');
    $table->addColumn('last_activity', 'integer', array('unsigned' => true, 'default' => 0, 'length' => 10));
    $table->addColumn('user_data_text', 'text');
    $table->setPrimaryKey(array('session_id'));
    $table->addIndex(array('last_activity'), 'last_activity_idx');
  }

  public function down(Schema $schema)
  {
    $schema->dropTable('ci_sessions');
  }
}
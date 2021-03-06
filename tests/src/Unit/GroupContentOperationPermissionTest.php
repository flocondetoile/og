<?php

namespace Drupal\Tests\og\Unit;

use Drupal\og\GroupContentOperationPermission;
use Drupal\og\OgRoleInterface;
use Drupal\Tests\UnitTestCase;

/**
 * @group og
 * @coversDefaultClass \Drupal\og\GroupContentOperationPermission
 */
class GroupContentOperationPermissionTest extends UnitTestCase {

  /**
   * @param array $values
   *   Associative array of test values, keyed by property name.
   *
   * @covers ::getEntityType
   *
   * @dataProvider groupContentOperationPermissionProvider
   */
  public function testGetEntityType($values) {
    $permission = new GroupContentOperationPermission($values);
    $this->assertEquals($values['entity type'], $permission->getEntityType());
  }

  /**
   * @param array $values
   *   Associative array of test values, keyed by property name.
   *
   * @covers ::setEntityType
   *
   * @dataProvider groupContentOperationPermissionProvider
   */
  public function testSetEntityType(array $values) {
    $permission = new GroupContentOperationPermission();
    $permission->setEntityType($values['entity type']);
    $this->assertEquals($values['entity type'], $permission->get('entity type'));
  }

  /**
   * @param array $values
   *   Associative array of test values, keyed by property name.
   *
   * @covers ::getBundle
   *
   * @dataProvider groupContentOperationPermissionProvider
   */
  public function testGetBundle(array $values) {
    $permission = new GroupContentOperationPermission($values);
    $this->assertEquals($values['bundle'], $permission->getBundle());
  }

  /**
   * @param array $values
   *   Associative array of test values, keyed by property name.
   *
   * @covers ::setBundle
   *
   * @dataProvider groupContentOperationPermissionProvider
   */
  public function testSetBundle(array $values) {
    $permission = new GroupContentOperationPermission();
    $permission->setBundle($values['bundle']);
    $this->assertEquals($values['bundle'], $permission->get('bundle'));
  }

  /**
   * @param array $values
   *   Associative array of test values, keyed by property name.
   *
   * @covers ::getOperation
   *
   * @dataProvider groupContentOperationPermissionProvider
   */
  public function testGetOperation(array $values) {
    $permission = new GroupContentOperationPermission($values);
    $this->assertEquals($values['operation'], $permission->getOperation());
  }

  /**
   * @param array $values
   *   Associative array of test values, keyed by property name.
   *
   * @covers ::setOperation
   *
   * @dataProvider groupContentOperationPermissionProvider
   */
  public function testSetOperation(array $values) {
    $permission = new GroupContentOperationPermission();
    $permission->setOperation($values['operation']);
    $this->assertEquals($values['operation'], $permission->get('operation'));
  }

  /**
   * @param array $values
   *   Associative array of test values, keyed by property name.
   *
   * @covers ::getOwner
   *
   * @dataProvider groupContentOperationPermissionProvider
   */
  public function testGetOwnership(array $values) {
    $permission = new GroupContentOperationPermission($values);
    $this->assertEquals($values['owner'], $permission->getOwner());
  }

  /**
   * @param array $values
   *   Associative array of test values, keyed by property name.
   *
   * @covers ::setOwner
   *
   * @dataProvider groupContentOperationPermissionProvider
   */
  public function testSetOwnership(array $values) {
    $permission = new GroupContentOperationPermission();
    $permission->setOwner($values['owner']);
    $this->assertEquals($values['owner'], $permission->get('owner'));
  }

  /**
   * @param array $values
   *   Associative array of test values, keyed by property name.
   *
   * @covers ::get
   *
   * @dataProvider groupContentOperationPermissionProvider
   */
  public function testGet(array $values) {
    $permission = new GroupContentOperationPermission($values);
    foreach ($values as $property => $value) {
      $this->assertEquals($value, $permission->get($property));
    }
  }

  /**
   * @param array $values
   *   Associative array of test values, keyed by property name.
   *
   * @covers ::set
   *
   * @dataProvider groupContentOperationPermissionProvider
   */
  public function testSet(array $values) {
    $permission = new GroupContentOperationPermission();
    foreach ($values as $property => $value) {
      $permission->set($property, $value);
      $this->assertEquals($value, $permission->get($property));
    }
  }

  /**
   * @param array $values
   *   Associative array of test values, keyed by property name.
   *
   * @covers ::getName
   *
   * @dataProvider groupContentOperationPermissionProvider
   */
  public function testGetName(array $values) {
    $permission = new GroupContentOperationPermission($values);
    $this->assertEquals($values['name'], $permission->getName());
  }

  /**
   * @param array $values
   *   Associative array of test values, keyed by property name.
   *
   * @covers ::setName
   *
   * @dataProvider groupContentOperationPermissionProvider
   */
  public function testSetName(array $values) {
    $permission = new GroupContentOperationPermission();
    $permission->setName($values['name']);
    $this->assertEquals($values['name'], $permission->get('name'));
  }

  /**
   * @param array $values
   *   Associative array of test values, keyed by property name.
   *
   * @covers ::getTitle
   *
   * @dataProvider groupContentOperationPermissionProvider
   */
  public function testGetTitle(array $values) {
    $permission = new GroupContentOperationPermission($values);
    $this->assertEquals($values['title'], $permission->getTitle());
  }

  /**
   * @param array $values
   *   Associative array of test values, keyed by property name.
   *
   * @covers ::setTitle
   *
   * @dataProvider groupContentOperationPermissionProvider
   */
  public function testSetTitle(array $values) {
    $permission = new GroupContentOperationPermission();
    $permission->setTitle($values['title']);
    $this->assertEquals($values['title'], $permission->get('title'));
  }

  /**
   * @param array $values
   *   Associative array of test values, keyed by property name.
   *
   * @covers ::getDescription
   *
   * @dataProvider groupContentOperationPermissionProvider
   */
  public function testGetDescription(array $values) {
    $permission = new GroupContentOperationPermission($values);
    $this->assertEquals($values['description'], $permission->getDescription());
  }

  /**
   * @param array $values
   *   Associative array of test values, keyed by property name.
   *
   * @covers ::setDescription
   *
   * @dataProvider groupContentOperationPermissionProvider
   */
  public function testSetDescription(array $values) {
    $permission = new GroupContentOperationPermission();
    $permission->setDescription($values['description']);
    $this->assertEquals($values['description'], $permission->get('description'));
  }

  /**
   * @param array $values
   *   Associative array of test values, keyed by property name.
   *
   * @covers ::getDefaultRoles
   *
   * @dataProvider groupContentOperationPermissionProvider
   */
  public function testGetDefaultRoles(array $values) {
    $permission = new GroupContentOperationPermission($values);
    $this->assertEquals($values['default roles'], $permission->getDefaultRoles());
  }

  /**
   * @param array $values
   *   Associative array of test values, keyed by property name.
   *
   * @covers ::setDefaultRoles
   *
   * @dataProvider groupContentOperationPermissionProvider
   */
  public function testSetDefaultRoles(array $values) {
    $permission = new GroupContentOperationPermission();
    $permission->setDefaultRoles($values['default roles']);
    $this->assertEquals($values['default roles'], $permission->get('default roles'));
  }

  /**
   * @param array $values
   *   Associative array of test values, keyed by property name.
   *
   * @covers ::getRestrictAccess
   *
   * @dataProvider groupContentOperationPermissionProvider
   */
  public function testGetRestrictAccess(array $values) {
    $permission = new GroupContentOperationPermission($values);
    $this->assertEquals($values['restrict access'], $permission->getRestrictAccess());
  }

  /**
   * @param array $values
   *   Associative array of test values, keyed by property name.
   *
   * @covers ::setRestrictAccess
   *
   * @dataProvider groupContentOperationPermissionProvider
   */
  public function testSetRestrictAccess(array $values) {
    $permission = new GroupContentOperationPermission();
    $permission->setRestrictAccess($values['restrict access']);
    $this->assertEquals($values['restrict access'], $permission->get('restrict access'));
  }

  /**
   * @covers ::get
   *
   * @expectedException \InvalidArgumentException
   */
  public function testGetInvalidProperty() {
    $permission = new GroupContentOperationPermission();
    $permission->get('invalid property');
  }

  /**
   * @covers ::set
   *
   * @expectedException \InvalidArgumentException
   */
  public function testSetInvalidProperty() {
    $permission = new GroupContentOperationPermission();
    $permission->set('invalid property', 'a value');
  }

  /**
   * @covers ::set
   *
   * @expectedException \InvalidArgumentException
   */
  public function testSetInvalidRestrictAccessValue() {
    $permission = new GroupContentOperationPermission();
    $permission->set('restrict access', 'invalid value');
  }

  /**
   * @covers ::set
   *
   * @expectedException \InvalidArgumentException
   */
  public function testSetInvalidOwnershipValue() {
    $permission = new GroupContentOperationPermission();
    $permission->set('owner', 'invalid value');
  }

  /**
   * @return array
   *   An array of test data, each data set consisting of an associative array
   *   of permission values, keyed by property name.
   */
  public function groupContentOperationPermissionProvider() {
    return [
      [
        [
          'name' => 'edit own article content',
          'title' => $this->t('Article: Edit own content'),
          'description' => $this->t('Allows to update own article content'),
          'default roles' => [OgRoleInterface::ADMINISTRATOR],
          'restrict access' => FALSE,
          'entity type' => 'node',
          'bundle' => 'article',
          'operation' => 'update',
          'owner' => TRUE,
        ],
      ],
    ];
  }

  /**
   * Mocked string translation method.
   *
   * @param string $string
   *   The string to be translated.
   *
   * @return string
   *   The same string. For this test it is not important whether the string is
   *   correctly translated or not.
   */
  protected function t($string) {
    return $string;
  }

}

<?php
require_once dirname(__DIR__) . '/models/ModuleModel.php';
class Permission extends ModuleModel { public function all():array{return $this->fetchAll('SELECT * FROM permissions ORDER BY name');} public function forRole(string $role):array{return $this->fetchAll('SELECT p.* FROM permissions p JOIN role_permissions rp ON rp.permission_id=p.id WHERE rp.role=? ORDER BY p.name',[$role]);} }

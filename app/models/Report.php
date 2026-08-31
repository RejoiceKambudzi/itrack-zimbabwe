<?php
require_once dirname(__DIR__) . '/models/ModuleModel.php';
class Report extends ModuleModel {
    public function all(): array { return $this->fetchAll("SELECT r.*, u.name AS generated_by_name FROM reports r LEFT JOIN users u ON u.id=r.generated_by ORDER BY r.id DESC"); }
    public function create(array $data): string { $this->execute('INSERT INTO reports (report_name, report_type, filters, generated_by) VALUES (?, ?, ?, ?)', [trim($data['report_name']??''), trim($data['report_type']??'summary'), json_encode($data['filters']??[]), (int)($data['generated_by']??0) ?: null]); return $this->lastInsertId(); }
}

# Entwicklungsumgebung

Projektname: TaskMaster – PHP Taskmanager

## Technologien

- Programmiersprache: PHP 8.3
- IDE: IntelliJ IDEA
- Versionsverwaltung: Git
- Remote Repository: GitHub
- CI/CD: GitHub Actions
- Testframework: PHPUnit
- Vorgehensmodell: V-Modell nach Softwareentwicklungsplan

## Team

PTM 1 = Selin --> ANF-01 Aufgabe hinzufügen (src/Task.php, tests/TaskTest.php)
PTM 2 = Lejla --> ANF-02 Aufgaben anzeigen (src/TaskRepository.php, tests/TaskRepositoryTest.php)
PTM 3 = Zümra --> ANF-03 Aufgabe löschen, ANF-04 Aufgabe erledigt markieren (src/TaskService.php, tests/TaskServiceTest.php)

## Git-Workflow

- main enthält die stabile Version.
- develop enthält den aktuellen Entwicklungsstand.
- Jede Person arbeitet in einem eigenen Feature-Branch mit ANF-ID.
- Commits enthalten immer die passende Anforderungs-ID.
- Pull Requests werden in develop gemerged.
- Danach wird develop in main übernommen.
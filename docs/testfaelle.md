# Testfälle

| Test-ID | Anforderung | Person | Beschreibung | Eingabe | Erwartetes Ergebnis | Ergebnis |
|---|---|---|---|---|---|---|
| TF-ANF-01-01 | ANF-01 | Selin | Aufgabe erstellen | "Mathe lernen" | Aufgabe wird erstellt und ist offen | Bestanden |
| TF-ANF-01-02 | ANF-01 | Selin | Leerer Titel | "" | Exception wird ausgelöst | Bestanden |
| TF-ANF-02-01 | ANF-02 | Lejla | Aufgabe speichern und anzeigen | "Git üben" | Aufgabe erscheint in Liste | Bestanden |
| TF-ANF-02-02 | ANF-02 | Lejla | Aufgabe per Index finden | Index 0 | Richtige Aufgabe wird zurückgegeben | Bestanden |
| TF-ANF-03-01 | ANF-03 | Zümra | Aufgabe löschen | Index 0 | Aufgabe wird entfernt | Bestanden |
| TF-ANF-04-01 | ANF-04 | Zümra | Aufgabe erledigt markieren | Index 0 | Aufgabe hat Status erledigt | Bestanden |
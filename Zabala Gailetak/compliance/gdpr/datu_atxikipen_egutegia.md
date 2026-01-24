# Datu Atxikipen Egutegia

| Datu Kategoria | Oinarri Juridikoa | Atxikipen Epea | Ezabatze Prozedura |
|----------------|-------------------|----------------|---------------------|
| **Langileen Datuak (Aktiboak)** | Lan kontratua | Kontratuaren iraupena + 4 urte | Auto-delete script |
| **Langileen Datuak (Ex-langileak)** | Lege-betebeharra | 4 urte (Lan Legea + Fiskalitatea) | Manual review + delete |
| **Nominas** | Lege-betebeharra | 4 urte (fiskal) | Encrypted archiving |
| **Kontratazio Prozesuak (Hautatuak)** | Kontratuaren betetzea | Kontratua + 4 urte | Delete after retention |
| **Kontratazio Prozesuak (EZ hautatuak)** | Baimena | 1 urte | Auto-delete |
| **Baja Medikal Datuak** | Lege-betebeharra | 5 urte (Osasunbidea) | Secure delete |
| **Audit Logs** | Lege-betebeharra (ENS) | 2 urte | Archived to cold storage |
| **Backup-ak** | Segurtasuna | 90 egun | Overwrite |
| **Email (Mailing Marketin)** | Baimena | Consent withdrawal + 30 days | Unsubscribe = immediate |

## Ezabatze Prozedura

### Ezabatze Automatizatua
```sql
-- Hautagaiak ez hautatuak (>1 urte)
DELETE FROM hautagaiak
WHERE egoera = 'EZ_HAUTATUA'
  AND data < NOW() - INTERVAL '1 year';

-- Backup zaharkituak
DELETE FROM backup_records
WHERE backup_data < NOW() - INTERVAL '90 days';
```

### Ezabatze Manualak
- Baja medikal datuak: HR Manager review
- Lan kontratuak: Lege sailaren onespena

## Egiaztapen Auditoria
- Hilero: Automated deletion reports
- Hiruhilekoz: Manual review of retention compliance

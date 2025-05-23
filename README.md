# 📬 Piattaforma di Integrazione con SEND

Benvenuto nel modulo di integrazione con **SEND**, il sistema centralizzato per la gestione delle notifiche digitali. Questa piattaforma è stata progettata per facilitare l'interazione con SEND, consentendo l’invio, il monitoraggio e la consultazione delle notifiche attraverso un'interfaccia unificata e sicura.

## 🚀 Funzionalità Principali

### 🔔 Invio Notifiche
La piattaforma consente di inviare notifiche tramite il servizio SEND in modo semplice e tracciabile. Ogni invio è associato a un identificativo univoco che ne consente il monitoraggio e la gestione.

### 📊 Consultazione Stato di Invio
È possibile verificare in tempo reale lo stato di ogni notifica inviata:
- Notifica accettata
- In lavorazione
- Consegnata
- Non consegnata / Errore

### 🧾 Riepilogo Notifiche
Grazie a un’interfaccia dedicata è possibile accedere a un riepilogo completo delle notifiche inviate, con filtri avanzati per data, stato, destinatario e altri parametri utili.

## 🛠️ Requisiti

- PHP >= 8.0
- Estensioni: curl, json
- Connessione a internet per comunicare con i servizi SEND

## ⚙️ Configurazione

1. Clonare il progetto:
   ```bash
   git clone git@github.com:Unidos-SRL/SEND.git
   ```

2. Eseguire eventuali migrazioni e setup:
   ```bash
   php artisan migrate
   ```

## 📚 Documentazione

Per maggiori dettagli sull’integrazione con SEND, consultare la [documentazione ufficiale di SEND](https://www.send.gov.it/).

## 📞 Supporto

Per supporto tecnico o segnalazione bug, apri una issue su GitHub o contatta il team IT all’indirizzo: `assistenza@unidos.it`.

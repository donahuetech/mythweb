<?php
/***                                                                        ***\
    languages/German.php

    Translation hash for German.
\***                                                                        ***/

// Set locale to German
setlocale(LC_ALL, 'de_DE');

// Define the language lookup hash ** Do not touch the next line
$L = array(
// Add your translations below here.
// Warning, any custom comments will be lost during translation updates.
//
// Shared Terms
    '$1 min'                                => '$1 Min.',
    '$1 mins'                               => '$1 Min.',
    '$1 programs, using $2 ($3) out of $4.' => '$1 Aufnahmen, belegen $2 ($3) von $4.',
    '$1 to $2'                              => '$1 bis $2',
    'Airtime'                               => 'Sendezeit',
    'All recordings'                        => 'Alle Aufnahmen',
    'Auto-expire recordings'                => 'Aufnahmen autom. löschen',
    'Backend Status'                        => 'Backend Status',
    'Category'                              => 'Kategorie',
    'Check for duplicates in'               => 'Nach Duplikate suchen in',
    'Current recordings'                    => 'Aktuelle Aufnahmen',
    'Date'                                  => 'Datum',
    'Description'                           => 'Beschreibung',
    'Duplicate Check method'                => 'Testmethode für Duplikate',
    'End Late'                              => 'Verspätetes Aufnahmeende',
    'Go'                                    => 'Los',
    'Hour'                                  => 'Stunde',
    'Jump to'                               => 'Gehe zu',
    'Listings'                              => 'TV Programm',
    'No. of recordings to keep'             => 'Wieviele Aufnahmen behalten',
    'None'                                  => 'Keine',
    'Notes'                                 => 'Hinweis',
    'Original Airdate'                      => 'Erstausstrahlung',
    'Previous recordings'                   => 'Alte Aufnahmen',
    'Rating'                                => 'Wertung',
    'Record new and expire old'             => 'Nur neue Folgen aufnehmen',
    'Recorded Programs'                     => 'Aufnahmen',
    'Recording Group'                       => 'Aufnahmegruppe',
    'Recording Options'                     => 'Aufnahmeoptionen',
    'Recording Priority'                    => 'Aufnahmepriorität',
    'Recording Profile'                     => 'Aufnahmeprofil',
    'Rerun'                                 => 'Wiederholung',
    'Schedule'                              => 'Modus',
    'Scheduled Recordings'                  => 'Aufnahmeplan',
    'Search'                                => 'Suche',
    'Search Results'                        => 'Suchergebnisse',
    'Start Early'                           => 'Vorzeitiger Aufnahmestart',
    'Subtitle'                              => 'Untertitel',
    'Subtitle and Description'              => 'Untertitel und Beschreibung',
    'Title'                                 => 'Titel',
    'Unknown'                               => 'Unbekannt',
    'Update Recording Settings'             => 'Aufnahmeoptionen speichern',
    'Yes'                                   => 'Ja',
    'airdate'                               => 'Sendezeit',
    'channum'                               => 'Sender',
    'description'                           => 'Beschreibung',
    'generic_date'                          => '%e.%m.%Y',
    'generic_time'                          => '%H:%M',
    'length'                                => 'Dauer',
    'recgroup'                              => 'Aufnahmegruppe',
    'rectype-long: always'                  => 'Jede Ausstrahlung aufnehmen',
    'rectype-long: channel'                 => 'Jede Ausstrahlung auf diesem Sender aufnehmen',
    'rectype-long: daily'                   => 'Täglich aufnehmen',
    'rectype-long: findone'                 => 'Finde eine Ausstrahlung',
    'rectype-long: once'                    => 'Einmalige Aufnahme',
    'rectype-long: weekly'                  => 'Wöchentlich aufnehmen',
    'rectype: always'                       => 'Immer',
    'rectype: channel'                      => 'Sender',
    'rectype: daily'                        => 'Täglich',
    'rectype: dontrec'                      => 'Blockiert',
    'rectype: findone'                      => 'Eine Ausstrahlung',
    'rectype: once'                         => 'Einmalig',
    'rectype: weekly'                       => 'Wöchentlich',
    'subtitle'                              => 'Untertitel',
    'title'                                 => 'Titel',
// includes/programs.php
    'recstatus: cancelled'         => 'Abgebrochen',
    'recstatus: conflict'          => 'Konflikt',
    'recstatus: currentrecording'  => '',
    'recstatus: deleted'           => 'Gelöscht',
    'recstatus: earliershowing'    => 'frühere Ausstrahlung',
    'recstatus: force_record'      => '',
    'recstatus: latershowing'      => 'spätere Ausstrahlung',
    'recstatus: lowdiskspace'      => 'kein Speicherplatz',
    'recstatus: manualoverride'    => 'manuell blockiert',
    'recstatus: overlap'           => '',
    'recstatus: previousrecording' => '',
    'recstatus: recorded'          => 'Aufgenommen',
    'recstatus: recording'         => 'Aufnahme läuft',
    'recstatus: repeat'            => 'Wiederholung',
    'recstatus: stopped'           => 'Gestoppt',
    'recstatus: toomanyrecordings' => 'zu viele Aufnahmen',
    'recstatus: tunerbusy'         => 'TV-Karte belegt',
    'recstatus: unknown'           => 'Unbekannt',
    'recstatus: willrecord'        => 'wird aufgenommen',
// includes/recordings.php
    'Dup Method'                   => 'Methode für Dupl.',
    'Profile'                      => 'Profil',
    'Sub and Desc (Empty matches)' => 'Untertitel & Beschr. (leere Ergebnisse)',
    'Type'                         => 'Typ',
    'rectype: override'            => 'Übersteuれrt',
// includes/utils.php
    '$1 B'   => '',
    '$1 GB'  => '',
    '$1 KB'  => '',
    '$1 MB'  => '',
    '$1 TB'  => '',
    '$1 hr'  => '$1 Std.',
    '$1 hrs' => '$1 Std.',
// patches/For_themes_Default_dir_mythgallery.php
    'No images available' => '',
// themes/.../channel_detail.php
    'Episode' => 'Folge',
    'Length'  => 'Dauer',
    'Show'    => 'Sendung',
    'Time'    => 'Zeit',
// themes/.../program_detail.php
    'Back to the program listing'         => 'Zurück zum TV Programm',
    'Back to the recording schedules'     => 'Zurück zum Aufnahmeplan',
    'Cancel this schedule'                => 'Aufnahme abbrechen',
    'Don\'t record this program'          => 'Diese Sendung nicht aufnehmen',
    'Find other showings of this program' => 'Andere Termine dieser Sendung finden',
    'Google'                              => '',
    'IMDB'                                => '',
    'Only New Episodes'                   => 'Nur neue Folgen',
    'TVTome'                              => '',
    'What else is on at this time?'       => 'Was läuft noch zu dieser Zeit?',
// themes/.../program_listing.php
    'Currently Browsing:  $1' => 'Aktuell: $1',
    'Jump'                    => 'Gehe',
    'Jump To'                 => 'Gehe zu',
// themes/.../recorded_programs.php
    '$1 episode'                                          => '$1 Folge',
    '$1 episodes'                                         => '$1 Folgen',
    '$1 recording'                                        => '$1 Aufnahme',
    '$1 recordings'                                       => '$1 Aufnahmen',
    'Are you sure you want to delete the following show?' => 'Diese Aufnahme sicher löschen?',
    'Delete'                                              => 'Löschen',
    'No'                                                  => 'Nein',
    'Show group'                                          => 'Gruppe zeigen',
    'Show recordings'                                     => 'Aufnahmen zeigen',
    'auto-expire'                                         => 'autom. löschen',
    'file size'                                           => 'Dateigröße',
    'has bookmark'                                        => 'Position gesetzt',
    'has commflag'                                        => 'Werbung markiert',
    'has cutlist'                                         => 'Schnittliste',
    'is editing'                                          => 'wird bearbeitet',
    'preview'                                             => 'Vorschaubild',
// themes/.../recording_profiles.php
    'Profile Groups'     => 'Profilgruppen',
    'Recording profiles' => 'Aufnahmeprofile',
// themes/.../recording_schedules.php
    'Any'     => 'Jeder',
    'profile' => 'Profil',
    'type'    => 'Modus',
// themes/.../schedule_manually.php
    'Channel'      => 'Sender',
    'Length (min)' => 'Dauer (Min.)',
    'Start Date'   => 'Datum',
    'Start Time'   => 'Uhrzeit',
// themes/.../scheduled_recordings.php
    'Activate'      => 'Aktivieren',
    'Commands'      => 'Optionen',
    'Conflicts'     => 'Überschneidungen',
    'Deactivated'   => 'Deaktiviert',
    'Default'       => 'Standard',
    'Display'       => 'Anzeigen',
    'Don\'t Record' => 'Nicht aufnehmen',
    'Duplicates'    => 'Wiederholungen',
    'Forget Old'    => '',
    'Never Record'  => 'Niemals aufnehmen',
    'Record This'   => '',
    'Scheduled'     => 'Geplant',
// themes/.../search.php
    'Category Type'    => 'Kategorietyp',
    'Exact Match'      => 'Exakte Übereinstimmung',
    'No matches found' => 'Keine Übereinstimmungen gefunden',
// themes/.../settings.php
    'Channels'           => 'Sender',
    'Configure'          => 'Konfigurieren',
    'Key Bindings'       => 'Tastenbelegung',
    'MythWeb Settings'   => 'MythWeb Einstellungen',
    'settings: overview' => 'Einstellungen: Übersicht',
// themes/.../settings_channels.php
    'Please be warned that by altering this table without knowing what you are doing, you could seriously disrupt mythtv functionality.' => 'Achtung! Das planlose verändern dieser Tabelle kann die Funktionalität von MythTV nachhaltig beeinträchtigen.',
// themes/.../settings_keys.php
    'Edit keybindings on' => 'Tastaturbelegung ändern  für',
// themes/.../settings_mythweb.php
    'Channel &quot;Jump to&quot;'   => 'Sender &quot;Gehe zu&quot;',
    'Date Formats'                  => 'Datumsformate',
    'Hour Format'                   => 'Zeitformat',
    'Language'                      => 'Sprache',
    'Listing &quot;Jump to&quot;'   => 'Liste &quot;Gehe zu&quot;',
    'Listing Time Key'              => '',
    'MythWeb Theme'                 => 'MythWeb Thema',
    'Reset'                         => 'Zurücksetzen',
    'Save'                          => 'Speichern',
    'Scheduled Popup'               => 'Aufnahmen Popup',
    'Show descriptions on new line' => 'Beschreibungen in neuer Zeile anzeigen',
    'Status Bar'                    => 'Statuszeile',
    'format help'                   => 'Format Hilfe',
// themes/.../theme.php
    'Category Legend'                            => 'Kategorien',
    'Edit MythWeb and some MythTV settings.'     => '',
    'Favorites'                                  => 'Favoriten',
    'Manually Schedule'                          => 'manuelle Aufnahme',
    'Movies'                                     => 'Filme',
    'MythMusic on the web.'                      => '',
    'MythVideo on the web.'                      => '',
    'MythWeb Weather.'                           => '',
    'Recording Schedules'                        => 'Aufnahmemodi',
    'Settings'                                   => 'Einstellungen',
    'TV functions, including recorded programs.' => '',
    'advanced'                                   => 'erweitert',
// themes/.../weather.php
    ' at '               => ' um ',
    'Current Conditions' => 'Aktuelle Bedingungen',
    'Forecast'           => 'Vorhersage',
    'Friday'             => 'Freitag',
    'High'               => 'Höchst',
    'Humidity'           => 'Luftfeuchtigkeit',
    'Last Updated'       => 'zuletzt aktualisiert',
    'Low'                => 'Tiefst',
    'Monday'             => 'Montag',
    'Pressure'           => 'Luftdruck',
    'Radar'              => 'Radar',
    'Saturday'           => 'Samstag',
    'Sunday'             => 'Sonntag',
    'Thursday'           => 'Donnerstag',
    'Today'              => 'Heute',
    'Tomorrow'           => 'Morgen',
    'Tuesday'            => 'Dienstag',
    'UV Extreme'         => 'Extrem',
    'UV High'            => 'Hoch',
    'UV Index'           => 'UV Index',
    'UV Minimal'         => 'Minimal',
    'UV Moderate'        => 'Gemäßigt',
    'Visibility'         => 'Sichtweite',
    'Wednesday'          => 'Mittwoch',
    'Wind'               => 'Windgeschwindigkeit',
    'Wind Chill'         => 'gefühlte Temperatur'
// End of the translation hash ** Do not touch the next line
          );


/*
    Show Categories:
    $Categories is a hash of keys corresponding to the css style used for each
    show category.  Each entry is an array containing the name of that category
    in the language this file defines (it will not be translated separately),
    and a regular expression pattern used to match the category against those
    provided in the listings.
*/
$Categories = array();
$Categories['Action']         = array('Action',             '\\b(?:action|adven)');
$Categories['Adult']          = array('Erwachsene',              '\\b(?:adult|erot)');
$Categories['Animals']        = array('Tiere',              '\\b(?:animal|tiere)');
$Categories['Art_Music']      = array('Kunst/Musik',          '\\b(?:art|dance|musi[ck]|kunst|[ck]ultur|rock)');
$Categories['Business']       = array('Wirtschaft',           '\\b(?:biz|busine)');
$Categories['Children']       = array('Kinder',             '\\b(?:child|kin?d|infan|animation)');
$Categories['Comedy']         = array('Comedy',             '\\b(?:comed|entertain|sitcom)');
$Categories['Crime_Mystery']  = array('Krimi/Mystery',      '\\b(?:[ck]rim|myster)');
$Categories['Documentary']    = array('Dokumentation',        '\\b(?:do[ck])');
$Categories['Drama']          = array('Drama',              '\\b(?:drama)');
$Categories['Educational']    = array('Bildung',            '\\b(?:edu|bildung|interests)');
$Categories['Food']           = array('Essen',              '\\b(?:food|cook|essen|[dt]rink)');
$Categories['Game']           = array('Spiele',             '\\b(?:game|spiele)');
$Categories['Health_Medical'] = array('Gesundheit/Medizin',     '\\b(?:health|medic|gesundheit)');
$Categories['History']        = array('Geschichte',            '\\b(?:hist|geschichte)');
$Categories['Horror']         = array('Horror',             '\\b(?:horror)');
$Categories['HowTo']          = array('HowTo',              '\\b(?:how|home|house|garden)');
$Categories['Misc']           = array('Versch.',               '\\b(?:special|variety|info|collect)');
$Categories['News']           = array('Nachrichten',        '\\b(?:news|nachrichten|current)');
$Categories['Reality']        = array('Reality',            '\\b(?:reality)');
$Categories['Romance']        = array('Romantik',           '\\b(?:romance|lieb)');
$Categories['SciFi_Fantasy']  = array('Science Fiction/Fantasy',      '\\b(?:fantasy|sci\\w*\\W*fi)');
$Categories['Science_Nature'] = array('Wissenschaft/Natur', '\\b(?:science|nature|environment|wissenschaft)');
$Categories['Shopping']       = array('Shopping',           '\\b(?:shop)');
$Categories['Soaps']          = array('Serien',              '\\b(?:soaps)');
$Categories['Spiritual']      = array('Spiritual',          '\\b(?:spirit|relig)');
$Categories['Sports']         = array('Sport',              '\\b(?:sport|deportes|futbol)');
$Categories['Talk']           = array('Talk',               '\\b(?:talk)');
$Categories['Travel']         = array('Reisen',             '\\b(?:travel|reisen|touris)');
$Categories['War']            = array('Krieg',              '\\b(?:war|krieg)');
$Categories['Western']        = array('Western',            '\\b(?:west)');

// These are some other classes that we might want to have show up in the
//   category legend (they don't need regular expressions)
$Categories['Unknown']        = array('Unbekannt');
$Categories['movie']          = array('Filme'  );

?>

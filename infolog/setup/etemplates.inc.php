<?php
// eTemplates for Application 'infolog', generated by etemplate.dump() 2002-09-04 01:02

$templ_data[] = array('name' => 'infolog.linklist_widget','template' => '','lang' => '','group' => '0','version' => '0.9.15.001','data' => 'a:3:{i:0;a:2:{s:2:\"c1\";s:3:\"nmh\";s:2:\"c2\";s:3:\"nmr\";}i:1;a:4:{s:1:\"A\";a:3:{s:4:\"type\";s:5:\"label\";s:4:\"size\";s:1:\"b\";s:4:\"name\";s:3:\"app\";}s:1:\"B\";a:4:{s:4:\"type\";s:5:\"label\";s:4:\"size\";s:1:\"b\";s:7:\"no_lang\";s:1:\"1\";s:4:\"name\";s:5:\"title\";}s:1:\"C\";a:2:{s:4:\"type\";s:5:\"label\";s:5:\"label\";s:6:\"Remark\";}s:1:\"D\";a:4:{s:4:\"type\";s:5:\"label\";s:5:\"label\";s:2:\"Id\";s:7:\"no_lang\";s:1:\"1\";s:4:\"name\";s:2:\"id\";}}i:2;a:4:{s:1:\"A\";a:2:{s:4:\"type\";s:5:\"label\";s:4:\"name\";s:11:\"${row}[app]\";}s:1:\"B\";a:3:{s:4:\"type\";s:5:\"label\";s:7:\"no_lang\";s:1:\"1\";s:4:\"name\";s:13:\"${row}[title]\";}s:1:\"C\";a:3:{s:4:\"type\";s:5:\"label\";s:7:\"no_lang\";s:1:\"1\";s:4:\"name\";s:14:\"${row}[remark]\";}s:1:\"D\";a:4:{s:4:\"type\";s:6:\"button\";s:5:\"label\";s:6:\"Unlink\";s:4:\"name\";s:26:\"unlink[$row_cont[link_id]]\";s:4:\"help\";s:39:\"Remove this link (not the entry itself)\";}}}','size' => '','style' => '',);

$templ_data[] = array('name' => 'infolog.linklist_widget','template' => '','lang' => '','group' => '0','version' => '0.9.15.002','data' => 'a:2:{i:0;a:1:{s:2:\"c1\";s:3:\"nmr\";}i:1;a:4:{s:1:\"A\";a:2:{s:4:\"type\";s:5:\"label\";s:4:\"name\";s:11:\"${row}[app]\";}s:1:\"B\";a:3:{s:4:\"type\";s:5:\"label\";s:7:\"no_lang\";s:1:\"1\";s:4:\"name\";s:13:\"${row}[title]\";}s:1:\"C\";a:3:{s:4:\"type\";s:5:\"label\";s:7:\"no_lang\";s:1:\"1\";s:4:\"name\";s:14:\"${row}[remark]\";}s:1:\"D\";a:4:{s:4:\"type\";s:6:\"button\";s:5:\"label\";s:6:\"Unlink\";s:4:\"name\";s:26:\"unlink[$row_cont[link_id]]\";s:4:\"help\";s:39:\"Remove this link (not the entry itself)\";}}}','size' => '','style' => '',);

$templ_data[] = array('name' => 'infolog.linklist_widget.test','template' => '','lang' => '','group' => '0','version' => '','data' => 'a:2:{i:0;a:0:{}i:1;a:1:{s:1:\"A\";a:2:{s:4:\"type\";s:8:\"linklist\";s:4:\"name\";s:5:\"links\";}}}','size' => '','style' => '',);

$templ_data[] = array('name' => 'infolog.linkto_widget.create','template' => '','lang' => '','group' => '0','version' => '0.9.15.001','data' => 'a:3:{i:0;a:0:{}i:1;a:4:{s:1:\"A\";a:2:{s:4:\"type\";s:5:\"label\";s:4:\"name\";s:3:\"app\";}s:1:\"B\";a:3:{s:4:\"type\";s:6:\"select\";s:4:\"name\";s:2:\"id\";s:4:\"help\";s:28:\"Select an entry to link with\";}s:1:\"C\";a:4:{s:4:\"type\";s:6:\"button\";s:5:\"label\";s:4:\"Link\";s:4:\"name\";s:6:\"create\";s:4:\"help\";s:29:\"click here to create the Link\";}s:1:\"D\";a:4:{s:4:\"type\";s:6:\"button\";s:5:\"label\";s:10:\"New search\";s:4:\"name\";s:3:\"new\";s:4:\"help\";s:36:\"start a new search, cancel this link\";}}i:2;a:4:{s:1:\"A\";a:2:{s:4:\"type\";s:5:\"label\";s:5:\"label\";s:6:\"Remark\";}s:1:\"B\";a:5:{s:4:\"type\";s:4:\"text\";s:4:\"size\";s:5:\"50,50\";s:4:\"span\";s:3:\"all\";s:4:\"name\";s:6:\"remark\";s:4:\"help\";s:25:\"optional note to the Link\";}s:1:\"C\";a:1:{s:4:\"type\";s:5:\"label\";}s:1:\"D\";a:1:{s:4:\"type\";s:5:\"label\";}}}','size' => '','style' => '',);

$templ_data[] = array('name' => 'infolog.linkto_widget.search','template' => '','lang' => '','group' => '0','version' => '0.9.15.001','data' => 'a:2:{i:0;a:0:{}i:1;a:4:{s:1:\"A\";a:4:{s:4:\"type\";s:6:\"select\";s:5:\"label\";s:6:\"Search\";s:4:\"name\";s:3:\"app\";s:4:\"help\";s:26:\"Select an App to search in\";}s:1:\"B\";a:3:{s:4:\"type\";s:4:\"text\";s:4:\"name\";s:5:\"query\";s:4:\"help\";s:23:\"Enter the query pattern\";}s:1:\"C\";a:4:{s:4:\"type\";s:6:\"button\";s:5:\"label\";s:6:\"Search\";s:4:\"name\";s:6:\"search\";s:4:\"help\";s:30:\"click here to start the search\";}s:1:\"D\";a:3:{s:4:\"type\";s:5:\"label\";s:4:\"size\";s:1:\"i\";s:4:\"name\";s:3:\"msg\";}}}','size' => '','style' => '',);

$templ_data[] = array('name' => 'infolog.linkto_widget.test','template' => '','lang' => '','group' => '0','version' => '','data' => 'a:2:{i:0;a:0:{}i:1;a:1:{s:1:\"A\";a:2:{s:4:\"type\";s:6:\"linkto\";s:4:\"name\";s:9:\"test_link\";}}}','size' => '','style' => '',);


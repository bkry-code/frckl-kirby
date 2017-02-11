<?php
// please set your license key here
c::set('license', 'schalalalallaa');

// setup languages -- english by default for now
c::set('languages', [[
  'default' => true,
  'code' => 'en',
  'name' => 'English',
  'locale' => 'en_US',
  'url' => '/'
]]);

// load the shared config from the json file generated with gulp
c::set('sharedconfig', json_decode(file_get_contents(dirname( __FILE__ ) . '/../../shared.json')));

// markdown as a default over kirbytext
c::set('content.file.extension', 'md');
c::set('panel.kirbytext', false);

// activate the classymarkdown plugin
c::set('classymarkdown', true);

// set all self-closing elements xhtml-compatible
// html::$void = ' />';

// debugging mode for development / staging using .env-files
// remove the env-file or add additional configs, e.g.
// .env-staging for different environments and settings
if (file_exists(dirname( __FILE__ ) . '/.env-development')) {
  c::set('debug', true); // this is for kirbys own debug mode
  c::set('debugmode', true); // this is used for including different css/js
  c::set('ssl', true);
} else if (file_exists(dirname( __FILE__ ) . '/.env-staging')) {
  c::set('debug', true);
  c::set('debugmode', false);
  c::set('ssl', false);
} else {
  c::set('debug', false);
  c::set('debugmode', false);
  c::set('ssl', true);
}

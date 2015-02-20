<?php
// please set your license key here
c::set('license', '');

// markdown extra for tables and other stuff
c::set('markdown.extra', true);

// debugging mode for development / staging using .env-files
// remove the env-file or add additional configs, e.g.
// .env-staging for different environments and settings
if (file_exists(dirname( __FILE__ ) . '/.env-development')) {

  c::set('debug', true); // this is for kirbys own debug mode
  c::set('debugmode', true); // this is used for including different css/js

} else if (file_exists(dirname( __FILE__ ) . '/.env-staging')) {

  c::set('debug', true);
  c::set('debugmode', true);

} else {

  c::set('debug', false);
  c::set('debugmode', false);
}

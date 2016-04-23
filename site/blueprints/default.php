<?php if(!defined('KIRBY')) exit ?>

title: Default
pages: true
files: true
fields:
  title:
    label: Pagetitle
    type:  text
  text:
    label: Text
    type: markdown
    header1: h2
    header2: h3
    tools:
      - header1
      - header2
      - unorderedList
      - link

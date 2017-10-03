<?php if(!defined('KIRBY')) exit ?>

title: Rezept
pages: false
files: 
  sortable: true
fields:
  title:
    label: Title
    type:  text
  tags:
    label: Tags
    type: tags
  portionen:
    label: Portionen
    type: text
  bewertung:
      label: Bewertung
      type: select
      default: keine-bewertung
      options:
        keine-bewertung: Keine Bewertung
        1-stern: 1 Stern
        2-stern: 2 Sterne
        3-stern: 3 Sterne
      width: 1/2
  zubereitet:
      label: Zubereitet
      type: checkbox
      text: Wurde es schon zubereitet?
      width: 1/2
  Zutaten:
    label: Zutaten
    type:  textarea
  zubereitung:
  	label: Zubereitung
  	type: textarea
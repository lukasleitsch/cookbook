<?php 
return function($site, $pages, $page) {

  // fetch the basic set of pages
  $rezepte = $page->children()->visible();

  
  // fetch all tags
  $tags = $rezepte->pluck('tags', ',', true);
  $title = $page->title()->html();
  asort($tags, SORT_NATURAL | SORT_FLAG_CASE);


  // add the tag filter
  if($tag = param('tag')) {
    if (param('tag') != 'none'){
      $rezepte = $rezepte->filterBy('tags', $tag, ',');
    } else {
      $rezepte = $rezepte->filterBy('tags', '==', '');
    }
    $title = 'Rezepte mit dem Tag <i>'.$tag.'</i>';
  }


  if($query   = get('q')) {
    $rezepte = $site->search($query, 'title');
  }


  return compact('rezepte', 'tags', 'tag', 'query', 'results', 'title');

};

 ?>
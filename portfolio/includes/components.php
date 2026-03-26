<?php
function render_skills(array $skills): string {
  $html = '<div class="skills">';
  foreach ($skills as $group => $items) {
    $html .= '<div class="skill-group glass-mini">';
    $html .= '<h3>'.htmlspecialchars($group).'</h3><ul class="skill-list">';
    foreach ($items as $s) {
      $html .= '<li class="chip">'.htmlspecialchars($s).'</li>';
    }
    $html .= '</ul></div>';
  }
  return $html.'</div>';
}

function render_projects(array $projects): string {
  $html = '';
  foreach ($projects as $p) {
    $html .= '<article class="card project">';
    $html .= '<div class="project__thumb"><img src="'.htmlspecialchars($p['img']).'" alt="'.htmlspecialchars($p['title']).'"></div>';
    $html .= '<div class="project__body">';
    $html .= '<h3>'.htmlspecialchars($p['title']).'</h3>';
    $html .= '<p>'.htmlspecialchars($p['desc']).'</p>';
    $html .= '<ul class="tags">';
    foreach ($p['tags'] as $t) $html .= '<li class="tag">'.$t.'</li>';
    $html .= '</ul>';
    if (!empty($p['link'])) {
      $html .= '<a class="btn btn-ghost" href="'.htmlspecialchars($p['link']).'" target="_blank" rel="noopener">ดูรายละเอียด</a>';
    }
    $html .= '</div></article>';
  }
  return $html;
}

function render_timeline(array $timeline): string {
  $html = '';
  foreach ($timeline as $t) {
    $html .= '<div class="timeline__item glass-mini">';
    $html .= '<div class="timeline__dot"></div>';
    $html .= '<div class="timeline__content">';
    $html .= '<span class="timeline__when">'.htmlspecialchars($t['when']).'</span>';
    $html .= '<h3>'.htmlspecialchars($t['title']).'</h3>';
    $html .= '<p>'.htmlspecialchars($t['detail']).'</p>';
    $html .= '</div></div>';
  }
  return $html;
}

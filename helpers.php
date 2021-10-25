<?php

function isExternalLink($page, string $url) {
  return !str_starts_with($url, '/') && !str_contains($url, $page->domain);
}

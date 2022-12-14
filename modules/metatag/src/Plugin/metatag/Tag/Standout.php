<?php

namespace Drupal\metatag\Plugin\metatag\Tag;

/**
 * The basic "Standout" meta tag.
 *
 * @MetatagTag(
 *   id = "standout",
 *   label = @Translation("Standout"),
 *   description = @Translation("Highlight standout journalism on the web, especially for breaking news; used as an indicator in <a href=':google_news'>Google News</a>. Warning: Don't abuse it, to be used a maximum of 7 times per calendar week!", arguments = { ":google_news" = "https://support.google.com/news/publisher/bin/answer.py?hl=en&answer=68297" }),
 *   name = "standout",
 *   group = "advanced",
 *   weight = 3,
 *   type = "label",
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 *
 * @deprecated in metatag:8.x-1.22 and is removed from metatag:2.0.0. No replacement is provided.
 *
 * @see https://www.drupal.org/project/metatag/issues/2973351
 */
class Standout extends MetaNameBase {
  // Nothing here yet. Just a placeholder class for a plugin.
}

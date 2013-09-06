{section name=news loop=$NEWS}
  <b>{$NEWS[news].header}</b>
  <blockquote>
     <span>posted {$NEWS[news].time} by <b>{$NEWS[news].author}</b></span>
     {$NEWS[news].content}
  </blockquote>
{/section}
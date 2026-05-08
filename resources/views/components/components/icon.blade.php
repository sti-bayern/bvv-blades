@if($svg)
    {{-- '/<svg\b/' sucht nach <svg (\b bedeutet dass exakt nach diesem Wort geuscht wird (Word Boundary))  --}}
    {{-- und wird ersetzt durch '<svg '.$attributes->toHtml() --}}
    {!! preg_replace('/<svg\b/', '<svg '.$attributes->toHtml(), $svg) !!}   
@else
    <div style="color: red"> Kein Icon gefunden! </div>
@endif

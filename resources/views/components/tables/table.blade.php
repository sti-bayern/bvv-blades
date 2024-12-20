<div class="relative overflow-x-auto">
    <table class="w-full text-left rtl:text-right">
        {{--
            Die Kopf-Zeile wird aus dem Attribut $heads befüllt.
            Dieses muss aus einem eindimensionalen Array mit String-Werten bestehen,
            z.B. ['test1', 'test2']
        --}}
        @if (is_array($heads))
            <x-bvvblades::tables.thead>
                @foreach ($heads as $head)
                    <x-bvvblades::tables.th>
                        {{ $head }}
                    </x-bvvblades::tables.th>
                @endforeach
            </x-bvvblades::tables.thead>
        @endif

        {{--
            Die einzelnen Reihen werden aus dem Attribut $rows (array) befüllt.
            Die Attribute des Array können String-Werte sein.
            Um mehrer Informationen mitzugeben kann das Attribut wiederum ein Array sein.
            Mögliche Werte sind:
            [
                'name' => STRING    // Pflichtfeld
                'link' => STRING    // optional, fügt einen Link-Tag ein
            ]
        --}}
        @if (is_array($rows))
            @foreach ($rows as $row)
                <x-bvvblades::tables.tr>
                    @foreach ($row as $col)
                        <x-bvvblades::tables.td>
                            @if (is_array($col))
                                {{-- Array mit Zusatzinformationen --}}
                                @if (isset($col['name']))
                                    {{-- <pre>{{ print_r($col, true) }}</pre> --}}
                                    @if ($col['link'])
                                        {{-- link-Atrribut gesetzt -> verlinkter Tag --}}
                                        <a href="{{ $col['link'] }}"
                                            class="text-sti-blue-700 border-b border-white hover:border-sti-blue">
                                            {{ $col['name'] }}
                                        </a>
                                    @else
                                        {{ $col['name'] }}
                                    @endif
                                @elseif(is_array($col['buttons']))
                                    <div class="w-auto text-right pr-4 space-x-2">
                                        @foreach ($col['buttons'] as $value)
                                            @if ($value['type'] == 'link')
                                                <x-bvvblades-forms-button
                                                    :link="$value['target']">{{ $value['name'] }}</x-bvvblades-forms-button>
                                            @elseif (in_array($value['type'], ['post', 'delete']))
                                                <form action="{{ $value['target'] }}" method="POST" class="inline-block">
                                                    @method($value['type'])
                                                    @csrf
                                                    <x-bvvblades-forms-button
                                                        type="submit">{{ $value['name'] }}</x-bvvblades-forms-button>
                                                </form>
                                            @endif
                                        @endforeach
                                    </div>
                                @endif
                            @else
                                {{-- einfacher String-Wert --}}
                                {{ $col }}
                            @endif
                        </x-bvvblades::tables.td>
                    @endforeach
                </x-bvvblades::tables.tr>
            @endforeach
        @endif

        {{ $slot }}
    </table>
</div>

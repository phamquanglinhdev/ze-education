{{-- regular object attribute --}}
@php
    $value = data_get($entry, $column['name']);
    $value = is_array($value) ? json_encode($value) : $value;

    $column['escaped'] = $column['escaped'] ?? true;
    $column['limit'] = $column['limit'] ?? 40;
    $column['prefix'] = $column['prefix'] ?? '';
    $column['suffix'] = $column['suffix'] ?? '';
    //$column['text'] = $column['prefix'].Str::limit(, $column['limit'], '[...]').$column['suffix'];
    $column['text'] =$value ?? "";
@endphp

<span>
    @includeWhen(!empty($column['wrapper']), 'crud::columns.inc.wrapper_start')
    @if($column["text"]!="")
        <a class="nav-link" href="{{url($column['text'])}}"><i class="las la-eye"></i>
            {{trans("backpack::crud.view_curriculum")}}
        </a>
    @else
        -
    @endif
    @includeWhen(!empty($column['wrapper']), 'crud::columns.inc.wrapper_end')
</span>

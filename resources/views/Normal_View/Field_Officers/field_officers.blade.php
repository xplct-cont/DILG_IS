@extends('layouts.app')
@section('content')

    <livewire:normal.field-officers.index/>

@endsection
<style scoped>
    .zoom {
        transition: transform .2s;
    }

    .zoom:hover {
        -ms-transform: scale(1.2);
        /* IE 9 */
        -webkit-transform: scale(1.2);
        /* Safari 3-8 */
        transform: scale(1.2);
        text-align: center;
        font-size: 10px;
    }
</style>

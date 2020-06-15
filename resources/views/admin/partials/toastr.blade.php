<script src="{{ asset('/vendor/toastr/toastr.min.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('/vendor/toastr/toastr.min.css') }}">

<script>
    @if(Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        switch(type){
            case 'info':
                toastr.info('{{ Session::get('message') }}','Info');
            break;

            case 'warning':
                toastr.warning('{{ Session::get('message') }}','Warning');
            break;

            case 'success':
                toastr.success('{{ Session::get('message') }}','Done');
            break;

            case 'error':
                toastr.error('{{ Session::get('message') }}','Error');
            break;
        }
    @endif

    {{--  toastr.info('This is toastr test info alert','Info');  --}}
</script>


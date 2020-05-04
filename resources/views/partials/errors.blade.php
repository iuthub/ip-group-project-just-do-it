@if(count($errors->all()))
{{--    <div class="row">--}}
{{--        <div class="col-md-12">--}}
{{--            <div class="alert alert-danger">--}}
{{--                <ul>--}}
<div class="row" style="position: absolute;width: 100%; top: 0;left: 0;margin: 0 !important;z-index: 999;">
    <div class="col-md-12" style="padding: 0 0 !important">
        <div class="alert alert-danger" style="background: rgba(242, 222, 222, .7) !important;display: flex;justify-content: space-between;cursor: pointer;">
            <ul style="display: flex;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>
            <div style="padding: 0rem .5rem;border: 1px solid red; border-radius: 50%;">&times;</div>
            </div>
        </div>
    </div>
@endif

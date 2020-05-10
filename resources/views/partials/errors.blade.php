@if(count($errors->all()))
    <div class="row" style="position: relative;width: 100%; top: 0;left: 0;margin: 0 !important;z-index: 999;">
        <div class="col-md-12" style="padding: 0 0 !important">
            <div class="alert alert-danger"
                 style="background: rgba(242, 222, 222, .7) !important;display: flex;justify-content: space-between;cursor: pointer; margin-bottom: 0;">
                <ul style="display: flex;margin-bottom: 0;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <div style="padding: 0rem .5rem;">&times;</div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('.alert-danger').on('click', () => {
            $('.alert-danger').fadeOut(1000);
        })
    </script>
@endif

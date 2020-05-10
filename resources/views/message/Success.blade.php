@if(Session::has('info'))
    <div class="row" style="position: relative;width: 100%; top: 0;left: 0;margin: 0 !important;z-index: 999;">
        <div class="col-md-12" style="padding: 0 0 !important">
            <div class="alert alert-success"
                 style="display: flex;justify-content: space-between;cursor: pointer;margin-bottom: 0;">
                <ul style="display: flex;list-style-type: none;margin-bottom: 0;">
                    <li>{{ Session::get('info') }}</li>
                </ul>
                <div style="padding: 0rem .5rem;">&times;</div>

            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('.alert-success').on('click', () => {
            $('.alert-success').fadeOut(1000);
        })
    </script>
@endif
@if(Session::has('status'))
    <div class="row" style="position: relative;width: 100%; top: 0;left: 0;margin: 0 !important;z-index: 999;">
        <div class="col-md-12" style="padding: 0 0 !important">
            <div class="alert alert-success"
                 style="display: flex;justify-content: space-between;cursor: pointer;margin-bottom: 0;">
                <ul style="display: flex;list-style-type: none;margin-bottom: 0;">
                    <li>{{ Session::get('status') }}</li>
                </ul>
                <div style="padding: 0rem .5rem;">&times;</div>

            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('.alert-success').on('click', () => {
            $('.alert-success').fadeOut(1000);
        })
    </script>
@endif

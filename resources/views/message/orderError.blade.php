@if($errors->any())
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-danger">
                <ul>
                    <li>{{ $errors->first() }}</li>
                </ul>
            </div>
        </div>
    </div>
@endif
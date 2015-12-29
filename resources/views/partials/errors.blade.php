@if(count($errors) > 0)
<div class="container">
    <div class="row">
        <br>
        <div class="col s12 l6 offset-l3 m8 offset-m2">
            <div class="card red lighten-2">
                <div class="card-content white-text">
                    <div class="card-title">Something wrong!</div>
                    <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

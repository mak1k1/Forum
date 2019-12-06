@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        <strong>Success! </strong>{{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span>&times;</span>
        </button>
    </div>
@endif